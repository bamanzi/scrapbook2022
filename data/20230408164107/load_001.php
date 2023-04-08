/* Code tidied up by ScrapBook */
pre, .mw-code { white-space: pre; }
.mw-body-content a.external[href^="http://wiki.archlinux.org"], .mw-body-content a.external[href^="https://wiki.archlinux.org"] { background: transparent none repeat scroll 0% 0%; padding-right: 0px; }
span.archwiki-template-pkg, span.archwiki-template-man { font-family: monospace,monospace; }
div.archwiki-template-box { padding: 5px; border: thin solid black; margin: 0.5em 0px; overflow: hidden; }
div.archwiki-template-box.archwiki-template-box-note { background-color: rgb(221, 221, 255); border-color: rgb(187, 187, 221); }
div.archwiki-template-box.archwiki-template-box-warning { background-color: rgb(255, 221, 221); border-color: rgb(221, 187, 187); }
div.archwiki-template-box.archwiki-template-box-tip { background-color: rgb(221, 255, 221); border-color: rgb(187, 221, 187); }
div.archwiki-template-message { position: relative; overflow: hidden; min-height: 4.6em; margin-bottom: 1em; background-color: rgb(249, 250, 255); border: 1px solid rgb(215, 223, 227); padding: 0px 100px; text-align: center; }
div.archwiki-template-message > p > a { display: block; position: absolute; top: 5px; }
div.archwiki-template-message > p > a:first-of-type { left: 26px; }
div.archwiki-template-message > p > a:last-of-type { right: 26px; }
div.archwiki-template-message > div { font-size: 90%; }
div.archwiki-template-meta-related-articles-start { float: right; clear: right; width: 25%; margin: 0px 0px 0.5em 0.5em; }
div.archwiki-template-meta-related-articles-start > p { background: rgb(51, 51, 51) none repeat scroll 0% 0%; color: white; padding: 0.2em; border-bottom: 5px solid rgb(0, 136, 204); margin: 0px; text-align: center; font-weight: bold; }
div.archwiki-template-meta-related-articles-start > ul { list-style-type: none; list-style-image: none; margin: 0px; padding: 0.3em; }
div.archwiki-template-meta-related-articles-start > ul > li { padding: 0.4em 0px; line-height: 1; }
@media screen and (min-width: 721px) {
}
.mw-body-content h2 { font-size: 150%; }
.mw-body-content h3 { font-size: 128%; }
.mw-body-content h4 { font-size: 116%; }
body { counter-reset: h2-section h3-section h4-section h5-section h6-section; }
h2 > .mw-headline { counter-increment: h2-section; }
h3 > .mw-headline { counter-increment: h3-section; }
h4 > .mw-headline { counter-increment: h4-section; }
h2 > .mw-headline::before { content: counter(h2-section, decimal); }
h3 > .mw-headline::before { content: counter(h2-section, decimal) "." counter(h3-section, decimal); }
h4 > .mw-headline::before { content: counter(h2-section, decimal) "." counter(h3-section, decimal) "." counter(h4-section, decimal); }
h2 > .mw-headline::before, h3 > .mw-headline::before, h4 > .mw-headline::before, h5 > .mw-headline::before, h6 > .mw-headline::before { color: rgb(107, 62, 38); font-style: italic; margin-right: 1ex; }
.skin-vector-2022 .sidebar-toc .sidebar-toc-numb { display: inline; padding-right: 0.5em; }
body:not(.page-Main_page) #bodyContent { display: flex; flex-direction: column; }
body:not(.page-Main_page) #catlinks { order: -1; margin: 0.5em 0px 1em; }
body:not(.page-Main_page) p:first-child, .archwiki-template-meta-related-articles-start + p { margin-top: 0px; }
@keyframes pacman-jaw-top {
0%, 100% { transform: rotate(-45deg); }
50% { transform: rotate(-80deg); }
}
@keyframes pacman-jaw-bottom {
0%, 100% { transform: rotate(-45deg); }
50% { transform: rotate(0deg); }
}
@keyframes pacman-food-translation {
0% { transform: translateX(60%); }
100% { transform: translateX(-40%); }
}
@media screen {
}
