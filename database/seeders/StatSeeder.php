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
        Stat::create(['title' => 'Visionary Speaker', 'value' => '25+']);
        Stat::create(['title' => 'Workshop We Offer', 'value' => '50+']);
        Stat::create(['title' => 'Event Participants', 'value' => '70k+']);
    }
}
