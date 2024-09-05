<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Advena',
                'logo' => 'advena-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Bambora',
                'logo' => 'bambora-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'BetBy',
                'logo' => 'betby-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Betstarters',
                'logo' => 'betstarters-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Bgaming',
                'logo' => 'bgaming-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Conquestador',
                'logo' => 'conquestador-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'Corporategifts',
                'logo' => 'corporategifts-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'DFK',
                'logo' => 'dfk-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'Enteractive',
                'logo' => 'enteractive-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'title' => 'Finductive',
                'logo' => 'finductive-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'title' => 'Gamanza',
                'logo' => 'gamanza-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'title' => 'Gaming1',
                'logo' => 'gaming1-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'title' => 'Globiance',
                'logo' => 'globiance-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'title' => 'Helio',
                'logo' => 'helio-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'title' => 'Lsports',
                'logo' => 'lsports-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 16,
                'title' => 'Melita',
                'logo' => 'melita-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 17,
                'title' => 'N1',
                'logo' => 'n1-logo-v2.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'title' => 'MIB',
                'logo' => 'mib-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 19,
                'title' => 'Payfuture',
                'logo' => 'payfuture-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'title' => 'Worldline',
                'logo' => 'worldline-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'title' => 'Praxis',
                'logo' => 'praxis-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 22,
                'title' => 'Softswiss',
                'logo' => 'softswiss-logo-sm.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 23,
                'title' => 'Thunderkick',
                'logo' => 'thunderkick-logo-sm.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 24,
                'title' => 'Vertibus',
                'logo' => 'vertibus-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 25,
                'title' => 'Payneteasy',
                'logo' => 'payneteasy-logo.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Clients::insert($data);
    }
}
