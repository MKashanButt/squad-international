<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squad International</title>
    @if (Request::is('/'))
        <link rel="stylesheet" href="{{ asset('css/sliders/home.css') }}">
    @endif
    @if (Request::is('about-us'))
        <link rel="stylesheet" href="{{ asset('css/sliders/about-us.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body onscroll="checkPageScroll()">
    <!-- header -->
    <header class="w-full md:flex column-2 text-lg p-1 shadow-sm bg-white transition-all z-50" id="header">
        <div class="md:w-1/5 sm:w-full pl-2 flex items-center md:justify-start jutify-center">
            <a href="/">
                <img src="{{ asset('images/SI.jpg') }}" alt="" class="lg:w-3/6 md:w-1/4 sm:w-1/4 h-full">
            </a>
        </div>
        <nav class="w-4/5 flex items-center justify-end">
            <ul class="flex gap-10 items-center justify-center md:text-xs lg:text-lg">
                <a href="/">
                    <li class="transition ease-in-out border-white border-b-2 hover:border-black hover:border-b-2">Home
                    </li>
                </a>
                <li class="cursor-pointer" id="header-menu">
                    <span onclick="toggleMenu()"
                        class="select-none flex gap-2 items-center justify-center transition ease-in-out border-white border-b-2 hover:border-black hover:border-b-2">Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="md:w-3 lg:w-5 toggleMenuIcon" id="toggleMenuIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                    <div class="flex absolute divide-x">
                        <ul class="flex flex-col h-full divide-y mt-1 bg-white hidden z-50" id="sub-menu">
                            <a href="/services/branding">
                                <li class="pl-2 pr-[50px] py-2 flex relative flex items-center">Branding
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="md:w-3 lg:w-5 toggleMenuIcon absolute right-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg> --}}
                                </li>
                            </a>
                            <a href="/services/design">
                                <li class="pl-2 pr-[50px] py-2 flex items-center relative">Design</li>
                            </a>
                            <a href="/services/development">
                                <li class="pl-2 pr-[50px] py-2 flex relative">Development</li>
                            </a>
                        </ul>
                        {{-- sub service-menu --}}
                        {{-- <ul class="flex flex-col divide-y mt-1 bg-white hidden z-50" id="brandingSubService">
                            <li class="pl-2 pr-[50px] py-2 flex">Logo Designing</li>
                            <li class="pl-2 pr-[50px] py-2 flex">SEO</li>
                            <li class="pl-2 pr-[50px] py-2 flex">Content Writing</li>
                            <li class="pl-2 pr-[50px] py-2 flex">Copy Writing</li>
                            <li class="pl-2 pr-[50px] py-2 flex">SMM</li>
                            <li class="pl-2 pr-[50px] py-2 flex">Blog Posting</li>
                            <li class="pl-2 pr-[50px] py-2 flex">PPC</li>
                        </ul> --}}
                    </div>
                </li>
                <a href="/reviews">
                    <li class="transition ease-in-out border-white border-b-2 hover:border-black hover:border-b-2">
                        Reviews
                    </li>
                </a>
                <a href="/blogs">
                    <li class="transition ease-in-out border-white border-b-2 hover:border-black hover:border-b-2">Blogs
                    </li>
                </a>
                <a href="/about-us">
                    <li class="transition ease-in-out border-white border-b-2 hover:border-black hover:border-b-2">About
                        Us</li>
                </a>
                <a href="#contact">
                    <button
                        class="bg-zinc-950 text-white border-2 border-black px-4 py-2 rounded-sm transition ease-in-out hover:bg-white hover:text-black">Contact
                        Us</button>
                </a>
            </ul>
        </nav>
    </header>
    @yield('content')
    <section class="flex flex-col gap-5 px-[100px] mt-28" id="contact">
        <h2 class="font-bold md:text-md lg:text-3xl text-center">Contact Us</h2>
        <div class="flex gap-10 px-[50px]">
            <img src="{{ asset('images/contact.png') }}" alt="" class="w-2/5 h-full">
            <form action="submission" class="w-3/5 flex flex-col gap-2 justify-center">
                <label for="name" class="md:text-xs lg:text-lg">Name:</label>
                <input type="text" name="name" id="name" required
                    class="w-[80%] h-8 pl-2 border border-black rounded-sm outline-none">
                <label for="email" class="md:text-xs lg:text-lg">Email:</label>
                <input type="text" name="email" id="email" required
                    class="w-[80%] h-8 pl-2 bg-grey outline-none border border-black rounded-sm">
                <label for="message" class="md:text-xs lg:text-lg">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10" required
                    class="w-[80%] bg-grey pl-2 outline-none border border-black rounded-sm"></textarea>
                <button
                    class="md:text-xs lg:text-lg w-[80%] bg-zinc-950 text-white px-4 py-2 rounded-sm hover:bg-zinc-900">
                    Send
                </button>
            </form>
        </div>
    </section>
    <!-- footer -->
    <footer class="flex gap-5 p-2 mt-28 border border-t py-10">
        <div class="w-1/5 px-3">
            <img src="{{ asset('images/SI.jpg') }}" alt="" class="w-2/5">
            <p class="md:text-xs lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe aperiam
                dolorum vel
                consequuntur amet
                dolores autem temporibus, reiciendis totam necessitatibus.</p>
            <div class="flex gap-3">
                <a href="https://www.facebook.com/Squadinternational.net/" target="__blank">
                    <button class="p-1 border border-black rounded-2xl mt-1 flex items-center justify-center">
                        <svg viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)"
                                    fill="#000000">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z"
                                            id="facebook-[#176]">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </a>
                <a href="https://www.linkedin.com/company/squadinternational" target="__blank">
                    <button class="p-1 border border-black rounded-sm mt-1 flex items-center justify-center">
                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-271 283.9 256 235.1"
                            xml:space="preserve" class="w-4">
                            <g>
                                <rect x="-264.4" y="359.3" width="49.9" height="159.7" />
                                <path d="M-240.5,283.9c-18.4,0-30.5,11.9-30.5,27.7c0,15.5,11.7,27.7,29.8,27.7h0.4c18.8,0,30.5-12.3,30.4-27.7
                       C-210.8,295.8-222.1,283.9-240.5,283.9z" />
                                <path
                                    d="M-78.2,357.8c-28.6,0-46.5,15.6-49.8,26.6v-25.1h-56.1c0.7,13.3,0,159.7,0,159.7h56.1v-86.3c0-4.9-0.2-9.7,1.2-13.1
                       c3.8-9.6,12.1-19.6,27-19.6c19.5,0,28.3,14.8,28.3,36.4V519h56.6v-88.8C-14.9,380.8-42.7,357.8-78.2,357.8z" />
                            </g>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <div class="w-1/5">
            <h4 class="font-bold lg:text-2xl md:text-md">Page Links</h4>
            <ul class="list-[circle] ml-10 lg:text-lg md:text-xs">
                <a href="/">
                    <li>Home</li>
                </a>
                <a href="/services">
                    <li>Services</li>
                </a>
                <a href="/blog">
                    <li>Blog</li>
                </a>
                <a href="/about-us">
                    <li>About Us</li>
                </a>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="w-1/5">
            <h4 class="font-bold lg:text-2xl md:text-md">Services</h4>
            <ul>
                <a href="/design">
                    <li class="lg:text-xl md:text-xs font-bold">Design</li>
                    <ul class="list-[circle] ml-10 lg:text-lg md:text-xs">
                        <li>UI/UX</li>
                        <li>Video Creation</li>
                        <li>Video Editing</li>
                        <li>Motion Graphics</li>
                        <li>2D animation</li>
                        <li>3D animation</li>
                    </ul>
                </a>
                <a href="/development">
                    <li class="lg:text-xl md:text-xs font-bold">Development</li>
                    <ul class="list-[circle] ml-10 lg:text-lg md:text-xs">
                        <li>App Development</li>
                        <li>CRM</li>
                        <li>Website Design</li>
                        <li>Website Maintenance</li>
                    </ul>
                </a>
                <a href="/branding">
                    <li class="lg:text-xl md:text-xs font-bold">Branding</li>
                    <ul class="list-[circle] ml-10 lg:text-lg md:text-xs">
                        <li>Logo Designing</li>
                        <li>SEO</li>
                        <li>Content Writing</li>
                        <li>SMM</li>
                        <li>Blog Posting</li>
                        <li>Copy Writing</li>
                    </ul>
                </a>
            </ul>
        </div>
        <div class="w-2/5">
            <h4 class="font-bold lg:text-2xl md:text-md mb-2">Insights</h4>
            <ul class="flex flex-col gap-2">
                <a href="/blog">
                    <li class="flex gap-2 lg:text-lg md:text-xs"><img src="https://placehold.co/50x50"
                            alt="">Lorem ipsum dolor,
                        sit amet
                        consectetur adipisicing elit.
                        Nesciunt, autem.
                    </li>
                </a>
                <a href="/blog">
                    <li class="flex gap-2 lg:text-lg md:text-xs"><img src="https://placehold.co/50x50"
                            alt="">Lorem ipsum dolor,
                        sit amet
                        consectetur adipisicing
                        elit. Nesciunt, autem.</li>
                </a>
                <a href="/blog">
                    <li class="flex gap-2 lg:text-lg md:text-xs"><img src="https://placehold.co/50x50"
                            alt="">Lorem ipsum dolor,
                        sit amet
                        consectetur adipisicing
                        elit. Nesciunt, autem.</li>
                </a>
                <a href="/blog">
                    <li class="flex gap-2 lg:text-lg md:text-xs"><img src="https://placehold.co/50x50"
                            alt="">Lorem ipsum dolor,
                        sit amet
                        consectetur adipisicing
                        elit. Nesciunt, autem.</li>
                </a>
                <a href="/blog">
                    <li class="flex gap-2 lg:text-lg md:text-xs"><img src="https://placehold.co/50x50"
                            alt="">Lorem ipsum dolor,
                        sit amet
                        consectetur adipisicing
                        elit. Nesciunt, autem.</li>
                </a>
            </ul>
        </div>
    </footer>
    <div class="flex items-center justify-center py-2">
        <p class="md:text-xs lg:text-xl font-bold">Copyright &copy; Squad International 2019-2024</p>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/663120a91ec1082f04e978c7/1hsnuf6fl';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @if (Request::is('/'))
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <script>
            let swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                pagination: {
                    clickable: false
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                loop: true,
                autoplay: true,
                loading: 'lazy'
            });
            // Testimonial Slider
            var swiper2 = new Swiper(".testimonialSwiper", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                loop: true,
                autoplay: true,
            });
        </script>
    @endif
    @if (Request::is('about-us'))
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
                loop: true,
                autoplay: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
                loop: true,
                autoplay: true,
            });
        </script>
    @endif
</body>

</html>
