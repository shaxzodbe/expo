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

        About::create([
            'title' => [
                'en' => 'Know More About The Eventek',
                'ru' => 'Узнайте больше о Eventek',
                'uz' => 'Eventek haqida ko‘proq bilib oling',
            ],
            'subtitle' => [
                'en' => 'About Eventek',
                'ru' => 'О Eventek',
                'uz' => 'Eventek haqida',
            ],
            'description' => [
                'en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                'ru' => 'Существует множество вариантов Lorem Ipsum, но большинство из них были изменены в той или иной форме, с добавлением юмора или случайных слов, которые не выглядят правдоподобно.',
                'uz' => 'Lorem Ipsum parchalari ko‘plab variantlarda mavjud, lekin ularning aksariyati hazil yoki tasodifiy so‘zlar qo‘shilishi orqali qandaydir tarzda o‘zgartirilgan.',
            ],
            'main_image' => 'about/about-img.jpg',
            'floating_image' => 'about/about-img-3.jpg',
            'video_link' => 'https://www.youtube.com/watch?v=AQleI8oFqZo&t=1s',
            'conference_title' => [
                'en' => 'International Tech Conference 2025',
                'ru' => 'Международная технологическая конференция 2025',
                'uz' => 'Xalqaro Texnologiya Konferensiyasi 2025',
            ],
            'conference_description' => [
                'en' => 'Join experts from around the world to discuss the future of technology, innovation, and global collaboration.',
                'ru' => 'Присоединяйтесь к экспертам со всего мира, чтобы обсудить будущее технологий, инноваций и глобального сотрудничества.',
                'uz' => 'Texnologiya, innovatsiyalar va global hamkorlikning kelajagini muhokama qilish uchun butun dunyo bo‘ylab mutaxassislar bilan birga bo‘ling.',
            ],
        ]);
    }
}
