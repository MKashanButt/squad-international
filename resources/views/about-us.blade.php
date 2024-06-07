@extends('template')
@section('content')
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/about-hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">About Us</h1>
            <p class="lg:text-1xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem qui commodi animi
                quia
                aliquam
                expedita eius hic illum vitae repellendus dolorum libero magnam id provident at ut placeat, eum ab
                fugiat! Nemo!.Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem qui commodi animi
                quia
                aliquam
                expedita eius hic illum vitae repellendus dolorum libero magnam id provident at ut placeat, eum ab
                fugiat! Nemo!</p>
        </div>
    </section>
    <section class="flex gap-5 mt-28 justify-center">
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">Our Vission</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <h2 class="font-bold text-3xl">Our Mission</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
    </section>
    <section class="flex gap-5 mt-28 justify-center">
        <div class="w-2/5 h-[500px] flex flex-col gap-3 p-4 relative">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0720.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0741.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0749.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0756.JPG') }}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0720.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0741.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0749.JPG') }}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/about/SLM_0756.JPG') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="w-3/5 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">Working At Squad!</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
    </section>
@endsection
