<?php

namespace Database\Seeders;

use App\Models\TicketPricing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TicketPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'pricing-bg.jpg',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "pricing/{$file}";

            if (File::exists($sourcePath) && !Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        TicketPricing::insert([
            [
                'name' => 'Standard',
                'description' => '<li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>',
                'price' => 499.000,
                'image' => 'pricing/pricing-bg.jpg',
                'currency' => 'UZS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VIP',
                'description' => '<li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>',
                'price' => 149.000,
                'image' => 'pricing/pricing-bg.jpg',
                'currency' => 'UZS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Backstage Pass',
                'description' => '<li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>',
                'price' => 249.000,
                'image' => 'pricing/pricing-bg.jpg',
                'currency' => 'UZS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
