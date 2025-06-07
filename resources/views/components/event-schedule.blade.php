@php
	$lang = \Illuminate\Support\Facades\Session::get('locale', config('app.locale'))
@endphp
<section class="et-schedules py-[130px] xl:py-[80px] md:py-[60px]">
	<div
			class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full rev-slide-up">
		<!-- heading -->
		<div
				class="et-schedule-heading flex sm:flex-col justify-between items-center pb-[31px] mb-[40px] gap-[15px] border-b border-[#D9D9D9]">
			<div class="left xs:text-center max-w-[50%] sm:max-w-full">
				<h6 class="et-section-sub-title anim-text">
					{{ translation('event-schedule.event_timetable') }}
				</h6>
				<h2 class="et-section-title anim-text">
					{{ translation('event-schedule.information') }}
				</h2>
			</div>
			
			<div class="right">
				<div class="et-schedules-tab-navs bg-[#EDF3FE] px-[12px] py-[14px] flex flex-w gap-[16px] sm:gap-[12px] rounded-full">
					<button data-tab="tab1" class="tab-nav bg-etBlack
					rounded-full px-[20px] py-[3px] text-[16px] font-medium
					text-white hover:bg-etBlue active">
						{{ translation('event-schedule.day') }} 01
					</button>
					
					<button data-tab="tab2"
					        class="tab-nav bg-etBlack rounded-full px-[20px] py-[3px] text-[16px] font-medium text-white hover:bg-etBlue">
						{{ translation('event-schedule.day') }} 02
					</button>
				</div>
			</div>
		</div>
		
		<!-- events -->
		<div class="et-schedules-tab-container">
			@foreach ($events->groupBy('date') as $date => $dayEvents)
				<div id="tab{{ $loop->index + 1 }}" class="et-tab {{ $loop->first ? 'active' : '' }}">
					<div class="all-scheduled-events space-y-[30px]">
						@foreach ($dayEvents as $event)
							<!-- single schedule -->
							<div
									class="et-schedule flex md:flex-wrap gap-x-[30px] gap-y-[20px] justify-between rev-slide-up">
								<!-- img -->
								<div
										class="w-[270px] h-[226px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] shrink-0 rounded-[20px] overflow-hidden">
									<img src="{{ asset('storage/' . $event->image) }}" alt="scehduled-event-cover 12"></div>
								
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
												
												<span class="text-etGray font-normal text-[16px]">{{ $event->date }}</span>
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
												
												<span class="text-etGray font-normal text-[16px]">{{ $event->start_time }} AM – {{ $event->end_time }} PM</span>
											</div>
										</div>
										
										<!-- title -->
										<h3 class="et-schedule-title text-[24px] sm:text-[22px] font-regular text-etBlack leading-[1.25] mb-[16px] anim-text">
											<a href="{{ route('event.details', $event->id) }}" class="hover:text-etBlue">{{ $event?->getTranslation('title', $lang) }}</a></h3>
										
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
										<a href="{{ route('event.details', $event->id) }}"
										   class="et-btn border border-etBlue
										    text-etBlue inline-flex
										    items-center justify-center
										    gap-x-[13px] h-[45px] px-[15px]
										    font-normal text-[17px]
										    rounded-full hover:!bg-etBlue
										    hover:!text-white">{{ translation
										    ('event-schedule.buy_tickets')
										    }}</a>
										<div class="flex items-center">
											<div class="flex *:-ml-[20px]">
												<img src="assets/img/reviewer-1.png" alt="Person"
												     class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
												<img src="{{ asset('assets/img/reviewer-2.png') }}" alt="Person"
												     class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
												<img src="{{ asset('assets/img/reviewer-3.png') }}" alt="Person"
												     class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0">
												<div
														class="w-[45px] h-[45px] rounded-full border-[3px] border-white first:ml-0 text-white bg-etBlue font-semibold flex items-center justify-center text-[16px]"></div>
											</div>
											<span class="font-semibold text-etBlue text-[16px] -ml-[29px]">
												{!! translation('event-schedule.speakers') !!}
											</span>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			@endforeach
		</div>
	
	</div>
</section>
