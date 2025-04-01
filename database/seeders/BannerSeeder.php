<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Business Expo 2024',
            'subtitle' => 'Big Conference & Workshop',
            'image' => 'assets/img/banner-bg-1.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s',
            'button_text' => 'Register Now',
            'button_link' => 'contact.html',
            'button_text_secondary' => 'View More',
            'button_link_secondary' => '#',
        ]);

        Banner::create([
            'title' => 'Tech Summit 2024',
            'subtitle' => 'Innovation & Future',
            'image' => 'assets/img/banner-bg-2.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s',
            'button_text' => 'Get Tickets',
            'button_link' => 'tickets.html',
            'button_text_secondary' => 'Learn More',
            'button_link_secondary' => '#',
        ]);
    }
}
