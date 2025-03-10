<div class="xoxo_fn_rightsidebar">
    <div class="sidebar_in">
        <div class="xoxo_fn_sidebar">
            <div id="xoxo_author-1" class="widget_block clear widget_xoxo_author">
                <div>
                    <div class="wid-title"><span class="text">About Me</span>
                        <span class="icon"></span>
                    </div>
                    <div class="xoxo_fn_widget_author">
                        <div class="info_img" data-bg-img="/images/devshah.jpg">
                            <a class="full_link" href="/author/frenify/index.html"></a>
                            <div class="abs_img"></div>
                        </div>
                        <div class="info_desc">
                            <div class="author_top">
                                <h3 class="fn_title">
                                    <a href="../author/frenify/index.html">Dev Shah</a>
                                </h3>
                                <p class="fn_desc">I acquired Sourcely.ai for $4k and grew it to a $150k valuation in 6 months. Join 4,000+ readers getting insights from the startup trenches + deal flow every week.</p>
                            </div>

                            <div class="author_bottom">
                                <ul class="author_social">
                                    <li>
                                        <a title="Facebook" href="https://www.facebook.com/profile.php?id=100016824821262">
                                            <img class="fn__svg icon_facebook" src="/images/svg/social/facebook.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Twitter" href="https://x.com/devlikesbizness">
                                            <img class="fn__svg icon_twitter" src="/images/svg/social/twitter.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Youtube" href="https://www.youtube.com/@devlikesbizness">
                                            <img class="fn__svg icon_youtube" src="/images/svg/social/youtube.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Linkedin" href="https://www.linkedin.com/in/devlikesbizness/">
                                            <img class="fn__svg icon_linkedin" src="/images/svg/social/linkedin.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="https://www.instagram.com/devlikesbizness/">
                                            <img class="fn__svg icon_instagram" src="/images/svg/social/instagram.svg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="xoxo_top_articles-1" class="widget_block clear widget_xoxo_top_articles">
                <div>
                    <div class="wid-title">
                        <span class="text">Popular Posts</span>
                        <span class="icon"></span>
                    </div>

                    @php
                    $trendingPosts = \App\Models\Post::where('is_published', true)->orderBy('views', 'desc')->limit(5)->get();
                    @endphp

                    <div class="xoxo_fn_widget_beta_articles">
                        <div id="top-trending-post-container">
                            @php
                            $topTrendingPost = $trendingPosts->first();
                            @endphp

                            @if ($topTrendingPost)
                            <div class="top_article">
                                <div class="item_img">
                                    <a class="full_link" href="{{ $topTrendingPost->link }}"></a>
                                    <img src="{{ $topTrendingPost->image_url }}">
                                </div>

                                <h3 class="fn_title">
                                    <a href="{{ $topTrendingPost->link }}">{{ $topTrendingPost->title }}</a>
                                </h3>

                                <div class="t_rail">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div id="bottom-trending-post-container">
                            @php
                            $bottomTrendingPosts = $trendingPosts->slice(1, 3);
                            @endphp

                            @if ($bottomTrendingPosts->count() > 0)
                            @foreach ($bottomTrendingPosts as $post)
                            <div class="bottom_article">
                                <a class="full_link" href="{{ $post->link }}"></a>
                                <div class="item_img" data-bg-img="{{ $post->image_url }}"></div>
                                <h3 class="fn_title">
                                    <a href="{{ $post->link }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="media_image-1" class="widget_block clear widget_media_image"><div>
                <a href="https://frenify.com/">
                    <img width="300" height="300" src="/wp-content/uploads/2023/01/ads.png" class="image wp-image-66  attachment-full size-full" alt style="max-width: 100%; height: auto;" decoding="async" loading="lazy" srcset="../wp-content/uploads/2023/01/ads.png 300w, ../wp-content/uploads/2023/01/ads-150x150.png 150w, ../wp-content/uploads/2023/01/ads-100x100.png 100w" sizes="auto, (max-width: 300px) 100vw, 300px">
                </a>
            </div> -->
        </div>

        <div id="xoxo_followers-1" class="widget_block clear widget_xoxo_followers">
            <div>
                <div class="wid-title">
                    <span class="text">Follow Me</span>
                    <span class="icon"></span>
                </div>

                <div class="xoxo_fn_widget_followers">
                    <ul>
                        <li>
                            <div class="item">
                                <a href="https://www.facebook.com/profile.php?id=100016824821262"></a>
                                <span class="icon">
                                    <i class="fn-icon-facebook"></i>
                                </span>
                                <span class="count">1,368</span>
                                <span class="subtitle">Facebook</span>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="https://x.com/devlikesbizness"></a>
                                <span class="icon">
                                    <i class="fn-icon-twitter"></i>
                                </span>
                                <span class="count">4,228</span>
                                <span class="subtitle">X</span>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="https://www.youtube.com/channel/UCW_EPM8iqmn27qeT65qLMug"></a>
                                <span class="icon">
                                    <i class="fn-icon-youtube"></i>
                                </span>
                                <span class="count">220</span>
                                <span class="subtitle">Youtube</span>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="https://www.instagram.com/devlikesbizness/"></a>
                                <span class="icon">
                                    <i class="fn-icon-instagram"></i>
                                </span>
                                <span class="count">5,200</span>
                                <span class="subtitle">Instagram</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="xoxo_custom_categories-1" class="widget_block clear widget_xoxo_custom_categories">
            <div>
                <div class="wid-title">
                    <span class="text">Categories</span>
                    <span class="icon"></span>
                </div>

                <div class="xoxo_fn_ccategories">
                    @php
                    $categories = \App\Models\Category::withCount('posts')->get();
                    @endphp

                    <ul id="categories-list">
                        @foreach ($categories as $category)
                        <li>
                            <div class="category__item">
                                <a class="full_link" href="{{ $category->link }}"></a>
                                <span class="cat_title">
                                    <span class="name">{{ $category->name }}</span>
                                    <span class="count">{{ $category->posts_count }}</span>
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div id="tag_cloud-1" class="widget_block clear widget_tag_cloud">
            <div>
                <div class="wid-title">
                    <span class="text">Tag Cloud</span>
                    <span class="icon"></span>
                </div>

                <div class="tagcloud">
                    <a href="/tags/online-businesses" class="tag-cloud-link tag-link-23 tag-link-position-1" style="font-size: 14px;">Online Businesses</a>
                    <a href="/tags/saas" class="tag-cloud-link tag-link-38 tag-link-position-2" style="font-size: 14px;">SaaS</a>
                    <a href="/tags/content" class="tag-cloud-link tag-link-31 tag-link-position-3" style="font-size: 14px;">Content</a>
                    <a href="/tags/marketplace" class="tag-cloud-link tag-link-36 tag-link-position-4" style="font-size: 14px;">Marketplace</a>
                    <a href="/tags/e-commerce" class="tag-cloud-link tag-link-26 tag-link-position-5" style="font-size: 14px;">E-commerce</a>
                    <a href="/tags/amazon-fba" class="tag-cloud-link tag-link-29 tag-link-position-6" style="font-size: 14px;">Amazon FBA</a>
                    <a href="/tags/shopify" class="tag-cloud-link tag-link-25 tag-link-position-7" style="font-size: 14px;">Shopify</a>
                    <a href="/tags/youtube" class="tag-cloud-link tag-link-24 tag-link-position-8" style="font-size: 14px;">Youtube</a>
                    <a href="/tags/lifestyle" class="tag-cloud-link tag-link-33 tag-link-position-9" style="font-size: 14px;">Service</a>
                    <a href="/tags/digital-products" class="tag-cloud-link tag-link-32 tag-link-position-10" style="font-size: 14px;">Digital Products</a>
                    <a href="/tags/dropshipping" class="tag-cloud-link tag-link-27 tag-link-position-11" style="font-size: 14px;">Dropshipping</a>
                    <a href="/tags/apps" class="tag-cloud-link tag-link-22 tag-link-position-12" style="font-size: 14px;">Apps</a>
                    <a href="/tags/websites" class="tag-cloud-link tag-link-37 tag-link-position-13" style="font-size: 14px;">Websites</a>
                    <a href="/tags/crypto" class="tag-cloud-link tag-link-35 tag-link-position-14" style="font-size: 14px;">Crypto</a>
                    <a href="/tags/blogging" class="tag-cloud-link tag-link-34 tag-link-position-15" style="font-size: 14px;">Blog</a>
                    <a href="/tags/adsense" class="tag-cloud-link tag-link-28 tag-link-position-16" style="font-size: 14px;">Adsense</a>
                    <a href="/tags/under-25k" class="tag-cloud-link tag-link-30 tag-link-position-17" style="font-size: 14px;">Under $25K</a>
                    <a href="/tags/under-10k" class="tag-cloud-link tag-link-30 tag-link-position-18" style="font-size: 14px;">Under $10K</a>
                    <a href="/tags/under-5k" class="tag-cloud-link tag-link-30 tag-link-position-19" style="font-size: 14px;">Under $5K</a>
                </div>
            </div>
        </div>
    </div>
</div>
