-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `buycourses`
--

CREATE TABLE `buycourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `assign_id` bigint(20) NOT NULL,
  `price` double(10,2) NOT NULL,
  `status` bigint(20) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answere`, `created_at`, `updated_at`) VALUES
(1, 'What is the duration of the course?', 'It depends on the course but our range is from 1 day to 3 months', '2021-06-23 09:14:33', '2021-06-23 09:14:33'),
(2, 'Who will be my instructor?', 'Every training course is taught by an industry leading expert who is practicing working at CEO-Level for at least over 5 to 10+ years professionally.', '2021-06-23 09:14:55', '2021-06-23 09:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_06_04_064043_create_sessions_table', 1),
(10, '2021_06_14_173653_create_services_table', 1),
(11, '2021_06_15_095415_create_success_stories_table', 1),
(12, '2021_06_15_131541_create_offices_table', 1),
(13, '2021_06_15_133457_create_seminars_table', 1),
(14, '2021_06_16_054506_create_faqs_table', 1),
(15, '2021_06_16_134241_create_perticipators_table', 1),
(16, '2021_06_20_121547_create_trainers_table', 1),
(17, '2021_06_21_110418_create_buycourses_table', 1),
(18, '2021_06_21_131953_create_supports_table', 1),
(19, '2021_06_23_064633_create_seminer_trainers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `country`, `location`, `description`, `map_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pakistan', 'HEAD OFFICE (LHR) Office# 501, Al-Hafeez Heights Gulberg, Lahore', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;\">Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;architecto,&nbsp;nesciunt&nbsp;quis&nbsp;quibusdam&nbsp;error&nbsp;magni&nbsp;temporibus&nbsp;labore&nbsp;placeat&nbsp;obcaecati&nbsp;voluptatum&nbsp;molestias&nbsp;sequi&nbsp;sit&nbsp;animi&nbsp;officiis&nbsp;repudiandae,&nbsp;totam&nbsp;dicta&nbsp;necessitatibus&nbsp;fugit</div>', 'https://www.google.com/maps/place/Enablers/@31.5145786,74.3422987,17z/data=!3m1!4b1!4m5!3m4!1s0x3919059956988de3:0xbc3a4cd9df3c8624!8m2!3d31.5145868!4d74.344492', '1624460152.jpg', '2021-06-23 08:55:52', '2021-06-23 08:55:52'),
(2, 'PAKISTAN', 'G.T, Road Rahwali Cantt Near Fazal-din Pharmacy', '<p><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: Poppins; font-size: 20px; font-weight: 700; display: block; color: rgb(0, 0, 0);\">GUJRANWALA</span></p><address style=\"margin: 15px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.42857; vertical-align: baseline; font-family: Poppins; font-size: 18px; font-weight: 600; color: rgb(0, 0, 0);\">G.T, Road Rahwali Cantt<br>Near Fazal-din Pharmacy</address><h4 style=\"margin: 10px 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; font-family: Poppins; font-size: 18px; font-weight: 500; color: rgb(0, 0, 0); letter-spacing: normal;\">Phone: +92 321 8105919</h4>', 'https://www.google.com/maps/place/32%C2%B014\'32.0%22N+74%C2%B009\'51.9%22E/@32.242218,74.1622163,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d32.242218!4d74.164405?shorturl=1', '1624460619.jpg', '2021-06-23 09:03:39', '2021-06-23 09:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perticipators`
--

CREATE TABLE `perticipators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occopation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enablers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perticipators`
--

INSERT INTO `perticipators` (`id`, `name`, `father_name`, `number`, `email`, `pasport`, `city`, `country`, `occopation`, `training`, `enablers`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 'jhon', 'mr.x', '01814253654', 'jon@gmail.com', '12345501814253654', 'dhaka', 'bangladesh', 'student', 'dgital marketing', 'Social Media', 'Cash', '2021-06-23 09:16:12', '2021-06-23 09:16:12'),
(2, 'karim', 'rahim', '01814253654', 'rahim@gmail.com', '0181425365401814253654', 'dhaka', 'bangladesh', 'developer', 'digital marketing', 'Social Media', 'Online Payment Getway', '2021-06-23 09:17:16', '2021-06-23 09:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `title`, `location`, `venue`, `date`, `price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'new protal', 'dhaka', 'bosundhara', '2021-12-12', 5000.00, 0, '2021-06-23 09:07:42', '2021-06-23 09:07:42'),
(3, 'agile seminar', 'dhaka', 'AURA GRANDE Event Complex', '2021-06-23', 5500.00, 0, '2021-06-23 09:10:08', '2021-06-23 09:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `seminer_trainers`
--

CREATE TABLE `seminer_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seminer_id` bigint(20) NOT NULL,
  `trainer_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminer_trainers`
--

INSERT INTO `seminer_trainers` (`id`, `seminer_id`, `trainer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `description`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'DIGITAL MARKETING', 'BEST DIGITAL MARKETING SERVICES', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 22px;\">In an age ruled by fierce competition, in a world governed by the perpetual need for heavy promotion in order to ensure unchallenged success at any level be it individual or organizational, scientific or artistic, intellectual or literary, corporate or philanthropic, the role of marketing for any professional venture is like oxygen to life.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 22px;\">n Pakistan, very few can dare to claim offering 360 degree marketing which matches contemporary standards of excellence with internationally recognized companies. One name that immediately catches our attention is “Enablers” which efficiently provides top quality services in all modern genres of marketing whether digital, outdoor, electronic, radio, print etc. Dealing with almost everything and everyone – brands, real estate, food, lifestyle, celebrities, aspiring stars, Enablers is the perfect answer for all your special needs of formation of creatives, visuals, photography, videography, conventional marketing, brand consultancy, brand image building and expert content writing.</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 22px;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 22px;\"><br></span><br></p>', '1624459556.jpg', '2021-06-23 08:45:56', '2021-06-23 08:45:56'),
(2, 'INVESTMENT GROUP', 'nablers brings Enablers Investment Group', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Enablers brings Enablers Investment Group (EIG) for the investors who are looking to invest in successful listings that are out of Burning Phase and making Profit. These listings will be announced in the group and will be marked as open for investors to Invest.</p><h2 style=\"margin: 20px 0px 10px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.2; vertical-align: baseline; font-family: Poppins; font-size: 35px; font-weight: 500; color: rgb(0, 0, 0); letter-spacing: normal;\">How Investment will work: (for example)</h2><ul class=\"best-ser-lists\" style=\"margin-bottom: 10px; margin-left: 20px; padding-left: 15px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 40px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0); list-style-image: url(&quot;https://www.enablers.org/wp-content/uploads/2020/01/orange-dot.png&quot;);\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">If a listing is making profit of $5000 per month, the listing valuation will be based on multiplier of 20 months which is $5000 x 20=$100000/-. This would be Sellers discretion how much equity he wants to sell in the listing, If he wants to sell 50% of equity the investor would be paying 50% of the Per Month Profit Multiplied by 20 times which is a multiplier of 20x.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">For Example, 50% equity valuation of $100,000 in this case would be $50,000. This would be the amount required to become shareholder in the listing making $5000 per month, counted as the goodwill seller has taken with investment of $50,000</li></ul><h2 style=\"margin: 20px 0px 10px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.2; vertical-align: baseline; font-family: Poppins; font-size: 35px; font-weight: 500; color: rgb(0, 0, 0); letter-spacing: normal;\">Now, the question comes – who will be continuing to do all the work, expenses and further investments to expand the listing?</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 14px; font-style: inherit; font-weight: inherit;\">Here is the answer to that question:</span></p><ul class=\"best-ser-lists\" style=\"margin-bottom: 10px; margin-left: 20px; padding-left: 15px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 40px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0); list-style-image: url(&quot;https://www.enablers.org/wp-content/uploads/2020/01/orange-dot.png&quot;);\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Once the investor has paid the initial equity amount in the form of goodwill, he will be shareholder of 50% in the listing, making him liable to be partner in 50% of profits + investment + expenses.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">This is a great opportunity for students who are running successful listings.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">I would like to ask all the students to start thinking of getting investors in your successful listings if you are struggling with more investment to grow. Getting investors will ease out your cash flows and make more space for you to grow. This will result in making more room for you and your business to grow.</li></ul>', '1624459730.jpg', '2021-06-23 08:48:50', '2021-06-23 08:48:50'),
(3, 'LISTING OPTIMIZATION', 'BEST LISTING OPTIMIZATION SERVICES', '<h2 style=\"margin: 20px 0px 10px; padding: 0px 0px 10px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.2; vertical-align: baseline; font-family: Poppins; font-size: 35px; font-weight: 500; color: rgb(0, 0, 0); letter-spacing: normal;\">BEST LISTING OPTIMIZATION SERVICES</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Writing a great copy appealing for the customer is just half the task. The other half is appealing to the<br>Amazons’ A9 algorithm. Enablers go a long way to improve your Amazon sales, enhance your conversions, and ultimately maximize your profits.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our team is composed of professionals and experts who are fully aware of the rules that are set by Amazon regarding listing products. We adhere to the rules and guidelines that are set by Amazon and help you in increasing the visibility of your product and win the sales you need.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Provide precisely crafted compelling content that is tailored just for your product, using the best keyword targeting techniques and sale inducing language we ensure that maximum prospective buyers are converted into sales. Our listing optimization services include:</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Extensive Keyword Research</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">By using the best research tools and methods, we fetch the most profitable, high volume, and converting keywords to drive traffic by keeping in mind the search result of customers.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">SEO Friendly Product Title</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">The product title is the most crucial and the first piece of information that your potential customers interact with. We create powerful, keyword-rich, and SEO friendly title for your product that are indexed by Amazon’s A9 algorithm, highlighting all the important details of your product.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Competitor Research</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">We keep an eye on the current trends in the market by conducting an in-depth analysis of your competitors and similar products to make you know what exactly the buyers are looking for and searching, their likes and needs.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Optimized Backend Search Terms</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">To enhance the discoverability and ranking of your product, we provide a detailed list of backend search items which consist of all the generic and long-tail keywords.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Precise Product Research and Brand Presentation</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our experts carry out detailed and extensive product research to create a precise yet informative as well as accurate listing while presenting your brand in the best possible way, helping you build a loyal customer base.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Compelling Bullet Points and Description</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">We create appealing bullet points and description for you that points out the exclusive key features of your product, guiding the potential customers exactly why they should buy your product.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">SEO Certified Experts</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our team of SEO certified experts having several years of experience in making appealing, profitable, and convertible Amazon product listing create listing for you.</p>', '1624459832.jpg', '2021-06-23 08:50:32', '2021-06-23 08:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VGDHgpkyRKgLJwrqccqBXogqegzf43R7WXIeshIQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzV2enBEN01vVW1zVlBaTmpjcjNSYU1KTmxFdGxaTHVpYkVqUUkwRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb3Vyc2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1624461942);

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desctiption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `name`, `location`, `short_desctiption`, `long_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Muqeet', 'panrhapath', 'My 1st Success Story With the Grace of Allah i have Earned 800 Dollars in Just 20 Days. I am a Student of VA Batch 4 of Sir Danish Khalil', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">Alhamdulillah</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">My 1st Success Story</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">With the Grace of Allah i have Earned 800 Dollars in Just 20 Days. I am a Student of VA Batch 4 of Sir Danish Khalil . True Mentorship have Enabled me to earn this Amount .</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">Thank You Sir Saqib Azhar for providing such a Marvelous Platform . Alhamdulillah Enablers have Enabled me that i have Earned 800 Dollars in just 20 Days .</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">Its been a Great Pleasure that i am doing my Internship also in Enablers Karachi Office .</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins; font-size: 18px;\">Thank You Sir Danish Khalil Sir Fawad Umar Sir Saqib Intizar for Always Helping me</span><br></p>', '1624461131.jpg', '2021-06-23 09:12:11', '2021-06-23 09:12:11'),
(2, 'Marcus Doe', 'dhaka', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px;\">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</span><br></p>', '1624461228.png', '2021-06-23 09:13:48', '2021-06-23 09:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `title`, `description`, `phone`, `facebook`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Refund Request', '<p>this is refund request</p>', '01814253654', 'www.facebook.com', 'skill@gmail.com', '2021-06-23 09:20:14', '2021-06-23 09:20:14'),
(2, 'general complaint', '<p>this comment section</p>', '01814253654', 'www.facebook.com/home', 'skill@gmail.com', '2021-06-23 09:21:02', '2021-06-23 09:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `phone`, `last_education`, `current_work`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mehedi', 'njdskjn@gmail.com', '01814253654', 'MSC', 'developer', 'panthpath', '1624461502.png', NULL, '2021-06-23 09:18:22'),
(3, 'karim', 'karim@gmail.com', '01814253654', 'BSC', 'developer', 'dhaka, 1212', '1624461470.jpg', '2021-06-23 09:17:50', '2021-06-23 09:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buycourses`
--
ALTER TABLE `buycourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perticipators`
--
ALTER TABLE `perticipators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminer_trainers`
--
ALTER TABLE `seminer_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `buycourses`
--
ALTER TABLE `buycourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perticipators`
--
ALTER TABLE `perticipators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seminer_trainers`
--
ALTER TABLE `seminer_trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
