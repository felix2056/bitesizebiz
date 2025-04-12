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
            'author' => 'Dev Shah',
            'author_link' => '/author/devshah',
            'author_image_url' => '/images/devshah.jpg',
            'author_description' => 'I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.',
            'author_social_links' => '[
                {
                    "name": "Facebook",
                    "url": "https://www.facebook.com/profile.php?id=100016824821262"
                },
                {
                    "name": "Twitter",
                    "url": "https://twitter.com/devlikesbizness"
                },
                {
                    "name": "LinkedIn",
                    "url": "https://www.linkedin.com/in/devlikesbizness/"
                },
                {
                    "name": "Instagram",
                    "url": "https://www.instagram.com/devlikesbizness/"
                }
            ]',
        ]);

        Page::create([
            'title' => 'About Page',
            'slug' => 'about',
            'excerpt' => 'This is the about page. It is the page that tells people about the website.',
            'content' => 'About',
            'url' => '/about',
            'author' => 'Dev Shah',
            'author_link' => '/author/devshah',
            'author_image_url' => '/images/devshah.jpg',
            'author_description' => 'I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.',
            'author_social_links' => '[
                {
                    "name": "Facebook",
                    "url": "https://www.facebook.com/profile.php?id=100016824821262"
                },
                {
                    "name": "Twitter",
                    "url": "https://twitter.com/devlikesbizness"
                },
                {
                    "name": "LinkedIn",
                    "url": "https://www.linkedin.com/in/devlikesbizness/"
                },
                {
                    "name": "Instagram",
                    "url": "https://www.instagram.com/devlikesbizness/"
                }
            ]',
        ]);

        Page::create([
            'title' => 'Contact Page',
            'slug' => 'contact',
            'excerpt' => 'This is the contact page. It is the page that allows people to contact the website.',
            'content' => 'Contact',
            'url' => '/contact',
            'author' => 'Dev Shah',
            'author_link' => '/author/devshah',
            'author_image_url' => '/images/devshah.jpg',
            'author_description' => 'I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.',
            'author_social_links' => '[
                {
                    "name": "Facebook",
                    "url": "https://www.facebook.com/profile.php?id=100016824821262"
                },
                {
                    "name": "Twitter",
                    "url": "https://twitter.com/devlikesbizness"
                },
                {
                    "name": "LinkedIn",
                    "url": "https://www.linkedin.com/in/devlikesbizness/"
                },
                {
                    "name": "Instagram",
                    "url": "https://www.instagram.com/devlikesbizness/"
                }
            ]',
        ]);

        Page::create([
            'title' => 'Privacy Policy Page',
            'slug' => 'privacy-policy',
            'excerpt' => 'This is the privacy policy page. It is the page that tells people about the privacy policy of the website.',
            'content' => 'Privacy Policy',
            'url' => '/privacy-policy',
            'author' => 'Dev Shah',
            'author_link' => '/author/devshah',
            'author_image_url' => '/images/devshah.jpg',
            'author_description' => 'I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.',
            'author_social_links' => '[
                {
                    "name": "Facebook",
                    "url": "https://www.facebook.com/profile.php?id=100016824821262"
                },
                {
                    "name": "Twitter",
                    "url": "https://twitter.com/devlikesbizness"
                },
                {
                    "name": "LinkedIn",
                    "url": "https://www.linkedin.com/in/devlikesbizness/"
                },
                {
                    "name": "Instagram",
                    "url": "https://www.instagram.com/devlikesbizness/"
                }
            ]',
        ]);

        Page::create([
            'title' => 'Terms of Service Page',
            'slug' => 'terms-of-service',
            'excerpt' => 'This is the terms of service page. It is the page that tells people about the terms of service of the website.',
            'content' => 'Terms of Service',
            'url' => '/terms-of-service',
            'author' => 'Dev Shah',
            'author_link' => '/author/devshah',
            'author_image_url' => '/images/devshah.jpg',
            'author_description' => 'I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.',
            'author_social_links' => '[
                {
                    "name": "Facebook",
                    "url": "https://www.facebook.com/profile.php?id=100016824821262"
                },
                {
                    "name": "Twitter",
                    "url": "https://twitter.com/devlikesbizness"
                },
                {
                    "name": "LinkedIn",
                    "url": "https://www.linkedin.com/in/devlikesbizness/"
                },
                {
                    "name": "Instagram",
                    "url": "https://www.instagram.com/devlikesbizness/"
                }
            ]',
        ]);
    }
}
