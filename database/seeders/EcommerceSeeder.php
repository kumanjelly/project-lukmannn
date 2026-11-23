<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcommerceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ecommerce')->insert([
            [
                'name' => 'Oversized Casual T-Shirt Black',
                'description' => 'Kaos oversized berbahan katun kombed 24s yang sangat nyaman dan adem digunakan sehari-hari.',
                'price' => 129000,
                // Gambar Kaos Hitam Polos
                'image' => 'https://images.pexels.com/photos/1656684/pexels-photo-1656684.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category' => 'T-Shirt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Denim Jacket Ocean Blue',
                'description' => 'Jaket denim klasik berbahan katun tebal berkualitas tinggi dengan potongan regular fit.',
                'price' => 349000,
                // Gambar Jaket Jeans / Denim Blue
                'image' => 'https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category' => 'Jacket',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Striped Cotton Polo Shirt',
                'description' => 'Kaos polo bermotif garis dengan bahan pique premium, cocok untuk tampilan semi-formal.',
                'price' => 189000,
                // Gambar Kaos Polo Berkerah
                'image' => 'https://images.pexels.com/photos/1232459/pexels-photo-1232459.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category' => 'Polo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minimalist Hoodie Grey Warm',
                'description' => 'Hoodie warna abu-abu berbahan fleece tebal dan lembut, menjaga tubuh tetap hangat.',
                'price' => 279000,
                // Gambar Hoodie Abu-abu
                'image' => 'https://images.pexels.com/photos/6311613/pexels-photo-6311613.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category' => 'Hoodie',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Formal Long Sleeve Shirt White',
                'description' => 'Kemeja lengan panjang warna putih polos berbahan katun poplin yang rapi dan mudah disetrika.',
                'price' => 219000,
                // Gambar Kemeja Putih Lengan Panjang
                'image' => 'https://images.pexels.com/photos/297933/pexels-photo-297933.jpeg?auto=compress&cs=tinysrgb&w=600',
                'category' => 'Kemeja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}