<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Teknologi & Pemrograman
        $pemrograman = \App\Models\Category::create(['name' => 'Pemrograman', 'slug' => 'pemrograman']);
        \App\Models\Category::create(['name' => 'PHP', 'slug' => 'php', 'parent_id' => $pemrograman->id]);
        \App\Models\Category::create(['name' => 'JavaScript', 'slug' => 'javascript', 'parent_id' => $pemrograman->id]);
        \App\Models\Category::create(['name' => 'Python', 'slug' => 'python', 'parent_id' => $pemrograman->id]);
        $mobile = \App\Models\Category::create(['name' => 'Mobile', 'slug' => 'mobile', 'parent_id' => $pemrograman->id]);
        \App\Models\Category::create(['name' => 'Android', 'slug' => 'android', 'parent_id' => $mobile->id]);
        \App\Models\Category::create(['name' => 'iOS', 'slug' => 'ios', 'parent_id' => $mobile->id]);

        $desain = \App\Models\Category::create(['name' => 'Desain Grafis', 'slug' => 'desain-grafis']);
        \App\Models\Category::create(['name' => 'UI/UX', 'slug' => 'ui-ux', 'parent_id' => $desain->id]);
        \App\Models\Category::create(['name' => 'Desain Logo', 'slug' => 'desain-logo', 'parent_id' => $desain->id]);
        \App\Models\Category::create(['name' => 'Ilustrasi', 'slug' => 'ilustrasi', 'parent_id' => $desain->id]);

        $berita = \App\Models\Category::create(['name' => 'Berita Teknologi', 'slug' => 'berita-teknologi']);
        \App\Models\Category::create(['name' => 'Gadget', 'slug' => 'gadget', 'parent_id' => $berita->id]);
        \App\Models\Category::create(['name' => 'Startup', 'slug' => 'startup', 'parent_id' => $berita->id]);
        \App\Models\Category::create(['name' => 'Kecerdasan Buatan (AI)', 'slug' => 'ai', 'parent_id' => $berita->id]);

        // Lifestyle
        $kuliner = \App\Models\Category::create(['name' => 'Kuliner', 'slug' => 'kuliner']);
        \App\Models\Category::create(['name' => 'Resep Masakan', 'slug' => 'resep-masakan', 'parent_id' => $kuliner->id]);
        \App\Models\Category::create(['name' => 'Review Restoran', 'slug' => 'review-restoran', 'parent_id' => $kuliner->id]);
        \App\Models\Category::create(['name' => 'Makanan Tradisional', 'slug' => 'makanan-tradisional', 'parent_id' => $kuliner->id]);

        $travel = \App\Models\Category::create(['name' => 'Perjalanan', 'slug' => 'perjalanan']);
        \App\Models\Category::create(['name' => 'Destinasi Domestik', 'slug' => 'destinasi-domestik', 'parent_id' => $travel->id]);
        \App\Models\Category::create(['name' => 'Destinasi Internasional', 'slug' => 'destinasi-internasional', 'parent_id' => $travel->id]);
        \App\Models\Category::create(['name' => 'Tips Traveling', 'slug' => 'tips-traveling', 'parent_id' => $travel->id]);

        $kesehatan = \App\Models\Category::create(['name' => 'Kesehatan', 'slug' => 'kesehatan']);
        \App\Models\Category::create(['name' => 'Olahraga & Kebugaran', 'slug' => 'olahraga-kebugaran', 'parent_id' => $kesehatan->id]);
        \App\Models\Category::create(['name' => 'Nutrisi & Diet', 'slug' => 'nutrisi-diet', 'parent_id' => $kesehatan->id]);
        \App\Models\Category::create(['name' => 'Kesehatan Mental', 'slug' => 'kesehatan-mental', 'parent_id' => $kesehatan->id]);
    }
}
