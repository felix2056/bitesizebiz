<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Online Businesses',
                'slug' => 'online-businesses',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:11:46',
                'updated_at' => '2025-03-08 19:11:46',
            ],
            [
                'id' => 2,
                'name' => 'Micro Startups',
                'slug' => 'micro-startups',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:12:05',
                'updated_at' => '2025-03-08 19:12:05',
            ],
            [
                'id' => 3,
                'name' => 'Investing',
                'slug' => 'investing',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:12:33',
                'updated_at' => '2025-03-08 19:12:33',
            ],
            [
                'id' => 4,
                'name' => 'Low-Cost Businesses',
                'slug' => 'low-cost-businesses',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:12:53',
                'updated_at' => '2025-03-08 19:12:53',
            ],
            [
                'id' => 5,
                'name' => 'How-Tos',
                'slug' => 'how-tos',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:13:16',
                'updated_at' => '2025-03-08 19:13:16',
            ],
            [
                'id' => 6,
                'name' => 'Under $25K',
                'slug' => 'under-25k',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:13:28',
                'updated_at' => '2025-03-08 19:13:28',
            ],
            [
                'id' => 7,
                'name' => 'Under $10K',
                'slug' => 'under-10k',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:13:46',
                'updated_at' => '2025-03-08 19:13:46',
            ],
            [
                'id' => 8,
                'name' => 'Under $5K',
                'slug' => 'under-5k',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:14:02',
                'updated_at' => '2025-03-08 19:14:02',
            ],
            [
                'id' => 9,
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'description' => null,
                'image_url' => null,
                'image_urls' => null,
                'created_at' => '2025-03-08 19:14:17',
                'updated_at' => '2025-03-08 19:14:17',
            ],
        ]);
    }
}
