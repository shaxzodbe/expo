<?php

namespace Database\Seeders;

use App\Models\EventSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'evenet-sched-1.jpg',
            'evenet-sched-2.jpg',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "event/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        EventSchedule::create([
            'title' => 'Siempre Son Flores',
            'image' => 'event/evenet-sched-1.jpg',
            'date' => Carbon::parse('2024-01-24'),
            'start_time' => '10:00:00',
            'end_time' => '14:00:00',
            'location' => '135 W, 46nd Street, New York',
            'description' => 'Musica Cubana Salsa Jazz adipi scing elit.',
        ]);

        EventSchedule::create([
            'title' => 'Jazz Night Live',
            'image' => 'event/evenet-sched-2.jpg',
            'date' => Carbon::parse('2024-01-25'),
            'start_time' => '18:00:00',
            'end_time' => '22:00:00',
            'location' => 'Grand Hall, NY',
            'description' => 'A night of mesmerizing jazz performances.',
        ]);
    }
}
