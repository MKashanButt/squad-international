@extends('template')
@section('content')
    <section class="h-[80vh] flex items-center justify-center">
        <div class="w-1/2 h-full py-2 px-5 text-center flex flex-col gap-2 bg-zinc-950 text-white justify-center">
            <h1 class="text-4xl font-bold">Blogs</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem qui commodi animi quia aliquam
                expedita eius hic illum vitae repellendus dolorum libero magnam id provident at ut placeat, eum ab
                fugiat! Nemo!</p>
        </div>
        <div class="w-1/2 h-full bg-slate-50"></div>
    </section>
    <section class="w-full flex flex-col gap-5 items-center justify-center mt-28">
        <form action="" class="w-1/3 flex shadow-md rounded-md overflow-hidden">
            <input type="search" name="blogSearch" id="blogSearch" placeholder="Search....."
                class="h-auto outline-none w-[100%] pl-2">
            <button class="bg-zinc-950 text-white p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </form>
        <div class="w-[98%] flex grid gap-5 grid-rows-2 grid-cols-3 items-center justify-center">
            <div class=" flex flex-col gap-4 row-span-2 p-5 shadow-md h-full">
                <img src="https://placehold.co/800x400" alt="" class="w-full h-[200px]">
                <h2 class="font-bold text-2xl">Blog One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus rem laboriosam quo doloremque
                    obcaecati aliquam id cupiditate, adipisci quia.</p>
                <button
                    class="w-1/3 bg-zinc-950 hover:bg-zinc-900 text-white py-2 flex items-center justify-center text-sm">Read
                    More</button>
            </div>
            <div class="p-5 flex gap-5 shadow-md">
                <img src="https://placehold.co/200x200" alt="" class="1/3 h-[200px]">
                <div class="w-2/3 flex flex-col gap-2">
                    <h2 class="font-bold text-2xl">Blog Two</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus rem laboriosam
                        quo doloremque obcaecati aliquam id cupiditate, adipisci quia.</p>
                    <button
                        class="bg-zinc-950 hover:bg-zinc-900 text-white py-2 flex items-center justify-center text-sm">Read
                        More</button>
                </div>
            </div>
            <div class="p-5 flex gap-5 shadow-md">
                <img src="https://placehold.co/200x200" alt="" class="1/3 h-[200px]">
                <div class="w-2/3 flex flex-col gap-2">
                    <h2 class="font-bold text-2xl">Blog Three</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus rem laboriosam
                        quo doloremque obcaecati aliquam id cupiditate, adipisci quia.</p>
                    <button
                        class="bg-zinc-950 hover:bg-zinc-900 text-white py-2 flex items-center justify-center text-sm">Read
                        More</button>
                </div>
            </div>
            <div class="p-5 flex gap-5 shadow-md">
                <img src="https://placehold.co/200x200" alt="" class="1/3 h-[200px]">
                <div class="w-2/3 flex flex-col gap-2">
                    <h2 class="font-bold text-2xl">Blog Four</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus rem laboriosam
                        quo doloremque obcaecati aliquam id cupiditate, adipisci quia.</p>
                    <button
                        class="bg-zinc-950 hover:bg-zinc-900 text-white py-2 flex items-center justify-center text-sm">Read
                        More</button>
                </div>
            </div>
            <div class="p-5 flex gap-5 shadow-md">
                <img src="https://placehold.co/200x200" alt="" class="1/3 h-[100%]">
                <div class="w-2/3 flex flex-col gap-2">
                    <h2 class="font-bold text-2xl">Blog Five</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus rem laboriosam
                        quo doloremque obcaecati aliquam id cupiditate, adipisci quia.</p>
                    <button
                        class="bg-zinc-950 hover:bg-zinc-900 text-white py-2 flex items-center justify-center text-sm">Read
                        More</button>
                </div>
            </div>
        </div>
    </section>
@endsection