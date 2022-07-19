

<body>
    @include('general.header2')
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
  

    
    


        <link rel='stylesheet' id='sm-wordpress-css'  href='https://mrchavez.cl/wp-content/plugins/setmore-appointments/sm-wordpress.css?ver=1.1' media='all' />
    <link rel='stylesheet' id='astra-theme-css-css'  href='https://mrchavez.cl/wp-content/themes/astra/assets/css/minified/style.min.css?ver=2.5.5' media='all' />
    <style id='astra-theme-css-inline-css'>
     </style>
    <link rel='stylesheet' id='wp-block-library-css'  href='https://mrchavez.cl/wp-includes/css/dist/block-library/style.min.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='wc-block-vendors-style-css'  href='https://mrchavez.cl/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.1.0' media='all' />
    <link rel='stylesheet' id='wc-block-style-css'  href='https://mrchavez.cl/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.1.0' media='all' />
    <style id='global-styles-inline-css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    </style>
    <link rel='stylesheet' id='colorbox-style-css'  href='https://mrchavez.cl/wp-content/plugins/setmore-plus/inc/colorbox/colorbox.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='https://mrchavez.cl/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout.min.css?ver=2.5.5' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://mrchavez.cl/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen.min.css?ver=2.5.5' media='only screen and (max-width: 921px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='https://mrchavez.cl/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce.min.css?ver=2.5.5' media='all' />
    <style id='woocommerce-general-inline-css'>
    .woocommerce span.onsale, .wc-block-grid__product .wc-block-grid__product-onsale{background-color:#0a0000;color:#ffffff;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit, .woocommerce button.button.alt.disabled, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link, .wc-block-grid__product-onsale{color:#ffffff;border-color:#0a0000;background-color:#0a0000;}.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce input.button:hover, .woocommerce button.button.alt.disabled:hover, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover{color:#ffffff;border-color:#3a3a3a;background-color:#3a3a3a;}.woocommerce-message, .woocommerce-info{border-top-color:#000000;}.woocommerce-message::before,.woocommerce-info::before{color:#000000;}.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_layered_nav_filters ul li.chosen a, .woocommerce-page ul.products li.product .ast-woo-product-category, .wc-layered-nav-rating a{color:#4c4c4c;}.woocommerce nav.woocommerce-pagination ul,.woocommerce nav.woocommerce-pagination ul li{border-color:#000000;}.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background:#000000;color:#ffffff;}.woocommerce-MyAccount-navigation-link.is-active a{color:#3a3a3a;}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:#000000;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce-cart table.cart td.actions .button, .woocommerce form.checkout_coupon .button, .woocommerce #respond input#submit, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link{border-radius:2px;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;}.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{color:#000000;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{background:#000000;}.ast-site-header-cart a{color:#4c4c4c;}.ast-site-header-cart a:focus, .ast-site-header-cart a:hover, .ast-site-header-cart .current-menu-item a{color:#000000;}.ast-cart-menu-wrap .count, .ast-cart-menu-wrap .count:after{border-color:#000000;color:#000000;}.ast-cart-menu-wrap:hover .count{color:#ffffff;background-color:#000000;}.ast-site-header-cart .widget_shopping_cart .total .woocommerce-Price-amount{color:#000000;}.woocommerce a.remove:hover, .ast-woocommerce-cart-menu .main-header-menu .woocommerce-custom-menu-item .menu-item:hover > .menu-link.remove:hover{color:#000000;border-color:#000000;background-color:#ffffff;}.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce .widget_shopping_cart .woocommerce-mini-cart__buttons .checkout.wc-forward{color:#ffffff;border-color:#3a3a3a;background-color:#3a3a3a;}.site-header .ast-site-header-cart-data .button.wc-forward, .site-header .ast-site-header-cart-data .button.wc-forward:hover{color:#ffffff;}.below-header-user-select .ast-site-header-cart .widget, .ast-above-header-section .ast-site-header-cart .widget a, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a{color:#4c4c4c;}.below-header-user-select .ast-site-header-cart .widget_shopping_cart a:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a:hover, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a.remove:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a.remove:hover{color:#000000;}@media (min-width:545px) and (max-width:921px){.woocommerce.tablet-columns-6 ul.products li.product, .woocommerce-page.tablet-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.tablet-columns-5 ul.products li.product, .woocommerce-page.tablet-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.tablet-columns-4 ul.products li.product, .woocommerce-page.tablet-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.tablet-columns-3 ul.products li.product, .woocommerce-page.tablet-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.tablet-columns-2 ul.products li.product, .woocommerce-page.tablet-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.tablet-columns-1 ul.products li.product, .woocommerce-page.tablet-columns-1 ul.products li.product{width:100%;}.woocommerce div.product .related.products ul.products li.product{width:calc(33.33% - 14px);}}@media (min-width:545px) and (max-width:921px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(33.33% - 14px);margin-right:20px;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n){margin-right:0;clear:right;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n+1){clear:left;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n+1){clear:left;}}@media (min-width:922px){.woocommerce #reviews #comments{width:55%;float:left;}.woocommerce #reviews #review_form_wrapper{width:45%;float:right;padding-left:2em;}.woocommerce form.checkout_coupon{width:50%;}}@media (max-width:921px){.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart{padding-right:0;padding-left:0;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar{text-align:center;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons{display:inline-block;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding{flex:auto;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding{flex:0 0 100%;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container{display:flex;justify-content:center;}.woocommerce-cart .woocommerce-shipping-calculator .button{width:100%;}.woocommerce div.product div.images, .woocommerce div.product div.summary, .woocommerce #content div.product div.images, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.images, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.images, .woocommerce-page #content div.product div.summary{float:none;width:100%;}.woocommerce-cart table.cart td.actions .ast-return-to-shop{display:block;text-align:center;margin-top:1em;}}@media (max-width:544px){.ast-separate-container .ast-woocommerce-container{padding:.54em 1em 1.33333em;}.woocommerce-message, .woocommerce-error, .woocommerce-info{display:flex;flex-wrap:wrap;}.woocommerce-message a.button, .woocommerce-error a.button, .woocommerce-info a.button{order:1;margin-top:.5em;}.woocommerce.mobile-columns-6 ul.products li.product, .woocommerce-page.mobile-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.mobile-columns-5 ul.products li.product, .woocommerce-page.mobile-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.mobile-columns-4 ul.products li.product, .woocommerce-page.mobile-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.mobile-columns-3 ul.products li.product, .woocommerce-page.mobile-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.mobile-columns-2 ul.products li.product, .woocommerce-page.mobile-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.mobile-columns-1 ul.products li.product, .woocommerce-page.mobile-columns-1 ul.products li.product{width:100%;}.woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering{float:none;margin-bottom:2em;width:100%;}.woocommerce ul.products a.button, .woocommerce-page ul.products a.button{padding:0.5em 0.75em;}.woocommerce div.product .related.products ul.products li.product{width:calc(50% - 10px);}.woocommerce table.cart td.actions .button, .woocommerce #content table.cart td.actions .button, .woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button{padding-left:1em;padding-right:1em;}.woocommerce #content table.cart .button, .woocommerce-page #content table.cart .button{width:100%;}.woocommerce #content table.cart .product-thumbnail, .woocommerce-page #content table.cart .product-thumbnail{display:block;text-align:center !important;}.woocommerce #content table.cart .product-thumbnail::before, .woocommerce-page #content table.cart .product-thumbnail::before{display:none;}.woocommerce #content table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon{float:none;}.woocommerce #content table.cart td.actions .coupon .button, .woocommerce-page #content table.cart td.actions .coupon .button{flex:1;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a{display:block;}}@media (max-width:544px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(50% - 10px);margin-right:20px;}.woocommerce-page[class*=columns-] ul.products li.product:nth-child(n), .woocommerce[class*=columns-] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce-page[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-6>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-6>ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce div.product .related.products ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce div.product .related.products ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce ul.products a.button.loading::after, .woocommerce-page ul.products a.button.loading::after{display:inline-block;margin-left:5px;position:initial;}.woocommerce.mobile-columns-1 ul.products li.product:nth-child(n), .woocommerce-page.mobile-columns-1 ul.products li.product:nth-child(n){margin-right:0;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li{display:block;margin-right:0;}}@media (min-width:922px){.woocommerce #content .ast-woocommerce-container div.product div.images, .woocommerce .ast-woocommerce-container div.product div.images, .woocommerce-page #content .ast-woocommerce-container div.product div.images, .woocommerce-page .ast-woocommerce-container div.product div.images{width:50%;}.woocommerce #content .ast-woocommerce-container div.product div.summary, .woocommerce .ast-woocommerce-container div.product div.summary, .woocommerce-page #content .ast-woocommerce-container div.product div.summary, .woocommerce-page .ast-woocommerce-container div.product div.summary{width:46%;}.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2{float:none;width:auto;}}.woocommerce a.button , .woocommerce button.button.alt ,.woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button , .woocommerce a.button.alt ,.woocommerce .woocommerce-message a.button , .ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce button.button.alt.disabled , .wc-block-grid__products .wc-block-grid__product .wp-block-button__link {border:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;border-color:#0a0000;}.woocommerce a.button:hover , .woocommerce button.button.alt:hover , .woocommerce-page table.cart td.actions .button:hover, .woocommerce-page #content table.cart td.actions .button:hover, .woocommerce a.button.alt:hover ,.woocommerce .woocommerce-message a.button:hover , .ast-site-header-cart .widget_shopping_cart .buttons .button.checkout:hover , .woocommerce button.button.alt.disabled:hover , .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover{border-color:#3a3a3a;}@media (min-width:922px){.woocommerce.woocommerce-checkout form #customer_details.col2-set, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set{width:55%;float:left;margin-right:4.347826087%;}.woocommerce.woocommerce-checkout form #order_review, .woocommerce.woocommerce-checkout form #order_review_heading, .woocommerce-page.woocommerce-checkout form #order_review, .woocommerce-page.woocommerce-checkout form #order_review_heading{width:40%;float:right;margin-right:0;clear:right;}}
    </style>
    <style id='woocommerce-inline-inline-css'>

    </style>
    <link rel='stylesheet' id='astra-addon-css-css'  href='https://mrchavez.cl/wp-content/uploads/astra-addon/astra-addon-5f7be40078be44-46425095.css?ver=2.6.4' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.9.1' media='all' />
    <link rel='stylesheet' id='elementor-animations-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.0.10' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.0.10' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.0.10' media='all' />
    <link rel='stylesheet' id='elementor-post-11-css'  href='https://mrchavez.cl/wp-content/uploads/elementor/css/post-11.css?ver=1601763257' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'  href='https://mrchavez.cl/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.0.5' media='all' />
    <link rel='stylesheet' id='elementor-global-css'  href='https://mrchavez.cl/wp-content/uploads/elementor/css/global.css?ver=1601763761' media='all' />
    <link rel='stylesheet' id='elementor-post-214-css'  href='https://mrchavez.cl/wp-content/uploads/elementor/css/post-214.css?ver=1602005338' media='all' />
    <link rel='stylesheet' id='elementor-post-129-css'  href='https://mrchavez.cl/wp-content/uploads/elementor/css/post-129.css?ver=1601945204' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Quicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=6.0' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.12.0' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.12.0' media='all' />
    <script src='https://mrchavez.cl/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script src='https://mrchavez.cl/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <!--[if IE]>
    <script src='https://mrchavez.cl/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=2.5.5' id='astra-flexibility-js'></script>
    <script id='astra-flexibility-js-after'>
    flexibility(document.documentElement);
    </script>
    <![endif]-->
    <link rel="https://api.w.org/" href="https://mrchavez.cl/wp-json/" /><link rel="alternate" type="application/json" href="https://mrchavez.cl/wp-json/wp/v2/pages/214" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mrchavez.cl/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mrchavez.cl/wp-includes/wlwmanifest.xml" /> 
    <meta name="generator" content="WordPress 6.0" />
    <meta name="generator" content="WooCommerce 4.5.5" />
    <link rel='shortlink' href='https://mrchavez.cl/?p=214' />
    <link rel="alternate" type="application/json+oembed" href="https://mrchavez.cl/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmrchavez.cl%2Fnuestrosalon%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://mrchavez.cl/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmrchavez.cl%2Fnuestrosalon%2F&#038;format=xml" />
        <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
        <!-- Setmore Plus 3.7.2 -->
    </head>


    
    
    <body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-214 theme-astra woocommerce-no-js ast-desktop ast-page-builder-template ast-no-sidebar astra-2.5.5 ast-header-custom-item-inside ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-kit-11 elementor-page elementor-page-214 astra-addon-2.6.4">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><div 
        class="hfeed site" id="page">
        <a class="skip-link screen-reader-text" href="#content">Ir al contenido</a>
    
        
                <div data-elementor-type="header" data-elementor-id="129" class="elementor elementor-129 elementor-location-header" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-44b3cd7c elementor-section-full_width elementor-section-content-middle elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="44b3cd7c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
 
            </div>
                                    </div>
                        </div>
           
            
        
        
        <div id="content" class="site-content">
    
            <div class="ast-container">
    
            
    
        <div id="primary" class="content-area primary">
    
            
                        <main id="main" class="site-main">
    
                    
                        
                        
    
    <article 
        class="post-214 page type-page status-publish ast-article-single" id="post-214" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
    
        
        <header class="entry-header ast-header-without-markup">
    
            
                </header><!-- .entry-header -->
    
        <div class="entry-content clear" 
            itemprop="text"	>
    
            
                    <div data-elementor-type="wp-page" data-elementor-id="214" class="elementor elementor-214" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-962aea6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="962aea6" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2299b8f" data-id="2299b8f" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-823d3c6 elementor-widget elementor-widget-heading" data-id="823d3c6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">MR CHAVEZ</h2>		</div>
                    </div>
                    <div class="elementor-element elementor-element-15f54b6 elementor-widget elementor-widget-heading" data-id="15f54b6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">HISTORIA</h2>		</div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-f43d092 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f43d092" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-95ec68f" data-id="95ec68f" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-fe18153 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="fe18153" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                            </span>
            </div>
                    </div>
                    </div>
                    <div class="elementor-element elementor-element-7a4dbb2 elementor-widget elementor-widget-heading" data-id="7a4dbb2" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">2018-2020</h2>		</div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-39f773c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="39f773c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                        </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-c704f7c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c704f7c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b3e9f7 elementor-hidden-tablet elementor-hidden-phone" data-id="3b3e9f7" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-577409c elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="577409c" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:6,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                    <div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0911.jpg" alt="IMG-0911" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0912.jpg" alt="IMG-0912" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0913.jpg" alt="IMG-0913" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0915.jpg" alt="IMG-0915" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0916.jpg" alt="IMG-0916" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0917.jpg" alt="IMG-0917" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0918.jpg" alt="IMG-0918" /></figure></div>			</div>
                                                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                        <i class="bi bi-chevron-left" style="font-size: 2rem; color: white;"></i>
                            <span class="elementor-screen-only">Anterior</span>
                        </div>
                        <div class="elementor-swiper-button elementor-swiper-button-next">
                            <i class="bi bi-chevron-right " style="font-size: 2rem; color: white;"></i>
                            <span class="elementor-screen-only">Siguiente</span>
                        </div>
                                        </div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-271dbc6" data-id="271dbc6" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-f277ebd elementor-widget elementor-widget-text-editor" data-id="f277ebd" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-text-editor elementor-clearfix"><p>Todo comienza el 01 de Julio del 2018 donde Miguel Chavéz inicia y abre su pequeño local a puertas cerradas en su domicilio en la ciudad de Antofagasta trabajando solamente días sabado y domingo. Trabajando de mecánico de lunes a viernes.<br />durante ese proceso de dos años ha viajado a distintas ciudades a la constante educación tales como Iquique, Viña del mar, Santiago y Concepcion.</p></div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-78160d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78160d4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bcd74d elementor-hidden-desktop" data-id="7bcd74d" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-568951e elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="568951e" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:6,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                    <div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0911.jpg" alt="IMG-0911" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0912.jpg" alt="IMG-0912" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0913.jpg" alt="IMG-0913" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0915.jpg" alt="IMG-0915" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0916.jpg" alt="IMG-0916" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0917.jpg" alt="IMG-0917" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/IMG-0918.jpg" alt="IMG-0918" /></figure></div>			</div>
                                                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                            <i class="bi bi-chevron-left"></i>
                            <span class="elementor-screen-only">Anterior</span>
                        </div>
                        <div class="elementor-swiper-button elementor-swiper-button-next">
                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                            <span class="elementor-screen-only">Siguiente</span>
                        </div>
                                        </div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-23e03d0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="23e03d0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dd334c8" data-id="dd334c8" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-e718d63 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e718d63" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                <span class="elementor-divider-separator">
                            </span>
            </div>
                    </div>
                    </div>
                    <div class="elementor-element elementor-element-10590eb elementor-widget elementor-widget-heading" data-id="10590eb" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">2020 - ACTUALIDAD</h2>		</div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-ab5d30a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ab5d30a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b693f12" data-id="b693f12" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-e343461 elementor-widget elementor-widget-text-editor" data-id="e343461" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-text-editor elementor-clearfix"><p>Durante un proceso de 2 años se decide realizar una ampliación hasta la <br />actualidad donde se da comienzo al inicio de actividad ante SII.<br />esta ampliación es con la finalidad de abarcar a un publico más amplio, <br />contar con mas estilistas y seguir mejorando día a día con el servicio entregado.</p></div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d4e1db elementor-hidden-tablet elementor-hidden-phone" data-id="7d4e1db" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-5ca5c51 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="5ca5c51" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:6,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                    <div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.03.55.jpeg" alt="salon1" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.04.07.jpeg" alt="salon2" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.04.30.jpeg" alt="salon3" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.05.11.jpeg" alt="salon4" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.05.34.jpeg" alt="salon5" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.06.35.jpeg" alt="salon6" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.07.10.jpeg" alt="salon7" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.07.24.jpeg" alt="salon8" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.08.02.jpeg" alt="salon9" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.08.22.jpeg" alt="salon10" /></figure></div>			</div>
                                                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                             <i class="bi bi-chevron-left" style="font-size: 2rem; color: white;"></i>
                            <span class="elementor-screen-only">Anterior</span>
                        </div>
                        <div class="elementor-swiper-button elementor-swiper-button-next">
                            <i class="bi bi-chevron-right" style="font-size: 2rem; color: white;"></i>
                            <span class="elementor-screen-only">Siguiente</span>
                        </div>
                                        </div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-18fa95a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="18fa95a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c0f6e4 elementor-hidden-desktop" data-id="4c0f6e4" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-cc4ae8b elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="cc4ae8b" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:6,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                    <div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.03.55.jpeg" alt="salon1" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.04.07.jpeg" alt="salon2" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.04.30.jpeg" alt="salon3" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.05.11.jpeg" alt="salon4" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.05.34.jpeg" alt="salon5" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.06.35.jpeg" alt="salon6" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.07.10.jpeg" alt="salon7" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.07.24.jpeg" alt="salon8" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.08.02.jpeg" alt="salon9" /></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="https://mrchavez.cl/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-04-at-22.08.22.jpeg" alt="salon10" /></figure></div>			</div>
                                                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                            <span class="elementor-screen-only">Anterior</span>
                        </div>
                        <div class="elementor-swiper-button elementor-swiper-button-next">
                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                            <span class="elementor-screen-only">Siguiente</span>
                        </div>
                                        </div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-5d0296a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d0296a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9324d0" data-id="c9324d0" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-95e0280 elementor-widget elementor-widget-spacer" data-id="95e0280" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
            </div>
                    </div>
                    </div>
                            </div>
                        </div>
            </div>
                                    </div>
                        </div>
            </section>
                            </div>
                            </div>
                        </div>
            
            
            
        </div><!-- .entry-content .clear -->
    
        
        
    </article><!-- #post-## -->
    
    
                        
                        
                    
                </main><!-- #main -->
                
            
        </div><!-- #primary -->
    
    
                
                </div> <!-- ast-container -->
    
            </div><!-- #content -->
    
            
            
            
            <footer
                class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon"		>
    
            
        </div><!-- #page -->
    
        

        <script id='astra-theme-js-js-extra'>
    var astra = {"break_point":"921","isRtl":""};
    </script>
    <script src='https://mrchavez.cl/wp-content/themes/astra/assets/js/minified/style.min.js?ver=2.5.5' id='astra-theme-js-js'></script>
    <script id='colorbox-script-js-extra'>
    var setmoreplus = {"iframe":"1","transition":"elastic","speed":"200","height":"680px","width":"585px","breakpoint":"585","opacity":"0.8","returnFocus":"","rel":""};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/setmore-plus/inc/colorbox/jquery.colorbox-min.js?ver=6.0' id='colorbox-script-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/setmore-plus/js/setmoreplus.js?ver=3.7.2' id='setmoreplus-script-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
    <script id='wc-add-to-cart-js-extra'>
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/mrchavez.cl\/carrito\/","is_cart":"","cart_redirect_after_add":"no"};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.5.5' id='wc-add-to-cart-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
    <script id='woocommerce-js-extra'>
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.5.5' id='woocommerce-js'></script>
    <script id='wc-cart-fragments-js-extra'>
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_f5f013e12690ff862156eb39fc8745db","fragment_name":"wc_fragments_f5f013e12690ff862156eb39fc8745db","request_timeout":"5000"};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.5.5' id='wc-cart-fragments-js'></script>
    <script id='astra-addon-js-js-extra'>
    var astraAddon = {"off_canvas_trigger_class":"astra-shop-filter-button","off_canvas_enable":"","sticky_active":""};
    </script>
    <script src='https://mrchavez.cl/wp-content/uploads/astra-addon/astra-addon-5f7be400795c33-01125482.js?ver=2.6.4' id='astra-addon-js-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.0.10' id='elementor-frontend-modules-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.0.5' id='elementor-sticky-js'></script>
    <script id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/mrchavez.cl\/wp-admin\/admin-ajax.php","nonce":"fe22b8dc9a","i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"weixin":{"title":"WeChat"},"weibo":{"title":"Weibo"}},"menu_cart":{"cart_page_url":"https:\/\/mrchavez.cl\/carrito\/","checkout_page_url":"https:\/\/mrchavez.cl\/finalizar-compra\/"},"facebook_sdk":{"lang":"es_ES","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/mrchavez.cl\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.0.5' id='elementor-pro-frontend-js'></script>
    <script src='https://mrchavez.cl/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.0.10' id='share-link-js'></script>
    <script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.10","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"https:\/\/mrchavez.cl\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":214,"title":"Nuestro%20Salon%20-%20MR.%20CHAVEZ%20-%20Male%20Image%20%26%20Grooming","excerpt":"","featuredImage":false}};
    </script>
    <script src='https://mrchavez.cl/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.0.10' id='elementor-frontend-js'></script>

                
        </body>
    </html>
    








</body>



@include('general.footer')
