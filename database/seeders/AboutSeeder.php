<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'about-img.jpg',
            'about-img-3.jpg',
            'about-img-vector-1.png',
            'about-img-vector-2.png',
            'about-img-vector-3.png',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "about/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        About::create([
            'title' => 'Know More About The Eventek',
            'subtitle' => 'About Eventek',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                              alteration in some form, by injected humour, or randomised words which don\'t look even slightly
                              believable.',
            'main_image' => 'about/about-img.jpg',
            'floating_image' => 'about/about-img-3.jpg',
            'video_link' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s'
        ]);
    }
}
