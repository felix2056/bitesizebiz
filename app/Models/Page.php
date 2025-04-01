<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'url',
        'image_url',
        'excerpt',
        'content',
        'author',
        'author_link',
        'author_image_url',
        'author_description',
        'author_social_links',
        'views',
    ];

    protected $appends = ['type'];

    protected $casts = [
        'author_social_links' => 'array',
    ];

    public function getTypeAttribute()
    {
        return 'page';
    }
}
