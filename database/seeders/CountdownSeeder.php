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
            'title'       => 'Count Every Second Until Event.',
            'button_text' => 'Buy Ticket',
            'button_link' => '#',
            'event_time'  => Carbon::now()->addDays(15),
        ]);
    }
}
