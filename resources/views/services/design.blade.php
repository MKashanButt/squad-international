@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/design/hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Design Services</h1>
            <p class="lg:text-1xl">Unlock the potential of your brand with our comprehensive design services. From seamless
                UI/UX to captivating video creation, editing, and animation, we tailor solutions for your every need.
                Elevate your brand's presence today and stand out from the crowd</p>
        </div>
    </section>
    <!-- Best In The Industry -->
    <x-best-in-industry />
    <!-- Sub Services -->
    <section class="flex flex-col items-center gap-5 justify-center mt-28">
        <h2 class="font-bold text-3xl">Design Related Services</h2>
        <div class="w-[90%] flex flex-wrap">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/ui-ux-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">UI/UX</h3>
                    <p class="text-sm">UI/UX, or User Interface/User Experience, refers to the design and interaction
                        elements of a digital product or service. It focuses on creating intuitive and seamless experiences.
                    </p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/video-creation-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Video Creation</h3>
                    <p class="text-sm">Video creation involves the process of conceptualizing, producing, and editing visual
                        content for various purposes such as marketing, entertainment, or education.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/video-editing-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Video Editing</h3>
                    <p class="text-sm">Video editing is the art of refining and enhancing raw video footage to create a
                        cohesive and engaging visual narrative. It involves trimming and rearranging.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/motion-graphic-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Motion Graphics</h3>
                    <p class="text-sm">Motion graphics is the creation of animated visual content that incorporates text,
                        graphics, and other elements to convey information or tell a story.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/2d-animation-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">2D Animation</h3>
                    <p class="text-sm">2D animation involves creating movement in a two-dimensional space, using images,
                        characters, and backgrounds. It brings illustrations to life through sequential frames.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/design/3d-animation-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">3D Animation</h3>
                    <p class="text-sm">3D animation is the process of generating three-dimensional moving images using
                        computer software. It adds depth and realism to animations by creating objects and characters.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/ui-ux.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">UI/UX Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced User Satisfaction:</span> Intuitive and user-friendly interfaces
                        lead to higher satisfaction, encouraging user engagement and loyalty.
                    </li>
                    <li><span class="font-bold">Increased Conversion Rates:</span> Well-designed UI/UX can streamline the
                        user journey, reducing friction and improving conversion rates.
                    </li>
                    <li><span class="font-bold">Brand Differentiation:</span> A memorable and delightful user experience
                        sets your brand apart from competitors, fostering positive brand associations and recognition.
                    </li>
                    <li><span class="font-bold">Cost Savings:</span> Investing in UI/UX design upfront can save costs in the
                        long run by reducing support requests, rework, and user abandonment
                    </li>
                    <li><span class="font-bold">Improved Accessibility:</span> Accessible design practices ensure
                        inclusivity, allowing a wider range of users to access and interact with your digital products or
                        services.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Video Creation Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced Engagement::</span> Video content captivates and retains audience
                        attention better than text or images, leading to higher engagement rates.
                    </li>
                    <li><span class="font-bold">Increased Brand Awareness:</span> Video content is highly shareable and can
                        reach a wider audience, helping to increase brand visibility and recognition.
                    </li>
                    <li><span class="font-bold">Improved Conversion Rates:</span> Videos have the power to persuade and
                        educate viewers, leading to higher conversion rates and sales.
                    </li>
                    <li><span class="font-bold">Versatility:</span> Video content can be repurposed across various platforms
                        and channels, maximizing its reach and effectiveness.
                    </li>
                    <li><span class="font-bold">SEO Benefits:</span> Video content can improve search engine rankings and
                        visibility, as search engines often prioritize video content in search results.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/video-creation.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/video-editing.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Video Editing Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Polished Presentation:</span> Video editing refines raw footage into a
                        cohesive and professional-looking final product, enhancing its visual appeal and impact.
                    </li>
                    <li><span class="font-bold">Storytelling:</span> Editing allows for the creation of compelling
                        narratives, shaping the viewer's experience and conveying messages effectively.
                    </li>
                    <li><span class="font-bold">Brand Consistency:</span> Editing ensures that videos align with brand
                        guidelines, maintaining a consistent look and feel across all content.
                    </li>
                    <li><span class="font-bold">Engagement:</span> Well-edited videos are more engaging and retain viewer
                        attention longer, increasing the likelihood of audience interaction and sharing.
                    </li>
                    <li><span class="font-bold">Efficiency:</span> Editing streamlines the production process, saving time
                        and resources by eliminating unnecessary footage and refining content to its essence.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Motion Graphics Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Visual Appeal:</span> Motion graphics add dynamic movement and visual
                        interest to videos, presentations, and websites, enhancing their overall attractiveness.
                    </li>
                    <li><span class="font-bold">Information Visualization:</span> Complex information or data can be
                        simplified and presented in a visually engaging manner through motion graphics, improving
                        comprehension and retention.
                    </li>
                    <li><span class="font-bold">Brand Identity:</span> Customized motion graphics help to establish and
                        reinforce brand identity, making content more recognizable and memorable to viewers.
                    </li>
                    <li><span class="font-bold">Storytelling:</span> Motion graphics can enhance storytelling by adding
                        animation and effects that bring narratives to life, making them more immersive and compelling.
                    </li>
                    <li><span class="font-bold">Versatility:</span> Motion graphics can be applied across various mediums,
                        including social media, advertising, and presentations, providing flexibility and adaptability in
                        communication strategies.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/motion-graphics.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/2d-animation.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">2D Animation Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Creative Expression:</span> 2D animation offers endless possibilities for
                        creativity, allowing artists to bring characters and stories to life through drawing and animation
                        techniques
                    </li>
                    <li><span class="font-bold">Cost-Effectiveness:</span> Compared to 3D animation, 2D animation is often
                        more affordable and requires less time and resources to produce, making it accessible to a wider
                        range of projects and budgets..
                    </li>
                    <li><span class="font-bold">Time Efficiency:</span> 2D animation production typically requires fewer
                        steps and less complex technology than 3D animation, resulting in faster turnaround times for
                        projects.
                    </li>
                    <li><span class="font-bold">Nostalgia and Charm:</span> 2D animation has a timeless quality and
                        nostalgic appeal that resonates with audiences of all ages, evoking emotions and fond memories.
                    </li>
                    <li><span class="font-bold">Versatility:</span> 2D animation can be applied to various mediums,
                        including television, film, web content, and mobile apps, making it a versatile and adaptable
                        storytelling tool for different platforms and audiences.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">3D Animation Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Realism and Depth:</span> 3D animation creates lifelike characters,
                        environments, and effects, offering a level of realism and depth that immerses viewers in the
                        digital world.
                    </li>
                    <li><span class="font-bold">Versatility:</span> 3D animation can be used across a wide range of
                        industries and applications, including entertainment, advertising, architecture, medicine, and
                        education, providing endless creative possibilities.
                    </li>
                    <li><span class="font-bold">Engagement and Impact:</span> The visually stunning nature of 3D animation
                        captures audience attention and leaves a lasting impression, making it highly effective for
                        storytelling, marketing, and communication purposes.
                    </li>
                    <li><span class="font-bold">Efficiency and Flexibility:</span> While initial setup may require more
                        time and resources compared to 2D animation, once assets are created, they can be easily manipulated
                        and reused, increasing efficiency and flexibility in production.
                    </li>
                    <li><span class="font-bold">Future-Proofing:</span> As technology advances, the demand for high-quality
                        3D animation continues to grow, making it a valuable skill set for professionals and a competitive
                        advantage for businesses looking to stay ahead in the digital age.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/design/3d-animation.png') }}" alt="" class="w-full">
        </div>
    </section>
@endsection
