<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\MarkdownService;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['link', 'author_link'];

    protected $casts = [
        'image_urls' => 'array',
        'tags' => 'array',
        'author_social_links' => 'array',
    ];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getLinkAttribute()
    {
        return '/blog/' . $this->slug;
    }

    public function getAuthorLinkAttribute()
    {
        return '/author/' . $this->author;
    }

    public function getRenderedContentAttribute(): string
    {
        if (!$this->content_path) return '';

        return app(MarkdownService::class)->parseFromPath($this->content_path);
    }
}
