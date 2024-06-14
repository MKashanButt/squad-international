@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/branding/hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Branding Services</h1>
            <p class="lg:text-1xl">Elevate your brand with our premium branding services, tailored to perfection. From
                captivating logos to comprehensive brand packages, we ensure excellence at every stage. Discover the power
                of transformation today.</p>
        </div>
    </section>
    <!-- Best In The Industry -->
    <x-best-in-industry />
    <!-- Sub Services -->
    <section class="flex flex-col items-center gap-5 justify-center mt-28">
        <h2 class="font-bold text-3xl">Branding Related Services</h2>
        <div class="w-[90%] flex flex-wrap">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/logo-design-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Logo Designing</h3>
                    <p class="text-sm">Logo design is the art of crafting a visual symbol that represents a brand's
                        identity. It establishes recognition, professionalism, and trust among consumers.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/seo-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">SEO</h3>
                    <p class="text-sm">SEO, or Search Engine Optimization, is the practice of optimizing a website to rank
                        higher in search engine results pages (SERPs). It involves strategies to improve visibility and
                        attract
                        more organic traffic.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/content-writting-icon.png') }}" alt=""
                    class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Content Writing</h3>
                    <p class="text-sm">Content writing involves crafting compelling and informative material for various
                        platforms such as websites, blogs, and social media. It aims to engage audiences and drive traffic
                    </p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/copywriting-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Copy Writing</h3>
                    <p class="text-sm">Copywriting is the art of writing persuasive content that prompts readers to take
                        action, such as making a purchase or subscribing to a service.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/social-media-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">SMM</h3>
                    <p class="text-sm">Social Media Marketing (SMM) is the use of social media platforms to connect with
                        your audience to build your brand, increase sales, and drive website traffic</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/blog-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Blog Posting</h3>
                    <p class="text-sm">Blog posting is the process of regularly publishing articles or posts on a blog. It
                        serves as a platform for sharing valuable content and engaging with your audience.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/branding/ppc-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">PPC</h3>
                    <p class="text-sm">PPC, or Pay-Per-Click advertising, is a digital marketing strategy where advertisers
                        pay a fee each time their ad is clicked. It's beneficial for branding as it ensures targeted
                        exposure.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/logo-designing.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Logo Designing Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Brand Recognition:</span> Instantly identifies your brand, boosting
                        visibility.
                    </li>
                    <li><span class="font-bold">Professionalism:</span> Reflects credibility and quality, enhancing trust.
                    </li>
                    <li><span class="font-bold">Differentiation:</span> Sets you apart from competitors, establishing
                        uniqueness.
                    </li>
                    <li><span class="font-bold">Memorability:</span> Creates lasting impressions, aiding brand recall.
                    </li>
                    <li><span class="font-bold">Brand Loyalty:</span> Fosters emotional connections, encouraging repeat
                        business.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">SEO Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Increased Visibility:</span> Get found by more potential customers online.
                    </li>
                    <li><span class="font-bold">More Organic Traffic:</span> Drive targeted visitors to your website without
                        paying for clicks.
                    </li>
                    <li><span class="font-bold">Improved User Experience:</span> Enhance website usability and engagement.
                    </li>
                    <li><span class="font-bold">Higher Conversion Rates:</span> Attract customers actively seeking your
                        products or services.
                    </li>
                    <li><span class="font-bold">Builds Credibility and Trust:</span> Establish your brand as an authority in
                        your industry.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/seo.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/content-writing.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Content Writing Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Increased Engagement:</span> Capture audience interest and keep them coming
                        back for more.
                    </li>
                    <li><span class="font-bold">Enhanced Brand Awareness:</span> Establish your brand identity and message
                        across various platforms.
                    </li>
                    <li><span class="font-bold">Improved SEO:</span> Boost website visibility and rank higher in search
                        engine results
                    </li>
                    <li><span class="font-bold">Establish Authority:</span> Position yourself as an expert in your field
                        and gain trust from your audience.
                    </li>
                    <li><span class="font-bold">Higher Conversion Rates:</span> Persuade and educate potential customers,
                        leading to more sales and inquiries.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Copy Writing Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Compelling Messaging:</span> Craft persuasive content that drives action
                        and conversions.
                    </li>
                    <li><span class="font-bold">Increased Conversions:</span> Reflects credibility and quality, enhancing
                        trust.
                    </li>
                    <li><span class="font-bold">Improved Brand Perception:</span> SEnhance brand image and reputation with
                        impactful language and storytelling.
                    </li>
                    <li><span class="font-bold">Clear Communication:</span> Convey complex ideas or information in a
                        simple, easy-to-understand manner.
                    </li>
                    <li><span class="font-bold">Higher ROI:</span> Generate more revenue and return on investment (ROI)
                        with targeted and persuasive copy.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/copy-writing.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/smm.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">SMM Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced Brand Visibility:</span> Increase your brand's presence and reach
                        among your target audience.
                    </li>
                    <li><span class="font-bold">Improved Customer Engagement:</span> Foster meaningful interactions and
                        relationships with customers through social media platforms.
                    </li>
                    <li><span class="font-bold">Increased Website Traffic:</span> Drive traffic to your website or landing
                        pages, resulting in more leads and sales.
                    </li>
                    <li><span class="font-bold">Audience Insights:</span> Gain valuable insights into your audience's
                        preferences, behavior, and interests through social media analytics.
                    </li>
                    <li><span class="font-bold">Cost-Effectiveness:</span> Reach a large audience at a relatively low cost
                        compared to traditional advertising methods.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Blog Posting Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Boosted Website Traffic:</span> Drive more visitors to your website through
                        valuable and relevant content.
                    </li>
                    <li><span class="font-bold">Enhanced SEO:</span> Improve search engine rankings by regularly
                        publishing fresh, keyword-rich content.
                    </li>
                    <li><span class="font-bold">Established Authority:</span> Position yourself or your brand as an expert
                        in your industry by sharing insightful and informative content
                    </li>
                    <li><span class="font-bold">Increased Engagement:</span> Foster meaningful interactions with your
                        audience through comments, shares, and discussions on your blog.
                    </li>
                    <li><span class="font-bold">Lead Generation:</span> Capture leads and nurture potential customers
                        through calls-to-action (CTAs) and email sign-ups within your blog posts.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/blog.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/branding/ppc.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">PPC Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Immediate Results:</span> Drive targeted traffic to your website and see
                        immediate results in terms of clicks and conversions.
                    </li>
                    <li><span class="font-bold">Highly Targeted:</span> Reach specific demographics, locations, and
                        interests with precision targeting options.
                    </li>
                    <li><span class="font-bold">Measurable ROI:</span> Track and measure the performance of your campaigns
                        in real-time, allowing for quick optimization and adjustments.
                    </li>
                    <li><span class="font-bold">Brand Visibility:</span> Increase brand visibility and awareness by
                        appearing at the top of search engine results pages (SERPs) and on relevant websites.
                    </li>
                    <li><span class="font-bold">Controlled Budget:</span> Set your budget and bid amounts, ensuring you
                        only pay when someone clicks on your ad, giving you control over your advertising spend.
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
