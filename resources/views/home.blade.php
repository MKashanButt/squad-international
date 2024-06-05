@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center">
        {{-- <div
            class="w-[30%] h-full py-2 px-5 flex flex-col gap-2 bg-zinc-950 text-white items-center justify-center relative">
            <h1 class="md:text-2xl lg:text-4xl font-bold">Your Marketing Companion</h1>
            <p class="md:text-xs lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem qui
                commodi animi
                quia aliquam
                expedita eius hic illum vitae repellendus dolorum libero magnam id provident at ut placeat, eum ab
                fugiat! Nemo!</p>
        </div> --}}
        <div class="w-100 h-full">
            <video autoplay loop class="w-[100%] h-full z-40">
                <source src="{{ asset('images/company-video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </section>
    <!-- who we are -->
    <section class="w-[95%] flex items-center justify-center gap-5 m-auto mt-28">
        <img src="{{ asset('images/home/why-choose-us.png') }}" alt="" class="w-2/5 h-full p-2">
        <div class="w-3/5 flex flex-col justify-center gap-2">
            <h2 class="md:text-md lg:text-3xl font-bold">Who We Are?</h2>
            <p class="md:text-xs lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ducimus esse
                tenetur cupiditate
                nemo
                voluptatum, laborum maiores itaque animi sint recusandae eligendi omnis officiis, repellendus hic
                commodi est repudiandae quos maxime beatae.</p>
            <p class="md:text-xs lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ducimus esse
                tenetur cupiditate
                nemo
                voluptatum, laborum maiores itaque animi sint recusandae eligendi omnis officiis, repellendus hic
                commodi est repudiandae quos maxime beatae.</p>
        </div>
    </section>
    <!-- services -->
    <section class="flex flex-col gap-5 items-center justify-center mt-28">
        <h2 class="text-3xl font-bold">Services</h2>
        <div class="w-[90%] flex gap-5">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex flex-col gap-4">
                {{-- <img src="{{ asset('images/home/design.png') }}" alt="" class="w-2/5 mx-auto"> --}}
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/bdefb9af-54bb-4d95-a8b4-fb0f9f31e978/Zc444fI5mb.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Design</h3>
                    <p class="md:text-xs lg:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci
                        veniam
                        optio
                        placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
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
                {{-- <img src="{{ asset('images/home/development.png') }}" alt="" class="w-2/5 mx-auto"> --}}
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/b916bb96-ac52-4020-b75a-d96f5b4df33b/Vu1VKTKo4W.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Development</h3>
                    <p class="md:text-xs lg:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci
                        veniam
                        optio
                        placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                    <ul class="ml-8 list-[circle] md:text-xs lg:text-lg">
                        <li>App Development</li>
                        <li>CRM</li>
                        <li>Website Design</li>
                        <li>Website Maintenance</li>
                    </ul>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex flex-col gap-4">
                {{-- <img src="{{ asset('images/home/branding.png') }}" alt="" class="w-2/5 mx-auto"> --}}
                <div class="border-2 w-100 h-auto bg-zinc-200">
                    <dotlottie-player src="https://lottie.host/d48779c0-a4ac-483d-91c9-2b57588cf8f5/K2rSFhCj9G.json"
                        background="transparent" speed="1" loop autoplay class="w-3/5 mx-auto"></dotlottie-player>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="md:text-md lg:text-2xl font-bold">Branding</h3>
                    <p class="md:text-xs lg:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
                        adipisci
                        veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                    <ul class="ml-8 list-[circle] md:text-xs lg:text-lg">
                        <li>Logo Designing</li>
                        <li>SEO</li>
                        <li>Content Writing</li>
                        <li>Copy Writing</li>
                        <li>SMM</li>
                        <li>Blog Posting</li>
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
                            <img src="{{ asset('images/home/PORTFOLIO 1.png') }}" alt="" class="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 2.png') }}" alt="" class="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 3.png') }}" alt="" class="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 4.png') }}" alt="" class="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/home/PORTFOLIO 5.png') }}" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews -->
@endsection
