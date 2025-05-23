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

            'footer.event_venue' => [
                'en' => 'Event Venue',
                'ru' => 'Место проведения',
                'uz' => 'Tadbir joyi',
            ],
            'footer.send_email' => [
                'en' => 'Send Email',
                'ru' => 'Отправить письмо',
                'uz' => 'Elektron pochta yuboring',
            ],
            'footer.call_emergency' => [
                'en' => 'Call Emergency',
                'ru' => 'Экстренный вызов',
                'uz' => 'Favqulodda qo‘ng‘iroq',
            ],
            'footer.find_events' => [
                'en' => 'Find Events',
                'ru' => 'Найти мероприятия',
                'uz' => 'Tadbirlarni topish',
            ],
            'footer.outdoor_concerts' => [
                'en' => 'Outdoor Concerts',
                'ru' => 'Открытые концерты',
                'uz' => 'Tashqi konsertlar',
            ],
            'footer.indoor_concerts' => [
                'en' => 'Indoor Concerts',
                'ru' => 'Закрытые концерты',
                'uz' => 'Ichki konsertlar',
            ],
            'footer.festivals' => [
                'en' => 'Festivals',
                'ru' => 'Фестивали',
                'uz' => 'Festivallar',
            ],
            'footer.concerts' => [
                'en' => 'Concerts',
                'ru' => 'Концерты',
                'uz' => 'Konsertlar',
            ],
            'footer.event_calendar' => [
                'en' => 'Event Calendar',
                'ru' => 'Календарь событий',
                'uz' => 'Tadbirlar taqvimi',
            ],
            'footer.useful_links' => [
                'en' => 'Useful <span class="text-etBlue">Links</span>',
                'ru' => 'Полезные <span class="text-etBlue">Cсылки</span>',
                'uz' => 'Foydali <span class="text-etBlue">Havolalar</span>',
            ],
            'footer.login' => [
                'en' => 'Log In',
                'ru' => 'Войти',
                'uz' => 'Kirish',
            ],
            'footer.register' => [
                'en' => 'Register',
                'ru' => 'Регистрация',
                'uz' => 'Ro‘yxatdan o‘tish',
            ],
            'footer.about_eventek' => [
                'en' => 'About Eventek',
                'ru' => 'О Eventek',
                'uz' => 'Eventek haqida',
            ],
            'footer.how_it_works' => [
                'en' => 'How It Works',
                'ru' => 'Как это работает',
                'uz' => 'Bu qanday ishlaydi',
            ],
            'footer.upcoming_events' => [
                'en' => 'Upcoming <span class="text-etBlue">Events</span>',
                'ru' => 'Предстоящие <span class="text-etBlue">Мероприятия</span>',
                'uz' => 'Bo‘lajak <span class="text-etBlue">Tadbirlar</span>',
            ],
            'footer.meetup_title' => [
                'en' => 'Web Developer Meetup',
                'ru' => 'Встреча веб-разработчиков',
                'uz' => 'Web dasturchilar uchrashuvi',
            ],
            'footer.about' => [
                'en' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus sit amet magna elemen facilisis',
            ],
            'footer.location' => [
                'en' => '4648 Rocky Road Philadelphia PA, 1920',
            ],
            'footer.find_events_html' => [
                'en' => 'Find <span class="text-etBlue">Events</span>',
                'ru' => 'Поиск <span class="text-etBlue">Событий</span>',
                'uz' => 'Yangiliklarni <span class="text-etBlue">Toping</span>',
            ],
            'footer.reserved' => [
                'en' => '2024, Eventek All Rights Reserved.',
                'uz' => '2024, Eventek Barcha Huquqlar Himoyalangan.',
                'ru' => '2024, Eventek Все права защищены.',
            ],
        ];

        foreach ($translations as $key => $value) {
            Translation::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
