<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name'   => 'Antoine',
                'position' => 'Operations Manager',
                'bio' => 'Antoine manages operations, ensuring efficient processes and overseeing projects for IPOINT Build’s exhibition experiences.',
                'photo' => 'team-Antoine.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name'   => 'Andy',
                'position' => 'Floor Manager',
                'bio' => 'Andy coordinates booth construction, manages on-site logistics, and ensures flawless execution of exhibition projects.',
                'photo' => 'team-Andy.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name'   => 'Cheryl',
                'position' => 'Administrative Manager',
                'bio' => 'Cheryl oversees administrative tasks, ensuring smooth operations and providing support for IPOINT Build\'s activities.',
                'photo' => 'team-Cheryl.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Team::insert($data);
    }
}
