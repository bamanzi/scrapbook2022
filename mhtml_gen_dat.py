#!/usr/bin/env python3

# generate an index.dat file (for scrapbook) from MHTML file

import os
import sys
import string
import re
from datetime import datetime
import urllib.parse
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
folder	%(folder)s
container	
exported	%(export_time)s
"""

def parse_header(line):
    line = line.strip()
    if line.startswith("Subject: "):
        # e.g.  Subject: =?utf-8?Q?Mythology=20Episodes=20Database=20=C2=AB=20EatTheCorn.com?=
        titles = email.header.decode_header(line[len('Subject: '):])
        title, encoding = titles[0]
        if encoding:
            try:
                return { 'title': title.decode(encoding) }
            except UnicodeDecodeError:
                return { 'title': None }
        else:
            return { 'title': title }
    elif line.startswith("Date: "):
        # e.g. Date: Sun, 3 Jan 2021 14:25:37 -0000
        s = line[6:]
        dt = datetime.strptime(s, "%a, %d %b %Y %H:%M:%S -0000")
        
        id_str = dt.strftime("%Y%m%d%H%M%S")
        # 2022-03-11T08:08:48.380Z
        export_time = dt.strftime('%Y-%m-%dT%H:%M:%S.000Z')
        return  { 'id': id_str, 'export_time': export_time }
    elif line.startswith("Snapshot-Content-Location: "):
        start = len("Snapshot-Content-Location: ")
        url = line[start:]
        return { 'url': url }
    else:
        return {}

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
            props = parse_header(header)
            for key, value in props.items():
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
        fo.write(TEMPLATE % article)
        return True


def copy_index_html(basename, target_dir):
    """ Copy `foobar.html` (converted by Mozilla Archive Format) to `foobar_files/index.html`.

    And remove all occcurences of `foobar_files/` in target file (`foobar_files/index.html`).
    """
    source_file = basename + '.html'
    
    files_dir_q = urllib.parse.quote(basename + "_files")
    # gotchar: '()' shouldn't be quoted
    files_dir_q = files_dir_q.replace('%28', '(').replace('%29', ')').replace('%26', '&amp;')
    
    target_file = os.path.join(target_dir, 'index.html')
    with open(source_file) as fin, open(target_file, 'w') as fout:
        while True:
            line = fin.readline()
            if not line:
                break        
            line_t = line.replace(files_dir_q + "/", "")
            fout.write(line_t)
    shutil.move(source_file, os.path.join(target_dir, "index.html.bak"))    
    print("  index.html.bak %d" % os.stat(target_file + '.bak').st_size)
    print("  index.html     %d" % os.stat(target_file).st_size)


if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Generate index.dat (for scrapbook) from MHTML files\n")
        print("Usage: %s foo.mhtml bar.mhtml...")

    folder = os.path.split(os.getcwd())[1]
    for fn in sys.argv[1:]:
        basename, extname = os.path.splitext(fn)
        files_dir = basename + "_files"
        
        if extname.lower() != '.mhtml':
            print(">>> %s: skipped (not mhtml file)\n" % fn)
        elif not os.path.exists(files_dir):
            print('>>> %s: skipped (..._files dir not exist)\n' % fn)
        else:
            print(">>> %s" % fn)
            article = parse_mhtml_headers(fn)
            article['folder'] = folder

            print("  - generating index.dat")
            ok = gen_index_dat(fn, article)

            if True:
                html_file = basename + '.html'
                #pdb.set_trace()
                if os.path.isdir(files_dir) and os.path.isfile(html_file):
                    print("  - convert xxx.html to xxx_files/index.html")
                    copy_index_html(basename, files_dir)
            print("done")
