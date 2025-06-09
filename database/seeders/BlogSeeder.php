<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            'evenet-sched-1.jpg',
            'evenet-sched-2.jpg',
            'evenet-sched-3.jpg',
        ];

        foreach ($files as $file) {
            $sourcePath = public_path("assets/img/{$file}");
            $destinationPath = "blog/{$file}";

            if (File::exists($sourcePath) && ! Storage::exists($destinationPath)) {
                Storage::disk('public')->put($destinationPath, File::get($sourcePath));
                dump("Copied: {$sourcePath} -> storage/app/public/{$destinationPath}");
            }
        }

        $blogs = [
            [
                'title' => [
                    'en' => 'Latest News About Technology',
                    'ru' => 'Последние новости о технологиях',
                    'uz' => 'Texnologiya haqida so\'nggi yangiliklar',
                ],
                'content' => [
                    'en' => 'This is the latest post about technology.',
                    'ru' => 'Это последний пост о технологиях.',
                    'uz' => 'Bu texnologiya haqida so\'nggi post.',
                ],
                'author' => 'John Doe',
                'comments_count' => 3,
                'image_url' => 'blog/evenet-sched-1.jpg',
                'published_date' => Carbon::now(),
                'status' => 'published',
            ],
            [
                'title' => [
                    'en' => 'New Trends in Web Development',
                    'ru' => 'Новые тенденции в веб-разработке',
                    'uz' => 'Veb rivojlanishda yangi tendentsiyalar',
                ],
                'content' => [
                    'en' => 'This post discusses the latest trends in web development.',
                    'ru' => 'Этот пост обсуждает последние тенденции в веб-разработке.',
                    'uz' => 'Ushbu post veb rivojlanishidagi so\'nggi tendensiyalarni muhokama qiladi.',
                ],
                'author' => 'Jane Smith',
                'comments_count' => 5,
                'image_url' => 'blog/evenet-sched-2.jpg',
                'published_date' => Carbon::now(),
                'status' => 'published',
            ],
            [
                'title' => [
                    'en' => 'New Trends in Web Development',
                    'ru' => 'Новые тенденции в веб-разработке',
                    'uz' => 'Veb rivojlanishda yangi tendentsiyalar',
                ],
                'content' => [
                    'en' => 'This post discusses the latest trends in web development.',
                    'ru' => 'Этот пост обсуждает последние тенденции в веб-разработке.',
                    'uz' => 'Ushbu post veb rivojlanishidagi so\'nggi tendensiyalarni muhokama qiladi.',
                ],
                'author' => 'Jane Smith',
                'comments_count' => 5,
                'image_url' => 'blog/evenet-sched-3.jpg',
                'published_date' => Carbon::now(),
                'status' => 'published',
            ],
        ];

        // Insert blogs into the database
        foreach ($blogs as $blogData) {
            Blog::create([
                'title' => $blogData['title'],
                'content' => $blogData['content'],
                'author' => $blogData['author'],
                'comments_count' => $blogData['comments_count'],
                'image_url' => $blogData['image_url'],
                'published_date' => $blogData['published_date'],
                'status' => $blogData['status'],
            ]);
        }
    }
}
