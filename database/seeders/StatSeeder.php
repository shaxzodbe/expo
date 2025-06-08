<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'title' => [
                    'en' => 'Visionary Speaker',
                    'ru' => 'Визионерский спикер',
                    'uz' => 'Zamonaviy spikerlar',
                ],
                'value' => '25+',
            ],
            [
                'title' => [
                    'en' => 'Workshop We Offer',
                    'ru' => 'Мы предлагаем воркшопы',
                    'uz' => 'Taklif etilgan seminarlar',
                ],
                'value' => '50+',
            ],
            [
                'title' => [
                    'en' => 'Event Participants',
                    'ru' => 'Участников мероприятия',
                    'uz' => 'Tadbir ishtirokchilari',
                ],
                'value' => '70k+',
            ],
        ];
        
        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
}
