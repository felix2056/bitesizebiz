@extends('layouts.app')

@section('title', 'Search Results for ' . $text)
@section('description', 'Search Results for ' . $text)
@section('keywords', 'Search Results for ' . $text)
@section('author', 'BuyingABiz')
@section('canonical', env('APP_URL'))

@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_searchlist">
            <!-- If it comes from Ajax -->
            <!-- PAGE TITLE -->
            <div class="xoxo_fn_pagetitle">
                <div class="container">
                    <div class="pagetitle">
                        <h3 class="fn__title">Search results for &quot;{{ $text }}&quot;</h3>
                        <div class="xoxo_fn_breadcrumbs">
                            <ul id="breadcrumbs" class="breadcrumbs">
                                <li class="item-home">
                                    <a class="bread-link bread-home" href="{{ env('APP_URL') }}" title="Home">Home</a>
                                </li>
                                <li class="separator separator-home">
                                    <span></span>
                                </li>
                                <li class="item-current item-current-a">
                                    <span class="bread-current bread-current-a" title="Search results for: {{ $text }}">Search</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /PAGE TITLE -->
            <div class="xoxo_fn_searchpagelist">
                <div class="container">
                    <div class="xoxo_fn_bloglist blog_layout_classic">
                        <ul>
                            @foreach ($results as $result)
                            @if ($result['type'] === 'page')
                            <li class="page-{{ $result['id'] }} page type-page status-publish hentry post_item" id="page-{{ $result['id'] }}">
                                <div class="blog__item blog__item_" data-short-preview="">
                                    <div class="fn__meta">
                                        <p>
                                            <span class="meta_item meta_date">
                                                <img class="fn__svg " src="/images/svg/calendar.svg" alt="svg" />{{ date('M d', strtotime($result['created_at'])) }}
                                            </span>
                                        </p>
                                    </div>

                                    @if ($result['image_url'])
                                    <div class="blog__image">
                                        <a href="{{ $result['url'] }}">
                                            <img src="{{ $result['image_url'] }}" alt="{{ $result['title'] }}">
                                        </a>
                                    </div>
                                    @endif

                                    <div class="bottom_holder">
                                        <div class="title_holder">
                                            <div class="title">
                                                <h3>
                                                    <a href="{{ $result['url'] }}">{{ $result['title'] }}</a>
                                                </h3>
                                            </div>

                                            <div class="author">
                                                <a href="{{ $result['author_link'] }}">{{ $result['author'] }}</a>
                                            </div>

                                            @if ($result['excerpt'])
                                            <div class="desc">
                                                <p>{{ $result['excerpt'] }}</p>
                                            </div>
                                            @endif

                                            <div class="read_more view_enable">
                                                <div class="read_in">
                                                    <div class="read_wrap">
                                                        <a href="{{ $result['url'] }}">
                                                            <span class="text">View Page</span>
                                                            <span class="triple"></span>
                                                        </a>
                                                        <span class="post_views" title="{{ $result['views'] }}">
                                                            <span class="icon">
                                                                <img class="fn__svg " src="/images/svg/view.svg" alt="svg" />
                                                            </span>
                                                            {{ number_format($result['views'] / 1000, 1) }}k
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @elseif ($result['type'] === 'post')
                            <li class="post-{{ $result['id'] }} post type-post status-publish format-standard has-post-thumbnail hentry category-travel tag-blog tag-image tag-travel tag-writing post_item" id="post-{{ $result['id'] }}">
                                <div class="blog__item blog__item_" data-short-preview="">
                                    @if($result['is_popular'])
                                    <span class="post_icon">
                                        <img class="fn__svg" src="/images/svg/popular.svg" alt="svg">
                                    </span>
                                    @endif
                                    
                                    <div class="fn__meta">
                                        <p>
                                            <span class="meta_item meta_date">
                                                <img class="fn__svg " src="/images/svg/calendar.svg" alt="svg" />{{ date('M d', strtotime($result['created_at'])) }}
                                            </span>
                                            <span class="meta_item meta_category">
                                                <a class=" fn_last_category" href="{{ env('APP_URL') }}/category/{{ $result['category']['slug'] }}">{{ $result['category']['name'] }}</a>
                                            </span>
                                        </p>
                                    </div>

                                    <div class="bottom_holder">
                                        @if(isset($result['image_urls']) && count($result['image_urls']) > 0)
                                        <div class="fn__gallery_format">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    @foreach($result['image_urls'] as $image_url)
                                                    <div class="swiper-slide">
                                                        <div class="item" data-bg-img="{{ $image_url }}"></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="slider__nav">
                                                <a href="#" class="slider_nav prev">
                                                    <img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg">
                                                </a>
                                                <a href="#" class="slider_nav next">
                                                    <img class="fn__svg" src="/images/svg/arrowo.svg" alt="svg">
                                                </a>
                                            </div>
                                        </div>
                                        @else
                                        <div class="blog__image">
                                            <a href="{{ $result['link'] }}">
                                                <img src="{{ $result['image_url'] }}" alt="{{ $result['title'] }}" />
                                            </a>
                                        </div>
                                        @endif

                                        <div class="title_holder">
                                            <div class="title">
                                                <h3>
                                                    <a href="{{ $result['link'] }}">{{ $result['title'] }}</a>
                                                </h3>
                                            </div>

                                            <div class="author">
                                                <a href="{{ $result['author_link'] }}">{{ $result['author'] }}</a>
                                            </div>

                                            @if ($result['description'])
                                            <div class="desc">
                                                <p>{{ $result['description'] }}</p>
                                            </div>
                                            @endif

                                            <div class="read_more view_enable">
                                                <div class="read_in">
                                                    <div class="read_wrap">
                                                        <a href="{{ $result['link'] }}">
                                                            <span class="text">Read More</span>
                                                            <span class="triple"></span>
                                                        </a>
                                                        <span class="post_views" title="{{ $result['views'] }}">
                                                            <span class="icon">
                                                                <img class="fn__svg " src="/images/svg/view.svg" alt="svg" />
                                                            </span>
                                                            {{ number_format($result['views'] / 1000, 1) }}k
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @elseif ($result['type'] === 'video')
                            <li class="post-{{ $result['id'] }} post type-post status-publish format-standard has-post-thumbnail hentry category-travel tag-blog tag-image tag-travel tag-writing post_item" id="post-{{ $result['id'] }}">
                                <div class="blog__item blog__item_" data-short-preview="">
                                    @if($result['is_popular'])
                                    <span class="post_icon">
                                        <img class="fn__svg" src="/images/svg/popular.svg" alt="svg">
                                    </span>
                                    @endif
                                    
                                    <div class="fn__meta">
                                        <p>
                                            <span class="meta_item meta_date">
                                                <img class="fn__svg " src="/images/svg/calendar.svg" alt="svg" />{{ date('M d', strtotime($result['created_at'])) }}
                                            </span>
                                            <span class="meta_item meta_category">
                                                <a class=" fn_last_category" href="{{ env('APP_URL') }}/category/{{ $result['category']['slug'] }}">{{ $result['category']['name'] }}</a>
                                            </span>
                                        </p>
                                    </div>

                                    <div class="bottom_holder">
                                        @if ($result['video_url'])
                                        <div class="blog__image">
                                            <iframe 
                                                width="100%"
                                                height="352"
                                                src="https://www.youtube.com/embed/{{ explode('v=', $result['video_url'])[1] ?? '' }}"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen
                                            ></iframe>
                                        </div>
                                        @endif

                                        <div class="title_holder">
                                            <div class="title">
                                                <h3>
                                                    <a href="{{ $result['link'] }}">{{ $result['title'] }}</a>
                                                </h3>
                                            </div>

                                            <div class="author">
                                                <a href="{{ $result['author_link'] }}">{{ $result['author'] }}</a>
                                            </div>

                                            @if ($result['description'])
                                            <div class="desc">
                                                <p>{{ $result['description'] }}</p>
                                            </div>
                                            @endif

                                            <div class="read_more view_enable">
                                                <div class="read_in">
                                                    <div class="read_wrap">
                                                        <a href="{{ $result['link'] }}">
                                                            <span class="text">Read More</span>
                                                            <span class="triple"></span>
                                                        </a>
                                                        <span class="post_views" title="{{ $result['views'] }}">
                                                            <span class="icon">
                                                                <img class="fn__svg " src="/images/svg/view.svg" alt="svg" />
                                                            </span>
                                                            {{ number_format($result['views'] / 1000, 1) }}k
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @elseif ($result['type'] === 'quote')
                            <li class="post-{{ $result['id'] }} post type-post status-publish format-quote has-post-thumbnail hentry category-lifestyle category-travel tag-blog tag-lifestyle tag-quote tag-travel tag-writing post_format-post-format-quote post_item" id="post-{{ $result['id'] }}">
                                <div class="blog__item blog__item_" data-short-preview="">
                                    <div class="blog__quote_item">
                                        <span class="blog__icon">
                                            <img class="fn__svg " src="/images/svg/quote.svg" alt="svg" />
                                        </span>
                                        <blockquote>{{ $result['content'] }}</blockquote>
                                        <h4>{{ $result['author'] }}</h4>
                                    </div>
                                </div>
                            </li>
                            @elseif ($result['type'] === 'link')
                            <li class="post-{{ $result['id'] }} post type-post status-publish format-link has-post-thumbnail hentry category-travel tag-blog tag-image tag-travel tag-writing post_format-post-format-link post_item" id="post-{{ $result['id'] }}">
                                <div class="blog__item blog__item_" data-short-preview="">
                                    <div class="blog__link_item">
                                        <span class="blog__icon">
                                            <img class="fn__svg " src="/images/svg/link.svg" alt="svg" />
                                        </span>
                                        <a href="{{ $result['slug'] }}">{{ $result['slug'] }}</a>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="xoxo_fn_pagination">
                        <div class="container">
                            <div class="pag_in">
                                <div class="pag_inner">
                                    <span class="left_wing"></span>
                                    <span class="right_wing"></span>
                                    <ul>
                                        {{-- Previous Page Link --}}
                                        @if ($paginator->onFirstPage())
                                            <li class="disabled"><span>&laquo;</span></li>
                                        @else
                                            <li><a href="{{ $paginator->previousPageUrl() }}">&laquo;</a></li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class='active'><span class='current'>{{ $page }}</span></li>
                                            @else
                                                <li><a href="{{ $url }}" class='inactive'>{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($paginator->hasMorePages())
                                            <li><a href="{{ $paginator->nextPageUrl() }}">&raquo;</a></li>
                                        @else
                                            <li class="disabled"><span>&raquo;</span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SEARCH -->
    </div>
</div>
@endsection
