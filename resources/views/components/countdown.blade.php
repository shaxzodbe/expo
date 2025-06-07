@php
	$lang = \Illuminate\Support\Facades\Session::get('locale', config(	'app.locale'))
 @endphp
<div
		class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up relative z-[2]">
	<div
			class="bg-etBlue relative z-[1] p-[60px] sm:p-[40px] xs:px-[20px] rounded-[20px] overflow-hidden -mb-[114px] shadow-[0_4px_50px_rgba(18,96,254,0.2)] after:absolute after:inset-0 after:-z-[1] after:bg-[url(../assets/img/et-counter-bg.jpg)] after:bg-cover after:bg-no-repeat after:mix-blend-screen flex items-center md:flex-wrap gap-y-[20px]">
		<div class="pr-[54px] border-r md:border-r-0 border-white/20 md:text-center md:pr-0 md:w-full">
			<h2 class="et-section-title !text-white mb-[28px] anim-text">{{ $countdown?->getTranslation('title', $lang) ?? 'Count Every Second Until Event' }}</h2>
			<a href="{{ $countdown->button_link ?? '#' }}"
			   class="et-btn bg-etBlue inline-flex items-center justify-center gap-x-[13px] h-[45px] px-[15px] text-white font-normal text-[17px] rounded-full border-white border hover:!bg-white hover:!text-etBlue">
				{{ $countdown?->getTranslation('button_text', $lang) ?? 'Buy Ticket' }}
			</a>
		</div>
		
		<!-- counter -->
		<div
				class="et-countdown flex sm:flex-wrap justify-center gap-y-[10px] md:w-full *:border-r *:sm:border-r-0 *:border-white/20 *:px-[46px] *:sm:px-[26px] *:xs:px-[16px] font-medium text-white text-[16px] text-center">
			<div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
				<span class="days number block"></span>
				<span>{{ translation('countdown.days') }}</span>
			</div>
			
			<div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
				<span class="hours number block"></span>
				<span>{{ translation('countdown.hours') }}</span>
			</div>
			
			<div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
				<span class="minutes number block"></span>
				<span>{{ translation('countdown.minutes') }}</span>
			</div>
			
			<div class="last:pr-0 last:md:pr-[30px] last:xs:pr-[20px] last:border-r-0">
				<span class="seconds number block"></span>
				<span>{{ translation('countdown.seconds') }}</span>
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
