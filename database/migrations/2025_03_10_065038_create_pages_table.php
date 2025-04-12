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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('url');
            $table->string('image_url')->nullable();
            $table->string('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('author')->nullable()->default('Dev Shah');
            $table->string('author_link')->nullable()->default('/author/devshah');
            $table->string('author_image_url')->nullable()->default('/images/devshah.jpg');
            $table->text('author_description')->nullable();
            $table->json('author_social_links')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
