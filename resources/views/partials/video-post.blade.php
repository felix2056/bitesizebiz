<li class="post-{{ $post->id }} post type-post status-publish format-standard has-post-thumbnail {{ $post->is_popular ? 'sticky' : '' }} hentry category-{{ $post->category }} tag-{{ $post->tag }} tag-{{ $post->tag2 }} post_item" id="post-{{ $post->id }}">
    <div class="blog__item blog__item_masonry" data-short-preview>
        @if ($post->is_popular)
        <span class="post_icon">
            <img class="fn__svg" src="/images/svg/popular.svg" alt="svg">
        </span>
        @endif

        <div class="fn__meta">
            <p>
                <span class="meta_item meta_date">
                    <img class="fn__svg " src="/images/svg/calendar.svg" alt="svg">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('F j') }}
                </span>
                <span class="meta_item meta_category">
                    <a class=" fn_last_category" href="{{ $post->category_link }}">{{ $post->category_name }}</a>
                </span>
            </p>
        </div>

        <div class="bottom_holder">
            @if ($post->video_url)
            <div class="blog__image">
                <iframe 
                    width="100%"
                    height="352"
                    src="https://www.youtube.com/embed/{{ explode('v=', $post->video_url)[1] ?? '' }}"
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
                        <a href="{{ $post->link }}">{{ $post->title }}</a>
                    </h3>
                </div>
                <div class="author">
                    <a href="{{ $post->author_link }}">{{ $post->author }}</a>
                </div>
                <div class="desc">
                    <p>{{ $post->description }}</p>
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
                                    <img class="fn__svg " src="/images/svg/view.svg" alt="svg">
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
