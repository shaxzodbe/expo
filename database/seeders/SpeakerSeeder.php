<?php

namespace Database\Seeders;

use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'speaker-1.jpg',
            'speaker-2.jpg',
            'speaker-3.jpg',
            'speaker-4.jpg',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "speaker/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        Speaker::create([
            'name' => 'Esther Howard',
            'title' => 'Music Speaker',
            'image' => 'speaker/speaker-1.jpg',
            'facebook' => 'https://facebook.com/estherhoward',
            'instagram' => 'https://instagram.com/estherhoward',
            'twitter' => 'https://twitter.com/estherhoward',
            'pinterest' => 'https://pinterest.com/estherhoward',
        ]);
        Speaker::create([
            'name' => 'Esther Howard',
            'title' => 'Music Speaker',
            'image' => 'speaker/speaker-2.jpg',
            'facebook' => 'https://facebook.com/estherhoward',
            'instagram' => 'https://instagram.com/estherhoward',
            'twitter' => 'https://twitter.com/estherhoward',
            'pinterest' => 'https://pinterest.com/estherhoward',
        ]);
        Speaker::create([
            'name' => 'Esther Howard',
            'title' => 'Music Speaker',
            'image' => 'speaker/speaker-3.jpg',
            'facebook' => 'https://facebook.com/estherhoward',
            'instagram' => 'https://instagram.com/estherhoward',
            'twitter' => 'https://twitter.com/estherhoward',
            'pinterest' => 'https://pinterest.com/estherhoward',
        ]);
    }
}
