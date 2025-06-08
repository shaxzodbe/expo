@php
    $lang = \Illuminate\Support\Facades\Session::get('locale', config('app.locale'))
@endphp

<section class="et-speakers py-[130px] lg:py-[80px] md:py-[60px] relative overflow-hidden">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <!-- heading -->
        <div
                class="et-speakers-heading flex xs:flex-col justify-between items-center mb-[46px] xl:mb-[26px] lg:mb-[16px] gap-[15px]">
            <div class="left xs:text-center">
                <h6 class="et-section-sub-title anim-text">Event Speakers</h6>
                <h2 class="et-section-title anim-text">Meet Our Speakers</h2>
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
                @foreach($speakers as $speaker)
                    <!-- single speaker -->
                    <div class="swiper-slide">
                        <div class="et-speaker bg-white rounded-[16px] relative z-[1] group">
                            <div
                                    class="et-speaker-img overflow-hidden before:absolute before:inset-0 before:bg-gradient-to-t before:from-etBlue before:to-transparent before:opacity-0 before:transition before:duration-[400ms] before:z-[1] group-hover:before:opacity-100">
                                <img src="{{ asset('storage/' . $speaker->image) }}" alt="speaker image"
                                     class="mx-auto w-full transition duration-[400ms">
                            </div>
                            
                            <!-- socials -->
                            <div class="et-speaker-socials bg-[#E7EFFF] w-[55px] py-[15px] text-center rounded-full absolute z-[2] -left-[10px] -top-[10px] flex flex-col justify-center text-[20px] text-etGray2 gap-[10px] border-[10px] border-white box-content">
                                <a href="{{ $speaker->facebook ?? url('/') }}" class="hover:text-etBlue"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $speaker->instagram ?? url('/') }}" class="hover:text-etBlue"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{ $speaker->twitter ?? url('/') }}" class="hover:text-etBlue"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{ $speaker->pinterest ?? url('/') }}" class="hover:text-etBlue"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="et-speaker-txt text-center absolute z-[1] bottom-0 pb-[24px] w-full text-white translate-y-full group-hover:translate-y-0 transition duration-[400ms]">
                                <h4 class="et-speaker-name font-medium text-[24px] mb-[3px]"><a
                                            href="{{ url('/') }}" class="hover:text-black">{{ $speaker?->getTranslation('name', $lang) }}</a></h4>
                                <h6 class="et-speaker-label font-normal text-[16px]">{{ $speaker?->getTranslation('title', $lang) }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
