<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*$this->call(CategorySeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(TestimonialsSeeder::class);
        $this->call(TestimonialEvent::class);
        $this->call(EventGallery::class);
        $this->call(EventThumbsSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(EventServiceSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(PagesMetaSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ProcessSeeder::class);
        $this->call(EventLogoSeeder::class);
        $this->call(ClientsTableSeeder::class);*/

        $users = [
            [
                'name' => 'HroWeb',
                'email' => 'hrant@ipoint.com.mt',
                'password' => 'Ri*xU68H6`$H',
            ],
            [
                'name' => 'AnaDev',
                'email' => 'anahit@ipoint.com.mt',
                'password' => 'PWOan866L+8_',
            ],
            [
                'name' => 'Andy',
                'email' => 'andy@ipoint.com.mt',
                'password' => '90~.}5/3Pq~H',
            ],
            [
                'name' => 'Teodora',
                'email' => 'teodora@ipoint.com.mt',
                'password' => '1s1WD*!"H15-',
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                User::factory()->raw([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'password' => bcrypt($userData['password']),
                ])
            );
        }
    }
}
