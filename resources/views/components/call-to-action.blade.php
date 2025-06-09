@php
    $lang = \Illuminate\Support\Facades\Session::get('locale', config('app.locale'))
@endphp

<div class="grid grid-cols-2 sm:grid-cols-1 gap-[30px]">
    <!-- venue map -->
    <div
        class="bg-[#EEF4FF] p-[40px] lg:p-[30px] xs:px-[20px] xs:pb-0 pb-0 lg:pb-0 rounded-[20px] overflow-hidden relative z-[1] before:absolute before:inset-0 before:bg-[url('../assets/img/cta-bg-1.jpg')] before:bg-cover before:bg-no-repeat before:bg-center before:-z-[1] before:mix-blend-multiply">
        <div class="mb-[22px]">
            <h6 class="et-section-sub-title anim-text">{{ $ctaMap?->getTranslation('subtitle', $lang) }}</h6>
            <h2 class="et-section-title anim-text">{{ $ctaMap?->getTranslation('title', $lang) }}</h2>
        </div>

        <div class="relative">
            @if($ctaMap->map_embed_url)
                <iframe
                    src="{{ $ctaMap->map_embed_url }}"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-[303px] rounded-tl-[20px] rounded-tr-[20px]">
                </iframe>
            @endif

            <div
                class="absolute inset-[40px] top-auto flex rounded-[20px] overflow-hidden bg-white xxs:flex-col">
                @if($ctaMap->image)
                    <img src="{{ asset($ctaMap->image) }}" alt="venue image"
                         class="shrink-0 w-[50%] xxs:w-full">
                @endif
                    <div class="flex items-center justify-center w-full">
                        <a href="{{ $ctaMap->button_url ?? '#' }}"
                           class="bg-etBlue rounded-full text-white h-[45px] px-[15px] text-[17px] my-[10px] flex items-center justify-center hover:bg-white hover:text-etBlue">
                            {{ $ctaMap->button_text }}
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <!-- join card -->
    <div
        class="bg-etBlue p-[40px] lg:p-[30px] xs:px-[20px] xs:pb-0 pb-0 lg:pb-0 rounded-[20px] overflow-hidden relative z-[1] before:absolute before:inset-0 before:bg-[url('../assets/img/cta-bg-2.jpg')] before:bg-cover before:bg-no-repeat before:bg-center before:-z-[1] before:opacity-30 before:mix-blend-overlay">
        <div class="mb-[34px]">
            <h6 class="et-section-sub-title !text-white before:!bg-white anim-text">{{ $ctaJoin?->getTranslation('subtitle', $lang) }}</h6>
            <h2 class="et-section-title !text-white mb-[18px] anim-text">{{ $ctaJoin?->getTranslation('title', $lang) }}</h2>
            <p class="text-[16px] text-white font-light mb-[25px]">{{ $ctaJoin?->getTranslation('description', $lang) }}</p>
            <a href="{{ $ctaJoin->button_url ?? '#' }}"
               class="bg-etBlue border border-white rounded-full h-[45px] px-[15px] text-[17px] text-white inline-flex items-center justify-center hover:bg-white hover:text-etBlue">Get
                {{ $ctaJoin?->getTranslation('button_text', $lang) }}</a>
        </div>

        <div class="rounded-tl-[20px] rounded-tr-[20px] overflow-hidden">
            <img src="assets/img/cta-img.jpg" alt="Image">
        </div>
    </div>
</div>
