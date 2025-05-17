<style>
    /*-----------------------------------------------------------------------------------

    [Table of contents]
    
        01. header
        02. navbar
        03. btn
        04. hero-section
        05. get-a-quote
        06. heading
        07. shaps-img
        08. loading
        09. marquee
        10. presenting
        11. how-it-works
        12. video
        13. team-section
        14. accordion
        15. pricing-plans
        16. clients-section
        17. blog
        18. tag
        19. count-style
        20. footer
        21. widget-title
        22. all-rights
        23. scroll-percentage
        24. hero-section.for
        25. hero-section.two
        26. hero-section.three
        27. subscribe-text
        28. transition 

    -----------------------------------------------------------------------------------*/

    :root {
        --bgcolor: #fff5cf;
        --main-color: #f16363;
    }

    .gap {
        padding: 120px 0;
    }

    .no-top {
        padding-top: 0;
    }

    .no-bottom {
        padding-bottom: 0;
    }

    ul {
        padding: 0;
        margin: 0;
    }

    li {
        display: block;
    }

    figure {
        overflow: hidden;
    }

    hr {
        margin: 0;
    }

    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    /* 01. header */
    .top-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #000;
        padding: 32px 70px;
        border-radius: 32px;
    }

    .top-bar ul {
        display: flex;
        align-items: center;
    }

    .top-bar a i svg {
        width: 30px;
        fill: #fff;
        height: auto;
    }

    .top-bar a i {
        margin-right: 10px;
        color: #fff;
        border-radius: 50%;
        color: #fff;
        font-size: 24px;
    }

    .top-bar a {
        font-size: 18px;
        color: #fff;
        display: flex;
        align-items: center;
    }

    .top-bar a .questions .btn span i {
        padding-right: 10px;
    }

    /* 02. navbar */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: -1;
        opacity: 0;
        transition: 1s all;
    }

    .navbar {
        display: flex;
        align-items: center;
        position: relative;
        justify-content: center;
        padding: 0;
    }

    .navbar-logo {
        color: #ff3f34;
        text-decoration: none;
        font-size: 25px;
        padding: 0px 20px;
    }

    .navbar-links {
        list-style-type: none;
        display: flex;
    }

    .navbar-links li:not(:last-child) {
        padding-right: 40px;
    }

    .navbar-links li a {
        display: block;
        text-decoration: none;
        color: #707070;
        transition: 0.4s all;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .navbar-links li.navbar-dropdown {
        position: relative;
    }

    .navbar-links li.navbar-dropdown:hover .sub-menu {
        visibility: visible;
        opacity: 1;
        transform: translatey(34px);
        z-index: 1111;
        b
    }

    .navbar-links li.navbar-dropdown .sub-menu {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        top: 100%;
        transform: translatey(44px);
        left: 0;
        width: 230px;
        box-shadow: 0px 10px 10px 3px hsl(0deg 0% 0% / 16%);
        z-index: 111;
        transition: 0.4s all;
        display: block;
        border-radius: 30px;
        background-color: #000000;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        padding-bottom: 14px;
    }

    .navbar-links li.navbar-dropdown .sub-menu a {
        font-size: 16px;
        padding-left: 25px;
        padding-top: 15px;
        padding-bottom: 15px;
        font-weight: 700;
        border: 0;
        position: relative;
        text-transform: capitalize;
        color: #ffffff;
        /* background-color: #FFF; */
    }

    .navbar-links li.navbar-dropdown .sub-menu li a:hover {
        color: var(--bgcolor);
    }

    .navbar-links li.navbar-dropdown .sub-menu li {
        position: relative;
        padding: 0;
    }

    .navbar-links li.navbar-dropdown .sub-menu li:not(:last-child):before {
        content: "";
        z-index: 11;
        position: absolute;
        height: 1px;
        background-color: #6a6a6a;
        width: 75%;
        bottom: 0;
        left: 25px;
    }

    li.menu-item-children>a:before {
        content: "";
        background-image: url(../img/down-arrow.svg);
        background-repeat: no-repeat;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        right: 83px;
        width: 8px;
        height: 8px;
    }

    .navbar-links li>a {
        border-bottom: 5px solid transparent;
        color: white;
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 500;
    }

    li.sub-menu-item-children:after {
        content: "";
        position: absolute;
        width: 8px;
        height: 8px;
        z-index: 1;
        right: 31px;
        background-color: black;
        clip-path: polygon(68% 50%, 0 0, 0 100%);
        top: 44%;
    }

    .navbar-links li.navbar-dropdown .sub-menu li:hover .sub-menu {
        opacity: 1;
    }

    .navbar-links li.navbar-dropdown:hover .sub-menu .sub-menu {
        position: absolute;
        left: 100%;
        border-left: 3px solid var(--theme-colour);
        opacity: 0;
        top: 20%;
    }

    a.search-btn svg {
        width: 22px;
        height: auto;
        display: flex;
        fill: #fff;
    }

    .navbar-links li>a i {
        padding-right: 6px;
    }

    @media only screen and (max-width: 1920px) and (min-width: 1200px) {
        #stickyHeader.slideUp {
            top: 0;
            z-index: 111111111;
            position: fixed;
            border-radius: 0;
            left: 0;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        body.dark #stickyHeader.slideUp {
            background: #111;
        }

        body.light #stickyHeader.slideUp {
            background: #f6fafb;
        }
    }

    header {
        padding-top: 25px;
        position: absolute;
        z-index: 1;
        width: 100%;
    }

    .top-bar ul li {
        padding-right: 50px;
    }

    .top-bar ul li a {
        color: white;
    }

    .top-bar ul li a:hover {
        color: var(--bgcolor);
    }

    /* 03. btn */
    .btn {
        border: none;
        text-align: center;
        cursor: pointer;
        text-transform: capitalize;
        outline: none;
        position: relative;
        color: #fff;
        font-weight: 700;
        font-size: 16px;
        background-color: #000;
        padding: 18px 65px;
        border-radius: 15px;
    }

    .button {
        pointer-events: auto;
        cursor: pointer;
        background: #e7e7e7;
        border: none;
        padding: 1.5rem 3rem;
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        position: relative;
        display: inline-block;
    }

    .button::before,
    .button::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .btn {
        padding: 1rem 3.5rem;
        border: 1px solid #000;
        overflow: hidden;
        color: #fff;
    }

    .btn span {
        display: block;
        position: relative;
    }

    .btn>span {
        overflow: hidden;
    }

    .btn>span>span {
        overflow: hidden;
    }

    .btn:hover>span>span {
        animation: MoveUpInitial 0.2s forwards, MoveUpEnd 0.2s forwards 0.2s;
        color: #000;
    }

    @keyframes MoveUpInitial {
        to {
            transform: translate3d(0, -105%, 0);
        }
    }

    @keyframes MoveUpEnd {
        from {
            transform: translate3d(0, 100%, 0);
        }

        to {
            transform: translate3d(0, 0, 0);
        }
    }

    .btn::before {
        content: '';
        background: #000;
        transition: transform 0.3s cubic-bezier(0.7, 0, 0.2, 1);
        transform-origin: 100% 50%;
    }

    .btn:hover::before {
        transform: scale3d(0, 1, 1);
        transform-origin: 0% 50%;
    }

    .top-bar .btn {
        padding: 12px 26px;
    }

    header .btn:after {
        width: 136%;
    }

    li.navbar-dropdown.menu-item-children {
        padding-right: 100px;
    }

    /* 4. hero-section */
    .hero-section {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        background-color: var(--bgcolor);
        background-repeat: no-repeat;
        background-position: right;
        padding-bottom: 70px;
    }

    .hero-text {
        position: relative;
        margin-top: 40px;
    }

    .hero-text p {
        font-size: 22px;
        color: #000;
        line-height: 36px;
    }

    .hero-text span {
        background-color: #fff;
        padding: 4px 20px;
        border-radius: 50px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 16px;
        display: inline-block;
    }

    .hero-text img.heroimg {
        position: absolute;
        right: -25%;
        z-index: 1;
        bottom: -47%;
        width: 52%;
        height: auto;
    }

    .hero-text h1 {
        /* color: #fff; */
        padding-bottom: 26px;
        line-height: 90px;
        font-weight: bold;
        font-size: 86px;
    }

    .hero-text h2 {
        /* color: #fff; */
        padding-bottom: 26px;
        line-height: 90px;
        font-weight: bold;
        font-size: 85px;
    }

    .hero-text h2 span {
        color: var(--main-color);
    }

    .hero-text ul li {
        color: white;
        padding-bottom: 18px;
        display: flex;
        align-items: center;
        font-size: 18px;
    }

    .hero-text ul li img {
        width: 30px;
        height: 30px;
        display: flex;
        border-radius: 50%;
        background-color: #ffffff30;
        margin-right: 17px;
        padding: 7px;
    }

    .listing {
        justify-content: space-between;
        width: 89%;
    }

    .hero-text>img {
        margin-left: auto;
        display: block;
        height: 263px;
        margin-top: 30px;
    }

    .review {
        display: flex;
        align-items: center;
        width: 25em;
        margin: 0 auto;
    }

    .review h6 {
        font-weight: bold;
        padding-left: 8px;
    }

    .review ul {
        display: flex;
        /* margin-left: 20px; */
    }

    .review img {
        margin: 0px 30px;
    }

    .review ul li {
        padding-right: 4px;
    }

    /* 5. get-a-quote */
    form#contact-form h3 {
        font-size: 40px;
        font-weight: bold;
        line-height: 46px;
        padding-bottom: 6px;
    }

    .get-a-quote h6 {
        color: #000000;
        font-size: 16px;
        font-weight: 400;
        padding-bottom: 30px;
    }

    .get-a-quote {
        z-index: 11;
        /* margin-bottom: 40px; */
        background-color: white;
        padding: 40px;
        border-radius: 20px;
        position: relative;
        box-shadow: 0px 30px 50px 0px rgb(0 0 0 / 55%);
        width: 94%;
        margin-left: auto;
    }

    .get-a-quote input[type="text"],
    .get-a-quote input[type="email"],
    .get-a-quote input[type="number"] {
        width: 100%;
        height: 60px;
        border: 0;
        outline: 0;
        margin-bottom: 20px;
        color: #444;
        font-size: 16px;
        background-color: #fafafa;
        border: 1px solid #cdcdcd;
        border-radius: 18px;
        padding-left: 20px;
    }

    .get-a-quote input:focus {
        border-color: var(--bgcolor);
    }

    .get-a-quote p {
        font-weight: 600;
        padding-bottom: 10px;
        color: #000;
    }

    .radio-button {
        margin-right: 15px;
        font-size: 16px;
        font-weight: 600;
        align-items: center;
        display: flex;
        margin-bottom: 25px;
    }

    .radio-button label {
        padding-left: 10px;
    }

    .radio-button input {
        width: 22px;
        height: 22px;
        background-color: #ebebeb !important;
        border: 0 !important;
    }

    .group-img {
        position: relative;
    }

    .group-img svg {
        position: absolute;
        right: 0;
        width: 22px;
        height: auto;
        top: 21px;
    }

    .get-a-quote img {
        position: absolute;
        right: 34px;
        animation: top-bottom 2s infinite;
    }

    .get-a-quote .btn {
        width: 100%;
    }

    /* 06. heading */
    .heading {
        text-align: center;
        width: 72%;
        margin: auto;
        margin-bottom: 40px;
    }

    .heading h2 {
        font-size: 70px;
        padding-top: 20px;
        font-weight: bold;
    }

    .heading span {
        font-weight: 500;
        font-size: 18px;
        background-color: var(--main-color);
        padding: 5px 20px;
        display: inline-block;
        border-radius: 50px;
        color: #FFF;
    }

    .heading h5 {
        padding-top: 20px;
        font-weight: bold;
        font-size: 35px;
    }

    /* 07. shaps-img */
    ul.shaps-img li {
        position: absolute;
    }

    ul.shaps-img li:nth-child(1) {
        top: 20%;
        left: 11%;
        animation: 8s rotate infinite;
    }

    ul.shaps-img li:nth-child(2) {
        top: 52%;
        left: 8%;
        animation: 10s toptop infinite;
    }

    ul.shaps-img li:nth-child(3) {
        bottom: 23%;
        left: 4%;
        animation: 10s toptop infinite;
    }

    ul.shaps-img li:nth-child(4) {
        bottom: 16%;
        left: 50%;
        animation: 10s rotate infinite;
    }

    ul.shaps-img li:nth-child(5) {
        bottom: 5%;
        right: 4%;
        animation: 10s leftleft infinite;
    }

    @keyframes shadow-pulse {
        0% {
            box-shadow: 0 0 0 0px rgb(255 255 255);
        }

        100% {
            box-shadow: 0 0 0 35px rgba(0, 0, 0, 0);
        }
    }

    @keyframes top-bottom {

        0%,
        100%,
        20%,
        50%,
        80% {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -webkit-transform: translateY(-8px);
            -ms-transform: translateY(-8px);
            transform: translateY(-8px);
        }

        60% {
            -webkit-transform: translateY(-4px);
            -ms-transform: translateY(-4px);
            transform: translateY(-4px);
        }
    }

    @keyframes toptop {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes leftleft {
        0% {
            transform: translatex(0);
        }

        50% {
            transform: translatex(20px);
        }

        100% {
            transform: translatex(0px);
        }
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    /* 19. count-style */
    .count-style {
        padding: 50px 85px;
        background-color: var(--bgcolor);
        border-radius: 30px;
        text-align: center;
        padding-bottom: 60px;
        z-index: 11;
        position: relative;
    }

    .count-style h2 {
        font-weight: bold;
        font-size: 100px;
    }

    .count-style h2 sup {
        font-size: 58px;
    }

    .count-style h4 {
        font-size: 26px;
        font-weight: bold;
        padding-bottom: 20px;
        padding-top: 4px;
    }

    .count-style.two {
        background-color: #000;
    }

    .count-style.two h2 {
        color: var(--bgcolor);
    }

    .count-style.two p,
    .count-style.two h4 {
        color: #fff;
    }

    .count-style:hover {
        transform: translateY(20px);
    }

    /* 21. widget-title */
    .widget-title h3 {
        font-size: 26px;
        font-weight: bold;
        color: #fff;
        padding-bottom: 30px;
    }

    .widget-title ul {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        row-gap: 22px;
    }

    .widget-title ul li {
        width: 50%;
    }

    .widget-title ul li a {
        color: #fff;
    }

    .widget-title ul li a:hover {
        color: var(--bgcolor);
    }

    .widget-title ul li i {
        color: #b6a0f2;
        padding-right: 12px;
    }

    .get-in-touch i {
        width: 56px;
        height: 56px;
        border: 1px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 20px;
        color: #fff;
        font-size: 24px;
    }

    .get-in-touch.mb-0 span {
        padding-top: 0 !important;
    }

    .get-in-touch {
        display: flex;
        margin-bottom: 20px;
        align-items: center;
    }

    .get-in-touch:hover i {
        background-color: #fff;
        color: #000;
    }

    .get-in-touch span {
        color: #fff;
        padding-bottom: 4px;
        display: block;
        font-size: 18px;
    }

    .get-in-touch h6 a {
        color: #fff;
    }

    .get-in-touch h6 a:hover {
        color: var(--bgcolor);
    }

    /* 23. scroll-percentage */
    #scroll-percentage {
        position: absolute;
        box-shadow: 0px 0px 20px 0px rgba(184, 184, 184, 0.75);
        height: 60px;
        width: 60px;
        background-color: var(--bgcolor);
        border-radius: 50%;
        position: fixed;
        bottom: 30px;
        right: 30px;
        transform: scale(0);
        display: grid;
        place-items: center;
        cursor: pointer;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s;
        z-index: 1011;
    }

    @media (max-width: 1400px) {
        #scroll-percentage {
            width: 50px;
            height: 50px;
        }
    }

    @media (max-width: 992px) {
        #scroll-percentage {
            right: 10px;
        }
    }

    #scroll-percentage.active {
        bottom: 30px;
        transform: scale(1);
        opacity: 1;
        visibility: visible;
        animation: 500ms ease-in-out 0s normal none 1 running scrollToTop;
        transition: 0.3s;
    }

    @media (max-width: 1400px) {
        #scroll-percentage.active {
            bottom: 20px;
        }
    }

    #scroll-percentage-value {
        height: calc(100% - 6px);
        width: calc(100% - 6px);
        background-color: #ffffff;
        color: #000;
        border-radius: 50%;
        display: grid;
        place-items: center;
        font-size: 14px;
        font-weight: 600;
    }

    #scroll-percentage-value i {
        font-size: 20px;
    }

    @keyframes scrollToTop {
        0% {
            transform: translate3d(0, 80%, 0);
            visibility: visible;
        }

        to {
            transform: translateZ(0);
        }
    }

    @keyframes wobble-vertical {
        16.65% {
            transform: translateY(8px);
        }

        33.3% {
            transform: translateY(-6px);
        }

        49.95% {
            transform: translateY(4px);
        }

        66.6% {
            transform: translateY(-2px);
        }

        83.25% {
            transform: translateY(1px);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* 24. hero-section.for */

    .hs-responsive-embed-youtube iframe {
        width: 100%;
        height: 624px;
        margin-top: 70px;
        border-radius: 30px;
        border: 7px solid #000;
    }

    .hero-section.for {
        text-align: center;
        background-position: top;
        background-size: auto;
        padding-bottom: 0;
        margin-bottom: 0;
        padding-top: 236px;
        background-size: 2392px;
        background-color: #fff;
    }

    .hero-section.for .listing {
        justify-content: space-between;
        width: 100%;
        justify-content: center;
    }

    .hero-section.for .hero-text,
    .hero-section.two .hero-text {
        text-align: center;
        justify-content: center;
        width: 87%;
        margin: auto;
        padding-bottom: 30px;
    }

    .hero-section.for ul.shaps-img li:nth-child(4) {
        bottom: 49%;
        left: 27%;
    }

    .hero-section.for ul.shaps-img li:nth-child(5) {
        bottom: 49%;
        right: 4%;
        animation: 10s leftleft infinite;
    }

    /* 25. hero-section.two */
    .hero-section.two .review img {
        margin-left: 0;
    }

    .hero-section.two {
        text-align: center;
        margin: auto;
        padding-top: 230px;
    }

    .hero-section.two .review {
        margin-top: 60px;
        justify-content: center;
    }

    .hero-section.two p {
        text-align: center;
        margin: auto;
    }

    .hero-section.two ul.shaps-img li:nth-child(4) {
        bottom: 16%;
        left: 31%;
    }

    .hero-section.two .listing {
        margin: auto;
    }

    /* 26. hero-section.three */
    .hero-section.three {
        text-align: center;
    }

    .hero-section.three .listing {
        margin: auto;
    }

    .hero-section.three .hero-text {
        width: 90%;
        margin: auto;
        text-align: center;
    }

    @media (min-width: 1040px) {
        .hero-section.three {
            padding-top: 370px;
        }
    }

    .hero-section.three ul.shaps-img li:nth-child(4) {
        bottom: 20%;
        left: 27%;
        animation: 10s rotate infinite;
    }

    /* 27. subscribe-text */
    .subscribe-text #subscribe-form .btn {
        border-color: var(--bgcolor);
        color: #000;
    }

    .subscribe-text {
        display: flex;
        padding: 30px;
        background-color: #fff;
        border-radius: 20px;
        margin-top: 20px;
        text-align: left;
        align-items: center;
        z-index: 1;
        position: relative;
    }

    .subscribe-text #subscribe-form {
        position: relative;
    }

    .subscribe-text #subscribe-form .btn {
        right: 0;
        position: absolute;
        top: 53%;
        transform: translate(-4%, -54%);
        padding: 16px 25px;
    }

    .subscribe-text #subscribe-form input {
        width: 700px;
        height: 73px;
        padding-left: 20px;
        border-radius: 20px;
        border: 0;
        outline: none;
        background-color: #fafafa;
        border: 3px solid #cdcdcd;
    }

    .subscribe-text h3 {
        font-size: 30px;
        font-weight: bold;
    }

    .subscribe-text #subscribe-form .btn::before {
        background-color: var(--bgcolor);
        border-color: var(--bgcolor);
    }

    .subscribe-text>div {
        margin-right: auto;
        margin-left: 30px;
    }

    .hero-section.three {
        background-size: cover;
    }


    /* 28. transition */
    .get-in-touch i,
    ul.social-media a i,
    a.video-pop i,
    .icon-share li i,
    .accordion-contact h4 a,
    .pricing,
    .tag>a,
    .blog a,
    .blog img,
    .count-style,
    .how-do-stap i,
    .team:after,
    .team span,
    .team a,
    .team h4,
    ul.chek li img,
    .widget-title ul li a,
    footer a,
    .presenting i:after {
        transition: .4s all;
    }
</style>

<section class="hero-section three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-text sec-title-animation animation-style2">
                    <span class="title-animation" style="perspective: 400px;">Trusted by 500+ Investors, 100+ Deals Live Now</span>
                    
                    <h1>From Zero to Business Owner for under $25k</h1>
                    
                    <div class="d-flex listing">
                        <p>Join hundreds of first-time investors who’ve turned small budgets into profitable online businesses. Backed by expert support every step of the way.</p>
                    </div>
                </div>

                <div class="review">
                    <a href="/find-my-business" class="button btn" style="margin: 0 auto;"><span>Find My Business</span></a>
                    {{-- <img alt="img" src="/images/google.png"> --}}
                    <ul class="star">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <h6>(5.0) </h6>
                </div>
                
                <div class="subscribe-text">
                    <img src="/images/paper-plan.png" alt="img">
                    <div>
                        <h3>Subscribe Newsletter </h3>
                        <p>Enter your email and get recent news and updates</p>
                    </div>

                    <form role="form" class="get-subscribee" id="subscribe-form" method="post">
                        <input type="email" name="Email_Address" placeholder="Enter your email here" required="">
                        <button type="submit" class="btn button"><span><span>Subscribe Now</span></span></button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
    
    <ul class="shaps-img">
      <li><img src="/images/shaps-4.png" alt="img"></li>
      <li><img src="/images/shaps-4.png" alt="img"></li>
      <li><img src="/images/shaps-1.png" alt="img"></li>
      <li><img src="/images/shaps-2.png" alt="img"></li>
      <li><img src="/images/shaps-3.png" alt="img"></li> 
    </ul>
</section>