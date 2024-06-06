@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/branding/hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Branding Services</h1>
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
    <!-- Best In The Industry -->
    <x-best-in-industry />
    <!-- Sub Services -->
    <section class="flex flex-col items-center gap-5 justify-center mt-28">
        <h2 class="font-bold text-3xl">Branding Related Services</h2>
        <div class="w-[90%] flex flex-wrap">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/logo-design-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Logo Designing</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/seo-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">SEO</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/content-writting-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Content Writing</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/copywriting-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Copy Writing</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/social-media-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">SMM</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/blog-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Blog Posting</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/logo-designing.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Logo Designing</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">SEO</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            {{-- <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/seo.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/content-writing.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Content Writing</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            {{-- <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Copy Writing</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            {{-- <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/copy-writing.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/smm.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">SMM</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            {{-- <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Blog Posting</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, nemo voluptates unde laborum error, ab
                    necessitatibus odit molestias mollitia praesentium impedit vel assumenda accusantium quam. Minima
                    sunt
                    nemo vitae neque blanditiis quisquam!</p>
            </div>
            {{-- <div class="w-full h-28 flex overflow-hidden bg-slate absolute bottom-[-30px] left-0">
                <div thumbsSlider="" class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="w-1/2 relative z-40">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/branding/blog.png') }}" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://placehold.co/600x400" alt="" class="w-full">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
@endsection
