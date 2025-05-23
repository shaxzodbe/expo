<header class="et-header to-be-fixed py-[30px] xxs:py-[20px] fixed top-0 w-full px-[155px] xxxl:px-[100px] xxl:px-[40px] xs:px-[20px] z-50">
    <div class="flex justify-between items-center">
        <!-- logo -->
        <div class="logo shrink-0">
            <a href="{{ url('/') }}">
                <img style="width: 15vw;" src="assets/img/logo_new.png" alt="logo">
            </a>
        </div>

        <div class="et-header-right flex items-center gap-[60px] xl:gap-[30px]">
            <div class="to-go-to-sidebar-in-mobile flex md:flex-col md:items-start items-center gap-[100px] xl:gap-[30px] md:gap-y-[15px]">
                <!-- nav -->
                <ul class="et-header-nav flex md:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                    <li class="has-sub-menu relative">
                        <a role="button">{{ translation('header.home') }}</a>

                        <ul class="et-header-submenu">
                            <li><a href="{{ url('/') }}">{{ translation('header.home') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.home.2') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.home.3') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.home.4') }}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/') }}">{{ translation('header.about_us') }}</a></li>
                    <li class="has-sub-menu relative">
                        <a role="button">Events</a>

                        <ul class="et-header-submenu">
                            <li><a href="{{ url('/') }}">{{ translation('header.all_events') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.events_details') }}</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">{{ translation('header.details') }}</a>

                        <ul class="et-header-submenu">
                            <li><a href="{{ url('/') }}">{{ translation('header.pricing_plan') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.gallery') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.faq') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.sponsors') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.venue') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.error_404') }}</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">{{ translation('header.team') }}</a>

                        <ul class="et-header-submenu">
                            <li><a href="{{ url('/') }}">{{ translation('header.team_members') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.team_details') }}</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">{{ translation('header.news') }}</a>

                        <ul class="et-header-submenu">
                            <li><a href="{{ url('/') }}">{{ translation('header.all_news') }}</a></li>
                            <li><a href="{{ url('/') }}">{{ translation('header.news_details') }}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/') }}">{{ translation('header.contact') }}</a></li>
                </ul>

                <!-- button -->
                <a href="{{ url('/') }}" class="et-btn bg-white flex items-center justify-center gap-x-[15px] h-[50px] px-[15px] text-etBlue font-medium text-[17px] rounded-full group">
                        <span class="icon">
                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.02101 0H0.844661C0.378197 0 0 0.378144 0 0.844662V5.12625C0 5.59277 0.378197 5.97091 0.844661 5.97091C1.96347 5.97091 2.8737 6.88114 2.8737 8C2.8737 9.11886 1.96347 10.029 0.844661 10.029C0.378197 10.029 0 10.4071 0 10.8736V15.1553C0 15.6218 0.378197 15.9999 0.844661 15.9999H8.02101V0Z" class="fill-etBlue group-hover:fill-white transition" />
                                <path d="M26.0001 5.97091C26.4665 5.97091 26.8447 5.59277 26.8447 5.12625V0.844662C26.8447 0.378144 26.4665 0 26.0001 0H9.71094V16H26.0001C26.4665 16 26.8447 15.6219 26.8447 15.1553V10.8737C26.8447 10.4072 26.4665 10.029 26.0001 10.029C24.8813 10.029 23.971 9.11886 23.971 8C23.971 6.88114 24.8813 5.97091 26.0001 5.97091Z" class="fill-etBlue group-hover:fill-white transition" />
                            </svg>
                        </span>
                    Get Tickets
                </a>

                <div class="language-switcher flex gap-2 items-center">
                    @foreach (['en' => 'EN', 'ru' => 'RU', 'uz' => 'UZ'] as $localeCode => $label)
                        <a href="{{ route('change.lang', $localeCode) }}"
                           class="text-sm px-2 py-1 rounded {{ app()->getLocale() === $localeCode ? 'bg-etBlue text-white' : 'text-etBlue hover:underline' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- mobile menu button -->
            <button type="button" class="et-mobile-menu-open-btn hidden md:inline-block bg-etBlue rounded-full w-[50px] aspect-square text-white text-[18px] hover:bg-etBlue"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
