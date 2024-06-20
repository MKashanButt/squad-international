@extends('template')
@section('content')
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/about-hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">About Us</h1>
            <p class="lg:text-1xl">Welcome to Squad International, where your journey towards digital excellence begins. We
                are a dynamic team of digital marketing experts driven by a shared passion for innovation and excellence. As
                a leading agency in the industry, we specialize in elevating brands through meticulous attention to detail,
                strategic thinking, and cutting-edge solutions. From conceptualization to execution, we are committed to
                delivering exceptional results that exceed expectations. With a focus on creativity, integrity, and client
                satisfaction, we invite you to join us in achieving unparalleled success in the digital landscape.</p>
        </div>
    </section>
    <section class="flex gap-5 mt-28 justify-center">
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">About Us</h2>
            <p>Welcome to Squad International, where your journey towards digital excellence begins. We are a dynamic team
                of digital marketing experts driven by a shared passion for innovation and excellence.</p>
            <p>As a leading agency
                in the industry, we specialize in elevating brands through meticulous attention to detail, strategic
                thinking, and cutting-edge solutions. From conceptualization to execution, we are committed to delivering
                exceptional results that exceed expectations.</p>
            <p>With a focus on creativity, integrity, and client
                satisfaction, we invite you to join us in achieving unparalleled success in the digital landscape.</p>
        </div>
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">Our Vission</h2>
            <p>At our core, we're dedicated to transforming the digital realm, going beyond old-fashioned web design. Our
                mission is to lead the way in blending technology with creativity, creating outstanding online experiences
                that change how brands connect with people. As industry leaders, we're committed to setting new standards
                with innovative ideas, creativity, and top-notch quality.</p>
            <h2 class="font-bold text-3xl">Our Mission</h2>
            <p>We empower businesses with innovative digital solutions to drive them toward remarkable success. Fueled by
                our passion for pushing boundaries, we deeply explore our clients' goals to create engaging online
                experiences. With careful attention to detail and a thorough understanding of user behavior, we craft
                captivating digital journeys that forge lasting connections.</p>
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
            <p>At Squad International, we prioritize cultivating a vibrant and nurturing workplace atmosphere. Since our
                establishment, we've embraced innovation, transparency, and an unwavering commitment to our clients and
                communities.</p>
            <p>Built on trust and a persistent pursuit of excellence, we foster a culture where teamwork
                flourishes and personal development is valued. Come be a part of our journey as we collectively shape the
                future, leaving behind a legacy that will endure for generations.</p>
        </div>
    </section>
@endsection
