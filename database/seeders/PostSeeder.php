<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'title' => 'How to Start Investing in Online Businesses with Just $5K',
                'description' => 'Step-by-step process to start investing in online businesses with just $5K. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/how-to-start-investing-in-online-businesses-with-just-5k.md',
                'tags' => '["online businesses", "under 5k", "investing", "marketplace", "digital products"]',
                'image_url' => '/images/blog/how-to-start-investing-in-online-businesses-with-just-5k.webp',
                'image_urls' => '["/images/blog/how-to-start-investing-in-online-businesses-with-just-5k.webp","/images/blog/how-to-start-investing-in-online-businesses-with-just-5k-2.jpg","/images/blog/how-to-start-investing-in-online-businesses-with-just-5k-3.jpg","/images/blog/how-to-start-investing-in-online-businesses-with-just-5k-4.jpg"]',
                'video_url' => null,
                'slug' => 'how-to-start-investing-in-online-businesses-with-just-5k',
                'type' => 'post',
                'category_id' => 5,
                'views' => 2300,
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
                'is_popular' => true,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 2,
                'title' => 'What kind of business can you buy for under $25,000?',
                'description' => 'Today I\'m going to talk about the different kinds of businesses you can buy for under $25,000. Examples are SaaS, e-commerce, social profiles, mobile apps, shopify apps, etc.',
                'content_path' => 'posts/what-kind-of-business-can-you-buy-for-under-25000.md',
                'tags' => '["online businesses", "under 25k", "saas", "e-commerce", "youtube", "shopify", "apps"]',
                'image_url' => '/images/blog/what-kind-of-business-can-you-buy-for-under-25000.jpg',
                'image_urls' => '[]',
                'video_url' => 'https://www.youtube.com/watch?v=Xdz1OGjPtqk',
                'slug' => 'what-kind-of-business-can-you-buy-for-under-25000',
                'type' => 'video',
                'category_id' => 6,
                'views' => 900,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 3,
                'title' => 'Step-by-Step Process to Buy an Online Business on a Budget',
                'description' => 'Lets discuss about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/step-by-step-process-to-buy-an-online-business-on-a-budget.md',
                'tags' => '["online businesses", "under 25k", "marketplace", "investing", "websites"]',
                'image_url' => '/images/blog/step-by-step-process-to-buy-an-online-business-on-a-budget.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'step-by-step-process-to-buy-an-online-business-on-a-budget',
                'type' => 'post',
                'category_id' => 1,
                'views' => 4500,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 4,
                'title' => 'Why Now Is the Perfect Time to Invest in Online Business Opportunities',
                'description' => 'Investing in online business opportunities is a great way to diversify your portfolio. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/why-now-is-the-perfect-time-to-invest-in-online-business-opportunities.md',
                'tags' => '["online businesses", "investing", "marketplace", "websites", "digital products"]',
                'image_url' => '/images/blog/why-now-is-the-perfect-time-to-invest-in-online-business-opportunities.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'why-now-is-the-perfect-time-to-invest-in-online-business-opportunities',
                'type' => 'post',
                'category_id' => 1,
                'views' => 3400,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 5,
                'title' => 'Diversify Your Portfolio with Micro Private Equity in Digital Ventures',
                'description' => 'Micro private equity in digital ventures is a great way to diversify your portfolio. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/diversify-your-portfolio-with-micro-private-equity-in-digital-ventures.md',
                'tags' => '["online businesses", "investing", "saas", "digital products", "apps"]',
                'image_url' => '/images/blog/diversify-your-portfolio-with-micro-private-equity-in-digital-ventures.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'diversify-your-portfolio-with-micro-private-equity-in-digital-ventures',
                'type' => 'post',
                'category_id' => 3,
                'views' => 5300,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 6,
                'title' => 'How a $5K Investment Can Transform Into a Thriving Online Business',
                'description' => 'A $5K investment can transform into a thriving online business. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/how-a-5k-investment-can-transform-into-a-thriving-online-business.md',
                'tags' => '["online businesses", "under 5k", "investing", "e-commerce", "digital products"]',
                'image_url' => '/images/blog/how-a-5k-investment-can-transform-into-a-thriving-online-business.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'how-a-5k-investment-can-transform-into-a-thriving-online-business',
                'type' => 'post',
                'category_id' => 4,
                'views' => 1900,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 7,
                'title' => 'Where Can You Find a Micro Startup To Buy?',
                'description' => 'Do you really want to know why you should buy a micro startup rather than starting it from scratch, have covered all the secrets in this video. 18-20: ran an agency and hated it. 21: came across ‪@acquiredotcom‬ and bought my first micro startup for $4,000, 4 more acquisitions now: 22: building a 6 figure holding company buying businesses ',
                'content_path' => 'posts/where-can-you-find-a-micro-startup-to-buy.md',
                'tags' => '["online businesses", "under 10k", "marketplace", "saas", "apps", "websites"]',
                'image_url' => '/images/blog/where-can-you-find-a-micro-startup-to-buy.jpg',
                'image_urls' => '[]',
                'video_url' => 'https://www.youtube.com/watch?v=o2ffcKILMkI',
                'slug' => 'where-can-you-find-a-micro-startup-to-buy',
                'type' => 'video',
                'category_id' => 2,
                'views' => 1000,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 8,
                'title' => 'Essential Tools and Technologies for Scaling Your Online Business Investment',
                'description' => 'Essential tools and technologies for scaling your online business investment. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/essential-tools-and-technologies-for-scaling-your-online-business-investment.md',
                'tags' => '["online businesses", "saas", "apps", "digital products", "e-commerce"]',
                'image_url' => '/images/blog/essential-tools-and-technologies-for-scaling-your-online-business-investment.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'essential-tools-and-technologies-for-scaling-your-online-business-investment',
                'type' => 'post',
                'category_id' => 3,
                'views' => 800,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 9,
                'title' => 'Top Marketplaces to Find Affordable Online Businesses for Sale',
                'description' => 'Top marketplaces to find affordable online businesses for sale. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/top-marketplaces-to-find-affordable-online-businesses-for-sale.md',
                'tags' => '["online businesses", "marketplace", "under 25k", "under 10k", "websites"]',
                'image_url' => '/images/blog/top-marketplaces-to-find-affordable-online-businesses-for-sale.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'top-marketplaces-to-find-affordable-online-businesses-for-sale',
                'type' => 'post',
                'category_id' => 1,
                'views' => 1100,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 10,
                'title' => 'Acquisition AI',
                'description' => 'Acquisition AI is a platform that helps you find and buy online businesses. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => null,
                'tags' => '["online businesses", "apps", "marketplace", "saas", "digital products"]',
                'image_url' => '/images/blog/acquisition-ai.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'https://acquisition-ai.com/',
                'type' => 'link',
                'category_id' => 1,
                'views' => 0,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 11,
                'title' => 'Financing an Online Business Purchase: Is It Possible?',
                'description' => 'Financing an online business purchase is possible. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/financing-an-online-business-purchase-is-it-possible.md',
                'tags' => '["online businesses", "investing", "under 25k", "marketplace", "e-commerce"]',
                'image_url' => '/images/blog/financing-an-online-business-purchase-is-it-possible.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'financing-an-online-business-purchase-is-it-possible',
                'type' => 'post',
                'category_id' => 3,
                'views' => 7800,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 12,
                'title' => '3 Best StartUps Resources for College Students',
                'description' => '3 startup resources that are perfect for college students looking to start their own businesses. These resources are highly recommended for anyone who wants to learn more about entrepreneurship and take their startup to the next level.',
                'content_path' => 'posts/3-best-startups-resources-for-college-students.md',
                'tags' => '["online businesses", "apps", "content", "saas", "websites"]',
                'image_url' => '/images/blog/3-best-startups-resources-for-college-students.jpg',
                'image_urls' => '[]',
                'video_url' => 'https://www.youtube.com/watch?v=9JwE1G7eIOU',
                'slug' => '3-best-startups-resources-for-college-students',
                'type' => 'video',
                'category_id' => 2,
                'views' => 1000,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 13,
                'title' => 'Common Pitfalls When Buying an Online Business (And How to Avoid Them)',
                'description' => 'Common pitfalls when buying an online business and how to avoid them. Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/common-pitfalls-when-buying-an-online-business-and-how-to-avoid-them.md',
                'tags' => '["online businesses", "investing", "marketplace", "e-commerce", "saas"]',
                'image_url' => '/images/blog/common-pitfalls-when-buying-an-online-business-and-how-to-avoid-them.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'common-pitfalls-when-buying-an-online-business-and-how-to-avoid-them',
                'type' => 'post',
                'category_id' => 1,
                'views' => 1800,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
            [
                'id' => 14,
                'title' => 'What Are the Key Red Flags to Look Out for When Buying an Online Business on a Budget?',
                'description' => 'What are the key red flags to look out for when buying an online business on a budget? Learn about the key factors to consider, the best platforms to find opportunities, and the strategies for evaluating and acquiring online businesses.',
                'content_path' => 'posts/what-are-the-key-red-flags-to-look-out-for-when-buying-an-online-business-on-a-budget.md',
                'tags' => '["online businesses", "investing", "under 25k", "marketplace", "digital products"]',
                'image_url' => '/images/blog/what-are-the-key-red-flags-to-look-out-for-when-buying-an-online-business-on-a-budget.webp',
                'image_urls' => '[]',
                'video_url' => null,
                'slug' => 'what-are-the-key-red-flags-to-look-out-for-when-buying-an-online-business-on-a-budget',
                'type' => 'post',
                'category_id' => 3,
                'views' => 5800,
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
                'is_popular' => false,
                'is_featured' => false,
                'is_published' => true,
                'created_at' => '2025-03-08 00:00:00',
                'updated_at' => '2025-03-08 00:00:00',
            ],
        ]);
    }
}
