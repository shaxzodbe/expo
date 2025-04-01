<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Know More About The Eventek',
            'subtitle' => 'About Eventek',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                              alteration in some form, by injected humour, or randomised words which don\'t look even slightly
                              believable.',
            'main_image' => 'assets/img/about-img.jpg',
            'floating_image' => 'assets/img/about-img-3.jpg',
            'video_link' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s',
            'vector_1' => 'assets/img/about-img-vector-1.png',
            'vector_2' => 'assets/img/about-img-vector-2.png',
            'vector_3' => 'assets/img/about-img-vector-3.png',
        ]);
    }
}
