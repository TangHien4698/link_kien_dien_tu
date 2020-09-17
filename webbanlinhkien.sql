-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2020 lúc 12:24 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanlinhkien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `content`, `date`, `created_at`, `updated_at`) VALUES
(1, 'title 2', 'https://lorempixel.com/480/320/?41121', 'Animi dolore quo ea eaque velit. Quia harum aperiam possimus facilis placeat nostrum. Possimus magni similique quisquam cumque quia enim repellat. Iste perferendis qui veritatis dolorem officiis.', '2020-07-14', '2020-07-27 18:50:28', '2020-07-27 18:50:28'),
(2, 'title 1', 'https://lorempixel.com/480/320/?71345', 'Voluptatem aliquam facere assumenda inventore maxime est qui. Quisquam saepe explicabo eos temporibus velit itaque enim. Unde totam et et quia.', '2020-07-05', '2020-07-27 18:50:28', '2020-07-27 18:50:28'),
(3, 'title 5', 'https://lorempixel.com/480/320/?70256', 'Debitis veniam debitis et est provident. Nobis eos voluptatum sed ad inventore hic. Optio deleniti voluptate omnis voluptates. Quisquam consequuntur iusto harum sequi libero.', '2020-06-29', '2020-07-27 18:50:28', '2020-07-27 18:50:28'),
(4, 'title 6', 'https://lorempixel.com/480/320/?32254', 'Iusto natus nihil officia fuga rerum. Reprehenderit totam sit sunt praesentium ea velit voluptatem. Maiores commodi vel impedit qui id.', '2020-07-03', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(5, 'title 3', 'https://lorempixel.com/480/320/?26477', 'Delectus aperiam eum alias temporibus. Voluptate repellendus omnis dolores ut. Excepturi adipisci quis perspiciatis omnis iure.', '2020-07-13', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(6, 'title 3', 'https://lorempixel.com/480/320/?40139', 'Et id inventore maiores. Veniam aut autem rerum maxime. Eius corrupti voluptatem omnis est et accusantium. Excepturi molestiae quasi laboriosam.', '2020-07-07', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(7, 'title 7', 'https://lorempixel.com/480/320/?58952', 'Quia asperiores vitae officiis consequatur natus nihil ea. Eum cupiditate aliquid rerum incidunt ea repellat totam. Perferendis nesciunt veniam dicta voluptatem quo.', '2020-07-09', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(8, 'title 8', 'https://lorempixel.com/480/320/?20171', 'Doloribus eos rerum quia eos sunt nihil distinctio. Temporibus illo nesciunt mollitia deleniti ut aut non. Nesciunt rerum eveniet vero enim quidem.', '2020-07-14', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(9, 'title 7', 'https://lorempixel.com/480/320/?21912', 'Debitis rerum soluta et. Repellendus est dolor eos consequatur ratione repellendus ratione. Odit accusantium dolorem ex at aut facere quia.', '2020-07-14', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(10, 'title 2', 'https://lorempixel.com/480/320/?69592', 'Aut qui eos aperiam dicta ut accusamus laborum molestiae. Distinctio impedit quis ut voluptatum quaerat minus aut. Nulla quis laborum tempora adipisci sunt voluptatem.', '2020-07-17', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(11, 'title 7', 'https://lorempixel.com/480/320/?25522', 'Aut sit eaque sed laboriosam minima. Cum autem odio exercitationem aspernatur animi. Et hic dolores eaque.', '2020-07-18', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(12, 'title 8', 'https://lorempixel.com/480/320/?52605', 'Pariatur quia quis et ad non. Sit nemo nesciunt fugiat minima non. Nobis ipsa et ea occaecati.', '2020-07-12', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(13, 'title 6', 'https://lorempixel.com/480/320/?63594', 'At corrupti doloremque et delectus. Omnis suscipit et voluptatem. Ut quaerat ut quis.', '2020-07-08', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(14, 'title 5', 'https://lorempixel.com/480/320/?75527', 'Sit doloremque dolor eos eveniet voluptatem illum tenetur. Corporis quo inventore adipisci qui consequatur. Cum asperiores labore aliquid ut velit odit minima.', '2020-07-24', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(15, 'title 2', 'https://lorempixel.com/480/320/?77932', 'Numquam quae provident et velit. Architecto quia doloribus modi sint voluptate distinctio molestias. Sint sint temporibus reiciendis est.', '2020-07-16', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(16, 'title 6', 'https://lorempixel.com/480/320/?58111', 'Nisi voluptatem veniam non debitis architecto quasi rerum. Illum maxime repellat minima reiciendis aut. Reiciendis quaerat aut qui culpa eum perspiciatis.', '2020-07-02', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(17, 'title 1', 'https://lorempixel.com/480/320/?67158', 'Ipsum sed reprehenderit corporis modi. Consequuntur sit autem reiciendis et aut soluta voluptas.', '2020-07-17', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(18, 'title 7', 'https://lorempixel.com/480/320/?64032', 'Quia quia laborum libero voluptatem ut nesciunt aut. Omnis reprehenderit excepturi modi quo est. Earum rerum dolores recusandae error at tempora.', '2020-07-02', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(19, 'title 3', 'https://lorempixel.com/480/320/?45542', 'Repudiandae enim nulla nihil dignissimos perferendis qui. Voluptas pariatur placeat et nobis dolorum id soluta. Odio aspernatur sequi atque commodi illum ex ea.', '2020-07-10', '2020-07-27 18:50:29', '2020-07-27 18:50:29'),
(20, 'title 4', 'https://lorempixel.com/480/320/?65991', 'Culpa incidunt aut beatae. Sint sint in ullam fugiat. Eum ullam facere sint in praesentium aut est reiciendis. Dolorum autem quos quisquam.', '2020-07-17', '2020-07-27 18:50:29', '2020-07-27 18:50:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_rewrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `cat_rewrite`) VALUES
(1, 'Điện trở', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'dien-tro'),
(2, 'arduino', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'arduino'),
(3, 'tụ', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'tu'),
(4, 'dây nối', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'day-noi'),
(5, 'đèn', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'den'),
(6, 'pin', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'pin'),
(7, 'quạt', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'quat'),
(8, 'máy hàn', '2020-07-27 18:51:23', '2020-07-27 18:51:23', 'may-han');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'noi dung comment',
  `number_star` int(11) DEFAULT NULL COMMENT 'star begin from 1 to 5',
  `datetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `user_id`, `product_id`, `content`, `number_star`, `datetime`, `created_at`, `updated_at`) VALUES
(1, 2, 10, 'Qui tempora ab velit quo totam id ullam. Est praesentium vitae et quo unde deleniti sit. Pariatur quisquam quos eligendi vitae. Sunt eaque consequatur et necessitatibus esse ab officiis.', 5, '2020-07-13 06:40:08', '2020-07-27 18:54:14', '2020-07-27 18:54:14'),
(2, 4, 19, 'Ea qui aut debitis eius molestiae eveniet error. Quisquam repudiandae saepe maiores commodi. Sit consequuntur iure ipsa delectus quia asperiores. Magni quis error perferendis minima.', 5, '2020-07-08 18:21:55', '2020-07-27 18:54:14', '2020-07-27 18:54:14'),
(3, 5, 34, 'Ducimus veritatis aperiam non itaque eos unde. Aut aut mollitia placeat. Aspernatur ut dolorem aliquid sed ut. Ut enim deleniti velit voluptatibus debitis ipsa totam consequatur.', 2, '2020-07-05 16:52:15', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(4, 9, 42, 'Perferendis provident ducimus ut facere. Hic nihil reprehenderit illum beatae fugiat unde doloremque laboriosam. Est recusandae vel aliquid tenetur est.', 2, '2020-07-13 11:51:04', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(5, 10, 44, 'Ad ea reiciendis non molestiae repellendus. Ducimus officiis totam rem ut aliquid. Est aperiam ipsum suscipit animi ipsum eius. Quia quia quia accusantium facere molestias blanditiis quia.', 2, '2020-07-26 18:51:31', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(6, 12, 45, 'Dolorem in molestiae nostrum. Dolores quos consequuntur laboriosam quo illo. Id enim distinctio sed aut quia.', 3, '2020-07-21 01:44:44', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(7, 13, 48, 'Est et quia suscipit. Quasi consequatur sit quis quibusdam eum ab adipisci. Ullam harum quos ea mollitia. Iste et eos dolor repellat qui.', 3, '2020-07-26 12:25:52', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(8, 14, 55, 'Temporibus doloremque et id eos veritatis. Dolorum voluptatum est dolor. Doloremque ut suscipit modi est at rem in.', 4, '2020-07-19 13:07:56', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(9, 16, 58, 'Perspiciatis nam eos quidem et quasi. Nihil quo tempora non perferendis et. Et suscipit in ipsam molestiae. Aperiam facere est dolorum nihil. Fugiat totam distinctio rerum excepturi.', 4, '2020-07-23 07:55:43', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(10, 20, 77, 'Vitae aut animi nostrum ut reiciendis tenetur dolores. Accusamus unde omnis minus velit. Reiciendis optio quia nisi sunt ad. Soluta consequuntur dignissimos et porro neque non ipsa.', 2, '2020-07-02 23:11:50', '2020-07-27 18:54:15', '2020-07-27 18:54:15'),
(11, 1, 2, 'test 1', 5, '2020-07-13 06:40:08', '2020-07-12 23:40:08', '2020-07-12 23:40:08'),
(12, 24, 1, 'v', 5, NULL, '2020-07-31 12:50:32', '2020-07-31 12:50:32'),
(13, 24, 1, 't', 4, NULL, '2020-07-31 12:51:06', '2020-07-31 12:51:06'),
(14, 24, 2, 'v', 4, NULL, '2020-07-31 12:51:41', '2020-07-31 12:51:41'),
(15, 24, 2, '1', 5, NULL, '2020-07-31 13:04:08', '2020-07-31 13:04:08'),
(16, 24, 3, 'affffffffff', 5, NULL, '2020-07-31 23:45:05', '2020-07-31 23:45:05'),
(17, 24, 3, 'test', 4, NULL, '2020-08-01 01:14:48', '2020-08-01 01:14:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_08_233507_create_products_table', 1),
(5, '2020_05_08_235104_create_orders_table', 1),
(6, '2020_05_08_235140_create_order_details_table', 1),
(7, '2020_05_09_173142_add_column_to_users_table', 1),
(8, '2020_05_21_152102_create_categories_table', 1),
(9, '2020_05_21_152455_create_feedbacks_table', 1),
(10, '2020_05_21_154444_create_blogs_table', 1),
(11, '2020_05_26_080626_delete_column_table_products', 1),
(12, '2020_07_28_155429_add_column_table_orders', 2),
(14, '2020_07_29_053027_add_column_table_categories', 3),
(16, '2020_07_31_203446_create_cart_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_money` decimal(8,2) DEFAULT NULL,
  `state` int(11) DEFAULT NULL COMMENT '0 = khoi tao; 1 = dang giao, 2 = closed',
  `Verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `total_money`, `state`, `Verification`, `receiver_name`, `receiver_phone_number`, `receiver_address`, `created_at`, `updated_at`) VALUES
(1, '60000.00', 1, 'Qui.', 'Abbigail Kirlin', '+8593861312232', '79776 Salvatore View\nAvastad, NJ 02593', '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(2, '190000.00', 1, 'Mollitia.', 'Kaya Auer', '+6123675856266', '6597 Powlowski Extension Apt. 595\nOdessahaven, MS 22326-4653', '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(3, '170000.00', 0, 'Ut.', 'Prof. Violette Heller II', '+5857997831674', '896 Altenwerth Ford\nWest Lukasfurt, CA 71405-9985', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(4, '120000.00', 1, 'Quia vel.', 'Letha Lindgren', '+9980496218832', '8455 Beer Road Suite 553\nNorth Hiramchester, MN 19288', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(5, '60000.00', 0, 'Officiis.', 'Arielle Krajcik', '+8157378203772', '7948 Melvin Crescent\nSouth Oleshire, WI 22703-9363', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(6, '60000.00', 1, 'Qui rem.', 'Trenton Wolff DVM', '+5854079204722', '99876 Jones Gateway Apt. 318\nRoweville, TX 59215-6332', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(7, '50000.00', 1, 'Pariatur.', 'Adolfo Yundt', '+5986449510319', '59501 Marilyne Streets\nSouth Alyssonport, MA 60437', '2020-07-27 18:54:33', '2020-07-31 03:04:23'),
(8, '70000.00', 0, 'Doloribus.', 'Morton Abshire', '+8988226420570', '2692 Wolff Station Apt. 657\nEmilberg, MI 41568-0383', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(9, '170000.00', 0, 'Qui.', 'Ms. Jolie Murazik V', '+3346383598156', '862 Gibson Burg\nPort Mafaldafort, WV 65332-8876', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(10, '120000.00', 1, 'Eius et.', 'Alessandro Mraz', '+4116230563854', '36983 Nienow Common\nWest Jamar, VA 11878', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(11, '90000.00', 0, 'Tempora.', 'Edwin Hahn', '+5226513839366', '892 Freeda Terrace\nChristianaview, ME 44027', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(12, '70000.00', 1, 'Modi.', 'Prof. Marcia Ortiz DDS', '+8389162801878', '55906 Bogan Glen\nDonfort, MA 75970', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(13, '80000.00', 0, 'Non sit.', 'Dr. Elissa Bailey', '+6857891382249', '2957 Bergnaum Highway\nEast Dudleystad, NH 35894', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(14, '100000.00', 1, 'Aut ullam.', 'Lori Douglas', '+1824370682450', '5897 Keeling Coves\nJoanastad, WV 09286', '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(15, '90000.00', 1, 'Incidunt.', 'Amely Haag', '+6607396554527', '9635 Adams Shoals\nNew Brett, HI 45719', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(16, '180000.00', 0, 'Est.', 'Brisa Bailey', '+7670454071880', '292 Prosacco Course Suite 792\nMantehaven, IN 31267-8419', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(17, '50000.00', 0, 'Ab.', 'Parker Wyman', '+4758601051814', '916 Delpha Crossing Apt. 622\nSouth Sanfordville, VA 50409-7178', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(18, '80000.00', 0, 'Quia quod.', 'Dr. Benjamin Schmitt', '+3425805135675', '11035 Ryan Crossing\nKertzmannchester, UT 81118-1437', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(19, '220000.00', 1, 'Voluptas.', 'Jedediah Bernhard', '+4772187669734', '13761 Harvey Crossroad Apt. 570\nLake Aglae, MO 10805', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(20, '50000.00', 0, 'Maxime ea.', 'Prof. Gaston Swaniawski DVM', '+9292627155720', '356 Selmer Land Apt. 415\nNorth Lavina, ID 78095', '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(26, '280000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 20:22:54', '2020-07-31 20:22:54'),
(27, '40000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 20:25:21', '2020-07-31 20:25:21'),
(29, '50000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 20:36:25', '2020-07-31 20:36:25'),
(30, '160000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 21:01:15', '2020-07-31 21:01:15'),
(32, '380000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 21:18:01', '2020-07-31 21:18:01'),
(36, '300000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 22:45:18', '2020-07-31 22:45:18'),
(38, '40000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 22:50:46', '2020-07-31 22:50:46'),
(40, '40000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 22:52:31', '2020-07-31 22:52:31'),
(42, '40000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 22:56:21', '2020-07-31 22:56:21'),
(44, '40000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-07-31 22:57:42', '2020-07-31 22:57:42'),
(45, '160000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-01 01:16:02', '2020-08-01 01:16:02'),
(46, '10000.00', 0, 'Hc1bEq7ANimaeEztfuISt7VSfdvXIHzIIJR8MqRP', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-01 02:08:11', '2020-08-01 02:08:12'),
(47, '10000.00', 0, 'b9365YhnM4nr8thrfy3OvyMm7JEmCg1rsurRZuay', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-01 08:51:27', '2020-08-01 08:51:28'),
(48, '240000.00', 0, 'HD0QCqgTobPOCBWEwFlfDsPmLOf5fYTixcjQ7KkS', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-03 00:35:20', '2020-08-03 00:35:20'),
(49, '120000.00', 0, 'HD0QCqgTobPOCBWEwFlfDsPmLOf5fYTixcjQ7KkS', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-03 00:52:44', '2020-08-03 00:52:44'),
(51, '40000.00', 0, 'HD0QCqgTobPOCBWEwFlfDsPmLOf5fYTixcjQ7KkS', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-03 01:06:55', '2020-08-03 01:06:55'),
(52, '10000.00', 0, 'HD0QCqgTobPOCBWEwFlfDsPmLOf5fYTixcjQ7KkS', 'user1234', '0326229797', '361 Phố Trương Định', '2020-08-03 02:39:20', '2020-08-03 02:39:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 51, 20000, 1, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(2, 1, 52, 20000, 2, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(3, 1, 63, 20000, 4, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(4, 2, 4, 150000, 1, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(5, 2, 23, 20000, 4, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(6, 2, 78, 20000, 2, '2020-07-27 18:54:32', '2020-07-27 18:54:32'),
(7, 3, 35, 10000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(8, 3, 49, 150000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(9, 3, 53, 10000, 5, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(10, 4, 5, 20000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(11, 4, 17, 50000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(12, 4, 71, 50000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(13, 5, 20, 40000, 3, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(14, 5, 45, 10000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(15, 5, 75, 10000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(16, 6, 47, 20000, 3, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(17, 6, 65, 30000, 5, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(18, 6, 70, 10000, 3, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(19, 7, 16, 20000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(20, 7, 55, 10000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(21, 7, 74, 20000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(22, 8, 13, 40000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(23, 8, 48, 10000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(24, 8, 52, 20000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(25, 9, 1, 10000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(26, 9, 27, 150000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(27, 9, 53, 10000, 3, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(28, 10, 2, 40000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(29, 10, 39, 30000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(30, 10, 58, 50000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(31, 11, 5, 20000, 5, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(32, 11, 16, 20000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(33, 11, 76, 50000, 3, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(34, 12, 42, 20000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(35, 12, 65, 30000, 4, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(36, 12, 74, 20000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(37, 13, 3, 30000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(38, 13, 44, 40000, 1, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(39, 13, 70, 10000, 2, '2020-07-27 18:54:33', '2020-07-27 18:54:33'),
(40, 14, 11, 50000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(41, 14, 56, 40000, 3, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(42, 14, 61, 10000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(43, 15, 14, 20000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(44, 15, 23, 20000, 3, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(45, 15, 76, 50000, 2, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(46, 16, 46, 10000, 3, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(47, 16, 62, 150000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(48, 16, 63, 20000, 3, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(49, 17, 16, 20000, 5, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(50, 17, 41, 20000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(51, 17, 45, 10000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(52, 18, 1, 10000, 4, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(53, 18, 56, 40000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(54, 18, 57, 30000, 5, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(55, 19, 2, 40000, 5, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(56, 19, 6, 150000, 2, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(57, 19, 40, 30000, 1, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(58, 20, 26, 10000, 4, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(59, 20, 48, 10000, 4, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(60, 20, 57, 30000, 2, '2020-07-27 18:54:34', '2020-07-27 18:54:34'),
(65, 26, 2, 40000, 7, '2020-07-31 20:22:54', '2020-07-31 20:22:54'),
(66, 27, 2, 40000, 1, '2020-07-31 20:25:21', '2020-07-31 20:25:21'),
(67, 29, 1, 10000, 1, '2020-07-31 20:36:25', '2020-07-31 20:36:25'),
(68, 29, 2, 40000, 1, '2020-07-31 20:36:25', '2020-07-31 20:36:25'),
(69, 30, 2, 40000, 4, '2020-07-31 21:01:15', '2020-07-31 21:01:15'),
(70, 32, 2, 40000, 5, '2020-07-31 21:18:01', '2020-07-31 21:18:01'),
(71, 32, 3, 30000, 6, '2020-07-31 21:18:01', '2020-07-31 21:18:01'),
(74, 36, 4, 150000, 2, '2020-07-31 22:45:18', '2020-07-31 22:45:18'),
(75, 38, 2, 40000, 1, '2020-07-31 22:50:46', '2020-07-31 22:50:46'),
(76, 40, 2, 40000, 1, '2020-07-31 22:52:31', '2020-07-31 22:52:31'),
(77, 42, 2, 40000, 1, '2020-07-31 22:56:21', '2020-07-31 22:56:21'),
(78, 44, 2, 40000, 1, '2020-07-31 22:57:42', '2020-07-31 22:57:42'),
(79, 45, 2, 40000, 1, '2020-08-01 01:16:02', '2020-08-01 01:16:02'),
(80, 45, 3, 30000, 4, '2020-08-01 01:16:02', '2020-08-01 01:16:02'),
(81, 46, 1, 10000, 1, '2020-08-01 02:08:12', '2020-08-01 02:08:12'),
(82, 47, 1, 10000, 1, '2020-08-01 08:51:27', '2020-08-01 08:51:27'),
(83, 48, 2, 40000, 6, '2020-08-03 00:35:20', '2020-08-03 00:35:20'),
(84, 49, 2, 40000, 3, '2020-08-03 00:52:44', '2020-08-03 00:52:44'),
(85, 51, 2, 40000, 1, '2020-08-03 01:06:55', '2020-08-03 01:06:55'),
(86, 52, 1, 10000, 1, '2020-08-03 02:39:20', '2020-08-03 02:39:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specifications` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'thong so ky thuat',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_price_good` int(255) DEFAULT NULL,
  `pro_rewrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `image`, `description`, `specifications`, `created_at`, `updated_at`, `pro_price_good`, `pro_rewrite`, `amount`) VALUES
(1, 'đèn led', 1, '10000.00', '1.jpg', 'Laboriosam ut qui doloremque minus quis nulla. Adipisci consectetur beatae qui in dolore.', 'Saepe nam necessitatibus odit. Sequi velit sequi odit quam et. Est id distinctio ipsam voluptatem.', '2020-07-27 18:53:31', '2020-07-31 03:03:06', 1, 'den_led-p1.html', NULL),
(2, 'dây nối', 1, '40000.00', '2.jpg', 'Assumenda vitae est eaque explicabo deserunt nulla. Sapiente saepe aut aspernatur sapiente.', 'Non inventore ad sit. Porro sequi ipsa natus quis.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'day_noi-p2.html', NULL),
(3, 'tụ', 1, '30000.00', '3.jpg', 'Explicabo aut nemo at dolores. Et ut aut ad ut adipisci vel dolore.', 'Hic est natus omnis quisquam quia unde. Beatae non sunt nulla at.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'tu-p3.html', NULL),
(4, 'Trở 2', 1, '150000.00', '4.jpg', 'In aut velit sit est eius officia error. Sit unde sit consequatur quis.', 'Reiciendis expedita pariatur consequuntur rem illo culpa. Velit labore cum non iure.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'tro_2-p4.html', NULL),
(5, 'đèn led', 1, '20000.00', '5.jpg', 'At reprehenderit vero reprehenderit quia. Vel et similique ab.', 'Voluptatem praesentium voluptatum earum rerum minus sunt aut. Voluptatem ex aut et illum enim.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'den_led-p5.html', NULL),
(6, 'đèn led', 1, '150000.00', '6.jpg', 'A repellat autem voluptas nulla. Dolorum repellat eligendi illo et. Vel dicta rerum odit provident.', 'Qui aliquam incidunt et pariatur. Officiis similique exercitationem consequuntur doloremque eos.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'den_led-p6.html', NULL),
(7, 'quạt mini', 1, '30000.00', '7.jpg', 'Expedita tempore tenetur sed qui deleniti et nisi. Nesciunt rerum alias dolor incidunt.', 'Eum omnis neque commodi repellat. Tempore officiis error veniam perferendis ipsum reprehenderit.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', 1, 'quat_mini-p7.html', NULL),
(8, 'nhựa thông', 1, '40000.00', '8.jpg', 'Vero consequatur occaecati sed aliquid. Qui dolor architecto ut inventore sit.', 'Velit aut veniam ut. Aut et dolores placeat recusandae asperiores rerum.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'nhua-p8.html', NULL),
(9, 'nhựa thông', 1, '30000.00', '9.jpg', 'Et blanditiis magni quo voluptas. Sed dolores dolores ducimus necessitatibus voluptatem.', 'Incidunt perferendis numquam ex. Cumque nam officia optio autem.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'nhua_thong-p9.html', NULL),
(10, 'quạt mini', 1, '50000.00', '10.jpg', 'Voluptas quas sint harum inventore quo ut. Maxime dolor qui sed.', 'Hic commodi velit at ipsam unde nulla. Temporibus atque voluptatem officia.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'quat_mini-p10.html', NULL),
(11, 'đèn led', 2, '50000.00', '11.jpg', 'Maiores laboriosam officiis neque doloribus quis. Quibusdam expedita impedit ullam praesentium.', 'Harum velit et ad repellendus. Corporis doloremque voluptatibus cupiditate nihil sapiente est.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'den-p11.html', NULL),
(12, 'Trở 2', 2, '20000.00', '12.jpg', 'Eos est quia impedit dolorem in et tempora. Quis est iure possimus consequuntur aut quas.', 'Sed alias aut aut velit. Vitae sit dolorem minima itaque. Blanditiis ut molestiae ullam nihil.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'tro-p12.html', NULL),
(13, 'Trở 2', 2, '40000.00', '13.jpg', 'Sapiente dolorem et porro. In recusandae nulla dolor aliquid soluta.', 'Et totam voluptas praesentium impedit maiores voluptas eius. Libero perferendis aut eum ea fuga.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'tro-p13.html', NULL),
(14, 'đèn led', 2, '20000.00', '14.jpg', 'Adipisci quis et consequatur ad earum. Illum voluptas explicabo aut.', 'Repellendus modi sint aspernatur sed enim architecto. Soluta tenetur quos reiciendis enim fugit.', '2020-07-27 18:53:31', '2020-07-27 18:53:31', NULL, 'den-p14.html', NULL),
(15, 'arduino', 2, '10000.00', '15.jpg', 'Et esse alias ut rerum et et. Voluptas dolore est totam voluptate eos et nostrum et.', 'Eius pariatur tempore doloribus sed et. Nemo voluptatibus ipsum quae sequi natus.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'ad-p15.html', NULL),
(16, 'máy hàn', 2, '20000.00', '16.jpg', 'Ex tenetur molestiae ipsa. Et eligendi totam quo earum. Fuga culpa quis rerum placeat non.', 'Non porro perferendis optio ut. Assumenda ut impedit a non. Et ut dolores dolores quis rerum rem.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'may_han-p16.html', NULL),
(17, 'arduino', 2, '50000.00', '17.jpg', 'Consequatur sunt perspiciatis laborum libero culpa porro incidunt. Quia a ut pariatur omnis.', 'Mollitia fugit praesentium blanditiis voluptatem. Itaque voluptatem atque et tenetur placeat.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'B-p17.html', NULL),
(18, 'quạt mini', 2, '40000.00', '18.jpg', 'Temporibus qui et eos impedit qui. Esse placeat impedit enim optio.', 'Praesentium harum cupiditate ipsam. Autem ut cupiditate ipsum commodi fugiat.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'c-p18.html', NULL),
(19, 'Trở 2', 2, '10000.00', '19.jpg', 'Ut sint ad tenetur et. Nobis dolorem amet quia tempore iure. Eum provident nemo non eius.', 'Eos quibusdam officiis sunt. Magni fugiat nihil est totam enim debitis. Et sequi sed veniam est.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'd-p19.html', NULL),
(20, 'dây nối', 2, '40000.00', '20.jpg', 'Consequatur porro nulla labore. Quaerat voluptate aperiam asperiores ea iste.', 'Incidunt quia molestiae voluptas sint odit perferendis eum. Distinctio eum facere facilis optio.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'e-p20.html', NULL),
(21, 'thiếc', 3, '30000.00', '21.jpg', 'Dolore omnis ducimus sunt facilis. Aperiam ab ut molestiae asperiores est laboriosam.', 'Molestiae delectus quia maxime accusantium. Labore dicta culpa repellendus.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'f-p21.html', NULL),
(22, 'pin', 3, '10000.00', '22.jpg', 'Fugit ut cum est et et totam. Accusantium unde commodi vero necessitatibus.', 'Voluptate reprehenderit temporibus eveniet. Distinctio eligendi magni porro quas neque.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'g-p22.html', NULL),
(23, 'Trở 1', 3, '20000.00', '23.jpg', 'Nisi qui reprehenderit et velit et qui. Velit doloremque quaerat deserunt aut illo omnis suscipit.', 'Alias rerum dolor id velit. Libero quis aut nihil aut. Cumque nulla magni molestiae voluptatem.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'h-p23.html', NULL),
(24, 'máy hàn', 3, '10000.00', '24.jpg', 'Rerum voluptas ut ut tempora corporis nemo. Non sed labore aut eveniet.', 'Et ut nihil rem mollitia illo. Sit autem magni perspiciatis ipsa eveniet aut.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'may_han-p24.html', NULL),
(25, 'máy hàn', 3, '30000.00', '25.jpg', 'Sed eligendi quis provident sunt. Esse ratione pariatur architecto quisquam quasi sed.', 'Qui itaque et id rerum. Sit sed et et cum quae totam. Quam libero fugit iste.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, 'k-p25.html', NULL),
(26, 'dây nối', 3, '10000.00', 'https://lorempixel.com/480/320/?53721', 'Omnis tempore alias suscipit eos ex. Corporis et autem doloremque aperiam. Neque quis odio nobis.', 'Ipsum consequatur a vel. Odit quibusdam praesentium ex et. Cupiditate ut et labore qui totam.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(27, 'Trở 2', 3, '150000.00', 'https://lorempixel.com/480/320/?10907', 'Eos tenetur nihil omnis eaque dolores et. Nam rerum provident odit rerum temporibus ut vel esse.', 'Aut assumenda natus est et animi eaque. Non at blanditiis odit nemo eos qui.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(28, 'Trở 2', 3, '30000.00', 'https://lorempixel.com/480/320/?96146', 'Distinctio et provident assumenda tempora quos. Quis non est qui vel. In est quia ratione.', 'Omnis consequatur commodi corporis est error. Provident deserunt dolorum occaecati.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(29, 'máy hàn', 3, '40000.00', 'https://lorempixel.com/480/320/?91296', 'Blanditiis quos quae ad quam totam. Voluptatem ut iste sapiente dolores.', 'Beatae molestiae ipsam et pariatur. Sed est voluptas et est. Odio molestias sit tempora ut sint.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(30, 'pin', 3, '40000.00', 'https://lorempixel.com/480/320/?76915', 'Porro quaerat qui autem aperiam. Ducimus nisi sit dolor culpa molestiae.', 'Repudiandae atque in quo aspernatur ea quaerat alias. Dolores autem ipsam nobis aliquid minima.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(31, 'arduino', 4, '20000.00', 'https://lorempixel.com/480/320/?47719', 'Aut soluta amet placeat. Est eum quibusdam ut.', 'Quis et necessitatibus enim vel beatae molestias. Qui voluptatem sit eos architecto.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(32, 'dây nối', 4, '50000.00', 'https://lorempixel.com/480/320/?80461', 'Sapiente voluptas et praesentium. Necessitatibus aut dolor dolorem. Temporibus in et neque soluta.', 'Velit earum dolor voluptas ea modi voluptatum tempore. Eligendi id eos et distinctio.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(33, 'tụ', 4, '40000.00', 'https://lorempixel.com/480/320/?77312', 'Porro dolorum aliquid unde. Incidunt minima nihil ut qui. Porro omnis et et sapiente accusamus.', 'Neque error unde excepturi. Earum sed a autem eos.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(34, 'dây nối', 4, '30000.00', 'https://lorempixel.com/480/320/?56151', 'In voluptatum ut voluptas. Reiciendis ipsum hic dolorem ratione temporibus et dolor.', 'Fugit dolorem blanditiis officiis magnam velit. Et aut minima adipisci totam labore.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(35, 'nhựa thông', 4, '10000.00', 'https://lorempixel.com/480/320/?79764', 'Possimus voluptatibus consequatur aut et sunt mollitia ut. Hic vel iure odit porro ut eaque.', 'Ea est beatae voluptas nihil enim. Ullam consequuntur dolorem distinctio et.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(36, 'quạt mini', 4, '30000.00', 'https://lorempixel.com/480/320/?50173', 'Est nesciunt saepe ut. Veritatis nam occaecati aliquam voluptates dolore.', 'Deleniti eos repellat vel incidunt. Nemo sed tempore qui molestiae et qui velit similique.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(37, 'máy hàn', 4, '40000.00', 'https://lorempixel.com/480/320/?56890', 'Ipsa repellendus aut repellendus. Et ipsum enim voluptas repellendus. Quis rerum soluta et.', 'Eos quia ad perspiciatis ducimus voluptatum. Voluptas explicabo et minima error provident.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(38, 'dây nối', 4, '50000.00', 'https://lorempixel.com/480/320/?87065', 'Et atque eum nisi quasi magni. Delectus adipisci rerum necessitatibus totam rem. A et est fugit.', 'Commodi sit rem enim consequatur. Inventore adipisci voluptas voluptatum ut.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(39, 'đèn led', 4, '30000.00', 'https://lorempixel.com/480/320/?85413', 'Ut dolor nisi sit nisi. Et quia similique dolorem et voluptatem sequi.', 'Aut tenetur fugit ullam. Sit iste deleniti impedit adipisci unde aperiam aut.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(40, 'Trở 2', 4, '30000.00', 'https://lorempixel.com/480/320/?13367', 'Quod voluptates sunt maiores. Quae autem quibusdam et magni laborum at. Et ut ipsum et dolores.', 'Iste quis et aut eum doloremque necessitatibus. Magnam quasi adipisci ut dignissimos totam sit.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(41, 'quạt mini', 5, '20000.00', 'https://lorempixel.com/480/320/?35061', 'Cum et non quod autem. Nesciunt tempora quod totam non et qui sunt ut.', 'Atque nam quia et delectus ut error. Itaque voluptas dolores officiis.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(42, 'máy hàn', 5, '20000.00', 'https://lorempixel.com/480/320/?89564', 'Molestiae corrupti sit dolor. Odit dolor modi ipsa tempore non dolor.', 'Ut ab vitae illo magnam. Dolorem veritatis deleniti ut quos.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(43, 'Trở 2', 5, '30000.00', 'https://lorempixel.com/480/320/?44858', 'Commodi vero ad est recusandae ut qui natus. Eius beatae cum est nam earum et perspiciatis.', 'Et quos dolores molestiae at ut sint. Enim nisi est in. Porro atque rerum animi.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(44, 'máy hàn', 5, '40000.00', 'https://lorempixel.com/480/320/?38195', 'Est libero reiciendis autem sit autem nesciunt aut. Asperiores veritatis quia placeat explicabo.', 'Quis cumque porro consequuntur quod nobis. Veritatis non optio ut sint omnis.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(45, 'Trở 1', 5, '10000.00', 'https://lorempixel.com/480/320/?98218', 'Porro voluptatibus est omnis. Qui inventore qui quam eaque atque repellat nam.', 'Velit sit doloribus quis consequatur ipsa. Ipsa facere dolorem eveniet doloremque.', '2020-07-27 18:53:32', '2020-07-27 18:53:32', NULL, NULL, NULL),
(46, 'máy hàn', 5, '10000.00', 'https://lorempixel.com/480/320/?68846', 'Dolores odio voluptas dolorem facere. Animi deserunt deleniti voluptate aliquid.', 'Aut qui harum officiis. Placeat vel et tempora ut. Voluptatem voluptatum perferendis ea.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(47, 'thiếc', 5, '20000.00', 'https://lorempixel.com/480/320/?74751', 'Et rerum sit minima odio. Nihil ad placeat est est. Officia eos culpa quia voluptas eligendi.', 'Aliquam eum corporis nihil ullam. Velit nobis mollitia et tempore doloribus.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(48, 'máy hàn', 5, '10000.00', 'https://lorempixel.com/480/320/?49575', 'Aspernatur maiores nam aperiam. Et et amet illo id natus voluptas quis. At consequatur ducimus ut.', 'Eligendi quia nemo excepturi voluptatem delectus qui. Reiciendis corrupti facere et quo eos alias.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(49, 'đèn led', 5, '150000.00', 'https://lorempixel.com/480/320/?15262', 'Molestiae ut quis qui aperiam. Vitae doloremque ut aut culpa sed quod.', 'Sed asperiores adipisci nesciunt dolores fugiat. Aut non odit totam dignissimos dolores aut.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(50, 'dây nối', 5, '30000.00', 'https://lorempixel.com/480/320/?49340', 'Soluta ipsum quis nihil non hic. Laborum incidunt consectetur quo soluta.', 'Facilis nemo placeat illo corporis saepe voluptas. Amet impedit magnam ipsum exercitationem et.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(51, 'Trở 2', 6, '20000.00', 'https://lorempixel.com/480/320/?42018', 'Ipsa fuga molestias quis. Commodi sed autem nisi. Suscipit rerum sed voluptas.', 'Adipisci amet pariatur saepe ducimus vero. Et enim tenetur laudantium ea.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(52, 'đèn led', 6, '20000.00', 'https://lorempixel.com/480/320/?54346', 'Porro iste rerum aut. Officia et ut corporis dolor odio nobis. Magni et enim eos accusamus.', 'Quam voluptatem deserunt dolorum ipsum a quasi. Quis provident dolorum aut quos.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(53, 'quạt mini', 6, '10000.00', 'https://lorempixel.com/480/320/?57132', 'Numquam amet perferendis aut dolor. Delectus incidunt eos officia dolore ducimus et.', 'Facilis molestias dicta doloremque. Ad eius libero in praesentium nesciunt rerum.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(54, 'Trở 1', 6, '20000.00', 'https://lorempixel.com/480/320/?73509', 'Cumque molestiae amet et soluta qui quis. Pariatur sit ea asperiores aliquid beatae praesentium.', 'Molestias non qui iste vitae similique suscipit. Molestias sit ab laborum est aut repellendus est.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(55, 'quạt mini', 6, '10000.00', 'https://lorempixel.com/480/320/?27559', 'Est voluptatibus illo et sit autem. Modi officiis voluptates molestiae neque et veritatis.', 'Commodi quibusdam ea asperiores. Quos voluptates eligendi ea doloremque rerum.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(56, 'tụ', 6, '40000.00', 'https://lorempixel.com/480/320/?41326', 'Numquam labore quo cumque. Rerum placeat sit culpa similique enim.', 'Aspernatur quo praesentium aperiam omnis aut. Est ratione qui cupiditate aut.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(57, 'Trở 2', 6, '30000.00', 'https://lorempixel.com/480/320/?53770', 'Nisi ullam ut voluptas debitis ab. Quam facilis sit qui eos.', 'Facilis dolores et ut voluptates quaerat aut ipsam est. Nemo eos deserunt accusantium molestiae.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(58, 'máy hàn', 6, '50000.00', 'https://lorempixel.com/480/320/?83340', 'Est nihil eius eum. Maiores voluptas ut quasi praesentium qui. Rerum dolore minima vel mollitia.', 'Unde quae laboriosam sunt non eos modi unde. Voluptates id quas vel eius minus et.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'may_han-p58.html', NULL),
(59, 'Trở 1', 6, '50000.00', 'https://lorempixel.com/480/320/?57621', 'Optio vero officia corrupti et hic. Consequatur tenetur nostrum sit similique pariatur quia.', 'Est autem laboriosam expedita nemo. Qui optio iure quod est ut. Nisi deserunt commodi in et.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(60, 'pin', 6, '20000.00', 'https://lorempixel.com/480/320/?70421', 'Ipsam non cumque et. Odit est et perspiciatis. Modi quis unde sed magnam ut et consequatur.', 'Voluptatem suscipit aut debitis occaecati corrupti consectetur. Ea illo facilis blanditiis dolorum.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(61, 'dây nối', 7, '10000.00', 'https://lorempixel.com/480/320/?87998', 'Et voluptatum ea earum. Repellat assumenda et velit esse. Quaerat rem iure delectus iste.', 'Voluptatum sint eum adipisci veritatis. Provident cum quia ratione qui quisquam.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(62, 'nhựa thông', 7, '150000.00', 'https://lorempixel.com/480/320/?83626', 'Atque blanditiis enim neque hic vero. Aut sequi non voluptatem nobis quam.', 'Optio ea nostrum aut dolor esse ipsum. Alias repellendus odio esse ex pariatur aliquid qui.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(63, 'quạt mini', 7, '20000.00', 'https://lorempixel.com/480/320/?74491', 'Doloribus ducimus vel aut consequatur. Ut tenetur culpa adipisci quibusdam voluptas beatae.', 'Nihil quia dignissimos eos ullam sit quia dolorem magni. Non qui quis iste unde unde voluptatum.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(64, 'quạt mini', 7, '20000.00', 'https://lorempixel.com/480/320/?60912', 'Quis et non et nemo ad odit. Odit quas optio aut.', 'Sint qui dolore adipisci ab porro at. Consequatur sit sed architecto qui temporibus enim nulla.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(65, 'Trở 2', 7, '30000.00', 'https://lorempixel.com/480/320/?86094', 'Perspiciatis natus id error amet nobis. Quo iure aut quidem.', 'Error et voluptatem nam. Consequatur reiciendis voluptatem dolor numquam aut ratione.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(66, 'pin', 7, '20000.00', 'https://lorempixel.com/480/320/?92341', 'Ea porro quidem officia qui mollitia nostrum est. Iusto dolores aliquid laudantium praesentium.', 'Ducimus placeat nisi est. Adipisci quidem rem quaerat repellendus rerum enim ut.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(67, 'máy hàn', 7, '150000.00', 'https://lorempixel.com/480/320/?66454', 'Provident sunt dolor quisquam voluptas velit ut omnis. Illum ea sint a rem nobis consequatur.', 'Debitis natus exercitationem provident enim ut. Sint nesciunt delectus voluptas qui.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(68, 'Trở 1', 7, '30000.00', 'https://lorempixel.com/480/320/?83855', 'Veritatis nostrum vel in saepe ut eius similique. Eum est fuga unde voluptas assumenda magnam qui.', 'Natus fugit quis quidem similique eligendi. Vitae optio rerum velit.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(69, 'quạt mini', 7, '20000.00', 'https://lorempixel.com/480/320/?16017', 'Non esse ipsam et non. Corporis ut eius debitis velit velit ullam.', 'Et voluptatem amet recusandae laboriosam. Molestias nihil id est. Sit illum qui aut.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(70, 'quạt mini', 7, '10000.00', 'https://lorempixel.com/480/320/?75954', 'Sint odio quidem consequatur sunt. Ipsum neque rem totam. Voluptatum ea nihil nobis molestias.', 'Dolor explicabo ut asperiores pariatur est beatae. Ut rem impedit voluptates corrupti veritatis.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(71, 'arduino', 8, '50000.00', 'https://lorempixel.com/480/320/?28874', 'Unde voluptatem nemo in nam. Id veniam itaque itaque nulla expedita aliquam.', 'Et et qui hic autem sapiente minima. Soluta assumenda earum voluptatem nihil sed facere dicta nemo.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(72, 'arduino', 8, '150000.00', 'https://lorempixel.com/480/320/?38226', 'Vel soluta veritatis blanditiis minima facere. Eveniet consequatur quaerat fugit ut et.', 'Ut et vel voluptatem eum nisi. Nam perferendis id repellendus et amet fuga voluptas.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(73, 'dây nối', 8, '50000.00', 'https://lorempixel.com/480/320/?76115', 'Consequatur fuga autem aperiam aut. Laboriosam quia in et nostrum adipisci.', 'Enim ipsa et at molestiae sed architecto ducimus minima. Ut dolorem sint beatae tenetur.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(74, 'thiếc', 8, '20000.00', 'https://lorempixel.com/480/320/?92065', 'Incidunt est fuga est nam. Est consequatur voluptatem aperiam nemo.', 'Ab praesentium quasi veritatis ex. Et facilis totam dolorum earum. Similique aut qui et.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(75, 'thiếc', 8, '10000.00', 'https://lorempixel.com/480/320/?84856', 'Eius similique quidem at ut. Sed vel deleniti quae quis neque eos. Sed qui nisi magnam adipisci.', 'Odit reprehenderit minus id. Occaecati voluptates inventore reiciendis.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, NULL, NULL),
(76, 'máy hàn', 8, '50000.00', 'https://lorempixel.com/480/320/?12464', 'Ea repellendus occaecati laudantium rerum nihil deleniti. Sed optio saepe corrupti possimus.', 'Enim natus in similique ullam. Nam mollitia ea accusantium reprehenderit aut voluptatum velit.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'may_han-p76.html', NULL),
(77, 'Trở 2', 8, '20000.00', 'https://lorempixel.com/480/320/?48521', 'Delectus quod rerum culpa. Veniam quasi facere dicta aut qui eum consequuntur.', 'Quaerat eos rem placeat sunt. Omnis illo aliquid ea odit molestiae voluptatem.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'tro_2-p77.html', NULL),
(78, 'Trở 1', 8, '20000.00', 'https://lorempixel.com/480/320/?78625', 'Voluptates dolore minima eveniet dolor. Quibusdam exercitationem cum velit perferendis.', 'Est quis maxime dolor tempore. Voluptatem iure ullam rerum aut.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'tro_1-p78.html', NULL),
(79, 'pin', 8, '40000.00', 'https://lorempixel.com/480/320/?72046', 'Quia nam explicabo nisi similique officia repellendus dolor. Sint quis impedit eum aut.', 'Tempore eum occaecati pariatur voluptatem. Aut aut tempora porro distinctio officia deleniti.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'pin-p79.html', NULL),
(80, 'dây nối', 8, '40000.00', 'https://lorempixel.com/480/320/?48293', 'Eaque id dignissimos quia et omnis qui ut eos. Sed sint nam voluptate velit.', 'Harum quam eius id sed qui nihil. Doloremque dolore explicabo cupiditate qui voluptas tenetur.', '2020-07-27 18:53:33', '2020-07-27 18:53:33', NULL, 'day_noi-p80.html', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1: kh; 10 admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `phone_number`, `address`, `role`) VALUES
(1, 'Dr. Reuben Renner MD', 'admin@gmail.com', '2020-07-27 18:53:03', '$2y$10$aD2dXhIEF2CW.Z4vgkUd3Or6RYpwyRbXtasesIps/myxhySw.kQs2', 'uJ0kNZO51whua3hNBAk0z4gV0kOVvODaZGHDQBijD50m5dgcEwqTKlf6Pvau', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'admin', '+3564789735100', '50677 Gorczany Rapids\nWest Adela, AL 66518-0859', 10),
(2, 'Amani Feest', 'bheaney@example.com', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'ovsii6ezY6', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'creola49', '+4246694849584', '670 Abigayle Trace Suite 524\nSouth Genesis, CT 15062-0973', 1),
(3, 'Darron Howe', 'dock.reichert@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'HhCC0GNQsb', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'micah61', '+7469778728349', '4064 Jakubowski Passage Apt. 839\nSouth Aidamouth, RI 73980', 1),
(4, 'Mrs. Marcella Beer', 'yost.asia@example.com', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'PbLnspXB8W', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'gerlach.murphy', '+9941857870060', '798 Champlin Orchard Apt. 837\nNikolausville, VA 09787-9424', 1),
(5, 'Mr. Steve Kerluke DDS', 'showell@example.com', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'Nvm4ug7plK', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'laverne.marquardt', '+9189733271089', '9349 Alex Run Suite 911\nEast Kieraberg, KY 83106-1520', 1),
(6, 'Solon Nikolaus IV', 'irath@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'KmZYnxuP1H', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'hortense.gleichner', '+3510653954918', '91565 Bernadine Viaduct\nPort Theaview, MN 74958-0937', 1),
(7, 'Mr. Arlo Weber III', 'kris.adalberto@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'pAtLsDjkAo', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'nina.durgan', '+7445727631999', '9309 Mckenna Coves\nJudyberg, ND 22825-4986', 1),
(8, 'Dr. Krista Boyer', 'hammes.everett@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'XUH40BqzVT', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'maxime.sporer', '+1929010353947', '24248 Wehner Drive Suite 445\nAdamchester, MS 06150', 1),
(9, 'Germaine Cole', 'tatum03@example.org', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'hnZBLgxSQL', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'bridgette.grady', '+1737755303936', '5750 Torphy Ramp\nRandallchester, KS 71372-6263', 1),
(10, 'Sydnee Hintz', 'okirlin@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'LISDaQK1Zz', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'pcollier', '+7209048036869', '10123 Greenfelder Brook Suite 310\nKamrynchester, IA 01468', 1),
(11, 'Dr. Daron Littel III', 'jerde.kavon@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', '0q3N47659l', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'schiller.glennie', '+3362522495373', '76493 Ritchie Harbor\nMitchellmouth, MA 64732', 1),
(12, 'Dallas Spinka', 'una.adams@example.com', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'qQWha14I4d', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'sydney.cremin', '+9572963774775', '407 Schroeder Falls Apt. 370\nVandervorttown, LA 73468-5717', 1),
(13, 'Ruthie Hilpert', 'oolson@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'xfvn2Azvfm', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'orval.oberbrunner', '+2371281978954', '719 Osinski Curve\nNew Corineland, HI 52609', 1),
(14, 'Jannie VonRueden', 'jayne50@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'EbwvOZxM6y', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'casey81', '+1996338500958', '83148 Macey Lodge Suite 182\nNorth Rosamondville, NH 21985-1010', 1),
(15, 'Mr. Greg Toy Sr.', 'jaleel.rogahn@example.com', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'uRFu8YDns5', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'vvon', '+2654734114612', '5639 Bartell Vista\nMarionhaven, AK 28366', 1),
(16, 'Daniela Gleichner', 'xhickle@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'c1eL5efXfD', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'estevan97', '+9510215537001', '67349 Ressie Tunnel\nPort Jewellview, CO 12061-8489', 1),
(17, 'Miss Allie Welch', 'dewitt.hauck@example.org', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', '6DOX0DYJZZ', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'pouros.kristina', '+7886855979035', '6743 O\'Conner Locks Suite 506\nNew Fay, WA 97488', 1),
(18, 'Shane Von', 'bridgette79@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'ocYOM4HJVi', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'murray.schoen', '+8818590633022', '799 Bartoletti Haven Apt. 494\nSouth Tamiamouth, AZ 45005', 1),
(19, 'Gage Rowe', 'kristopher.mcglynn@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'ZbhwFdCf4n', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'hbartell', '+3148775903481', '81637 Block Crescent Apt. 183\nKutchborough, OR 57624-1520', 1),
(20, 'Kareem Harris', 'donavon97@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'gDiQFksDzy', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'naomie.balistreri', '+6795269400333', '8484 Pollich Circles\nWest Neoma, LA 53908-8656', 1),
(21, 'Terry Reinger', 'dgusikowski@example.net', '2020-07-27 18:53:03', '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', 'nZuReWsLKU', '2020-07-27 18:53:03', '2020-07-27 18:53:03', 'adriel31', '+9178862518535', '3546 Eula Harbors\nNew Zacharyburgh, SD 33424', 1),
(22, 'tanghien', '12@gmail.com', NULL, '$2y$10$zAGY6Gn7q6KiWIox4tniV.1RRPWnt58PIkXRJ02MSdgAsE3yZ3VpG', NULL, '2020-07-31 04:29:54', '2020-07-31 04:29:54', NULL, NULL, NULL, 1),
(23, 'user123', '123@gmail.com', NULL, '$2y$10$E6u.QoneNVkRYTGsNUTLIOKeQ0no.NGxJnwKT2uHUzGw.BvDCwfFC', NULL, '2020-07-31 04:34:33', '2020-07-31 04:34:33', 'user123', '0326229797', '361 Phố Trương Định', 1),
(24, 'user1234', '124@gmail.com', NULL, '$2y$10$TCxiERr6LyLuHKzB.JOT5.xLKKTGWit3svQk/jlTEMItYC2AyEhAK', NULL, '2020-07-31 04:38:52', '2020-07-31 04:38:52', 'user1234', '0326229797', '361 Phố Trương Định', 1),
(25, 'Tang Hien', 'ffffff12@gmail.com', NULL, '$2y$10$NJ/lzvxKOghrAqolEpTi7OLmvJalFt.IFtIxgH570lRiCdHTa/FRa', NULL, '2020-07-31 23:46:52', '2020-07-31 23:46:52', 'user1234rrr', '0326229797', '361 Phố Trương Định', 1),
(26, 'Tăng Văn A', '12aaaaaaaaaaa@gmail.com', NULL, '$2y$10$UsbtyV/.S/rpOaj8wEzJhenzyXtR/E2824HgjVCAnGA97vUMyxYv6', NULL, '2020-08-01 08:31:56', '2020-08-01 08:31:56', 'user123456789', '0326229797', '123 Phố Trương Định', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
