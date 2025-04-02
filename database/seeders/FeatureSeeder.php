<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }
        Feature::create([
            'title' => 'Speaker Lineup',
            'description' => 'Mauris ultrices ligula eget volutpat aliquet nullam',
            'icon_path' => 'feature/feature-1.png',
        ]);
        Feature::create([
            'title' => 'Networking People',
            'description' => 'Mauris ultrices ligula eget volutpat aliquet nullam',
            'icon_path' => 'feature/feature-2.png',
        ]);
        Feature::create([
            'title' => 'Engaging Keynote',
            'description' => 'Mauris ultrices ligula eget volutpat aliquet nullam',
            'icon_path' => 'feature/feature-3.png',
        ]);
        Feature::create([
            'title' => 'Exhibition Space',
            'description' => 'Mauris ultrices ligula eget volutpat aliquet nullam',
            'icon_path' => 'feature/feature-4.png',
        ]);
    }
}
