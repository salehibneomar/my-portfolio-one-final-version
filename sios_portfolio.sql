-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 08:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sios_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `institute`, `purpose`, `description`, `ref`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sololearn Valentine 2019 Coding Contest', 'Sololearn', 'Achievement', 'Sololearn is an online platform (Mainly mobile app) which offers beginner programming courses also it has a huge active community, the platform announced a contest in February, 2019, the purpose of the contest was to develop a program for valentine\'s day, I was one of the contestants and was announced one of the winners along two others, my project got more than 400 likes during the contest period.', 'https://drive.google.com/file/d/1ft8p3xBcLgQwEjOadNso50TBBwhy4ln1/view?usp=share_link', 1, '2022-12-15 14:02:16', '2022-12-15 14:08:30'),
(2, 'Shout-out from Shahriar Manzoor Sir', 'Southeast University', 'Achievement', 'Shahriar Manzoor Sir congratulates students who performs well in his courses and gets A+ through Facebook posts, I was one of the lucky ones to get A+ in his CS Math course in Fall 2019.', 'https://drive.google.com/file/d/1SGG_3pz-ok7w8YMSkyNt8SCRF3I8eEeZ/view?usp=share_link', 1, '2022-12-15 14:15:57', '2022-12-15 14:15:57'),
(3, 'Intra-University Programming Contest 2K19 (Junior Category)', 'Southeast University', 'Achievement', 'SEU conducted an Intra university contest in 2019 before ICPC preliminary, I was one of the contestants of Junior division and ranked sixth by solving 3 problems.', 'https://www.hackerrank.com/contests/seu-intra-university-programming-contest-2k19-junior-category/leaderboard', 1, '2022-12-15 14:30:25', '2022-12-15 14:30:25'),
(4, 'ICPC Dhaka Preliminary Contest 2019', 'ICPC', 'Contest', 'Participated in ICPC Preliminary Contest and solved 2 problems but didn\'t qualify for the regional round, my team name was seu_incognito_coders', 'https://drive.google.com/file/d/1PqqSK_j6BuoMRalPSZYDMsGm0g2Z2TSE/view?usp=share_link', 1, '2022-12-15 14:38:24', '2022-12-15 14:38:24'),
(5, 'Shikhbe Shobai PHP & Laravel course Best Performer', 'Shikhbe Shobai', 'Achievement', 'Batch - SSB 280', 'https://drive.google.com/file/d/1nLq0RAYGJVYzxCHMo8HkAcsh65Ul-Ox7/view?usp=share_link', 1, '2022-12-15 14:48:02', '2022-12-15 14:48:02'),
(6, 'Complete PHP OOP Concepts for Absolute Beginners + Projects', 'Udemy', 'Online Course', 'Downloaded the course from a pirate website to learn how OOP PHP works.', 'https://www.udemy.com/course/complete-php-oop-tutorials-for-absolute-beginners-projects/', 1, '2022-12-15 14:56:17', '2022-12-15 14:56:17'),
(7, 'Laravel 8 - Build Advance Ecommerce Project A-Z', 'Udemy', 'Online Course', 'This course was very informative and fun at the same time.', 'https://www.udemy.com/course/laravel-advance-ecommerce-project/', 1, '2022-12-15 14:57:40', '2022-12-15 14:57:40'),
(8, 'RESTful API with Laravel: Build a Real API with Laravel', 'Udemy', 'Online Course', 'Though the Laravel version used in this course is outdated but it is full of professional information.', 'https://www.udemy.com/course/restful-api-with-laravel-php-homestead-passport-hateoas/', 1, '2022-12-15 14:59:51', '2022-12-15 14:59:51'),
(9, 'Modern JavaScript (Complete guide, from Novice to Ninja)', 'Udemy', 'Online Course', 'It was very fun course to learn Modern JS', 'https://www.udemy.com/course/modern-javascript-from-novice-to-ninja/', 1, '2022-12-15 15:01:15', '2022-12-15 15:01:15'),
(10, 'React Front To Back 2022', 'Udemy', 'Online Course', 'Didn\'t complete the whole course except the ReactJS part.', 'https://www.udemy.com/course/react-front-to-back-2022/', 1, '2022-12-15 15:03:07', '2022-12-15 15:03:07'),
(11, 'Basic Web Development using PHP & MySQL', 'Personal YouTube Channel', 'Tutorial', 'I made this online course to train some of my university juniors about web development using PHP and MySQL from the scratch and developed a basic CRUD app having authentication functionality.', 'https://www.youtube.com/playlist?list=PLuHQJEmlu_KaZKldRf651Nl2iGOP1GdPj', 1, '2022-12-15 15:08:31', '2022-12-15 15:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `name`, `logo`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Saleh Ibne Omar', 'images/settings/logo.png', 1, '2022-12-12 08:08:10', '2022-12-12 13:06:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeline` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `passing_year`, `timeline`, `grade`, `institute`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Primary Scholarship Exam', '2008', NULL, 'Talent-pool Scholarship', 'Banani Bidyaniketan School & College', 'Participated in the primary scholarship exam in 2008 and secured a talent-pool scholarship back then, I was also in special batch in primary scholarship exam organized by my school.', 1, '2022-12-12 14:21:29', '2022-12-12 14:22:04'),
(2, 'Junior School Certificate', '2011', NULL, 'GPA 4.86', 'Banani Bidyaniketan School & College', 'Missed A+ in Bengali that\'s why I didn\'t get GPA 5.00 and at that time students had to get A+ in all subjects to achieve GPA 5.00.', 1, '2022-12-12 14:34:55', '2022-12-12 14:43:06'),
(3, 'SSC in Science', '2014', '2012-2013', 'GPA 5.00', 'Banani Bidyaniketan School & College', 'The exam was held in 2014 and I passed the exam with A+ in all subjects', 1, '2022-12-12 14:42:47', '2022-12-12 14:42:47'),
(4, 'HSC in Science', '2016', '2014-2015', 'GPA 4.83', 'St. Joseph Higher Secondary School', 'Had the privilege to get admission in one of the best higher secondary schools in the country, though I didn\'t get a GPA 5 but definitely learned a lot from the institution.', 1, '2022-12-12 15:10:46', '2022-12-12 15:15:00'),
(5, 'B.Sc. In Computer Science and Engineering', NULL, 'Research & Internship left', 'CGPA 3.89', 'Southeast University', 'I was admitted in spring 2017 and my graduation was supposed to be in fall 2020 but it didn\'t happen because I had to drop several semesters due to cervical disc herniation disease, my doctor told me to take bed rest for 3 months because I was in severe condition, but unfortunately I was recovering very slowly which led me to drop 4 consecutive semesters, as soon as I recovered I took readmission to resume my academics and now I have only research and internship left to complete my graduation.', 1, '2022-12-12 16:29:55', '2022-12-12 16:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `company`, `type`, `timeline`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Private HSC ICT Teaching', 'Private Tuition', 'Personal', '2018 - 2020', 'I have the experience of teaching HSC ICT subject to HSC students as a private tutor', 1, '2022-12-13 17:10:22', '2022-12-13 19:06:08'),
(2, 'Web Development using PHP & MySQL', NULL, 'Personal', '2019 - Present', 'I\'ve been using RAW PHP and MySQL to develop small to advanced personal and university projects. Over the time I\'ve developed several projects such as Library Management System, News Paper Website, GYM Trainer personal app, and other projects using this stack.', 1, '2022-12-13 17:58:37', '2022-12-13 19:06:05'),
(3, 'Web Development using Laravel', NULL, 'Personal', '2021 - Present', 'My love for PHP drove me to learn Laravel framework and I must say I kinda love using this framework, I\'ve developed some personal projects using Laravel and MySQL such as one full featured E-commerce project, Personal Blogging website, Portfolio website and API for a Restaurant website and multiple practice CRUD projects.', 1, '2022-12-13 18:22:48', '2022-12-13 19:06:01'),
(4, 'Frontend Web Development using React JS', NULL, 'Personal', '2022 - Present', 'I\'m new to React JS and using this frontend framework I\'ve developed a complete Restaurant website which is powered by Laravel API, a CRUD app and some practice projects. I haven\'t work with Redux and Token based Authentication system using React yet but I\'ve worked with React Conext API.', 1, '2022-12-13 18:45:26', '2022-12-13 19:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `platform`, `url`, `icon`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Linkedin', 'https://www.linkedin.com/in/salehibneomar', 'images/media/media_icon_9KAL1pPwlzM14hUN_dt_12122022_191223_.png', 1, '2022-12-12 13:12:23', '2022-12-12 13:12:23'),
(2, 'GitHub', 'https://github.com/salehibneomar', 'images/media/media_icon_cPleVAazoG67DXEN_dt_12122022_191246_.png', 1, '2022-12-12 13:12:46', '2022-12-12 13:12:46'),
(3, 'Facebook', 'https://m.me/salehibneomar.fb', 'images/media/media_icon_pVz2kKmFMn5FiseH_dt_18122022_001208_.png', 1, '2022-12-12 13:13:40', '2022-12-17 18:12:08'),
(4, 'Sololearn', 'https://www.sololearn.com/profile/7785970', 'images/media/media_icon_Ctee9XQZNyL9ZCtX_dt_12122022_191356_.png', 1, '2022-12-12 13:13:56', '2022-12-12 13:13:56'),
(5, 'Slideshare', 'https://www.slideshare.net/SalehIbneOmar', 'images/media/media_icon_BkmHJ8mEBGsK4yo1_dt_12122022_191410_.png', 1, '2022-12-12 13:14:10', '2022-12-12 13:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_14_233055_create_profiles_table', 1),
(6, '2022_11_15_221739_create_app_settings_table', 1),
(7, '2022_11_16_003841_create_media_table', 1),
(8, '2022_11_17_193908_create_skills_table', 1),
(9, '2022_11_17_230120_create_problem_solvings_table', 1),
(10, '2022_11_20_221648_create_education_table', 1),
(11, '2022_11_24_151634_create_activities_table', 1),
(12, '2022_11_24_232044_create_experiences_table', 1),
(13, '2022_11_26_214857_create_projects_table', 1),
(14, '2022_11_30_213108_add_cv_to_profiles_table', 1),
(15, '2022_11_30_225155_create_visitor_tracks_table', 1),
(17, '2022_12_13_182456_add_current_job_to_profiles_table', 2),
(18, '2022_12_13_183550_add_current_job_to_profiles_table', 3),
(19, '2022_12_17_000457_add_platform_slug_to_proejcts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problem_solvings`
--

CREATE TABLE `problem_solvings` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solved` int(10) UNSIGNED NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problem_solvings`
--

INSERT INTO `problem_solvings` (`id`, `platform`, `solved`, `profile`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Beecrowd', 171, 'https://www.beecrowd.com.br/judge/en/profile/327002', 1, '2022-12-12 16:34:23', '2022-12-12 16:34:23'),
(2, 'Codeforces', 100, 'https://codeforces.com/profile/xxionn', 1, '2022-12-12 16:35:11', '2022-12-12 16:35:11'),
(3, 'HackerRank', 55, 'https://www.hackerrank.com/saleh_ibne_omar', 1, '2022-12-12 16:36:04', '2022-12-12 16:36:04'),
(5, 'UVa', 16, 'https://onlinejudge.org/index.php?option=com_onlinejudge&Itemid=19&page=show_authorstats&userid=1061493', 1, '2022-12-12 16:37:29', '2022-12-12 16:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_addr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typed_quotes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `formal_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fullname`, `nickname`, `dob`, `phone`, `email`, `present_addr`, `about`, `vision`, `nationality`, `religion`, `marital_status`, `typed_quotes`, `education`, `professional_title`, `formal_image`, `current_job`, `cv`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Saleh Ibne Omar', 'Saleh', '1998-03-01', '01521583225', 'salehibneomar@gmail.com', 'Dummy', 'Dummy', 'Dummy', 'Bangladeshi', 'Islam', 'Unmarried', 'Full Stack Web Developer, Programmer, Technology Lover, Planner', 'B.Sc. In CSE', 'Dummy', 'images/profile/formal_image_dt_121222_190525_.jpg', NULL, NULL, 1, '2022-12-12 08:08:10', '2022-12-13 14:44:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `techs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `thumbnail`, `description`, `github`, `video`, `live`, `techs`, `platform`, `platform_slug`, `priority`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tinyone PSD to HTML', 'images/projects/project_YrEToDyMYCIWwaR9meKi0MLf_dt_16122022_160716_.PNG', 'Simple web design project, the purpose of the project was to convert a PSD template to HTML webpage', 'https://github.com/salehibneomar/psd-to-html-tinyone-responsive', 'https://www.youtube.com/watch?v=C9_dMWVwC7k', NULL, 'HTML, CSS', 'Web Design', 'web-design', 1, 1, '2022-12-16 10:01:05', '2022-12-16 18:17:17'),
(2, 'Strict PSD to HTML', 'images/projects/project_7O00Qi0D4zHGh1gLzs0wAtR1_dt_16122022_174309_.jpg', 'Simple web design project, the purpose of the project was to convert a PSD template to HTML webpage', 'https://github.com/salehibneomar/psd-to-html-strict-responsive', 'https://youtu.be/VEwZ2bfqzb4', NULL, 'HTML, CSS', 'Web Design', 'web-design', 1, 1, '2022-12-16 11:43:09', '2022-12-16 18:17:29'),
(6, 'Blogging Website Landing Page Template', 'images/projects/project_GDZmGy6xz99KzauuEMviSVy6_dt_16122022_184551_.PNG', 'A whole blogging website landing page template designed by me using HTML and Bootstrap 4', NULL, NULL, 'http://sio.rf.gd/bootstrap-blog-website-design/', 'HTML, Bootstrap 4', 'Web Design', 'web-design', 3, 1, '2022-12-16 12:45:51', '2022-12-17 17:47:45'),
(8, 'Basic JavaScript Calculator', 'images/projects/project_Fowt2Wp4faPfkqLeJV8i8pQF_dt_16122022_190404_.PNG', 'This was my very first complete Vanilla JS project, I was learning JS then.', 'https://github.com/salehibneomar/js-basic-calculator', NULL, 'http://sio.rf.gd/js-basic-calculator/', 'JS, Bootstrap 3', 'JS or React', 'js-or-react', 1, 1, '2022-12-16 13:04:04', '2022-12-17 17:38:09'),
(9, 'JavaScript Digital Clock', 'images/projects/project_p22BLLqrjudJ4qYfZagy6fLs_dt_16122022_193450_.PNG', 'This is a Vanilla JS project, the digital clock updates it\'s background and shows a message according to the part of the day, the messages and images are static and hard coded.', 'https://github.com/salehibneomar/js-digital-clock', NULL, NULL, 'JS, Bootstrap', 'JS or React', 'js-or-react', 1, 1, '2022-12-16 13:34:51', '2022-12-17 17:38:12'),
(11, 'Valentine\'s Day Digital JavaScript Gift Card', 'images/projects/project_PqLzxuxoT1JUMeekN23BH0ZL_dt_16122022_194929_.PNG', 'Developed this project for an online contest organized by Solarlearn for Valentine\'s Day in February 2019. This was a contest winning project.', NULL, 'https://youtu.be/Vb2YyqANMTg', 'http://sio.rf.gd/valentine-digital-card/', 'JS, Animate CSS', 'JS or React', 'js-or-react', 3, 1, '2022-12-16 13:49:30', '2022-12-17 17:47:36'),
(12, 'Concrete Mixture Calculator', 'images/projects/project_HaQL2Dx84GDSroD2zhHK4V3i_dt_16122022_200252_.PNG', 'A simple Vanilla JS Concrete Mixture Calculator app, which calculates the rounds of Concrete Mixtures used in construction sites, manually keeping track of the rounds using pen and paper is a hassle that\'s why I\'ve came up with a simple yet effective solution and developed this app.', NULL, 'https://youtu.be/IC3c2ag_ffA', 'http://sio.rf.gd/concrete-mixture-calculator/', 'JS, Bootstrap', 'JS or React', 'js-or-react', 3, 1, '2022-12-16 14:02:53', '2022-12-17 17:49:39'),
(13, 'JavaScript Weather App', 'images/projects/project_gGQsUZO8ZaQiPvfIinGmeCyr_dt_16122022_201554_.PNG', 'This app uses accuweather\'s free api service, buy using JS Fetch API the app fetches weather data of cities in Bangladesh only.', 'https://github.com/salehibneomar/js-practice/tree/main/JS_Practice/JS_weather_app', 'https://youtu.be/gLzg7pYe178', NULL, 'JS, Fetch API', 'JS or React', 'js-or-react', 2, 1, '2022-12-16 14:15:55', '2022-12-17 17:49:45'),
(14, 'A web design project for university course (English for Engineers)', 'images/projects/project_9feQKKG1m0kq1VZ05lRe4PIo_dt_16122022_202719_.PNG', 'N/A', 'https://github.com/salehibneomar/seu-advanced-english-course-project-design', NULL, NULL, 'HTML, CSS, Bootstrap', 'Web Design', 'web-design', 1, 1, '2022-12-16 14:27:19', '2022-12-16 18:18:35'),
(16, 'Basic Desktop Java Swing Calculator', 'images/projects/project_8qOXMsjv9S9EIvYv3CdnipIQ_dt_16122022_222051_.PNG', 'This basic desktop calculator was developed in 2019 I was doing Java course at my University.', 'https://github.com/salehibneomar/basic-java-swing-descktop-calculator', NULL, NULL, 'Java 8, Swing UI', 'Java', 'java', 1, 1, '2022-12-16 16:20:51', '2022-12-16 18:18:41'),
(17, 'Java Grocery Planner Desktop App', 'images/projects/project_tkbjOGBjlcLvv2kqIn5aQmgq_dt_16122022_223821_.png', 'I did this project using Java Swing as UI and MySQL as Database after completing my university Java course in 2019.', 'https://github.com/salehibneomar/java-swing-groceryplanner-desktopapp', 'https://youtu.be/aCQ16_JxMLQ', NULL, 'Java 8, Swing UI, MySQL', 'Java', 'java', 3, 1, '2022-12-16 16:38:22', '2022-12-17 17:47:09'),
(18, 'House Rental Management System (HRMS)', 'images/projects/project_fuJfAaX9ew6cgPJj1zR3iO7t_dt_16122022_225147_.PNG', 'Developed this project using Raw PHP and MySQL as backend technologies, used different frontend technologies including plugins also did some custom CSS coding to give the UI a different feel. This project was developed for the \'Database Management System Lab\' Course of my university. It has multiple CRUD operations for different purpose, has a multi authentication system (Owner & Tenant)', 'https://github.com/salehibneomar/cse3012-database-design-lab-project', NULL, NULL, 'PHP, MySQL, Bootstrap, CSS', 'PHP or Laravel', 'php-or-laravel', 3, 1, '2022-12-16 16:51:47', '2022-12-17 17:47:15'),
(19, 'Residential Rental Finding System (ISD Lab Project)', 'images/projects/project_wdTHAWnlrf6py3KzAEaGecLm_dt_16122022_231506_.png', 'This project was developed for one of my university courses named Information System Design Lab, the project has Login registration system for the surface user but it doesn\'t have an admin control panel, the surface users can browse the pages which can be accessible without log into the website, the users also can post, view ads posted by one and can also delete them. Visitor can search for ads and view details.', 'https://github.com/salehibneomar/cse3036-information-sys-design-lab-project', 'https://youtu.be/dLa494Q9WSA', NULL, 'PHP, MySQL, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 1, 1, '2022-12-16 17:15:06', '2022-12-17 17:37:11'),
(21, 'Dating Website Demo (Advanced Java Project)', 'images/projects/project_QH5AApp6FBSMU6MNPJP9YUfq_dt_17122022_131916_.PNG', 'I\'ve used Spring Boot framework to develop API for the website, used PHP cURL to process the API and PHP session for authentication system to make the demo website work, it had multiple CRUD system, a landing page, login and registration system and user based resource access system. Did this project as the final assignment for the course Advanced Java of my university in summer 2020.', 'https://github.com/salehibneomar/advanced-java-final-project', NULL, NULL, 'Java 8, Spring Boot, MySQL, PHP cURL', 'Java', 'java', 3, 1, '2022-12-17 07:19:16', '2022-12-17 17:45:58'),
(22, 'Competitive Programming Materials Website', 'images/projects/project_QBhBDffvaBpJy8nLon2cnlMv_dt_17122022_132738_.PNG', 'This is a personal website which I\'ve developed to share competitive programming resources, contest links and solutions easily to those whoever may need, it has a role based login system and an admin panel, the whole web app was custom designed with the help of Semantic UI CSS framework.', 'https://github.com/salehibneomar/cpmaterials-webapp', NULL, 'http://cpmaterials.rf.gd/', 'PHP, MySQL, Semantic UI, AJAX', 'PHP or Laravel', 'php-or-laravel', 4, 1, '2022-12-17 07:27:39', '2022-12-17 17:57:20'),
(23, 'News Portal Website', 'images/projects/project_64NKRbMeJM5wpG8yQo0emKpp_dt_17122022_143134_.PNG', 'Developed this project when I was a trainee of Shikhbe Shobai PHP & Laravel course in late 2020, our mentor was Mr. Faisal Hamid Hemel. The project has a complete visitor UI a full featured admin panel, it also has role based multi authentication system (Admin, Editor, General User). Users can read news and also post comments. It\'s a complete News Portal System PHP and MySQL project. I\'ve also used server side datatables to fetch use amount of data just in case.', 'https://github.com/salehibneomar/news-portal-sys-webapp', 'https://youtu.be/y2vfioTscWc', NULL, 'PHP, MySQL, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 5, 1, '2022-12-17 08:31:34', '2022-12-17 17:56:38'),
(24, 'Library Management System', 'images/projects/project_ka8k9Cpg0OsBXRgXopZ9RC2o_dt_17122022_192109_.PNG', 'In late 2020 Mr. Faisal Hamid Hemel from Shikhbe Shobai training center wanted to test our skills that\'s why he told us to develop a Library Management System only using PHP and MySQL, I developed the project as per his instructions and I was announced one of the best performers. The project has multi-auth login system (Member, Admin, Editor), registration system, an admin panel, the library members can browse and request for book by themselves using the cart feature and the librarian gets a notification of the request from there the librarian can accept or decline book borrow request.', 'https://github.com/salehibneomar/library-management-sys-webapp', 'https://youtu.be/l-JSAdZcQCU', NULL, 'PHP, MySQL, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 5, 1, '2022-12-17 13:21:09', '2022-12-17 17:56:35'),
(25, 'GYM Trainer Client Management System (Personal)', 'images/projects/project_hwtLOCe2b7LuvhXyC6wtX9C1_dt_17122022_194934_.PNG', 'This project was developed for a local client, he is a GYM trainer, he was tired of writing routines for his clients using pen and paper that\'s why he wanted to make something digital and automated. This system allows multi-auth system for both trainer and client, the trainer can login and see all of his client\'s details he can add or block clients, make workout routines and diet plans for them, the clients can login and see their workout routines, diet plans, the clients can also see which workout they needs to do for a particular day and how many days left for them to ask a new routine from the trainer. The system also has a landing page which acts as portfolio of the trainer just cut the /app from the demo live URL and it will take you to the landing page. To login to the system use phone number: 01611223344, password: 123456, and select login as trainer from the dropdown list.', 'https://github.com/salehibneomar/gym-trainer-personal-webapp', NULL, 'https://azsfitness.000webhostapp.com/app', 'PHP, PDO, OOP, MySQL', 'PHP or Laravel', 'php-or-laravel', 5, 1, '2022-12-17 13:49:34', '2022-12-17 17:56:32'),
(26, 'Simple PHP, MySQL, and AJAX CRUD', 'images/projects/project_o9iiGvUEemvKmoTzWG9uP3Lw_dt_17122022_211641_.PNG', 'Simple PHP, MySQL, and AJAX CRUD', 'https://github.com/salehibneomar/ssb-280-class-practices/tree/master/SSB-280-TODO-LIST-Project', 'https://youtu.be/vEKycCwvQ2o', 'http://sio.rf.gd/', 'PHP, MySQL, AJAX, Semantic UI', 'PHP or Laravel', 'php-or-laravel', 3, 1, '2022-12-17 15:16:42', '2022-12-17 17:51:21'),
(27, 'Personal Blog Website', 'images/projects/project_IxqlL9IsBCap1CaNAYAmobU4_dt_17122022_212100_.PNG', 'This is my personal Blog website which I\'ve developed by myself using PHP Framework Laravel 8, the website has an admin panel from where I can post photos, full length blog and status, the admin dashboard has a functional Pie and Bar Chart which shows different statistics.', 'https://github.com/salehibneomar/my-personal-blog-app', NULL, 'thickskull.lovestoblog.com/', 'Laravel 8, MySQL, Blade, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 6, 1, '2022-12-17 15:21:00', '2022-12-17 17:55:41'),
(28, 'E-commerce website One', 'images/projects/project_BmgxFPSOeSf7rvYiy7K9p3ZV_dt_17122022_214346_.PNG', 'This is my very first E-commerce website project, I\'ve used Laravel 8 to build this project, it has multi guard auth system, surface and admin panel are different, the website shows recent trends, which brands are people buying the most, it has an advanced product searching and filtering system, the admin panel uses yajra datatables package to handle huge amount of data. Developed this project in December 2021.', 'https://github.com/salehibneomar/laravel-ecom-one', NULL, NULL, 'Laravel 8, MySQL, Blade, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 6, 1, '2022-12-17 15:43:47', '2022-12-17 17:55:37'),
(29, 'GitHub Account Finder', 'images/projects/project_MmVHvv0adk6K8lQRJeDkdqHG_dt_17122022_220429_.PNG', 'A simple GitHub Account Finder app I\'ve developed as a practice project while I was learning ReactJS', 'https://github.com/salehibneomar/reactjs-github-profile-finder', NULL, NULL, 'React, Context API, Fetch API', 'JS or React', 'js-or-react', 3, 1, '2022-12-17 16:04:29', '2022-12-17 17:50:43'),
(30, 'React JS and Laravel CRUD app', 'images/projects/project_Rj9e4b3WIvZMAdqZTw6iGBYu_dt_17122022_221618_.png', 'This is a React & Laravel app, the backend api service is provided by laravel, though it\'s a single crud app but it has all the necessary features such as pagination and sorting.', 'https://github.com/salehibneomar/laravel-react-todoapp', 'https://youtu.be/Ay3bDWStvSM', NULL, 'React, Laravel, MySQL, Bootstrap', 'React & Laravel', 'react-laravel', 5, 1, '2022-12-17 16:16:18', '2022-12-17 17:57:58'),
(31, 'Restaurant Website (React & Laravel Fullstack Project)', 'images/projects/project_mRdE8AJYa9LqdHeZQPbmPEUd_dt_17122022_225507_.jpg', 'This app has role based multi-auth system for the admin panel, from admin panel admin can create menu types, update site information, add menu items where editor can do limited operations. The react forntend doesn\'t have any auth system, every visitor can see menus according to the menu types, this system will save restaurant money by not printing physical menu books.', 'https://github.com/salehibneomar/restaurant-website-project', 'https://youtu.be/9M7cbQCHtU8', NULL, 'React, Laravel, MySQL, Context API, Bootstrap', 'React & Laravel', 'react-laravel', 6, 1, '2022-12-17 16:44:11', '2022-12-17 17:55:32'),
(32, 'Intruder Detection System using Arduino UNO R3', 'images/projects/project_ZQ7syIEIsMG2uTZKzLbv1n7T_dt_17122022_225405_.jpg', 'This project was developed for the course Embedded Systems Lab of Southeast University. This system detects unwanted objects by rotating a sonar sensor, it can work on any weather situation, when it detects an intrusion it kicks off a buzzer alarm and red warning light. Project planned and developed by Saleh Ibne Omar, logistics support provided by other group members.', 'https://github.com/salehibneomar/intruder-detection-system-using-arduino', 'https://youtube.com/shorts/lv3jyNthkB8?feature=share', NULL, 'Arduino, SG90, SR04, DHT11', 'Embedded', 'embedded', 4, 1, '2022-12-17 16:54:05', '2022-12-17 17:46:08'),
(33, 'My Portfolio Website (This Website)', 'images/projects/project_RdGkih5Ia81dCA43lUSkigGp_dt_17122022_234115_.PNG', 'This project has an full featured admin panel from where I control my contents of my portfolio website.', NULL, NULL, 'salehibneomar.infinityfreeapp.com', 'Laravel 8, MySQL, Blade, Bootstrap', 'PHP or Laravel', 'php-or-laravel', 6, 1, '2022-12-17 17:41:15', '2022-12-17 17:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '0=Not In practice, 1=Practice, 2=New',
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 95, 1, 1, '2022-12-13 14:20:11', '2022-12-13 14:20:11'),
(2, 'CSS', 80, 1, 1, '2022-12-13 14:21:03', '2022-12-13 14:21:03'),
(3, 'C++ & STL', 80, 1, 1, '2022-12-13 14:21:54', '2022-12-13 14:27:03'),
(4, 'PHP', 85, 1, 1, '2022-12-13 14:25:25', '2022-12-13 14:25:25'),
(5, 'Laravel', 70, 1, 1, '2022-12-13 14:25:55', '2022-12-13 14:25:55'),
(6, 'JavaScript & jQuery', 75, 1, 1, '2022-12-13 14:26:30', '2022-12-17 07:42:37'),
(7, 'ReactJs', 65, 1, 1, '2022-12-13 14:27:37', '2022-12-13 14:27:37'),
(8, 'Java', 70, 0, 1, '2022-12-13 14:27:59', '2022-12-17 07:44:18'),
(10, 'Bootstrap', 90, 1, 1, '2022-12-13 14:29:11', '2022-12-13 14:29:19'),
(11, 'Microsoft Word', 70, 1, 1, '2022-12-13 14:31:15', '2022-12-13 14:32:37'),
(12, 'Microsoft PowerPoint', 70, 1, 1, '2022-12-13 14:31:53', '2022-12-13 14:31:53'),
(13, 'Materilize CSS Framework', 70, 0, 1, '2022-12-13 14:33:51', '2022-12-13 14:33:51'),
(14, 'Semantic UI', 65, 0, 1, '2022-12-13 14:34:33', '2022-12-13 14:34:33'),
(16, 'PSD to HTML', 65, 0, 1, '2022-12-16 17:43:16', '2022-12-16 17:43:16'),
(19, 'Java Spring Boot', 50, 0, 1, '2022-12-17 07:44:48', '2022-12-17 07:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Saleh Ibne Omar', 'salehibneomar@gmail.com', NULL, '$2y$10$q.HcqO2k8xstoDBe.6yIaun7/UHi7q7jLfO11aLtZ3wjOLxcDMZei', NULL, '2022-12-12 08:08:09', '2022-12-17 19:30:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tracks`
--

CREATE TABLE `visitor_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_tracks`
--

INSERT INTO `visitor_tracks` (`id`, `ip`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '2022-12-12 08:08:13', '2022-12-17 19:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `app_settings_user_id_foreign` (`user_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `problem_solvings`
--
ALTER TABLE `problem_solvings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_solvings_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor_tracks`
--
ALTER TABLE `visitor_tracks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem_solvings`
--
ALTER TABLE `problem_solvings`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_tracks`
--
ALTER TABLE `visitor_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD CONSTRAINT `app_settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `problem_solvings`
--
ALTER TABLE `problem_solvings`
  ADD CONSTRAINT `problem_solvings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
