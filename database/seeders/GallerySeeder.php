<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'gallery-img-1.jpg',
            'gallery-img-2.jpg',
            'gallery-img-3.jpg',
            'gallery-img-4.jpg',
            'gallery-img-5.jpg',
            'gallery-img-6.jpg',
            'gallery-img-7.jpg',
            'gallery-text-bg.jpg'
        ];

        foreach ($files as $i => $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "gallery/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                if ($i !== 7) {
                    Gallery::create([
                        'image_path' => "gallery/$file",
                        'alt_text' => 'Gallery image ' . ($i + 1),
                        'position' => $i + 1,
                    ]);
                }

                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        Gallery::create([
            'image_path' => 'gallery/gallery-text-bg.jpg',
            'alt_text' => 'Event Gallery Background',
            'position' => 8,
        ]);
    }
}
