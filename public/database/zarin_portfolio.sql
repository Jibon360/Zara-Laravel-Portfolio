-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 08:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zarin_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bigtitle` varchar(255) NOT NULL,
  `descriptions` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `bigtitle`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(6, 'I Am Modern Web Designer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tellus est, finibus ut congue sed, faucibus ut dui. Sed congue nisl dolor, id dapibus leo elementum posuere. Ut aliquam metus quis laoreet elementum. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Aliquam porta faucibus arcu, et consequat velit vestibulum in. Donec quis tellus ut urna volutpat posuere quis consectetur quam.', 'upload/aboutImage/1755726501016829.jpg', '2023-01-22 06:41:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aboutshorts`
--

CREATE TABLE `aboutshorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutshorts`
--

INSERT INTO `aboutshorts` (`id`, `info`, `data`, `created_at`, `updated_at`) VALUES
(3, 'Name', 'Zarin Zara Nancy', '2023-01-22 07:19:50', NULL),
(4, 'Age', '22', '2023-01-22 07:20:09', NULL),
(5, 'Address', 'Rangpur,Paglapir,Bangladesh', '2023-01-22 07:20:32', NULL),
(6, 'Phone', '+8801873593399', '2023-01-22 07:20:53', NULL),
(7, 'Nationality', 'Bangladesh', '2023-01-22 07:21:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `animatedheadlines`
--

CREATE TABLE `animatedheadlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animatedheadlines`
--

INSERT INTO `animatedheadlines` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Web Designer', '2023-01-26 03:37:40', NULL),
(3, 'Web Developer', '2023-01-26 03:37:50', NULL),
(11, 'Graphics Designer', '2023-01-28 01:45:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptions` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Hello', 'I\'m a Web Developer with extensive experience for over 5 years. My expertise is to create and\r\n                    Websites design, graphic design and many more...', 'upload/BannerImage/1756087344634473.jpg', '2023-01-26 06:10:48', '2023-01-26 06:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `bigtitle` varchar(255) NOT NULL,
  `descriptions` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `bigtitle`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Natus proident enim', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756238226822683.jpg', '2023-01-27 22:14:50', NULL),
(2, 8, 'Et et non fuga Sapi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756238246057896.jpg', '2023-01-27 22:15:08', NULL),
(3, 9, 'Sint quia explicabo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756238269704705.jpg', '2023-01-27 22:15:31', NULL),
(4, 10, 'Consectetur praesen', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756238287433251.jpg', '2023-01-27 22:15:48', NULL),
(5, 9, 'Deleniti ullamco tem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756238305968724.jpg', '2023-01-27 22:16:05', NULL),
(6, 8, 'Velit assumenda id', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis, corporis odit in dolores tempora, voluptate eligendi quaerat, quas nulla adipisci. Iure officiis doloribus similique eius voluptatum, explicabo iste molestias cumque magni rem eos! Quasi numquam, dolor eius architecto necessitatibus quis fugit adipisci perspiciatis, cum nostrum recusandae voluptatum impedit optio! Eos ipsa odio modi voluptatem aperiam est dolor doloremque rerum alias blanditiis totam voluptate, ab porro explicabo voluptatibus eligendi? Eum hic suscipit error cum, quod architecto? Ratione laborum odio quis vel voluptatum necessitatibus quod dolorem pariatur dignissimos, reiciendis consequatur ipsa maiores repellat laboriosam perspiciatis ab aliquid maxime eius? Ratione, ad dicta. Excepturi explicabo quia itaque libero numquam asperiores consequuntur molestiae assumenda officia non iste error dolorem perspiciatis, natus necessitatibus ea exercitationem. Dignissimos soluta voluptatibus dolorum enim eum laudantium assumenda magni aperiam, ducimus tempora fugiat distinctio libero voluptatum maiores. Magni alias, totam at facere numquam maxime enim delectus, dicta vitae nostrum tempora maiores quibusdam iusto minus, aspernatur exercitationem vero eos laborum obcaecati molestiae minima nesciunt! Reprehenderit cum fuga dicta ea, architecto ullam commodi quis ducimus labore similique ipsam corporis fugit temporibus quaerat enim maxime quibusdam eaque quisquam aut! Asperiores voluptatem corrupti magnam, fugit quaerat eum nam, atque eligendi placeat doloremque itaque!', 'upload/BlogImage/1756250847901370.jpg', '2023-01-28 01:35:44', '2023-01-28 01:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Web Desing', '2023-01-26 23:05:44', NULL),
(8, 'Web Development', '2023-01-27 00:09:29', NULL),
(9, 'Graphics Design', '2023-01-27 00:09:40', NULL),
(10, 'Ui/Ux Design', '2023-01-27 00:09:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvfile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `cvfile`, `created_at`, `updated_at`) VALUES
(8, 'upload/cv/1756092887213093.docx', '2023-01-26 07:41:47', '2023-01-26 07:44:43');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_text`, `created_at`, `updated_at`) VALUES
(2, 'CopyRight @: 2023 Zarin | All Rights Reserved', '2023-01-24 06:26:18', '2023-01-28 01:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_name`, `created_at`, `updated_at`) VALUES
(21, 'zarin', '2023-01-22 06:48:00', '2023-01-24 02:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(14, 'Mehedi', 'mjjibon115@gmail.com', 'I wil hire your for my next project', 'I wil hire your for my next projectI wil hire your for my next projectI wil hire your for my next projectI wil hire your for my next projectI wil hire your for my next project', '2023-01-26 22:39:55', NULL),
(15, 'Brielle Sampson', 'qikyvaw@mailinator.com', 'Impedit quibusdam o', 'Inventore id volupta', '2023-01-27 01:18:25', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_22_093653_create_logos_table', 2),
(8, '2023_01_22_112432_create_abouts_table', 3),
(9, '2023_01_22_124552_create_aboutshorts_table', 4),
(10, '2023_01_23_033049_create_services_table', 5),
(11, '2023_01_23_060602_create_portfolios_table', 6),
(12, '2023_01_24_070119_create_project_infos_table', 7),
(13, '2023_01_24_073428_create_resumes_table', 8),
(14, '2023_01_24_121000_create_footers_table', 9),
(15, '2023_01_24_122811_create_messages_table', 10),
(16, '2023_01_26_092429_create_animatedheadlines_table', 11),
(17, '2023_01_26_114547_create_banners_table', 12),
(19, '2023_01_26_122443_create_cvs_table', 13),
(20, '2023_01_27_050133_create_categories_table', 14),
(22, '2023_01_27_051333_create_blogs_table', 15),
(24, '2014_10_12_000000_create_users_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, 'upload/portfolio/1755794486566930.jpg', '2023-01-23 00:41:46', NULL),
(8, 'upload/portfolio/1755794497711272.jpg', '2023-01-23 00:41:57', NULL),
(9, 'upload/portfolio/1755794508701851.jpg', '2023-01-23 00:42:07', NULL),
(10, 'upload/portfolio/1755794521564091.jpg', '2023-01-23 00:42:20', NULL),
(11, 'upload/portfolio/1755794536536300.jpg', '2023-01-23 00:42:34', NULL),
(12, 'upload/portfolio/1755794558902874.jpg', '2023-01-23 00:42:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_infos`
--

CREATE TABLE `project_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_infos`
--

INSERT INTO `project_infos` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(2, 'Successul Projects', 55, '2023-01-24 01:21:50', '2023-01-26 06:18:42'),
(3, 'Happy Clients', 558, '2023-01-24 01:27:07', '2023-01-26 06:19:08'),
(4, 'Awards Received', 78, '2023-01-24 01:27:21', '2023-01-26 06:19:36'),
(5, 'Customer', 887, '2023-01-24 01:27:44', '2023-01-26 06:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `descriptions` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `title`, `short_title`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, 'Computer science', '2000 - 2005', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores tempora delectus cupiditate', '2023-01-24 01:47:38', NULL),
(2, 'Computer science', '2000 - 2005', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores tempora delectus cupiditate', '2023-01-24 01:50:30', NULL),
(4, 'Computer science', '2008 - 2014', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eveniet incidunt quidem illum repellat, a nemo cumque optio asperiores tempora delectus cupiditate', '2023-01-24 01:56:08', '2023-01-24 01:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripiton` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `descripiton`, `created_at`, `updated_at`) VALUES
(2, 'fa-brands fa-html5', 'Web Branding', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore.', '2023-01-22 21:52:35', '2023-01-22 22:03:45'),
(3, 'fa-brands fa-css3-alt', 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore.', '2023-01-22 22:04:39', NULL),
(6, 'fa-solid fa-camera', 'Photography', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore.', '2023-01-22 22:06:46', NULL),
(7, 'fa-solid fa-bag-shopping', 'User Experience', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore.', '2023-01-22 22:07:48', NULL);

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
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hassan Jibon', 'mjjibon115@gmail.com', NULL, '$2y$10$gVDVjKrvbWB2b5p1fvODru9BSdHDyDtTLiTh1DsHP8sNpe5MZdlqe', 'upload/Profile/mjjibon115@gmail.com.jpg', NULL, '2023-01-27 22:22:44', '2023-01-28 00:14:14'),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$sBBvY30CRrHm4DpB39Rk0udKYk23TnZ4boxCGYAizmj5hA6J/9BBi', 'upload/Profile/admin@admin.com.png', NULL, '2023-01-28 00:26:33', '2023-01-28 00:37:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutshorts`
--
ALTER TABLE `aboutshorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animatedheadlines`
--
ALTER TABLE `animatedheadlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_infos`
--
ALTER TABLE `project_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_icon_unique` (`icon`),
  ADD UNIQUE KEY `services_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aboutshorts`
--
ALTER TABLE `aboutshorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `animatedheadlines`
--
ALTER TABLE `animatedheadlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_infos`
--
ALTER TABLE `project_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
