<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            'header.home' => [
                'en' => 'Home',
                'ru' => 'Главная',
                'uz' => 'Bosh sahifa',
            ],
            'header.home.2' => [
                'en' => 'Home Variant 2',
                'ru' => 'Главная Вариант 2',
                'uz' => 'Bosh sahifa 2',
            ],
            'header.home.3' => [
                'en' => 'Home Variant 3',
                'ru' => 'Главная Вариант 3',
                'uz' => 'Bosh sahifa 3',
            ],
            'header.home.4' => [
                'en' => 'Home Variant 4',
                'ru' => 'Главная Вариант 4',
                'uz' => 'Bosh sahifa 4',
            ],
            'header.about_us' => [
                'en' => 'About Us',
                'ru' => 'О нас',
                'uz' => 'Biz haqimizda',
            ],
            'header.all_events' => [
                'en' => 'All Events',
                'ru' => 'Все события',
                'uz' => 'Barcha tadbirlar',
            ],
            'header.events_details' => [
                'en' => 'Events Details',
                'ru' => 'Детали события',
                'uz' => 'Tadbir tafsilotlari',
            ],
            'header.details' => [
                'en' => 'Details',
                'ru' => 'Детали',
                'uz' => 'Tafsilotlar',
            ],
            'header.pricing_plan' => [
                'en' => 'Pricing Plan',
                'ru' => 'План цен',
                'uz' => 'Narx rejasi',
            ],
            'header.gallery' => [
                'en' => 'Gallery',
                'ru' => 'Галерея',
                'uz' => 'Galereya',
            ],
            'header.faq' => [
                'en' => 'FAQ',
                'ru' => 'Часто задаваемые вопросы',
                'uz' => 'Ko‘p so‘raladigan savollar',
            ],
            'header.sponsors' => [
                'en' => 'Sponsors',
                'ru' => 'Спонсоры',
                'uz' => 'Homiylar',
            ],
            'header.venue' => [
                'en' => 'Venue',
                'ru' => 'Место проведения',
                'uz' => 'Joylashuv',
            ],
            'header.error_404' => [
                'en' => 'Error 404',
                'ru' => 'Ошибка 404',
                'uz' => '404 xato',
            ],
            'header.team' => [
                'en' => 'Team',
                'ru' => 'Команда',
                'uz' => 'Jamoa',
            ],
            'header.team_members' => [
                'en' => 'Team Members',
                'ru' => 'Члены команды',
                'uz' => 'Jamoa a’zolari',
            ],
            'header.team_details' => [
                'en' => 'Team Details',
                'ru' => 'Детали команды',
                'uz' => 'Jamoa tafsilotlari',
            ],
            'header.news' => [
                'en' => 'News',
                'ru' => 'Новости',
                'uz' => 'Yangiliklar',
            ],
            'header.all_news' => [
                'en' => 'All News',
                'ru' => 'Все новости',
                'uz' => 'Barcha yangiliklar',
            ],
            'header.news_details' => [
                'en' => 'News Details',
                'ru' => 'Детали новости',
                'uz' => 'Yangilik tafsilotlari',
            ],
            'header.contact' => [
                'en' => 'Contact',
                'ru' => 'Контакты',
                'uz' => 'Aloqa',
            ],
        ];

        foreach ($translations as $key => $value) {
            Translation::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
