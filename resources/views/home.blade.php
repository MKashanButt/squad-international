@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center">
        <div class="w-[100vw] h-full">
            <video autoplay loop muted class="w-full h-full z-40 object-cover">
                <source src="{{ asset('images/company-video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>
    <!-- who we are -->
    <section class="w-[95%] flex items-center justify-center gap-5 m-auto mt-28">
        <img src="{{ asset('images/home/why-choose-us.png') }}" alt="" class="w-2/5 h-full p-2" loading="lazy">
        <div class="w-3/5 flex flex-col justify-center gap-2">
            <h2 class="md:text-md lg:text-3xl font-bold">Who We Are?</h2>
            <p class="md:text-xs lg:text-lg">Squad International, a leading digital marketing agency with over 7 years of
                expertise and an exceptional 99% client satisfaction rate. From UI/UX design to SEO optimization, we provide
                a comprehensive range of services tailored to your needs.</p>
            <p class="md:text-xs lg:text-lg"> Count on us for compelling visuals, engaging
                content, and impactful campaigns that elevate your brand's digital presence with precision and
                professionalism.</p>
        </div>
    </section>
    <!-- section continued -->
    <section class="w-100 px-5 py-5 flex gap-5">
        <div class="w-1/3 p-5 flex flex-col items-center justify-center relative">
            <p class="text-[120px] font-black"
                style="color: transparent;-webkit-text-stroke-width: 4px;-webkit-text-stroke-color: black;">
                7<span class="absolute text-[60px]">+</span></p>
            <span class="text-2xl font-bold">Years Of Experience</span>
        </div>
        <div class="w-1/3 p-5 flex flex-col items-center justify-center relative">
            <p class="text-[120px] font-black"
                style="color: transparent;-webkit-text-stroke-width: 4px;-webkit-text-stroke-color: black;">
                99<span class="absolute text-[60px]">%</span></p>
            <span class="text-2xl font-bold">Positive Rating</span>
        </div>
        <div class="w-1/3 p-5 flex flex-col items-center justify-center relative">
            <p class="text-[120px] font-black"
                style="color: transparent;-webkit-text-stroke-width: 4px;-webkit-text-stroke-color: black;">
                200<span class="absolute text-[60px]">+</span></p>
            <span class="text-2xl font-bold">Happy Clients</span>
        </div>
    </section>
    <!-- services -->
    <section class="flex flex-col gap-5 items-center justify-center mt-28">
        <h2 class="text-3xl font-bold">Services</h2>
        <div class="w-[90%] flex gap-5">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex flex-col gap-4">
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/bdefb9af-54bb-4d95-a8b4-fb0f9f31e978/Zc444fI5mb.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Design</h3>
                    <p class="md:text-xs lg:text-lg">Transform your brand with our premium design services. We create
                        visuals that captivate and convert. Our services include</p>
                    <ul class="ml-8 list-[circle] md:text-xs lg:text-lg">
                        <li>UI/UX</li>
                        <li>Video Creation</li>
                        <li>Video Editing</li>
                        <li>Motion Graphics</li>
                        <li>2D Animation</li>
                        <li>3D Animation</li>
                    </ul>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex flex-col gap-4">
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/b916bb96-ac52-4020-b75a-d96f5b4df33b/Vu1VKTKo4W.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Development</h3>
                    <p class="md:text-xs lg:text-lg">Transform your brand with our premium development services. We create
                        visuals that captivate and convert. Our services include</p>
                    <ul class="ml-8 list-[circle] md:text-xs lg:text-lg">
                        <li>App Development</li>
                        <li>Web App Development</li>
                        <li>CRM</li>
                        <li>Website Design/Development</li>
                        <li>Website Maintenance</li>
                    </ul>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex flex-col gap-4">
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/d48779c0-a4ac-483d-91c9-2b57588cf8f5/K2rSFhCj9G.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Branding</h3>
                    <p class="md:text-xs lg:text-lg">Transform your brand with our premium branding services. We create
                        visuals that captivate and convert. Our services include</p>
                    <ul class="ml-8 list-[circle] md:text-xs lg:text-lg">
                        <li>Logo Designing</li>
                        <li>SEO</li>
                        <li>Content Writing</li>
                        <li>Copy Writing</li>
                        <li>SMM</li>
                        <li>Blog Posting</li>
                        <li>PPC</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section class="w-[90%] flex flex-col gap-4 mt-28 mx-auto">
        <div class="flex items-center">
            <h2 class="md:w-[88%] lg:w-[91%] font-bold text-2xl p-2">Portfolio</h2>
            <div class="md:w-[12%] lg:w-[9%] flex gap-4 justify-end p-2 swiper-pagination relative">
                <button class="md:w-[30px] lg:w-[40px] bg-black text-white rounded-sm swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="md:w-[30px] lg:w-[40px] bg-black text-white rounded-sm swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="overflow-hidden select-none">
            <div class="flex gap-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 9.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 1.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 2.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 8.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 3.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 10.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 4.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 5.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 6.png') }}" alt="" class="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 7.png') }}" alt="" class=""
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews -->
    <x-reviews :data="$data" />
@endsection
