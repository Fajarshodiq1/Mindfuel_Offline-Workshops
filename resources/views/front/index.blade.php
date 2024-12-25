@extends('layouts.app')

@section('content')
    <div class="h-[112px] bg-white">
        <x-nav />
    </div>
    <header class="flex flex-col w-full max-h-[1210px] bg-[linear-gradient(0deg,_#5B8CE9_0%,_#4EB6F5_100%)] -mb-[128px]">
        <div class="flex flex-col items-center gap-6 mt-20 px-4">
            <!-- Badge -->
            <div
                class="flex items-center w-fit rounded-full p-1 pr-4 gap-3 sm:gap-[10px] bg-[#DFEFFF] transition-all duration-300">
                <div
                    class="w-10 sm:w-12 h-10 sm:h-12 rounded-full flex items-center justify-center shrink-0 bg-aktiv-blue overflow-hidden">
                    <img src="{{ asset('assets/images/icons/medal-star.svg') }}" class="w-5 sm:w-6 h-5 sm:h-6" alt="icon">
                </div>
                <p class="font-semibold text-sm sm:text-lg leading-[21px] sm:leading-[27px] text-aktiv-blue text-center">
                    #1 Best Workshop in Indonesia
                </p>
            </div>
            <!-- Heading -->
            <h1
                class="w-full max-w-[800px] text-center text-[24px] sm:text-[32px] lg:text-[42px] leading-[32px] sm:leading-[42px] lg:leading-[58.8px] text-white font-['Neue_Plak_bold'] capitalize">
                Revitalize your daily routine with<br class="hidden sm:block"> powerful productivity 💪
            </h1>
            <!-- Button -->
            <div class="flex w-fit rounded-full p-2 sm:p-4 bg-[#FFFFFF17] transition-all duration-300">
                <a href="#"
                    class="flex items-center rounded-full px-4 sm:px-6 lg:px-9 h-[40px] sm:h-[48px] lg:h-[56px] gap-2 sm:gap-[10px] bg-aktiv-orange hover:bg-aktiv-blue transition-all duration-300">
                    <span class="font-semibold text-xs sm:text-base lg:text-lg text-white">Get Started ></span>
                </a>
            </div>
        </div>
        <!-- Background Image -->
        <div class="flex w-full overflow-hidden mt-6 sm:mt-12">
            <img src="{{ asset('assets/images/backgrounds/wadedan_A_cheerful_workshop_scene_showing_a_man_presenting_his__f 1.png') }}"
                class="w-full h-[160px] sm:h-[200px] md:h-[300px] lg:h-full object-cover object-top" alt="">
        </div>
    </header>
    <section id="Goals" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] z-10">
        <div class="bg-[linear-gradient(0deg,rgba(230,231,235,0)_0%,#E6E7EB_100%)] rounded-3xl p-[1px]">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-center gap-6 rounded-3xl p-8 lg:p-[32px_52px] bg-white">
                <!-- Heading -->
                <div class="flex flex-col gap-3 text-center lg:text-start">
                    <h2
                        class="font-['Neue_Plak_bold'] text-2xl sm:text-3xl lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[41.6px]">
                        What awaits you <br class="hidden sm:block">after you join 🧐
                    </h2>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">Our programs are designed to <br> develop
                        any ages 😉 </p>
                </div>
                <!-- Card 1 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center">
                    <img src="{{ asset('assets/images/icons/More Creativity.svg') }}" class="w-12 sm:w-14 lg:w-[64px]"
                        alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">More Creativity</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">Lorem Ipsum itu adalah sebusah text contoh
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center">
                    <img src="{{ asset('assets/images/icons/Career Planning.svg') }}" class="w-12 sm:w-14 lg:w-[64px]"
                        alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">Career Planning</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">Lorem Ipsum itu adalah sebusah text contoh
                    </p>
                </div>
                <!-- Card 3 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center">
                    <img src="{{ asset('assets/images/icons/Good Communication.svg') }}" class="w-12 sm:w-14 lg:w-[64px]"
                        alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">Good Communication</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">Lorem Ipsum itu adalah sebusah text contoh
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-24 relative w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] z-10">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <h2
                    class="font-['Neue_Plak_bold'] text-xl sm:text-2xl lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[44.54px] capitalize">
                    Why choose 🌟 <br class="hidden md:block"> Mindfuel?
                </h2>
            </div>
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                    <div
                        class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                        <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                            <img class=" rounded-xl object-cover"
                                src="https://plus.unsplash.com/premium_photo-1679547202440-356042e564a3?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="about Us image" />
                        </div>
                        <img class="sm:ml-0 ml-auto rounded-xl object-cover"
                            src="https://plus.unsplash.com/premium_photo-1661326274569-dd8337c5e6cf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="about Us image" />
                    </div>
                    <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    Lorem ipsum dolor sit amet.</h2>
                                <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit odit sed dolor provident
                                    facilis beatae, error, architecto atque distinctio ipsa quo quidem voluptatibus aliquid
                                    dolore officia inventore asperiores nostrum veritatis impedit pariatur quod sequi!
                                    Officiis odit laudantium consectetur, delectus fugit mollitia id tenetur rerum non
                                    voluptas ea tempore, voluptate dolorum?</p>
                            </div>
                            <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h3 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">33+</h3>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Years of Experience</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">125+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Successful Projects</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">52+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Happy Clients</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="Categories" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] mt-[100px]">
        <div class="flex flex-col gap-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <h2
                    class="font-['Neue_Plak_bold'] text-xl sm:text-2xl lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[44.54px] capitalize">
                    We have several 🌟 <br class="hidden md:block"> workshop categories
                </h2>
                {{-- <a href="#"
                    class="flex items-center rounded-full py-4 px-6 gap-3 bg-aktiv-orange hover:bg-aktiv-orange-dark transition">
                    <span class="font-semibold text-white hidden md:block">See All</span>
                    <span
                        class="w-6 h-6 rounded-full bg-white text-center align-middle text-aktiv-orange font-bold">&gt;</span>
                </a> --}}
            </div>
            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse ($categories as $itemCategory)
                    <a href="{{ route('front.category', $itemCategory->slug) }}" class="card hover:shadow-lg transition">
                        <div class="flex items-center h-full rounded-3xl p-5 gap-3 bg-white">
                            <img src="{{ Storage::url($itemCategory->icon) }}" class="w-[56px] h-[56px] flex-shrink-0"
                                alt="icon">
                            <div class="flex flex-col gap-1 overflow-hidden">
                                <h3 class="font-semibold text-lg sm:text-xl leading-[24px] sm:leading-[27px] break-words">
                                    {{ $itemCategory->name }}
                                </h3>
                                <p class="font-medium text-sm sm:text-base text-aktiv-grey">{{ $itemCategory->tagline }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-aktiv-grey">Belum ada data category</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="Trending" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] mt-[100px]">
        <div class="flex flex-col gap-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <h2
                    class="font-['Neue_Plak_bold'] text-[20px] sm:text-[24px] lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[44.54px] capitalize">
                    Highly sought-after 🔥<br class="hidden md:block"> workshops are trending
                </h2>
            </div>
            <!-- Workshops Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($newWorkshops as $itemNewWorkshop)
                    <a href="{{ route('front.details', $itemNewWorkshop->slug) }}" class="card hover:shadow-lg transition">
                        <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-6 bg-white">
                            <!-- Instructor Details -->
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full overflow-hidden">
                                    <img src="{{ Storage::url($itemNewWorkshop->instructor->avatar) }}"
                                        class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-base md:text-lg leading-[27px]">
                                        {{ $itemNewWorkshop->instructor->name }}</p>
                                    <p class="font-medium text-sm md:text-base text-aktiv-grey">
                                        {{ $itemNewWorkshop->instructor->occupation }}
                                    </p>
                                </div>
                            </div>
                            <!-- Workshop Thumbnail -->
                            <div class="relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="{{ Storage::url($itemNewWorkshop->thumbnail) }}"
                                    class="w-full h-full object-cover" alt="thumbnail">
                                @if ($itemNewWorkshop->is_open)
                                    <div
                                        class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 text-white z-10
                                    {{ $itemNewWorkshop->has_started ? 'bg-aktiv-orange' : 'bg-aktiv-green' }}">
                                        <img src="{{ asset($itemNewWorkshop->has_started ? 'assets/images/icons/timer-start.svg' : 'assets/images/icons/medal-star.svg') }}"
                                            class="w-6 h-6" alt="icon">
                                        <span class="font-semibold text-sm md:text-base">
                                            {{ $itemNewWorkshop->has_started ? 'STARTED' : 'OPEN' }}
                                        </span>
                                    </div>
                                @else
                                    <div
                                        class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 bg-aktiv-red text-white z-10">
                                        <img src="{{ asset('assets/images/icons/sand-timer.svg') }}" class="w-6 h-6"
                                            alt="icon">
                                        <span class="font-semibold">CLOSED</span>
                                    </div>
                                @endif
                            </div>
                            <!-- Workshop Details -->
                            <div class="flex flex-col gap-3">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('assets/images/icons/calendar-2.svg') }}"
                                            class="w-3 md:w-5 h-3 md:h-5" alt="icon">
                                        <span class="font-medium text-aktiv-grey text-xs md:text-base">
                                            {{ $itemNewWorkshop->started_at->format('M d, Y') }}
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('assets/images/icons/timer.svg') }}"
                                            class="w-3 md:w-5 h-3 md:h-5" alt="icon">
                                        <span class="font-medium text-aktiv-grey text-xs md:text-base">
                                            {{ $itemNewWorkshop->time_at->format('h:i A') }}
                                        </span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-xl leading-6 line-clamp-2 hover:line-clamp-none transition">
                                    {{ $itemNewWorkshop->name }}
                                </h3>
                                <p class="font-medium text-aktiv-grey text-sm md:text-base">
                                    {{ $itemNewWorkshop->category->name }}</p>
                            </div>
                            <!-- Pricing -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp
                                        {{ number_format($itemNewWorkshop->price, 0, '.', ',') }}</p>
                                    <p class="font-medium text-aktiv-grey">/person</p>
                                </div>
                                <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" class="w-10 h-10"
                                    alt="icon">
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-aktiv-grey">Belum ada data workshop terbaru</p>
                @endforelse
            </div>
        </div>
    </section>

    <div class="w-full py-[52px] px-5 bg-white mt-[100px]">
        <section id="Testimony">
            <div class="flex flex-col gap-8">
                <div class="flex w-full max-w-[1280px] mx-auto items-center justify-between px-[52px]">
                    <h2 class="font-Neue-Plak-bold text-[18px] lg:text-[36px] leading-[44.54px] capitalize">Let’s Hear what
                        people 💗<br>
                        say about our workshop
                    </h2>
                    {{-- <a href="#"
                        class="flex items-center rounded-full py-4 px-4 lg:px-6 h-[56px] gap-3 bg-aktiv-orange">
                        <span class="font-semibold text-white hidden lg:block">See All</span>
                        <span
                            class="w-6 h-6 rounded-full bg-white text-center align-middle text-aktiv-orange font-bold">></span>
                    </a> --}}
                </div>
                <div class="swiper w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="testimony-card w-full max-w-[1176px] h-[413px] mx-auto flex items-center rounded-2xl overflow-hidden">
                                <div class="flex h-full w-[436px] shrink-0 bg-aktiv-orange overflow-hidden">
                                    <img src="{{ asset('assets/images/photos/testimony1.png') }}"
                                        class="w-full h-full object-cover" alt="photo">
                                </div>
                                <div
                                    class="h-full w-full flex flex-col justify-between p-[42px] bg-[linear-gradient(280.42deg,#5B8CE9_-42.59%,#4EB6F5_50.66%,#5B8CE9_143.91%)]">
                                    <p class="font-['Times_New_Roman'] font-bold text-[38px] leading-[60.8px] text-white">
                                        "The support from the behind-the-scenes team is noteworthy. They are responsive,
                                        helpful, and genuinely invested in their members ❤️ ."
                                    </p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col gap-1">
                                            <p class="font-semibold text-lg leading-[27px] text-white">Otter</p>
                                            <p class="font-medium text-white">Mother of Tenz</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="testimony-card w-full max-w-[1176px] h-[413px] mx-auto flex items-center rounded-2xl overflow-hidden">
                                <div class="flex h-full w-[436px] shrink-0 bg-aktiv-orange overflow-hidden">
                                    <img src="{{ asset('assets/images/photos/testimony1.png') }}"
                                        class="w-full h-full object-cover" alt="photo">
                                </div>
                                <div
                                    class="h-full w-full flex flex-col justify-between p-[42px] bg-[linear-gradient(280.42deg,#5B8CE9_-42.59%,#4EB6F5_50.66%,#5B8CE9_143.91%)]">
                                    <p class="font-['Times_New_Roman'] font-bold text-[38px] leading-[60.8px] text-white">
                                        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit sint sunt
                                        incidunt obcaecati assumenda error ❤️ ."
                                    </p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col gap-1">
                                            <p class="font-semibold text-lg leading-[27px] text-white">Otter</p>
                                            <p class="font-medium text-white">Mother of Tenz</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                                class="p-[5px] w-8 h-8" alt="star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute w-full max-w-[1244px] mx-auto left-1/2 top-1/2 transform -translate-x-1/2 z-10">
                        <div class="swiper-button-prev !w-12 !h-12 rounded-full after:hidden">
                            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-full h-full"
                                alt="icon">
                        </div>
                        <div class="swiper-button-next !w-12 !h-12 rounded-full after:hidden">
                            <img src="{{ asset('assets/images/icons/arrow-left.svg') }}" class="w-full h-full rotate-180"
                                alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Benefits" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] mt-[100px]">
            <div class="flex flex-col gap-8">
                <!-- Header -->
                <div class="flex items-center justify-center">
                    <h2
                        class="font-['Neue_Plak_bold'] text-[24px] sm:text-[28px] lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[44.54px] capitalize text-center">
                        Get acquainted with us! 🙌🏻
                    </h2>
                </div>
                <!-- Benefits Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Benefit Card -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/In-Depth Learning from Experts Instructor.png') }}"
                                class="w-[56px] h-[56px]" alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">In-Depth Learning from Experts
                                Instructor</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">We feature instructors with strong
                            field-specific expertise.</p>
                    </div>
                    <!-- Tangible Results -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/Tangible Results.png') }}" class="w-[56px] h-[56px]"
                                alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">Tangible Results</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">Our students are highly engaged and
                            supportive of our community.</p>
                    </div>
                    <!-- Supportive Learning Environment -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/Supportive Learning Environment.png') }}"
                                class="w-[56px] h-[56px]" alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">Supportive Learning Environment</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">We feature instructors with strong
                            field-specific expertise.</p>
                    </div>
                    <!-- Community Support -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/community support.png') }}" class="w-[56px] h-[56px]"
                                alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">Community Support</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">We feature instructors with strong
                            field-specific expertise.</p>
                    </div>
                    <!-- Networking Opportunities -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/Networking Opportunities With Other.png') }}"
                                class="w-[56px] h-[56px]" alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">Networking Opportunities With Other</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">We feature instructors with strong
                            field-specific expertise.</p>
                    </div>
                    <!-- Learning Flexibility -->
                    <div
                        class="flex flex-col h-full justify-between rounded-3xl border border-[#E6E7EB] p-6 gap-3 bg-white hover:shadow-lg transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/icons/Learning Flexibility.png') }}"
                                class="w-[56px] h-[56px]" alt="icon">
                            <h3 class="font-semibold md:text-lg leading-[27px]">Learning Flexibility</h3>
                        </div>
                        <p class="font-medium text-aktiv-grey leading-[25.6px]">We offer a variety of workshops that you
                            can learn from every day.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div id="Join-Now" class="relative w-full overflow-hidden">
        <img src="{{ asset('assets/images/backgrounds/lines.svg') }}" class="w-full h-full object-cover absolute"
            alt="backgrounds">
        <div
            class="relative flex items-center w-full max-w-[1176px] mx-auto my-[52px] h-[464px] rounded-2xl bg-[linear-gradient(280.42deg,#5B8CE9_-42.59%,#4EB6F5_50.66%,#5B8CE9_143.91%)] overflow-hidden z-10">
            <div class="flex flex-col justify-center p-[60px] lg:p-[90px] pr-[60px] gap-4 lg:gap-8">
                <p
                    class="rounded-full w-fit text-sm lg:text-base py-3 px-6 md:px-8 font-semibold text-aktiv-blue bg-[#DFEFFF]">
                    What are you
                    waiting
                    for? Join now 🔥 </p>
                <p class="font-bold text-[25px] lg:text-[32px] leading-[48px] text-white">Study more purposefully and fill
                    your day with
                    productivity</p>
                <a href="#" class="flex items-center w-fit rounded-full px-9 h-[56px] gap-[10px] bg-aktiv-orange">
                    <span class="font-semibold text-white">Join Now ></span>
                </a>
            </div>
            <div class="hidden lg:flex w-[496px] h-full shrink-0 overflow-hidden">
                <img src="{{ asset('assets/images/photos/join-now.png') }}" class="w-full h-full object-contain"
                    alt="photo">
            </div>
        </div>
    </div>
    <footer class="w-full p-[52px] bg-white hidden lg:block">
        <div class="flex flex-col w-full max-w-[1176px] mx-auto gap-8">
            <div class="flex flex-col items-center gap-4">
                <img src="{{ asset('assets/images/logos/Logo-blue.svg') }}" class="h-10" alt="logo">
                <p class="font-medium text-aktiv-grey">Ipsum is a company engaged in offline education.</p>
            </div>
            <hr class="border-[#E6E7EB]">
            <div class="grid lg:grid-cols-3 items-center">
                <p class="font-medium text-aktiv-grey hidden lg:flex">© 2024 Workflow Copyright</p>
                <ul class="flex flex-col lg:flex-row items-center justify-center gap-6">
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Workshop</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Community</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Testimony</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">About Us</a>
                    </li>
                </ul>
                <ul class="flex flex-col items-center justify-end gap-6 mt-5">
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Instagram</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
@endsection

@push('after-scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush
