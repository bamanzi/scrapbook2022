/* Code tidied up by ScrapBook */
#content .category-page__total-number, #content .category-page__trending-pages-header { font-size: 18px; font-weight: 500; margin: 30px 0px 12px; }
#content .category-page__total-number { margin-bottom: 30px; }
#content .category-page__trending-pages { grid-gap: 20px; border-bottom:1px solid var(--theme-border-color); display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; list-style: outside none none; margin: 0px; padding-bottom: 40px; }
@media only screen and (min-width: 1500px) {
  #content .category-page__trending-pages { display: flex; flex-wrap: wrap; }
}
#content .category-page__trending-page { margin: 0px; }
#content .category-page__trending-page-thumbnail { border:1px solid var(--theme-border-color); border-radius: 3px; box-sizing: border-box; width: 100%; }
#content .category-page__trending-page-title { color:var(--theme-page-text-color); font-weight: 400; line-height: 1.5; margin-top: 9px; }
@media only screen and (min-width: 1500px) {
  #content .category-page__trending-page { max-width: 193px; }
}
#content .category-page__alphabet-shortcuts { font-weight: 700; list-style: outside none none; margin: 0px 0px 35px; text-align: center; }
#content .category-page__alphabet-shortcut { display: inline; text-transform: uppercase; }
#content .category-page__alphabet-shortcut::after { color:var(--theme-link-color); content: "•"; }
#content .category-page__alphabet-shortcut a { cursor: pointer; display: inline-block; margin: 0px 2px 0px -1px; padding: 0px 1px; }
#content .category-page__alphabet-shortcut:last-child::after { display: none; }
#content .category-page__members { margin-bottom: 30px; }
#content .category-page__members:not(.has-single-member) { column-count: 2; column-gap: 28px; }
#content .category-page__first-char, #content .category-page__members-wrapper {  }
#content .category-page__first-char { border-bottom:1px solid var(--theme-border-color); font-size: 18px; font-weight: 500; margin: 0px; padding: 10px 0px 3px; }
#content .category-page__member { -moz-box-align: center; align-items: center; display: flex; margin: 0px; padding: 9px 0px; }
#content .category-page__member-left { -moz-box-pack: center; display: flex; flex-shrink: 0; justify-content: center; width: 40px; }
#content .category-page__member-left-icon { color:rgba(var(--theme-page-text-color--rgb),.75); margin: 6px 0px; }
#content .category-page__member-thumbnail { border:1px solid var(--theme-border-color); border-radius: 3px; box-sizing: border-box; height: 30px; width: 40px; }
#content .category-page__member-link { padding-left: 12px; }
.community-header-wrapper { -moz-box-orient: vertical; -moz-box-direction: normal; -moz-box-pack: end; display: flex; flex-direction: column; height: 148px; justify-content: flex-end; }
.fandom-community-header { color:var(--theme-community-header-color); display: grid; grid-template-columns: min-content 1fr; grid-template-rows: 1fr min-content; width: 100%; }
.fandom-community-header a { color:var(--theme-community-header-color); }
.fandom-community-header a:active, .fandom-community-header a:focus, .fandom-community-header a:hover { color:var(--theme-community-header-color--hover); }
.fandom-community-header__image { margin-right: 18px; }
@media only screen and (min-width: 1280px) {
  .fandom-community-header__image { grid-row: 1 / 3; }
}
.fandom-community-header__image img { display: block; max-height: 100px; max-width: 250px; object-fit: scale-down; object-position: center bottom; width: auto; }
@media only screen and (max-width: 1279px) {
  .fandom-community-header__image img { max-height: 80px; max-width: 174px; }
}
.fandom-community-header__top-container { -moz-box-align: end; align-items: flex-end; display: flex; }
.fandom-community-header__community-name-wrapper { -moz-box-align: center; align-items: center; display: flex; }
.fandom-community-header__community-name { -moz-box-orient: vertical; color: inherit; display: -webkit-box; font-size: 18px; font-weight: 500; line-height: 1.25; margin-right: 9px; overflow: hidden; text-decoration: none; }
@media only screen and (min-width: 1280px) {
  .fandom-community-header__community-name { font-size: 24px; }
}
.fandom-community-header__community-name:active, .fandom-community-header__community-name:focus, .fandom-community-header__community-name:hover { color: inherit; }
@media only screen and (max-width: 1279px) {
  .fandom-community-header__local-navigation { grid-column: 1 / 3; }
}
.wiki-tools .wds-button.wds-is-secondary { --wds-secondary-button-label-color:var(--theme-community-header-color); --wds-secondary-button-label-color--hover:var(--theme-community-header-color--hover); padding: 5px 6px; }
.fandom-sticky-header .wiki-tools { margin-left: auto; }
.fandom-sticky-header .wiki-tools .wds-button.wds-is-secondary { --wds-secondary-button-label-color:var(--theme-sticky-nav-text-color); --wds-secondary-button-label-color--hover:var(--theme-sticky-nav-text-color--hover); }
@media only screen and (max-width: 1023px) {
}
.fandom-community-header__local-navigation { padding: 0px; }
.fandom-community-header__local-navigation .wds-dropdown::after, .fandom-community-header__local-navigation .wds-dropdown::before, .fandom-community-header__local-navigation .wds-dropdown__content { z-index: 400; }
.fandom-community-header__local-navigation .navigation-item-icon { margin-right: 6px; }
.fandom-community-header__local-navigation .wds-tabs { grid-column-gap: 24px; display: grid; grid-template-columns: repeat(auto-fit, minmax(2ch, max-content)) ; width: 100%; }
.fandom-community-header__local-navigation .wds-tabs__tab-label { font-size: 12px; letter-spacing: normal; margin: 0px; max-width: 100%; text-transform: uppercase; }
.fandom-community-header__local-navigation .first-level-item a { font-weight: 700; line-height: 1.25; overflow: hidden; }
.fandom-community-header__local-navigation .first-level-item a span { overflow: hidden; text-overflow: ellipsis; }
.fandom-community-header__local-navigation .wds-dropdown__content { max-width: 181px; padding: 9px 0px; width: -moz-max-content; }
.fandom-community-header__local-navigation .wds-dropdown__content .wds-list.wds-is-linked > li { margin: 0px; padding: 0px 12px; white-space: normal; }
.fandom-community-header__local-navigation .wds-dropdown__content .wds-list.wds-is-linked > li > a { -moz-box-align: center; align-items: center; border-radius: 3px; display: flex; line-height: 1.5; padding: 6px; }
.fandom-community-header__local-navigation .wds-dropdown__content .wds-list.wds-is-linked > li > a > span { -moz-box-orient: vertical; display: -webkit-box; overflow: hidden; text-overflow: ellipsis; }
.fandom-community-header__local-navigation .wds-dropdown__content .wds-list.wds-is-linked > li > a > svg:not(.navigation-item-icon) { fill:var(--theme-page-text-mix-color); }
.fandom-community-header__local-navigation .explore-menu .wds-dropdown__toggle > a > span { margin-left: 6px; }
.fandom-sticky-header .fandom-community-header__local-navigation { -moz-box-align: center; -moz-box-flex: 1; align-items: center; flex-grow: 1; margin: 0px 24px; }
@media only screen and (max-width: 1023px) {
  .fandom-community-header__local-navigation .explore-menu .wds-dropdown__toggle > a > span { display: none; }
  .fandom-community-header__local-navigation .explore-menu .wds-dropdown__content { left: -12px; transform: none; }
  .fandom-sticky-header .fandom-community-header__local-navigation { margin-left: 0px; }
  .fandom-sticky-header .fandom-community-header__local-navigation .wds-tabs { grid-column-gap: 15px; }
}
@media only screen and (min-width: 1280px) {
}
@media only screen and (min-width: 1024px) and (max-width: 1279px) {
}
@media only screen and (max-width: 1023px) {
}
@media only screen and (min-width: 1280px) {
}
@media only screen and (min-width: 1024px) and (max-width: 1279px) {
}
@media only screen and (max-width: 1023px) {
}
.page-counter { font-weight: 500; line-height: 1; margin-left: auto; margin-right: 6px; text-align: right; text-transform: uppercase; }
.page-counter__value { font-size: 18px; line-height: 17px; }
.page-counter__label { font-size: 14px; line-height: 13px; }
.fandom-community-header__background { --header-background-image-height:160px; background:var(--theme-body-background-image) no-repeat; height:var(--header-background-image-height); margin-bottom:calc(var(--header-background-image-height)*-1); opacity:var(--theme-background-image-opacity); position: sticky; top: 0px; width: 100%; z-index: -2; }
.fandom-community-header__background.tileBoth { background-repeat: repeat; }
.fandom-community-header__background.fullScreen { margin-bottom: auto; position: fixed; width: calc(100% - 66px); }
.fandom-community-header__background.fullScreen.cover, .fandom-community-header__background.fullScreen.tileBoth, .fandom-community-header__background.fullScreen.tileHorizontally, .fandom-community-header__background.fullScreen.tileVertically { height: 100%; }
:root { --fandom-text-color:#1e0c1b; --fandom-text-color--rgb:30,12,27; --fandom-text-color--hover:#67295d; --fandom-link-color:#9b004e; --fandom-link-color--hover:#6d0037; --fandom-link-color--rgb:155,0,78; --fandom-link-color--fadeout:rgba(155,0,78,.1); --fandom-accent-color:#520044; --fandom-accent-color--hover:#b80099; --fandom-accent-label-color:#fff; --fandom-border-color:#d6d0d5; --fandom-secondary-button-color:#291927; --fandom-secondary-button-color--hover:#684063; --fandom-dropdown-background-color:#fff; --fandom-notifications-background-color:#fff; --fandom-notifications-read-card-background-color:#fff; --fandom-notifications-unread-card-background-color:#eee6ec; --fandom-notifications-footer-text-color:#291927; --fandom-banner-notification-background-color:#fff; --fandom-banner-notifications-close-icon:#595358; --fandom-mobile-body-gradient:linear-gradient(180deg,#fff,#fff 55px,#f5f3f5 100vh,#f5f3f5); }
:root { --fandom-global-nav-background-color:#ffc500; --fandom-global-nav-text-color:#1e0c1b; --fandom-global-nav-link-color:#520044; --fandom-global-nav-link-color--hover:#b80099; --fandom-global-nav-icon-color:#fa005a; --fandom-global-nav-icon-background-color:#f9edd8; --fandom-global-nav-icon-background-color--hover:#f9edd8; --fandom-global-nav-icon-background-color--active:#fff; --fandom-global-nav-icon-border-color:#520044; --fandom-global-nav-icon-border-color--hover:rgba(82,0,68,.5); --fandom-global-nav-icon-border-color--active:#520044; --fandom-global-nav-bottom-icon-color:#520044; --fandom-global-nav-counter-background-color:#520044; --fandom-global-nav-counter-label-color:#fff; --fandom-global-nav-mobile-logo:url(https://stexpanded.fandom.com/resources-ucp/dist/svg/wds-brand-fandom-logo.svg); --fandom-global-nav-search-active-link-background-color:#fff; --fandom-global-nav-search-active-link-border-color:#520044; --fandom-global-nav-logo-separator-color:#520044; --fandom-global-nav-separator-color:rgba(30,12,27,.25); --fandom-global-nav-gp-legacy-logo:url(https://stexpanded.fandom.com/resources-ucp/dist/svg/wds-brand-gamepedia-badge-orange.svg); --fandom-global-nav-border-top-width:0; }
.global-footer { --global-footer-links-in-column:2; overflow-wrap: break-word; background-color: rgb(40, 0, 51); box-sizing: border-box; color: rgb(255, 255, 255); font-size: 14px; margin-top: 30px; }
.global-footer ul { list-style-type: none; margin: 0px; padding: 0px; }
.global-footer__header { line-height: 0; margin-bottom: 42px; text-align: center; }
.global-footer__header + .global-footer__section { margin-top: 0px; }
.global-footer__header-logo { height: 46px; width: 183px; }
.global-footer__bottom { background: rgb(0, 0, 0) none repeat scroll 0% 0%; font-size: 12px; min-height: 50px; padding: 0px 20px; text-align: center; }
.global-footer__bottom a, .global-footer__bottom a:visited { color: rgb(255, 197, 0); text-decoration: none; }
.global-footer__bottom a:hover { color: rgb(255, 255, 255); }
.global-footer__bottom > div { margin: 0px auto; padding: 16px 0px; }
.global-footer__bottom > div ~ div { border-top: 1px solid rgba(255, 255, 255, 0.25); }
.global-footer__content { padding: 42px 18px 36px; width: 100%; }
.global-footer__link { font-weight: 400; line-height: 2.7; transition: color 0.3s ease 0s; }
.global-footer__link, .global-footer__link:active, .global-footer__link:focus, .global-footer__link:visited { color: rgb(255, 197, 0); text-decoration: none; }
.global-footer__link:hover { color: rgb(255, 255, 255); text-decoration: none; }
.global-footer__section { margin-top: 42px; }
.global-footer__section-community .global-footer__links, .global-footer__section-fandom-overview .global-footer__links, .global-footer__section-site-overview .global-footer__links { column-count:var(--global-footer-links-in-column); column-gap: 30px; }
.global-footer__section-social-links .global-footer__section-header { margin-bottom: 12px; }
.global-footer__section-social-links .global-footer__links { grid-gap: 18px; display: grid; grid-template-columns: repeat(auto-fill, 18px) ; }
.global-footer__section-social-links .wds-icon { color: rgb(249, 237, 216); transition: color 0.3s ease 0s; }
.global-footer__section-social-links .wds-icon:hover { color: rgb(255, 255, 255); }
.global-footer__section-ddb-stores, .global-footer__section-fandom-stores { -moz-box-align: start; align-items: flex-start; display: flex; line-height: 0; position: relative; }
.global-footer__section-ddb-stores .global-footer__icon, .global-footer__section-fandom-stores .global-footer__icon { border-radius: 6px; height: 78px; margin: 0px 18px 0px 0px; overflow: hidden; width: 78px; }
.global-footer__section-ddb-stores .global-footer__link, .global-footer__section-fandom-stores .global-footer__link { display: flex; line-height: 1; }
.global-footer__section-ddb-stores .global-footer__links li, .global-footer__section-fandom-stores .global-footer__links li { margin-bottom: 8px; }
.global-footer__section-ddb-stores .global-footer__links li:last-child, .global-footer__section-fandom-stores .global-footer__links li:last-child { margin-bottom: 0px; }
.global-footer__section-ddb-stores .global-footer__link-icon, .global-footer__section-fandom-stores .global-footer__link-icon { height: 35px; width: 119px; }
.global-footer__section-fandom-stores { margin-bottom: 18px; margin-top: 12px; padding-bottom: 18px; }
.global-footer__section-fandom-stores::after { border-bottom: 1px solid rgb(89, 83, 88); bottom: 0px; content: ""; display: block; height: 1px; left: 0px; position: absolute; width: 230px; }
.global-footer__section-ddb-stores { margin-top: 0px; }
.global-footer__section-header { color: rgb(255, 255, 255); font-size: 12px; line-height: 1; margin-bottom: 6px; }
.global-footer__section-header, .global-footer__switch-view { font-weight: 700; text-transform: uppercase; }
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .global-footer { --global-footer-links-in-column:3; }
  .global-footer__section-fandom-stores { border-right: 1px solid grey; float: left; margin: 30px 30px 0px 0px; padding: 0px 30px 0px 0px; }
  .global-footer__section-fandom-stores::after { display: none; }
  .global-footer__section-ddb-stores { margin: 30px 0px 0px 30px; }
}
@media only screen and (min-width: 1024px) {
  .global-footer { --global-footer-links-in-column: unset; }
  .global-footer__header { margin-bottom: 24px; text-align: left; }
  .global-footer__section:first-child { margin-top: 18px; }
  .global-footer__section + .global-footer__section:not(.global-footer__section-ddb-stores) { margin-top: 30px; }
  .global-footer__link { line-height: 2; }
  .global-footer__content { grid-column-gap: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; margin: 0px auto; max-width: 1024px; padding: 70px 20px 40px; }
}
:root { --desktop-global-navigation-width:66px; }
.global-navigation { -moz-box-orient: vertical; -moz-box-direction: normal; -moz-box-pack: justify; background-color:var(--fandom-global-nav-background-color); border-top:var(--fandom-global-nav-border-top-width) solid var(--fandom-global-nav-link-color); bottom: 0px; box-shadow: 0px 3px 12px 0px rgba(0, 0, 0, 0.3); color:var(--fandom-global-nav-link-color); display: flex; flex-direction: column; font-size: 14px; justify-content: space-between; left: 0px; position: fixed; top: 0px; width: 66px; z-index: 800; }
.global-navigation a:active, .global-navigation a:focus, .global-navigation a:hover, .global-navigation a:visited { text-decoration: none; }
.global-navigation ol, .global-navigation ul { list-style: outside none none; margin: 0px; padding: 0px; }
.global-navigation__bottom, .global-navigation__nav, .global-navigation__top { display: grid; justify-items: center; }
.global-navigation__bottom, .global-navigation__top { background-color:var(--fandom-global-nav-background-color); padding: 9px 0px; }
.global-navigation__bottom { bottom: 0px; position: fixed; }
.global-navigation__nav { grid-row-gap: 12px; max-width: 100%; }
.global-navigation__logo { font-size: 10px; font-weight: 700; line-height: 1; text-align: center; }
.global-navigation__logo .wds-icon { height: 45px; margin-bottom: 6px; width: 60px; }
.global-navigation__logo, .global-navigation__logo:active, .global-navigation__logo:focus, .global-navigation__logo:hover, .global-navigation__logo:visited { color:var(--fandom-global-nav-link-color); }
.global-navigation__links { grid-row-gap: 15px; display: grid; }
.global-navigation__link { -moz-box-align: center; -moz-box-orient: vertical; -moz-box-direction: normal; align-items: center; color:var(--fandom-global-nav-link-color); display: flex; flex-direction: column; }
.global-navigation__icon { -moz-box-align: center; place-items: center; background-color: transparent; border:2px solid var(--fandom-global-nav-background-color); border-radius: 50%; display: inline-grid; height: 40px; position: relative; transition-duration: 0.3s; transition-property: background-color, border-color; width: 40px; }
.global-navigation__icon, .global-navigation__icon:active, .global-navigation__icon:focus, .global-navigation__icon:hover, .global-navigation__icon:visited { color:var(--fandom-global-nav-link-color); }
.global-navigation__bottom .wds-dropdown__toggle > .global-navigation__icon, .global-navigation__bottom .wds-dropdown__toggle > .global-navigation__icon:active, .global-navigation__bottom .wds-dropdown__toggle > .global-navigation__icon:focus, .global-navigation__bottom .wds-dropdown__toggle > .global-navigation__icon:hover, .global-navigation__bottom .wds-dropdown__toggle > .global-navigation__icon:visited { color:var(--fandom-global-nav-bottom-icon-color); }
.global-navigation__icon.has-border { border-color:var(--fandom-global-nav-icon-border-color); height: 36px; width: 36px; }
.global-navigation__icon.has-border, .global-navigation__icon.has-border + .global-navigation__label, .global-navigation__icon.has-border:active, .global-navigation__icon.has-border:focus, .global-navigation__icon.has-border:hover, .global-navigation__icon.has-border:visited { color:var(--fandom-global-nav-icon-border-color); }
.global-navigation__icon.has-background { background-color:var(--fandom-global-nav-icon-background-color); }
.global-navigation__icon.has-background, .global-navigation__icon.has-background:active, .global-navigation__icon.has-background:focus, .global-navigation__icon.has-background:hover, .global-navigation__icon.has-background:visited { color:var(--fandom-global-nav-icon-color); }
.global-navigation__icon:hover, .global-navigation__link:hover .global-navigation__icon, .wds-dropdown:hover .global-navigation__icon { background-color:var(--fandom-global-nav-icon-background-color--hover); border-color:var(--fandom-global-nav-icon-border-color--hover); }
.global-navigation__icon.has-border:hover, .global-navigation__link:hover .global-navigation__icon.has-border, .wds-dropdown:hover .global-navigation__icon.has-border { border-color: inherit; }
.global-navigation__icon:active, .global-navigation__icon:focus, .global-navigation__link:active .global-navigation__icon, .global-navigation__link:focus .global-navigation__icon, .wds-dropdown.wds-is-active .global-navigation__icon { background-color:var(--fandom-global-nav-icon-background-color--active); border-color:var(--fandom-global-nav-icon-border-color--active); }
.wds-dropdown .global-navigation__icon { margin-bottom: 0px; }
.global-navigation__label { font-size: 10px; font-weight: 700; line-height: 1.25; margin-top: 4px; max-width: 54px; overflow: hidden; position: relative; text-align: center; text-transform: uppercase; transition: color 0s ease 0s, opacity 0.3s ease 0s; }
.global-navigation__label, .global-navigation__label:active, .global-navigation__label:focus, .global-navigation__label:hover, .global-navigation__label:visited { color:var(--fandom-global-nav-link-color); }
.global-navigation .wds-dropdown { --wds-dropdown-background-color:var(--fandom-dropdown-background-color); --wds-dropdown-border-color:var(--fandom-border-color); --wds-dropdown-text-color:var(--fandom-text-color); --wds-dropdown-linked-item-color:var(--fandom-link-color); --wds-dropdown-linked-item-background-color:var(--fandom-link-color--fadeout); --wds-dropdown-scrollable-shadow-color:rgba(30,12,27,.1); line-height: 0; margin-left: 13px; }
.global-navigation .wds-dropdown__toggle { width: 53px; }
.global-navigation .wds-dropdown__toggle .global-navigation__label { padding-right: 13px; }
.global-navigation .wds-dropdown .wds-dropdown__content { box-shadow: 6px 3px 12px -9px rgba(255, 255, 255, 0.3); }
.global-navigation .wds-dropdown.is-attached-to-bottom .wds-dropdown__content { bottom: 0px; left: 66px; position: fixed; top: auto; }
.global-navigation .wds-dropdown.is-anon-dropdown .wds-dropdown__content { padding: 0px 12px; }
.global-navigation .wds-dropdown.is-anon-dropdown .wds-dropdown__content > * { margin: 12px 0px; }
.global-navigation .wds-dropdown.is-anon-dropdown .wds-dropdown__content hr { border-bottom: 0px none; border-top: 1px solid rgb(214, 208, 213); }
.global-navigation .wds-dropdown.is-anon-dropdown .wds-dropdown__content .global-navigation__register-text { line-height: 1.75; }
.global-navigation .wds-button { --wds-primary-button-background-color:var(--fandom-accent-color); --wds-primary-button-background-color--hover:var(--fandom-accent-color--hover); --wds-primary-button-label-color:var(--fandom-accent-label-color); --wds-secondary-button-label-color:var(--fandom-text-color); --wds-secondary-button-label-color--hover:var(--fandom-text-color--hover); }
@media only screen and (max-height: 750px) {
  .global-navigation__nav { grid-row-gap: 3px; }
  .global-navigation__links { grid-row-gap: 6px; }
  .global-navigation__label { margin-top: 2px; }
  .global-navigation__icon { height: 34px; width: 34px; }
  .global-navigation__icon svg { height: 22px; min-width: 22px; width: 22px; }
  .global-navigation__icon.has-border { height: 30px; width: 30px; }
  .global-navigation__icon.has-background svg, .global-navigation__icon.has-border svg { height: 18px; min-width: 18px; width: 18px; }
  .global-navigation .wds-dropdown { margin-left: 16px; }
  .global-navigation .wds-dropdown__toggle { width: 50px; }
  .global-navigation .wds-dropdown__toggle .global-navigation__label { padding-right: 16px; }
}
@keyframes searchModalSlideIn {
0% { opacity: 0; transform: translateY(30px); }
}
@keyframes searchModalSlideIn {
0% { opacity: 0; transform: translateY(30px); }
}
@keyframes searchOverlayFadeIn {
0% { opacity: 0; }
}
@keyframes searchOverlayFadeIn {
0% { opacity: 0; }
}
@keyframes fandom-spinner-rotator {
0% { transform: rotate(0deg); }
100% { transform: rotate(1turn); }
}
@keyframes fandom-spinner-rotator {
0% { transform: rotate(0deg); }
100% { transform: rotate(1turn); }
}
@keyframes fandom-spinner-dash {
100% { stroke-dashoffset: 0; }
}
@keyframes fandom-spinner-dash {
100% { stroke-dashoffset: 0; }
}
.fandom-sticky-header { -moz-box-align: center; align-items: center; background-color:var(--theme-sticky-nav-background-color); box-shadow: 0px 3px 12px 0px rgba(0, 0, 0, 0.3); color:var(--theme-sticky-nav-text-color); display: flex; height: 46px; left: 66px; min-width: 460px; padding: 0px 12px; position: fixed; right: 0px; top: -46px; transition: transform 0.5s ease 0s, -webkit-transform 0.5s ease 0s; z-index: 701; }
@media only screen and (min-width: 768px) {
  .fandom-sticky-header { min-width: 702px; }
}
.fandom-sticky-header.is-visible { transform: translateY(100%); }
.fandom-sticky-header a { color:var(--theme-sticky-nav-text-color); }
.fandom-sticky-header a:active, .fandom-sticky-header a:focus, .fandom-sticky-header a:hover { color:var(--theme-sticky-nav-text-color--hover); }
.fandom-sticky-header__sitename { -moz-box-orient: vertical; display: -webkit-box; flex-shrink: 1; font-size: 16px; font-weight: 700; line-height: 1.25; max-width: 350px; min-width: -moz-min-content; overflow: hidden; text-decoration: none; }
@media only screen and (max-width: 1023px) {
  .fandom-sticky-header__sitename { display: none; }
}
@media screen and (max-width: 1024px) {
}
.thumb .thumbcaption { position: relative; }
.thumb .thumbcaption p { font-size: 12px; line-height: 16px; margin: 0px; }
.wds-banner-notification__container { bottom: 0px; margin: 0px auto; position: absolute; width: 420px; }
.wds-banner-notification__text__read-more { display: none; }
.WikiaBarWrapper { background-color:var(--theme-accent-color); border-radius: 20px; bottom: 9px; position: fixed; right: 9px; transition: all 0.2s ease-in 0.2s; z-index: 399; }
.WikiaBarWrapper .wikia-bar { -moz-box-align: center; align-items: center; display: flex; font-size: 12px; padding-left: 5px; }
.WikiaBarWrapper .wikia-bar .wikiabar-button { border-right:1px solid rgba(var(--theme-page-dynamic-color-1--rgb),.25); color:var(--theme-accent-label-color); display: inline-block; margin: 2px 0px; padding: 1px 8px 0px; }
.WikiaBarWrapper .wikia-bar .message { margin: 0px 24px; text-align: right; white-space: nowrap; width: 420px; }
.WikiaBarWrapper .wikia-bar .message a { color:var(--theme-accent-label-color); text-decoration: none; }
.WikiaBarWrapper .arrow { line-height: 1; padding: 4px 4px 2px 0px; }
.WikiaBarWrapper .arrow .close-icon { background-color:var(--theme-accent-label-color); border-radius: 50%; color:var(--theme-accent-color); padding: 2px; }
.WikiaBarCollapseWrapper { background-position: 50% center; background-repeat: no-repeat; bottom: 9px; position: fixed; right: 9px; transition: all 0.2s ease-in 0.2s; z-index: 399; }
.WikiaBarCollapseWrapper.hidden { bottom: -75px; transition: all 0.2s ease-in 0s; }
.WikiaBarCollapseWrapper .wikia-bar-collapse { background-color:var(--theme-accent-color); border-radius: 50%; color:var(--theme-accent-label-color); display: block; float: right; height: 36px; padding: 9px; width: 36px; }
.client-js .mw-content-ltr .mw-editsection-bracket:first-of-type, .client-js .mw-content-rtl .mw-editsection-bracket:not(:first-of-type) { margin-right: 0.25em; color: rgb(84, 89, 93); }
.client-js .mw-content-rtl .mw-editsection-bracket:first-of-type, .client-js .mw-content-ltr .mw-editsection-bracket:not(:first-of-type) { margin-left: 0.25em; color: rgb(84, 89, 93); }
@media print {
  .noprint, .catlinks, .magnify, .mw-cite-backlink, .mw-editsection, .mw-editsection-like, .mw-hidden-catlinks, .mw-indicators, .mw-redirectedfrom, .patrollink, .usermessage, #column-one, #footer-places, #mw-navigation, #siteNotice, #f-poweredbyico, #f-copyrightico, li#about, li#disclaimer, li#mobileview, li#privacy { display: none; }
  body { background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); margin: 0px; padding: 0px; }
  a { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% !important; padding: 0px !important; }
  a, a.external, a.new, a.stub { color: inherit !important; text-decoration: inherit !important; }
  .mw-parser-output a.external.text::after, .mw-parser-output a.external.autonumber::after { content: " (" attr(href) ")"; word-break: break-all; overflow-wrap: break-word; }
  dt { font-weight: bold; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; page-break-after: avoid; page-break-before: avoid; }
  p { margin: 1em 0px; line-height: 1.2; }
  img, figure, .wikitable, .thumb { page-break-inside: avoid; }
  img { border: 0px none; vertical-align: middle; }
  ul { list-style-type: square; }
  html .thumbcaption { text-align: left; line-height: 1.4; padding: 3px; }
}
@media screen {
  .mw-content-ltr { direction: ltr; }
  @supports (text-decoration:underline dotted) {
  abbr[title], .explain[title] { border-bottom: 0px none; text-decoration: underline dotted; }
}
  .mw-content-ltr .thumbcaption { text-align: left; }
  a.new { color: rgb(186, 0, 0); }
  .mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  .mw-content-ltr dd, .mw-content-rtl .mw-content-ltr dd { margin-left: 1.6em; margin-right: 0px; }
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kn), h1:lang(ks), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(sa), h1:lang(ta), h1:lang(te) { line-height: 1.6em !important; }
  h2:lang(anp), h3:lang(anp), h4:lang(anp), h5:lang(anp), h6:lang(anp), h2:lang(as), h3:lang(as), h4:lang(as), h5:lang(as), h6:lang(as), h2:lang(bho), h3:lang(bho), h4:lang(bho), h5:lang(bho), h6:lang(bho), h2:lang(bh), h3:lang(bh), h4:lang(bh), h5:lang(bh), h6:lang(bh), h2:lang(bn), h3:lang(bn), h4:lang(bn), h5:lang(bn), h6:lang(bn), h2:lang(gu), h3:lang(gu), h4:lang(gu), h5:lang(gu), h6:lang(gu), h2:lang(hi), h3:lang(hi), h4:lang(hi), h5:lang(hi), h6:lang(hi), h2:lang(kn), h3:lang(kn), h4:lang(kn), h5:lang(kn), h6:lang(kn), h2:lang(ks), h3:lang(ks), h4:lang(ks), h5:lang(ks), h6:lang(ks), h2:lang(ml), h3:lang(ml), h4:lang(ml), h5:lang(ml), h6:lang(ml), h2:lang(mr), h3:lang(mr), h4:lang(mr), h5:lang(mr), h6:lang(mr), h2:lang(my), h3:lang(my), h4:lang(my), h5:lang(my), h6:lang(my), h2:lang(mai), h3:lang(mai), h4:lang(mai), h5:lang(mai), h6:lang(mai), h2:lang(ne), h3:lang(ne), h4:lang(ne), h5:lang(ne), h6:lang(ne), h2:lang(new), h3:lang(new), h4:lang(new), h5:lang(new), h6:lang(new), h2:lang(or), h3:lang(or), h4:lang(or), h5:lang(or), h6:lang(or), h2:lang(pa), h3:lang(pa), h4:lang(pa), h5:lang(pa), h6:lang(pa), h2:lang(pi), h3:lang(pi), h4:lang(pi), h5:lang(pi), h6:lang(pi), h2:lang(sa), h3:lang(sa), h4:lang(sa), h5:lang(sa), h6:lang(sa), h2:lang(ta), h3:lang(ta), h4:lang(ta), h5:lang(ta), h6:lang(ta), h2:lang(te), h3:lang(te), h4:lang(te), h5:lang(te), h6:lang(te) { line-height: 1.2em; }
  .mw-editsection { -moz-user-select: none; }
  .mw-editsection, .mw-editsection-like { font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 1em; }
  .mw-content-ltr .mw-editsection, .mw-content-rtl .mw-content-ltr .mw-editsection { margin-left: 1em; }
}
a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, canvas, center, cite, code, dd, del, details, dfn, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, strong, sub, summary, sup, time, tt, u, ul, var, video { border: 0px none; margin: 0px; padding: 0px; vertical-align: baseline; }
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
html { box-sizing: border-box; }
*, *::after, *::before { box-sizing: inherit; }
body { line-height: 1; }
ol, ul { list-style: outside none none; }
.wds-banner-notification { --wds-banner-notification-background-color:var(--fandom-banner-notification-background-color); --wds-banner-notification-text-color:var(--fandom-text-color); --wds-banner-notification-link-color:var(--fandom-link-color); --wds-banner-notification-link-color--hover:var(--fandom-link-color--hover); --wds-banner-notification-border-color:var(--fandom-border-color); --wds-banner-notification-close-icon:var(--fandom-banner-notifications-close-icon); background-color:var(--wds-banner-notification-background-color); border-radius: 3px; border-right:1px solid var(--wds-banner-notification-border-color); color:var(--wds-banner-notification-text-color); display: flex; margin-bottom: 3px; overflow: hidden; transition: opacity 0.4s ease 0s; width: inherit; }
.wds-banner-notification__icon { -moz-box-align: center; -moz-box-pack: center; align-items: center; border-radius: 3px 0px 0px 3px; color: rgb(255, 255, 255); display: flex; justify-content: center; width: 40px; }
.wds-message .wds-banner-notification__icon { background-color: rgb(117, 51, 105); }
.wds-banner-notification__text { -moz-box-flex: 1; border-bottom:1px solid var(--wds-banner-notification-border-color); border-top:1px solid var(--wds-banner-notification-border-color); flex: 1 1 0%; font-size: 14px; line-height: 1.5; padding: 11px 12px; }
.wds-banner-notification__text a { color:var(--wds-banner-notification-link-color); }
.wds-banner-notification__text a:hover { color:var(--wds-banner-notification-link-color--hover); }
.wds-banner-notification__close { border-bottom:1px solid var(--wds-banner-notification-border-color); border-radius: 0px 3px 3px 0px; border-top:1px solid var(--wds-banner-notification-border-color); color:var(--wds-banner-notification-close-icon); cursor: pointer; line-height: 0; padding: 14px; }
.wds-banner-notification__close, .wds-button { box-sizing: content-box; }
.wds-button { --wds-primary-button-background-color:var(--theme-accent-color); --wds-primary-button-background-color--hover:var(--theme-accent-color--hover); --wds-primary-button-label-color:var(--theme-accent-label-color); --wds-secondary-button-label-color:var(--theme-page-text-color); --wds-secondary-button-label-color--hover:var(--theme-page-text-color--hover); --wds-text-button-label-color:var(--theme-page-text-color); --wds-text-button-label-color--hover:var(--theme-page-text-color--hover); -moz-box-align: center; -moz-box-pack: center; align-items: center; -moz-appearance: none; background-color:var(--wds-primary-button-background-color); border:1px solid var(--wds-primary-button-background-color); border-radius: 3px; color:var(--wds-primary-button-label-color); cursor: default; display: inline-flex; font-family: inherit; font-size: 12px; font-weight: 600; justify-content: center; letter-spacing: 0.15px; line-height: 16px; margin: 0px; min-height: 18px; outline: medium none; padding: 7px 18px; text-decoration: none; text-transform: uppercase; transition-duration: 0.3s; transition-property: background-color, border-color, color; vertical-align: top; }
a.wds-button, button.wds-button { cursor: pointer; }
.wds-button.wds-is-active, .wds-button:active, .wds-button:focus, .wds-button:hover { background-color:var(--wds-primary-button-background-color--hover); border:1px solid var(--wds-primary-button-background-color--hover); color:var(--wds-primary-button-label-color); text-decoration: none; }
.wds-button:disabled { cursor: default; opacity: 0.5; pointer-events: none; }
.wds-button.wds-is-full-width { box-sizing: border-box; display: flex; width: 100%; }
.wds-button.wds-is-secondary, .wds-button.wds-is-secondary:disabled { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border-color: currentcolor; color:var(--wds-secondary-button-label-color); }
.wds-button.wds-is-secondary.wds-is-active, .wds-button.wds-is-secondary:active, .wds-button.wds-is-secondary:focus, .wds-button.wds-is-secondary:hover { color:var(--wds-secondary-button-label-color--hover); }
.wds-button.wds-is-text, .wds-button.wds-is-text:disabled { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; color:var(--wds-text-button-label-color); }
.wds-button.wds-is-text.wds-is-active, .wds-button.wds-is-text:active, .wds-button.wds-is-text:focus, .wds-button.wds-is-text:hover { color:var(--wds-text-button-label-color--hover); }
.wds-button .wds-icon { align-self: center; margin: 0px 6px; pointer-events: none; }
.wds-button .wds-icon:first-child { margin-left: 0px; }
.wds-button .wds-icon:last-child { margin-right: 0px; }
.wds-button-group { -moz-box-align: stretch; -moz-box-pack: start; align-items: stretch; display: inline-flex; justify-content: flex-start; }
.wds-button-group > .wds-button { border-radius: 0px; height: auto; margin-left: auto; margin-right: 1px; padding: 7px 12px; }
.wds-button-group > .wds-button.wds-is-secondary:not(:last-child) { margin-right: -1px; }
.wds-button-group > .wds-button:first-child { border-radius: 3px 0px 0px 3px; }
.wds-button-group > .wds-button:last-child { border-radius: 0px 3px 3px 0px; }
.wds-button-group > .wds-button:hover { z-index: 1; }
.wds-button-group > .wds-button:not(.wds-is-secondary):not(:last-child) { border-right: 0px none; }
.wds-button-group > .wds-button:not(.wds-is-secondary):not(:first-child) { border-left: 0px none; }
.wds-collapsible-panel { --wds-collapsible-panel-header-background:transparent; --wds-collapsible-panel-header-text: inherit; --wds-collapsible-panel-border-color:var(--theme-border-color); -moz-box-orient: vertical; -moz-box-direction: normal; border-bottom:1px solid var(--wds-collapsible-panel-border-color); display: flex; flex-direction: column; }
.wds-collapsible-panel:last-child { border-bottom: 0px none; }
.wds-collapsible-panel__header { -moz-box-align: center; -moz-box-pack: justify; align-items: center; background-color:var(--wds-collapsible-panel-header-background); color:var(--wds-collapsible-panel-header-text); cursor: pointer; display: flex; font-size: 18px; font-weight: 500; justify-content: space-between; line-height: 1.25; padding: 18px 0px; }
.wds-collapsible-panel__header .wds-icon { transform: rotate(180deg); transition: transform 0.3s ease 0s, -webkit-transform 0.3s ease 0s; }
.wds-collapsible-panel.wds-is-collapsed .wds-collapsible-panel__content { display: none; }
.wds-collapsible-panel.wds-is-collapsed .wds-collapsible-panel__header .wds-icon { transform: rotate(0deg); }
@keyframes move-in {
0% { opacity: 0; transform: translateY(30px); }
}
@keyframes move-in {
0% { opacity: 0; transform: translateY(30px); }
}
@keyframes fade-in {
0% { opacity: 0; pointer-events: none; }
}
@keyframes fade-in {
0% { opacity: 0; pointer-events: none; }
}
.wds-dropdown { --wds-dropdown-background-color:var(--theme-page-background-color--secondary); --wds-dropdown-border-color:var(--theme-border-color); --wds-dropdown-text-color:var(--theme-page-text-color); --wds-dropdown-linked-item-color:var(--theme-link-color); --wds-dropdown-linked-item-background-color:rgba(var(--theme-link-color--rgb),0.1); --wds-dropdown-scrollable-shadow-color:rgba(var(--theme-page-text-color--rgb),0.1); display: inline-block; position: relative; }
.wds-dropdown__toggle { cursor: default; position: relative; }
.wds-dropdown__content { background-color:var(--wds-dropdown-background-color); border:1px solid var(--wds-dropdown-border-color); border-radius: 3px; color:var(--wds-dropdown-text-color); display: none; left: 50%; min-width: 70%; padding: 7px 0px; position: absolute; top: 100%; transform: translateX(-50%); z-index: 1; }
.wds-dropdown__content.wds-is-right-aligned { left: auto; right: 0px; transform: none; }
.wds-dropdown__content:not(.wds-is-not-scrollable) .wds-list { background-image:radial-gradient(farthest-side at 50% 0,var(--wds-dropdown-scrollable-shadow-color),transparent),radial-gradient(farthest-side at 50% 100%,var(--wds-dropdown-scrollable-shadow-color),transparent); background-position: 0px 0px, 0px 100%; background-repeat: no-repeat; background-size: 100% 9px; max-height: 270px; overflow-y: auto; position: relative; z-index: 1; }
.wds-dropdown__content:not(.wds-is-not-scrollable) .wds-list::after, .wds-dropdown__content:not(.wds-is-not-scrollable) .wds-list::before { background-color:var(--wds-dropdown-background-color); content: ""; display: block; height: 10px; margin: 0px 0px -10px; position: relative; z-index: -1; }
.wds-dropdown__content:not(.wds-is-not-scrollable) .wds-list::after { margin: -10px 0px 0px; }
.wds-dropdown__content.wds-is-not-scrollable .wds-list { position: relative; }
.wds-dropdown__content .wds-list { padding: 0px; }
.wds-dropdown__content .wds-list > li { margin: 0px 9px; padding-left: 9px; padding-right: 9px; white-space: nowrap; }
.wds-dropdown__content .wds-list.wds-is-linked > li { padding: 0px; }
.wds-dropdown__content .wds-list.wds-is-linked > li > a:not(.wds-button) { border-radius: 3px; color:var(--wds-dropdown-text-color); cursor: pointer; font-weight: 400; padding-left: 9px; padding-right: 9px; text-decoration: none; transition-duration: 0.3s; transition-property: background-color, color; }
.wds-dropdown__content .wds-list.wds-is-linked > li.wds-is-selected > a:not(.wds-button), .wds-dropdown__content .wds-list.wds-is-linked > li:hover > a:not(.wds-button) { background-color:var(--wds-dropdown-linked-item-background-color); color:var(--wds-dropdown-linked-item-color); }
.wds-dropdown::after, .wds-dropdown::before { bottom: -1px; content: ""; display: none; height: 0px; left: 50%; pointer-events: none; position: absolute; width: 0px; z-index: 2; }
.wds-dropdown::after { border-top: 8px solid transparent; border-right: 8px solid transparent; border-left: 8px solid transparent; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; border-bottom:8px solid var(--wds-dropdown-background-color); margin-left: -8px; }
.wds-dropdown::before { border-top: 9px solid transparent; border-right: 9px solid transparent; border-left: 9px solid transparent; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; border-bottom:9px solid var(--wds-dropdown-border-color); margin-left: -9px; }
.wds-dropdown.wds-is-active:not(.wds-no-chevron)::after, .wds-dropdown.wds-is-active:not(.wds-no-chevron)::before, .wds-dropdown:hover:not(.wds-is-touch-device):not(.wds-is-not-hoverable):not(.wds-no-chevron)::after, .wds-dropdown:hover:not(.wds-is-touch-device):not(.wds-is-not-hoverable):not(.wds-no-chevron)::before { display: block; }
.wds-dropdown.wds-is-active .wds-dropdown__content, .wds-dropdown:hover:not(.wds-is-touch-device):not(.wds-is-not-hoverable) .wds-dropdown__content { display: inline-block; }
.wds-dropdown.wds-is-active .wds-dropdown__toggle-chevron, .wds-dropdown:hover:not(.wds-is-touch-device):not(.wds-is-not-hoverable) .wds-dropdown__toggle-chevron { transform: rotate(180deg); }
.wds-dropdown.wds-open-to-right .wds-dropdown__content { left: 100%; min-width: 0px; top: -50%; transform: none; }
.wds-dropdown.wds-open-to-right::after, .wds-dropdown.wds-open-to-right::before { border-bottom-color: transparent; bottom: auto; left: auto; margin-left: 0px; right: -1px; top: 50%; transform: translateY(-50%); }
.wds-dropdown.wds-open-to-right::before { border-right-color:var(--wds-dropdown-border-color); }
.wds-dropdown.wds-open-to-right::after { border-right-color:var(--wds-dropdown-background-color); }
.wds-icon { fill: currentcolor; height: 24px; min-width: 24px; width: 24px; }
.wds-icon-small { height: 18px; min-width: 18px; width: 18px; }
.wds-icon-tiny { height: 12px; min-width: 12px; width: 12px; }
.wds-icon.wds-is-stroke-icon { fill: none; stroke: currentcolor; }
.wds-list { --wds-list-border-color:var(--theme-border-color); list-style-type: none; margin: 0px; padding: 7px 18px; }
.wds-list > li { font-size: 14px; font-weight: 400; line-height: 1em; padding: 11px 0px; }
.wds-list.wds-is-linked > li { padding: 0px; }
.wds-list.wds-is-linked > li > a { display: block; padding: 11px 0px; }
@keyframes rotator {
0% { transform: rotate(0deg); }
100% { transform: rotate(1turn); }
}
@keyframes rotator {
0% { transform: rotate(0deg); }
100% { transform: rotate(1turn); }
}
@keyframes dash {
100% { stroke-dashoffset: 0; }
}
@keyframes dash {
100% { stroke-dashoffset: 0; }
}
.wds-tabs, .wds-tabs__wrapper { --wds-tab-color:rgba(var(--theme-page-text-color--rgb),0.75); --wds-tab-color--active:var(--theme-link-color); --wds-tab-color--hover:var(--theme-page-text-color); --wds-tab-border-color:rgba(var(--theme-page-dynamic-color-1--rgb),0.25); }
.wds-tabs { -moz-box-align: end; align-items: flex-end; display: flex; list-style: outside none none; margin: 0px; padding: 0px; position: relative; scrollbar-width: none; }
.wds-tabs__tab-label { -moz-box-align: center; align-items: center; display: inline-flex; font-size: 14px; font-weight: 500; height: 40px; letter-spacing: 0.5px; margin: 0px 11px; text-align: center; text-decoration: none; transition: color 0.1s ease 0s; white-space: nowrap; }
.wds-tabs__tab-label :not(:first-child):not(:only-child) { margin-left: 4px; }
.wds-tabs__tab-label > a { -moz-box-align: center; align-items: center; color: inherit; display: inline-flex; height: 100%; text-decoration: none; }
.wds-tabs__tab-label > a:hover, .wds-tabs__tab-label > a:visited { color: inherit; text-decoration: inherit; }
.toctogglespan .toctogglelabel, .wds-link, a, ul.gallery.mw-gallery-slideshow .gallerycarousel > div .mw-gallery-slideshow-caption a, ul.gallery.mw-gallery-slideshow li.gallerybox .gallerytext a { color:var(--theme-link-color); text-decoration: none; transition: color 0.3s ease 0s; }
.toctogglespan .toctogglelabel:active, .toctogglespan .toctogglelabel:focus, .toctogglespan .toctogglelabel:hover, .wds-link:active, .wds-link:focus, .wds-link:hover, a:active, a:focus, a:hover, ul.gallery.mw-gallery-slideshow .gallerycarousel > div .mw-gallery-slideshow-caption a:active, ul.gallery.mw-gallery-slideshow .gallerycarousel > div .mw-gallery-slideshow-caption a:focus, ul.gallery.mw-gallery-slideshow .gallerycarousel > div .mw-gallery-slideshow-caption a:hover, ul.gallery.mw-gallery-slideshow li.gallerybox .gallerytext a:active, ul.gallery.mw-gallery-slideshow li.gallerybox .gallerytext a:focus, ul.gallery.mw-gallery-slideshow li.gallerybox .gallerytext a:hover { color:var(--theme-link-color--hover); }
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 300;
  src: local("Rubik Light Italic"), local("Rubik-LightItalic"), url("iJWBBXyIfDnIV7nEldWYwWb-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 300;
  src: local("Rubik Light Italic"), local("Rubik-LightItalic"), url("iJWBBXyIfDnIV7nEldWYwWD-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 300;
  src: local("Rubik Light Italic"), local("Rubik-LightItalic"), url("iJWBBXyIfDnIV7nEldWYwWz-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 300;
  src: local("Rubik Light Italic"), local("Rubik-LightItalic"), url("iJWBBXyIfDnIV7nEldWYwWL-6aJ8x8s.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 400;
  src: local("Rubik Italic"), local("Rubik-Italic"), url("iJWEBXyIfDnIV7nEnXq61E_c5IhGzg.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 400;
  src: local("Rubik Italic"), local("Rubik-Italic"), url("iJWEBXyIfDnIV7nEnXy61E_c5IhGzg.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 400;
  src: local("Rubik Italic"), local("Rubik-Italic"), url("iJWEBXyIfDnIV7nEnXC61E_c5IhGzg.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 400;
  src: local("Rubik Italic"), local("Rubik-Italic"), url("iJWEBXyIfDnIV7nEnX661E_c5Ig.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 500;
  src: local("Rubik Medium Italic"), local("Rubik-MediumItalic"), url("iJWBBXyIfDnIV7nElY2ZwWb-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 500;
  src: local("Rubik Medium Italic"), local("Rubik-MediumItalic"), url("iJWBBXyIfDnIV7nElY2ZwWD-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 500;
  src: local("Rubik Medium Italic"), local("Rubik-MediumItalic"), url("iJWBBXyIfDnIV7nElY2ZwWz-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 500;
  src: local("Rubik Medium Italic"), local("Rubik-MediumItalic"), url("iJWBBXyIfDnIV7nElY2ZwWL-6aJ8x8s.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 700;
  src: local("Rubik Bold Italic"), local("Rubik-BoldItalic"), url("iJWBBXyIfDnIV7nElcWfwWb-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 700;
  src: local("Rubik Bold Italic"), local("Rubik-BoldItalic"), url("iJWBBXyIfDnIV7nElcWfwWD-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 700;
  src: local("Rubik Bold Italic"), local("Rubik-BoldItalic"), url("iJWBBXyIfDnIV7nElcWfwWz-6aJ8x8utUQ.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: italic;
  font-weight: 700;
  src: local("Rubik Bold Italic"), local("Rubik-BoldItalic"), url("iJWBBXyIfDnIV7nElcWfwWL-6aJ8x8s.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 300;
  src: local("Rubik Light"), local("Rubik-Light"), url("iJWHBXyIfDnIV7Fqj2mZ8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 300;
  src: local("Rubik Light"), local("Rubik-Light"), url("iJWHBXyIfDnIV7Fqj2mf8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 300;
  src: local("Rubik Light"), local("Rubik-Light"), url("iJWHBXyIfDnIV7Fqj2mT8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 300;
  src: local("Rubik Light"), local("Rubik-Light"), url("iJWHBXyIfDnIV7Fqj2md8WD07oB-.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 400;
  src: local("Rubik"), local("Rubik-Regular"), url("iJWKBXyIfDnIV7nFrXyw023e1Ik.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 400;
  src: local("Rubik"), local("Rubik-Regular"), url("iJWKBXyIfDnIV7nDrXyw023e1Ik.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 400;
  src: local("Rubik"), local("Rubik-Regular"), url("iJWKBXyIfDnIV7nPrXyw023e1Ik.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 400;
  src: local("Rubik"), local("Rubik-Regular"), url("iJWKBXyIfDnIV7nBrXyw023e.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 500;
  src: local("Rubik Medium"), local("Rubik-Medium"), url("iJWHBXyIfDnIV7EyjmmZ8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 500;
  src: local("Rubik Medium"), local("Rubik-Medium"), url("iJWHBXyIfDnIV7Eyjmmf8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 500;
  src: local("Rubik Medium"), local("Rubik-Medium"), url("iJWHBXyIfDnIV7EyjmmT8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 500;
  src: local("Rubik Medium"), local("Rubik-Medium"), url("iJWHBXyIfDnIV7Eyjmmd8WD07oB-.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 700;
  src: local("Rubik Bold"), local("Rubik-Bold"), url("iJWHBXyIfDnIV7F6iGmZ8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 700;
  src: local("Rubik Bold"), local("Rubik-Bold"), url("iJWHBXyIfDnIV7F6iGmf8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+590-5FF, U+20AA, U+25CC, U+FB1D-FB4F;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 700;
  src: local("Rubik Bold"), local("Rubik-Bold"), url("iJWHBXyIfDnIV7F6iGmT8WD07oB-98o.woff2") format("woff2");
  unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
@font-face {
  font-family: "Rubik";
  font-style: normal;
  font-weight: 700;
  src: local("Rubik Bold"), local("Rubik-Bold"), url("iJWHBXyIfDnIV7F6iGmd8WD07oB-.woff2") format("woff2");
  unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
.mw-editsection-bracket, .mw-editsection-divider { display: none; }
body { background-color:var(--theme-body-background-color); font-size: 14px; line-height: 1.75; }
body.skin-fandomdesktop, button, input, textarea { font-family: rubik,helvetica,arial,sans-serif; }
a { line-height: inherit; }
a:active, a:focus, a:hover { text-decoration: underline; }
a.new { color:var(--theme-alert-color); }
a.new:active, a.new:focus, a.new:hover { text-decoration-style: dashed; }
a.new:active, a.new:focus, a.new:hover, a.stub { color:var(--theme-alert-color--hover); }
.main-container { margin-left: 66px; min-width: 702px; width: calc(100% - 66px); }
.main-container, .resizable-container { -moz-box-orient: vertical; -moz-box-direction: normal; display: flex; flex-direction: column; }
.resizable-container { margin: 0px auto 48px; max-width: 1236px; transition: width 0.3s ease 0s, max-width 0.3s ease 0s; width: 85%; }
@media only screen and (max-width: 1279px) {
  .resizable-container { max-width: none; width: 95%; }
}
.notifications-placeholder { bottom: 18px; left: 84px; position: fixed; z-index: 300; }
.page { --fixed-table-header-offset:0; }
body:not(.bab-detected) .ad-slot-placeholder.is-loading { background-color: rgb(27, 27, 27); width: 970px; }
body.has-sticky-tlb .top-ads-container, body:not(.has-uap) .top-ads-container { background: rgb(0, 0, 0) none repeat scroll 0% 0%; padding: 15px 0px 34px; position: relative; width: 100%; }
body.has-sticky-tlb .top-ads-container .ae-translatable-label, body:not(.has-uap) .top-ads-container .ae-translatable-label { bottom: 5px; color: rgb(133, 133, 133); display: block; font-size: 10px; font-weight: 500; left: 0px; line-height: 24px; position: absolute; text-align: center; text-transform: uppercase; width: 100%; }
.ad-slot-placeholder:not(.top-leaderboard), body.has-sticky-tlb .ad-slot-placeholder.top-leaderboard, body:not(.has-uap) .ad-slot-placeholder.top-leaderboard { -moz-box-align: center; -moz-box-pack: center; align-items: center; display: flex; flex-wrap: wrap; justify-content: center; margin: 0px auto; min-height: 250px; min-width: 970px; }
.ad-slot-placeholder.bottom-leaderboard.is-loading:not(.top-leaderboard), body.has-sticky-tlb .ad-slot-placeholder.top-leaderboard.bottom-leaderboard.is-loading, body:not(.has-uap) .ad-slot-placeholder.top-leaderboard.bottom-leaderboard.is-loading { background-color: rgb(216, 216, 216); }
.bottom-ads-container { background-color:var(--theme-page-background-color); border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; margin: -2px 0px 0px; width: 100%; }
.bottom-ads-container .ae-translatable-label, body.has-uap .top-ads-container .ae-translatable-label { display: none; }
.page { color:var(--theme-page-text-color); margin-top: 12px; position: relative; }
@media only screen and (min-width: 1024px) {
}
html:not(.ve-activated) .page.has-right-rail { display: grid; grid-template-columns: minmax(0px, 1fr) min-content; grid-template-rows: max-content; }
html:not(.ve-activated) .page.has-right-rail .page__right-rail { transition: width 0.3s ease 0s; width: 336px; }
html:not(.ve-activated) .page.has-right-rail .page__main { border-radius: 3px 0px 0px 3px; }
@media only screen and (max-width: 1023px) {
  html:not(.ve-activated) .page.has-right-rail { grid-template-columns: 100%; }
  html:not(.ve-activated) .page.has-right-rail .page__right-rail { border-radius: 0px 0px 3px 3px; padding: 6px 18px; width: 100%; }
  html:not(.ve-activated) .page.has-right-rail .page__main { border-radius: 3px 3px 0px 0px; }
}
.page__main { background-color:var(--theme-page-background-color); border-radius: 3px; min-height: 480px; padding: 24px 36px; position: relative; }
.page__main p { overflow-wrap: break-word; }
.page__right-rail { --right-rail-background-color:var(--theme-page-background-color--secondary); background-color:var(--right-rail-background-color); border-radius: 0px 3px 3px 0px; min-height: 100%; }
.page-header { margin-bottom: 20px; }
.page-header .wds-dropdown::after, .page-header .wds-dropdown::before, .page-header .wds-dropdown__content { z-index: 400; }
.page-header__bottom, .page-header__top { display: flex; }
.page-header__top { -moz-box-pack: end; justify-content: flex-end; }
.page-header__meta { -moz-box-orient: vertical; -moz-box-direction: normal; -moz-box-flex: 1; display: flex; flex-direction: column; flex-grow: 1; }
.page-header__categories { -moz-box-flex: 1; flex-grow: 1; }
.page-header__categories-in { font-weight: 500; }
.page-header__categories > :last-child { display: inline-block; padding-bottom: 12px; }
.page-header__title-wrapper { -moz-box-flex: 1; flex-grow: 1; }
.page-header__title { font-size: 36px; font-weight: 300; letter-spacing: 0.25px; line-height: 1.25; overflow-wrap: break-word; }
.page-header__actions { -moz-box-align: start; align-items: flex-start; display: flex; margin-left: 9px; padding-top: 9px; }
.page-header__actions > .page-header__action-button:first-child::before { display: none; }
.page-header__actions .wds-dropdown__content li > a { -moz-box-align: center; grid-column-gap: 6px; align-items: center; display: flex; }
.page-header__action-button { --wds-text-button-label-color:var(--theme-link-color); --wds-text-button-label-color--hover:var(--theme-link-color); border-radius: 18px; box-sizing: border-box; height: 36px; margin: 0px 3px 0px 2px; position: relative; width: 36px; }
.page-header__action-button .wds-icon { margin: 0px; }
.page-header__action-button.has-label { padding-left: 12px; padding-right: 12px; width: auto; }
.page-header__action-button.has-label .wds-icon { margin-right: 6px; }
.page-header__action-button::before { background-color:rgba(var(--theme-page-text-color--rgb),.25); content: ""; display: inline-block; height: 16px; left: -3px; position: absolute; width: 1px; }
.page-header__action-button:hover { background-color:rgba(var(--theme-link-color--rgb),.15); }
.page-footer .license-description { margin: 24px 0px; }
.page-side-tools { position: sticky; top: 58px; }
.page-side-tools__wrapper { height: 100%; left: 0px; padding-bottom: 430px; position: absolute; top: 18px; transform: translateX(-50%); z-index: 200; }
@media only screen and (max-width: 1279px) {
  .page-side-tools__wrapper { transform: translateX(-25%); }
}
.page-side-tool { -moz-box-pack: center; -moz-box-align: center; align-items: center; background:var(--theme-page-background-color--secondary); border: medium none; border-radius: 50%; box-shadow: 0px 3px 12px 0px rgba(0, 0, 0, 0.3); color:var(--theme-link-color); cursor: pointer; display: flex; height: 36px; justify-content: center; margin-bottom: 9px; outline: medium none; transition: color 0.3s ease 0s; width: 36px; }
.page-side-tool:hover { color:var(--theme-link-color--hover); }
@media only screen and (max-width: 1279px) {
  .content-size-toggle { display: none; }
}
.page-content { overflow-x: hidden; }
@media only screen and (min-width: 1500px) {
  .page-content { font-size: 16px; }
}
.page-content h1, .page-content h2, .page-content h3, .page-content h4, .page-content h5, .page-content h6 { font-family:var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; margin: 18px 0px 9px; overflow-wrap: break-word; }
.page-content h2 { border-bottom:1px solid var(--theme-border-color); font-size: 24px; font-weight: 500; overflow: hidden; padding: 6px 0px; }
.page-content img { vertical-align: middle; }
.page-content p, .page-content section { font-size: inherit; font-weight: 400; line-height: 1.75; margin: 0px 0px 24px; overflow-wrap: break-word; }
.page-content ol, .page-content ul { margin: 6px 0px 18px 36px; }
.page-content ul { list-style-type: disc; }
.page-content dl { margin: 12px 0px 24px; }
.page-content dt { font-weight: 700; }
.page-content dd { margin-left: 24px; }
.page-content .tright { clear: right; float: right; margin: 0px 0px 16px 20px; }
.page-content .thumbcaption { color:var(--theme-page-text-color); font-size: 12px; font-weight: 400; line-height: 1.5; padding: 6px 3px 3px; position: relative; }
.rail-module h2, .rail-module__header { background-image:linear-gradient(to top,var(--wds-midlight-color,rgba(var(--theme-accent-color--rgb),.15)) 54%,transparent 54%,transparent 100%); box-decoration-break: clone; display: inline; margin-left: -3px; margin-right: -3px; padding-left: 3px; padding-right: 3px; }
.right-rail-wrapper { --right-rail-text-color:var(--theme-page-dynamic-color-1); --right-rail-text-color--rgb:var(--theme-page-dynamic-color-1--rgb); -moz-box-orient: vertical; -moz-box-direction: normal; color:var(--right-rail-text-color); display: flex; flex-direction: column; height: 100%; padding: 0px 18px; }
.right-rail-wrapper > .rail-module:last-child, .right-rail-wrapper > :last-child > .rail-module:last-child { border-bottom: 0px none; }
@media print {
  .right-rail-wrapper { display: none; }
}
.sticky-modules-wrapper { position: sticky; top: 36px; }
.rail-module { background-color:var(--right-rail-background-color); border-bottom:1px solid var(--theme-border-color); margin-top: 24px; overflow: hidden; padding-bottom: 24px; page-break-inside: avoid; }
.rail-module h2, .rail-module__header { --wds-midlight-color:rgba(var(--theme-link-color--rgb),0.1); display: inline-block; font-size: 16px; font-weight: 700; line-height: 1.25; margin-bottom: 15px; }
.rail-module__list { grid-gap: 12px; display: grid; grid-template-columns: auto; line-height: 1.5; }
.rail-module__list > li { overflow: hidden; }
@media only screen and (max-width: 1023px) {
  .rail-module__list { grid-template-columns: 50% 50%; }
  .sticky-modules-wrapper { position: unset; top: unset; }
}
@media only screen and (max-width: 1023px) {
}
.popular-pages__item { overflow: hidden; }
.popular-pages__item > a { -moz-box-align: center; grid-column-gap: 12px; align-items: center; display: grid; grid-template-columns: 55px 1fr; }
.popular-pages__image, .popular-pages__placeholder { -moz-box-align: center; place-items: center; background:var(--theme-border-color); border:1px solid var(--theme-border-color); border-radius: 3px; display: grid; height: 55px; min-width: 55px; width: 55px; }
.popular-pages .sponsored-content__details { overflow: hidden; }
.popular-pages .sponsored-content__attribution { font-size: 14px; font-style: italic; opacity: 0.6; }
