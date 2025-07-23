<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ContactMessage::create([
            'sender_name' => 'Eka Saputra',
            'sender_email' => 'eka@example.com',
            'sender_phone' => '08123456789',
            'subject' => 'Pertanyaan Produk',
            'message' => 'Halo, saya ingin bertanya tentang produk terbaru Anda.',
            'status' => 'new',
            'received_at' => now(),
        ]);
        \App\Models\ContactMessage::create([
            'sender_name' => 'Rina Wijaya',
            'sender_email' => 'rina@example.com',
            'sender_phone' => '08234567890',
            'subject' => 'Kerjasama',
            'message' => 'Apakah ada peluang kerjasama dengan perusahaan kami?',
            'status' => 'new',
            'received_at' => now(),
        ]);
    }
}
