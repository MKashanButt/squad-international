<section class="w-[92%] flex gap-5 mt-28 mx-auto">
    <div class="w-1/2 flex gap-5 p-4 flex-col">
        <h2 class="font-bold text-3xl">Reviews</h2>
        <p>We invite you to explore our existing reviews, a testament to our commitment to excellence. Customers input
            is crucial in guiding our continuous improvement efforts and ensuring we meet their expectations</p>
        <a href="/reviews">
            <button
                class="bg-zinc-950 border-2 border-zinc-950 transition ease-in-out p-2 text-white rounded-sm hover:bg-white hover:text-black">Add
                A
                Review</button>
        </a>
    </div>
    <div class="w-1/2 flex flex-col gap-5 p-4">
        <div style="--swiper-navigation-color: #000000; --swiper-pagination-color: #000000"
            class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                @foreach ($data as $item)
                    <div
                        class="w-[90%] shadow-md rounded-md flex flex-col gap-3 items-center justify-center text-center px-[50px] py-2 m-auto swiper-slide">
                        <div class="w-12 p-2 rounded-3xl bg-black text-white">
                            <p>{{ $item->client_name[0] }}</p>
                        </div>
                        <p>{{ $item->review }}</p>
                        <span>{{ $item->client_name }}</span>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
