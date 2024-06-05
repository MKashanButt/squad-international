@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/design/hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Design Services</h1>
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
        <h2 class="font-bold text-3xl">Design Related Services</h2>
        <div class="w-[90%] flex flex-wrap">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/ui-ux-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">UI/UX</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/video-creation-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Video Creation</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/video-editing-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Video Editing</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/motion-graphic-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">Motion Graphics</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/2d-animation-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">2D Animation</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/3d-animation-icon.png') }}" alt="" class="w-1/3 mx-auto">
                <div class="w-2/3 flex flex-col gap-2">
                    <h3 class="text-lg font-bold">3D Animation</h3>
                    <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed adipisci veniam
                        optio placeat,
                        deserunt eveniet deleniti blanditiis corrupti alias vitae.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/ui-ux.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">UI/UX</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                </div> --}}
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Video Creation</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                </div> --}}
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/video-creation.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/video-editing.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Video Editing</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                </div> --}}
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Motion Graphics</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                </div> --}}
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/motion-graphics.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/2d-animation.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">2D Animation</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                </div> --}}
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">3D Animation</h1>
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
                {{-- <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28">
                    <img src="https://placehold.co/600x700" alt="" class="w-[100px] h-28 border-4 border-black">
                </div> --}}
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/3d-animation.png') }}" alt="" class="w-full">
            {{-- <div class="w-full flex gap-5 items-center justify-center absolute bottom-2">
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
                <div class="rounded-[100%] bg-zinc-950 p-1"></div>
            </div> --}}
        </div>
    </section>
@endsection
