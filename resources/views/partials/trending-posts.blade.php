<li class="featured_posts_wrapper post_item">
    <div class="featured_post_item">
        <div class="fp_heading">
            <h3>
                <span class="text_wrapper">
                    <span class="icon__before">
                        <img class="fn__svg " src="/images/svg/trending.svg" alt="svg">
                    </span>
                    <span class="text">Trending</span>
                    <span class="icon__after">
                        <img class="fn__svg " src="/images/svg/trending.svg" alt="svg">
                    </span>
                </span>
            </h3>
        </div>

        <div class="fp_content">
            @php
            $trendingPosts = \App\Models\Post::where('is_published', true)->orderBy('views', 'desc')->limit(3)->get();
            @endphp

            <ul>
                @foreach ($trendingPosts as $post)
                <li>
                    <div class="fp__item">
                        <span class="fp_count">
                            <span>{{ $loop->index + 1 }}</span>
                        </span>
                        <h4>
                            <a href="{{ $post->link }}">{{ $post->title }}</a>
                        </h4>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</li>
