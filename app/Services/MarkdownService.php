<?php

namespace App\Services;

use League\CommonMark\GithubFlavoredMarkdownConverter;
use Illuminate\Support\Facades\File;

class MarkdownService
{
    protected $converter;

    public function __construct()
    {
        $this->converter = new GithubFlavoredMarkdownConverter([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);
    }

    public function parseFromPath(?string $path): string
    {
        $fullPath = resource_path($path);
        
        if (!$path || !File::exists($fullPath)) {
            return '';
        }

        $markdown = File::get($fullPath);
        return $this->parse($markdown);
    }

    public function parse(string $markdown): string
    {
        return $this->converter->convert($markdown)->getContent();
    }
} 