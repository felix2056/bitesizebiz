<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>@yield('title') | BuyingABiz</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title') | BuyingABiz">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="@yield('canonical')">
    <meta property="og:site_name" content="BuyingABiz">
    <meta property="og:image" content="@yield('og_image', asset('/images/default-og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@devlikebusiness">
    <meta property="twitter:creator" content="@devlikebusiness">
    <meta property="twitter:title" content="@yield('title', 'Enter the world of small business acquisitions')">
    <meta property="twitter:description" content="@yield('description', 'BuyingABiz is a platform for small business acquisitions. Subscribe for a case study on how I acquired Sourcely.ai for $4k and grew it to a valuation of $150k in 4 months. Come explore the world of buying and selling micro startups with me!')">
    <meta property="twitter:url" content="@yield('canonical', env('APP_URL'))">
    <meta property="twitter:image" content="@yield('og_image', asset('/images/default-og-image.jpg'))">
    <meta property="twitter:image:width" content="1200">
    <meta property="twitter:image:height" content="630">

    <meta name="robots" content="max-image-preview:large">
    <meta name="generator" content="WordPress 6.7.2">
    <meta name="generator" content="WooCommerce 9.3.3">
    <meta name="generator" content="Redux 4.3.17">

    <link rel="canonical" href="@yield('canonical')">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.gstatic.com" crossorigin rel="preconnect">

    {{-- wp block library css --}}
    <link rel="stylesheet" id="wp-block-library-css" href="/wp-includes/css/dist/block-library/style.min_ver%3D6.7.2.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="/wp-content/plugins/contact-form-7/includes/css/styles_ver%3D5.9.8.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css" href="/wp-content/plugins/woocommerce/assets/css/woocommerce-layout_ver%3D9.3.3.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen_ver%3D9.3.3.css" type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="/wp-content/plugins/woocommerce/assets/css/woocommerce_ver%3D9.3.3.css" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo_fn_googlefonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%7CMontserrat%3A400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%7CMontserrat%3A400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%7CWork+Sans%3A400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic&amp;subset=latin%2Ccyrillic%2Cgreek%2Cvietnamese&amp;ver=6.7.2" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-font-url-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CWork+Sans%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C800%2C800i%7COpen+Sans%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C800%2C800i%7CLora%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C800%2C800i&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-base-css" href="/wp-content/themes/xoxo/framework/css/base_ver%3Drel4_1.1.0.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific.popup-css" href="/wp-content/themes/xoxo/framework/css/magnific.popup_ver%3Drel4_1.1.0.css" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="/wp-content/themes/xoxo/framework/css/swiper_ver%3Drel4_1.1.0.css" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-fontello-css" href="/wp-content/themes/xoxo/framework/css/fontello_ver%3Drel4_1.1.0.css" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-widgets-css" href="/wp-content/themes/xoxo/framework/css/widgets_ver%3Drel4_1.1.0.css" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-woocommerce-css" href="/wp-content/themes/xoxo/config/config-woo/woocommerce_ver%3Drel4_1.1.0.css" type="text/css" media="all">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    {{-- main css --}}
    <link rel="stylesheet" id="xoxo-fn-stylesheet-css" href="/wp-content/themes/xoxo/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="xoxo-fn-responsive-css" href="/wp-content/themes/xoxo/responsive.css" type="text/css" media="all">

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Work%20Sans:400%7CMontserrat:400&amp;display=swap&amp;ver=1683456420">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work%20Sans:400%7CMontserrat:400&amp;display=swap&amp;ver=1683456420" media="print" onload="this.media='all'">
    <link rel="stylesheet" id="xoxo_fn_inline-css" href="/wp-content/themes/xoxo/framework/css/inline_ver%3Dhttps_/frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo.css" type="text/css" media="all">

    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work%20Sans:400%7CMontserrat:400&#038;display=swap&#038;ver=1683456420" />
    </noscript>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HPNPVDLP0B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HPNPVDLP0B');

    </script>

    <style>
        img:is([sizes="auto"i], [sizes^="auto,"i]) {
            contain-intrinsic-size: 3000px 1500px
        }

    </style>

    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>

    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }

    </style>

    <style id="global-styles-inline-css" type="text/css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }

    </style>

    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }

    </style>

    <style id="xoxo_fn_inline-inline-css" type="text/css">
        @media(max-width: 600px) {
            #wpadminbar {
                position: fixed;
            }
        }

        :root {
            --hff: Montserrat;
            --bff: Work Sans;
        }

        .cursor-inner.cursor-slider.cursor-hover span:after,
        .cursor-inner.cursor-slider.cursor-hover span:before {
            background-color: #F16363;
        }

        .cursor-outer .fn-cursor,
        .cursor-inner.cursor-slider:not(.cursor-hover) .fn-cursor {
            border-color: rgba(241, 99, 99, 0.7);
        }

        .cursor-inner .fn-cursor,
        .cursor-inner .fn-left:before,
        .cursor-inner .fn-left:after,
        .cursor-inner .fn-right:before,
        .cursor-inner .fn-right:after {
            background-color: rgba(241, 99, 99, 0.7);
        }

        .cursor-inner.cursor-hover .fn-cursor {
            background-color: rgba(241, 99, 99, 0.1);
        }

        :root {
            --xoxo-bbc: #FFF5CF;
            --xoxo-mc1: #FFCC00;
            --xoxo-mc2: #F16363;
            --xoxo-hc: #000000;
            --xoxo-hhc: #F16363;
            --xoxo-bc: #000000;
        }

        .blog__item .desc p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .sticky .blog__item {
            background-color: #FFEEAF;
        }

        h1 {
            font-size: 45px;
        }

        h2 {
            font-size: 36px;
        }

        h3 {
            font-size: 30px;
        }

        h4 {
            font-size: 24px;
        }

        h5 {
            font-size: 20px;
        }

        h6 {
            font-size: 16px;
        }

        .fn__bp_slider .title_holder h3,
        .blog__item .title h3 {
            font-size: 36px;
        }

        @media(max-width: 768px) {

            .fn__bp_slider .title_holder h3,
            .blog__item .title h3 {
                font-size: 24px;
            }
        }

        .xoxo_fn_leftsidebar,
        .xoxo_fn_rightsidebar {
            padding-left: 60px;
        }

        .xoxo_fn_bloglist .post_item {
            padding-left: 60px;
            margin-bottom: 66px;
        }

        .xoxo_fn_hassidebar .widget_block {
            margin-bottom: 66px;
        }

        .xoxo_fn_bloglist>ul,
        .xoxo_fn_hassidebar .sidebarpage {
            margin-left: -60px;
        }

        @media(max-width: 1200px) {

            .xoxo_fn_leftsidebar,
            .xoxo_fn_rightsidebar {
                padding-left: 40px;
            }

            .xoxo_fn_bloglist .post_item {
                padding-left: 40px;
                margin-bottom: 46px;
            }

            .xoxo_fn_hassidebar .widget_block {
                margin-bottom: 46px;
            }

            .xoxo_fn_bloglist>ul,
            .xoxo_fn_hassidebar .sidebarpage {
                margin-left: -40px;
            }
        }

        @media(max-width: 768px) {

            .xoxo_fn_leftsidebar,
            .xoxo_fn_rightsidebar {
                padding-left: 30px;
            }

            .xoxo_fn_bloglist .post_item {
                padding-left: 30px;
                margin-bottom: 36px;
            }

            .xoxo_fn_hassidebar .widget_block {
                margin-bottom: 36px;
            }

            .xoxo_fn_bloglist>ul,
            .xoxo_fn_hassidebar .sidebarpage {
                margin-left: -30px;
            }
        }

        .single__content {
            width: 100%;
            max-width: 100%;
        }

        .xoxo_fn_woo_myaccount,
        .cart-collaterals {
            margin-bottom: 70px;
        }

    </style>

    <style class="wp-fonts-local" type="text/css">
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('../wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2Cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('../wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }

    </style>
    <style id="xoxo_fn_option-dynamic-css" title="dynamic-css" class="redux-options-output">
        body {
            font-family: "Work Sans";
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            font-display: swap;
        }

        .xoxo_fn_nav .nav_menu a {
            font-family: Montserrat;
            font-weight: 400;
            font-style: normal;
            font-size: 36px;
            font-display: swap;
        }

        input {
            font-family: Montserrat;
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            font-display: swap;
        }

        input {
            font-family: Montserrat;
            font-weight: 400;
            font-style: normal;
            font-size: 20px;
            font-display: swap;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Montserrat;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

    </style>

    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/"
            , "ext": ".png"
            , "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/"
            , "svgExt": ".svg"
            , "source": {
                "concatemoji": "https:\/\/frenify.com\/work\/envato\/frenify\/wp\/xoxo\/2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e
                        , timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                    , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas")
                    , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                    , o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0
                , everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                            , r = new Blob([e], {
                                type: "text/javascript"
                            })
                            , a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */

    </script>

    <script type="text/javascript" src="/wp-includes/js/jquery/jquery.min_ver%3D3.7.1.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min_ver%3D3.4.1.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min_ver%3D2.7.0-wc.9.3.3.js" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
</head>

<body class="page-template page-template-page-blog page-template-page-blog-php page page-id-126 theme-xoxo woocommerce-no-js">
    <div class="clearfix"></div>

    <!-- HTML starts here -->
    <div class="xoxo-fn-wrapper core_ready">
        <!-- Cart starts here -->
        <div class="xoxo_fn_woobar">
            <a href="#" class="bar_extra_closer"></a>
            <div class="bar_closer">
                <a href="#">
                    <span class="text">Close</span>
                </a>
            </div>
            <div class="bar_preloader">
                <span class="icon"></span>
                <span class="text">Cart updating</span>
            </div>
            <div class="bar_content">
                <div class="xoxo_fn_cartbox">
                    <div class="fn_cartbox_empty">
                        <a href="../shop/index.html"></a>
                        <p>
                            <span class="icon">
                                <span class="fn__tooltip">Shop</span>
                                <img class="fn__svg" src="/images/svg/bag.svg" alt="svg">
                            </span>
                            Your cart is currently is empty. You could visit our shop and start shopping.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart ends here -->

        <!-- Header -->
        <header id="xoxo_fn_header">
            <div class="xoxo_fn_header">
                <div class="container">
                    <div class="header_top">
                        <span class="wing_left"></span>
                        <span class="wing_right"></span>

                        <!-- Social List -->
                        <div class="social">
                            <div class="xoxo_fn_social_list">
                                <ul>
                                    <li>
                                        <a title="facebook" href="https://www.facebook.com/profile.php?id=100016824821262" target="_blank">
                                            <img class="fn__svg" src="/images/svg/social/facebook.svg" alt="svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="twitter" href="https://twitter.com/devlikesbizness" target="_blank">
                                            <img class="fn__svg" src="/images/svg/social/twitter.svg" alt="svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="youtube" href="https://www.youtube.com/channel/UCW_EPM8iqmn27qeT65qLMug" target="_blank">
                                            <img class="fn__svg" src="/images/svg/social/youtube.svg" alt="svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="instagram" href="https://www.instagram.com/devlikesbizness/" target="_blank">
                                            <img class="fn__svg" src="/images/svg/social/instagram.svg" alt="svg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- !Social List -->

                        <div class="logo">
                            <a href="/">
                                <img class="retina_logo" src="/images/logo-transparent.png" alt="logo">
                                <img class="desktop_logo" src="/images/logo-transparent.png" alt="logo">
                            </a>
                        </div>

                        <div class="sw_wrap">
                            <div class="search_opener">
                                <a href="#">
                                    <span class="text">Search</span>
                                    <span class="icon">
                                        <img class="fn__svg " src="/images/svg/search.svg" alt="svg">
                                    </span>
                                </a>
                            </div>
                            {{-- <div class="woo__opener">
                                <a href="#">
                                    <span class="icon">
                                        <img class="fn__svg " src="/images/svg/cart.svg" alt="svg">
                                    </span>
                                    <span class="count">0</span>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="header_bottom">
                        <div class="bottom_fixer">
                            <div class="xoxo_fn_nav main_nav">
                                <span class="wing"></span>
                                <div class="menu">
                                    <div class="menu-main-menu-container">
                                        <ul id="menu-main-menu" class="xoxo_fn_main_nav">
                                            <li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-130">
                                                <a href="/">
                                                    <span>
                                                        <span>Home</span>
                                                        <span class="suffix">//</span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                                                <a href="/blog">
                                                    <span>
                                                        <span>Blog</span>
                                                        <span class="suffix">//</span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                                                <a href="https://pocket-deals.com" target="_blank">
                                                    <span>
                                                        <span>PocketFund</span>
                                                        <span class="suffix">//</span>
                                                    </span>
                                                </a>
                                            </li>

                                            @php
                                            $categories = \App\Models\Category::all();
                                            @endphp
                                            <li id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-185">
                                                <a href="#">
                                                    <span>
                                                        <span>Categories</span>
                                                        <span class="suffix">//</span>
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    @foreach($categories as $category)
                                                    <li id="menu-item-140" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-140">
                                                        <a href="{{ $category->link }}">
                                                            <span>
                                                                <span>{{ $category->name }}</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152">
                                                <a href="/contact">
                                                    <span>
                                                        <span>Contact</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more">
                                        <a href="#">
                                            <span>More...</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <!-- Comes from JS -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- !Header -->

        <div class="xoxo_fn_stickynav ajax_enable">
            <div class="progress"></div>
            <div class="container">
                <div class="transform_hedaer">
                    <div class="sticky_header">
                        <div class="xoxo_fn_nav sticky_nav">
                            <div class="menu">
                                <div class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="xoxo_fn_main_nav">
                                        <li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-130">
                                            <a href="/">
                                                <span>
                                                    <span>Home</span>
                                                    <span class="suffix">//</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                                            <a href="/blog">
                                                <span>
                                                    <span>Blog</span>
                                                    <span class="suffix">//</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                                            <a href="https://pocket-deals.com" target="_blank">
                                                <span>
                                                    <span>PocketFund</span>
                                                    <span class="suffix">//</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-185">
                                            <a href="#">
                                                <span>
                                                    <span>Categories</span>
                                                    <span class="suffix">//</span>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                <li id="menu-item-140" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-140">
                                                    <a href="{{ $category->link }}">
                                                        <span>
                                                            <span>{{ $category->name }}</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        {{-- <li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-269">
                                            <a href="/shop">
                                                <span>
                                                    <span>Shop</span>
                                                    <span class="suffix">//</span>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273"><a href="/shop"><span><span>Shop</span><span class="suffix">//</span></span></a></li>
                                                <li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-272"><a href="/cart"><span><span>Cart</span><span class="suffix">//</span></span></a></li>
                                                <li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271"><a href="/checkout"><span><span>Checkout</span><span class="suffix">//</span></span></a></li>
                                                <li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-270"><a href="/my-account"><span><span>My account</span><span class="suffix">//</span></span></a></li>
                                            </ul>
                                        </li> --}}

                                        <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152">
                                            <a href="/contact">
                                                <span>
                                                    <span>Contact</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="more">
                                    <a href="#">
                                        <span>More...</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <!-- Comes from JS -->
                                    </ul>
                                </div>
                            </div>

                            <div class="icon_bar">
                                <div class="icon_bar__item icon_bar__home">
                                    <a href="/">
                                        <img class="fn__svg " src="/images/svg/home.svg" alt="svg">
                                    </a>
                                </div>
                                <div class="icon_bar__item icon_bar__share">
                                    <a href="#">
                                        <img class="fn__svg " src="/images/svg/share.svg" alt="svg">
                                    </a>
                                    <div class="xoxo_fn_social_list">
                                        <ul>
                                            <li><a title="facebook" href="https://www.facebook.com/profile.php?id=100016824821262" target="_blank"><img class="fn__svg" src="/images/svg/social/facebook.svg" alt="svg"></a></li>
                                            <li><a title="twitter" href="https://twitter.com/devlikesbizness" target="_blank"><img class="fn__svg" src="/images/svg/social/twitter.svg" alt="svg"></a></li>
                                            <li><a title="youtube" href="https://www.youtube.com/channel/UCW_EPM8iqmn27qeT65qLMug" target="_blank"><img class="fn__svg" src="/images/svg/social/youtube.svg" alt="svg"></a></li>
                                            <li><a title="instagram" href="https://www.instagram.com/devlikesbizness/" target="_blank"><img class="fn__svg" src="/images/svg/social/instagram.svg" alt="svg"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="icon_bar__item icon_bar__search">
                                    <a href="#">
                                        <img class="fn__svg " src="/images/svg/search.svg" alt="svg">
                                    </a>
                                </div>

                                {{-- <div class="icon_bar__item icon_bar__woo">
                                    <a href="#">
                                        <img class="fn__svg " src="/images/svg/cart.svg" alt="svg">
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Searchbox -->
        <div class="xoxo_fn_searchbox">
            <a href="#" class="search_closer">
                <span></span>
            </a>
            <div class="container">
                <div class="search_content">
                    <div class="search_wrapper">
                        <form class="main_form" action="/search" method="get">
                            <div class="input">
                                <input type="text" placeholder="Type at least one character to search..." name="s" autocomplete="off">
                            </div>
                            <div class="search">
                                <input type="submit" class="pe-7s-search" value="Search">
                                <img class="fn__svg " src="/images/svg/search.svg" alt="svg">
                            </div>
                        </form>

                        <div class="search_result">
                            <div class="filterbox">
                                <div class="filter title_filter">
                                    <label>
                                        <input type="checkbox" name="titleFilter" value="1" checked>
                                        <span class="icon"><img class="fn__svg " src="/images/svg/checked.svg" alt="svg"></span>
                                        <span class="text">Search in title only</span>
                                    </label>
                                </div>
                                <div class="filter post_filter">
                                    <label>
                                        <input type="checkbox" name="postFilter" value="1" checked>
                                        <span class="icon"><img class="fn__svg " src="/images/svg/checked.svg" alt="svg"></span>
                                        <span class="text">Search in posts only</span>
                                    </label>
                                </div>
                            </div>
                            <div class="resultbox">
                                <div class="fn__preloader">
                                    <span class="icon"></span>
                                    <span class="text">Loading</span>
                                </div>
                                <div class="result_content">
                                    <div class="result_list">
                                        <ul></ul>
                                    </div>
                                    <div class="result_info"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- !Searchbox -->

        <div class="fn_ajax__preloader">
            <div class="icon"></div>
            <div class="text">Loading</div>
        </div>

        <div class="fn__popupbox_iframe">
            <a href="#" class="iframe_closer">
                <span></span>
            </a>
            <div class="iframe_content"></div>
        </div>

        <!-- Mobile Navigation -->
        <div class="xoxo_fn_mobnav">
            <div class="mob_top">
                <div class="logo">
                    <div class="fn_logo"><a href="../index.html"><img class="mobile_logo" src="/images/logo-transparent.png" alt="logo"><img class="mobile_retina_logo" src="/images/logo-transparent.png" alt="logo"></a></div>
                </div>
                <div class="right__triggerr">
                    {{-- <a class="item_woo" href="#">
                        <img class="fn__svg " src="/images/svg/cart.svg" alt="svg">
                    </a> --}}
                    <a class="mobsearch_opener" href="#">
                        <img class="fn__svg " src="/images/svg/search.svg" alt="svg">
                    </a>
                    <a class="mobmenu_opener" href="#">
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="mob_bot">
                <div class="xoxo_fn_social_list">
                    <ul>
                        <li><a title="facebook" href="https://www.facebook.com/profile.php?id=100016824821262" target="_blank"><img class="fn__svg" src="/images/svg/social/facebook.svg" alt="svg"></a></li>
                        <li><a title="twitter" href="https://twitter.com/devlikesbizness" target="_blank"><img class="fn__svg" src="/images/svg/social/twitter.svg" alt="svg"></a></li>
                        <li><a title="youtube" href="https://www.youtube.com/channel/UCW_EPM8iqmn27qeT65qLMug" target="_blank"><img class="fn__svg" src="/images/svg/social/youtube.svg" alt="svg"></a></li>
                        <li><a title="instagram" href="https://www.instagram.com/devlikesbizness/" target="_blank"><img class="fn__svg" src="/images/svg/social/instagram.svg" alt="svg"></a></li>
                    </ul>
                </div>
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu-1" class="mobile_menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-130">
                            <a href="/">
                                <span>
                                    <span>Home</span>
                                </span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                            <a href="/blog">
                                <span>
                                    <span>Blog</span>
                                </span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                            <a href="https://pocket-deals.com" target="_blank">
                                <span>
                                    <span>PocketFund</span>
                                </span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-185">
                            <a href="#">
                                <span>
                                    <span>Categories</span>
                                </span>
                            </a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-140">
                                    <a href="{{ $category->link }}">
                                        <span>
                                            <span>{{ $category->name }}</span>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152">
                            <a href="/contact">
                                <span>
                                    <span>Contact</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- !Mobile Navigation -->

        <div class="xoxo_fn_content">
            @yield('content')

            <div class="clearfix"></div>

            @php
            $isBlog = request()->is('blog') || request()->is('blog/*');
            @endphp

            @if($isBlog)
            <!-- Blog Footer -->
            <footer id="xoxo_fn_footer">
                <div class="xoxo_fn_footer">
                    <div class="footer_top">
                        <div class="container">
                            <div class="footer_subscribe_form">
                                <img class="fn__svg" src="/images/svg/paper-plane.svg" alt="svg">
                                <h3 class="fsf_title">Stay in the loop</h3>
                                <p class="fsf_desc">Get the latest posts delivered right to your
                                    email.
                                </p>

                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-162" method="post" data-id="162" data-name="Footer Subscribe Form">
                                    <div class="mc4wp-form-fields">
                                        <div class="fn__subscribe">
                                            <input type="email" name="EMAIL" placeholder="Your Email *" required>
                                            <input type="submit" value="Subscribe">
                                        </div>
                                    </div>
                                    <label style="display: none !important;">
                                        Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value tabindex="-1" autocomplete="off">
                                    </label>
                                    <input type="hidden" name="_mc4wp_timestamp" value="1741274020">
                                    <input type="hidden" name="_mc4wp_form_id" value="162">
                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                    <div class="mc4wp-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="footer_bottom">
                        <div class="container">
                            <div class="footer_btm_in">
                                <span class="wing_left"></span>
                                <span class="wing_right"></span>
                                <div class="footer_widgets">
                                    <div id="nav_menu-2" class="widget_block clearfix widget_nav_menu">
                                        <div>
                                            <div class="menu-footer-menu-container">
                                                <ul id="menu-footer-menu" class="menu">
                                                    <li id="menu-item-186" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-186">
                                                        <a href="#">Terms &amp; Conditions</a>
                                                    </li>
                                                    <li id="menu-item-187" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-187">
                                                        <a href="#">Privacy Policy</a>
                                                    </li>
                                                    <li id="menu-item-188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-188">
                                                        <a href="#">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer_copyright">
                                        <p> © 2025 <a href="https://buyingabiz.com">BuyingABiz</a>, All Rights Reserved. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </footer>
            <!-- !Blog Footer -->
            @else
            <!-- Home Footer -->
            <footer class="gap no-bottom" style="background-image: url(/images/footer.jpg);">
                <div class="container">
                    <div class="footer-try">
                        <div>
                            <h2>Ready to Start Your Investment Journey?</h2>
                            <p>Join hundreds of successful investors who've built portfolios of online businesses through our micro private equity platform.</p>
                        </div>
                        <a href="https://pocket-deals.com" target="_blank" class="button btn"><span><span>Browse Deals</span></span></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-logo">
                                <img src="/images/logo-transparent.png" alt="img">
                                <p>Your gateway to micro private equity investing. We help first-time investors acquire and scale online businesses from $5K to $100K+ with expert guidance and proven strategies.</p>
                                <ul class="social-media">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="widget-title">
                                <h3>Investor Resources</h3>
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Investment Guides</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Due Diligence Tips</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Case Studies</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="#faq">FAQ</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="https://pocket-deals.com" target="_blank">Browse Deals</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Market Insights</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Exit Strategies</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Portfolio Building</a></li>
                                    <li><i class="fa-solid fa-angles-right"></i><a href="/blog">Risk Management</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-title">
                                <h3>Get In Touch</h3>
                                <div class="get-in-touch">
                                    <div><i class="flaticon-map-location"></i></div>
                                    <div>
                                        <span>Email:</span>
                                        <h6><a href="mailto:dev@buyingabiz.com">dev@buyingabiz.com</a></h6>
                                    </div>
                                </div>
                                <div class="get-in-touch">
                                    <div><i class="flaticon-iphone"></i></div>
                                    <div>
                                        <span>Newsletter:</span>
                                        <h6><a href="#subscribe">Join 4,000+ Investors</a></h6>
                                    </div>
                                </div>
                                <div class="get-in-touch mb-0">
                                    <div><i class="flaticon-mail-inbox-app"></i></div>
                                    <div>
                                        <span class="pt-2 pb-0">Ready to start investing? Browse our curated selection of online businesses and begin your micro private equity journey today.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-rights">
                        <p>© 2025 BuyingABiz. All Rights Reserved. | Micro Private Equity Platform</p>
                        <div class="review">
                            <img alt="img" src="/images/google-w.png">
                            <ul class="star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <h6>(5.0) </h6>
                        </div>
                    </div>
                </div>
                <ul class="shaps-img">
                    <li><img src="/images/shaps-4.png" alt="img"></li>
                    <li><img src="/images/shaps-1.png" alt="img"></li>
                    <li><img src="/images/shaps-2.png" alt="img"></li>
                </ul>
            </footer>
            <!-- !Home Footer -->
            @endif
        </div>
    </div>

    <div class="frenify-cursor cursor-outer" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor"></span>
    </div>
    <div class="frenify-cursor cursor-inner" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor">
            <span class="fn-left"></span>
            <span class="fn-right"></span>
        </span>
    </div>

    <a class="xoxo_fn_totop">
        <span class="progress_wrapper">
            <span class="progress"></span>
        </span>
        <img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg">
    </a>

    <div class="clearfix"></div>
    <!-- HTML ends here -->

    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();

    </script>

    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();

    </script>

    <link rel="stylesheet" id="wc-blocks-style-css" href="../wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks_ver%3Dwc-9.3.3.css" type="text/css" media="all">
    <script type="text/javascript" src="/wp-includes/js/dist/hooks.min_ver%3D4d63a3d491d11ffd8ac6.js" id="wp-hooks-js"></script>
    <script type="text/javascript" src="/wp-includes/js/dist/i18n.min_ver%3D5e580eb46a90c2b997e6.js" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */

    </script>
    <script type="text/javascript" src="/wp-content/plugins/contact-form-7/includes/swv/js/index_ver%3D5.9.8.js" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/frenify.com\/work\/envato\/frenify\/wp\/xoxo\/2\/wp-json\/"
                , "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */

    </script>
    <script type="text/javascript" src="/wp-content/plugins/contact-form-7/includes/js/index_ver%3D5.9.8.js" id="contact-form-7-js"></script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min_ver%3D9.3.3.js" id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5
                , "session": 30
                , "base64": false
                , "ajaxurl": "https:\/\/frenify.com\/work\/envato\/frenify\/wp\/xoxo\/2\/wp-admin\/admin-ajax.php"
                , "prefix": "wc_order_attribution_"
                , "allowTracking": true
            }
            , "fields": {
                "source_type": "current.typ"
                , "referrer": "current_add.rf"
                , "utm_campaign": "current.cmp"
                , "utm_source": "current.src"
                , "utm_medium": "current.mdm"
                , "utm_content": "current.cnt"
                , "utm_id": "current.id"
                , "utm_term": "current.trm"
                , "utm_source_platform": "current.plt"
                , "utm_creative_format": "current.fmt"
                , "utm_marketing_tactic": "current.tct"
                , "session_entry": "current_add.ep"
                , "session_start_time": "current_add.fd"
                , "session_pages": "session.pgs"
                , "session_count": "udata.vst"
                , "user_agent": "udata.uag"
            }
        };
        /* ]]> */

    </script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min_ver%3D9.3.3.js" id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/magnific.popup_ver%3Drel4_1.1.0.js" id="magnific.popup-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/isotope_ver%3Drel4_1.1.0.js" id="isotope-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/swiper_ver%3Drel4_1.1.0.js" id="swiper-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/ResizeSensor_ver%3Drel4_1.1.0.js" id="ResizeSensor-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/theia-sticky-sidebar_ver%3Drel4_1.1.0.js" id="theia-sticky-sidebar-js"></script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/config/config-woo/woocommerce_ver%3Drel4_1.1.0.js" id="xoxo-fn-woocommerce-js"></script>
    <script type="text/javascript" id="xoxo-fn-init-js-extra">
        /* <![CDATA[ */
        var XoxoAjaxObject = {
            "ajax_url": "https:\/\/frenify.com\/work\/envato\/frenify\/wp\/xoxo\/2\/wp-admin\/admin-ajax.php"
            , "siteurl": "https:\/\/frenify.com\/work\/envato\/frenify\/wp\/xoxo\/2"
            , "nonce": "637474136d"
            , "copiedText": "Copied!"
        };
        /* ]]> */

    </script>
    <script type="text/javascript" src="/wp-content/themes/xoxo/framework/js/init_ver%3Drel4_1.1.0.js" id="xoxo-fn-init-js"></script>
    <script type="text/javascript" src="/wp-includes/js/comment-reply.min_ver%3D6.7.2.js" id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" defer src="/wp-content/plugins/mailchimp-for-wp/assets/js/forms_ver%3D4.9.17.js" id="mc4wp-forms-api-js"></script>

    <!-- Interactive FAQ Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const heading = item.querySelector('.heading');
                const content = item.querySelector('.content');
                const icon = item.querySelector('.icon');

                heading.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Close all other accordion items
                    accordionItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            const otherContent = otherItem.querySelector('.content');
                            otherContent.style.display = 'none';
                        }
                    });

                    // Toggle current item
                    const isActive = item.classList.contains('active');

                    if (isActive) {
                        item.classList.remove('active');
                        content.style.display = 'none';
                    } else {
                        item.classList.add('active');
                        content.style.display = 'block';
                    }
                });
            });
        });

    </script>
</body>
</html>
