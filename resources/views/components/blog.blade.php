@php
    $lang = \Illuminate\Support\Facades\Session::get('locale', config('app.locale'))
@endphp
<section
    class="et-blogs bg-[#EEF4FF] py-[130px] lg:py-[80px] md:py-[60px] relative before:absolute before:inset-0 before:bg-[url('../assets/img/news-bg.jpg')] before:bg-cover before:bg-center before:bg-no-repeat before:mix-blend-multiply">
    <div
        class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
        <!-- heading -->
        <div class="et-categories-heading text-center mb-[51px] xl:mb-[41px] lg:mb-[31px]">
            <h6 class="et-section-sub-title anim-text">{{ translation('blog.latest_news') }}</h6>
            <h2 class="et-section-title anim-text">{{ translation('blog.our_latest_news') }}</h2>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 justify-center gap-[30px] lg:gap-[20px]">
            <!-- single blog -->
            @foreach ($blogs as $blog)
                <div class="et-blog bg-white relative p-[30px] lg:p-[20px] rounded-[20px] group">
                    <div class="et-blog__img relative z-[1] overflow-hidden rounded-[20px] mb-[21px]">
                        <img src="{{ asset('storage/' . $blog->image_url) }}" alt="category-icon"
                             class="w-full aspect-[62/45] rounded-[8px] object-cover group-hover:scale-110 transition duration-[400ms]">
                    </div>

                    <div class="et-blog__txt">
                        <h4 class="et-blog__title text-[20px] sm:text-[18px] font-medium mb-[11px]">
                            <a href="{{ url('/') }}" class="hover:text-etBlue">
                                {{ $blog?->getTranslation('title', $lang) }}
                            </a>
                        </h4>
                        <div class="et-blog__infos flex gap-x-[22px] mb-[25px]">
                            <!-- single info -->
                            <div class="et-blog-info flex items-center gap-x-[10px]">
                                    <span class="icon">
                                        <svg width="13" height="14" viewBox="0 0 18 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5435 5.19275C13.5435 7.69093 11.4989 9.7355 9.00075 9.7355C6.50262 9.7355 4.45804 7.69093 4.45804 5.19275C4.45804 2.69457 6.50258 0.65 9.00075 0.65C11.4989 0.65 13.5435 2.69458 13.5435 5.19275Z"
                                                class="fill-etBlue"/>
                                            <path
                                                d="M17.2644 14.6708C17.1052 14.946 16.9241 15.2075 16.7169 15.4769L16.7168 15.4768L16.7089 15.4875C16.4203 15.8791 16.0845 16.2376 15.7295 16.5926C15.4326 16.8894 15.0932 17.1863 14.7568 17.4387C13.0794 18.6913 11.0622 19.3501 8.97815 19.3501C6.89837 19.3501 4.88507 18.694 3.20977 17.4463C2.84588 17.1507 2.51368 16.8795 2.22687 16.5927L2.2199 16.5857L2.21272 16.5789C1.85663 16.2438 1.54239 15.8879 1.24746 15.4876L1.24748 15.4876L1.24414 15.4831C1.06193 15.2402 0.873212 14.9758 0.719199 14.7172C0.836191 14.4561 0.984554 14.1849 1.14522 13.9529L1.14533 13.9529L1.15285 13.9416C2.06985 12.5559 3.53706 11.6391 5.16643 11.415L5.18601 11.4123L5.20539 11.4084C5.23087 11.4033 5.29495 11.4119 5.34548 11.4498L5.34547 11.4498L5.34948 11.4528C6.41651 12.2403 7.6863 12.6456 9.0008 12.6456C10.3153 12.6456 11.5851 12.2403 12.6521 11.4528L12.6521 11.4528L12.6561 11.4498C12.6715 11.4382 12.7403 11.4082 12.8492 11.417C14.4688 11.6438 15.9121 12.557 16.8524 13.9471L16.8524 13.9471L16.8564 13.9529C17.0165 14.1842 17.1557 14.4234 17.2644 14.6708Z"
                                                class="fill-etBlue"/>
                                        </svg>
                                    </span>
                                <span class="text-[#707882] font-medium text-[14px]">{{ $blog->author }}</span>
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
                                <span
                                    class="text-[#707882] font-medium text-[14px]">{{ $blog->comments_count }} {{ translation('blog.index') }}</span>
                            </div>
                        </div>

                        <!-- date -->
                        <div
                            class="bg-[#ECF0F5] rounded-[10px] font-medium text-[14px] text-etBlack inline-block uppercase overflow-hidden text-center">
                            <span
                                class="bg-etBlue text-white block py-[3px] rounded-[10px]">{{ $blog->published_date->format('d') }}</span>
                            <span class="px-[11px] py-[2px] block">{{ $blog->published_date->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
