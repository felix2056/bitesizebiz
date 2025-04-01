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
            'excerpt' => 'This is the home page. It is the main page of the website. It is the first page that people see when they visit the website.',
            'content' => 'Home',
            'url' => '/',
        ]);

        Page::create([
            'title' => 'About Page',
            'slug' => 'about',
            'excerpt' => 'This is the about page. It is the page that tells people about the website.',
            'content' => 'About',
            'url' => '/about',
        ]);

        Page::create([
            'title' => 'Contact Page',
            'slug' => 'contact',
            'excerpt' => 'This is the contact page. It is the page that allows people to contact the website.',
            'content' => 'Contact',
            'url' => '/contact',
        ]);

        Page::create([
            'title' => 'Privacy Policy Page',
            'slug' => 'privacy-policy',
            'excerpt' => 'This is the privacy policy page. It is the page that tells people about the privacy policy of the website.',
            'content' => 'Privacy Policy',
            'url' => '/privacy-policy',
        ]);

        Page::create([
            'title' => 'Terms of Service Page',
            'slug' => 'terms-of-service',
            'excerpt' => 'This is the terms of service page. It is the page that tells people about the terms of service of the website.',
            'content' => 'Terms of Service',
            'url' => '/terms-of-service',
        ]);
    }
}
