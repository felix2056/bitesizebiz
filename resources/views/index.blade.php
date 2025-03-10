@extends('layouts.app')

@section('title', 'Enter the world of small business acquisitions')
@section('description', 'BiteSizeBiz is a platform for small business acquisitions. Subscribe for a case study on how I acquired Sourcely.ai for $4k and grew it to a valuation of $150k in 4 months. Come explore the world of buying and selling micro startups with me!')
@section('keywords', 'small business, acquisitions, business, investment, startup, entrepreneurship')
@section('author', 'BiteSizeBiz')
@section('canonical', env('APP_URL'))


@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_index">
            <div class="fn__bp_slider" data-animation="disable">
                <div class="container">
                    <div class="bp_slider_in">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="slider-blog-posts-container">
                                @foreach ($posts as $post)
                                    @include('partials.slider-post', ['post' => $post])
                                @endforeach
                            </div>
                        </div>

                        <div class="slider__nav">
                            <a href="#" class="slider_nav prev">
                                <img class="fn__svg " src="/images/svg/arrowo.svg" alt="svg">
                            </a>
                            <a href="#" class="slider_nav next">
                                <img class="fn__svg " src="/images/svg/arrowo.svg" alt="svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WITH SIDEBAR -->
            <div class="xoxo_fn_hassidebar">
                <div class="container">
                    <div class="sidebarpage">
                        <div class="xoxo_fn_leftsidebar">
                            <div class="ls_content">
                                <div class="xoxo_fn_bloglist blog_layout_masonry">
                                    <ul id="blog-posts-container">
                                        @foreach ($posts as $post)
                                            @if ($post->type === "link")
                                                @include('partials.link-post', ['post' => $post])
                                            @elseif ($post->type === "video")
                                                @include('partials.video-post', ['post' => $post])
                                            @else
                                                @include('partials.post', ['post' => $post])
                                            @endif

                                            {{-- Insert trending posts after the 5th post --}}
                                            @if ($loop->index == 4)
                                                @include('partials.trending-posts')
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>

                                <!-- Pagination will populate this area -->
                                <div class="xoxo_fn_pagination" id="blog-pagination">
                                    <div class="container">
                                        <div class="pag_in">
                                            <div class="pag_inner">
                                                <span class="left_wing"></span>
                                                <span class="right_wing"></span>
                                                <ul>
                                                    <li class="active">
                                                        <span class="current">1</span>
                                                    </li>
                                                    <li>
                                                        <a href="page/2/index.html" class="inactive">2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('includes.sidebar')
                    </div>
                </div>
            </div>
        </div>
        <!-- /WITH SIDEBAR -->
    </div>
</div>
@endsection
