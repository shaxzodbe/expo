@php use Illuminate\Support\Facades\Session; @endphp
@php
    $lang = Session::get('locale', config('app.locale'))
@endphp
<section class="et-about pt-[60px] pb-[130px] xl:pb-[80px] md:pb-[60px] overflow-hidden relative">
    <div
            class="container mx-auto max-w-[calc(100%-39.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <div
                class="flex items-center md:flex-wrap gap-x-[60px] xxl:gap-x-[40px] lg:gap-x-[30px] gap-y-[40px] sm:gap-y-[40px] lg:justify-center">
            <!-- left -->
            
{{--            @dd($about)--}}
            <div
                    class="et-about-img relative z-[1] md:w-auto shrink-0 max-w-full mr-[70px] md:mr-0 ml-[28px] xxxl:ml-[47px] md:ml-0 xs:w-[70%] xxs:w-[90%] xxs:ml-[47px]">
                <img src="{{ asset('storage/' . $about->main_image) }}"alt="image" class="shrink-0 rounded-[10px]"/>
                <img src="{{ asset('storage/' . $about->floating_image) }}" alt="image" class="et-about-floating-img absolute top-[45px] -right-[70px] shrink-0 rounded-[20px] border-white border-[10px] xs:hidden"/>
                
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
                <h6 class="et-section-sub-title anim-text">{{ $about?->getTranslation('subtitle', $lang) }}</h6>
                <h2 class="et-section-title mb-[24px] md:mb-[19px]
                anim-text">{{ $about?->getTranslation('title', $lang) }}</h2>
                
                <p class="mb-[30px] text-[16px] font-light text-etGray md:mb-[30px] rev-slide-up">
                    {{ $about?->getTranslation('description', $lang) }}
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
                        <h6 class="font-medium text-[18px] text-black mb-[8px]">{{ $about?->getTranslation('conference_title', $lang) }}</h6>
                        <p class="text-[16px] font-light text-etGray">{{ $about?->getTranslation('conference_description', $lang) }}</p>
                    </div>
                </div>
                
                <div class="flex flex-wrap items-center gap-x-[30px] gap-y-[16px] rev-slide-up">
                    <a href="{{ url('/') }}" class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full hover:!bg-black hover:!text-white">
                        {{ translation('index.register_now') }}
                    </a>
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
                        <span class="uppercase font-semibold text-etBlue
                        text-[16px]">{{ translation('index.speakers') }}</span>
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
