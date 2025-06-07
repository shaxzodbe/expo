<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'feature-1.png',
            'feature-2.png',
            'feature-3.png',
            'feature-4.png',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "feature/{$file}";

            if (File::exists($sourcePath) && ! Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }
        $features = [
            [
                'title' => [
                    'en' => 'Speaker Lineup',
                    'ru' => 'Состав спикеров',
                    'uz' => 'Spikerlar tarkibi',
                ],
                'description' => [
                    'en' => 'Meet industry-leading speakers sharing key insights.',
                    'ru' => 'Встречайте ведущих экспертов, делящихся опытом.',
                    'uz' => 'Soha yetakchi spikerlari bilan tanishing.',
                ],
                'icon_path' => 'feature/feature-1.png',
            ],
            [
                'title' => [
                    'en' => 'Networking People',
                    'ru' => 'Нетворкинг участников',
                    'uz' => 'Ishtirokchilar bilan tarmoq tuzish',
                ],
                'description' => [
                    'en' => 'Connect with professionals and grow your network.',
                    'ru' => 'Знакомьтесь с профессионалами и расширяйте круг общения.',
                    'uz' => 'Mutaxassislar bilan tanishing va aloqalarni kengaytiring.',
                ],
                'icon_path' => 'feature/feature-2.png',
            ],
            [
                'title' => [
                    'en' => 'Engaging Keynote',
                    'ru' => 'Захватывающее выступление',
                    'uz' => 'Qiziqarli asosiy ma’ruza',
                ],
                'description' => [
                    'en' => 'Enjoy thought-provoking keynote presentations.',
                    'ru' => 'Наслаждайтесь вдохновляющими выступлениями.',
                    'uz' => 'Ilhomlantiruvchi asosiy maʼruzalardan bahramand bo‘ling.',
                ],
                'icon_path' => 'feature/feature-3.png',
            ],
            [
                'title' => [
                    'en' => 'Exhibition Space',
                    'ru' => 'Выставочное пространство',
                    'uz' => 'Ko‘rgazma maydoni',
                ],
                'description' => [
                    'en' => 'Explore innovative booths and partner exhibits.',
                    'ru' => 'Исследуйте инновационные стенды и выставки партнёров.',
                    'uz' => 'Innovatsion stendlar va ko‘rgazmalarni ko‘rib chiqing.',
                ],
                'icon_path' => 'feature/feature-4.png',
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
