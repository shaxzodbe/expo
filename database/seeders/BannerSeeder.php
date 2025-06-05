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
            'title' => [
                'en' => 'Business Expo 2024',
                'ru' => 'Бизнес Экспо 2024',
                'uz' => 'Biznes Expo 2024',
            ],
            'subtitle' => [
                'en' => 'Big Conference & Workshop',
                'ru' => 'Большая конференция и семинар',
                'uz' => 'Katta konferensiya va seminar',
            ],
            'image' => 'assets/img/banner-bg-1.jpg',
            'video_url' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s',
            'button_text' => [
                'en' => 'Register Now',
                'ru' => 'Зарегистрироваться',
                'uz' => 'Roʻyxatdan oʻting',
            ],
            'button_link' => 'contact.html',
            'button_text_secondary' => [
                'en' => 'View More',
                'ru' => 'Подробнее',
                'uz' => 'Batafsil',
            ],
            'button_link_secondary' => '#',
        ]);
    }
}
