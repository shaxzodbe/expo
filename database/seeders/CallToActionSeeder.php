<?php

namespace Database\Seeders;

use App\Models\CallToAction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CallToActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'assets/img/cta-venue-img.jpg' => 'assets/img/cta-bg-1.jpg',
            'assets/img/cta-img.jpg' => 'assets/img/cta-bg-2.jpg',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "cta/{$file}";

            if (File::exists($sourcePath) && ! Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        CallToAction::create([
            'subtitle' => [
                'en' => 'Event Venue Map',
                'ru' => 'Карта места проведения',
                'uz' => 'Tadbir joyi xaritasi',
            ],
            'title' => [
                'en' => 'Get Direction To The Event Venue',
                'ru' => 'Получите маршрут до места проведения',
                'uz' => 'Tadbir joyiga yo‘nalishni oling',
            ],
            'description' => [
                'en' => null,
                'ru' => null,
                'uz' => null,
            ],
            'button_text' => [
                'en' => 'Get Direction',
                'ru' => 'Проложить маршрут',
                'uz' => 'Yo‘nalishni ko‘rish',
            ],
            'button_url' => '#',
            'image' => 'assets/img/cta-venue-img.jpg',
            'background_image' => 'assets/img/cta-bg-1.jpg',
            'type' => 'map',
            'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.7865598218705!2d90.41595849268677!3d23.822393686713387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7305eea2015%3A0x8805755fb04e861c!2sKuril%20Flyover!5e0!3m2!1sen!2sbd!4v1713418656214!5m2!1sen!2sbd',
        ]);

        CallToAction::create([
            'subtitle' => [
                'en' => 'Build Your Career',
                'ru' => 'Построй свою карьеру',
                'uz' => 'Karyerangizni rivojlantiring',
            ],
            'title' => [
                'en' => 'Get Join Our Event',
                'ru' => 'Присоединяйтесь к нашему событию',
                'uz' => 'Tadbirimizga qo‘shiling',
            ],
            'description' => [
                'en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration...',
                'ru' => 'Существует множество вариантов Lorem Ipsum, но большинство из них были изменены...',
                'uz' => 'Lorem Ipsum parchalari ko‘plab variantlarda mavjud, ammo ularning aksariyati o‘zgartirilgan...',
            ],
            'button_text' => [
                'en' => 'Get Tickets Now',
                'ru' => 'Купить билеты',
                'uz' => 'Chiptalarni hoziroq oling',
            ],
            'button_url' => '#',
            'image' => 'assets/img/cta-img.jpg',
            'background_image' => 'assets/img/cta-bg-2.jpg',
            'type' => 'join',
            'map_embed_url' => null,
        ]);
    }
}
