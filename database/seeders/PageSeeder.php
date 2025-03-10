<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'Home Page',
            'slug' => 'home',
            'content' => 'Home',
            'image' => 'home.jpg',
            'url' => '/',
        ]);

        Page::create([
            'title' => 'About Page',
            'slug' => 'about',
            'content' => 'About',
            'image' => 'about.jpg',
            'url' => '/about',
        ]);

        Page::create([
            'title' => 'Contact Page',
            'slug' => 'contact',
            'content' => 'Contact',
            'image' => 'contact.jpg',
            'url' => '/contact',
        ]);

        Page::create([
            'title' => 'Privacy Policy Page',
            'slug' => 'privacy-policy',
            'content' => 'Privacy Policy',
            'image' => 'privacy-policy.jpg',
            'url' => '/privacy-policy',
        ]);

        Page::create([
            'title' => 'Terms of Service Page',
            'slug' => 'terms-of-service',
            'content' => 'Terms of Service',
            'image' => 'terms-of-service.jpg',
            'url' => '/terms-of-service',
        ]);
    }
}
