@extends('template')
@section('content')
    <!-- hero -->
    <section class="h-[80vh] flex items-center justify-center relative">
        <img src="{{ asset('images/development/hero.png') }}" alt="" class="w-full h-full">
        <div class="bg-zinc-950 w-full h-full absolute opacity-80"></div>
        <div class="w-4/5 py-2 px-5 text-center flex flex-col gap-2 text-white justify-center absolute">
            <h1 class="lg:text-[60px] font-bold">Development Services</h1>
            <p class="lg:text-1xl">Empower your business with app and web development, CRM integration, and website services.
                Maximize your online presence with our maintenance solutions. Elevate your digital strategy today! Contact
                us now</p>
        </div>
    </section>
    <!-- Best In The Industry -->
    <x-best-in-industry />
    <!-- Sub Services -->
    <section class="flex flex-col items-center gap-5 justify-center mt-28">
        <h2 class="font-bold text-3xl">Development Related Services</h2>
        <div class="w-[90%] flex flex-wrap">
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/development/app-development-icon.png') }}" alt=""
                    class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">App Development</h3>
                    <p class="text-sm">App development creates mobile software for enhanced user experiences. Apps bolster
                        brand identity, offering direct communication and personalized interactions.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/development/webapp-development-icon.png') }}" alt=""
                    class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Web App Development</h3>
                    <p class="text-sm">Web app development involves creating interactive online applications accessible via
                        web browsers. These apps enhance brand visibility, engagement, and loyalty.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/development/crm-icon.png') }}" alt="" class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">CRM</h3>
                    <p class="text-sm">CRM (Customer Relationship Management) is a strategy to manage interactions with
                        current and potential customers. It enhances brand development by fostering personalized
                        relationships.
                    </p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/development/website-design-icon.png') }}" alt=""
                    class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Website Design/Development</h3>
                    <p class="text-sm">Web design and development involve creating and building websites. It benefits brand
                        development by providing a digital platform to showcase brand identity, engage with customers.</p>
                </div>
            </div>
            <div class="w-1/3 px-2 py-3 bg-grey-500 rounded-sm hover:bg-grey-600 flex gap-4">
                <img src="{{ asset('images/development/website-maintenance-icon.png') }}" alt=""
                    class="w-1/3 h-28 m-auto">
                <div class="w-2/3 flex flex-col gap-2 justify-center">
                    <h3 class="text-lg font-bold">Website Maintenance</h3>
                    <p class="text-sm">Website maintenance involves regular updates, backups, and improvements to ensure
                        optimal performance and security. It benefits brand development by maintaining a seamless user
                        experience.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/development/app-development.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">App Development Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced Customer Engagement:</span> Apps offer personalized experiences,
                        notifications, and loyalty rewards, fostering deeper connections with customers.
                    </li>
                    <li><span class="font-bold">Increased Brand Visibility:</span> Having an app on users' devices boosts
                        brand recall and recognition.
                    </li>
                    <li><span class="font-bold">Improved Customer Service:</span> Apps enable efficient customer support
                        through chatbots and in-app messaging.
                    </li>
                    <li><span class="font-bold">Data-driven Insights:</span> Apps gather valuable data on user behavior for
                        targeted marketing and product improvements.
                    </li>
                    <li><span class="font-bold">Competitive Advantage:</span> A well-designed app sets a brand apart,
                        demonstrating innovation and commitment to customer experience.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">WebApp Development Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Accessibility:</span> Web apps can be accessed from any device with a
                        browser, increasing brand reach and convenience for users.
                    </li>
                    <li><span class="font-bold">Cost-effectiveness:</span> Developing web apps typically involves lower
                        costs compared to native apps, offering a budget-friendly solution for brand expansion.
                    </li>
                    <li><span class="font-bold">Cross-platform Compatibility:</span> Web apps work across different
                        operating systems, ensuring a consistent user experience and broader audience reach.
                    </li>
                    <li><span class="font-bold">Easy Updates:</span> Web apps can be updated instantly for all users,
                        allowing brands to implement changes quickly and maintain relevance.
                    </li>
                    <li><span class="font-bold">Scalability:</span> Web apps can easily accommodate growing user bases and
                        expanding functionalities, supporting brand growth and adaptation.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/development/webapp-development.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/development/crm.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">CRM Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced Customer Engagement:</span> CRM fosters deeper connections with
                        customers, boosting brand loyalty and advocacy.
                    </li>
                    <li><span class="font-bold">Data-Driven Decision Making:</span> Leveraging CRM data enables brands to
                        tailor strategies and offerings, optimizing brand relevance and resonance.
                    </li>
                    <li><span class="font-bold">Streamlined Communication:</span> CRM centralizes interactions, ensuring
                        consistent messaging and personalized brand experiences across channels.
                    </li>
                    <li><span class="font-bold">Improved Customer Retention:</span> By anticipating needs and delivering
                        exceptional service, CRM bolsters retention rates, cementing brand loyalty.
                    </li>
                    <li><span class="font-bold">Targeted Marketing Campaigns:</span> CRM insights enable precise audience
                        segmentation, amplifying brand visibility and relevance in marketing efforts.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Website Design/Development Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Enhanced Brand Visibility:</span> A well-designed website elevates brand
                        presence, making it more discoverable and memorable online.
                    </li>
                    <li><span class="font-bold">Improved User Experience:</span> Intuitive design and smooth functionality
                        enhance user satisfaction, fostering positive brand perception.
                    </li>
                    <li><span class="font-bold">Brand Consistency:</span> Web design ensures cohesive brand representation,
                        reinforcing key messaging and visual identity across digital touchpoints.
                    </li>
                    <li><span class="font-bold">Expanded Reach:</span> Responsive design and SEO optimization maximize
                        accessibility, broadening the brand's audience and market potential.
                    </li>
                    <li><span class="font-bold">Increased Credibility:</span> AProfessional website design instills trust
                        and credibility in the brand, driving conversions and long-term loyalty.
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/development/website-design.png') }}" alt="" class="w-full">
        </div>
    </section>
    <section class="flex items-center content-center mt-28">
        <div class="w-1/2 relative z-40">
            <img src="{{ asset('images/development/website-maintenance.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 h-96 flex flex-col relative">
            <div class="px-6 flex flex-col gap-4">
                <h1 class="font-bold text-3xl">Website Maintenance Benefits</h1>
                <ul class="ml-[30px] list-[circle] flex flex-col gap-5">
                    <li><span class="font-bold">Sustained Performance:</span> Regular maintenance ensures optimal website
                        functionality, preserving positive user experiences and brand reputation.
                    </li>
                    <li><span class="font-bold">Enhanced Security:</span> Proactive updates and security patches safeguard
                        against cyber threats, bolstering trust in the brand's online presence.
                    </li>
                    <li><span class="font-bold">Improved SEO Performance:</span> Continuous maintenance improves website
                        speed, content freshness, and mobile responsiveness, boosting search engine rankings and brand
                        visibility.
                    </li>
                    <li><span class="font-bold">Seamless User Experience:</span> Fine-tuning website elements and
                        addressing bugs or errors ensures smooth navigation, fostering positive interactions and brand
                        loyalty.
                    </li>
                    <li><span class="font-bold">Future-Proofing:</span> Adapting to evolving technology and user trends
                        through maintenance sustains brand relevance and competitiveness in the digital landscape.
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
