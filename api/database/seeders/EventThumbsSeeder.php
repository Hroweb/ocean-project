<?php

namespace Database\Seeders;

use App\Models\EventThumbs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventThumbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'event_id' => 1,
                'src' => '/projects/1/thumbs/bambora-thumb-1.webp',
                'alt' => 'Bambora Stand 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'event_id' => 1,
                'src' => '/projects/1/thumbs/bambora-thumb-2.webp',
                'alt' => 'Bambora Stand 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'event_id' => 1,
                'src' => '/projects/1/thumbs/bambora-thumb-3.webp',
                'alt' => 'Bambora Stand 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        EventThumbs::insert($data);
    }
}
