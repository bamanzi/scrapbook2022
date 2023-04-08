/* Code tidied up by ScrapBook */
@media screen {
  html { height: 100%; }
  .ext-darkmode-link::before { content: "☾"; display: inline-block; }
  .skin-vector-2022 .ext-darkmode-link::before { display: none; }
}
@-moz-document url-prefix("") {
  body { background: rgb(0, 0, 0) none repeat scroll 0% 0%; }
}
@-moz-document url-prefix("") {
  @supports (overflow-clip-margin:1px) {
  body { background: rgb(255, 255, 255) none repeat scroll 0% 0%; }
}
}
.mw-ui-button { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); display: inline-block; box-sizing: border-box; margin: 0px; border: 1px solid rgb(162, 169, 177); border-radius: 2px; cursor: pointer; vertical-align: middle; font-family: inherit; font-size: 1em; font-weight: bold; line-height: 1.28571em; text-align: center; -moz-appearance: none; }
.mw-ui-button:not(.mw-ui-icon-element) { min-height: 32px; min-width: 4em; max-width: 28.75em; padding: 5px 12px; }
.mw-ui-button:not(:disabled) { transition-property: background-color, color, border-color, box-shadow; transition-duration: 100ms; }
.mw-ui-button:visited:not(:disabled) { color: rgb(32, 33, 34); }
.mw-ui-button:hover:not(:disabled) { background-color: rgb(255, 255, 255); color: rgb(64, 66, 68); border-color: rgb(162, 169, 177); }
.mw-ui-button:focus:not(:disabled) { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; outline-width: 0px; }
.mw-ui-button:focus:not(:disabled)::-moz-focus-inner { border-color: transparent; padding: 0px; }
.mw-ui-button:active:not(:disabled), .mw-ui-button.is-on:not(:disabled) { background-color: rgb(200, 204, 209); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button:disabled { background-color: rgb(200, 204, 209); color: rgb(255, 255, 255); border-color: rgb(200, 204, 209); cursor: default; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) { color: transparent ! important; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) span { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
@media all and (max-width: 1000px) {
  .mw-ui-button.mw-ui-icon-element span { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
}
.mw-ui-button.mw-ui-quiet, .mw-ui-button.mw-ui-quiet.mw-ui-progressive, .mw-ui-button.mw-ui-quiet.mw-ui-destructive { background-color: transparent; color: rgb(32, 33, 34); border-color: transparent; font-weight: bold; }
.mw-ui-button.mw-ui-quiet:not(.mw-ui-icon-element), .mw-ui-button.mw-ui-quiet.mw-ui-progressive:not(.mw-ui-icon-element), .mw-ui-button.mw-ui-quiet.mw-ui-destructive:not(.mw-ui-icon-element) { min-height: 32px; }
input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:hover, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:hover, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:hover { background-color: rgba(0, 24, 73, 0.027); color: rgb(32, 33, 34); border-color: transparent; }
input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:focus, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:focus, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:focus { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; }
input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:active, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:active, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:active { background-color: rgba(0, 36, 73, 0.082); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button.mw-ui-quiet:disabled, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled, .mw-ui-button.mw-ui-quiet:disabled:hover, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:hover, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:hover, .mw-ui-button.mw-ui-quiet:disabled:active, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:active, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:active { background-color: transparent; color: rgb(114, 119, 125); border-color: transparent; }
.mw-ui-button.mw-ui-progressive:not(:disabled) { background-color: rgb(51, 102, 204); color: rgb(255, 255, 255); border-color: rgb(51, 102, 204); }
.mw-ui-button.mw-ui-progressive:hover:not(:disabled) { background-color: rgb(68, 127, 245); border-color: rgb(68, 127, 245); }
.mw-ui-button.mw-ui-progressive:focus:not(:disabled) { box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; }
.mw-ui-button.mw-ui-progressive:active:not(:disabled), .mw-ui-button.mw-ui-progressive.is-on:not(:disabled) { background-color: rgb(42, 75, 141); border-color: rgb(42, 75, 141); box-shadow: none; }
.mw-ui-button.mw-ui-progressive:disabled { background-color: rgb(200, 204, 209); color: rgb(255, 255, 255); border-color: rgb(200, 204, 209); }
.mw-ui-button.mw-ui-progressive.mw-ui-quiet { color: rgb(51, 102, 204); background-color: transparent; border-color: transparent; }
input[type="checkbox"]:hover + .mw-ui-button.mw-ui-progressive.mw-ui-quiet, .mw-ui-button.mw-ui-progressive.mw-ui-quiet:hover { background-color: rgba(52, 123, 255, 0.2); border-color: transparent; color: rgb(68, 127, 245); }
input[type="checkbox"]:focus + .mw-ui-button.mw-ui-progressive.mw-ui-quiet, .mw-ui-button.mw-ui-progressive.mw-ui-quiet:focus { color: rgb(51, 102, 204); border-color: rgb(51, 102, 204); }
input[type="checkbox"]:active + .mw-ui-button.mw-ui-progressive.mw-ui-quiet, .mw-ui-button.mw-ui-progressive.mw-ui-quiet:active { color: rgb(255, 255, 255); background-color: rgb(42, 75, 141); border-color: rgb(42, 75, 141); }
a.mw-ui-button { text-decoration: none; }
a.mw-ui-button:hover, a.mw-ui-button:focus { text-decoration: none; }
.mw-ui-icon { font-size: initial; position: relative; display: inline-block; box-sizing: content-box ! important; width: 1.25em; height: 1.25em; min-width: 1.25em; min-height: 1.25em; flex-basis: 1.25em; vertical-align: middle; line-height: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; -moz-appearance: none; background-color: transparent; margin: 0px; padding: 0px; }
.mw-ui-icon:not(.mw-ui-button) { border: 0px none; }
.mw-ui-icon::before { content: ""; display: block; width: 100%; height: 100%; min-width: 1.25em; min-height: 1.25em; background-repeat: no-repeat; background-size: 1.25em 1.25em; background-position: center center; }
.mw-ui-icon + span:not(:empty) { margin-left: 8px; }
.mw-ui-icon-element { border-radius: 2px; padding: 0.75em; transition: background-color 100ms ease 0s; color: transparent; }
.mw-ui-icon-element:focus, .mw-ui-icon-element:active, .mw-ui-icon-element:visited { color: transparent; }
.mw-ui-icon-element:active { background-color: rgba(0, 0, 0, 0.03); }
@media not all {
  .mw-ui-icon-element:hover:not(.disabled) { background-color: rgba(0, 0, 0, 0.03); }
}
.mw-ui-icon-small { width: 1em; height: 1em; min-width: 1em; min-height: 1em; flex-basis: 1em; line-height: 1em; }
.mw-ui-icon-small::before { content: ""; display: block; width: 100%; height: 100%; min-width: 1em; min-height: 1em; background-repeat: no-repeat; background-size: 1em 1em; background-position: center center; }
@media all and (min-width: 1000px) {
}
.mw-ui-icon-wikimedia-language-progressive::before { background-image: linear-gradient(transparent, transparent), url("language.svg"); }
.mw-ui-icon-wikimedia-listBullet::before { background-image: linear-gradient(transparent, transparent), url("listBullet.svg"); }
.mw-ui-icon-wikimedia-ellipsis::before { background-image: linear-gradient(transparent, transparent), url("ellipsis.svg"); }
.mw-ui-icon-wikimedia-logIn::before { background-image: linear-gradient(transparent, transparent), url("logIn.svg"); }
.mw-ui-icon-wikimedia-search::before { background-image: linear-gradient(transparent, transparent), url("search_001.svg"); }
.mw-ui-icon-wikimedia-expand::before { background-image: linear-gradient(transparent, transparent), url("expand.svg"); }
.mw-ui-icon-wikimedia-userAdd::before { background-image: linear-gradient(transparent, transparent), url("userAdd.svg"); }
@media not all {
  *, ::before, ::after { animation-delay: -0.01ms ! important; animation-duration: 0.01ms ! important; animation-iteration-count: 1 ! important; scroll-behavior: auto ! important; transition-duration: 0ms ! important; }
}
body { margin: 0px; }
main { display: block; }
@supports (text-decoration:underline dotted) {
  abbr[title] { border-bottom: 0px none; text-decoration: underline dotted; }
}
pre, code, tt, kbd, samp { font-family: monospace,monospace; }
sub, sup { line-height: 1; }
img { border: 0px none; }
button, input, optgroup, select, textarea { margin: 0px; }
button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner { border-style: none; padding: 0px; }
@media screen {
  html, body { height: 100%; }
  :focus { outline-color: rgb(51, 102, 204); }
  html { font-size: 100%; }
  html, body { font-family: sans-serif; }
  ul { list-style-image: url("bullet-icon.svg"); }
  pre, .mw-code { line-height: 1.3; }
  .mw-jump-link:not(:focus) { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
  .mw-body h1, .mw-body-content h1, .mw-body-content h2 { margin-bottom: 0.25em; padding: 0px; font-family: "Linux Libertine","Georgia","Times",serif; line-height: 1.3; }
  .mw-body h1:lang(ja), .mw-body-content h1:lang(ja), .mw-body-content h2:lang(ja), .mw-body h1:lang(he), .mw-body-content h1:lang(he), .mw-body-content h2:lang(he), .mw-body h1:lang(ko), .mw-body-content h1:lang(ko), .mw-body-content h2:lang(ko) { font-family: sans-serif; }
  .mw-body h1:lang(my), .mw-body-content h1:lang(my), .mw-body-content h2:lang(my) { line-height: normal; }
  .mw-body h1, .mw-body-content h1 { font-size: 1.8em; }
  .vector-body { font-size: calc(1em * 0.875); line-height: 1.6; }
  .vector-body #siteSub { font-size: 12.8px; }
  .vector-body h2 { margin-top: 1em; font-size: 1.5em; }
  .vector-body h3, .vector-body h4, .vector-body h5, .vector-body h6 { margin-top: 0.3em; margin-bottom: 0px; padding-bottom: 0px; line-height: 1.6; }
  .vector-body h3 { font-size: 1.2em; }
  .vector-body h3, .vector-body h4 { font-weight: bold; }
  .vector-body h4, .vector-body h5, .vector-body h6 { font-size: 100%; }
  .vector-body p { margin: 0.5em 0px; }
  .mw-parser-output a.external { background-image: url("link-external-small-ltr-progressive.svg"); background-position: right center; background-repeat: no-repeat; background-size: 0.857em auto; padding-right: 1em; }
  .mw-indicators { font-size: 0.875em; line-height: 1.6; position: relative; float: right; }
  #siteNotice { font-size: 0.8em; margin: 24px 0px; position: relative; text-align: center; }
  .mw-portlet .vector-menu-heading { display: none; }
  .mw-portlet ul { list-style: outside none none; margin: 0px; }
  .vector-menu-dropdown { position: relative; }
  .vector-menu-dropdown .vector-menu-content { position: absolute; top: 100%; left: -1px; opacity: 0; height: 0px; visibility: hidden; overflow: hidden; min-width: 100%; margin: 0px; padding: 0px; z-index: 3; }
  .vector-menu-dropdown .vector-menu-content-list { list-style: outside none none; }
  .vector-menu-dropdown .mw-list-item { padding: 0px; margin: 0px; }
  .vector-menu-dropdown .mw-list-item a { display: block; white-space: nowrap; cursor: pointer; }
  .vector-menu-dropdown .selected a, .vector-menu-dropdown .selected a:visited { color: rgb(32, 33, 34); text-decoration: none; }
  .vector-menu-checkbox { cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 1; opacity: 0; width: 100%; height: 100%; margin: 0px; padding: 0px; display: none; }
  .vector-menu-checkbox:checked ~ .vector-menu-content { opacity: 1; visibility: visible; height: auto; }
  :not(:checked) > .vector-menu-checkbox { display: block; }
  .vector-menu-checkbox:focus + .vector-menu-heading { outline: 1px dotted; }
  .vector-menu-portal { margin: 0px 0.6em 0px 0.7em; padding: 0.25em 0px; direction: ltr; }
  .vector-menu-portal .vector-menu-heading { display: block; color: rgb(84, 89, 93); margin: 0.5em 0px 0px 0.666667em; border: 0px none; padding: 0.25em 0px; font-size: 0.75em; font-weight: normal; cursor: default; }
  .vector-menu-portal .vector-menu-content { margin-left: 0.5em; padding-top: 0px; }
  .vector-menu-portal .vector-menu-content ul { list-style: outside none none; margin: 0px; padding-top: 0.3em; }
  .vector-menu-portal .vector-menu-content li { margin: 0px; padding: 0.25em 0px; font-size: 0.75em; line-height: 1.125em; overflow-wrap: break-word; }
  .vector-menu-portal .vector-menu-content li a { color: rgb(51, 102, 204); }
  .vector-menu-portal .vector-menu-content li a:visited { color: rgb(121, 92, 178); }
  .vector-search-box-inner { position: relative; height: 100%; }
  .vector-search-box-input { background-color: rgba(255, 255, 255, 0.5); color: rgb(0, 0, 0); width: 100%; height: 2.15385em; box-sizing: border-box; border: 1px solid rgb(162, 169, 177); border-radius: 2px; padding: 5px 2.15385em 5px 0.4em; box-shadow: 0px 0px 0px 1px transparent inset; font-family: inherit; font-size: 0.8125em; direction: ltr; transition-property: border-color, box-shadow; transition-duration: 250ms; -moz-appearance: textfield; }
  .vector-search-box-inner:hover .vector-search-box-input { border-color: rgb(114, 119, 125); }
  .vector-search-box-input:focus, .vector-search-box-inner:hover .vector-search-box-input:focus { outline: 0px none; border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset; }
  .vector-search-box-input::-moz-placeholder { color: rgb(114, 119, 125); opacity: 1; }
  .vector-search-box-input::placeholder { color: rgb(114, 119, 125); opacity: 1; }
  .searchButton { background-color: transparent; position: absolute; top: 1px; bottom: 1px; right: 1px; min-width: 28px; width: 2.15385em; border: 0px none; padding: 0px; cursor: pointer; font-size: 0.8125em; direction: ltr; text-indent: -99999px; white-space: nowrap; overflow: hidden; z-index: 1; }
  .searchButton[name="go"] { background: transparent url("search.svg") no-repeat scroll center center / 1.23077em auto; opacity: 0.67; }
  .search-toggle { display: block; float: right; }
  .vector-search-box-collapses > div { display: none; }
  .mw-footer { direction: ltr; }
  .mw-footer ul { list-style: outside none none; margin: 0px; padding: 0px; }
  .mw-footer li { color: rgb(32, 33, 34); margin: 0px; padding: 0.5em 0px; font-size: 0.75em; }
  #footer-info li { line-height: 1.4; }
  #footer-places li { float: left; margin-right: 1em; line-height: 2; }
}
@media screen and (min-width: 1000px) {
  .search-toggle { display: none; }
}
@media screen and (min-width: 1000px) {
  .vector-search-box-collapses > div { display: block; }
}
@media print {
  .toc, body { padding: 10px; font-family: "Linux Libertine","Georgia","Times",serif; }
  .printfooter, .mw-footer, .thumb, figure, table, ol, dl, ul, h3, h4, h5, h6 { font-family: sans-serif; }
  img { font-family: "Linux Libertine","Georgia","Times",serif; }
  .mw-body a:not(.image) { border-bottom: 1px solid rgb(170, 170, 170); }
  .firstHeading { font-size: 25pt; line-height: 28pt; margin-bottom: 20px; padding-bottom: 5px; }
  .firstHeading, h2 { overflow: hidden; border-bottom: 2px solid rgb(0, 0, 0); }
  h3, h4, h5, h6 { margin: 30px 0px 0px; }
  h2, h3, h4, h5, h6 { padding: 0px; position: relative; }
  h2 { font-size: 18pt; line-height: 24pt; margin-bottom: 0.25em; }
  h3 { font-size: 14pt; line-height: 20pt; }
  h4, h5, h6 { font-size: 12pt; line-height: 16pt; }
  p { font-size: 12pt; line-height: 16pt; margin-top: 5px; text-align: justify; }
  p::before { content: ""; display: block; width: 120pt; overflow: hidden; }
  ol, ul { margin: 10px 0px 0px 1.6em; padding: 0px; }
  ol li, ul li { padding: 2px 0px; font-size: 12pt; }
  #mw-navigation, .noprint, .mw-jump-link, .mw-portlet-lang, .toc .tocnumber, .mw-checkbox-hack-checkbox, .mw-checkbox-hack-button { display: none; }
  .printfooter { margin-top: 10px; border-top: 3px solid rgb(0, 0, 0); padding-top: 10px; font-size: 10pt; clear: both; }
  .mw-footer { margin-top: 12px; border-top: 1px solid rgb(238, 238, 238); padding-top: 5px; }
  #footer-info { margin: 0px; padding: 0px; }
  #footer-info li { color: rgb(153, 153, 153); list-style: outside none none; display: block; padding-bottom: 10px; font-size: 10pt; }
  #footer-info li a { color: rgb(153, 153, 153) ! important; }
  #footer-info-lastmod { color: rgb(0, 0, 0); font-size: 12pt; font-weight: bold; }
}
@media screen {
  body { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); overflow-y: scroll; }
  .mw-body, .parsoid-body { direction: ltr; }
  .mw-body { border-top: 1px solid transparent; margin-top: -1px; padding: 0.5em 0.5em 1.5em; }
  .mw-body .firstHeading { overflow: visible; margin-bottom: 0px; }
  .mw-header { position: relative; z-index: 4; }
  .mw-body-content { margin-top: 16px; }
  .mw-body, #mw-data-after-content, .mw-footer { margin-left: 0px; }
  .mw-indicators { z-index: 1; }
  .mw-body-header::after, .mw-body-subheader::after { clear: both; content: ""; display: block; }
  #siteSub { display: none; }
  .vector-body { position: relative; z-index: 0; }
  .vector-body #siteSub { margin-top: 8px; }
  #left-navigation { float: left; margin-left: -8px; }
  #right-navigation { float: right; margin-right: -8px; }
  #right-navigation .vector-menu-content { left: auto; right: -1px; }
  .mw-footer { border-top: 1px solid rgb(162, 169, 177); padding: 0.75em; }
  .mw-page-container { position: relative; z-index: 0; max-width: 94.625em; min-height: 100%; margin-left: auto; margin-right: auto; padding: 0.05px 1em; background-color: rgb(255, 255, 255); min-width: 26.25em; }
  .skin--responsive .mw-page-container { min-width: auto; }
  .mw-content-container { max-width: 60em; }
  .mw-article-toolbar-container { display: flow-root; border-bottom: 1px solid rgb(234, 236, 240); }
  .mw-article-toolbar-container > div { font-size: 0.8125em; }
  .mw-article-toolbar-container .mw-portlet-views { display: none; }
  .mw-article-toolbar-container .vector-more-collapsible-item { display: block; }
  @keyframes search-loader-progress-bar {
0% { background-size: 0px 2px; background-position: -10% 0px; }
30% { background-size: 30% 2px; background-position: -10% 0px; }
70% { background-size: 30% 2px; background-position: 110% 0px; }
100% { background-size: 0px 2px; background-position: 110% 0px; }
}
  .vector-search-box { font-size: calc(1em * 0.875); flex-grow: 1; }
  .vector-search-box > div { max-width: 35.7143em; }
  .vector-search-box-vue .vector-search-box-input, .vector-search-box-vue .searchButton { font-size: inherit; }
  .vector-search-box-vue .vector-search-box-input { height: 32px; }
  .vector-search-box-vue .searchButton { background-size: 1.42857em auto; }
  .client-js .vector-search-box-vue .vector-search-box-input { padding-left: 36px; padding-right: 8px; }
  .client-js .vector-search-box-vue .searchButton { pointer-events: none; inset: 0px auto 0px 1px; width: 36px; opacity: 0.51; }
  .client-js .vector-search-box-vue .vector-search-box-input:focus ~ .searchButton { opacity: 0.87; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail > div { max-width: 37.4286em; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .searchButton { left: 25px; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .vector-search-box-input { margin-left: 24px; width: calc(100% - 24px); }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail:not(.vector-search-box-auto-expand-width) .vector-search-box-input, .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .vector-search-box-input:focus { margin-left: 0px; padding-left: calc(36px + 24px); width: 100%; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail:not(.vector-search-box-auto-expand-width) .vector-search-box-input ~ .searchButton, .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .vector-search-box-input:focus ~ .searchButton { left: 14px; }
  .mw-checkbox-hack-checkbox { display: none; }
  .mw-checkbox-hack-button { display: inline-block; cursor: pointer; }
  .mw-sidebar, .sidebar-toc, .sidebar-toc::after { width: 220px; margin-left: 0px; }
  .sidebar-toc, .sidebar-toc::after { margin-left: -0.75em; }
  .mw-sidebar { box-sizing: border-box; padding: 12px 19px 12px 9px; background-image: none; background-color: rgb(248, 249, 250); }
  #mw-sidebar-checkbox:not(:checked) ~ .vector-sidebar-container .mw-sidebar { display: none; }
  .mw-sidebar #p-navigation .vector-menu-heading { display: none; }
  #mw-sidebar-button::before { opacity: 0.67; background-image: url("data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2220%22 height=%2220%22 viewBox=%220 0 20 20%22%3E %3Ctitle%3E chevron %3C/title%3E %3Cpath d=%22m9 2 1.3 1.3L3.7 10l6.6 6.7L9 18l-8-8 8-8zm8.5 0L19 3.3 12.2 10l6.7 6.7-1.4 1.3-8-8 8-8z%22/%3E %3C/svg%3E"); }
  #mw-sidebar-checkbox:not(:checked) ~ .mw-header #mw-sidebar-button::before { background-image: url("data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2220%22 height=%2220%22 viewBox=%220 0 20 20%22%3E %3Ctitle%3E menu %3C/title%3E %3Cpath d=%22M1 3v2h18V3zm0 8h18V9H1zm0 6h18v-2H1z%22/%3E %3C/svg%3E"); }
  #mw-sidebar-button:hover::before { opacity: 1; }
  #p-lang-btn.mw-portlet-empty { display: none; }
  .vector-user-links { display: flex; align-items: center; position: relative; justify-content: flex-end; flex-shrink: 1; font-size: 0.875em; }
  .vector-user-links .mw-ui-button { display: flex; align-items: center; }
  .vector-user-links .mw-list-item { margin: 0px; }
  .vector-user-menu .vector-menu-content { left: auto; right: 0px; min-width: 200px; }
  .vector-user-menu-more .vector-menu-content-list, .vector-user-menu-overflow .vector-menu-content-list { display: flex; align-items: center; }
  .vector-user-menu-more a:not(.mw-ui-button):not(.mw-echo-notifications-badge), .vector-user-menu-overflow a:not(.mw-ui-button):not(.mw-echo-notifications-badge) { margin: 0px 8px; }
  .vector-user-menu-anon-editor { min-height: 32px; display: flex; align-items: center; padding: 0px 12px; color: rgb(84, 89, 93); }
  .vector-user-menu-anon-editor:visited { color: rgb(51, 102, 204); }
  .vector-user-menu-anon-editor a::before { content: "("; }
  .vector-user-menu-anon-editor a::after { content: ")"; }
  .vector-user-menu-login { border-bottom: 1px solid rgb(234, 236, 240); }
  .mw-header { min-height: 3.125em; padding: 8px 0px; display: flex; flex-wrap: nowrap; align-items: center; }
  .mw-header #mw-sidebar-button { margin-right: 0.75em; }
  .mw-header-content, .mw-header-aside { display: flex; align-items: center; }
  .mw-header-aside { float: left; }
  .mw-header-content { flex-grow: 1; }
  .mw-footer-container { padding-top: 50px; padding-bottom: 82px; }
  .vector-menu-dropdown .vector-menu-heading, .mw-interlanguage-selector { display: flex; }
  .vector-menu-dropdown .vector-menu-heading::after, .mw-interlanguage-selector::after { content: ""; background: transparent url("arrow-down.svg") no-repeat scroll 100% 50%; width: 1.23077em; height: 1.23077em; }
  .vector-menu-dropdown .vector-menu-content { background-color: rgb(255, 255, 255); border: 1px solid rgb(162, 169, 177); box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1); transition-property: opacity; transition-duration: 100ms; }
  .vector-user-menu-logout a, .vector-user-menu-create-account a, .vector-user-menu-login a, .vector-menu-dropdown .mw-list-item a { min-height: 32px; display: flex; align-items: center; padding: 0px 12px; white-space: nowrap; color: rgb(51, 102, 204); }
  .vector-user-menu-logout a:visited, .vector-user-menu-create-account a:visited, .vector-user-menu-login a:visited, .vector-menu-dropdown .mw-list-item a:visited { color: rgb(51, 102, 204); }
  .vector-menu-tabs { float: left; }
  .vector-menu-tabs .mw-list-item a { color: rgb(51, 102, 204); }
  .vector-menu-tabs .mw-list-item a:focus, .vector-menu-tabs .mw-list-item a:hover { text-decoration: none; border-bottom: 1px solid; }
  .vector-menu-tabs .mw-list-item.selected a, .vector-menu-tabs .mw-list-item.selected a:visited { color: rgb(32, 33, 34); border-bottom: 1px solid; }
  .vector-menu-tabs .mw-list-item, .mw-article-toolbar-container .vector-menu-dropdown { float: left; white-space: nowrap; margin: 0px 8px; }
  .vector-menu-tabs .mw-list-item > a, .mw-article-toolbar-container .vector-menu-dropdown > a, .vector-menu-tabs .mw-list-item .vector-menu-heading, .mw-article-toolbar-container .vector-menu-dropdown .vector-menu-heading { display: inline-flex; position: relative; padding: 18px 0px 7px; margin-bottom: -1px; cursor: pointer; border-bottom: 1px solid transparent; max-height: 3.15385em; box-sizing: border-box; font-size: inherit; font-weight: normal; }
  .vector-menu-portal .vector-menu-heading { border-bottom: 1px solid rgb(200, 204, 209); }
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  .mw-table-of-contents-container { align-self: start; height: 100%; }
  .vector-sticky-toc-container { position: sticky; top: 0px; }
  .sidebar-toc { max-height: 75vh; padding: 20px 12px 20px calc(15px + 0.75em); box-sizing: border-box; overflow: auto; background-color: rgb(255, 255, 255); }
  .sidebar-toc .sidebar-toc-header { padding-bottom: 12px; }
  .sidebar-toc .sidebar-toc-title { color: rgb(84, 89, 93); font-size: 0.875em; margin: 0px; padding: 0px; border: 0px none; }
  .sidebar-toc .sidebar-toc-numb { display: none; }
  .sidebar-toc .sidebar-toc-toggle { display: none; position: absolute; top: 1px; left: calc(-1 * 1.834em - 1px); width: 1.834em; height: 1.834em; font-size: 0.75em; transition: all 100ms ease 0s; cursor: pointer; }
  .sidebar-toc .sidebar-toc-link { color: rgb(51, 102, 204); display: block; }
  .sidebar-toc .sidebar-toc-list-item-active > .sidebar-toc-link { color: rgb(32, 33, 34); font-weight: bold; width: calc(100% + 12px); }
  .sidebar-toc .sidebar-toc-text { padding: 4px 0px; }
  .sidebar-toc .sidebar-toc-contents, .sidebar-toc .sidebar-toc-list { margin: 0px; list-style: outside none none; line-height: 18px; }
  .sidebar-toc .sidebar-toc-list-item { display: block; position: relative; list-style-type: none; padding-left: 8px; }
  .sidebar-toc .sidebar-toc-list-item.sidebar-toc-level-1 { padding-left: 0px; }
  .sidebar-toc .sidebar-toc-list-item a { font-size: 0.875em; }
  .client-js .sidebar-toc .sidebar-toc-level-1 .sidebar-toc-list-item { display: none; }
  .client-js .sidebar-toc .sidebar-toc-toggle { display: block; }
  .client-js body.ltr .sidebar-toc .sidebar-toc-toggle { transform: rotate(-90deg); }
  #vector-toc-collapsed-button { display: none; float: left; margin-right: 4px; margin-left: -0.75em; padding: 7px 10px; background-color: rgb(255, 255, 255); }
  #vector-toc-collapsed-button:hover, #vector-toc-collapsed-button:active { background-color: rgb(248, 249, 250); }
  #vector-toc-collapsed-button, .sidebar-toc { z-index: 3; }
  .vector-toc-collapse-button, .vector-toc-uncollapse-button { display: none; border: 0px none; padding: 0px; background-color: transparent; color: rgb(51, 102, 204); cursor: pointer; }
  .vector-toc-collapse-button:hover, .vector-toc-uncollapse-button:hover { color: rgb(68, 127, 245); }
  .vector-toc-collapse-button::before, .vector-toc-uncollapse-button::before { content: "["; color: rgb(84, 89, 93); }
  .vector-toc-collapse-button::after, .vector-toc-uncollapse-button::after { content: "]"; color: rgb(84, 89, 93); }
}
@media screen and (min-width: 1000px) {
  .mw-page-container { padding-left: 2em; padding-right: 2em; }
}
@media screen and (min-width: 1200px) {
  .mw-page-container { padding-left: 2.5em; padding-right: 2.5em; }
}
@media screen and (min-width: 1000px) {
  .mw-page-container-inner { display: grid; width: 100%; grid-template: "header header header" min-content "sitenotice sitenotice sitenotice" min-content "sidebar gutter content" min-content "toc gutter content" 1fr "footer footer footer" min-content / 232px 20px minmax(0px, 1fr); }
  .mw-body { padding-left: 0px; }
  .mw-page-container-inner > #siteNotice, .vector-sitenotice-container { grid-area: sitenotice / sitenotice / sitenotice / sitenotice; }
  .mw-table-of-contents-container { grid-area: toc / toc / toc / toc; }
  .mw-header { grid-area: header / header / header / header; }
  .vector-sidebar-container { grid-area: sidebar / sidebar / sidebar / sidebar; }
  .mw-content-container { grid-area: content / content / content / content; }
  .mw-footer-container { grid-area: footer / footer / footer / footer; }
}
@media screen and (min-width: 1200px) {
  .mw-page-container-inner { grid-template-columns: 284px 20px minmax(0px, 1fr); }
}
@media screen and (min-width: 720px) {
  .mw-article-toolbar-container .mw-portlet-views:not(.emptyPortlet) { display: block; }
}
@media screen and (min-width: 720px) {
  .mw-article-toolbar-container .vector-more-collapsible-item { display: none; }
}
@media screen and (max-width: 719px) {
  .mw-article-toolbar-container .vector-has-collapsible-items { display: block; }
}
@media screen and (min-width: 1200px) {
  .mw-sidebar, .sidebar-toc, .sidebar-toc::after { width: 244px; margin-left: 0.75em; }
}
@media screen and (min-width: 1200px) {
  .sidebar-toc, .sidebar-toc::after { margin-left: 0px; }
}
@media screen and (max-width: 999px) {
  .mw-sidebar { width: 100%; }
}
@media screen and (min-width: 720px) {
  .vector-user-menu .user-links-collapsible-item { display: none; }
}
@media screen and (max-width: 719px) {
  .vector-user-menu-more .user-links-collapsible-item, .vector-user-menu-overflow .user-links-collapsible-item { display: none; }
}
@media screen and (min-width: 1200px) {
}
@media screen and (min-width: 1200px) {
  .mw-header .vector-search-box:not(.vector-search-box-auto-expand-width), html:not(.client-js) .mw-header .vector-search-box { padding-left: 24px; }
}
@media screen and (min-width: 1000px) {
  .mw-header .vector-search-box { margin-right: 12px; }
}
@media screen and (max-width: 999px) {
}
@media screen and (min-width: 1000px) {
}
@media screen and (min-width: 1200px) {
}
@media screen and (min-width: 1000px) {
}
@media screen and (min-width: 720px) {
}
@media screen and (min-width: 1000px) {
}
@media screen and (min-width: 1000px) {
}
@media screen and (min-width: 1000px) {
  .vector-toc-not-collapsed .vector-sticky-toc-container { padding-top: 1.5em; }
  .vector-toc-not-collapsed #mw-sidebar-checkbox:not(:checked) ~ .mw-table-of-contents-container .vector-sticky-toc-container { margin-top: 1.5em; }
}
@media screen and (min-width: 1000px) {
  .vector-toc-not-collapsed .sidebar-toc::after { content: ""; display: block; position: absolute; bottom: 0px; left: 0px; right: 0px; height: 30px; background: transparent linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255)) no-repeat scroll -12px center; pointer-events: none; }
}
@media screen and (max-width: 999px) {
  #vector-toc-collapsed-button { display: block; }
  .mw-table-of-contents-container.mw-sticky-header-element, .vector-sticky-toc-container { position: relative; }
  .mw-table-of-contents-container .sidebar-toc { display: none; position: absolute; margin: 0px; border: 1px solid rgb(162, 169, 177); }
  #vector-toc-collapsed-checkbox:checked ~ .mw-table-of-contents-container .sidebar-toc { display: block; }
  .mw-table-of-contents-container .sidebar-toc { top: calc(36px + 8px); left: -4px; }
  .vector-below-page-title #vector-toc-collapsed-button, .vector-below-page-title .sidebar-toc { position: fixed; }
  .vector-below-page-title #vector-toc-collapsed-button { top: 0px; left: 0px; margin: 0px; }
  .vector-below-page-title .sidebar-toc { top: 36px; left: 6px; }
}
@media screen and (min-width: 1000px) {
  @supports (display:grid) {
  .client-js .vector-toc-collapsed #vector-toc-collapsed-button { display: block; }
  .client-js .vector-toc-collapsed .mw-table-of-contents-container.mw-sticky-header-element, .client-js .vector-toc-collapsed .vector-sticky-toc-container { position: relative; }
  .client-js .vector-toc-collapsed .mw-table-of-contents-container .sidebar-toc { display: none; position: absolute; margin: 0px; border: 1px solid rgb(162, 169, 177); }
  .client-js .vector-toc-collapsed #vector-toc-collapsed-checkbox:checked ~ .mw-table-of-contents-container .sidebar-toc { display: block; }
  .client-js .vector-toc-collapsed .mw-table-of-contents-container { grid-area: content / content / content / content; }
  .client-js .vector-toc-collapsed .mw-table-of-contents-container .sidebar-toc { top: calc(36px + 8px); left: -0.75em; }
  body.vector-below-page-title.client-js:not(.vector-sticky-header-visible) .vector-toc-collapsed #vector-toc-collapsed-button, body.vector-below-page-title.client-js:not(.vector-sticky-header-visible) .vector-toc-collapsed .sidebar-toc { position: fixed; }
  body.vector-below-page-title.client-js:not(.vector-sticky-header-visible) .vector-toc-collapsed #vector-toc-collapsed-button { top: 0px; left: 0px; margin: 0px; }
  body.vector-below-page-title.client-js:not(.vector-sticky-header-visible) .vector-toc-collapsed .sidebar-toc { top: 36px; left: 6px; }
  .client-js .vector-toc-collapsed .vector-toc-uncollapse-button { display: inline-block; }
  .client-js .vector-toc-not-collapsed .vector-toc-collapse-button { display: inline-block; }
}
}
@media all {
  .mw-logo { display: flex; height: 100%; align-items: center; min-width: 13.875em; }
  .mw-logo-container { float: left; max-width: 120px; }
  .mw-logo-wordmark { display: block; margin: 0px auto; }
}
@media all and (min-width: 720px) {
}
@media all and (min-width: 720px) {
  .mw-logo-container { max-width: none; }
}
@media print {
  .vector-article-toolbar, #mw-sidebar-checkbox, .mw-header-aside > *:not(.mw-logo), .mw-header-content, #mw-panel-toc, #vector-sticky-header, #p-lang-btn, #footer { display: none; }
}
.mw-table-of-contents-container { display: none; }
@supports (display:grid) {
  .mw-table-of-contents-container { display: block; }
}
@media screen {
  .mw-parser-output a.extiw, .mw-parser-output a.external { color: rgb(51, 102, 204); }
  .mw-parser-output a.extiw:visited, .mw-parser-output a.external:visited { color: rgb(121, 92, 178); }
  .mw-parser-output a.extiw:active, .mw-parser-output a.external:active { color: rgb(250, 167, 0); }
  .plainlinks a.external { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  .mw-body-content::after { clear: both; content: ""; display: block; }
  #catlinks { text-align: left; }
  .catlinks { border: 1px solid rgb(162, 169, 177); background-color: rgb(248, 249, 250); padding: 5px; margin-top: 1em; clear: both; }
  .catlinks ul { display: inline; margin: 0px; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.25em; border-left: 1px solid rgb(162, 169, 177); margin: 0.125em 0px; padding: 0px 0.5em; }
  .catlinks li:first-child { padding-left: 0.25em; border-left: 0px none; }
  .mw-hidden-cats-hidden, .catlinks-allhidden { display: none; }
  .emptyPortlet { display: none; }
  .printfooter, .client-nojs #t-print { display: none; }
  a { text-decoration: none; color: rgb(51, 102, 204); background: transparent none repeat scroll 0% 0%; }
  a:not([href]) { cursor: pointer; }
  a:visited { color: rgb(121, 92, 178); }
  a:active { color: rgb(250, 167, 0); }
  a:hover, a:focus { text-decoration: underline; }
  a:lang(ar), a:lang(kk-arab), a:lang(mzn), a:lang(ps), a:lang(ur) { text-decoration: none; }
  img { border: 0px none; vertical-align: middle; }
  h1, h2, h3, h4, h5, h6 { color: rgb(0, 0, 0); margin: 0px; padding-top: 0.5em; padding-bottom: 0.17em; overflow: hidden; }
  h1, h2 { margin-bottom: 0.6em; border-bottom: 1px solid rgb(162, 169, 177); }
  h3, h4, h5 { margin-bottom: 0.3em; }
  h1 { font-size: 188%; font-weight: normal; }
  h2 { font-size: 150%; font-weight: normal; }
  h3 { font-size: 128%; }
  h4 { font-size: 116%; }
  p { margin: 0.4em 0px 0.5em; }
  p img { margin: 0px; }
  ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  ol { margin: 0.3em 0px 0px 3.2em; padding: 0px; list-style-image: none; }
  li { margin-bottom: 0.1em; }
  dl { margin-top: 0.2em; margin-bottom: 0.5em; }
  dd { margin-left: 1.6em; margin-bottom: 0.1em; }
  pre, code, tt, kbd, samp, .mw-code { font-family: monospace,monospace; }
  pre, code, .mw-code { background-color: rgb(248, 249, 250); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); }
  code { border-radius: 2px; padding: 1px 4px; }
  pre, .mw-code { padding: 1em; white-space: pre-wrap; overflow-x: hidden; overflow-wrap: break-word; }
  form { border: 0px none; margin: 0px; }
  @counter-style meetei {
  system: numeric;
  symbols: "꯰" "꯱" "꯲" "꯳" "꯴" "꯵" "꯶" "꯷" "꯸" "꯹";
  suffix: ") ";
}
  @counter-style santali {
  system: numeric;
  symbols: "᱐" "᱑" "᱒" "᱓" "᱔" "᱕" "᱖" "᱗" "᱘" "᱙";
}
  @counter-style myanmar_with_period {
  system: numeric;
  symbols: "၀" "၁" "၂" "၃" "၄" "၅" "၆" "၇" "၈" "၉";
  suffix: "။ ";
}
  ol:lang(azb) li, ol:lang(bcc) li, ol:lang(bgn) li, ol:lang(bqi) li, ol:lang(fa) li, ol:lang(glk) li, ol:lang(kk-arab) li, ol:lang(lrc) li, ol:lang(luz) li, ol:lang(mzn) li { list-style-type: persian; }
  ol:lang(ckb) li, ol:lang(sdh) li { list-style-type: arabic-indic; }
  ol:lang(hi) li, ol:lang(mai) li, ol:lang(mr) li, ol:lang(ne) li { list-style-type: devanagari; }
  ol:lang(as) li, ol:lang(bn) li { list-style-type: bengali; }
  ol:lang(mni) li { list-style-type: meetei; }
  ol:lang(or) li { list-style-type: oriya; }
  ol:lang(sat) li { list-style-type: santali; }
  ol:lang(blk) li, ol:lang(kjp) li, ol:lang(ksw) li, ol:lang(mnw) li, ol:lang(my) li, ol:lang(shn) li { list-style-type: myanmar_with_period; }
  .mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  .mw-content-ltr ol, .mw-content-rtl .mw-content-ltr ol { margin: 0.3em 0px 0px 3.2em; padding: 0px; }
  .mw-content-ltr dd, .mw-content-rtl .mw-content-ltr dd { margin-left: 1.6em; margin-right: 0px; }
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(blk), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kjp), h1:lang(kn), h1:lang(ks), h1:lang(ksw), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(mnw), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(sa), h1:lang(shn), h1:lang(syl), h1:lang(ta), h1:lang(te) { line-height: 1.6em ! important; }
  h2:lang(anp), h2:lang(as), h2:lang(bh), h2:lang(bho), h2:lang(blk), h2:lang(bn), h2:lang(gu), h2:lang(hi), h2:lang(kjp), h2:lang(kn), h2:lang(ks), h2:lang(ksw), h2:lang(ml), h2:lang(mr), h2:lang(my), h2:lang(mai), h2:lang(mnw), h2:lang(ne), h2:lang(new), h2:lang(or), h2:lang(pa), h2:lang(pi), h2:lang(sa), h2:lang(shn), h2:lang(syl), h2:lang(ta), h2:lang(te), h3:lang(anp), h3:lang(as), h3:lang(bh), h3:lang(bho), h3:lang(blk), h3:lang(bn), h3:lang(gu), h3:lang(hi), h3:lang(kjp), h3:lang(kn), h3:lang(ks), h3:lang(ksw), h3:lang(ml), h3:lang(mr), h3:lang(my), h3:lang(mai), h3:lang(mnw), h3:lang(ne), h3:lang(new), h3:lang(or), h3:lang(pa), h3:lang(pi), h3:lang(sa), h3:lang(shn), h3:lang(syl), h3:lang(ta), h3:lang(te), h4:lang(anp), h4:lang(as), h4:lang(bh), h4:lang(bho), h4:lang(blk), h4:lang(bn), h4:lang(gu), h4:lang(hi), h4:lang(kjp), h4:lang(kn), h4:lang(ks), h4:lang(ksw), h4:lang(ml), h4:lang(mr), h4:lang(my), h4:lang(mai), h4:lang(mnw), h4:lang(ne), h4:lang(new), h4:lang(or), h4:lang(pa), h4:lang(pi), h4:lang(sa), h4:lang(shn), h4:lang(syl), h4:lang(ta), h4:lang(te), h5:lang(anp), h5:lang(as), h5:lang(bh), h5:lang(bho), h5:lang(blk), h5:lang(bn), h5:lang(gu), h5:lang(hi), h5:lang(kjp), h5:lang(kn), h5:lang(ks), h5:lang(ksw), h5:lang(ml), h5:lang(mr), h5:lang(my), h5:lang(mai), h5:lang(mnw), h5:lang(ne), h5:lang(new), h5:lang(or), h5:lang(pa), h5:lang(pi), h5:lang(sa), h5:lang(shn), h5:lang(syl), h5:lang(ta), h5:lang(te), h6:lang(anp), h6:lang(as), h6:lang(bh), h6:lang(bho), h6:lang(blk), h6:lang(bn), h6:lang(gu), h6:lang(hi), h6:lang(kjp), h6:lang(kn), h6:lang(ks), h6:lang(ksw), h6:lang(ml), h6:lang(mr), h6:lang(my), h6:lang(mai), h6:lang(mnw), h6:lang(ne), h6:lang(new), h6:lang(or), h6:lang(pa), h6:lang(pi), h6:lang(sa), h6:lang(shn), h6:lang(syl), h6:lang(ta), h6:lang(te) { line-height: 1.4em; }
  h2:lang(th) { line-height: 1.6; }
}
@media print {
  .mw-parser-output a.external {  }
  .mw-parser-output a.external.text::after, .mw-parser-output a.external.autonumber::after { content: " (" attr(href) ")"; word-break: break-all; overflow-wrap: break-word; }
  .catlinks ul { display: inline; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.15; margin: 0.1em 0px; border-left: 1pt solid rgb(170, 170, 170); padding: 0px 0.4em; }
  .catlinks li:first-child { border-left: 0px none; padding-left: 0.2em; }
  .mw-hidden-catlinks, .catlinks { display: none; }
  .mw-editsection, .mw-editsection-like, .mw-indicators, #siteNotice, .usermessage { display: none; }
  .printfooter { padding: 1em 0px; }
  a { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  a, a.external, a.new, a.stub { color: inherit ! important; text-decoration: inherit ! important; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; page-break-after: avoid; page-break-before: avoid; }
  p { margin: 1em 0px; line-height: 1.2; }
  img, figure { page-break-inside: avoid; }
  img { border: 0px none; vertical-align: middle; }
  pre, .mw-code { background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); border: 1pt dashed rgb(0, 0, 0); padding: 1em; font-size: 8pt; white-space: pre-wrap; overflow-x: hidden; overflow-wrap: break-word; }
  ul { list-style-type: square; }
}
#archnavbar { height: 40px ! important; padding: 10px 15px ! important; background: rgb(51, 51, 51) none repeat scroll 0% 0% ! important; border-bottom: 5px solid rgb(0, 136, 204) ! important; }
#archnavbarlogo { float: left ! important; margin: 0px ! important; padding: 0px ! important; height: 40px ! important; width: 190px ! important; }
html > body #archnavbarlogo { background: transparent url("archlogo.svg") no-repeat scroll 0% 0% / 190px 40px ! important; }
#archnavbarlogo p { margin: 0px ! important; padding: 0px ! important; text-indent: -9999px ! important; }
#archnavbarlogo a { display: block ! important; height: 40px ! important; width: 190px ! important; }
#archnavbar ul { display: inline ! important; float: right ! important; list-style: outside none none ! important; margin: 0px ! important; padding: 0px ! important; }
#archnavbar ul li { float: left ! important; font-size: 14px ! important; font-family: sans-serif ! important; line-height: 45px ! important; padding-right: 15px ! important; padding-left: 15px ! important; }
#archnavbar ul#archnavbarlist li a { color: rgb(153, 153, 153); font-weight: bold ! important; text-decoration: none ! important; }
#archnavbar ul li a:hover { color: white ! important; text-decoration: underline ! important; }
#archnavbar ul li.anb-selected a { color: white ! important; }
@media (max-width: 600px) {
  #anb-wiki { display: none; }
}
@media (max-width: 680px) {
  html > body #archnavbarlogo { width: 40px ! important; margin-right: 5px ! important; background: transparent url("archicon.svg") no-repeat scroll 0% 0% / 40px 40px ! important; }
  #archnavbar ul { display: flex ! important; justify-content: space-between; flex-wrap: nowrap; overflow: hidden; float: none ! important; }
  #archnavbar ul li { padding: 0px ! important; float: none ! important; }
}
@media (max-width: 845px) {
  #anb-home, #anb-start { display: none; }
  html > body #archnavbarlogo { padding-right: 15px ! important; }
  #archnavbar { padding-left: 5px ! important; padding-right: 5px ! important; }
  #archnavbar ul li { padding-left: 5px ! important; padding-right: 5px ! important; }
}
body { background: rgb(246, 249, 252) none repeat scroll 0% 0%; }
#content { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(204, 204, 204); }
#content table, #content h1, #content h2, #content h3, #content h4, #content h5, #content pre, #content code, #content tt { color: rgb(34, 34, 34); }
#content ul { list-style-image: none; }
#content pre:not([class*="CodeMirror"]) { border: 1px solid rgb(187, 204, 221); overflow: auto; word-break: break-all; white-space: pre-wrap ! important; }
#content pre:not([class*="CodeMirror"]), #content code, #content tt { background-color: rgb(235, 241, 245); font-family: monospace,monospace; }
#content code, #content tt { display: inline-block; padding: 0px 0.3em; border-width: 0px; border-radius: 0px; }
#footer { color: rgb(51, 51, 51); }
#bodyContent > div.mw-content-ltr a, #bodyContent > div.mw-content-rtl a, #wikiPreview > div.mw-content-ltr a, #wikiPreview > div.mw-content-rtl a { font-weight: bold; }
#content a:not(.new), header.mw-header li:not(.new) a:not(.new), #mw-navigation li:not(.new) a:not(.new), #mw-panel li:not(.new) a:not(.new), #column-one li:not(.new) a:not(.new), #footer a:not(.new) { text-decoration: none; color: rgb(0, 119, 187) ! important; }
#content a:hover:not(.new), header.mw-header li:not(.new) a:hover:not(.new), #mw-navigation li:not(.new) a:hover:not(.new), #mw-panel li:not(.new) a:hover:not(.new), #column-one li:not(.new) a:hover:not(.new), #footer a:hover:not(.new) { text-decoration: underline; background-color: transparent; color: rgb(153, 153, 153) ! important; }
#content a:active, header.mw-header li:not(.new) a:active, #mw-navigation li:not(.new) a:active, #mw-panel li:not(.new) a:active, #column-one li:not(.new) a:active, #footer a:active, #content a:focus, header.mw-header li:not(.new) a:focus, #mw-navigation li:not(.new) a:focus, #mw-panel li:not(.new) a:focus, #column-one li:not(.new) a:focus, #footer a:focus, #content a:active:hover, header.mw-header li:not(.new) a:active:hover, #mw-navigation li:not(.new) a:active:hover, #mw-panel li:not(.new) a:active:hover, #column-one li:not(.new) a:active:hover, #footer a:active:hover, #content a:focus:hover, header.mw-header li:not(.new) a:focus:hover, #mw-navigation li:not(.new) a:focus:hover, #mw-panel li:not(.new) a:focus:hover, #column-one li:not(.new) a:focus:hover, #footer a:focus:hover { color: rgb(238, 153, 0) ! important; }
#content a:visited:not(.new), #mw-panel li:not(.new) a:visited:not(.new), #p-navigation li:not(.new) a:visited:not(.new), #p-tb li:not(.new) a:visited:not(.new) { color: rgb(102, 102, 102) ! important; }
.mw-body-content a.external, .mw-body-content a.extiw { background: transparent url("external-ltr.svg") no-repeat scroll right center; padding-right: 13px; }
#p-logo, .mw-logo { display: none; }
.mw-body h1, .mw-body-content h1, .mw-body-content h2 { font-family: sans-serif; }
body.skin-vector.skin--responsive li.selected:not(:first-child) { margin-left: -1px; }
body.skin-vector div.mw-page-container { background-color: rgb(246, 249, 252); }
@media screen and (min-width: 1000px) {
  body.skin-vector-2022 .mw-body { padding-left: 0.5em; }
}
body.skin-vector-2022 #vector-toc-collapsed-button { margin-left: 0px; }
body.skin-vector-2022 #mw-panel-toc { left: auto; }
body.skin-vector-2022 #p-lang-btn.mw-portlet-empty { display: block; float: right; }
@media screen and (max-width: 720px) {
}
