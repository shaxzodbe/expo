@php
    $lang = \Illuminate\Support\Facades\Session::get('locale', config(	'app.locale'))
@endphp
<div
        class="bg-[#EEF4FF] relative z-[1] after:absolute after:inset-0 after:bg-[url(../assets/img/features-bg.png)] after:bg-no-repeat after:bg-cover after:-z-[2] after:mix-blend-multiply after:pointer-events-none pb-[130px] xl:pb-[80px] md:pb-[60px] pt-[244px] xl:pt-[194px] md:pt-[174px]">
    <div
            class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
        <!-- heading -->
        <div class="text-center mb-[52px]">
            <h6 class="et-section-sub-title anim-text">{{ translation('event.event_features') }}</h6>
            <h2 class="et-section-title anim-text">{{ translation('event.unifying') }}</h2>
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
                        <h5 class="font-medium text-[22px] text-etBlack mb-[8px]"><a href="#" class="hover:text-etBlue">{{ $feature?->getTranslation('title', $lang) }}</a></h5>
                        <p class="font-light text-etGray text-[16px]">{{ $feature?->getTranslation('description', $lang) }}</p>
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
