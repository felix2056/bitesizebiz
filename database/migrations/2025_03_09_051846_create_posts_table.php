<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('content_path')->nullable();
            $table->json('tags')->nullable()->default('["online businesses", "micro startups", "investing", "business acquisition"]');
            $table->string('image_url')->nullable();
            $table->json('image_urls')->nullable();
            $table->string('video_url')->nullable();
            $table->string('type')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('comments')->default(0);
            $table->string('author')->nullable()->default('Dev Shah');
            $table->string('author_link')->nullable()->default('/author/devshah');
            $table->string('author_image_url')->nullable()->default('/images/devshah.jpg');
            $table->text('author_description')->nullable()->default('I’m an entrepreneurial student diving into the exciting world of small business acquisitions for under $25k on Acquire.com. At 18, I’m building a thriving side hustle in the sub-$25k space and developing an Ed-tech startup—check out eleven59.ai. I’m also launching Sourcely.net, an AI tool for students, and aiming for $10k MRR. Join me as I navigate the small biz landscape.');
            $table->json('author_social_links')->nullable()->default('
            [
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
            ]');
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
