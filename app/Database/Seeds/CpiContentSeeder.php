<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CpiContentSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $this->db->table('pages')->insertBatch([
            [
                'slug' => 'about',
                'template' => 'default',
                'title_id' => 'Tentang Chugoku Paints Indonesia',
                'title_en' => 'About Chugoku Paints Indonesia',
                'excerpt_id' => 'PT. Chugoku Paints Indonesia menyediakan solusi coating berkualitas Jepang untuk kebutuhan marine, heavy duty, infrastruktur, dan industri.',
                'excerpt_en' => 'PT. Chugoku Paints Indonesia provides Japanese-quality coating solutions for marine, heavy duty, infrastructure, and industrial applications.',
                'content_id' => 'Chugoku Paints Indonesia merupakan bagian dari jaringan Chugoku Marine Paints Group yang berfokus pada solusi coating untuk kebutuhan marine, industri, infrastruktur, dan perlindungan aset.',
                'content_en' => 'Chugoku Paints Indonesia is part of the Chugoku Marine Paints Group network, focusing on coating solutions for marine, industrial, infrastructure, and asset protection requirements.',
                'status' => 'published',
                'published_at' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'products',
                'template' => 'products',
                'title_id' => 'Produk Coating',
                'title_en' => 'Coating Products',
                'excerpt_id' => 'Daftar produk coating untuk marine, underwater coating, protective coating, tank coating, pipe protection, dan flooring system.',
                'excerpt_en' => 'Product portfolio for marine paints, underwater coating, protective coating, tank coating, pipe protection, and flooring systems.',
                'content_id' => 'Produk Chugoku dirancang untuk memberikan perlindungan jangka panjang pada berbagai kondisi lingkungan dan aplikasi industri.',
                'content_en' => 'Chugoku products are designed to provide long-term protection for various environmental conditions and industrial applications.',
                'status' => 'published',
                'published_at' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'solutions',
                'template' => 'solutions',
                'title_id' => 'Solusi Coating untuk Industri',
                'title_en' => 'Coating Solutions for Industry',
                'excerpt_id' => 'Solusi perlindungan permukaan untuk kapal, tangki, pipa, lantai industri, struktur baja, dan infrastruktur.',
                'excerpt_en' => 'Surface protection solutions for vessels, tanks, pipes, industrial floors, steel structures, and infrastructure.',
                'content_id' => 'Solusi Chugoku membantu pelanggan memilih sistem coating yang tepat sesuai kebutuhan operasional, lingkungan, dan aset.',
                'content_en' => 'Chugoku solutions help customers choose the right coating system based on operational, environmental, and asset requirements.',
                'status' => 'published',
                'published_at' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'projects',
                'template' => 'projects',
                'title_id' => 'Referensi Proyek',
                'title_en' => 'Project References',
                'excerpt_id' => 'Contoh aplikasi coating Chugoku pada berbagai kebutuhan industri, marine, dan infrastruktur.',
                'excerpt_en' => 'Examples of Chugoku coating applications for industrial, marine, and infrastructure requirements.',
                'content_id' => 'Project records digunakan untuk menunjukkan pengalaman aplikasi coating pada berbagai sektor dan kondisi lapangan.',
                'content_en' => 'Project records are used to demonstrate coating application experience across various sectors and field conditions.',
                'status' => 'published',
                'published_at' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'contact',
                'template' => 'contact',
                'title_id' => 'Hubungi Kami',
                'title_en' => 'Contact Us',
                'excerpt_id' => 'Hubungi Chugoku Paints Indonesia untuk informasi produk, aplikasi coating, dan kebutuhan project.',
                'excerpt_en' => 'Contact Chugoku Paints Indonesia for product information, coating applications, and project requirements.',
                'content_id' => 'Midplaza-1 lantai 8 Jl. Jend. Sudirman Kav. 10-11 Jakarta Indonesia 10220. Call/WA 081287833400.',
                'content_en' => 'Midplaza-1 8th Floor, Jl. Jend. Sudirman Kav. 10-11 Jakarta Indonesia 10220. Call/WhatsApp 081287833400.',
                'status' => 'published',
                'published_at' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
