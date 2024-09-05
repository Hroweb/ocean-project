<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'event_id' => 1,
                'service_id' => 1
            ],
            [
                'event_id' => 1,
                'service_id' => 2
            ],
            [
                'event_id' => 1,
                'service_id' => 3
            ],
            [
                'event_id' => 1,
                'service_id' => 4
            ],
        ];

        DB::table('event_service')->insert($data);
    }
}
