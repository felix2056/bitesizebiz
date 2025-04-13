@extends('layouts.app')

@section('title', $post->title)
@section('description', $post->description)
@section('keywords', implode(', ', $post->tags))
@section('author', 'BuyingABiz')
@section('canonical', env('APP_URL') . $post->link)
@section('og_image', $post->image_url)

@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_singlepost">
            <div class="container">
                <div class="xoxo_fn_singleajax">
                    <div class="xoxo_fn_blog_single" data-post-id="{{ $post->id }}" data-get-post-id="{{ $post->id }}" data-post-title="{{ $post->title }}" data-post-url="{{ env('APP_URL') }}/blog/{{ $post->slug }}">
                        <div class="xoxo_fn_single">
                            <div class="xoxo_fn_hassidebar">
                                <div class="sidebarpage">
                                    <div class="xoxo_fn_leftsidebar">
                                        <div class="single_with_share">
                                            <div class="xoxo_fn_share view_enable">
                                                <div class="share_wrapper">
                                                    <span class="post_views" title="{{ $post->views }}">
                                                        <span class="icon">
                                                            <img class="fn__svg" src="/images/svg/view.svg" alt="svg" />
                                                        </span>
                                                        {{ number_format($post->views / 1000, 1) }}k
                                                    </span>

                                                    <ul>
                                                        <li>
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ env('APP_URL') }}/blog/{{ $post->slug }}&amp;picture={{ $post->image_url }}" target="_blank" title="Facebook">
                                                                <img class="fn__svg" src="/images/svg/social/facebook.svg" alt="svg" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/intent/tweet?url={{ env('APP_URL') }}/blog/{{ $post->slug }}&amp;card=summary_large_image&amp;image={{ $post->image_url }}" target="_blank" title="Twitter">
                                                                <img class="fn__svg" src="/images/svg/social/twitter.svg" alt="svg" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.pinterest.com/pin/create/button/url={{ env('APP_URL') }}/blog/{{ $post->slug }}&amp;media={{ $post->image_url }}" target="_blank" title="Pinterest">
                                                                <img class="fn__svg" src="/images/svg/social/pinterest.svg" alt="svg" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://m.vk.com/share_url={{ env('APP_URL') }}/blog/{{ $post->slug }}" target="_blank" title="VKontakte">
                                                                <img class="fn__svg" src="/images/svg/social/vk.svg" alt="svg" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title="Copy Link" class="frenify__copy_link" href="{{ env('APP_URL') }}/blog/{{ $post->slug }}">
                                                                <img class="fn__svg" src="/images/svg/link.svg" alt="svg" />
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="label"><span>Share:</span></h5>
                                                </div>
                                            </div>

                                            <div class="single__content">
                                                <div class="post_top_format">
                                                    @if($post->type === 'video')
                                                    <div class="fn__video_format">
                                                        <iframe
                                                          width="100%"
                                                          height="720"
                                                          src="{{ "https://www.youtube.com/embed/" . explode('v=', $post->video_url)[1] }}"
                                                          title="YouTube video player"
                                                          frameborder="0"
                                                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                          allowfullscreen
                                                        ></iframe>
                                                    </div>
                                                    @elseif (count($post->image_urls) > 0)
                                                    <div class="fn__gallery_format" data-l-height="700" data-m-height="300">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">
                                                                @foreach ($post->image_urls as $imageUrl)
                                                                <div class="swiper-slide">
                                                                    <div class="item" data-bg-img="{{ $imageUrl }}"></div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="slider__nav">
                                                            <a href="#" class="slider_nav prev">
                                                                <img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg" />
                                                            </a>
                                                            <a href="#" class="slider_nav next">
                                                                <img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg" />
                                                            </a>
                                                        </div>
                                                    </div>

                                                    @elseif ($post->image_url)
                                                    <div class="fn__image_format">
                                                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" />
                                                    </div>
                                                    @endif
                                                </div>

                                                <div class="post_title_holder" data-has-format="1">
                                                    <h1 class="fn__maintitle">
                                                        <span>{{ $post->title }}</span>
                                                    </h1>

                                                    <div class="fn__meta">
                                                        <p>
                                                            <span class="meta_item meta_date">
                                                                <img class="fn__svg" src="/images/svg/calendar.svg" alt="svg" />
                                                                {{ $post->created_at->format('M d, Y') }}
                                                            </span>
                                                            <span class="meta_item meta_category">
                                                                <a class="fn_last_category" href="{{ $post->category->link }}">{{ $post->category->name }}</a>
                                                            </span>
                                                            <span class="meta_item meta_author">
                                                                <a href="{{ $post->author_link }}">{{ $post->author }}</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="post_content">
                                                    <div class="post_c_in">
                                                        {!! $post->rendered_content !!}
                                                    </div>

                                                    <div class="xoxo_fn_reactions">
                                                        <div class="reactions_list">
                                                            <a class="xoxo_fn_reaction_btn" data-action="in_love" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/in_love.png" alt="" /></span><span class="count">71</span><span class="text">In Love</span></a><a class="xoxo_fn_reaction_btn" data-action="happy" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/happy.png" alt="" /></span><span class="count">62</span><span class="text">Happy</span></a><a class="xoxo_fn_reaction_btn" data-action="not_sure" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/not_sure.png" alt="" /></span><span class="count">37</span><span class="text">Not Sure</span></a><a class="xoxo_fn_reaction_btn" data-action="omg" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/omg.png" alt="" /></span><span class="count">28</span><span class="text">OMG</span></a><a class="xoxo_fn_reaction_btn" data-action="angry" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/angry.png" alt="" /></span><span class="count">20</span><span class="text">Angry</span></a><a class="xoxo_fn_reaction_btn" data-action="sad" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/sad.png" alt="" /></span><span class="count">34</span><span class="text">Sad</span></a><a class="xoxo_fn_reaction_btn" data-action="lol" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/lol.png" alt="" /></span><span class="count">39</span><span class="text">LOL</span></a><a class="xoxo_fn_reaction_btn" data-action="cry" href="#" data-id="79"><span class="icon"><img src="/images/svg/reactions/cry.png" alt="" /></span><span class="count">26</span><span class="text">Cry</span></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="xoxo_fn_tags">
                                                    <ul>
                                                        @foreach ($post->tags as $tag)
                                                        <li class="tag_item">
                                                            <a href="{{ '/tags/' . $tag }}">{{ $tag }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="xoxo_fn_author_info">
                                                    <span class="left_line"></span>
                                                    <span class="right_line"></span>
                                                    
                                                    <div class="ai_in">
                                                        <div class="info_img">
                                                            <div class="info_in"></div>
                                                            <div class="abs_img" data-fn-bg-img="{{ $post->author_image_url }}"></div>
                                                        </div>

                                                        <div class="info_desc">
                                                            <div class="author_top">
                                                                <h3 class="fn_title">
                                                                    <a href="{{ $post->author_link }}">{{ $post->author }}</a>
                                                                </h3>
                                                                <p class="fn_desc">
                                                                    {{ $post->author_description }}
                                                                </p>
                                                            </div>

                                                            @if ($post->author_social_links)
                                                            <div class="author_bottom">
                                                                <ul class="author_social">
                                                                    @foreach ($post->author_social_links as $socialLink)
                                                                    <li>
                                                                        <a title="{{ $socialLink['name'] }}" href="{{ $socialLink['url'] }}" target="_blank">
                                                                            <img class="fn__svg icon_{{ $socialLink['name'] }}" src="/images/svg/social/{{ strtolower($socialLink['name']) }}.svg" />
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="xoxo_fn_pnb" data-status="yes">
                                            @if ($previousPost)
                                            <div class="prev item" title="{{ $previousPost->title }}" data-img="yes">
                                                <a class="full_link" href="{{ $previousPost->link }}"></a>
                                                <p class="fn_desc">
                                                    <span><img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg" />Prev Post</span>
                                                </p>
                                                <div class="item_in">
                                                    <div class="img" data-bg-img="{{ $previousPost->image_url }}"></div>
                                                    <div class="desc">
                                                        <div class="fn__meta">
                                                            <p>
                                                                <span class="meta_item meta_date"><img class="fn__svg" src="/images/svg/calendar.svg" alt="svg" />Jan 5</span><span class="meta_item meta_category"><a class="fn_last_category" href="../category/health/index.html">Health</a></span>
                                                            </p>
                                                        </div>
                                                        <h3 class="fn_title">
                                                            <a href="{{ $previousPost->link }}">{{ $previousPost->title }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($nextPost)
                                            <div class="next item" title="{{ $nextPost->title }}" data-img="yes">
                                                <a class="full_link" href="{{ $nextPost->link }}"></a>
                                                <p class="fn_desc">
                                                    <span>Next Post<img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg" /></span>
                                                </p>
                                                <div class="item_in">
                                                    <div class="img" data-bg-img="{{ $nextPost->image_url }}"></div>
                                                    <div class="desc">
                                                        <div class="fn__meta">
                                                            <p>
                                                                <span class="meta_item meta_date"><img class="fn__svg" src="/images/svg/calendar.svg" alt="svg" />Jan 5</span><span class="meta_item meta_category"><a class="fn_last_category" href="../category/interior/index.html">Interior</a></span>
                                                            </p>
                                                        </div>
                                                        <h3 class="fn_title">
                                                            <a href="{{ $nextPost->link }}">{{ $nextPost->title }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="xoxo_fn_comments comment_type_closed">
                                            <div class="comment_opener">
                                                <a href="#" class="full_link"></a><span class="icon"><img class="fn__svg" src="/images/svg/bubble-chat.svg" alt="svg" /></span>
                                                <div class="title_holder">
                                                    <h3><span>What do you think?</span></h3>
                                                    <p>Show comments / Leave a comment</p>
                                                </div>
                                            </div>
                                            <div class="fn__comments" id="comments">
                                                <!-- You can start editing here. -->

                                                <!-- If comments are open, but there are no comments. -->

                                                <div class="respond_comment">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title">
                                                            <span class="comment-title">Leave a reply</span>
                                                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display: none">Cancel reply</a></small>
                                                        </h3>
                                                        <form action="https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                            <div class="input-holder">
                                                                <textarea placeholder="Comment" id="comment" name="comment" aria-required="true" rows="10" tabindex="3"></textarea>
                                                            </div>
                                                            <div class="input-half input-holder input-author">
                                                                <input class="com-text" id="author" name="author" placeholder="Name" type="text" value="" size="30" tabindex="1" />
                                                            </div>
                                                            <div class="input-half input-holder input-email">
                                                                <input class="com-text" id="emailme" placeholder="Email" name="email" type="text" value="" size="30" tabindex="2" />
                                                            </div>
                                                            <p class="comment-form-cookies-consent">
                                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                                                <label for="wp-comment-cookies-consent">Save my name, email, and website in
                                                                    this browser for the next time I
                                                                    comment.</label>
                                                            </p>
                                                            <div class="input-holder">
                                                                <span class="xoxo_submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
                                                                    <input type="hidden" name="comment_post_ID" value="79" id="comment_post_ID" />
                                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @include('includes.sidebar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fn__preloader">
                    <span class="icon"></span>
                    <span class="text">Loading</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
