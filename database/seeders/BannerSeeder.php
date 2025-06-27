<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'banner-bg-1.jpg',
        ];
        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "banner/{$file}";

            if (File::exists($sourcePath) && ! Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            } else {
                if (! File::exists($sourcePath)) {
                    dump("Source file not found: {$sourcePath}");
                }
                if (Storage::disk('public')->exists($destinationPath)) {
                    dump("Destination file already exists, skipping: storage/app/public/{$destinationPath}");
                }
            }
        }
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
            'image' => 'banner/banner-bg-1.jpg',
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
