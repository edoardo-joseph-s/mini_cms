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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('author_name')->nullable();
            $table->string('author_email');
            $table->text('content');
            $table->enum('status', ['pending', 'approved', 'spam'])->default('pending');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->timestamps();
        });

        // Seed initial data
        DB::table('posts')->insert([
            [
                'title' => 'Contoh Post 1',
                'slug' => 'contoh-post-1',
                'content' => 'Isi post 1',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // tambahkan data lain sesuai kebutuhan
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
