<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Meet and Greet for Ideas',
                'description' => 'An initial, non-committal meeting is arranged to understand your needs and preferences.',
                'main_photo' => 'meeting-icon.png',
                'hover_photo' => 'meeting-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Tailored Quotation',
                'description' => 'We provide a tailored quotation based on our thorough discussion of your requirements.',
                'main_photo' => 'quotation-icon.png',
                'hover_photo' => 'quotation-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Heavy Brainstorming Session',
                'description' => 'A brainstorming session takes place at our studio where we come up with ideas!',
                'main_photo' => 'brainstorming-icon.png',
                'hover_photo' => 'brainstorming-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Infinite Ideas Unleashed',
                'description' => 'We present to you our ideas and will not stop until you are happy!',
                'main_photo' => 'concept-icon.png',
                'hover_photo' => 'concept-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Construction Begins',
                'description' => 'We will schedule stand construction with our trusted, experienced suppliers.',
                'main_photo' => 'construction-icon.png',
                'hover_photo' => 'construction-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'A Spectacular Exhibition',
                'description' => 'We stay with you every step of the way, ensuring you have an impactful and lasting success.',
                'main_photo' => 'quality-icon.png',
                'hover_photo' => 'quality-icon-hover.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Process::insert($data);
    }
}
