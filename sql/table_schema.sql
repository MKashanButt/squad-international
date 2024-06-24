-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `squadinternational`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Unlocking the Potential of Social Media Advertising: Strategies for Effective Campaigns', '<p>In today\'s digital landscape, social media has become an indispensable tool for businesses looking to connect with their target audience. With billions of users across various platforms, social media advertising offers an unparalleled opportunity to reach potential customers and drive business growth. However, to truly unlock its potential, businesses need to employ effective strategies that resonate with their audience and yield tangible results.</p><h2><strong>Know Your Audience Inside Out</strong></h2><p>One key strategy for effective social media advertising is to know your audience inside out. Understanding their demographics, interests, and behaviors allows you to tailor your ads to their preferences, making them more relevant and engaging. Utilize audience insights provided by social media platforms to segment your audience and create personalized ad campaigns that speak directly to their needs and desires.</p><p>For example, if you\'re a fashion brand targeting young adults, you might create separate ad sets for different segments based on factors like gender, age, location, and interests. By delivering highly targeted ads to specific audience segments, you can increase the likelihood of capturing their attention and driving conversions.</p><h2><strong>Choose the Right Platforms</strong></h2><p>Another crucial aspect of successful social media advertising is choosing the right platforms. Not all social media platforms are created equal, and each has its own unique audience and advertising options. Conduct research to identify which platforms your target audience frequents the most and focus your advertising efforts there.</p><p>For instance, if you\'re targeting a younger demographic, platforms like Instagram and Snapchat might be more effective due to their popularity among Gen Z users. On the other hand, if you\'re targeting professionals or B2B customers, LinkedIn might be the ideal platform for reaching decision-makers and influencers in your industry.</p><h2><strong>Craft Compelling Ad Creatives</strong></h2><p>Once you\'ve identified your target audience and chosen the appropriate platforms, it\'s time to craft compelling ad creatives. Visual content is king on social media, so invest in high-quality images, videos, and graphics that capture attention and tell your brand\'s story.</p><p>For example, Airbnb\'s Instagram ads often feature stunning images of unique accommodations in exotic locations, enticing users to explore their website and book a stay. By showcasing aspirational lifestyle imagery that resonates with their audience\'s desires, Airbnb is able to drive engagement and conversions effectively.</p><p>In addition to visual content, incorporate persuasive copy that highlights the benefits of your products or services and includes a clear call-to-action prompting users to take the desired action. Whether it\'s making a purchase, signing up for a newsletter, or visiting your website, a compelling call-to-action encourages users to engage with your brand and move further down the sales funnel.</p><h2><strong>Test and Optimize Continuously</strong></h2><p>Furthermore, don\'t underestimate the power of testing and optimization in maximizing the effectiveness of your social media ad campaigns. A/B testing different ad variations allows you to identify what resonates best with your audience and refine your strategies accordingly.</p><p>For example, you might test different headline variations, images, ad formats, or audience targeting options to see which combination generates the highest engagement and conversion rates. By analyzing the data and making data-driven adjustments, you can optimize your campaigns for better results and ensure that you\'re getting the most out of your advertising budget.</p><h2><strong>Conclusion</strong></h2><p>In conclusion, social media advertising offers immense potential for businesses to reach and engage with their target audience. By implementing strategies that prioritize audience understanding, platform selection, compelling creatives, and ongoing optimization, businesses can unlock the full potential of social media advertising and achieve their marketing objectives effectively.</p><p>By knowing your audience inside out, choosing the right platforms, crafting compelling ad creatives, and continuously testing and optimizing your campaigns, you can create social media ad campaigns that drive real results for your business and help you stay ahead of the competition in today\'s crowded digital landscape.&nbsp;</p>', '2024-06-20 12:21:17', '2024-06-20 12:21:17'),
(2, 'SEO Essentials: A Guide to Boosting Your Website\'s Visibility', '<p>In the vast ocean of the internet, having a website is akin to owning a tiny boat. Without proper navigation tools, your boat can easily get lost among the waves. Similarly, without effective search engine optimization (SEO), your website may remain buried beneath the countless others vying for attention. In this guide, we\'ll explore the essentials of SEO and how you can leverage them to boost your website\'s visibility and drive organic traffic.&nbsp;</p><h2><strong>Understanding SEO</strong></h2><p>At its core, SEO is the practice of optimizing your website to improve its visibility on search engine results pages (SERPs). When someone searches for a particular query on search engines like Google, Bing, or Yahoo, they\'re presented with a list of relevant websites ranked based on various factors. The goal of SEO is to ensure that your website appears prominently for relevant search queries, thereby increasing the likelihood of attracting visitors.&nbsp;</p><h2><strong>Keyword Research</strong>&nbsp;</h2><p>Keywords are the foundation of SEO. These are the phrases or terms that people type into search engines when looking for information, products, or services. Conducting keyword research allows you to identify the words and phrases that your target audience is using to search for content related to your industry.</p><p>Tools like Google Keyword Planner, SEMrush, and Moz Keyword Explorer can help you discover relevant keywords and analyze their search volume, competition, and potential traffic. Focus on targeting keywords with a balance of search volume and competitiveness, and consider long-tail keywords for more specific and targeted traffic.</p><h2><strong>On-Page Optimization</strong>&nbsp;</h2><p>Once you\'ve identified your target keywords, it\'s time to optimize your website\'s on-page elements to align with them. This includes optimizing meta titles, meta descriptions, headings, and content for your target keywords. Make sure to include your primary keywords naturally throughout your content while ensuring that it remains relevant and valuable to your audience.</p><p>Additionally, optimize your website\'s URL structure, internal linking, and image alt tags to provide search engines with more context about your content. A well-optimized website not only improves its chances of ranking higher in search results but also enhances the overall user experience.&nbsp;</p><h2><strong>Quality Content Creation</strong></h2><p>Content is king in the realm of SEO. High-quality, relevant, and engaging content not only attracts visitors but also earns backlinks and social shares, both of which are crucial ranking factors. Create content that addresses the needs and interests of your target audience while providing value and solving their problems.</p><p>Consider incorporating different types of content such as blog posts, articles, videos, infographics, and podcasts to appeal to a wider audience and keep them engaged. Regularly update your content to keep it fresh and relevant, and encourage user engagement through comments, shares, and likes.&nbsp;</p><h2><strong>Mobile Optimization</strong>&nbsp;</h2><p>With the majority of internet users accessing websites via mobile devices, mobile optimization has become essential for SEO success. Ensure that your website is responsive and mobile-friendly, meaning it adapts seamlessly to various screen sizes and devices. Google prioritizes mobile-friendly websites in its search rankings, so neglecting mobile optimization can significantly impact your visibility and traffic.&nbsp;</p><h2><strong>Technical SEO</strong>&nbsp;</h2><p>Technical SEO refers to the optimization of your website\'s technical elements to improve its crawling and indexing by search engines. This includes optimizing website speed, fixing broken links, improving site structure, and implementing schema markup to provide search engines with more context about your content.</p><p>Regularly audit your website for technical issues using tools like Google Search Console and Screaming Frog, and address any issues that may hinder your website\'s performance in search results. Technical SEO may seem daunting, but it\'s crucial for ensuring that your website is accessible and indexable by search engines.&nbsp;</p><h2><strong>Off-Page Optimization</strong>&nbsp;</h2><p>Off-page optimization involves activities conducted outside of your website to improve its visibility and authority. This includes building backlinks from reputable websites, engaging with influencers and industry experts, and participating in online communities and forums related to your industry.&nbsp;</p><p>Focus on earning high-quality backlinks from authoritative websites through guest blogging, influencer outreach, and content promotion. Monitor your backlink profile regularly and disavow any spammy or low-quality links that could harm your website\'s reputation and rankings.&nbsp;</p><h2><strong>Conclusion</strong>&nbsp;</h2><p>In conclusion, SEO is a multifaceted discipline that requires continuous effort and attention to detail. By understanding the essentials of SEO and implementing them effectively, you can boost your website\'s visibility, attract more organic traffic, and ultimately achieve your business goals.</p><p>From conducting keyword research and optimizing on-page elements to creating quality content and building backlinks, every aspect of SEO plays a crucial role in improving your website\'s search engine rankings. Stay informed about the latest SEO trends and updates, and adapt your strategies accordingly to stay ahead of the competition in today\'s competitive digital landscape.&nbsp;</p>', '2024-06-20 13:18:43', '2024-06-20 13:18:43'),
(3, 'The Power of Personalization: How Tailored Content Boosts Customer Engagement', '<p>In today\'s digital age, consumers are inundated with an abundance of content vying for their attention. From social media ads to email newsletters, the competition for engagement is fierce. In such a crowded landscape, generic, one-size-fits-all content often gets lost in the noise. That\'s where the power of personalization comes in. By tailoring content to the individual preferences and interests of your audience, you can cut through the clutter and create meaningful connections that drive engagement and foster brand loyalty.&nbsp;</p><h2><strong>Understanding Personalization</strong>&nbsp;</h2><p>At its core, personalization is about delivering content and experiences that are relevant and valuable to each individual user. Rather than treating your audience as a monolithic entity, personalization allows you to recognize and cater to their unique needs, preferences, and behaviors. This can take many forms, from addressing users by name in email marketing campaigns to recommending products based on their past purchase history.&nbsp;</p><h2><strong>Why Personalization Matters</strong>&nbsp;</h2><p>The benefits of personalization are manifold. Firstly, personalized content resonates more strongly with audiences because it speaks directly to their interests and concerns. When users feel that a brand understands them and their needs, they\'re more likely to engage with that brand and remain loyal over time.</p><p>Secondly, personalization can lead to higher conversion rates and increased sales. By delivering targeted content and recommendations, you\'re effectively guiding users through the customer journey and removing barriers to purchase. Whether it\'s a personalized email offering a discount on a product they\'ve been eyeing or a website recommendation based on their browsing history, personalized content can significantly influence buying decisions.</p><p>Thirdly, personalization fosters stronger customer relationships and brand loyalty. When users feel valued and understood by a brand, they\'re more likely to become repeat customers and advocates for that brand. By consistently delivering personalized experiences across all touchpoints, you can cultivate a sense of trust and affinity that keeps customers coming back for more.&nbsp;</p><h2><strong>Strategies for Personalization</strong>&nbsp;</h2><h3><strong>1. Data Collection and Analysis</strong></h3><p>The foundation of personalization is data. Collecting and analyzing data about your audience allows you to gain valuable insights into their preferences, behaviors, and purchase patterns. This data can be gathered from various sources, including website analytics, CRM systems, social media platforms, and customer surveys. By leveraging this data effectively, you can tailor your content and marketing efforts to better meet the needs of your audience.</p><h3><strong>2. Segmentation</strong></h3><p>Once you have collected data about your audience, the next step is to segment them into smaller, more targeted groups based on shared characteristics or behaviors. This allows you to deliver more relevant content to each segment and increase the likelihood of engagement. Segmentation can be based on factors such as demographics, interests, purchase history, or engagement level. For example, you might create separate email campaigns for different segments of your audience, each tailored to their specific interests or preferences.</p><h3><strong>3. Personalized Email Marketing</strong></h3><p>Email marketing is one of the most effective channels for personalization. By segmenting your email list and crafting personalized email campaigns, you can deliver highly relevant content directly to your subscribers\' inboxes. This could include personalized product recommendations, special offers based on past purchases, or targeted content based on user preferences. Personalized subject lines and dynamic content can also help increase open and click-through rates.</p><h3><strong>4. Dynamic Website Content</strong></h3><p>Another powerful tool for personalization is dynamic website content. By using data to customize the content and layout of your website based on user preferences or behavior, you can create a more personalized and engaging experience for visitors. This could include personalized product recommendations, tailored landing pages, or dynamic calls-to-action based on the user\'s stage in the buying journey.</p><h3><strong>5. Social Media Personalization</strong></h3><p>Social media platforms offer numerous opportunities for personalization. By analyzing user data and engagement metrics, you can deliver targeted content to your audience based on their interests, preferences, and behavior. This could include personalized ads, tailored content recommendations, or targeted messaging based on user interactions.&nbsp;</p><h2><strong>Conclusion</strong>&nbsp;</h2><p>In conclusion, the power of personalization cannot be overstated. By tailoring content and experiences to the individual preferences and interests of your audience, you can create meaningful connections that drive engagement, foster brand loyalty, and ultimately, boost your bottom line. Whether it\'s through personalized email campaigns, dynamic website content, or targeted social media ads, personalization allows you to stand out in a crowded digital landscape and create memorable experiences that keep customers coming back for more.&nbsp;</p>', '2024-06-20 13:24:45', '2024-06-20 13:24:45'),
(4, 'Effective PPC Campaign Management: Maximizing ROI and Minimizing Costs', '<p>Pay-per-click (PPC) advertising is a powerful tool for driving targeted traffic to your website and generating leads or sales. However, without effective campaign management, PPC advertising can quickly become costly and inefficient. In this guide, we\'ll explore strategies for maximizing ROI and minimizing costs through effective PPC campaign management.&nbsp;</p><h2><strong>Set Clear Goals and Objectives</strong>&nbsp;</h2><p>Before launching a PPC campaign, it\'s essential to define your goals and objectives. Are you looking to increase website traffic, generate leads, or boost sales? Having clear objectives will guide your campaign strategy and help you measure success accurately.</p><p>For example, if your goal is to increase sales, you may want to focus on metrics such as conversion rate and return on ad spend (ROAS). On the other hand, if your goal is to generate leads, you may prioritize metrics like cost per lead and lead quality.&nbsp;</p><h2><strong>Conduct Thorough Keyword Research</strong></h2><p>Keywords are the foundation of any successful PPC campaign. Thorough keyword research allows you to identify the terms and phrases your target audience is searching for and ensure that your ads are being shown to the right people.</p><p>Use keyword research tools like Google Keyword Planner, SEMrush, or Moz Keyword Explorer to discover relevant keywords and assess their search volume, competition, and potential cost-per-click (CPC). Focus on long-tail keywords that are specific to your products or services and have lower competition, as they tend to be less expensive and more targeted.</p><h2><strong>Optimize Ad Copy and Landing Pages</strong></h2><p>Once you\'ve selected your target keywords, it\'s time to craft compelling ad copy that entices users to click. Your ad copy should be clear, concise, and relevant to the user\'s search query, highlighting the benefits of your products or services and including a strong call-to-action.</p><p>Similarly, your landing pages should be optimized for conversion, with relevant and engaging content that mirrors the messaging of your ads. Ensure that your landing pages load quickly, are mobile-friendly, and feature prominent calls-to-action that encourage users to take the desired action, whether it\'s making a purchase or filling out a contact form.</p><h2><strong>Implement Ad Extensions</strong></h2><p>Ad extensions are additional pieces of information that can be added to your ads to make them more informative and engaging. Examples of ad extensions include sitelinks, callout extensions, and structured snippets.</p><p>By implementing ad extensions, you can increase the visibility of your ads and provide users with more opportunities to engage with your business. Ad extensions also help improve ad relevance and quality score, which can lead to higher ad positions and lower CPCs.</p><h2><strong>Monitor Performance and Make Data-Driven Decisions</strong></h2><p>Regularly monitor the performance of your PPC campaigns and make data-driven decisions based on the insights you gather. Pay attention to key metrics such as click-through rate (CTR), conversion rate, cost per conversion, and ROAS.</p><p>Identify high-performing keywords, ad copy, and targeting options, and allocate more budget to campaigns that are delivering positive results. Conversely, pause or adjust campaigns that are underperforming or not meeting your objectives.</p><h2><strong>Test, Test, Test</strong></h2><p>Continuous testing is essential for optimizing PPC campaign performance and identifying areas for improvement. Test different ad copy variations, landing page designs, targeting options, and bidding strategies to see what works best for your audience.</p><p>Use A/B testing to compare different elements of your campaigns and determine which changes lead to the greatest improvements in performance. By iterating and refining your campaigns over time, you can maximize ROI and achieve better results with your PPC advertising efforts.</p><h2><strong>Conclusion</strong></h2><p>Effective PPC campaign management is crucial for maximizing ROI and minimizing costs in your digital marketing efforts. By setting clear goals, conducting thorough keyword research, optimizing ad copy and landing pages, implementing ad extensions, monitoring performance, and testing continuously, you can create PPC campaigns that drive targeted traffic, generate leads, and ultimately, contribute to your business\'s success.</p><p>Remember that PPC advertising is not a set-it-and-forget-it endeavor. It requires ongoing attention and optimization to ensure that your campaigns are delivering the best possible results. By staying informed about industry trends and best practices and adapting your strategies accordingly, you can stay ahead of the competition and achieve your PPC advertising goals effectively.&nbsp;</p>', '2024-06-20 13:26:09', '2024-06-20 13:26:09'),
(5, 'The Importance of Branding in Digital Marketing: Building Trust and Recognition', '<p>In the fast-paced world of digital marketing, where competition is fierce and attention spans are fleeting, establishing a strong brand presence is more critical than ever. Your brand is more than just a logo or a tagline; it\'s the essence of your business—the sum total of your values, personality, and unique selling proposition. In this blog post, we\'ll explore the importance of branding in digital marketing and how it can help you build trust and recognition with your audience.&nbsp;</p><h2><strong>Creating a Lasting Impression</strong></h2><p>In today\'s crowded digital landscape, consumers are bombarded with a constant stream of marketing messages from countless brands vying for their attention. In such a noisy environment, a strong brand identity can help you stand out and capture the hearts and minds of your target audience.</p><p>By consistently communicating your brand\'s values, personality, and unique selling proposition across all touchpoints, you can create a lasting impression that resonates with your audience and sets you apart from the competition. Whether it\'s through your website, social media channels, email marketing campaigns, or digital advertising efforts, every interaction with your brand should reinforce your identity and leave a positive impression on your audience.</p><h2><strong>Building Trust and Credibility</strong></h2><p>Trust is the foundation of any successful business relationship, and branding plays a crucial role in building trust and credibility with your audience. A strong brand inspires confidence and reassures consumers that they\'re making the right choice by choosing your products or services.</p><p>Consistency is key when it comes to building trust through branding. By delivering on your brand promises and consistently meeting or exceeding customer expectations, you can establish a reputation for reliability and dependability that fosters trust and loyalty over time.</p><h2><strong>Enhancing Recognition and Recall</strong></h2><p>In today\'s digital world, where consumers are constantly bombarded with information and stimuli, attention spans are shorter than ever. In such a competitive landscape, brand recognition and recall are more important than ever.</p><p>A strong brand identity helps you cut through the clutter and capture the attention of your target audience. By creating a visually distinctive brand identity—complete with a memorable logo, color scheme, and visual elements—you can make your brand more recognizable and memorable to consumers.</p><p>Consistency is once again crucial here. By ensuring that your brand\'s visual identity remains consistent across all channels and touchpoints, you can enhance recognition and recall, making it easier for consumers to identify and remember your brand amidst the noise of the digital landscape.</p><h2><strong>Driving Customer Engagement and Advocacy</strong></h2><p>A strong brand inspires passion and loyalty among its customers, turning them into brand advocates who are eager to spread the word about your products or services. By building a community around your brand and fostering meaningful connections with your audience, you can turn satisfied customers into loyal brand ambassadors who are eager to sing your praises to others.</p><p>Social media is a powerful tool for driving customer engagement and advocacy. By creating compelling content that resonates with your audience and encourages them to share their experiences with your brand, you can amplify your reach and leverage the power of word-of-mouth marketing to attract new customers and grow your business.</p><h2><strong>Conclusion</strong></h2><p>In conclusion, the importance of branding in digital marketing cannot be overstated. A strong brand identity helps you stand out in a crowded marketplace, build trust and credibility with your audience, enhance recognition and recall, and drive customer engagement and advocacy. By investing in branding and consistently communicating your brand\'s values, personality, and unique selling proposition across all channels and touchpoints, you can create a lasting impression that resonates with your audience and sets you apart from the competition.</p><p>Remember that branding is not a one-time effort; it\'s an ongoing process that requires careful planning, execution, and monitoring. By staying true to your brand\'s identity and values and continually evolving and adapting to meet the changing needs and expectations of your audience, you can build a strong and resilient brand that stands the test of time in the ever-evolving world of digital marketing.&nbsp;</p>', '2024-06-20 13:27:13', '2024-06-20 13:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:2;', 1718900134),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1718900134;', 1718900134);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Doe', 'jhondoe@gmail.com', 'This is a test run', '2024-05-07 09:36:53', '2024-05-07 09:36:53'),
(2, 'Jhon Doe', 'jhondoe@gmail.com', 'This is a test run', '2024-05-07 09:37:09', '2024-05-07 09:37:09'),
(3, 'Jhon Doe', 'jhondoe@gmail.com', 'Another Test email', '2024-05-07 09:37:52', '2024-05-07 09:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"7718f9cc-73bc-47a7-853d-4fe5d352fa84\",\"displayName\":\"blueprint:stubs\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\",\"command\":\"O:43:\\\"Illuminate\\\\Foundation\\\\Console\\\\QueuedCommand\\\":10:{s:7:\\\"\\u0000*\\u0000data\\\";a:1:{i:0;s:15:\\\"blueprint:stubs\\\";}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"}}', 0, NULL, 1715090708, 1715090708);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_07_140112_create_reviews_table', 2),
(5, '2024_05_07_140113_create_blogs_table', 2),
(6, '2024_05_07_140114_create_form_submissions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `client_name` varchar(40) NOT NULL,
  `stars` varchar(1) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `client_name`, `stars`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Mike Thomas', '4', 'Very Good Company', '2024-05-15 14:18:44', '2024-05-15 14:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qqnVIDzyEJJFuD8pDIaCkHvMekBlt17kx6iM2huo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVd0bVU5Y2FIUkdVMlNOREc1clJQQTIzOUFEUXlRU0dsMmFPeEx3WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNlcy9icmFuZGluZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719240516);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@squad.com', NULL, '$2y$12$oPQ8vC9t50O3.sfFG1OOJO3WNXId6Vosetj8RvtgqBubRsNeWbGOi', NULL, '2024-05-07 08:46:06', '2024-05-07 08:46:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
