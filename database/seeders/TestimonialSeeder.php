<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'reviewer-1.png'
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "testimonial/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        Testimonial::create([
            'name' => 'David Anderson',
            'position' => 'Marketing Director',
            'company' => 'Kingosto Tech',
            'message' => 'Choosing eventek was one of the best decisions for our marketing strategy. They not only promised results but delivered them consistently.',
            'rating' => 5,
            'image' => 'testimonial/reviewer-1.png',
        ]);
    }
}
