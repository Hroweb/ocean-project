<?php

namespace Database\Seeders;

use App\Models\Dashboard\Pages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Home',
                'slug'  => 'home',
                'location' => 'both',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'About Us',
                'slug'  => 'about-us',
                'location' => 'both',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Services',
                'slug'  => 'services',
                'location' => 'both',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Portfolio',
                'slug'  => 'portfolio',
                'location' => 'both',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Contact Us',
                'slug'  => 'contact-us',
                'location' => 'both',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Blog',
                'slug'  => 'blog',
                'location' => 'inner',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'Privacy Policy',
                'slug'  => 'privacy-policy',
                'location' => 'footer',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'Cookie Policy',
                'slug'  => 'cookie-policy',
                'location' => 'footer',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'Terms and Conditions',
                'slug'  => 'terms-and-conditions',
                'location' => 'footer',
                'content' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Pages::insert($data);
    }
}
