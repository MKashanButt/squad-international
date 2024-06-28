@extends('template')
@section('content')
    <dialog class="w-full h-full fixed z-50 top-0 left-0 flex items-center justify-center" id="reviewDialog">
        <section class="w-[50%] px-5 py-5 flex flex-col gap-5 rounded-md shadow-md m-auto bg-zinc-50 opacity-100 relative">
            <button
                class="w-[40px] h-[40px] rounded-3xl flex items-center justify-center bg-zinc-950 text-white text-3xl absolute right-3 top-3 border-2 border-slate-950 transition ease-in-out hover:text-black hover:bg-white"
                onclick="toggleDialog()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-3xl font-bold m-auto mt-10">Submit A Review</h2>
            <form action="/reviews/store" method="POST" class="flex flex-col gap-2">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="border border-black outline-none p-2 mb-5"
                    required>
                <label for="name">Email: <span class="font-sm">(optional)</span></label>
                <input type="email" name="email" id="email" class="border border-black outline-none p-2 mb-5">
                <label for="review">Review:</label>
                <textarea name="review" id="review" cols="20" rows="5" resize="false"
                    class="border border-black outline-none p-2 mb-5" required></textarea>
                <button class="bg-zinc-950 text-white flex items-center justify-center py-3">Submit Review</button>
            </form>
        </section>
    </dialog>
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/review-hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Reviews</h1>
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
    <section class="w-[90%] px-2 py-5 flex gap-4 flex-wrap mt-[20px] mx-auto">
        @foreach ($data as $item)
            <div class="w-[23%] px-3 py-3 rounded-md shadow-xl flex flex-col gap-3 items-center justify-center text-center">
                <div class="w-[45px] p-2 rounded-3xl bg-zinc-950 text-white flex items-center justify-center">
                    {{ $item->client_name[0] }}
                </div>
                <p class="font-bold text-xl">{{ $item->client_name }}</p>
                <p>{{ $item->review }}</p>
            </div>
        @endforeach
    </section>
    <hr class="w-[90%] border-2 rounded-xl m-auto border-black my-8">
@endsection
