<li class="post-{{ $post->id }} post type-post status-publish format-link has-post-thumbnail hentry category-travel tag-blog tag-image tag-travel tag-writing post_format-post-format-link post_item" id="post-{{ $post->id }}">
    <div class="blog__item blog__item_masonry" data-short-preview="">
        <div class="blog__link_item">
            <span class="blog__icon">
                <img class="fn__svg" src="/images/svg/link.svg" alt="svg" />
            </span>
            <a href="{{ $post->slug }}">{{ $post->slug }}</a>
        </div>
    </div>
</li>