<?php

namespace Database\Seeders;

use App\Models\EventLogo;
use Illuminate\Database\Seeder;

class EventLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'SIGMA MALTA',
                'logo' => 'sigma-malta.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'SBC BARCELONA',
                'logo' => 'SBC-Barcelona.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'SIGMA AMERICAS',
                'logo' => 'sigma-americas.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'CASINO BEATS',
                'logo' => 'casino-beats.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'SIGMA BALKANS',
                'logo' => 'sigma-balkans.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'SBC LATINOAMERICA',
                'logo' => 'SBC-Latinoamerica.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'SIGMA EURASIA',
                'logo' => 'sigma-eurasia.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'IGB',
                'logo' => 'IGB.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'SIGMA AFRICA',
                'logo' => 'sigma-africa.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'title' => 'ICE',
                'logo' => 'ICE.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'title' => 'INTERLIFT',
                'logo' => 'interlift-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        EventLogo::insert($data);
    }
}
