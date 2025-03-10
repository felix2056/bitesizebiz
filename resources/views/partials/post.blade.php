<li class="post-{{ $post->id }} post type-post status-publish format-standard has-post-thumbnail {{ $post->is_popular ? 'sticky' : '' }} hentry category-{{ $post->category_id }} post_item" id="post-{{ $post->id }}">
    <div class="blog__item blog__item_masonry" data-short-preview>
        @if($post->is_popular)
        <span class="post_icon">
            <img class="fn__svg" src="/images/svg/popular.svg" alt="svg">
        </span>
        @endif

        <div class="fn__meta">
            <p>
                <span class="meta_item meta_date">
                    <img class="fn__svg" src="/images/svg/calendar.svg" alt="svg">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('F j') }}
                </span>
                <span class="meta_item meta_category">
                    <a class="fn_last_category" href="/category/{{ $category->slug ?? 'uncategorized' }}">{{ $category->name ?? 'Uncategorized' }}</a>
                </span>
            </p>
        </div>

        <div class="bottom_holder">
            @if(isset($post->image_urls) && count($post->image_urls) > 0)
            <div class="fn__gallery_format">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($post->image_urls as $image_url)
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
                @if($post->type === 'music')
                <a href="#" class="fn__audio_popup">
                    <img class="fn__svg" src="/images/svg/music.svg" alt="svg">
                </a>
                <div class="embed_code">
                    <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX4sWSpwq3LiO?utm_source=generator" width="100%" height="352"></iframe>
                </div>
                @endif

                <a href="{{ $post->link }}">
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                </a>
            </div>
            @endif

            <div class="title_holder">
                <div class="title">
                    <h3>
                        <a href="{{ $post->link }}">{{ $post->title }}</a>
                    </h3>
                </div>
                <div class="author">
                    <a href="{{ $post->author_link }}">{{ $post->author }}</a>
                </div>
                <div class="desc">
                    <p>{{ \Illuminate\Support\Str::limit($post->description, 500) }}</p>
                </div>
                <div class="read_more view_enable">
                    <div class="read_in">
                        <div class="read_wrap">
                            <a href="{{ $post->link }}">
                                <span class="text">Read More</span>
                                <span class="triple"></span>
                            </a>
                            <span class="post_views" title="{{ $post->views }}">
                                <span class="icon">
                                    <img class="fn__svg" src="/images/svg/view.svg" alt="svg">
                                </span>
                                {{ number_format($post->views / 1000, 1) }}k
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
