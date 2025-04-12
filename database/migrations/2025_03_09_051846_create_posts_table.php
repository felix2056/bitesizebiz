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
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('content_path')->nullable();
            $table->json('tags')->nullable();
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
            $table->text('author_description')->nullable();
            $table->json('author_social_links')->nullable();
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
