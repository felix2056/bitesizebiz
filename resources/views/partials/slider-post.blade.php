<div class="swiper-slide">
    <div class="item">
        <div class="img_wrap">
            <div class="img_holder">
                <div class="abs_img" data-bg-img="{{ $post->image_url }}"></div>
            </div>
        </div>
        <div class="title_holder">
            <h3>
                <a href="{{ $post->type == 'link' ? $post->slug : $post->link }}">{{ $post->title }}</a>
            </h3>
            <div class="fn__meta">
                <p>
                    <span class="meta_item meta_date">
                        <img class="fn__svg" src="/images/svg/calendar.svg" alt="svg">
                        {{ \Carbon\Carbon::parse($post->created_at)->format('F j') }}
                    </span>
                    <span class="meta_item meta_category">
                        <a class="fn_last_category" href="/category/{{ $category->slug ?? 'uncategorized' }}">{{ $category->name ?? 'Uncategorized' }}</a>
                    </span>
                    <span class="meta_item meta_author">
                        <a href="{{ $post->author_link }}">{{ $post->author }}</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
