<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {               
        $tags = [
            'Online Businesses',
            'SaaS',
            'Content',
            'Marketplace',
            'E-commerce',
            'Amazon FBA',
            'Shopify',
            'Youtube',
            'Lifestyle',
            'Digital Products',
            'Dropshipping',
            'Apps',
            'Websites',
            'Crypto',
            'Blog',
            'Adsense',
            'Under $25K',
            'Under $10K',
            'Under $5K',
        ];

        $position = 1;
        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'slug' => Str::slug($tag),
                'position' => $position,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->attachTagToPosts($tag);

            $position++;
        }
    }
    
    /**
     * Attach the tag to random posts
     */
    private function attachTagToPosts($tagName)
    {
        // Get the tag we just created
        $tag = Tag::where('name', $tagName)->first();
        
        if (!$tag) {
            return; // Skip if tag isn't found
        }
        
        $randomPostCount = rand(3, 10);
        
        $posts = Post::inRandomOrder()
            ->limit($randomPostCount)
            ->get();
                    
        foreach ($posts as $post) {
            if (!DB::table('post_tag')
                ->where('post_id', $post->id)
                ->where('tag_id', $tag->id)
                ->exists()) {
                
                // Insert into pivot table
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $tag->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
