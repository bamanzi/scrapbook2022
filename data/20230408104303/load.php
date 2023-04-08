/* Code tidied up by ScrapBook */
.mw-cite-backlink, .cite-accessibility-label { -moz-user-select: none; }
.mw-references-columns { column-width: 30em; margin-top: 0.3em; }
.mw-parser-output .mw-references-columns .references { margin-top: 0px; }
.mw-references-columns li { page-break-inside: avoid; }
ol.references { counter-reset: mw-ref-extends-parent mw-references list-item; }
ol.references > li { counter-increment: mw-ref-extends-parent mw-references; counter-reset: mw-ref-extends-child; }
sup.reference { unicode-bidi: isolate; white-space: nowrap; font-weight: normal; font-style: normal; }
ol.references li:target, sup.reference:target { background-color: rgb(234, 243, 255); }
@media print {
  .mw-cite-backlink { display: none; }
}
.client-js .mw-content-ltr .mw-editsection-bracket:first-of-type, .client-js .mw-content-rtl .mw-editsection-bracket:not(:first-of-type) { margin-right: 0.25em; color: rgb(84, 89, 93); }
.client-js .mw-content-rtl .mw-editsection-bracket:first-of-type, .client-js .mw-content-ltr .mw-editsection-bracket:not(:first-of-type) { margin-left: 0.25em; color: rgb(84, 89, 93); }
.client-js ol.mw-collapsible:not(.mw-made-collapsible)::before, .client-js ul.mw-collapsible:not(.mw-made-collapsible)::before, .client-js table.mw-collapsible:not(.mw-made-collapsible) :first-child tr:first-child th:last-child::before, .client-js table.mw-collapsible:not(.mw-made-collapsible) > caption:first-child::after, .client-js div.mw-collapsible:not(.mw-made-collapsible)::before { content: "[hide]"; }
.client-js td.mw-collapsed:not(.mw-made-collapsible)::before, .client-js table.mw-collapsed:not(.mw-made-collapsible) :first-child tr:first-child th:last-child::before, .client-js table.mw-collapsed:not(.mw-made-collapsible) > caption:first-child::after, .client-js div.mw-collapsed:not(.mw-made-collapsible)::before { content: "[show]"; }
.client-js .mw-collapsed:not(.mw-made-collapsible) > p, .client-js .mw-collapsed:not(.mw-made-collapsible) > table, .client-js .mw-collapsed:not(.mw-made-collapsible) > thead + tbody, .client-js .mw-collapsed:not(.mw-made-collapsible) tr:not(:first-child), .client-js .mw-collapsed:not(.mw-made-collapsible) .mw-collapsible-content { display: none; }
.mw-collapsible:not(.mw-made-collapsible) th::before, .mw-collapsible:not(.mw-made-collapsible)::before, .mw-collapsible-toggle { float: right; }
.mw-content-ltr .mw-collapsible:not(.mw-made-collapsible) th::before, .mw-content-rtl .mw-content-ltr .mw-collapsible:not(.mw-made-collapsible) th::before, .mw-content-ltr .mw-collapsible:not(.mw-made-collapsible)::before, .mw-content-rtl .mw-content-ltr .mw-collapsible:not(.mw-made-collapsible)::before, .mw-content-ltr .mw-collapsible-toggle, .mw-content-rtl .mw-content-ltr .mw-collapsible-toggle { float: right; }
.client-js .sortable:not(.jquery-tablesorter) > * > tr:first-child > th:not(.unsortable), .jquery-tablesorter th.headerSort { background-image: url("sort_both.svg"); cursor: pointer; background-repeat: no-repeat; background-position: right center; padding-right: 21px; }
.mw-ui-button { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); display: inline-block; box-sizing: border-box; margin: 0px; border: 1px solid rgb(162, 169, 177); border-radius: 2px; cursor: pointer; vertical-align: middle; font-family: inherit; font-size: 1em; font-weight: bold; line-height: 1.28571em; text-align: center; -moz-appearance: none; }
.mw-ui-button:not(.mw-ui-icon-element) { min-height: 32px; min-width: 4em; max-width: 28.75em; padding: 5px 12px; }
.mw-ui-button:not(:disabled) { transition-property: background-color, color, border-color, box-shadow; transition-duration: 100ms; }
.mw-ui-button:visited:not(:disabled) { color: rgb(32, 33, 34); }
.mw-ui-button:hover:not(:disabled) { background-color: rgb(255, 255, 255); color: rgb(64, 66, 68); border-color: rgb(162, 169, 177); }
.mw-ui-button:focus:not(:disabled) { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; outline-width: 0px; }
.mw-ui-button:focus:not(:disabled)::-moz-focus-inner { border-color: transparent; padding: 0px; }
.mw-ui-button:active:not(:disabled), .mw-ui-button.is-on:not(:disabled) { background-color: rgb(200, 204, 209); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button:disabled { background-color: rgb(200, 204, 209); color: rgb(255, 255, 255); border-color: rgb(200, 204, 209); cursor: default; }
input[type="checkbox"]:hover + .mw-ui-button, .mw-ui-button:hover { background-color: rgb(255, 255, 255); color: rgb(64, 66, 68); border-color: rgb(162, 169, 177); }
input[type="checkbox"]:focus + .mw-ui-button, .mw-ui-button:focus { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; outline-width: 0px; }
input[type="checkbox"]:active + .mw-ui-button, .mw-ui-button:active { background-color: rgb(200, 204, 209); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) { color: transparent ! important; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) span:not(.mw-ui-icon) { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
@media all and (max-width: 1000px) {
  .mw-ui-button.mw-ui-icon-element span:not(.mw-ui-icon) { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
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
.mw-ui-icon + span:not(:empty) { margin-left: 6px; }
.mw-ui-icon-flush-left { margin-left: -0.75em; }
@media all and (min-width: 1000px) {
  .mw-ui-icon-flush-left { margin-left: -0.375em; }
}
.mw-ui-icon-flush-right { margin-right: -0.75em; }
@media all and (min-width: 1000px) {
  .mw-ui-icon-flush-right { margin-right: -0.375em; }
}
.mw-ui-icon-element { border-radius: 2px; padding: 0.75em; line-height: 0; transition: background-color 100ms ease 0s; color: transparent; }
.mw-ui-icon-element.mw-ui-button { padding: 0.6875em; }
.mw-ui-icon-element:focus, .mw-ui-icon-element:active, .mw-ui-icon-element:visited { color: transparent; }
@media (min-width: 1000px) {
  .mw-ui-icon-element.mw-ui-button { padding: 0.3125em; }
}
.mw-ui-icon-small { width: 1em; height: 1em; min-width: 1em; min-height: 1em; flex-basis: 1em; line-height: 1em; }
.mw-ui-icon-small::before { content: ""; display: block; width: 100%; height: 100%; min-width: 1em; min-height: 1em; background-repeat: no-repeat; background-size: 1em 1em; background-position: center center; }
@media all and (min-width: 1000px) {
}
.mw-ui-icon-wikimedia-language-progressive::before { background-image: url("language.svg"); }
.mw-ui-icon-wikimedia-listBullet::before { background-image: url("listBullet.svg"); }
.mw-ui-icon-wikimedia-ellipsis::before { background-image: url("ellipsis.svg"); }
.mw-ui-icon-wikimedia-logIn::before { background-image: url("logIn.svg"); }
.mw-ui-icon-wikimedia-search::before { background-image: url("search_001.svg"); }
.mw-ui-icon-wikimedia-menu::before { background-image: url("menu.svg"); }
.mw-ui-icon-wikimedia-expand::before { background-image: url("expand.svg"); }
.mw-ui-icon-wikimedia-userAdd::before { background-image: url("userAdd.svg"); }
@media not all {
  *, ::before, ::after { animation-delay: -0.01ms ! important; animation-duration: 0.01ms ! important; animation-iteration-count: 1 ! important; scroll-behavior: auto ! important; transition-duration: 0ms ! important; }
}
body { margin: 0px; }
main { display: block; }
abbr[title] { border-bottom: 1px dotted; cursor: help; }
@supports (text-decoration:underline dotted) {
  abbr[title] { border-bottom: 0px none; text-decoration: underline dotted; }
}
sub, sup { line-height: 1; }
img { border: 0px none; }
button, input, optgroup, select, textarea { margin: 0px; }
button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner { border-style: none; padding: 0px; }
div.tright, div.floatright, table.floatright { clear: right; float: right; }
div.thumb { width: auto; background-color: transparent; margin-bottom: 0.5em; }
div.tright { margin: 0.5em 0px 1.3em 1.4em; }
.thumbcaption { text-align: left; line-height: 1.4em; padding: 3px; }
.thumbcaption:empty { padding: 0px; }
div.thumbinner { padding: 3px; text-align: center; overflow: hidden; }
.mw-message-box { color: rgb(0, 0, 0); box-sizing: border-box; margin-bottom: 16px; border: 1px solid rgb(162, 169, 177); padding: 12px 24px; overflow-wrap: break-word; overflow: hidden; background-color: rgb(234, 236, 240); }
@media screen {
  html, body { height: 100%; }
  :focus { outline-color: rgb(51, 102, 204); }
  html { font-size: 100%; }
  html, body { font-family: sans-serif; }
  ul { list-style-image: url("bullet-icon.svg"); }
  .mw-jump-link:not(:focus) { display: block; position: absolute ! important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; -moz-user-select: none; }
  .mw-editsection, .mw-editsection-like { font-family: sans-serif; }
  .mw-body h1, .mw-body-content h1, .mw-body-content h2 { margin-bottom: 0.25em; padding: 0px; font-family: "Linux Libertine","Georgia","Times",serif; line-height: 1.375; }
  .mw-body h1:lang(ja), .mw-body-content h1:lang(ja), .mw-body-content h2:lang(ja), .mw-body h1:lang(he), .mw-body-content h1:lang(he), .mw-body-content h2:lang(he), .mw-body h1:lang(ko), .mw-body-content h1:lang(ko), .mw-body-content h2:lang(ko) { font-family: sans-serif; }
  .mw-body h1:lang(ckb), .mw-body-content h1:lang(ckb), .mw-body-content h2:lang(ckb) { font-family: "Scheherazade","Linux Libertine","Georgia","Times",serif; }
  .mw-body h1:lang(my), .mw-body-content h1:lang(my), .mw-body-content h2:lang(my) { line-height: normal; }
  .mw-body h1, .mw-body-content h1 { font-size: 1.8em; }
  .vector-body { font-size: calc(1em * 0.875); line-height: 1.6; }
  .vector-body #siteSub { font-size: 12.8px; }
  .vector-body h2 { margin-top: 1em; font-size: 1.5em; }
  .vector-body h3, .vector-body h4, .vector-body h5, .vector-body h6 { margin-top: 0.3em; margin-bottom: 0px; padding-bottom: 0px; line-height: 1.6; }
  .vector-body h3 { font-size: 1.2em; }
  .vector-body h3, .vector-body h4 { font-weight: bold; }
  .vector-body p { margin: 0.5em 0px; }
  .mw-parser-output a { overflow-wrap: break-word; }
  .mw-parser-output a.external { background-image: url("link-external-small-ltr-progressive.svg"); background-position: right center; background-repeat: no-repeat; background-size: 0.857em auto; padding-right: 1em; }
  .mw-indicators { font-size: 0.875em; line-height: 1.6; position: relative; float: right; }
  #siteNotice { font-size: 0.8em; margin: 24px 0px; position: relative; text-align: center; }
  .vector-menu-dropdown { position: relative; }
  .vector-menu-dropdown > .vector-menu-content { position: absolute; top: 100%; left: -1px; opacity: 0; height: 0px; visibility: hidden; overflow: hidden; margin: 0px; padding: 0px; z-index: 3; }
  .vector-menu-dropdown .mw-list-item { padding: 0px; margin: 0px; }
  .vector-menu-dropdown .mw-list-item a { cursor: pointer; }
  .vector-menu-dropdown .selected a, .vector-menu-dropdown .selected a:visited { color: rgb(32, 33, 34); text-decoration: none; }
  .vector-menu-checkbox { cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 1; opacity: 0; width: 100%; height: 100%; margin: 0px; padding: 0px; display: none; }
  .vector-menu-checkbox:checked ~ .vector-menu-content { opacity: 1; visibility: visible; height: auto; }
  :not(:checked) > .vector-menu-checkbox { display: block; }
  .vector-menu-checkbox:focus + .vector-menu-heading { outline: 1px dotted; }
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
  #footer-icons { float: right; }
  #footer-icons li { float: left; margin-left: 0.5em; line-height: 2; text-align: right; }
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
  p { font-size: 12pt; line-height: 16pt; margin-top: 5px; text-align: justify; }
  p::before { content: ""; display: block; width: 120pt; overflow: hidden; }
  ol, ul { margin: 10px 0px 0px 1.6em; padding: 0px; }
  ol li, ul li { padding: 2px 0px; font-size: 12pt; }
  table ol li, table ul li { font-size: inherit; }
  #mw-navigation, .noprint, .mw-jump-link, .mw-portlet-lang, .toc .tocnumber, .mw-checkbox-hack-checkbox, .mw-checkbox-hack-button { display: none; }
  .printfooter { margin-top: 10px; border-top: 3px solid rgb(0, 0, 0); padding-top: 10px; font-size: 10pt; clear: both; }
  .mw-footer { margin-top: 12px; border-top: 1px solid rgb(238, 238, 238); padding-top: 5px; }
  #footer-info { margin: 0px; padding: 0px; }
  #footer-info li { color: rgb(153, 153, 153); list-style: outside none none; display: block; padding-bottom: 10px; font-size: 10pt; }
  #footer-info li a { color: rgb(153, 153, 153) ! important; }
  #footer-info-lastmod { color: rgb(0, 0, 0); font-size: 12pt; font-weight: bold; }
}
@media screen {
  html {  }
  body { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); overflow-y: scroll; }
  .mw-body, .parsoid-body { direction: ltr; }
  .mw-body { padding: 0.5em 0px 1.5em; }
  .mw-body .firstHeading { overflow-wrap: break-word; margin-bottom: 0px; }
  .mw-header { position: relative; z-index: 4; }
  #mw-content-text { margin-top: 16px; }
  .mw-body, #mw-data-after-content, .mw-footer { margin-left: 0px; }
  .mw-indicators { z-index: 1; }
  .vector-page-titlebar::after { clear: both; content: ""; display: block; }
  .vector-body-before-content { overflow: hidden; }
  .mw-body .mw-portlet-lang { float: right; }
  .vector-body { position: relative; z-index: 0; }
  #siteSub { display: none; margin-top: 8px; }
  #contentSub:not(:empty), #contentSub2 { font-size: 84%; line-height: 1.2em; color: rgb(84, 89, 93); width: auto; margin: 8px 0px 0px; }
  .mw-page-container { position: relative; z-index: 0; min-height: 100%; max-width: 99.75em; min-width: 31.25em; margin: 0px auto; padding: 0.05px 1.5em; background-color: rgb(255, 255, 255); box-sizing: border-box; }
  .mw-table-of-contents-container { align-self: start; height: 100%; }
  #vector-toc-collapsed-button, .vector-sticky-header-toc, .vector-page-titlebar-toc { display: none; margin-right: 8px; }
  @keyframes search-loader-progress-bar {
0% { background-size: 0px 2px; background-position: -10% 0px; }
30% { background-size: 30% 2px; background-position: -10% 0px; }
70% { background-size: 30% 2px; background-position: 110% 0px; }
100% { background-size: 0px 2px; background-position: 110% 0px; }
}
  .vector-search-box { font-size: calc(1em * 0.875); flex-grow: 1; }
  .vector-search-box > div { max-width: 35.7143em; }
  .vector-search-box-vue .vector-search-box-input, .vector-search-box-vue .searchButton { font-size: inherit; }
  .vector-search-box-vue .vector-search-box-input { height: auto; min-height: 32px; line-height: 1.42857; padding-top: 4px; padding-bottom: 4px; }
  .vector-search-box-vue .searchButton { background-size: 20px auto; }
  .client-js .vector-search-box-vue .vector-search-box-input { padding-left: 36px; padding-right: 8px; }
  .client-js .vector-search-box-vue .searchButton { pointer-events: none; inset: 0px auto 0px 1px; width: 36px; opacity: 0.51; background-size: 1.42857em auto; background-position-x: 8px; }
  .client-js .vector-search-box-vue .vector-search-box-input:focus ~ .searchButton { opacity: 0.87; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail > div { max-width: 37.4286em; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .searchButton { left: 25px; }
  .client-js .vector-search-box-vue.vector-search-box-show-thumbnail.vector-search-box-auto-expand-width .vector-search-box-input { margin-left: 24px; width: calc(100% - 24px); }
  .vector-page-titlebar .mw-portlet-lang { margin-top: 2px; box-sizing: border-box; height: 2em; flex-shrink: 0; }
  .vector-page-titlebar .mw-portlet-lang .vector-menu-heading { opacity: 1; }
  .vector-page-titlebar .mw-portlet-lang .vector-menu-heading .vector-menu-heading-label { font-size: 0.875em; }
  .vector-page-titlebar .mw-portlet-lang .vector-menu-heading.mw-ui-progressive.mw-ui-quiet .mw-ui-icon::before { opacity: 1; }
  .vector-page-titlebar .mw-portlet-lang .vector-menu-heading.mw-ui-progressive.mw-ui-quiet::after { background-image: url("arrow-down-progressive.svg"); opacity: 1; }
  .vector-page-titlebar .mw-portlet-lang input:active + .vector-menu-heading.mw-ui-progressive.mw-ui-quiet .mw-ui-icon { filter: brightness(0) invert(1); }
  .vector-page-titlebar .mw-portlet-lang input:active + .vector-menu-heading.mw-ui-progressive.mw-ui-quiet::after { background-image: url("arrow-down-invert.svg"); }
  .vector-page-titlebar .mw-portlet-lang > .vector-menu-content { top: auto; left: -1px; right: -1px; box-sizing: border-box; max-height: 65vh; overflow: auto; display: none; }
  .vector-page-titlebar .mw-portlet-lang > .vector-menu-content li a { font-size: inherit; }
  .vector-page-titlebar .mw-portlet-lang .vector-menu-checkbox:checked ~ .vector-menu-content { display: block; }
  .vector-page-titlebar .mw-portlet-lang .after-portlet { margin-top: 10px; }
  .mw-interlanguage-selector { display: flex; }
  .mw-interlanguage-selector::after { content: ""; background: transparent url("arrow-down.svg") no-repeat scroll 100% 50%; width: 1.23077em; height: 1.23077em; margin-left: -1px; }
  .vector-user-links { display: flex; align-items: center; position: relative; justify-content: flex-end; flex-shrink: 1; }
  .vector-user-links .mw-ui-button { display: flex; align-items: center; }
  .vector-user-links .mw-list-item { margin: 0px; }
  .vector-user-menu .vector-menu-content { left: auto; right: 0px; }
  .vector-user-links .mw-portlet-vector-user-menu-overflow { font-size: 0.875em; }
  .vector-user-links .mw-portlet-vector-user-menu-overflow .vector-menu-content-list { display: flex; align-items: center; }
  .vector-user-links .mw-portlet-vector-user-menu-overflow a:not(.mw-ui-button):not(.mw-echo-notifications-badge) { margin: 0px 8px; }
  #p-user-menu-anon-editor .vector-menu-heading { display: block; }
  #p-user-menu-anon-editor .vector-menu-heading a::before { content: "("; }
  #p-user-menu-anon-editor .vector-menu-heading a::after { content: ")"; }
  .mw-header { min-height: 3.125em; padding: 8px 0px; display: flex; flex-wrap: nowrap; align-items: center; }
  .mw-header .vector-header-start, .mw-header .vector-header-end { display: flex; align-items: center; }
  .mw-header .vector-header-end { flex-grow: 1; }
  .mw-footer { border-top: 1px solid rgb(162, 169, 177); padding: 0.75em 0px; }
  .mw-footer-container { padding-top: 50px; padding-bottom: 82px; }
  .vector-menu ul { list-style: outside none none; margin: 0px; }
  .vector-dropdown > .vector-menu-heading:not(.mw-ui-icon-element) { display: flex; }
  .vector-dropdown > .vector-menu-heading:not(.mw-ui-icon-element)::after { content: ""; background: transparent url("arrow-down.svg") no-repeat scroll 100% 50%; width: 1.23077em; height: 1.23077em; margin-left: -1px; }
  .vector-dropdown .vector-dropdown-content, .vector-dropdown > .vector-menu-content { background-color: rgb(255, 255, 255); border: 1px solid rgb(162, 169, 177); box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1); transition-property: opacity; transition-duration: 100ms; padding: 4px 0px; width: max-content; max-width: 200px; }
  .vector-pinnable-element .vector-menu-heading, .vector-dropdown-content .vector-menu-heading { display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; align-self: center; color: rgb(84, 89, 93); font-weight: normal; cursor: default; border-color: rgb(200, 204, 209); border-width: 1px; }
  .vector-pinnable-element .vector-menu-heading:visited:not(.mw-selflink), .vector-dropdown-content .vector-menu-heading:visited:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-pinnable-element .mw-list-item a, .vector-dropdown-content .mw-list-item a { display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; color: rgb(51, 102, 204); }
  .vector-pinnable-element .mw-list-item a:visited:not(.mw-selflink), .vector-dropdown-content .mw-list-item a:visited:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-pinnable-element > *:not(:last-child), .vector-dropdown-content > *:not(:last-child) { border-bottom: 1px solid rgb(234, 236, 240); }
  .vector-dropdown .mw-list-item a { display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; }
  .vector-dropdown .mw-list-item a:visited:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-dropdown .mw-list-item a:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-menu-tabs { float: left; }
  .vector-menu-tabs .mw-list-item a { color: rgb(51, 102, 204); }
  .vector-menu-tabs .mw-list-item.vector-tab-noicon a:focus, .vector-menu-tabs .mw-list-item.vector-tab-noicon a:hover { text-decoration: none; border-bottom: 1px solid; }
  .vector-menu-tabs .mw-list-item.selected a, .vector-menu-tabs .mw-list-item.selected a:visited { color: rgb(32, 33, 34); border-bottom: 1px solid; }
  .vector-menu-tabs .mw-list-item.vector-tab-noicon, .vector-page-toolbar-container .vector-menu-dropdown { margin: 0px 8px; }
  .vector-menu-tabs .mw-list-item, .vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading { white-space: nowrap; }
  .vector-menu-tabs .mw-list-item, .vector-page-toolbar-container .vector-menu-dropdown { float: left; margin-bottom: 0px; }
  .vector-menu-tabs .mw-list-item > a, .vector-page-toolbar-container .vector-menu-dropdown > a, .vector-menu-tabs .mw-list-item > .vector-menu-heading, .vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading { display: inline-flex; position: relative; cursor: pointer; max-height: 3.15385em; box-sizing: border-box; font-weight: normal; }
  .vector-menu-tabs .mw-list-item > .vector-menu-heading, .vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading { font-size: inherit; }
  .vector-menu-tabs .mw-list-item.vector-tab-noicon > a, .vector-page-toolbar-container .vector-menu-dropdown.vector-tab-noicon > a, .vector-menu-tabs .mw-list-item > .vector-menu-heading, .vector-page-toolbar-container .vector-menu-dropdown > .vector-menu-heading { padding: 12px 0px 7px; margin-bottom: -1px; }
  .mw-checkbox-hack-checkbox { display: none; }
  .mw-checkbox-hack-button { display: inline-block; cursor: pointer; }
  .vector-feature-main-menu-pinned-enabled .vector-header-start .vector-main-menu-landmark, .vector-feature-main-menu-pinned-disabled .vector-main-menu-container .vector-main-menu-landmark { display: none; }
  .vector-main-menu { box-sizing: border-box; }
  .vector-main-menu #p-navigation .vector-menu-heading { display: none; }
  .vector-main-menu .vector-main-menu-action-opt-out a, .vector-main-menu .vector-main-menu-action-lang-alert .vector-main-menu-action-content { display: flex; align-items: center; padding: 6px 14px; font-size: 0.875rem; }
  .vector-main-menu .vector-main-menu-action-opt-out a:visited:not(.mw-selflink), .vector-main-menu .vector-main-menu-action-lang-alert .vector-main-menu-action-content:visited:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-main-menu .vector-main-menu-action-lang-alert .vector-main-menu-action-content { padding-top: 0px; }
  .vector-main-menu .vector-language-sidebar-alert { padding: 8px; margin: 0px; }
  #vector-main-menu-unpinned-container .vector-main-menu .vector-language-sidebar-alert { margin-bottom: 6px; }
  .vector-page-titlebar { display: flex; justify-content: flex-end; box-shadow: 0px 1px rgb(162, 169, 177); align-items: center; }
  .vector-page-titlebar .firstHeading { flex-grow: 1; border: 0px none; }
  .vector-page-titlebar > .mw-ui-button { font-size: 0.875em; margin-top: 2px; white-space: nowrap; }
  .vector-page-titlebar > .mw-ui-button:not(.mw-ui-icon-element) { min-width: auto; }
  .vector-page-titlebar > .mw-ui-button:last-child, .vector-page-titlebar > .mw-portlet-lang:last-child { margin-right: -12px; }
  .vector-page-toolbar-container { display: flex; font-size: 0.8125em; box-shadow: 0px 1px rgb(200, 204, 209); margin-bottom: 1px; }
  .vector-page-toolbar-container .mw-portlet-views { display: none; }
  #left-navigation { display: flex; margin-left: -8px; flex-grow: 1; }
  #right-navigation { display: flex; margin-right: -8px; }
  #right-navigation .vector-menu-content { left: auto; right: -1px; }
  .vector-feature-page-tools-pinned-enabled .vector-page-toolbar-container .vector-page-tools-landmark, .vector-feature-page-tools-pinned-disabled .vector-column-end .vector-page-tools-landmark { display: none; }
  .vector-column-end {  }
  .vector-column-end .vector-page-tools-landmark { position: sticky; top: 0px; margin-top: 1.35em; }
  .vector-page-tools .vector-more-collapsible-item { display: block; }
  .vector-pinnable-header { align-items: center; padding: 6px 14px; font-size: 0.875rem; display: block; }
  .vector-pinnable-header:visited:not(.mw-selflink) { color: rgb(51, 102, 204); }
  .vector-pinned-container .vector-page-tools .vector-pinnable-header, .vector-pinned-container .vector-toc .vector-pinnable-header { padding: 12px 0px 7px; margin-bottom: -1px; }
  .vector-pinnable-header-label { display: inline-block; color: rgb(84, 89, 93); font-size: 0.875rem; margin: 0px; padding: 0px; border: 0px none; }
  .vector-pinnable-header-toggle-button { display: none; border: 0px none; padding: 0px; background-color: transparent; color: rgb(51, 102, 204); cursor: pointer; }
  .vector-pinnable-header-toggle-button:hover { color: rgb(68, 127, 245); }
  .vector-pinnable-header-toggle-button::before { content: "["; color: rgb(84, 89, 93); }
  .vector-pinnable-header-toggle-button::after { content: "]"; color: rgb(84, 89, 93); }
  .vector-pinned-container .vector-pinnable-element .vector-pinnable-header, .vector-pinned-container .vector-pinnable-element .vector-menu-heading, .vector-pinned-container .vector-pinnable-element .mw-list-item a { padding-left: 0px; padding-right: 0px; }
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  .vector-toc { max-height: 75vh; box-sizing: border-box; overflow-y: auto; overflow-x: hidden; background-color: rgb(255, 255, 255); }
  .vector-toc .vector-pinnable-header-label { overflow: unset; }
  .vector-toc .vector-toc-numb { display: none; }
  .vector-toc .vector-toc-toggle { display: none; position: absolute; top: 1px; left: calc(-1 * 1.834em - 1px); width: 1.834em; height: 1.834em; font-size: 0.75em; transition: all 100ms ease 0s; color: transparent; cursor: pointer; margin-top: 2px; }
  .vector-toc .vector-toc-link { color: rgb(51, 102, 204); display: block; }
  .vector-toc .vector-toc-list-item-active > .vector-toc-link, .vector-toc .vector-toc-level-1-active:not(.vector-toc-list-item-expanded) > .vector-toc-link, .vector-toc .vector-toc-list-item-active.vector-toc-level-1-active > .vector-toc-link { color: rgb(32, 33, 34); font-weight: bold; }
  .vector-toc .vector-toc-list-item-active > .vector-toc-link .vector-toc-text, .vector-toc .vector-toc-level-1-active:not(.vector-toc-list-item-expanded) > .vector-toc-link .vector-toc-text, .vector-toc .vector-toc-list-item-active.vector-toc-level-1-active > .vector-toc-link .vector-toc-text { width: calc(100% + 14px); }
  .vector-toc .vector-toc-level-1-active:not(.vector-toc-list-item-active) > .vector-toc-link { color: rgb(32, 33, 34); }
  .vector-toc .vector-toc-text { padding: 6px 0px; }
  .vector-toc .vector-toc-contents, .vector-toc .vector-toc-list { margin: 0px; list-style: outside none none; }
  .vector-toc .vector-toc-list-item { display: block; position: relative; list-style-type: none; padding-left: 8px; margin: 0px; }
  .vector-toc .vector-toc-list-item.vector-toc-level-1 { padding-left: 0px; }
  .vector-toc .vector-toc-list-item a { font-size: 0.875em; }
  .client-js .vector-toc .vector-toc-level-1 .vector-toc-list-item { display: none; }
  .client-js .vector-toc .vector-toc-level-1.vector-toc-list-item-expanded .vector-toc-list-item { display: block; }
  .client-js .vector-toc .vector-toc-toggle { display: block; }
  .client-js .vector-toc .vector-toc-level-1.vector-toc-list-item-expanded .vector-toc-toggle { transform: rotate(0deg); }
  .client-js body.ltr .vector-toc .vector-toc-toggle { transform: rotate(-90deg); }
  .vector-toc-landmark { display: none; }
  .vector-feature-toc-pinned-disabled body:not(.vector-sticky-header-visible) .vector-page-titlebar .vector-toc-landmark, .vector-feature-toc-pinned-disabled .vector-sticky-header-visible .vector-sticky-header .vector-toc-landmark, .vector-feature-toc-pinned-enabled .mw-table-of-contents-container.vector-toc-landmark { display: block; }
  .mw-ui-icon::before { opacity: 0.87; }
}
@media screen and (min-width: 1000px) {
  .mw-page-container { padding-left: 2.75em; padding-right: 2.75em; }
}
@media screen and (min-width: 1200px) {
  .mw-page-container { padding-left: 3.25em; padding-right: 3.25em; }
}
@media screen and (min-width: 1000px) {
}
@media screen and (min-width: 1200px) {
}
@media screen and (min-width: 1000px) {
  .mw-page-container-inner { display: grid; column-gap: 36px; grid-template: "header header" min-content "siteNotice siteNotice" min-content "mainMenu pageContent" min-content "toc pageContent" 1fr "footer footer" min-content / 12.25em minmax(0px, 1fr); }
  .vector-sitenotice-container { grid-area: siteNotice / siteNotice / siteNotice / siteNotice; }
  .mw-table-of-contents-container { grid-area: toc / toc / toc / toc; }
  .mw-header { grid-area: header / header / header / header; }
  .vector-main-menu-container { grid-area: mainMenu / mainMenu / mainMenu / mainMenu; }
  .mw-content-container { grid-area: pageContent / pageContent / pageContent / pageContent; }
  .mw-footer-container { grid-area: footer / footer / footer / footer; }
}
@media screen and (min-width: 1200px) {
  .mw-page-container-inner { grid-template-columns: 15.5em minmax(0px, 1fr); }
  .mw-header { display: grid; column-gap: 36px; grid-template: "headerStart headerEnd" auto / 15.5em minmax(0px, 1fr); }
  .mw-header .vector-header-start { grid-area: headerStart / headerStart / headerStart / headerStart; }
  .mw-header .vector-header-end { grid-area: headerEnd / headerEnd / headerEnd / headerEnd; }
}
@media screen and (min-width: 1000px) {
  .mw-body { display: grid; grid-template: "titlebar-cx ." min-content "titlebar columnEnd" min-content "toolbar columnEnd" min-content "content columnEnd" 1fr / minmax(0px, 60em) min-content; }
  .mw-body .vector-page-titlebar { grid-area: titlebar / titlebar / titlebar / titlebar; }
  .mw-body .vector-page-toolbar { grid-area: toolbar / toolbar / toolbar / toolbar; }
  .mw-body #bodyContent { grid-area: content / content / content / content; }
  .mw-body .vector-column-end { grid-area: columnEnd / columnEnd / columnEnd / columnEnd; }
}
@media screen and (min-width: 1000px) {
  .vector-feature-toc-pinned-enabled #mw-panel-toc { margin-left: -22px; }
  #vector-toc-pinned-container { position: sticky; top: 0px; }
  .vector-feature-toc-pinned-enabled #vector-toc-pinned-container { margin-top: 1.5em; }
  .vector-feature-main-menu-pinned-disabled.vector-feature-toc-pinned-enabled #vector-toc-pinned-container { margin-top: 1.85em; }
  #vector-toc-pinned-container .vector-toc { max-height: calc(100vh - 16px); padding: 1.125em 14px 24px 22px; }
  #vector-toc-pinned-container .vector-toc::after { content: ""; display: block; position: absolute; bottom: 0px; left: 0px; right: 0px; height: 30px; background: transparent linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255)) no-repeat scroll -12px center; pointer-events: none; }
}
@media screen and (max-width: 999px) {
  #vector-toc-collapsed-button, body:not(.vector-below-page-title) #vector-page-titlebar-toc-label { padding: 7px 12px; }
}
@media screen and (max-width: 999px) {
  .client-js .vector-page-titlebar-toc { display: block; }
  .client-js .vector-page-titlebar-toc > .vector-menu-content { max-width: none; }
  .client-js .vector-below-page-title .vector-page-titlebar-toc { position: fixed; top: 12px; left: 12px; margin: 0px; z-index: 3; }
}
@media screen and (min-width: 1000px) {
}
@media screen and (max-width: 999px) {
}
@media screen and (min-width: 720px) {
  .vector-user-menu.user-links-collapsible-item, .vector-user-menu .user-links-collapsible-item { display: none; }
}
@media screen and (min-width: 1000px) {
  .vector-user-links .mw-portlet-vector-user-menu-overflow { margin-right: 8px; }
  .vector-user-links .mw-portlet-vector-user-menu-overflow .vector-menu-content-list { column-gap: 8px; }
}
@media screen and (max-width: 719px) {
  .vector-user-links .mw-portlet-vector-user-menu-overflow .user-links-collapsible-item { display: none; }
}
@media screen and (min-width: 1200px) {
}
@media screen and (min-width: 1200px) {
  .client-js .mw-header .vector-search-box.vector-search-box-auto-expand-width { margin-left: -24px; }
}
@media screen and (min-width: 1000px) {
  .mw-header .vector-search-box { margin-right: 12px; }
}
@media screen and (max-width: 999px) {
  .mw-header {  }
}
@media screen and (min-width: 720px) {
  .vector-page-toolbar-container .mw-portlet-views:not(.emptyPortlet) { display: block; }
}
@media screen and (min-width: 720px) {
  .vector-page-tools .vector-more-collapsible-item { display: none; }
}
@media screen and (max-width: 719px) {
  .vector-page-tools .vector-has-collapsible-items { display: block; }
}
@media screen and (min-width: 1000px) {
  .client-js .vector-pinnable-header-unpinned .vector-pinnable-header-pin-button, .client-js .vector-pinnable-header-pinned .vector-pinnable-header-unpin-button { display: inline-block; }
}
@media screen and (max-width: 999px) {
  .client-js .vector-pinned-container, .client-nojs .vector-pinned-container { display: none; }
}
@media screen and (min-width: 1000px) {
}
@media screen and (max-width: 999px) {
  .client-js .vector-page-titlebar .vector-toc-landmark { display: block; }
  .client-js .mw-table-of-contents-container.vector-toc-landmark { display: none; }
}
@media all {
  .mw-logo { display: flex; height: 100%; align-items: center; min-width: 13.875em; }
  .vector-feature-main-menu-pinned-disabled .mw-logo { margin-left: 20px; }
  .mw-logo-icon { float: left; margin-right: 10px; display: none; width: 3.125em; height: 3.125em; }
  .mw-logo-container { float: left; max-width: 120px; }
  .mw-logo-container img { width: 100%; }
  .mw-logo-wordmark { display: block; margin: 0px auto; }
  .mw-logo-tagline { display: block; margin: 5px auto 0px; }
}
@media all and (min-width: 720px) {
  .mw-logo-icon { display: block; }
}
@media all and (min-width: 720px) {
  .mw-logo-container { max-width: none; }
  .mw-logo-container img { width: auto; }
}
@media print {
  .vector-page-toolbar, #mw-sidebar-checkbox, .vector-header-start > *:not(.mw-logo), .vector-header-end, #mw-panel-toc, #vector-sticky-header, #p-lang-btn, .vector-menu-checkbox, nav, #vector-page-titlebar-toc, #footer { display: none ! important; }
}
.vector-pinned-container { display: none; }
@supports (display:grid) {
  .vector-pinned-container { display: block; }
}
@media screen {
  div.thumbinner { border: 1px solid rgb(200, 204, 209); background-color: rgb(248, 249, 250); font-size: 94%; }
  .thumbimage { background-color: rgb(255, 255, 255); border: 1px solid rgb(200, 204, 209); }
  .thumbcaption { border: 0px none; font-size: 94%; }
  .magnify { float: right; margin-left: 3px; }
  .magnify a { display: block; text-indent: 15px; white-space: nowrap; overflow: hidden; width: 15px; height: 11px; background-image: url("magnify-clip-ltr.svg"); -moz-user-select: none; }
  .mw-content-ltr .thumbcaption { text-align: left; }
  .mw-content-ltr .magnify { margin-left: 3px; margin-right: 0px; float: right; }
  .mw-content-ltr .magnify a { background-image: url("magnify-clip-ltr.svg"); }
  a.mw-selflink { color: inherit; font-weight: bold; text-decoration: inherit; }
  a.mw-selflink:hover { cursor: inherit; text-decoration: inherit; }
  a.mw-selflink:active, a.mw-selflink:visited { color: inherit; }
  .mw-parser-output a.extiw, .mw-parser-output a.external { color: rgb(51, 102, 204); }
  .mw-parser-output a.extiw:visited, .mw-parser-output a.external:visited { color: rgb(121, 92, 178); }
  .mw-parser-output a.extiw:active, .mw-parser-output a.external:active { color: rgb(250, 167, 0); }
  .plainlinks a.external { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  .mw-body-content::after { clear: both; content: ""; display: block; }
  .mw-hide-empty-elt .mw-parser-output:not(.mw-show-empty-elt) .mw-empty-elt { display: none; }
  .wikitable { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); margin: 1em 0px; border: 1px solid rgb(162, 169, 177); border-collapse: collapse; }
  .wikitable > tr > th, .wikitable > tr > td, .wikitable > * > tr > th, .wikitable > * > tr > td { border: 1px solid rgb(162, 169, 177); padding: 0.2em 0.4em; }
  .wikitable > tr > th, .wikitable > * > tr > th { background-color: rgb(234, 236, 240); text-align: center; }
  #catlinks { text-align: left; }
  .catlinks { border: 1px solid rgb(162, 169, 177); background-color: rgb(248, 249, 250); padding: 5px; margin-top: 1em; clear: both; }
  .catlinks ul { display: inline; margin: 0px; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.25em; border-left: 1px solid rgb(162, 169, 177); margin: 0.125em 0px; padding: 0px 0.5em; }
  .catlinks li:first-child { padding-left: 0.25em; border-left: 0px none; }
  .mw-hidden-cats-hidden, .catlinks-allhidden { display: none; }
  .emptyPortlet { display: none; }
  .printfooter, .client-nojs #t-print { display: none; }
  .mw-editsection { -moz-user-select: none; }
  .mw-editsection, .mw-editsection-like { font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 0; }
  .mw-content-ltr .mw-editsection, .mw-content-rtl .mw-content-ltr .mw-editsection, .mw-content-ltr .mw-editsection-like, .mw-content-rtl .mw-content-ltr .mw-editsection-like { margin-left: 1em; margin-right: 0px; }
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
  p { margin: 0.4em 0px 0.5em; }
  ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  ol { margin: 0.3em 0px 0px 3.2em; padding: 0px; list-style-image: none; }
  li { margin-bottom: 0.1em; }
  dt { font-weight: bold; margin-bottom: 0.1em; }
  dl { margin-top: 0.2em; margin-bottom: 0.5em; }
  table { font-size: 100%; }
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
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(blk), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kjp), h1:lang(kn), h1:lang(ks), h1:lang(ksw), h1:lang(mag), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(mnw), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(rki), h1:lang(sa), h1:lang(shn), h1:lang(syl), h1:lang(ta), h1:lang(te) { line-height: 1.6em ! important; }
  h2:lang(anp), h2:lang(as), h2:lang(bh), h2:lang(bho), h2:lang(blk), h2:lang(bn), h2:lang(gu), h2:lang(hi), h2:lang(kjp), h2:lang(kn), h2:lang(ks), h2:lang(ksw), h2:lang(mag), h2:lang(ml), h2:lang(mr), h2:lang(my), h2:lang(mai), h2:lang(mnw), h2:lang(ne), h2:lang(new), h2:lang(or), h2:lang(pa), h2:lang(pi), h2:lang(rki), h2:lang(sa), h2:lang(shn), h2:lang(syl), h2:lang(ta), h2:lang(te), h3:lang(anp), h3:lang(as), h3:lang(bh), h3:lang(bho), h3:lang(blk), h3:lang(bn), h3:lang(gu), h3:lang(hi), h3:lang(kjp), h3:lang(kn), h3:lang(ks), h3:lang(ksw), h3:lang(mag), h3:lang(ml), h3:lang(mr), h3:lang(my), h3:lang(mai), h3:lang(mnw), h3:lang(ne), h3:lang(new), h3:lang(or), h3:lang(pa), h3:lang(pi), h3:lang(rki), h3:lang(sa), h3:lang(shn), h3:lang(syl), h3:lang(ta), h3:lang(te), h4:lang(anp), h4:lang(as), h4:lang(bh), h4:lang(bho), h4:lang(blk), h4:lang(bn), h4:lang(gu), h4:lang(hi), h4:lang(kjp), h4:lang(kn), h4:lang(ks), h4:lang(ksw), h4:lang(mag), h4:lang(ml), h4:lang(mr), h4:lang(my), h4:lang(mai), h4:lang(mnw), h4:lang(ne), h4:lang(new), h4:lang(or), h4:lang(pa), h4:lang(pi), h4:lang(rki), h4:lang(sa), h4:lang(shn), h4:lang(syl), h4:lang(ta), h4:lang(te), h5:lang(anp), h5:lang(as), h5:lang(bh), h5:lang(bho), h5:lang(blk), h5:lang(bn), h5:lang(gu), h5:lang(hi), h5:lang(kjp), h5:lang(kn), h5:lang(ks), h5:lang(ksw), h5:lang(mag), h5:lang(ml), h5:lang(mr), h5:lang(my), h5:lang(mai), h5:lang(mnw), h5:lang(ne), h5:lang(new), h5:lang(or), h5:lang(pa), h5:lang(pi), h5:lang(rki), h5:lang(sa), h5:lang(shn), h5:lang(syl), h5:lang(ta), h5:lang(te), h6:lang(anp), h6:lang(as), h6:lang(bh), h6:lang(bho), h6:lang(blk), h6:lang(bn), h6:lang(gu), h6:lang(hi), h6:lang(kjp), h6:lang(kn), h6:lang(ks), h6:lang(ksw), h6:lang(mag), h6:lang(ml), h6:lang(mr), h6:lang(my), h6:lang(mai), h6:lang(mnw), h6:lang(ne), h6:lang(new), h6:lang(or), h6:lang(pa), h6:lang(pi), h6:lang(rki), h6:lang(sa), h6:lang(shn), h6:lang(syl), h6:lang(ta), h6:lang(te) { line-height: 1.4em; }
  h2:lang(th) { line-height: 1.6; }
}
@media print {
  div.thumb { page-break-inside: avoid; }
  div.thumb a { border-bottom: 0px none; }
  div.thumbinner { border: 1px none; background-color: rgb(255, 255, 255); font-size: 10pt; color: rgb(102, 102, 102); border-radius: 2px; min-width: 100px; }
  .magnify { display: none; }
  .mw-parser-output a.external {  }
  .mw-parser-output a.external.text::after, .mw-parser-output a.external.autonumber::after { content: " (" attr(href) ")"; word-break: break-all; overflow-wrap: break-word; }
  .wikitable { background: rgb(255, 255, 255) none repeat scroll 0% 0%; margin: 1em 0px; border: 1pt solid rgb(170, 170, 170); border-collapse: collapse; font-size: 10pt; page-break-inside: avoid; }
  .wikitable > tr > th, .wikitable > tr > td, .wikitable > * > tr > th, .wikitable > * > tr > td { background: rgb(255, 255, 255) none repeat scroll 0% 0% ! important; color: rgb(0, 0, 0) ! important; border: 1pt solid rgb(170, 170, 170); padding: 0.4em 0.6em; }
  .wikitable > tr > th, .wikitable > * > tr > th { text-align: center; }
  .catlinks ul { display: inline; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.15; margin: 0.1em 0px; border-left: 1pt solid rgb(170, 170, 170); padding: 0px 0.4em; }
  .catlinks li:first-child { border-left: 0px none; padding-left: 0.2em; }
  .mw-hidden-catlinks, .catlinks { display: none; }
  .mw-editsection, .mw-editsection-like, .mw-indicators, #siteNotice, .usermessage { display: none; }
  .printfooter { padding: 1em 0px; }
  a { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  a, a.external, a.new, a.stub { color: inherit ! important; text-decoration: inherit ! important; }
  dt { font-weight: bold; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; page-break-after: avoid; page-break-before: avoid; }
  p { margin: 1em 0px; line-height: 1.2; }
  img, figure { page-break-inside: avoid; }
  img { border: 0px none; vertical-align: middle; }
  ul { list-style-type: square; }
}
