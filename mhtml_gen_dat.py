#!/usr/bin/env python3

# generate an index.dat file (for scrapbook) from MHTML file

import os
import sys
import string
import re
from datetime import datetime
import email.header
import shutil
import pdb

TEMPLATE = """id	%(id)s
create	%(id)s
modify	%(id)s
type	
title	%(title)s
chars	UTF-8
icon	favicon.ico.bin
source	%(url)s
comment	
lock	
folder 
container	
exported	2022-03-11T08:08:48.380Z
"""

def parse_header(line):
    line = line.strip()
    if line.startswith("Subject: "):
        # e.g.  Subject: =?utf-8?Q?Mythology=20Episodes=20Database=20=C2=AB=20EatTheCorn.com?=
        titles = email.header.decode_header(line[len('Subject: '):])
        title, encoding = titles[0]
        if encoding:
            try:
                return 'title', title.decode(encoding)
            except UnicodeDecodeError:
                return 'title', None
        else:
            return 'title', title
    elif line.startswith("Date: "):
        # e.g. Date: Sun, 3 Jan 2021 14:25:37 -0000
        s = line[6:]
        d = datetime.strptime(s, "%a, %d %b %Y %H:%M:%S -0000")
        ds = d.strftime("%Y%m%d%H%M%S")
        return 'id', ds
    elif line.startswith("Snapshot-Content-Location: "):
        start = len("Snapshot-Content-Location: ")
        url = line[start:]
        return 'url', url
    else:
        return None, None

HEADER_RE = "^[A-Z][A-Za-z-]: "
def is_mime_header_line(line):
    #return re.search(HEADER_RE, line)
    parts = line.split(":")
    return len(parts) > 1
    

def parse_mhtml_headers(mhtml_filename):
    count = 0
    article = dict()

    lines = []
    for line in open(mhtml_filename):
        if line.startswith("-----"):
            break
        
        if is_mime_header_line(line):
            # current line is a MIME header
            header = ''.join(lines)
            key, value = parse_header(header)
            if key:
                article[key] = value
            lines.clear()
                
        lines.append(line)

    return article


def gen_index_dat(mhtml_filename, article):
    basename = os.path.splitext(mhtml_filename)[0]

    if article['title']:
        # in case decode 'Subject:' failed
        article['title'] = basename

    dirname = basename + "_files"            
    if not os.path.isdir(dirname):
        print("\n" + TEMPLATE % article)
        return False

    output_filename = os.path.join(dirname, 'index.dat')
    if os.path.isfile(output_filename):
        print("\n" + TEMPLATE % article)
        return False

    with open(output_filename, 'w') as fo:
        print("writing to index.dat...")
        fo.write(TEMPLATE % article)
        return True
            

if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Generate index.dat (for scrapbook) from MHTML files\n")
        print("Usage: %s foo.mhtml bar.mhtml...")

    for fn in sys.argv[1:]:
        basename, extname = os.path.splitext(fn)
        if extname.lower() != '.mhtml':
            print("%s: skipped\n" % fn)
        else:
            print("%s: processing..." % fn)
            article = parse_mhtml_headers(fn)
            ok = gen_index_dat(fn, article)

            if True:
                html_file = basename + '.html'
                files_dir = basename + "_files"
                #pdb.set_trace()
                if os.path.isdir(files_dir) and os.path.isfile(html_file):
                    shutil.move(html_file, os.path.join(files_dir, "index.html"))
            print("done")
