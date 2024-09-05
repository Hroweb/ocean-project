<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialEvent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'event_id' => 1,
                'testimonial_id' => 1
            ]
        ];

        DB::table('event_testimonial')->insert($data);
    }
}
