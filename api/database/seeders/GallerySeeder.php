<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'rel'   => 'about',
                'image' => 'about-gal-1.webp',
                'thumb' => 'gal-thumb-v1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'rel'   => 'about',
                'image' => 'about-gal-2.webp',
                'thumb' => 'gal-thumb-2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'rel'   => 'about',
                'image' => 'about-gal-3.webp',
                'thumb' => 'gal-thumb-3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'rel'   => 'about',
                'image' => 'about-gal-4.webp',
                'thumb' => 'gal-thumb-4.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'rel'   => 'about',
                'image' => 'about-gal-5.webp',
                'thumb' => 'gal-thumb-5.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'rel'   => 'about',
                'image' => 'about-gal-6.webp',
                'thumb' => 'gal-thumb-6.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'rel'   => 'about',
                'image' => 'about-gal-7.webp',
                'thumb' => 'gal-thumb-7.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Gallery::insert($data);
    }
}
