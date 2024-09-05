<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class EventGallery extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id'  => 1,
                'src' => '/projects/1/gallery/bambora-gallery-1.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1,
            ],
            [
                'id'  => 2,
                'src' => '/projects/1/gallery/bambora-gallery-2.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1
            ],
            [
                'id'  => 3,
                'src' => '/projects/1/gallery/bambora-gallery-3.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1
            ],
            [
                'id'  => 4,
                'src' => '/projects/1/gallery/bambora-gallery-4.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1
            ],
            [
                'id'  => 5,
                'src' => '/projects/1/gallery/bambora-gallery-5.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1
            ],
            [
                'id'  => 6,
                'src' => '/projects/1/gallery/bambora-gallery-6.webp',
                'alt' => 'Bambora Stand Gallery',
                'created_at' => now(),
                'updated_at' => now(),
                'event_id' => 1
            ],
        ];

        \App\Models\EventGallery::insert($data);
    }
}
