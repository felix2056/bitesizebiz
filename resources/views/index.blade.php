@extends('layouts.app')

@section('title', 'Enter the world of small business acquisitions')
@section('description', 'BuyingABiz is a platform for small business acquisitions. Subscribe for a case study on how I acquired Sourcely.ai for $4k and grew it to a valuation of $150k in 4 months. Come explore the world of buying and selling micro startups with me!')
@section('keywords', 'small business, acquisitions, business, investment, startup, entrepreneurship')
@section('author', 'BuyingABiz')
@section('canonical', env('APP_URL'))


@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_index">
            <div class="fn__bp_slider" data-animation="disable">
                <div class="container">
                    @include('partials.hero')
                </div>

                <hr>

                {{-- About --}}
                <section id="about" class="gap">
                    <div class="container">
                        <div class="heading sec-title-animation animation-style2">
                            <span class="title-animation">Micro Private Equity Platform</span>
                            <h2 class="title-animation">Your Gateway to Online Business Ownership</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="presenting two">
                                    <div>
                                        <i class="fa-solid fa-filter-circle-dollar"></i>
                                    </div>
                                    <div>
                                        <h3>Curated Deal Flow</h3>
                                        <p>Access pre-vetted online businesses from $5K to $100K+. Our team conducts thorough due diligence to ensure quality opportunities with proven revenue streams and growth potential.</p>
                                    </div>
                                </div>
                                <div class="presenting">
                                    <div>
                                        <i class="fa-solid fa-headset"></i>
                                    </div>
                                    <div>
                                        <h3>Expert Guidance & Support</h3>
                                        <p>Get hands-on support throughout your acquisition journey. From deal structuring to post-acquisition optimization, our team provides the expertise you need to succeed.</p>
                                    </div>
                                </div>
                                <div class="presenting">
                                    <div>
                                        <i class="fa-solid fa-route"></i>
                                    </div>
                                    <div>
                                        <h3>Proven 3-Step Process</h3>
                                        <p class="mb-0">Find & Buy → Run & Scale → Exit & Profit. Our systematic approach has helped investors achieve 5x valuations, just like our Sourcely.ai success story.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="presenting">
                                    <div>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div>
                                        <h3>Due Diligence Services</h3>
                                        <p>Comprehensive financial analysis, market research, and risk assessment for every business. We identify red flags and opportunities so you can make informed decisions.</p>
                                    </div>
                                </div>
                                <div class="presenting">
                                    <div>
                                        <i class="fa-solid fa-door-open"></i>
                                    </div>
                                    <div>
                                        <h3>Low Barrier to Entry</h3>
                                        <p>Start with as little as $5K. Our micro private equity model makes business ownership accessible to first-time investors and entrepreneurs.</p>
                                    </div>
                                </div>
                                <div class="presenting">
                                    <div>
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h3>Educational Resources</h3>
                                        <p class="mb-0">Access our library of guides, case studies, and expert insights. Join 4,000+ investors learning the art of online business acquisition.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- How it Works --}}
                <section id="services" class="gap how-it-works" style="background-image: url(assets/img/shaps-bg.png);">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="heading two sec-title-animation animation-style2">
                                    <span class="title-animation">Our Investment Process</span>
                                    <h2 class="title-animation">How Our 3-Step System Works</h2>
                                    <p>Join hundreds of first-time investors who've successfully acquired and scaled online businesses using our proven methodology. From $5K to $100K+ deals, we guide you every step of the way.</p>
                                </div>
                                <ul class="chek">
                                    <li><img src="/images/chek.png" alt="img"> Pre-vetted businesses with proven revenue streams</li>
                                    <li><img src="/images/chek.png" alt="img"> Comprehensive due diligence and risk assessment</li>
                                    <li><img src="/images/chek.png" alt="img"> Expert guidance throughout the acquisition process</li>
                                    <li><img src="/images/chek.png" alt="img"> Post-acquisition support and scaling strategies</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="how-do-stap">
                                            <span>1</span>
                                            <i class="flaticon-mail"></i>
                                            <h4>Browse & Select</h4>
                                            <p>Explore our curated list of online businesses. Each listing includes detailed financials, traffic data, and growth potential analysis.</p>
                                        </div>
                                        <div class="how-do-stap two">
                                            <span>2</span>
                                            <i class="flaticon-team-building"></i>
                                            <h4>Acquire & Scale</h4>
                                            <p>Complete the acquisition with our support, then implement proven scaling strategies to grow revenue and valuation.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="how-do-stap three">
                                            <span>3</span>
                                            <i class="flaticon-security"></i>
                                            <h4>Exit & Profit</h4>
                                            <p>After 12-18 months of optimization, sell at 3-5x your original investment and reinvest in your next opportunity.</p>
                                        </div>
                                        <div class="video">
                                            <img src="/images/stap-img.jpg" alt="img">
                                            <a class="video-pop" data-fancybox="" href="https://www.youtube.com/watch?v=1La4QzGeaaQ"><i class="fa-solid fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Team --}}
                <section id="team" class="gap team-section">
                    <div class="container">
                        <div class="heading sec-title-animation animation-style2">
                            <span class="title-animation">Micro Private Equity Experts</span>
                            <h2 class="title-animation">Meet our awesome people</h2>
                            <p>Our experienced team has helped hundreds of investors acquire and scale online businesses. From deal sourcing to post-acquisition optimization, we provide the expertise you need to succeed.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="team">
                                    <div class="expert-icon">
                                        <a href="JavaScript:void(0)">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </a>
                                        <ul class="icon-share">
                                            <li><a href="JavaScript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="JavaScript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <figure>
                                        <img src="/images/devshah.jpg" alt="img">
                                    </figure>
                                    <span>Founder & CEO</span>
                                    <h4>Dev Shah</h4>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mobile-screen"></i><b> Deal Sourcing & Strategy</b></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="team">
                                    <div class="expert-icon">
                                        <a href="JavaScript:void(0)">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </a>
                                        <ul class="icon-share">
                                            <li><a href="JavaScript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="JavaScript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <figure>
                                        <img src="/images/aniket.jpg" alt="img">
                                    </figure>
                                    <span>COO & Chief Analyst</span>
                                    <h4>Aniket Gupta</h4>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mobile-screen"></i><b> Due Diligence & Operations</b></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="team mb-0">
                                    <div class="expert-icon">
                                        <a href="JavaScript:void(0)">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </a>
                                        <ul class="icon-share">
                                            <li><a href="JavaScript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="JavaScript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <figure>
                                        <img src="/images/adarsh.jpg" alt="img">
                                    </figure>
                                    <span>Analyst & Sales Lead</span>
                                    <h4>Adarsh Ranjan</h4>
                                    <a href="javascript:void(0)"><i class="fa-solid fa-mobile-screen"></i><b> Deal Flow & Client Relations</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="center review">
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
                    <ul class="shaps-img">
                        <li><img src="/images/shaps-3.png" alt="img"></li>
                        <li><img src="/images/shaps-5.png" alt="img"></li>
                    </ul>
                </section>

                {{-- Accordion --}}
                <section class="gap accordion-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="heading two sec-title-animation animation-style2">
                                    <span class="title-animation">frequently asked questions</span>
                                    <h2 class="title-animation">Got questions? We've got answers.</h2>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">What is micro private equity and how does it work?</div>
                                        </a>

                                        <div class="content">
                                            <p>Micro private equity focuses on smaller investment amounts ($5K-$100K+) to acquire online businesses. Unlike traditional PE firms that require millions, we make business ownership accessible to individual investors. Our 3-step process: Find & Buy → Run & Scale → Exit & Profit, typically targets 3-5x returns over 12-18 months.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item active">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">How much money do I need to get started?</div>
                                        </a>

                                        <div class="content" style="display: block;">
                                            <p>You can start with as little as $5,000! Our platform offers deals ranging from $5K to $100K+, making it accessible for first-time investors. We also offer financing options and can help structure deals with seller financing or earn-outs to reduce your upfront capital requirements.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">What types of online businesses do you offer?</div>
                                        </a>

                                        <div class="content">
                                            <p>We focus exclusively on online businesses including SaaS companies, e-commerce stores, content sites, affiliate marketing blogs, mobile apps, and digital products. Each business is pre-vetted with proven revenue streams, traffic data, and growth potential. We don't deal with brick-and-mortar businesses.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">How do you ensure the quality of businesses?</div>
                                        </a>
                                        <div class="content">
                                            <p>Every business undergoes comprehensive due diligence including financial analysis, traffic verification, customer retention analysis, and market position assessment. Our team reviews 100+ businesses monthly and only lists those that meet our strict criteria for revenue stability, growth potential, and operational efficiency.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">What support do you provide after acquisition?</div>
                                        </a>

                                        <div class="content">
                                            <p>We provide hands-on support throughout your ownership journey including operational guidance, scaling strategies, marketing optimization, and exit planning. You'll have access to our expert team, educational resources, and community of successful investors. We're committed to your success from acquisition to exit.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="heading">
                                            <div class="icon"></div>
                                            <div class="title">How long does the typical investment cycle take?</div>
                                        </a>

                                        <div class="content">
                                            <p>Our typical investment cycle is 12-18 months. During this time, we focus on optimizing operations, scaling revenue, and preparing for exit. Some investors choose to hold longer for additional growth, while others follow our systematic approach to achieve 3-5x returns within the target timeframe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="accordion-contact">
                                    <h4>Ready to start investing?</h4>
                                    <h4>Email: <a href="mailto:dev@buyingabiz.com">dev@buyingabiz.com</a></h4>
                                    <h4>Newsletter: <a href="#subscribe">Join 4,000+ investors</a></h4>
                                    <a href="https://pocket-deals.com" target="_blank" class="button btn"><span><span>Browse Deals</span></span></a>
                                </div>
                                <div class="accordion-img">
                                    <img src="/images/accordion.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="shaps-img">
                        <li><img src="/images/shaps-3.png" alt="img"></li>
                    </ul>
                </section>

                {{-- Clients --}}
                <section class="gap clients-section">
                    <div class="container">
                        <div class="heading sec-title-animation animation-style2">
                            <span class="title-animation">Investor Success Stories</span>
                            <h2 class="title-animation">What Our Investors Say</h2>
                        </div>
                    </div>
                    <div class="marquee-two">
                        <div class="marquee-box-one">
                            <div class="marquee-content-one">
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-1.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Sarah Chen</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Started with a $12K investment in a SaaS tool. With the team's guidance, I scaled it to $85K in 14 months and sold for 4.2x my original investment. The due diligence process was thorough and the post-acquisition support was invaluable."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-2.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Marcus Rodriguez</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"As a first-time investor, I was nervous about buying an online business. The team walked me through every step - from the $8K acquisition to the $45K exit. Their expertise made all the difference in my success."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-3.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Jennifer Park</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Invested $15K in an e-commerce store and exited at $72K after 16 months. The quality of businesses they curate is exceptional, and the ongoing support helped me optimize operations and maximize returns."</p>
                                </div>
                            </div>
                            <div class="marquee-content-one">
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-4.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>David Thompson</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"The micro private equity approach is brilliant. I've completed 3 deals ranging from $6K to $25K, each with 3-5x returns. Their deal flow is consistent and the quality is always top-notch."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-5.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Amanda Foster</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Started with $10K and now have a portfolio of 4 online businesses. The educational content and community support helped me understand the process. Currently averaging 4.1x returns across all investments."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-2.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Robert Kim</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"The due diligence process is incredibly thorough. My $18K investment in a content site was well-vetted, and the team identified key growth opportunities I wouldn't have seen. Exited at $78K in 13 months."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="marquee-three">
                        <div class="marquee-box-one">
                            <div class="marquee-content-two">
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-4.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Michael Chang</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Perfect for building a diversified portfolio. I've invested in SaaS, e-commerce, and content sites. Each deal was professionally managed with clear exit strategies. Highly recommend for serious investors."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-5.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Lisa Anderson</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"The low barrier to entry was perfect for me. Started with $7K and grew to a $35K exit. The team's expertise in scaling online businesses is unmatched. Now on my third acquisition!"</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-2.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>James Wilson</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Transparent process from start to finish. My $22K investment in a mobile app generated $95K at exit. The post-acquisition support and optimization strategies were game-changing."</p>
                                </div>
                            </div>
                            <div class="marquee-content-two">
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-1.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Rachel Green</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"As a busy professional, I needed a hands-off approach. The team managed everything from acquisition to exit. My $14K investment became $58K in 15 months. Exceptional service!"</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-2.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Thomas Brown</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"The educational content helped me understand the process before investing. My first $9K deal returned $38K. Now I'm building a portfolio of online businesses. Great community and support."</p>
                                </div>
                                <div class="clients">
                                    <div class="clients-img">
                                        <img src="/images/clients-3.jpg" alt="img">
                                        <div>
                                            <div class="d-flex">
                                                <h3>Emily Davis</h3>
                                                <a href="JavaScript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>"Started with $5K and now have multiple successful exits. The quality of businesses and level of support is outstanding. This is the future of small-scale investing."</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <ul class="shaps-img">
                        <li><img src="/images/shaps-1.png" alt="img"></li>
                        <li><img src="/images/shaps-2.png" alt="img"></li>
                    </ul>
                </section>

                {{-- Blog --}}
                <section class="gap" id="blog">
                    <div class="container">
                        <div class="heading sec-title-animation animation-style2">
                            <span class="title-animation">Latest Insights</span>
                            <h2 class="title-animation">Expert Guidance for Online Business Investors</h2>
                        </div>
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-lg-4 col-md-6 {{ $loop->last ? 'mb-0' : '' }}">
                                <div class="blog">
                                    <div class="blog-img">
                                        <figure>
                                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                                        </figure>
                                        <div class="tag">
                                            <span>{{ $post->category->name ?? 'Investment' }}</span>
                                            <a href="{{ $post->link }}">{{ \Carbon\Carbon::parse($post->created_at)->format('M j, Y') }} <span><i class="flaticon-message"></i>{{ number_format($post->views / 1000, 1) }}k</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ $post->link }}">{{ $post->title }}</a>
                                    <p>{{ \Illuminate\Support\Str::limit($post->description, 150) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="/blog" class="button btn"><span><span>View All Articles</span></span></a>
                        </div>
                    </div>
                    <ul class="shaps-img">
                        <li><img src="/images/shaps-3.png" alt="img"></li>
                    </ul>
                </section>

                {{-- Client --}}
                <section class="gap no-top section-client ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="count-style">
                                    <h2 data-max="50">50<sup>+</sup></h2>
                                    <h4>Successful Deals Completed</h4>
                                    <p>Join hundreds of investors who've successfully acquired and scaled online businesses through our micro private equity platform</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="count-style two">
                                    <h2 data-max="4.2">4.2<sup>x</sup></h2>
                                    <h4>Average Return on Investment</h4>
                                    <p>Our investors consistently achieve 3-5x returns on their initial investments within 12-18 months</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="shaps-img">
                        <li><img src="/images/shaps-1.png" alt="img"></li>
                        <li><img src="/images/shaps-6.png" alt="img"></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection

