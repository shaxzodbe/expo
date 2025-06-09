@php use App\Models\EventSchedule; @endphp
@extends('layouts.app')

@section('content')
    <!-- BANNER SECTION START -->
    <x-banner :slides="$banners" />
    <!-- BANNER SECTION END -->


    <!-- ABOUT SECTION START -->
    @php
        $about = \App\Models\About::first();
    @endphp
    @if($about)
    <section class="et-about pt-[60px] pb-[130px] xl:pb-[80px] md:pb-[60px] overflow-hidden relative">
        <div
            class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <div
                class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[40px] lg:justify-center">
                <!-- left -->
                <div
                    class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] xxs:ml-[47px]">
                    <img src="{{ Storage::url($about->main_image) }}" alt="image" class="shrink-0 rounded-[10px]"/>
                    <img src="{{ Storage::url($about->floating_image) }}" alt="image"
                         class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden"/>

                    <!-- vectors -->
                    <div class="et-about-vectors xs:hidden">
                        <img src="{{ asset('assets/img/about-img-vector-1.png') }}" alt="vector"
                             class="et-about-vector-1 absolute -left-[47px] top-[20px] -z-[1]"/>
                        <img src="{{ asset('assets/img/about-img-vector-2.png') }}" alt="vector"
                             class="et-about-vector-2 absolute -left-[27px] top-[41px] -z-[1]"/>
                        <img src="{{ asset('assets/img/about-img-vector-3.png') }}" alt="vector"
                             class="et-about-vector absolute -right-[24px] bottom-[34px] -z-[1]"/>
                    </div>

                    <!-- video btn -->
                    <div
                        class="absolute bottom-[50px] -left-[47px] lg:-left-[27px] md:-left-[47px] w-[180px] lg:w-[160px] aspect-square bg-[url('../assets/img/about-video-btn-bg.jpg')] text-center text-[22px] text-white z-[1] flex items-center justify-center before:absolute before:bg-etBlue/80 before:-z-[1] before:inset-0 after:bg-etBlack after:w-[47px] after:h-[30px] after:absolute after:top-[100%] after:left-0 after:-z-[2] after:skew-y-[30deg] after:-translate-y-[17px]">
                        <a href="{{ $about->video_link }}" data-fslightbox="about-video"
                           class="w-[107px] aspect-square rounded-full border border-white/20 flex justify-center items-center text-etBlue relative z-[1] text-[18px] before:absolute before:w-[56px] before:h-[56px] before:bg-white before:rounded-full before:-z-[1] hover:text-black"><i
                                class="fa-solid fa-play"></i></a>
                    </div>
                </div>

                <!-- right -->
                <div class="et-about__txt">
                    <h6 class="et-section-sub-title anim-text">{{ $about->subtitle }}</h6>
                    <h2 class="et-section-title mb-[24px] md:mb-[19px] anim-text">{{ $about->title }}</h2>

                    <p class="mb-[30px] text-[16px] font-light text-etGray md:mb-[30px] rev-slide-up">
                        {{ $about->description }}
                    </p>

                    <div
                        class="flex xxs:flex-wrap items-center gap-[20px] pt-[30px] border-t border-[#D9D9D9] mb-[50px] xxs:mb-[30px] rev-slide-up">
                        <div
                            class="shrink-0 h-[80px] w-[80px] rounded-[6px] shadow-[0_4px_50px_10px_rgba(18,96,254,0.10)] flex items-center justify-center">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6038_295)">
                                    <path
                                        d="M35.4168 33.3346H28.4501C27.7601 33.3346 27.2001 32.7746 27.2001 32.0846C27.2001 31.3946 27.7601 30.8346 28.4501 30.8346H34.5401L36.9651 24.168H3.03343L5.45843 30.8346H11.5501C12.2401 30.8346 12.8001 31.3946 12.8001 32.0846C12.8001 32.7746 12.2401 33.3346 11.5501 33.3346H4.58343C4.05843 33.3346 3.58843 33.0063 3.40843 32.5113L0.0751012 23.3446C-0.0632322 22.9613 -0.00823216 22.5346 0.226768 22.1996C0.460101 21.8663 0.841768 21.668 1.2501 21.668H38.7501C39.1584 21.668 39.5401 21.8663 39.7734 22.2013C40.0084 22.5346 40.0634 22.963 39.9251 23.3463L36.5918 32.513C36.4118 33.0063 35.9418 33.3346 35.4168 33.3346Z"
                                        fill="#1260FE"/>
                                    <path
                                        d="M27.0849 40.0013C27.0216 40.0013 26.9583 39.9963 26.8933 39.9863C26.2116 39.8813 25.7433 39.243 25.8483 38.5613L27.2933 29.168H12.7066L14.1516 38.5613C14.2566 39.2446 13.7883 39.8813 13.1066 39.9863C12.4249 40.098 11.7849 39.6246 11.6816 38.9413L10.0149 28.108C9.95994 27.748 10.0633 27.3796 10.3016 27.103C10.5399 26.8263 10.8849 26.668 11.2499 26.668H28.7499C29.1149 26.668 29.4616 26.828 29.6983 27.1046C29.9349 27.3813 30.0399 27.748 29.9849 28.1096L28.3183 38.943C28.2249 39.5596 27.6916 40.0013 27.0849 40.0013Z"
                                        fill="#1260FE"/>
                                    <path
                                        d="M37.5 23.7498C36.81 23.7498 36.25 23.1898 36.25 22.4998C36.25 19.2015 34.4866 16.0798 31.6483 14.3515C31.0583 13.9915 30.8716 13.2232 31.2316 12.6332C31.5916 12.0432 32.36 11.8565 32.95 12.2165C36.5266 14.3965 38.7483 18.3365 38.7483 22.4998C38.75 23.1898 38.19 23.7498 37.5 23.7498Z"
                                        fill="#1260FE"/>
                                    <path
                                        d="M30.8333 15C32.214 15 33.3333 13.8807 33.3333 12.5C33.3333 11.1193 32.214 10 30.8333 10C29.4525 10 28.3333 11.1193 28.3333 12.5C28.3333 13.8807 29.4525 15 30.8333 15Z"
                                        fill="#1260FE"/>
                                    <path
                                        d="M19.9999 13.3333C16.3233 13.3333 13.3333 10.3433 13.3333 6.66667C13.3333 2.99 16.3233 0 19.9999 0C23.6766 0 26.6666 2.99 26.6666 6.66667C26.6666 10.3433 23.6766 13.3333 19.9999 13.3333ZM19.9999 2.5C17.7016 2.5 15.8333 4.37 15.8333 6.66667C15.8333 8.96333 17.7016 10.8333 19.9999 10.8333C22.2983 10.8333 24.1666 8.96333 24.1666 6.66667C24.1666 4.37 22.2983 2.5 19.9999 2.5Z"
                                        fill="#1260FE"/>
                                    <path
                                        d="M32.5 24.1667C31.81 24.1667 31.25 23.6067 31.25 22.9167C31.25 19.93 28.82 17.5 25.8333 17.5H14.1667C11.18 17.5 8.75 19.93 8.75 22.9167C8.75 23.6067 8.19 24.1667 7.5 24.1667C6.81 24.1667 6.25 23.6067 6.25 22.9167C6.25 18.5517 9.80167 15 14.1667 15H25.8333C30.1983 15 33.75 18.5517 33.75 22.9167C33.75 23.6067 33.19 24.1667 32.5 24.1667Z"
                                        fill="#1260FE"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_6038_295">
                                        <rect width="40" height="40" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <!-- txt -->
                        <div>
                            <h6 class="font-medium text-[18px] text-black mb-[8px]">{{ $about->conference_title }}</h6>
                            <p class="text-[16px] font-light text-etGray">{{ $about->conference_description }}</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[16px] rev-slide-up">
                        <a href="{{ url('/') }}"
                           class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full hover:!bg-black hover:!text-white">Register
                            Now</a>

                        <div class="flex items-center gap-[10px]">
                            <div class="flex *:-ml-[20px]">
                                <img src="assets/img/reviewer-1.png" alt="Person"
                                     class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <img src="assets/img/reviewer-2.png" alt="Person"
                                     class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <img src="assets/img/reviewer-3.png" alt="Person"
                                     class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0">
                                <div
                                    class="w-[60px] h-[60px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]">
                                    25+
                                </div>
                            </div>
                            <span class="uppercase font-semibold text-etBlue text-[16px]">Speakers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div class="xs:hidden">
            <img src="assets/img/about-vector-1.png" alt="vector"
                 class="pointer-events-none absolute top-[340px] left-[90px] -z-[1]">
            <img src="assets/img/about-vector-2.png" alt="vector"
                 class="pointer-events-none absolute top-[153px] right-0 -z-[1]">
        </div>
    </section>
    @endif
    <!-- ABOUT SECTION END -->


    <!-- COUNTDOWN SECTION START -->
    @php
        $countdown = \App\Models\Countdown::first();
    @endphp
    <div
        class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up relative z-[2]">
        <div
            class="bg-etBlue relative z-[1] p-[60px] sm:p-[40px] xs:px-[20px] rounded-[20px] overflow-hidden -mb-[114px] shadow-[0_4px_50px_rgba(18,96,254,0.2)] after:absolute after:inset-0 after:-z-[1] after:bg-[url(../assets/img/et-counter-bg.jpg)] after:bg-cover after:bg-no-repeat after:mix-blend-screen flex items-center md:flex-wrap gap-y-[20px]">
            <div class="pr-[54px] border-r md:border-r-0 border-white/20 md:text-center md:pr-0 md:w-full">
                <h2 class="et-section-title !text-white mb-[28px] anim-text">{{ $countdown->title ?? 'Count Every Second Until Event' }}</h2>
                <a href="{{ $countdown->button_link ?? '#' }}"
                   class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full border-white border hover:!bg-white hover:!text-etBlue">
                    {{ $countdown->button_text ?? 'Buy Ticket' }}
                </a>
            </div>

            <!-- counter -->
            <div
                class="et-countdown flex sm:flex-wrap justify-center gap-y-[10px] md:w-full *:border-r *:sm:border-r-0 *:border-white/20 *:px-[46px] *:sm:px-[26px] *:xs:px-[16px] font-medium text-white text-[16px] text-center">
                <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                    <span class="days number block"></span>
                    <span>Days</span>
                </div>

                <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                    <span class="hours number block"></span>
                    <span>Hours</span>
                </div>

                <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                    <span class="minutes number block"></span>
                    <span>Minutes</span>
                </div>

                <div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
                    <span class="seconds number block"></span>
                    <span>Seconds</span>
                </div>
            </div>

            <!-- vectors -->
            <div class="sm:hidden">
                <img src="{{ asset('assets/img/counter-vector.png') }}" alt="vector"
                     class="pointer-events-none absolute top-[26px] left-[53%]">
                <img src="{{ asset('assets/img/counter-vector.png') }}" alt="vector"
                     class="pointer-events-none absolute bottom-[33px] right-[90px]">
            </div>
        </div>
    </div>
    <!-- COUNTDOWN SECTION END -->


    <!-- FEATURES SECTION STAR -->
    @php
        $features = \App\Models\Feature::orderBy('created_at', 'desc')->take(4)->get();;
    @endphp
    @if($features)
    <div
        class="bg-[#EEF4FF] relative z-[1] after:absolute after:inset-0 after:bg-[url(../assets/img/features-bg.png)] after:bg-no-repeat after:bg-cover after:-z-[2] after:mix-blend-multiply after:pointer-events-none pb-[130px] xl:pb-[80px] md:pb-[60px] pt-[244px] xl:pt-[194px] md:pt-[174px]">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
            <!-- heading -->
            <div class="text-center mb-[52px]">
                <h6 class="et-section-sub-title anim-text">Event Features</h6>
                <h2 class="et-section-title anim-text">Unifying For A Better World</h2>
            </div>

            <!-- cards -->
            <div class="grid grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                @foreach($features as $feature)
                <!-- single card -->
                <div class="rounded-[20px] bg-white overflow-hidden group">
                    <!-- icon -->
                    <div
                        class="w-[146px] aspect-square border-[20px] bg-etBlue border-[#EDF3FE] rounded-full rounded-tr-none ml-auto flex items-center justify-center">
                        <img src="{{ asset('storage/' . $feature->icon_path) }}" alt="Feature icon"
                             class="transition duration-[0.4s] group-hover:-scale-x-100">
                    </div>

                    <!-- text -->
                    <div class="px-[30px] xxl:px-[20px] py-[23px] xxl:py-[18px]">
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">{{ $feature->title }}</a></h5>
                        <p class="font-light text-etGray text-[16px]">{{ $feature->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- vectors -->
        <div class="md:hidden">
            <img src="assets/img/features-vector-1.png" alt="vector"
                 class="pointer-events-none absolute bottom-[130px] left-[40px] -z-[1]">
            <img src="{{ asset('assets/img/features-vector-2.png') }}" alt="vector"
                 class="pointer-events-none absolute top-[222px] right-[180px] -z-[1]">
            <img src="{{ asset('assets/img/features-vector-3.png') }}" alt="vector"
                 class="pointer-events-none absolute bottom-[138px] right-[106px] -z-[1]">
        </div>
    </div>
    @endif
    <!-- FEATURES SECTION end -->


    <!-- EVENT SCHEDULE SECTION START -->
    @php
        $events = \App\Models\EventSchedule::orderBy('created_at', 'desc')->take(3)->get();
    @endphp
    @if($events)
    <section class="et-schedules py-[130px] xl:py-[80px] md:py-[60px]">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
            <!-- heading -->
            <div
                class="et-schedule-heading flex sm:flex-col justify-between items-center pb-[31px] mb-[40px] gap-[15px] border-b border-[#D9D9D9]">
                <div class="left xs:text-center max-w-[50%] sm:max-w-full">
                    <h6 class="et-section-sub-title anim-text">Event Timetable</h6>
                    <h2 class="et-section-title anim-text">Information Of Event Schedule</h2>
                </div>

                <div class="right">
                    <div
                        class="et-schedules-tab-navs bg-[#EDF3FE] px-[12px] py-[14px] flex flex-w gap-[16px] sm:gap-[12px] rounded-full">
                        <button data-tab="tab1"
                                class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue active">
                            Day 01
                        </button>

                        <button data-tab="tab2"
                                class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">
                            Day 02
                        </button>

                        <button data-tab="tab3"
                                class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">
                            Day 03
                        </button>
                    </div>
                </div>
            </div>

            <!-- events -->
            <div class="et-schedules-tab-container">
                <div id="tab1" class="et-tab active">
                    <div class="all-scheduled-events space-y-[30px]">
                        @foreach($events as $event)
                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">{{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">{{ $event->start_time }} AM - {{ $event->end_time }} PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ route('event.details', ['event' => $event->id]) }}" class="hover:text-etBlue">{{ $event->title }}</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">{{ $event->location }}</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ route('event.details', ['event' => $event->id]) }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="{{ asset('assets/img/reviewer-1.png') }}" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="{{ asset('assets/img/reviewer-2.png') }}" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="{{ asset('assets/img/reviewer-3.png') }}" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-3.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="tab2" class="et-tab">
                    <div class="all-scheduled-events space-y-[30px]">
                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-3.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-1.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>

                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab3" class="et-tab">
                    <div class="all-scheduled-events space-y-[30px]">
                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-3.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>

                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-1.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>

                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single schedule -->
                        <div
                            class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
                            <!-- img -->
                            <div
                                class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
                                <img src="assets/img/evenet-sched-2.jpg" alt="scehduled-event-cover"></div>

                            <!-- text -->
                            <div
                                class="px-[37px] sm:px-[22px] py-[30px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] w-full rounded-[20px] flex gap-y-[15px] xs:flex-col items-center xs:items-start">
                                <div
                                    class="et-schedule__heading pr-[40px] sm:pr-[25px] xs:pr-0 mr-[40px] sm:mr-[25px] xs:mr-0 border-r xs:border-r-0 border-[#d9d9d9]">
                                    <!-- date & time -->
                                    <div
                                        class="et-schedule-date-time border border-[rgba(217,217,217,0.89)] py-[7px] px-[15px] rounded-full inline-flex xxs:w-full items-center justify-center gap-x-[24px] gap-y-[10px] mb-[10px] xxs:border-0 xxs:p-0 xxs:justify-start">
                                        <div class="date flex items-center gap-[10px]">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2043_1443)">
                                                            <path
                                                                d="M14.125 1.75H13.375V0.5H12.125V1.75H3.875V0.5H2.625V1.75H1.875C0.841125 1.75 0 2.59113 0 3.625V14.625C0 15.6589 0.841125 16.5 1.875 16.5H14.125C15.1589 16.5 16 15.6589 16 14.625V3.625C16 2.59113 15.1589 1.75 14.125 1.75ZM14.75 14.625C14.75 14.9696 14.4696 15.25 14.125 15.25H1.875C1.53038 15.25 1.25 14.9696 1.25 14.625V6.375H14.75V14.625ZM14.75 5.125H1.25V3.625C1.25 3.28038 1.53038 3 1.875 3H2.625V4.25H3.875V3H12.125V4.25H13.375V3H14.125C14.4696 3 14.75 3.28038 14.75 3.625V5.125Z"
                                                                fill="var(--et-blue)"/>
                                                            <path d="M3.625 7.6875H2.375V8.9375H3.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 7.6875H4.875V8.9375H6.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 7.6875H7.375V8.9375H8.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 7.6875H9.875V8.9375H11.125V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 7.6875H12.375V8.9375H13.625V7.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 10.1875H2.375V11.4375H3.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 10.1875H4.875V11.4375H6.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 10.1875H7.375V11.4375H8.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 10.1875H9.875V11.4375H11.125V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M3.625 12.6875H2.375V13.9375H3.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M6.125 12.6875H4.875V13.9375H6.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M8.625 12.6875H7.375V13.9375H8.625V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M11.125 12.6875H9.875V13.9375H11.125V12.6875Z"
                                                                  fill="var(--et-blue)"/>
                                                            <path d="M13.625 10.1875H12.375V11.4375H13.625V10.1875Z"
                                                                  fill="var(--et-blue)"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2043_1443">
                                                                <rect width="16" height="16" fill="white"
                                                                      transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">24, Jan - 2024</span>
                                        </div>

                                        <div class="time flex items-center gap-[10px] xxs:hidden">
                                                <span class="icon">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.8505 9.91291L8.61967 8.23979V4.8316C8.61967 4.48891 8.34266 4.21191 7.99998 4.21191C7.65729 4.21191 7.38029 4.48891 7.38029 4.8316V8.54966C7.38029 8.74485 7.47201 8.92892 7.62817 9.04541L10.1069 10.9044C10.2138 10.985 10.3441 11.0285 10.478 11.0284C10.667 11.0284 10.8529 10.9435 10.9744 10.7799C11.1802 10.5066 11.1244 10.118 10.8505 9.91291Z"
                                                            fill="var(--et-blue)"/>
                                                        <path
                                                            d="M8 0.5C3.58853 0.5 0 4.08853 0 8.5C0 12.9115 3.58853 16.5 8 16.5C12.4115 16.5 16 12.9115 16 8.5C16 4.08853 12.4115 0.5 8 0.5ZM8 15.2607C4.27266 15.2607 1.23934 12.2273 1.23934 8.5C1.23934 4.77266 4.27266 1.73934 8 1.73934C11.728 1.73934 14.7607 4.77266 14.7607 8.5C14.7607 12.2273 11.7273 15.2607 8 15.2607Z"
                                                            fill="var(--et-blue)"/>
                                                    </svg>
                                                </span>

                                            <span class="text-etGray font-normal text-[16px]">10:00 AM – 2.00 PM</span>
                                        </div>
                                    </div>

                                    <!-- title -->
                                    <h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
                                        <a href="{{ url('/') }}" class="hover:text-etBlue">Siempre Son Flores"
                                            Musica Cubana Salsa Jazz adipi scing elit. Nullam</a></h3>

                                    <!-- location -->
                                    <div class="et-schedule-loaction flex items-center gap-[12px]">
                                            <span class="icon">
                                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.99998 0C2.80482 0 0.205383 2.59944 0.205383 5.79456C0.205383 9.75981 5.39098 15.581 5.61176 15.8269C5.81913 16.0579 6.1812 16.0575 6.3882 15.8269C6.60898 15.581 11.7946 9.75981 11.7946 5.79456C11.7945 2.59944 9.1951 0 5.99998 0ZM5.99998 8.70997C4.39241 8.70997 3.0846 7.40212 3.0846 5.79456C3.0846 4.187 4.39245 2.87919 5.99998 2.87919C7.60751 2.87919 8.91532 4.18703 8.91532 5.79459C8.91532 7.40216 7.60751 8.70997 5.99998 8.70997Z"
                                                        fill="var(--et-blue)"/>
                                                </svg>
                                            </span>
                                        <h6 class="text-[16px] text-etGray">135 W, 46nd Street, New York</h6>
                                    </div>
                                </div>

                                <div
                                    class="flex shrink-0 xxl:flex-col flex-wrap items-center xxl:items-start gap-x-[30px] gap-y-[16px]">
                                    <a href="{{ url('/') }}"
                                       class="et-btn border border-etBlue text-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] font-normal text-[17px] rounded-full hover:!bg-etBlue hover:!text-white">Buy
                                        Tickets</a>
                                    <div class="flex items-center">
                                        <div class="flex *:-ml-[20px]">
                                            <img src="assets/img/reviewer-1.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-2.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <img src="assets/img/reviewer-3.png" alt="Person"
                                                 class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
                                            <div
                                                class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
                                        </div>
                                        <span class="font-semibold text-etBlue text-[16px] -ml-[29px]"><span
                                                class="text-white">Spe</span>akers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endif
    <!-- EVENT SCHEDULE SECTION END -->


    <!-- STATS SECTION START -->
    <section
        class="text-center py-[130px] xl:py-[80px] md:py-[60px] bg-[url(../assets/img/stats-bg.jpg)] bg-no-repeat bg-cover relative z-[1] before:absolute before:inset-0 before:bg-etBlue/85 before:-z-[1]">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
            <div
                class="flex xs:flex-col gap-x-[77px] sm:gap-x-[57px] gap-y-[15px] justify-center border-b border-white/20 pb-[35px]">
                <!-- single stat -->
                <div class="et-single-stat text-white">
                    <h5 class="number font-semibold text-[55px]">50+</h5>
                    <h6 class="font-medium text-[16px]">Workshop We Offer</h6>
                </div>
                <!-- single stat -->
                <div class="et-single-stat text-white">
                    <h5 class="number font-semibold text-[55px]">25+</h5>
                    <h6 class="font-medium text-[16px]">Visionary Speaker</h6>
                </div>
                <!-- single stat -->
                <div class="et-single-stat text-white">
                    <h5 class="number font-semibold text-[55px]">70k+</h5>
                    <h6 class="font-medium text-[16px]">Event Participants</h6>
                </div>
            </div>

            <h2 class="et-section-title anim-text !text-white text-center max-w-[55%] md:max-w-[65%] sm:max-w-full mx-auto mt-[30px] mb-[40px]">
                Never Miss Another Speaker Announcement</h2>

            <a href="{{ url('/') }}"
               class="bg-white inline-flex items-center gap-[12px] rounded-full text-etBlue h-[54px] px-[15px] text-[17px] group hover:bg-etBlue hover:text-white">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.1023 17.6473C13.0496 17.6473 12.9979 17.6511 12.9471 17.6578C12.4966 16.1361 11.1883 14.9794 9.5848 14.7503V13.6641H8.41524V14.7503C6.81011 14.9796 5.50077 16.1384 5.05156 17.6624C4.99031 17.6526 4.92753 17.6473 4.86351 17.6473C4.21347 17.6473 3.68652 18.1742 3.68652 18.8242C3.68652 19.4742 4.21347 20.0012 4.86351 20.0012C5.4544 20.0012 5.94345 19.5657 6.0276 18.9982C6.04471 18.9433 6.05393 18.8848 6.05393 18.8242C6.05393 17.3999 7.06993 16.2086 8.41524 15.9366V17.791C8.04998 17.9908 7.80223 18.3786 7.80223 18.8242C7.80223 19.4742 8.32918 20.0012 8.97918 20.0012C9.62922 20.0012 10.1562 19.4742 10.1562 18.8242C10.1562 18.3957 9.92708 18.0208 9.5848 17.815V15.9366C10.8716 16.1968 11.8565 17.2982 11.9398 18.6401C11.9303 18.7001 11.9253 18.7616 11.9253 18.8243C11.9253 19.4743 12.4523 20.0012 13.1023 20.0012C13.7523 20.0012 14.2793 19.4743 14.2793 18.8243C14.2793 18.1743 13.7523 17.6473 13.1023 17.6473Z"
                                class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"/>
                            <path
                                d="M17.2036 6.2168H15.6151C15.2921 6.2168 15.0303 6.47861 15.0303 6.8016V8.5676C15.0303 9.11044 14.5882 9.55211 14.0447 9.55211H13.9074C13.9062 9.55211 13.9051 9.55227 13.904 9.55227V9.55211H4.09592V9.55227C4.09478 9.55227 4.09365 9.55211 4.09252 9.55211H4.07443C3.53096 9.55211 3.08883 9.11044 3.08883 8.5676V6.8016C3.08883 6.47861 2.82701 6.2168 2.50403 6.2168H0.796348C0.47336 6.2168 0.211548 6.47861 0.211548 6.8016C0.211548 7.12458 0.47336 7.3864 0.796348 7.3864H1.91927V8.5676C1.91927 9.75536 2.88608 10.7217 4.07443 10.7217H4.09252C4.09369 10.7217 4.09478 10.7216 4.09592 10.7216V10.9282C4.09592 11.7911 4.79553 12.4908 5.65851 12.4908H12.3414C13.2044 12.4908 13.904 11.7911 13.904 10.9282V10.7216C13.9051 10.7216 13.9063 10.7217 13.9074 10.7217H14.0447C15.2331 10.7217 16.1999 9.7554 16.1999 8.5676V7.3864H17.2036C17.5265 7.3864 17.7884 7.12458 17.7884 6.8016C17.7884 6.47865 17.5265 6.2168 17.2036 6.2168Z"
                                class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"/>
                            <path
                                d="M13.1157 2.14739C13.1157 0.963338 12.1524 0 10.9683 0H7.03167C5.84758 0 4.88428 0.963299 4.88428 2.14739V8.38037H13.1157V2.14739Z"
                                class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"/>
                        </svg>
                    </span>
                <span>Register Now</span>
            </a>
        </div>

        <!-- vectors -->
        <div>
            <img src="assets/img/stats-vector-1.png" alt="vector"
                 class="pointer-events-none absolute top-[150px] left-[105px] -z-[1] md:hidden">
            <img src="assets/img/stats-vector-2.png" alt="vector"
                 class="pointer-events-none absolute bottom-[63px] left-[63px] -z-[1] w-[80px] aspect-square opacity-10">
            <img src="assets/img/stats-vector-2.png" alt="vector"
                 class="pointer-events-none absolute top-[80px] right-[70px] -z-[1] opacity-10">
            <img src="assets/img/stats-vector-3.png" alt="vector"
                 class="pointer-events-none absolute bottom-[112px] right-[80px] -z-[1]">
        </div>
    </section>
    <!-- STATS SECTION END -->


    <!-- SPEAKERS SECTION START -->
    <section class="et-speakers py-[130px] lg:py-[80px] md:py-[60px] relative overflow-hidden">
        <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
            <!-- heading -->
            <div
                class="et-speakers-heading flex xs:flex-col justify-between items-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
                <div class="left xs:text-center">
                    <h6 class="et-section-sub-title anim-text">{{ translation('event.speakers') }}</h6>
                    <h2 class="et-section-title anim-text">{{ translation('event.meet') }}</h2>
                </div>

                <div class="right">
                    <div class="et-speakers-slider-nav flex gap-[16px] sm:gap-[12px]">
                        <button
                            class="prev border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button
                            class="next border border-[#D9D9D9] rounded-full w-[60px] sm:w-[50px] h-[60px] sm:h-[50px] text-[18px] text-etBlack hover:bg-etBlue hover:border-etbg-etBlue hover:text-white">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- slider -->
            <div class="et-speakers-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single speaker -->
                    <div class="swiper-slide">
                        <div class="et-speaker bg-white rounded-[16px] relative z-[1] group">
                            <div
                                class="et-speaker-img overflow-hidden before:absolute before:inset-0 before:bg-gradient-to-t before:from-etBlue before:to-transparent before:opacity-0 before:transition before:duration-[400ms] before:z-[1] group-hover:before:opacity-100">
                                <img src="assets/img/speaker-1.jpg" alt="speaker image"
                                     class="mx-auto w-full transition duration-[400ms">
                            </div>

                            <!-- socials -->
                            <div
                                class="et-speaker-socials bg-[#E7EFFF] w-[55px] py-[15px] text-center rounded-full absolute z-[2] -left-[10px] -top-[10px] flex flex-col justify-center text-[20px] text-etGray2 gap-[10px] border-[10px] border-white box-content">
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>

                            <div
                                class="et-speaker-txt text-center absolute z-[1] bottom-0 pb-[24px] w-full text-white translate-y-full group-hover:translate-y-0 transition duration-[400ms]">
                                <h4 class="et-speaker-name font-medium text-[24px] mb-[3px]"><a
                                        href="{{ url('/') }}" class="hover:text-black">Esther Howard</a></h4>
                                <h6 class="et-speaker-label font-normal text-[16px]">Music speaker</h6>
                            </div>
                        </div>
                    </div>

                    <!-- single speaker -->
                    <div class="swiper-slide">
                        <div class="et-speaker bg-white rounded-[16px] relative group">
                            <div
                                class="et-speaker-img before:absolute before:inset-0 before:bg-gradient-to-t before:from-etBlue before:to-transparent before:opacity-0 before:transition before:duration-[400ms] before:z-[1] group-hover:before:opacity-100">
                                <img src="assets/img/speaker-2.jpg" alt="speaker image"
                                     class="mx-auto w-full transition duration-[400ms]">
                            </div>

                            <!-- socials -->
                            <div
                                class="et-speaker-socials bg-[#E7EFFF] w-[55px] py-[15px] text-center rounded-full absolute z-[2] -left-[10px] -top-[10px] flex flex-col justify-center text-[20px] text-etGray2 gap-[10px] border-[10px] border-white box-content">
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>

                            <div
                                class="et-speaker-txt text-center absolute bottom-0 pb-[24px] w-full text-white translate-y-full group-hover:translate-y-0 transition duration-[400ms]">
                                <h4 class="et-speaker-name font-medium text-[24px] mb-[3px]"><a
                                        href="{{ url('/') }}" class="hover:text-black">Esther Howard</a></h4>
                                <h6 class="et-speaker-label font-normal text-[16px]">Music speaker</h6>
                            </div>
                        </div>
                    </div>

                    <!-- single speaker -->
                    <div class="swiper-slide">
                        <div class="et-speaker bg-white rounded-[16px] relative group">
                            <div
                                class="et-speaker-img before:absolute before:inset-0 before:bg-gradient-to-t before:from-etBlue before:to-transparent before:opacity-0 before:transition before:duration-[400ms] before:z-[1] group-hover:before:opacity-100">
                                <img src="assets/img/speaker-3.jpg" alt="speaker image"
                                     class="mx-auto w-full transition duration-[400ms]">
                            </div>

                            <!-- socials -->
                            <div
                                class="et-speaker-socials bg-[#E7EFFF] w-[55px] py-[15px] text-center rounded-full absolute z-[2] -left-[10px] -top-[10px] flex flex-col justify-center text-[20px] text-etGray2 gap-[10px] border-[10px] border-white box-content">
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>

                            <div
                                class="et-speaker-txt text-center absolute bottom-0 pb-[24px] w-full text-white translate-y-full group-hover:translate-y-0 transition duration-[400ms]">
                                <h4 class="et-speaker-name font-medium text-[24px] mb-[3px]"><a
                                        href="{{ url('/') }}" class="hover:text-black">Esther Howard</a></h4>
                                <h6 class="et-speaker-label font-normal text-[16px]">Music speaker</h6>
                            </div>
                        </div>
                    </div>

                    <!-- single speaker -->
                    <div class="swiper-slide">
                        <div class="et-speaker bg-white rounded-[16px] relative group">
                            <div
                                class="et-speaker-img before:absolute before:inset-0 before:bg-gradient-to-t before:from-etBlue before:to-transparent before:opacity-0 before:transition before:duration-[400ms] before:z-[1] group-hover:before:opacity-100">
                                <img src="assets/img/speaker-1.jpg" alt="speaker image"
                                     class="mx-auto w-full transition duration-[400ms]">
                            </div>

                            <!-- socials -->
                            <div
                                class="et-speaker-socials bg-[#E7EFFF] w-[55px] py-[15px] text-center rounded-full absolute z-[2] -left-[10px] -top-[10px] flex flex-col justify-center text-[20px] text-etGray2 gap-[10px] border-[10px] border-white box-content">
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="hover:text-etBlue"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>

                            <div
                                class="et-speaker-txt text-center absolute bottom-0 pb-[24px] w-full text-white translate-y-full group-hover:translate-y-0 transition duration-[400ms]">
                                <h4 class="et-speaker-name font-medium text-[24px] mb-[3px]"><a
                                        href="{{ url('/') }}" class="hover:text-black">Esther Howard</a></h4>
                                <h6 class="et-speaker-label font-normal text-[16px]">Music speaker</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SPEAKERS SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <section
        class="et-testimonial bg-[#EEF4FF] relative z-[1] overflow-hidden py-[130px] lg:py-[80px] md:py-[60px] before:absolute before:inset-0 before:-z-[1] before:bg-[url('../assets/img/testimonial-bg.png')] before:bg-no-repeat before:bg-cover before:mix-blend-multiply before:opacity-[0.03] px-[12px]">
        <!-- <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full"> -->
        <!-- slider -->
        <div class="et-testimonial-slider swiper overflow-visible">
            <div class="swiper-wrapper">
                <!-- single testimony  -->
                <div class="swiper-slide even:mt-[80px] xs:even:mt-0">
                    <div
                        class="et-testimony p-[40px] lg:p-[30px] md:p-[20px] border border-[#256E56]/10 bg-white rounded-[16px]">
                        <div class="ml-auto w-max max-w-full">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89997 20.8595C7.91 23.3494 6.35003 25.8094 4.26501 28.1795C3.60501 28.9295 3.51501 30.0094 4.055 30.8494C4.47504 31.5094 5.16498 31.8694 5.91498 31.8694C6.125 31.8694 6.33503 31.8545 6.54504 31.7794C10.955 30.4894 21.26 25.9145 21.545 11.2444C21.65 5.58947 17.51 0.72949 12.125 0.17449C9.14001 -0.125525 6.17004 0.849416 3.965 2.82943C1.76004 4.82446 0.5 7.67449 0.5 10.6445C0.5 15.5944 4.01004 19.9295 8.89997 20.8595Z"
                                    class="fill-etBlue"/>
                                <path
                                    d="M36.065 0.17449C33.095 -0.125525 30.125 0.849416 27.92 2.82943C25.715 4.82446 24.455 7.67449 24.455 10.6445C24.455 15.5944 27.965 19.9295 32.855 20.8595C31.865 23.3494 30.305 25.8094 28.22 28.1795C27.56 28.9295 27.47 30.0094 28.01 30.8494C28.43 31.5094 29.12 31.8694 29.87 31.8694C30.08 31.8694 30.29 31.8545 30.5 31.7794C34.91 30.4894 45.215 25.9144 45.5 11.2444V11.0345C45.5 5.46944 41.405 0.72949 36.065 0.17449Z"
                                    class="fill-etBlue"/>
                            </svg>
                        </div>

                        <!-- rating stars -->
                        <div class="flex gap-[9px] text-[#FFC532] text-[18px] mb-[12px]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                        <h6 class="text-[18px] mb-[16px]">Eventek Special Event on Business</h6>

                        <p class="text-etBlack/70 font-normal text-[16px] mb-[40px]">"Choosing eventek was one of the
                            best decisions for our marketing strategy. They not only promised results but delivered them
                            consistently. Trustworthy, reliable, and results-oriented. We're grateful for their
                            strategic insights and seamless execution.</p>

                        <!-- single testimonay bottom -->
                        <div class="flex items-center gap-x-[16px] xxs:flex-col xxs:items-start gap-y-[10px">
                            <div class="img rounded-full overflow-hidden p-[7px] w-max max-w-full shrink-0">
                                <img src="assets/img/reviewer-1.png" alt="reviewer image" class="w-[48px] h-[48px]">
                            </div>

                            <div class="txt">
                                <h5 class="text-etBlack font-normal text-[18px] mb-[3px]">David Anderson</h5>
                                <h6 class="text-etGray/70 font-normal text-[16px]">Marketing Director, Kingosto
                                    Tech</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single testimony  -->
                <div class="swiper-slide even:mt-[80px] xs:even:mt-0">
                    <div
                        class="et-testimony p-[40px] lg:p-[30px] md:p-[20px] border border-[#256E56]/10 bg-white rounded-[16px]">
                        <div class="ml-auto w-max max-w-full">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89997 20.8595C7.91 23.3494 6.35003 25.8094 4.26501 28.1795C3.60501 28.9295 3.51501 30.0094 4.055 30.8494C4.47504 31.5094 5.16498 31.8694 5.91498 31.8694C6.125 31.8694 6.33503 31.8545 6.54504 31.7794C10.955 30.4894 21.26 25.9145 21.545 11.2444C21.65 5.58947 17.51 0.72949 12.125 0.17449C9.14001 -0.125525 6.17004 0.849416 3.965 2.82943C1.76004 4.82446 0.5 7.67449 0.5 10.6445C0.5 15.5944 4.01004 19.9295 8.89997 20.8595Z"
                                    class="fill-etBlue"/>
                                <path
                                    d="M36.065 0.17449C33.095 -0.125525 30.125 0.849416 27.92 2.82943C25.715 4.82446 24.455 7.67449 24.455 10.6445C24.455 15.5944 27.965 19.9295 32.855 20.8595C31.865 23.3494 30.305 25.8094 28.22 28.1795C27.56 28.9295 27.47 30.0094 28.01 30.8494C28.43 31.5094 29.12 31.8694 29.87 31.8694C30.08 31.8694 30.29 31.8545 30.5 31.7794C34.91 30.4894 45.215 25.9144 45.5 11.2444V11.0345C45.5 5.46944 41.405 0.72949 36.065 0.17449Z"
                                    class="fill-etBlue"/>
                            </svg>
                        </div>

                        <!-- rating stars -->
                        <div class="flex gap-[9px] text-[#FFC532] text-[18px] mb-[12px]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                        <h6 class="text-[18px] mb-[16px]">Eventek Special Event on Business</h6>

                        <p class="text-etBlack/70 font-normal text-[16px] mb-[40px]">"Choosing eventek was one of the
                            best decisions for our marketing strategy. They not only promised results but delivered them
                            consistently. Trustworthy, reliable, and results-oriented. We're grateful for their
                            strategic insights and seamless execution.</p>

                        <!-- single testimonay bottom -->
                        <div class="flex items-center gap-x-[16px] xxs:flex-col xxs:items-start gap-y-[10px">
                            <div class="img rounded-full overflow-hidden p-[7px] w-max max-w-full shrink-0">
                                <img src="assets/img/reviewer-1.png" alt="reviewer image" class="w-[48px] h-[48px]">
                            </div>

                            <div class="txt">
                                <h5 class="text-etBlack font-normal text-[18px] mb-[3px]">David Anderson</h5>
                                <h6 class="text-etGray/70 font-normal text-[16px]">Marketing Director, Kingosto
                                    Tech</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single testimony  -->
                <div class="swiper-slide even:mt-[80px] xs:even:mt-0">
                    <div
                        class="et-testimony p-[40px] lg:p-[30px] md:p-[20px] border border-[#256E56]/10 bg-white rounded-[16px]">
                        <div class="ml-auto w-max max-w-full">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89997 20.8595C7.91 23.3494 6.35003 25.8094 4.26501 28.1795C3.60501 28.9295 3.51501 30.0094 4.055 30.8494C4.47504 31.5094 5.16498 31.8694 5.91498 31.8694C6.125 31.8694 6.33503 31.8545 6.54504 31.7794C10.955 30.4894 21.26 25.9145 21.545 11.2444C21.65 5.58947 17.51 0.72949 12.125 0.17449C9.14001 -0.125525 6.17004 0.849416 3.965 2.82943C1.76004 4.82446 0.5 7.67449 0.5 10.6445C0.5 15.5944 4.01004 19.9295 8.89997 20.8595Z"
                                    class="fill-etBlue"/>
                                <path
                                    d="M36.065 0.17449C33.095 -0.125525 30.125 0.849416 27.92 2.82943C25.715 4.82446 24.455 7.67449 24.455 10.6445C24.455 15.5944 27.965 19.9295 32.855 20.8595C31.865 23.3494 30.305 25.8094 28.22 28.1795C27.56 28.9295 27.47 30.0094 28.01 30.8494C28.43 31.5094 29.12 31.8694 29.87 31.8694C30.08 31.8694 30.29 31.8545 30.5 31.7794C34.91 30.4894 45.215 25.9144 45.5 11.2444V11.0345C45.5 5.46944 41.405 0.72949 36.065 0.17449Z"
                                    class="fill-etBlue"/>
                            </svg>
                        </div>

                        <!-- rating stars -->
                        <div class="flex gap-[9px] text-[#FFC532] text-[18px] mb-[12px]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                        <h6 class="text-[18px] mb-[16px]">Eventek Special Event on Business</h6>

                        <p class="text-etBlack/70 font-normal text-[16px] mb-[40px]">"Choosing eventek was one of the
                            best decisions for our marketing strategy. They not only promised results but delivered them
                            consistently. Trustworthy, reliable, and results-oriented. We're grateful for their
                            strategic insights and seamless execution.</p>

                        <!-- single testimonay bottom -->
                        <div class="flex items-center gap-x-[16px] xxs:flex-col xxs:items-start gap-y-[10px">
                            <div class="img rounded-full overflow-hidden p-[7px] w-max max-w-full shrink-0">
                                <img src="assets/img/reviewer-1.png" alt="reviewer image" class="w-[48px] h-[48px]">
                            </div>

                            <div class="txt">
                                <h5 class="text-etBlack font-normal text-[18px] mb-[3px]">David Anderson</h5>
                                <h6 class="text-etGray/70 font-normal text-[16px]">Marketing Director, Kingosto
                                    Tech</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single testimony  -->
                <div class="swiper-slide even:mt-[80px] xs:even:mt-0">
                    <div
                        class="et-testimony p-[40px] lg:p-[30px] md:p-[20px] border border-[#256E56]/10 bg-white rounded-[16px]">
                        <div class="ml-auto w-max max-w-full">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89997 20.8595C7.91 23.3494 6.35003 25.8094 4.26501 28.1795C3.60501 28.9295 3.51501 30.0094 4.055 30.8494C4.47504 31.5094 5.16498 31.8694 5.91498 31.8694C6.125 31.8694 6.33503 31.8545 6.54504 31.7794C10.955 30.4894 21.26 25.9145 21.545 11.2444C21.65 5.58947 17.51 0.72949 12.125 0.17449C9.14001 -0.125525 6.17004 0.849416 3.965 2.82943C1.76004 4.82446 0.5 7.67449 0.5 10.6445C0.5 15.5944 4.01004 19.9295 8.89997 20.8595Z"
                                    class="fill-etBlue"/>
                                <path
                                    d="M36.065 0.17449C33.095 -0.125525 30.125 0.849416 27.92 2.82943C25.715 4.82446 24.455 7.67449 24.455 10.6445C24.455 15.5944 27.965 19.9295 32.855 20.8595C31.865 23.3494 30.305 25.8094 28.22 28.1795C27.56 28.9295 27.47 30.0094 28.01 30.8494C28.43 31.5094 29.12 31.8694 29.87 31.8694C30.08 31.8694 30.29 31.8545 30.5 31.7794C34.91 30.4894 45.215 25.9144 45.5 11.2444V11.0345C45.5 5.46944 41.405 0.72949 36.065 0.17449Z"
                                    class="fill-etBlue"/>
                            </svg>
                        </div>

                        <!-- rating stars -->
                        <div class="flex gap-[9px] text-[#FFC532] text-[18px] mb-[12px]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                        <h6 class="text-[18px] mb-[16px]">Eventek Special Event on Business</h6>

                        <p class="text-etBlack/70 font-normal text-[16px] mb-[40px]">"Choosing eventek was one of the
                            best decisions for our marketing strategy. They not only promised results but delivered them
                            consistently. Trustworthy, reliable, and results-oriented. We're grateful for their
                            strategic insights and seamless execution.</p>

                        <!-- single testimonay bottom -->
                        <div class="flex items-center gap-x-[16px] xxs:flex-col xxs:items-start gap-y-[10px">
                            <div class="img rounded-full overflow-hidden p-[7px] w-max max-w-full shrink-0">
                                <img src="assets/img/reviewer-1.png" alt="reviewer image" class="w-[48px] h-[48px]">
                            </div>

                            <div class="txt">
                                <h5 class="text-etBlack font-normal text-[18px] mb-[3px]">David Anderson</h5>
                                <h6 class="text-etGray/70 font-normal text-[16px]">Marketing Director, Kingosto
                                    Tech</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single testimony  -->
                <div class="swiper-slide even:mt-[80px] xs:even:mt-0">
                    <div
                        class="et-testimony p-[40px] lg:p-[30px] md:p-[20px] border border-[#256E56]/10 bg-white rounded-[16px]">
                        <div class="ml-auto w-max max-w-full">
                            <svg width="46" height="32" viewBox="0 0 46 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89997 20.8595C7.91 23.3494 6.35003 25.8094 4.26501 28.1795C3.60501 28.9295 3.51501 30.0094 4.055 30.8494C4.47504 31.5094 5.16498 31.8694 5.91498 31.8694C6.125 31.8694 6.33503 31.8545 6.54504 31.7794C10.955 30.4894 21.26 25.9145 21.545 11.2444C21.65 5.58947 17.51 0.72949 12.125 0.17449C9.14001 -0.125525 6.17004 0.849416 3.965 2.82943C1.76004 4.82446 0.5 7.67449 0.5 10.6445C0.5 15.5944 4.01004 19.9295 8.89997 20.8595Z"
                                    class="fill-etBlue"/>
                                <path
                                    d="M36.065 0.17449C33.095 -0.125525 30.125 0.849416 27.92 2.82943C25.715 4.82446 24.455 7.67449 24.455 10.6445C24.455 15.5944 27.965 19.9295 32.855 20.8595C31.865 23.3494 30.305 25.8094 28.22 28.1795C27.56 28.9295 27.47 30.0094 28.01 30.8494C28.43 31.5094 29.12 31.8694 29.87 31.8694C30.08 31.8694 30.29 31.8545 30.5 31.7794C34.91 30.4894 45.215 25.9144 45.5 11.2444V11.0345C45.5 5.46944 41.405 0.72949 36.065 0.17449Z"
                                    class="fill-etBlue"/>
                            </svg>
                        </div>

                        <!-- rating stars -->
                        <div class="flex gap-[9px] text-[#FFC532] text-[18px] mb-[12px]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>

                        <h6 class="text-[18px] mb-[16px]">Eventek Special Event on Business</h6>

                        <p class="text-etBlack/70 font-normal text-[16px] mb-[40px]">"Choosing eventek was one of the
                            best decisions for our marketing strategy. They not only promised results but delivered them
                            consistently. Trustworthy, reliable, and results-oriented. We're grateful for their
                            strategic insights and seamless executx-ion.</p>

                        <!-- single testimonay bottom -->
                        <div class="flex items-center gap-[16px] xxs:flex-col xxs:items-start gap-y-[10px]">
                            <div class="img rounded-full overflow-hidden p-[7px] w-max max-w-full shrink-0">
                                <img src="assets/img/reviewer-1.png" alt="reviewer image" class="w-[48px] h-[48px]">
                            </div>

                            <div class="txt">
                                <h5 class="text-etBlack font-normal text-[18px] mb-[3px]">David Anderson</h5>
                                <h6 class="text-etGray/70 font-normal text-[16px]">Marketing Director, Kingosto
                                    Tech</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- TESTIMONIAL SECTION END -->


    <!-- PRICING SECTION START -->
    <section class="py-[130px] lg:py-[80px] md:py-[60px] relative z-[1]">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <!-- section heading -->
            <div class="text-center mb-[52px] xl:mb-[42px] md:mb-[32px]">
                <h6 class="et-section-sub-title anim-text">Pricing Table</h6>
                <h2 class="et-section-title anim-text">Choose Your Tickets</h2>
            </div>

            <!-- pricing -->
            <div class="grid grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-[30px] md:gap-[20px]">
                <!-- single pricing -->
                <div
                    class="bg-[url('../assets/img/pricing-bg.jpg')] rounded-[30px] overflow-hidden bg-no-repeat bg-cover bg-center relative z-[1] shadow-[0_4px_60px_rgba(18,96,254,0.12)] rev-slide-up before:absolute before:inset-0 before:bg-etBlue/85 before:-z-[1] text-center">
                    <div
                        class="mx-[56px] md:mx-[36px] bg-white rounded-br-[20px] rounded-bl-[20px] text-center py-[6px]">
                        <h5 class="font-normal text-[24px] md:text-[22px]">Basic Pass</h5>
                    </div>

                    <!-- price -->
                    <h4 class="font-semibold text-[45px] md:text-[40px] text-white mt-[10px] mb-[12px]">$39.00</h4>

                    <!-- features -->
                    <ul class="border-y border-dashed border-white/25 text-[16px] text-white font-normal py-[23px] space-y-[17px]">
                        <li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>
                    </ul>

                    <a href="#"
                       class="my-[30px] inline-flex items-center gap-[12px] rounded-full border border-white/20 text-white h-[54px] px-[15px] text-[17px] group hover:bg-white hover:border-white hover:text-etBlue">
                            <span class="icon">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.1023 17.6473C13.0496 17.6473 12.9979 17.6511 12.9471 17.6578C12.4966 16.1361 11.1883 14.9794 9.5848 14.7503V13.6641H8.41524V14.7503C6.81011 14.9796 5.50077 16.1384 5.05156 17.6624C4.99031 17.6526 4.92753 17.6473 4.86351 17.6473C4.21347 17.6473 3.68652 18.1742 3.68652 18.8242C3.68652 19.4742 4.21347 20.0012 4.86351 20.0012C5.4544 20.0012 5.94345 19.5657 6.0276 18.9982C6.04471 18.9433 6.05393 18.8848 6.05393 18.8242C6.05393 17.3999 7.06993 16.2086 8.41524 15.9366V17.791C8.04998 17.9908 7.80223 18.3786 7.80223 18.8242C7.80223 19.4742 8.32918 20.0012 8.97918 20.0012C9.62922 20.0012 10.1562 19.4742 10.1562 18.8242C10.1562 18.3957 9.92708 18.0208 9.5848 17.815V15.9366C10.8716 16.1968 11.8565 17.2982 11.9398 18.6401C11.9303 18.7001 11.9253 18.7616 11.9253 18.8243C11.9253 19.4743 12.4523 20.0012 13.1023 20.0012C13.7523 20.0012 14.2793 19.4743 14.2793 18.8243C14.2793 18.1743 13.7523 17.6473 13.1023 17.6473Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                    <path
                                        d="M17.2036 6.2168H15.6151C15.2921 6.2168 15.0303 6.47861 15.0303 6.8016V8.5676C15.0303 9.11044 14.5882 9.55211 14.0447 9.55211H13.9074C13.9062 9.55211 13.9051 9.55227 13.904 9.55227V9.55211H4.09592V9.55227C4.09478 9.55227 4.09365 9.55211 4.09252 9.55211H4.07443C3.53096 9.55211 3.08883 9.11044 3.08883 8.5676V6.8016C3.08883 6.47861 2.82701 6.2168 2.50403 6.2168H0.796348C0.47336 6.2168 0.211548 6.47861 0.211548 6.8016C0.211548 7.12458 0.47336 7.3864 0.796348 7.3864H1.91927V8.5676C1.91927 9.75536 2.88608 10.7217 4.07443 10.7217H4.09252C4.09369 10.7217 4.09478 10.7216 4.09592 10.7216V10.9282C4.09592 11.7911 4.79553 12.4908 5.65851 12.4908H12.3414C13.2044 12.4908 13.904 11.7911 13.904 10.9282V10.7216C13.9051 10.7216 13.9063 10.7217 13.9074 10.7217H14.0447C15.2331 10.7217 16.1999 9.7554 16.1999 8.5676V7.3864H17.2036C17.5265 7.3864 17.7884 7.12458 17.7884 6.8016C17.7884 6.47865 17.5265 6.2168 17.2036 6.2168Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                    <path
                                        d="M13.1157 2.14739C13.1157 0.963338 12.1524 0 10.9683 0H7.03167C5.84758 0 4.88428 0.963299 4.88428 2.14739V8.38037H13.1157V2.14739Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                </svg>
                            </span>
                        <span>Register Now</span>
                    </a>
                </div>

                <!-- single pricing -->
                <div
                    class="bg-[url('../assets/img/pricing-bg.jpg')] rounded-[30px] overflow-hidden bg-no-repeat bg-cover bg-center relative z-[1] shadow-[0_4px_60px_rgba(18,96,254,0.12)] rev-slide-up before:absolute before:inset-0 before:bg-etBlue/85 before:-z-[1] text-center">
                    <div
                        class="mx-[56px] md:mx-[36px] bg-[#FFC532] rounded-br-[20px] rounded-bl-[20px] text-center py-[6px]">
                        <h5 class="font-normal text-[24px] md:text-[22px]">Standard Pass</h5>
                    </div>

                    <!-- price -->
                    <h4 class="font-semibold text-[45px] md:text-[40px] text-white mt-[10px] mb-[12px]">$49.00</h4>

                    <!-- features -->
                    <ul class="border-y border-dashed border-white/25 text-[16px] text-white font-normal py-[23px] space-y-[17px]">
                        <li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>
                    </ul>

                    <a href="#"
                       class="bg-white my-[30px] inline-flex items-center gap-[12px] rounded-full text-etBlue h-[54px] px-[15px] text-[17px] group hover:bg-etBlue hover:text-white">
                            <span class="icon">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.1023 17.6473C13.0496 17.6473 12.9979 17.6511 12.9471 17.6578C12.4966 16.1361 11.1883 14.9794 9.5848 14.7503V13.6641H8.41524V14.7503C6.81011 14.9796 5.50077 16.1384 5.05156 17.6624C4.99031 17.6526 4.92753 17.6473 4.86351 17.6473C4.21347 17.6473 3.68652 18.1742 3.68652 18.8242C3.68652 19.4742 4.21347 20.0012 4.86351 20.0012C5.4544 20.0012 5.94345 19.5657 6.0276 18.9982C6.04471 18.9433 6.05393 18.8848 6.05393 18.8242C6.05393 17.3999 7.06993 16.2086 8.41524 15.9366V17.791C8.04998 17.9908 7.80223 18.3786 7.80223 18.8242C7.80223 19.4742 8.32918 20.0012 8.97918 20.0012C9.62922 20.0012 10.1562 19.4742 10.1562 18.8242C10.1562 18.3957 9.92708 18.0208 9.5848 17.815V15.9366C10.8716 16.1968 11.8565 17.2982 11.9398 18.6401C11.9303 18.7001 11.9253 18.7616 11.9253 18.8243C11.9253 19.4743 12.4523 20.0012 13.1023 20.0012C13.7523 20.0012 14.2793 19.4743 14.2793 18.8243C14.2793 18.1743 13.7523 17.6473 13.1023 17.6473Z"
                                        class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"></path>
                                    <path
                                        d="M17.2036 6.2168H15.6151C15.2921 6.2168 15.0303 6.47861 15.0303 6.8016V8.5676C15.0303 9.11044 14.5882 9.55211 14.0447 9.55211H13.9074C13.9062 9.55211 13.9051 9.55227 13.904 9.55227V9.55211H4.09592V9.55227C4.09478 9.55227 4.09365 9.55211 4.09252 9.55211H4.07443C3.53096 9.55211 3.08883 9.11044 3.08883 8.5676V6.8016C3.08883 6.47861 2.82701 6.2168 2.50403 6.2168H0.796348C0.47336 6.2168 0.211548 6.47861 0.211548 6.8016C0.211548 7.12458 0.47336 7.3864 0.796348 7.3864H1.91927V8.5676C1.91927 9.75536 2.88608 10.7217 4.07443 10.7217H4.09252C4.09369 10.7217 4.09478 10.7216 4.09592 10.7216V10.9282C4.09592 11.7911 4.79553 12.4908 5.65851 12.4908H12.3414C13.2044 12.4908 13.904 11.7911 13.904 10.9282V10.7216C13.9051 10.7216 13.9063 10.7217 13.9074 10.7217H14.0447C15.2331 10.7217 16.1999 9.7554 16.1999 8.5676V7.3864H17.2036C17.5265 7.3864 17.7884 7.12458 17.7884 6.8016C17.7884 6.47865 17.5265 6.2168 17.2036 6.2168Z"
                                        class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"></path>
                                    <path
                                        d="M13.1157 2.14739C13.1157 0.963338 12.1524 0 10.9683 0H7.03167C5.84758 0 4.88428 0.963299 4.88428 2.14739V8.38037H13.1157V2.14739Z"
                                        class="fill-etBlue group-hover:fill-white transition duration-[0.4s]"></path>
                                </svg>
                            </span>
                        <span>Register Now</span>
                    </a>
                </div>

                <!-- single pricing -->
                <div
                    class="bg-[url('../assets/img/pricing-bg.jpg')] rounded-[30px] overflow-hidden bg-no-repeat bg-cover bg-center relative z-[1] shadow-[0_4px_60px_rgba(18,96,254,0.12)] rev-slide-up before:absolute before:inset-0 before:bg-etBlue/85 before:-z-[1] text-center">
                    <div
                        class="mx-[56px] md:mx-[36px] bg-white rounded-br-[20px] rounded-bl-[20px] text-center py-[6px]">
                        <h5 class="font-normal text-[24px] md:text-[22px]">Premium Pass</h5>
                    </div>

                    <!-- price -->
                    <h4 class="font-semibold text-[45px] md:text-[40px] text-white mt-[10px] mb-[12px]">$59.00</h4>

                    <!-- features -->
                    <ul class="border-y border-dashed border-white/25 text-[16px] text-white font-normal py-[23px] space-y-[17px]">
                        <li>Get everything a Conference pass</li>
                        <li>Enjoy 2 days of inspiring talks</li>
                        <li>Breakout sessions exploring</li>
                        <li>Challenging topics, great food.</li>
                        <li>With experts at a Workshops</li>
                    </ul>

                    <a href="#"
                       class="my-[30px] inline-flex items-center gap-[12px] rounded-full border border-white/20 text-white h-[54px] px-[15px] text-[17px] group hover:bg-white hover:border-white hover:text-etBlue">
                            <span class="icon">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.1023 17.6473C13.0496 17.6473 12.9979 17.6511 12.9471 17.6578C12.4966 16.1361 11.1883 14.9794 9.5848 14.7503V13.6641H8.41524V14.7503C6.81011 14.9796 5.50077 16.1384 5.05156 17.6624C4.99031 17.6526 4.92753 17.6473 4.86351 17.6473C4.21347 17.6473 3.68652 18.1742 3.68652 18.8242C3.68652 19.4742 4.21347 20.0012 4.86351 20.0012C5.4544 20.0012 5.94345 19.5657 6.0276 18.9982C6.04471 18.9433 6.05393 18.8848 6.05393 18.8242C6.05393 17.3999 7.06993 16.2086 8.41524 15.9366V17.791C8.04998 17.9908 7.80223 18.3786 7.80223 18.8242C7.80223 19.4742 8.32918 20.0012 8.97918 20.0012C9.62922 20.0012 10.1562 19.4742 10.1562 18.8242C10.1562 18.3957 9.92708 18.0208 9.5848 17.815V15.9366C10.8716 16.1968 11.8565 17.2982 11.9398 18.6401C11.9303 18.7001 11.9253 18.7616 11.9253 18.8243C11.9253 19.4743 12.4523 20.0012 13.1023 20.0012C13.7523 20.0012 14.2793 19.4743 14.2793 18.8243C14.2793 18.1743 13.7523 17.6473 13.1023 17.6473Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                    <path
                                        d="M17.2036 6.2168H15.6151C15.2921 6.2168 15.0303 6.47861 15.0303 6.8016V8.5676C15.0303 9.11044 14.5882 9.55211 14.0447 9.55211H13.9074C13.9062 9.55211 13.9051 9.55227 13.904 9.55227V9.55211H4.09592V9.55227C4.09478 9.55227 4.09365 9.55211 4.09252 9.55211H4.07443C3.53096 9.55211 3.08883 9.11044 3.08883 8.5676V6.8016C3.08883 6.47861 2.82701 6.2168 2.50403 6.2168H0.796348C0.47336 6.2168 0.211548 6.47861 0.211548 6.8016C0.211548 7.12458 0.47336 7.3864 0.796348 7.3864H1.91927V8.5676C1.91927 9.75536 2.88608 10.7217 4.07443 10.7217H4.09252C4.09369 10.7217 4.09478 10.7216 4.09592 10.7216V10.9282C4.09592 11.7911 4.79553 12.4908 5.65851 12.4908H12.3414C13.2044 12.4908 13.904 11.7911 13.904 10.9282V10.7216C13.9051 10.7216 13.9063 10.7217 13.9074 10.7217H14.0447C15.2331 10.7217 16.1999 9.7554 16.1999 8.5676V7.3864H17.2036C17.5265 7.3864 17.7884 7.12458 17.7884 6.8016C17.7884 6.47865 17.5265 6.2168 17.2036 6.2168Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                    <path
                                        d="M13.1157 2.14739C13.1157 0.963338 12.1524 0 10.9683 0H7.03167C5.84758 0 4.88428 0.963299 4.88428 2.14739V8.38037H13.1157V2.14739Z"
                                        class="fill-white group-hover:fill-etBlue transition duration-[0.4s]"></path>
                                </svg>
                            </span>
                        <span>Register Now</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div>
            <img src="assets/img/features-vector-3.png" alt="vector"
                 class="pointer-events-none absolute bottom-[214px] left-[63px] -z-[1]">
            <img src="assets/img/features-vector-3.png" alt="vector"
                 class="pointer-events-none absolute top-[163px] right-[106px] -z-[1]">
        </div>
    </section>
    <!-- PRICING SECTION END -->


    <!-- GALLERY SECTION START -->
    <section class="grid grid-cols-4 lg:grid-cols-3 sm:grid-cols-2">
        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-1.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-1.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-2.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-2.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-3.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-3.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-4.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-4.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-5.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-5.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-6.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-6.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>

        <!-- single gallery item -->
        <div
            class="bg-etBlue xxs:col-span-2 relative z-[1] flex items-center justify-center text-center before:absolute before:inset-0 before:bg-[url('../assets/img/gallery-text-bg.jpg')] before:-z-[1] before:mix-blend-multiply p-[15px] xxs:pt-[25px] xxs:pb-[30px]">
            <div>
                <h6 class="et-section-sub-title !text-white before:!bg-white anim-text">Gallery</h6>
                <span
                    class="block text-white font-semibold text-[100px] leading-[0.86] mb-[13px] xxl:text-[80px] xl:text-[60px] md:!text-[50px] xs:!text-[45px] xs:!mb-[10px] anim-text">2020</span>
                <h2 class="et-section-title !text-white !font-normal mb-[31px] xxl:!text-[40px] xl:!text-[35px] md:!text-[30px] md:mb-[21px] anim-text">
                    Our Events Gallery</h2>
                <a href="{{ url('/') }}"
                   class="inline-flex items-center justify-center rounded-full border border-white text-[16px] h-[45px] px-[15px] text-white hover:bg-white hover:text-etBlue">View
                    All Gallery</a>
            </div>
        </div>

        <!-- single gallery item -->
        <div
            class="relative xxs:col-span-2 z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
            <img src="assets/img/gallery-img-7.jpg" alt="gallery image">
            <a href="assets/img/gallery-img-7.jpg" data-fslightbox="gallery"
               class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                <i class="fa-plus fa-regular"></i>
            </a>
        </div>
    </section>
    <!-- GALLERY SECTION END -->


    <!-- SPONSORS & CTA SECTION START -->
    <section class="et-cta py-[130px] lg:py-[80px] md:py-[60px] relative z-[1]">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <!-- sponsors -->
            <div
                class="flex items-center md:flex-col gap-x-[42px] gap-y-[25px] border border-[#D9D9D9] rounded-[20px] py-[30px] xxs:py-[20px] px-[34px] xxs:px-[16px] mb-[130px] lg:mb-[80px] md:mb-[60px]">
                <!-- left -->
                <div
                    class="flex xxs:flex-wrap items-end gap-[40px] xxs:gap-x-[10px] gap-y-[10px] pr-[42px] md:pr-0 border-r md:border-r-0 border-[#D9D9D9] max-w-[230px] md:max-w-full shrink-0">
                    <h5 class="font-medium text-[20px] text-etBlack anim-text">Trusted By Top sponsors</h5>
                    <a href="#" class="inline-block mb-[8px] group">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 13.4121L11.1668 2.24543H3.87542V0H15V11.1246H12.7546V3.8332L1.58789 15L0 13.4121Z"
                                class="fill-etBlue group-hover:fill-etBlack transition duration-[400ms]"/>
                        </svg>
                    </a>
                </div>

                <!-- right -->
                <div
                    class="flex flex-wrap items-center justify-between md:justify-center gap-[30px] md:gap-[50px] w-full xxs:*:w-[40%]">
                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="73" height="60" viewBox="0 0 73 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M40.2451 23.1693L37.7232 25.6913L42.032 30L23.5379 48.4937L5.04384 30L23.5379 11.5059L27.4781 15.4461L19.3866 23.5376L24.588 28.7389L27.1099 26.2169L24.4305 23.5376L30 17.968L32.6794 20.6474L35.2013 18.1255L32.5219 15.4461L42.9242 5.04383L45.6036 7.72323L48.1255 5.20131L42.9242 0L30 12.9242L23.5379 6.4621L0 30L23.5379 53.5376L47.0758 30L40.2451 23.1693Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M72.9242 30.0008L49.3867 6.46289L25.8488 30.0008L32.6794 36.8311L35.2013 34.3092L30.8926 30.0008L49.3867 11.5067L67.8804 30.0008L49.3867 48.4945L45.4465 44.5547L53.5379 36.4632L48.3366 31.2616L45.8147 33.7835L48.4944 36.4632L42.9246 42.0328L40.2452 39.353L37.7232 41.875L40.4026 44.5547L30.0004 54.957L27.3206 52.2776L24.7987 54.7995L30.0004 60.0008L42.9246 47.0766L49.3867 53.5383L72.9242 30.0008Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>

                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="59" height="60" viewBox="0 0 59 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M39.9089 31.8303H34.6058L53.1743 50.3985C48.7682 54.1842 43.2151 56.2491 37.3454 56.2491C30.8464 56.2491 24.7361 53.7181 20.1403 49.1229C15.3749 44.3568 13.006 38.09 13.0285 31.8303C13.0376 29.2954 13.4415 26.7628 14.236 24.3305C15.2011 21.3748 16.7409 18.5671 18.8654 16.0902L27.1056 24.3305H32.4088L18.8146 10.7363L17.4889 12.0624C13.96 15.5912 11.5755 19.8349 10.3214 24.3308C9.63792 26.7807 9.28737 29.3045 9.27956 31.8306C9.2571 39.0508 11.9921 46.2782 17.4886 51.775C22.7927 57.0784 29.8446 59.9993 37.345 59.9993C44.8455 59.9993 51.8974 57.0784 57.2009 51.7746L58.5265 50.4489L39.9089 31.8303Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M28.0808 3.75022C40.8664 3.75022 51.3802 13.6622 52.3404 26.206H15.6366C15.3143 27.4389 15.0976 28.6933 14.9875 29.9559H56.1616V28.0808C56.1616 12.5969 43.5647 0 28.0808 0C12.5969 0 0 12.5969 0 28.0808V29.9559H7.47571C7.55741 28.6992 7.71038 27.4461 7.94929 26.206H3.82118C4.78135 13.6622 15.2951 3.75022 28.0808 3.75022Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>

                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="72" height="60" viewBox="0 0 72 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M35.9032 38.8125C24.2204 38.8125 14.7151 48.3175 14.7151 60.0006H18.7796C18.7796 50.5585 26.4615 42.877 35.9032 42.877C45.3449 42.877 53.0268 50.5585 53.0268 60.0006H57.0913C57.0913 48.3175 47.586 38.8125 35.9032 38.8125Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M35.9032 45.9531C28.1577 45.9531 21.8567 52.2542 21.8567 59.9997H25.9212C25.9212 54.4956 30.3992 50.0176 35.9032 50.0176C41.4073 50.0176 45.8852 54.4956 45.8852 59.9997H49.9498C49.9498 52.2546 43.6487 45.9531 35.9032 45.9531Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M35.9032 21.1881C47.586 21.1881 57.0913 11.6832 57.0913 0H53.0268C53.0268 9.4421 45.3449 17.1236 35.9032 17.1236C26.4615 17.1236 18.7796 9.4421 18.7796 0H14.7151C14.7155 11.6835 24.2204 21.1881 35.9032 21.1881Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M14.4248 28.7546C15.6383 27.9178 16.9025 27.1515 18.2118 26.4582C9.68746 20.7391 4.06451 11.0157 4.06451 0.00195312H0C0 11.7514 5.67329 22.2006 14.4248 28.7546Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M42.9528 31.0425C40.6834 31.5578 38.3264 31.8388 35.9032 31.8388C33.4801 31.8388 31.1231 31.5578 28.8537 31.0425C26.6649 31.5756 24.5711 32.3503 22.6003 33.3378C26.7175 34.9867 31.2042 35.9033 35.9032 35.9033C40.6023 35.9033 45.089 34.9867 49.2062 33.3378C52.1397 32.1629 54.8882 30.6208 57.3818 28.753C66.1329 22.199 71.8066 11.7498 71.8066 0H67.742C67.742 11.0138 62.1191 20.7376 53.5948 26.4563C50.4068 28.5951 46.811 30.1668 42.9528 31.0425Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M35.9032 14.0469C43.6487 14.0469 49.9498 7.74549 49.9498 0H45.8852C45.8852 5.50442 41.4073 9.98239 35.9032 9.98239C30.3992 9.98239 25.9212 5.50442 25.9212 0H21.8567C21.8567 7.74549 28.1577 14.0469 35.9032 14.0469Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M57.3822 31.2461C56.1687 32.0829 54.9045 32.8492 53.5952 33.5428C62.1195 39.2619 67.7425 48.9853 67.7425 59.9991H71.807C71.8066 48.2493 66.1333 37.8001 57.3822 31.2461Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M28.8537 28.9565C31.1232 28.4412 33.4801 28.1602 35.9033 28.1602C38.3265 28.1602 40.6834 28.4412 42.9529 28.9565C45.1417 28.4234 47.2355 27.6487 49.2062 26.6613C45.0891 25.0123 40.6024 24.0957 35.9033 24.0957C31.2042 24.0957 26.7175 25.0123 22.6004 26.6613C19.6668 27.8361 16.9184 29.3783 14.4248 31.246C5.67367 37.8 0 48.2492 0 59.999H4.06451C4.06451 48.9852 9.68746 39.2614 18.2118 33.5427C21.3998 31.4039 24.9959 29.8326 28.8537 28.9565Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>

                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="48" height="60" viewBox="0 0 48 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M19.26 28.4096C17.0083 30.6617 13.3453 30.6599 11.0932 28.4093L3.91973 21.2383V9.46172L19.6787 25.22L22.4506 22.4503L0 0V40.1812L16.9788 57.16C18.8103 58.9915 21.2446 60 23.8346 60C26.4246 60 28.8589 58.9915 30.6897 57.16L47.4327 40.417V0.254956L19.26 28.4096ZM27.9189 54.3885C26.8281 55.4792 25.3775 56.0803 23.835 56.0803C22.2918 56.0803 20.8418 55.4792 19.7504 54.3885L3.91973 38.5579V26.7813L25.6392 48.5001L25.6399 48.5008C25.6406 48.5015 25.6413 48.5022 25.6423 48.5029C25.8583 48.7188 26.0849 48.9195 26.3168 49.1121C26.3796 49.1642 26.4444 49.2124 26.5083 49.2628C26.6891 49.4053 26.8735 49.5415 27.0625 49.6699C27.1249 49.7124 27.1877 49.7543 27.2508 49.795C27.4714 49.9376 27.6969 50.0709 27.9274 50.1943C27.954 50.2085 27.9799 50.2245 28.0068 50.2383C28.8242 50.6666 29.6993 50.972 30.6106 51.1507C30.6337 51.1553 30.6571 51.1592 30.6801 51.1638C30.8106 51.1883 30.9393 51.2177 31.0712 51.2372L27.9189 54.3885ZM43.5137 27.0175V38.794C43.5137 38.794 36.2909 45.9998 36.1409 46.1221C36.1232 46.1367 36.104 46.1487 36.0863 46.1629C34.1346 47.7171 31.4038 47.8253 29.3454 46.4856C29.3351 46.4789 29.3238 46.4735 29.3138 46.4664C29.1812 46.3789 29.0536 46.282 28.927 46.1824C28.9004 46.1615 28.8717 46.1434 28.8451 46.1218C28.7011 46.0044 28.5621 45.8778 28.4274 45.7445C28.422 45.7392 28.416 45.7345 28.4103 45.7292L25.259 42.5772C25.3576 42.5627 25.4537 42.54 25.5516 42.5226C25.6555 42.5042 25.7594 42.4861 25.8622 42.4645C26.0679 42.4208 26.2707 42.3687 26.4725 42.312C26.5505 42.29 26.6299 42.2723 26.7072 42.2481C26.9817 42.1634 27.2519 42.0673 27.5175 41.9584C27.5774 41.934 27.6348 41.9042 27.694 41.8783C27.9004 41.7886 28.104 41.6936 28.3036 41.5897C28.393 41.5432 28.4802 41.4925 28.5681 41.4432C28.7366 41.3485 28.9022 41.2496 29.0653 41.1446C29.1539 41.0875 29.2419 41.0298 29.3287 40.9698C29.4947 40.8553 29.656 40.7337 29.8152 40.6081C29.8879 40.551 29.962 40.4961 30.0333 40.4365C30.2592 40.2479 30.4794 40.0511 30.6901 39.8408L43.5137 27.0175ZM27.9189 37.0693C26.8281 38.16 25.3775 38.761 23.835 38.761C22.2918 38.761 20.8418 38.16 19.7504 37.0693L16.5941 33.9123C18.5852 33.6208 20.5021 32.7105 22.0311 31.1819L43.5137 9.71278V21.4744L27.9189 37.0693Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>

                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="73" height="60" viewBox="0 0 73 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M40.2451 23.1693L37.7232 25.6913L42.032 30L23.5379 48.4937L5.04384 30L23.5379 11.5059L27.4781 15.4461L19.3866 23.5376L24.588 28.7389L27.1099 26.2169L24.4305 23.5376L30 17.968L32.6794 20.6474L35.2013 18.1255L32.5219 15.4461L42.9242 5.04383L45.6036 7.72323L48.1255 5.20131L42.9242 0L30 12.9242L23.5379 6.4621L0 30L23.5379 53.5376L47.0758 30L40.2451 23.1693Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M72.9243 30.0008L49.3868 6.46289L25.8489 30.0008L32.6795 36.8311L35.2014 34.3092L30.8927 30.0008L49.3868 11.5067L67.8805 30.0008L49.3868 48.4945L45.4466 44.5547L53.538 36.4632L48.3367 31.2616L45.8148 33.7835L48.4945 36.4632L42.9247 42.0328L40.2453 39.353L37.7234 41.875L40.4028 44.5547L30.0005 54.957L27.3207 52.2776L24.7988 54.7995L30.0005 60.0008L42.9247 47.0766L49.3868 53.5383L72.9243 30.0008Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>

                    <!-- single sponsor -->
                    <a href="#" class="group">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="xxs:mx-auto">
                            <path
                                d="M27.2821 23.8021C28.7403 24.629 30.1313 25.6177 31.4222 26.7784C29.858 16.1461 20.6767 7.95703 9.6167 7.95703V11.2759C17.7696 11.2762 24.7178 16.5154 27.2821 23.8021Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M32.7228 36.21C31.2516 35.373 29.8613 34.3771 28.5789 33.2227C30.1431 43.8549 39.324 52.0434 50.3838 52.0434V48.7245C42.2356 48.7242 35.2902 43.4907 32.7228 36.21Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M33.2227 31.4224C43.8546 29.8578 52.0431 20.6772 52.0431 9.61719H48.7242C48.7242 17.7698 43.4853 24.718 36.199 27.2822C35.372 28.7408 34.3834 30.1315 33.2227 31.4224Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M26.7784 28.5781C16.1455 30.1424 7.95703 39.323 7.95703 50.383H11.2759C11.2759 42.2307 16.5151 35.2825 23.8018 32.7183C24.629 31.26 25.6177 29.8691 26.7784 28.5781Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M32.4612 23.6948C32.9079 25.3106 33.1919 26.9932 33.2844 28.7264C39.6956 20.1019 38.9935 7.82014 31.1737 0L28.8271 2.34658C34.5914 8.11142 35.7999 16.7289 32.4612 23.6948Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M27.5395 36.3053C27.0929 34.6895 26.8088 33.0069 26.7163 31.2734C20.3048 39.8976 21.0066 52.179 28.827 59.9995L31.1736 57.6529C25.4094 51.8881 24.2009 43.2708 27.5395 36.3053Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M36.2908 32.4646C34.6775 32.9094 32.9978 33.1925 31.2671 33.284C35.0461 36.104 39.6122 37.6293 44.4133 37.6293C50.3014 37.6293 55.8366 35.3362 60.0001 31.1728L57.6535 28.8262C54.117 32.3627 49.415 34.3101 44.4133 34.3101C41.5536 34.3104 38.7931 33.6713 36.2908 32.4646Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                            <path
                                d="M23.6944 27.5398C25.3106 27.0931 26.9932 26.8088 28.7267 26.7166C20.1022 20.305 7.82045 21.0068 0 28.8272L2.34657 31.1738C8.1111 25.4093 16.7283 24.2011 23.6944 27.5398Z"
                                class="fill-etGray2 transition duration-[400ms] group-hover:fill-etBlue"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- cta -->
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-[30px]">
                <!-- venue map -->
                <div
                    class="bg-[#EEF4FF] p-[40px] lg:p-[30px] xs:px-[20px] xs:pb-0 pb-0 lg:pb-0 rounded-[20px] overflow-hidden relative z-[1] before:absolute before:inset-0 before:bg-[url('../assets/img/cta-bg-1.jpg')] before:bg-cover before:bg-no-repeat before:bg-center before:-z-[1] before:mix-blend-multiply">
                    <div class="mb-[22px]">
                        <h6 class="et-section-sub-title anim-text">Event Venue Map</h6>
                        <h2 class="et-section-title anim-text">Get Direction To The Event Venue</h2>
                    </div>

                    <div class="relative">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.7865598218705!2d90.41595849268677!3d23.822393686713387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7305eea2015%3A0x8805755fb04e861c!2sKuril%20Flyover!5e0!3m2!1sen!2sbd!4v1713418656214!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[303px] rounded-tl-[20px] rounded-tr-[20px]"></iframe>

                        <div
                            class="absolute inset-[40px] top-auto flex rounded-[20px] overflow-hidden bg-white xxs:flex-col">
                            <img src="assets/img/cta-venue-img.jpg" alt="venue image"
                                 class="shrink-0 w-[50%] xxs:w-full">
                            <div class="flex items-center justify-center w-full">
                                <a href="#"
                                   class="bg-etBlue rounded-full text-white h-[45px] px-[15px] text-[17px] my-[10px] flex items-center justify-center hover:bg-white hover:text-etBlue">Get
                                    Direction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- join card -->
                <div
                    class="bg-etBlue p-[40px] lg:p-[30px] xs:px-[20px] xs:pb-0 pb-0 lg:pb-0 rounded-[20px] overflow-hidden relative z-[1] before:absolute before:inset-0 before:bg-[url('../assets/img/cta-bg-2.jpg')] before:bg-cover before:bg-no-repeat before:bg-center before:-z-[1] before:opacity-30 before:mix-blend-overlay">
                    <div class="mb-[34px]">
                        <h6 class="et-section-sub-title !text-white before:!bg-white anim-text">Build Your Career</h6>
                        <h2 class="et-section-title !text-white mb-[18px] anim-text">Get Join Our Event</h2>
                        <p class="text-[16px] text-white font-light mb-[25px]">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look</p>
                        <a href="#"
                           class="bg-etBlue border border-white rounded-full h-[45px] px-[15px] text-[17px] text-white inline-flex items-center justify-center hover:bg-white hover:text-etBlue">Get
                            Tickets Now</a>
                    </div>

                    <div class="rounded-tl-[20px] rounded-tr-[20px] overflow-hidden">
                        <img src="assets/img/cta-img.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>

        <!-- vectors -->
        <div class="xs:hidden">
            <img src="assets/img/features-vector-1.png" alt="vector"
                 class="pointer-events-none absolute top-[372px] left-[40px] -z-[1]">
            <img src="assets/img/features-vector-3.png" alt="vector"
                 class="pointer-events-none absolute bottom-[207px] right-[106px] -z-[1]">
        </div>
    </section>
    <!-- SPONSORS & CTA SECTION END -->


    <!-- BLOG/NEWS SECTION START -->
    <section
        class="et-blogs bg-[#EEF4FF] py-[130px] lg:py-[80px] md:py-[60px] relative before:absolute before:inset-0 before:bg-[url('../assets/img/news-bg.jpg')] before:bg-cover before:bg-center before:bg-no-repeat before:mix-blend-multiply">
        <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <!-- heading -->
            <div class="et-categories-heading text-center mb-[51px] xl:mb-[41px] lg:mb-[31px]">
                <h6 class="et-section-sub-title anim-text">Latest News</h6>
                <h2 class="et-section-title anim-text">Our Latest News</h2>
            </div>

            <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 justify-center gap-[30px] lg:gap-[20px]">
                <!-- single blog -->
                <div class="et-blog bg-white relative p-[30px] lg:p-[20px] rounded-[20px] group">
                    <div class="et-blog__img relative z-[1] overflow-hidden rounded-[20px] mb-[21px]">
                        <img src="assets/img/evenet-sched-2.jpg" alt="category-icon"
                             class="w-full aspect-[62/45] rounded-[8px] object-cover group-hover:scale-110 transition duration-[400ms]">
                    </div>

                    <div class="et-blog__txt">
                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-medium mb-[11px]"><a href="#"
                                                                                                       class="hover:text-etBlue">Cupidatat
                                Nonproident, Sunt in Culpa Qui Officia Deserunt</a></h4>

                        <div class="et-blog__infos flex gap-x-[22px] mb-[25px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><svg width="13" height="14" viewBox="0 0 18 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                                class="fill-etBlue"/>
                                            <path
                                                d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon">
                                        <svg width="14" height="14" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.00002 0.300781C2.69162 0.300781 1.61253e-05 2.72318 1.61253e-05 5.70078C1.61253e-05 6.74158 0.329216 7.74978 0.953616 8.62158C0.835416 9.92898 0.518616 10.8996 0.0586161 11.3594C-0.00218387 11.4202 -0.0173839 11.5132 0.0210161 11.59C0.0550161 11.6586 0.125016 11.7008 0.200016 11.7008C0.209216 11.7008 0.218416 11.7002 0.227816 11.6988C0.308816 11.6874 2.19042 11.4166 3.55142 10.631C4.32422 10.9428 5.14742 11.1008 6.00002 11.1008C9.30841 11.1008 12 8.67838 12 5.70078C12 2.72318 9.30841 0.300781 6.00002 0.300781ZM3.20002 6.50078C2.75882 6.50078 2.40002 6.14198 2.40002 5.70078C2.40002 5.25958 2.75882 4.90078 3.20002 4.90078C3.64122 4.90078 4.00002 5.25958 4.00002 5.70078C4.00002 6.14198 3.64122 6.50078 3.20002 6.50078ZM6.00002 6.50078C5.55882 6.50078 5.20002 6.14198 5.20002 5.70078C5.20002 5.25958 5.55882 4.90078 6.00002 4.90078C6.44122 4.90078 6.80001 5.25958 6.80001 5.70078C6.80001 6.14198 6.44122 6.50078 6.00002 6.50078ZM8.80001 6.50078C8.35882 6.50078 8.00002 6.14198 8.00002 5.70078C8.00002 5.25958 8.35882 4.90078 8.80001 4.90078C9.24121 4.90078 9.60001 5.25958 9.60001 5.70078C9.60001 6.14198 9.24121 6.50078 8.80001 6.50078Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">02 Comments</span>
                            </div>
                        </div>

                        <!-- date -->
                        <div
                            class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-etBlack inline-block uppercase overflow-hidden text-center">
                            <span class="bg-etBlue text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="et-blog bg-white relative p-[30px] lg:p-[20px] rounded-[20px] group">
                    <div class="et-blog__img relative z-[1] overflow-hidden rounded-[20px] mb-[21px]">
                        <img src="assets/img/evenet-sched-1.jpg" alt="category-icon"
                             class="w-full aspect-[62/45] rounded-[8px] object-cover group-hover:scale-110 transition duration-[400ms]">
                    </div>

                    <div class="et-blog__txt">
                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-medium mb-[11px]"><a href="#"
                                                                                                       class="hover:text-etBlue">Cupidatat
                                Nonproident, Sunt in Culpa Qui Officia Deserunt</a></h4>

                        <div class="et-blog__infos flex gap-x-[22px] mb-[25px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><svg width="13" height="14" viewBox="0 0 18 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                                class="fill-etBlue"/>
                                            <path
                                                d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon">
                                        <svg width="14" height="14" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.00002 0.300781C2.69162 0.300781 1.61253e-05 2.72318 1.61253e-05 5.70078C1.61253e-05 6.74158 0.329216 7.74978 0.953616 8.62158C0.835416 9.92898 0.518616 10.8996 0.0586161 11.3594C-0.00218387 11.4202 -0.0173839 11.5132 0.0210161 11.59C0.0550161 11.6586 0.125016 11.7008 0.200016 11.7008C0.209216 11.7008 0.218416 11.7002 0.227816 11.6988C0.308816 11.6874 2.19042 11.4166 3.55142 10.631C4.32422 10.9428 5.14742 11.1008 6.00002 11.1008C9.30841 11.1008 12 8.67838 12 5.70078C12 2.72318 9.30841 0.300781 6.00002 0.300781ZM3.20002 6.50078C2.75882 6.50078 2.40002 6.14198 2.40002 5.70078C2.40002 5.25958 2.75882 4.90078 3.20002 4.90078C3.64122 4.90078 4.00002 5.25958 4.00002 5.70078C4.00002 6.14198 3.64122 6.50078 3.20002 6.50078ZM6.00002 6.50078C5.55882 6.50078 5.20002 6.14198 5.20002 5.70078C5.20002 5.25958 5.55882 4.90078 6.00002 4.90078C6.44122 4.90078 6.80001 5.25958 6.80001 5.70078C6.80001 6.14198 6.44122 6.50078 6.00002 6.50078ZM8.80001 6.50078C8.35882 6.50078 8.00002 6.14198 8.00002 5.70078C8.00002 5.25958 8.35882 4.90078 8.80001 4.90078C9.24121 4.90078 9.60001 5.25958 9.60001 5.70078C9.60001 6.14198 9.24121 6.50078 8.80001 6.50078Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">05 Comments</span>
                            </div>
                        </div>

                        <!-- date -->
                        <div
                            class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-etBlack inline-block uppercase overflow-hidden text-center">
                            <span class="bg-etBlue text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>
                </div>

                <!-- single blog -->
                <div class="et-blog bg-white relative p-[30px] lg:p-[20px] rounded-[20px] group">
                    <div class="et-blog__img relative z-[1] overflow-hidden rounded-[20px] mb-[21px]">
                        <img src="assets/img/evenet-sched-3.jpg" alt="category-icon"
                             class="w-full aspect-[62/45] rounded-[8px] object-cover group-hover:scale-110 transition duration-[400ms]">
                    </div>

                    <div class="et-blog__txt">
                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-medium mb-[11px]"><a href="#"
                                                                                                       class="hover:text-etBlue">Cupidatat
                                Nonproident, Sunt in Culpa Qui Officia Deserunt</a></h4>

                        <div class="et-blog__infos flex gap-x-[22px] mb-[25px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon"><svg width="13" height="14" viewBox="0 0 18 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                                class="fill-etBlue"/>
                                            <path
                                                d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">By Admin</span>
                            </div>

                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon">
                                        <svg width="14" height="14" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.00002 0.300781C2.69162 0.300781 1.61253e-05 2.72318 1.61253e-05 5.70078C1.61253e-05 6.74158 0.329216 7.74978 0.953616 8.62158C0.835416 9.92898 0.518616 10.8996 0.0586161 11.3594C-0.00218387 11.4202 -0.0173839 11.5132 0.0210161 11.59C0.0550161 11.6586 0.125016 11.7008 0.200016 11.7008C0.209216 11.7008 0.218416 11.7002 0.227816 11.6988C0.308816 11.6874 2.19042 11.4166 3.55142 10.631C4.32422 10.9428 5.14742 11.1008 6.00002 11.1008C9.30841 11.1008 12 8.67838 12 5.70078C12 2.72318 9.30841 0.300781 6.00002 0.300781ZM3.20002 6.50078C2.75882 6.50078 2.40002 6.14198 2.40002 5.70078C2.40002 5.25958 2.75882 4.90078 3.20002 4.90078C3.64122 4.90078 4.00002 5.25958 4.00002 5.70078C4.00002 6.14198 3.64122 6.50078 3.20002 6.50078ZM6.00002 6.50078C5.55882 6.50078 5.20002 6.14198 5.20002 5.70078C5.20002 5.25958 5.55882 4.90078 6.00002 4.90078C6.44122 4.90078 6.80001 5.25958 6.80001 5.70078C6.80001 6.14198 6.44122 6.50078 6.00002 6.50078ZM8.80001 6.50078C8.35882 6.50078 8.00002 6.14198 8.00002 5.70078C8.00002 5.25958 8.35882 4.90078 8.80001 4.90078C9.24121 4.90078 9.60001 5.25958 9.60001 5.70078C9.60001 6.14198 9.24121 6.50078 8.80001 6.50078Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">01 Comments</span>
                            </div>
                        </div>

                        <!-- date -->
                        <div
                            class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-etBlack inline-block uppercase overflow-hidden text-center">
                            <span class="bg-etBlue text-white block py-[3px] rounded-[10px]">10</span>
                            <span class="px-[11px] py-[2px] block">June</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG/NEWS SECTION END -->
@endsection
