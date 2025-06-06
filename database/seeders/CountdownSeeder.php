<?php

namespace Database\Seeders;

use App\Models\Countdown;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countdown::create([
            'title' => [
                'en' => 'Count Every Second Until Event.',
                'ru' => 'Считай каждую секунду до начала события.',
                'uz' => 'Tadbir boshlanishigacha har soniyani sanang.',
            ],
            'button_text' => [
                'en' => 'Buy Ticket',
                'ru' => 'Купить билет',
                'uz' => 'Chipta xarid qilish',
            ],
            'button_link' => '#',
            'event_time' => Carbon::now()->addDays(15),
        ]);
    }
}
