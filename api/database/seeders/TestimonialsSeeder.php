<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'slug' => 'per-sundell',
                'description' => 'GREAT JOB! We thought the quality was fantastic, the team were great and everything was produced how we wanted. This was a hugely important event for us. Thank you for ensuring delivery. We knew you were the right one for the job. You showed us this throughout the preparation before. Our requests were always answered very promptly, leaving nothing out and always very communicative.',
                'avatar' => 'per-sundell.png',
                'name' => 'Per Sundell',
                'designation' => 'Senior Business Development Manager',
                'logo_src' => 'bambora-tst.svg',
                'logo_alt' => 'Bambora',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'slug' => 'richard-mifsud',
                'description' => 'Thank you to all your team for the design work on our stand for ICE 2019. The stand looked professional and we received positive feedback from attendees and our own management. All works coordination and adaptation to our brands ran smoothly. This is not the first time we have worked together and look forward to work with you again in the future. Thank you once again, from all the Helio team.',
                'avatar' => 'richard-mifsud.png',
                'name' => 'Richard Mifsud',
                'designation' => 'Chief Executive Officer',
                'logo_src' => 'helio-tst.svg',
                'logo_alt' => 'Helio Gaming',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'slug' => 'oliver-marco-la-rosa',
                'description' => 'Now things have settled a little following last year’s Malta Blockchain Summit, I wanted to say thank you so much for an excellent job on our stand design and Build. We were very pleased, not least because we didn’t have to do a thing. This was our first collaboration, but certainly will not be the last, as our expectations were not only reached but exceeded.',
                'avatar' => 'oliver-marco-la-rosa.png',
                'name' => 'Oliver Marco La Rosa',
                'designation' => 'Chief Executive Officer',
                'logo_src' => 'globiance-tst.svg',
                'logo_alt' => 'Globiance',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Testimonial::insert($data);
    }
}
