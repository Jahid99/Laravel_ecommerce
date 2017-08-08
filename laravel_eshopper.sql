-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 05:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ACNE', 'acne', NULL, NULL),
(2, 'GRUNE ERDE', 'grune-erde', NULL, NULL),
(3, 'ALBIRO', 'albiro', NULL, NULL),
(4, 'RONHILL', 'ronhill', NULL, NULL),
(5, 'ODDMOLLY', 'oddmolly', NULL, NULL),
(6, 'BOUDESTIJN', 'boudestijn', NULL, NULL),
(7, 'ROSCH CREATIVE CULTURE', 'rosch-creative-culture', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dfgfg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `dfgfg`) VALUES
(1, 'SPORTSWEAR', 'sportsware', NULL, NULL, ''),
(2, 'MENS', 'mens', NULL, NULL, ''),
(3, 'WOMENS', 'womens', NULL, NULL, ''),
(4, 'KIDS', 'kids', NULL, NULL, ''),
(6, 'HOUSEHOLDS', 'households', NULL, NULL, ''),
(8, 'CLOTHING', 'clothing', NULL, NULL, ''),
(9, 'BAGS', 'bags', NULL, NULL, ''),
(10, 'SHOES', 'shoes', NULL, NULL, ''),
(11, 'POLO SHIRT', 'polo-shirt', NULL, NULL, ''),
(12, 'T-SHIRT', 't-shirts', NULL, NULL, ''),
(13, 'BLAZERS', 'blazers', NULL, NULL, ''),
(14, 'SUNGLASS', 'sunglass', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `mobile_phone` int(11) NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_to_bill_address` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_total_price` int(11) NOT NULL,
  `exo_tax` int(11) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `total_charge` int(11) NOT NULL,
  `payment_method` enum('pay_on_delivery','online') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `details`, `company_name`, `email`, `title`, `first_name`, `middle_name`, `last_name`, `address_1`, `address_2`, `zip_code`, `country`, `state`, `phone`, `mobile_phone`, `fax`, `notes`, `shipping_to_bill_address`, `cart_total_price`, `exo_tax`, `shipping_cost`, `total_charge`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, '[{\"ID\":\"clothing 4\",\"Sku\":5134124,\"Name\":\"clothing 4\",\"Description\":\"clothing black edition\",\"Image\":\"clothing4.jpg\",\"Quantity\":13,\"Price\":244,\"Barcode\":111011011,\"Available_quantity\":773},{\"ID\":\"t-shirt 4\",\"Sku\":8571294,\"Name\":\"t-shirt 4\",\"Description\":\"t-shirt white edition\",\"Image\":\"t-shirt4.jpg\",\"Quantity\":2,\"Price\":53,\"Barcode\":1101111101,\"Available_quantity\":38},{\"ID\":\"Nike Shoe 2\",\"Sku\":1212312376,\"Name\":\"Nike Shoe 2\",\"Description\":\"Nike Black Edition\",\"Image\":\"nike2.jpg\",\"Quantity\":4,\"Price\":212,\"Barcode\":1000000101,\"Available_quantity\":24,\"Qty\":{\"0\":{},\"1\":{},\"qty\":{}}},{\"ID\":\"Adidas 1\",\"Sku\":1241224,\"Name\":\"Adidas 1\",\"Description\":\"Adidas White Edition Shoes\",\"Image\":\"adidas1.jpg\",\"Quantity\":1,\"Price\":321,\"Barcode\":111110011,\"Available_quantity\":12,\"Qty\":{\"0\":{},\"1\":{},\"qty\":{}}}]', 'asdfa', 'dfgsf@fzdg', 'asf', 'sadf', 'asdf', 'dfs', 'sdf', 'sdf', '23', 'India', 'UK', 23323, 23323, '3333333333', 'sdfa', 'yes', 4447, 2, 0, 61, 'online', 'pending', '2017-07-27 10:42:04', '2017-07-27 10:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdfasf', 'asdfs@sadsag', 235, 'dgadga', '2017-08-01 09:38:52', '2017-08-01 09:38:52'),
(2, 'asfas', 'sadfas@fsdgaa', 325235, 'asdagag', '2017-08-01 09:42:23', '2017-08-01 09:42:23'),
(3, 'asf', 'adfas@safasdg', 24234, 'asdfasf', '2017-08-01 09:43:19', '2017-08-01 09:43:19'),
(4, 'Jahidul Haque', 'jahidulpathan@gmail.com', 1829601099, 'Very Good Site', '2017-08-01 09:44:18', '2017-08-01 09:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `feature_items`
--

CREATE TABLE `feature_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_items`
--

INSERT INTO `feature_items` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 29, NULL, NULL),
(2, 50, NULL, NULL),
(3, 45, NULL, NULL),
(4, 57, NULL, NULL),
(5, 116, NULL, NULL),
(6, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `header_sliders`
--

CREATE TABLE `header_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_sliders`
--

INSERT INTO `header_sliders` (`id`, `title_1`, `title_2`, `description`, `button_text`, `image_1`, `image_1_alt`, `image_2`, `image_2_alt`, `created_at`, `updated_at`) VALUES
(1, '<span>E</span>-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Get it now', 'images/home/girl1.jpg', 'girl1', 'images/home/pricing1.png', 'pricing1', NULL, NULL),
(2, '<span>E</span>-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Get it now', 'images/home/girl2.jpg', 'girl2', 'images/home/pricing2.png', 'pricing2', NULL, NULL),
(3, '<span>E</span>-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Get it now', 'images/home/girl3.jpg', 'girl3', 'images/home/pricing3.png', 'pricing3', NULL, NULL);

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
(3, '2017_06_22_175323_create_categories_table', 1),
(4, '2017_06_22_180248_create_subcategories_table', 1),
(9, '2017_06_22_192341_create_product_periods_table', 2),
(10, '2017_06_22_192422_create_brands_table', 2),
(12, '2017_06_24_192505_create_products_table', 3),
(13, '2017_07_07_172310_create_feature_items_table', 4),
(14, '2017_07_07_172403_create_recommended_items_table', 4),
(17, '2017_07_11_162831_create_header_sliders_table', 5),
(18, '2017_07_12_072650_create_tabpanes_table', 6),
(19, '2017_07_12_113604_drop_categories', 7),
(20, '2017_07_12_114158_alter_category_slug_type', 8),
(22, '2017_07_12_120419_create_tabpane_table', 9),
(27, '2017_07_12_150353_create_tabpanes_table', 10),
(28, '2017_07_12_155737_alter_categories_name_column_type', 11),
(29, '2017_07_12_160817_alter_categories_slug_column_type', 11),
(30, '2017_07_12_161522_create_tabpanes_table', 12),
(31, '2017_07_18_094718_create_user_reviews_table', 13),
(38, '2017_07_20_200642_create_carts_table', 14),
(39, '2017_07_24_155815_create_checkouts_table', 14),
(40, '2017_08_01_151547_create_contacts_table', 15);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `period_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `category_id`, `subcategory_id`, `brand_id`, `period_id`, `name`, `description`, `image`, `quantity`, `slug`, `price`, `barcode`, `created_at`, `updated_at`) VALUES
(14, 1212312376, 1, 1, 1, 1, 'Nike Shoe 2', 'Nike Black Edition', 'nike2.jpg', 24, 'nike-2', 212, 1000000101, NULL, NULL),
(15, 1212312312, 1, 1, 1, 1, 'Nike Shoe 3', 'Nike Black Edition', 'nike3.jpg', 11, 'nike-3', 242, 1000000111, NULL, NULL),
(16, 1212312314, 1, 1, 1, 2, 'Nike Shoe 4', 'Nike Black Edition', 'nike4.jpg', 13, 'nike-4', 222, 1000001101, NULL, NULL),
(17, 1212312378, 1, 1, 1, 3, 'Nike Shoe 5', 'Nike Black Edition', 'nike5.jpg', 16, 'nike-5', 122, 1000100101, NULL, NULL),
(18, 1212312366, 1, 1, 1, 2, 'Nike Shoe 6', 'Nike Black Edition', 'nike6.jpg', 12, 'nike-6', 211, 1001100101, NULL, NULL),
(19, 1212312476, 1, 1, 1, 1, 'Nike Shoe 7', 'Nike Black Edition', 'nike7.jpg', 14, 'nike-7', 892, 2147483647, NULL, NULL),
(20, 1212312876, 1, 1, 1, 2, 'Nike Shoe 8', 'Nike Black Edition', 'nike8.jpg', 17, 'nike-8', 932, 2147483647, NULL, NULL),
(21, 234535141, 1, 2, 2, 2, 'Under Armour 1', 'Under Armour Black Edition', 'under_armour1.jpg', 34, 'under-armour-1', 654, 1111111011, NULL, NULL),
(22, 234535541, 1, 2, 2, 1, 'Under Armour 2', 'Under Armour Black Edition', 'under_armour2.jpg', 14, 'under-armour-2', 614, 1001111011, NULL, NULL),
(23, 234585141, 1, 2, 2, 2, 'Under Armour 3', 'Under Armour Black Edition', 'under_armour3.jpg', 34, 'under-armour-3', 624, 1011111011, NULL, NULL),
(24, 234505141, 1, 2, 2, 3, 'Under Armour 4', 'Under Armour Black Edition', 'under_armour4.jpg', 31, 'under-armour-4', 634, 1111011011, NULL, NULL),
(25, 234515141, 1, 2, 2, 2, 'Under Armour 5', 'Under Armour Black Edition', 'under_armour5.jpg', 17, 'under-armour-5', 644, 1111101011, NULL, NULL),
(26, 234525141, 1, 2, 2, 1, 'Under Armour 6', 'Under Armour Black Edition', 'under_armour6.jpg', 18, 'under-armour-6', 664, 1001111011, NULL, NULL),
(27, 234538141, 1, 2, 2, 1, 'Under Armour 7', 'Under Armour Black Edition', 'under_armour7.jpg', 13, 'under-armour-7', 674, 1101111011, NULL, NULL),
(29, 1241224, 1, 3, 3, 3, 'Adidas 1', 'Adidas White Edition Shoes', 'adidas1.jpg', 12, 'adidas-1', 321, 111110011, NULL, NULL),
(31, 1241324, 1, 3, 3, 3, 'Adidas 2', 'Adidas White Edition Shoes', 'adidas2.jpg', 11, 'adidas-2', 322, 101110011, NULL, NULL),
(32, 1241225, 1, 3, 3, 1, 'Adidas 3', 'Adidas White Edition Shoes', 'adidas3.jpg', 13, 'adidas-3', 323, 110110011, NULL, NULL),
(33, 1241226, 1, 3, 3, 2, 'Adidas 4', 'Adidas White Edition Shoes', 'adidas4.jpg', 14, 'adidas-4', 351, 111010011, NULL, NULL),
(34, 1241227, 1, 3, 3, 3, 'Adidas 5', 'Adidas White Edition Shoes', 'adidas5.jpg', 15, 'adidas-5', 311, 111100011, NULL, NULL),
(35, 1241228, 1, 3, 3, 2, 'Adidas 6', 'Adidas White Edition Shoes', 'adidas6.jpg', 16, 'adidas-6', 311, 111111011, NULL, NULL),
(37, 1241211, 1, 3, 3, 2, 'Adidas 8', 'Adidas White Edition Shoes', 'adidas8.jpg', 18, 'adidas-8', 234, 111110010, NULL, NULL),
(38, 1213411, 1, 4, 4, 2, 'Puma 1', 'Puma Black Edition', 'puma1.jpg', 12, 'puma-1', 313, 11111011, NULL, NULL),
(39, 1213412, 1, 4, 4, 2, 'Puma 2', 'Puma Black Edition', 'puma2.jpg', 12, 'puma-2', 314, 11110011, NULL, NULL),
(40, 1213413, 1, 4, 4, 1, 'Puma 3', 'Puma Black Edition', 'puma3.jpg', 22, 'puma-3', 315, 11011011, NULL, NULL),
(41, 1213414, 1, 4, 4, 3, 'Puma 4', 'Puma Black Edition', 'puma4.jpg', 13, 'puma-4', 316, 10111011, NULL, NULL),
(42, 1213415, 1, 4, 4, 2, 'Puma 5', 'Puma Black Edition', 'puma5.jpg', 42, 'puma-5', 317, 11111010, NULL, NULL),
(43, 1213416, 1, 4, 4, 1, 'Puma 6', 'Puma Black Edition', 'puma6.jpg', 15, 'puma-6', 318, 10011011, NULL, NULL),
(44, 1213417, 1, 4, 4, 3, 'Puma 7', 'Puma Black Edition', 'puma7.jpg', 16, 'puma-7', 319, 11110011, NULL, NULL),
(45, 1213418, 1, 4, 4, 1, 'Puma 8', 'Puma Black Edition', 'puma8.jpg', 72, 'puma-8', 311, 10111011, NULL, NULL),
(46, 4209311, 1, 5, 5, 1, 'asics', 'Asics Red Edition', 'asics1.jpg', 23, 'asics-1', 321, 1001001, NULL, NULL),
(47, 4209312, 1, 5, 5, 1, 'asics', 'Asics Red Edition', 'asics2.jpg', 21, 'asics-2', 322, 1101001, NULL, NULL),
(48, 4209313, 1, 5, 5, 2, 'asics', 'Asics Red Edition', 'asics3.jpg', 23, 'asics-3', 323, 1011001, NULL, NULL),
(49, 4209314, 1, 5, 5, 3, 'asics', 'Asics Red Edition', 'asics4.jpg', 22, 'asics-4', 324, 1001101, NULL, NULL),
(50, 4209315, 1, 5, 5, 1, 'asics', 'Asics Red Edition', 'asics5.jpg', 24, 'asics-5', 325, 1001011, NULL, NULL),
(51, 4209316, 1, 5, 5, 2, 'asics', 'Asics Red Edition', 'asics6.jpg', 25, 'asics-6', 326, 1001000, NULL, NULL),
(52, 4209317, 1, 5, 5, 3, 'asics', 'Asics Red Edition', 'asics7.jpg', 26, 'asics-7', 327, 1001111, NULL, NULL),
(53, 4209318, 1, 5, 5, 1, 'asics', 'Asics Red Edition', 'asics8.jpg', 27, 'asics-8', 328, 1111001, NULL, NULL),
(54, 235353512, 2, 6, 6, 1, 'Fendi 1', 'Fendi Red Edition', 'fendi1.jpg', 24, 'fendi-1', 223, 111111011, NULL, NULL),
(55, 235353513, 2, 6, 6, 1, 'Fendi 2', 'Fendi Red Edition', 'fendi2.jpg', 25, 'fendi-2', 223, 101111011, NULL, NULL),
(56, 235353514, 2, 6, 6, 2, 'Fendi 3', 'Fendi Red Edition', 'fendi3.jpg', 26, 'fendi-3', 224, 110111011, NULL, NULL),
(57, 235353515, 2, 6, 6, 3, 'Fendi 4', 'Fendi Red Edition', 'fendi4.jpg', 27, 'fendi-4', 225, 111011011, NULL, NULL),
(58, 235353516, 2, 6, 6, 1, 'Fendi 5', 'Fendi Red Edition', 'fendi5.jpg', 28, 'fendi-5', 212, 111110011, NULL, NULL),
(59, 235353517, 2, 6, 6, 2, 'Fendi 6', 'Fendi Red Edition', 'fendi6.jpg', 29, 'fendi-6', 213, 111111111, NULL, NULL),
(60, 235353518, 2, 6, 6, 3, 'Fendi 7', 'Fendi Red Edition', 'fendi7.jpg', 11, 'fendi-7', 214, 111111001, NULL, NULL),
(61, 235353519, 2, 6, 6, 2, 'Fendi 8', 'Fendi Red Edition', 'fendi8.jpg', 12, 'fendi-8', 131, 111111010, NULL, NULL),
(62, 7141413, 2, 7, 7, 2, 'guess 1', 'Guess White Edition', 'guess1.JPG', 13, 'guess-1', 214, 1110011, NULL, NULL),
(64, 7141414, 2, 7, 7, 1, 'guess 2', 'Guess White Edition', 'guess2.JPG', 14, 'guess-2', 215, 1010011, NULL, NULL),
(65, 7141415, 2, 7, 7, 2, 'guess 3', 'Guess White Edition', 'guess3.JPG', 15, 'guess-3', 216, 10010011, NULL, NULL),
(66, 7141416, 2, 7, 7, 3, 'guess 4', 'Guess White Edition', 'guess4.JPG', 16, 'guess-4', 217, 1111011, NULL, NULL),
(67, 7141417, 2, 7, 7, 2, 'guess 5', 'Guess White Edition', 'guess5.JPG', 17, 'guess-5', 218, 1110111, NULL, NULL),
(68, 7141418, 2, 7, 7, 1, 'guess 6', 'Guess White Edition', 'guess6.JPG', 18, 'guess-6', 219, 1110001, NULL, NULL),
(69, 7141419, 2, 7, 7, 3, 'guess 7', 'Guess White Edition', 'guess7.JPG', 19, 'guess-7', 211, 1110010, NULL, NULL),
(70, 7141410, 2, 7, 7, 1, 'guess 8', 'Guess White Edition', 'guess8.JPG', 13, 'guess-8', 212, 1100001, NULL, NULL),
(71, 343421313, 2, 8, 1, 1, 'valentino 1', 'valentino black edition', 'valentino1.jpg', 21, 'valentino-1', 412, 111111101, NULL, NULL),
(72, 343421314, 2, 8, 1, 1, 'valentino 1', 'valentino black edition', 'valentino8.jpg', 22, 'valentino-2', 413, 111111100, NULL, NULL),
(73, 343421315, 2, 8, 1, 2, 'valentino 2', 'valentino black edition', 'valentino2.jpg', 23, 'valentino-3', 414, 111111001, NULL, NULL),
(74, 343421316, 2, 8, 1, 3, 'valentino 3', 'valentino black edition', 'valentino3.jpg', 24, 'valentino-4', 415, 111110101, NULL, NULL),
(75, 343421317, 2, 8, 1, 1, 'valentino 4', 'valentino black edition', 'valentino4.jpg', 25, 'valentino-5', 416, 100011101, NULL, NULL),
(76, 343421318, 2, 8, 1, 2, 'valentino 5', 'valentino black edition', 'valentino5.jpg', 23, 'valentino-6', 417, 110011101, NULL, NULL),
(77, 343421319, 2, 8, 1, 3, 'valentino 6', 'valentino black edition', 'valentino6.jpg', 22, 'valentino-7', 418, 111101101, NULL, NULL),
(78, 343421311, 2, 8, 1, 1, 'valentino 7', 'valentino black edition', 'valentino7.jpg', 29, 'valentino-8', 419, 110111101, NULL, NULL),
(79, 1243122, 3, 16, 2, 1, 'dior 1', 'dior black edition', 'dior1.jpg', 43, 'dior-1', 312, 101111111, NULL, NULL),
(80, 1243121, 3, 16, 2, 1, 'dior 2', 'dior black edition', 'dior2.jpg', 41, 'dior-2', 312, 100111111, NULL, NULL),
(81, 1243123, 3, 16, 2, 2, 'dior 3', 'dior black edition', 'dior3.jpg', 42, 'dior-3', 313, 101011111, NULL, NULL),
(82, 1243124, 3, 16, 2, 3, 'dior 4', 'dior black edition', 'dior4.jpg', 42, 'dior-4', 314, 101101111, NULL, NULL),
(83, 1243125, 3, 16, 2, 1, 'dior 5', 'dior black edition', 'dior5.jpg', 15, 'dior-5', 315, 101110111, NULL, NULL),
(84, 1243126, 3, 16, 2, 2, 'dior 6', 'dior black edition', 'dior6.jpg', 612, 'dior-6', 316, 101111101, NULL, NULL),
(85, 1243127, 3, 16, 2, 3, 'dior 7', 'dior black edition', 'dior7.jpg', 61, 'dior-7', 317, 101111110, NULL, NULL),
(86, 1243128, 3, 16, 2, 1, 'dior 8', 'dior black edition', 'dior8.jpg', 99, 'dior-8', 318, 101111100, NULL, NULL),
(87, 5261311, 3, 17, 3, 1, 'versace 1', 'versace black edition', 'versace1.jpg', 72, 'versace-1', 73, 11011111, NULL, NULL),
(88, 5261312, 3, 17, 3, 2, 'versace 2', 'versace black edition', 'versace2.jpg', 73, 'versace-2', 71, 10011111, NULL, NULL),
(89, 5261313, 3, 17, 3, 3, 'versace 3', 'versace black edition', 'versace3.jpg', 74, 'versace-3', 72, 11001111, NULL, NULL),
(90, 5261314, 3, 17, 3, 1, 'versace 4', 'versace black edition', 'versace4.jpg', 75, 'versace-4', 74, 11010111, NULL, NULL),
(91, 5261315, 3, 17, 3, 2, 'versace 5', 'versace black edition', 'versace5.jpg', 76, 'versace-5', 75, 11011011, NULL, NULL),
(92, 5261316, 3, 17, 3, 3, 'versace 6', 'versace black edition', 'versace6.jpg', 77, 'versace-6', 76, 11011101, NULL, NULL),
(93, 5261317, 3, 17, 3, 1, 'versace 7', 'versace black edition', 'versace7.jpg', 78, 'versace-7', 77, 11011110, NULL, NULL),
(94, 5261318, 3, 17, 3, 1, 'versace 8', 'versace black edition', 'versace8.jpg', 79, 'versace-8', 78, 10011111, NULL, NULL),
(95, 6439211, 4, NULL, 4, 1, 'kids 1', 'kids black edition', 'kids1.jpg', 64, 'kids-1', 63, 11101110, NULL, NULL),
(98, 6439219, 4, NULL, 4, 1, 'kids 2', 'kids black edition', 'kids2.jpg', 61, 'kids-2', 62, 1101110, NULL, NULL),
(99, 6439212, 4, NULL, 4, 2, 'kids 3', 'kids black edition', 'kids3.jpg', 62, 'kids-3', 61, 10101110, NULL, NULL),
(100, 6439213, 4, NULL, 4, 3, 'kids 4', 'kids black edition', 'kids4.jpg', 63, 'kids-4', 63, 11001110, NULL, NULL),
(101, 6439214, 4, NULL, 4, 1, 'kids 5', 'kids black edition', 'kids5.jpg', 66, 'kids-5', 65, 11111110, NULL, NULL),
(102, 6439215, 4, NULL, 4, 2, 'kids 6', 'kids black edition', 'kids6.jpg', 67, 'kids-7', 66, 11100110, NULL, NULL),
(103, 6439216, 4, NULL, 4, 3, 'kids 7', 'kids black edition', 'kids7.jpg', 68, 'kids-6', 67, 11101100, NULL, NULL),
(104, 6439217, 4, NULL, 4, 1, 'kids 8', 'kids black edition', 'kids8.jpg', 69, 'kids-8', 68, 11101111, NULL, NULL),
(105, 14213511, 6, NULL, 5, 1, 'household 1', 'household black edition', 'household1.jpg', 73, 'household-1', 63, 11110011, NULL, NULL),
(106, 14213512, 6, NULL, 5, 2, 'household 2', 'household black edition', 'household2.jpg', 71, 'household-2', 61, 1110011, NULL, NULL),
(107, 14213513, 6, NULL, 5, 3, 'household 3', 'household black edition', 'household3.jpg', 72, 'household-3', 65, 10110011, NULL, NULL),
(108, 14213514, 6, NULL, 5, 1, 'household 1', 'household black edition', 'household4.jpg', 74, 'household-4', 68, 11010011, NULL, NULL),
(109, 14213515, 6, NULL, 5, 2, 'household 2', 'household black edition', 'household5.jpg', 75, 'household-5', 33, 11100011, NULL, NULL),
(110, 14213516, 6, NULL, 5, 3, 'household 3', 'household black edition', 'household6.jpg', 76, 'household-6', 73, 11111011, NULL, NULL),
(111, 14213517, 6, NULL, 5, 1, 'household 1', 'household black edition', 'household7.jpg', 78, 'household-7', 82, 11110111, NULL, NULL),
(112, 14213518, 6, NULL, 5, 2, 'household 2', 'household black edition', 'household8.jpg', 79, 'household-8', 77, 11110001, NULL, NULL),
(113, 5134121, 8, NULL, 6, 1, 'clothing 1', 'clothing black edition', 'clothing1.jpg', 733, 'clothing-1', 243, 111111011, NULL, NULL),
(114, 5134122, 8, NULL, 6, 2, 'clothing 2', 'clothing black edition', 'clothing2.jpg', 533, 'clothing-2', 241, 101111011, NULL, NULL),
(115, 5134123, 8, NULL, 6, 3, 'clothing 3', 'clothing black edition', 'clothing3.jpg', 733, 'clothing-3', 242, 110111011, NULL, NULL),
(116, 5134124, 8, NULL, 6, 1, 'clothing 4', 'clothing black edition', 'clothing4.jpg', 773, 'clothing-4', 244, 111011011, NULL, NULL),
(117, 5134125, 8, NULL, 6, 2, 'clothing 5', 'clothing black edition', 'clothing5.jpg', 233, 'clothing-5', 142, 111101011, NULL, NULL),
(118, 5134126, 8, NULL, 6, 3, 'clothing 6', 'clothing black edition', 'clothing6.jpg', 762, 'clothing-6', 166, 111110011, NULL, NULL),
(119, 5134127, 8, NULL, 6, 1, 'clothing 7', 'clothing black edition', 'clothing7.jpg', 713, 'clothing-7', 623, 111111111, NULL, NULL),
(120, 5134128, 8, NULL, 6, 2, 'clothing 8', 'clothing black edition', 'clothing8.jpg', 911, 'clothing-8', 833, 111111001, NULL, NULL),
(121, 12341341, 9, NULL, 4, 1, 'bags 1', 'bags black edition', 'bags1.jpg', 62, 'bags-1', 632, 1111111101, NULL, NULL),
(122, 12341342, 9, NULL, 4, 2, 'bags 2', 'bags black edition', 'bags2.jpg', 61, 'bags-2', 922, 1011111101, NULL, NULL),
(123, 12341343, 9, NULL, 4, 3, 'bags 3', 'bags black edition', 'bags3.jpg', 66, 'bags-3', 112, 1101111101, NULL, NULL),
(124, 12341344, 9, NULL, 4, 1, 'bags 4', 'bags black edition', 'bags4.jpg', 12, 'bags-4', 612, 1110111101, NULL, NULL),
(125, 12341345, 9, NULL, 4, 2, 'bags 5', 'bags black edition', 'bags5.jpg', 11, 'bags-5', 872, 1111011101, NULL, NULL),
(126, 12341346, 9, NULL, 4, 3, 'bags 6', 'bags black edition', 'bags6.jpg', 62, 'bags-6', 631, 1111101101, NULL, NULL),
(127, 12341347, 9, NULL, 4, 1, 'bags 7', 'bags black edition', 'bags7.jpg', 78, 'bags-7', 532, 1111110101, NULL, NULL),
(128, 12341348, 9, NULL, 4, 2, 'bags 8', 'bags black edition', 'bags8.jpg', 99, 'bags-8', 232, 1111111001, NULL, NULL),
(129, 8798131, 10, NULL, 6, 1, 'shoes 1', 'shoes white edition', 'shoes1.jpg', 62, 'shoes-1', 83, 111111001, NULL, NULL),
(130, 8798132, 10, NULL, 6, 2, 'shoes 2', 'shoes white edition', 'shoes2.jpg', 12, 'shoes-2', 13, 101111001, NULL, NULL),
(131, 8798133, 10, NULL, 6, 3, 'shoes 3', 'shoes white edition', 'shoes3.jpg', 63, 'shoes-3', 82, 110111001, NULL, NULL),
(132, 8798134, 10, NULL, 6, 1, 'shoes 4', 'shoes white edition', 'shoes4.jpg', 42, 'shoes-4', 33, 111011001, NULL, NULL),
(133, 8798135, 10, NULL, 6, 2, 'shoes 5', 'shoes white edition', 'shoes5.jpg', 65, 'shoes-5', 84, 111101001, NULL, NULL),
(134, 8798136, 10, NULL, 6, 3, 'shoes 6', 'shoes white edition', 'shoes6.jpg', 62, 'shoes-6', 53, 111110001, NULL, NULL),
(135, 8798137, 10, NULL, 6, 1, 'shoes 7', 'shoes white edition', 'shoes7.jpg', 68, 'shoes-7', 86, 111111101, NULL, NULL),
(136, 8798138, 10, NULL, 6, 2, 'shoes 8', 'shoes white edition', 'shoes8.jpg', 92, 'shoes-8', 73, 111111011, NULL, NULL),
(137, 8571291, 12, NULL, 6, 1, 't-shirt 1', 't-shirt white edition', 't-shirt1.jpg', 88, 't-shirt-1', 73, 1111111101, NULL, NULL),
(138, 8571292, 12, NULL, 6, 2, 't-shirt 2', 't-shirt white edition', 't-shirt2.jpg', 18, 't-shirt-2', 13, 1111111101, NULL, NULL),
(139, 8571293, 12, NULL, 6, 3, 't-shirt 3', 't-shirt white edition', 't-shirt3.jpg', 82, 't-shirt-3', 74, 1011111101, NULL, NULL),
(140, 8571294, 12, NULL, 6, 1, 't-shirt 4', 't-shirt white edition', 't-shirt4.jpg', 38, 't-shirt-4', 53, 1101111101, NULL, NULL),
(141, 8571295, 12, NULL, 6, 2, 't-shirt 5', 't-shirt white edition', 't-shirt5.jpg', 84, 't-shirt-5', 76, 1110111101, NULL, NULL),
(142, 8571296, 12, NULL, 6, 3, 't-shirt 6', 't-shirt white edition', 't-shirt6.jpg', 58, 't-shirt-6', 73, 1111011101, NULL, NULL),
(143, 8571297, 12, NULL, 6, 1, 't-shirt 7', 't-shirt white edition', 't-shirt7.jpg', 86, 't-shirt-7', 78, 1111101101, NULL, NULL),
(145, 9817141, 13, NULL, 7, 1, 'blazer 1', 'blazer white edition', 'blazer1.jpg', 52, 'blazer-1', 83, 111100110, NULL, NULL),
(146, 9817142, 13, NULL, 7, 2, 'blazer 2', 'blazer white edition', 'blazer2.jpg', 12, 'blazer-2', 13, 101100110, NULL, NULL),
(147, 9817143, 13, NULL, 7, 3, 'blazer 3', 'blazer white edition', 'blazer3.jpg', 53, 'blazer-3', 82, 110100110, NULL, NULL),
(148, 9817144, 13, NULL, 7, 1, 'blazer 4', 'blazer white edition', 'blazer4.jpg', 42, 'blazer-4', 33, 111000110, NULL, NULL),
(149, 9817145, 13, NULL, 7, 2, 'blazer 5', 'blazer white edition', 'blazer5.jpg', 55, 'blazer-5', 84, 111110110, NULL, NULL),
(150, 9817146, 13, NULL, 7, 3, 'blazer 6', 'blazer white edition', 'blazer6.jpg', 62, 'blazer-6', 53, 111101110, NULL, NULL),
(151, 9817147, 13, NULL, 7, 1, 'blazer 7', 'blazer white edition', 'blazer7.jpg', 57, 'blazer-7', 86, 111100010, NULL, NULL),
(152, 9817148, 13, NULL, 7, 2, 'blazer 8', 'blazer white edition', 'blazer8.jpg', 82, 'blazer-8', 73, 111100100, NULL, NULL),
(153, 52938471, 14, NULL, 6, 1, 'sunglass 1', 'sunglass white edition', 'sunglass1.jpg', 11, 'sunglass-1', 23, 11101110, NULL, NULL),
(154, 52938472, 14, NULL, 6, 2, 'sunglass 2', 'sunglass white edition', 'sunglass2.jpg', 21, 'sunglass-2', 13, 10101110, NULL, NULL),
(155, 52938473, 14, NULL, 6, 3, 'sunglass 3', 'sunglass white edition', 'sunglass3.jpg', 13, 'sunglass-3', 22, 11001110, NULL, NULL),
(156, 52938474, 14, NULL, 6, 1, 'sunglass 4', 'sunglass white edition', 'sunglass4.jpg', 41, 'sunglass-4', 33, 11111110, NULL, NULL),
(157, 52938475, 14, NULL, 6, 2, 'sunglass 5', 'sunglass white edition', 'sunglass5.jpg', 15, 'sunglass-5', 24, 11100110, NULL, NULL),
(158, 52938476, 14, NULL, 6, 3, 'sunglass 6', 'sunglass white edition', 'sunglass6.jpg', 61, 'sunglass-6', 53, 11101010, NULL, NULL),
(159, 52938477, 14, NULL, 6, 1, 'sunglass 7', 'sunglass white edition', 'sunglass7.jpg', 17, 'sunglass-7', 26, 1110100, NULL, NULL),
(161, 4127191, 11, NULL, 1, 1, 'polo 1', 'polo white edition', 'polo1.jpg', 77, 'polo-1', 11, 1111111101, NULL, NULL),
(163, 4127192, 11, NULL, 1, 2, 'polo 2', 'polo white edition', 'polo2.jpg', 11, 'polo-2', 12, 1011111101, NULL, NULL),
(164, 4127193, 11, NULL, 1, 1, 'polo 3', 'polo white edition', 'polo3.jpg', 17, 'polo-3', 31, 1101111101, NULL, NULL),
(165, 4127195, 11, NULL, 1, 3, 'polo 4', 'polo white edition', 'polo4.jpg', 72, 'polo-4', 41, 1110111101, NULL, NULL),
(166, 4127194, 11, NULL, 1, 1, 'polo 5', 'polo white edition', 'polo5.jpg', 37, 'polo-5', 15, 1111011101, NULL, NULL),
(167, 4127196, 11, NULL, 1, 2, 'polo 6', 'polo white edition', 'polo6.jpg', 74, 'polo-6', 61, 1111101101, NULL, '2017-08-07 02:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_periods`
--

CREATE TABLE `product_periods` (
  `id` int(10) UNSIGNED NOT NULL,
  `period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_periods`
--

INSERT INTO `product_periods` (`id`, `period`, `created_at`, `updated_at`) VALUES
(1, 'new', NULL, NULL),
(2, 'old', NULL, NULL),
(3, 'sale', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_items`
--

CREATE TABLE `recommended_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommended_items`
--

INSERT INTO `recommended_items` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 94, NULL, NULL),
(2, 71, NULL, NULL),
(3, 153, NULL, NULL),
(4, 161, NULL, NULL),
(5, 57, NULL, NULL),
(6, 52, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'NIKE', 'nike', NULL, NULL),
(2, 1, 'UNDER ARMOUR', 'under-armour', NULL, NULL),
(3, 1, 'ADIDAS', 'adidas', NULL, NULL),
(4, 1, 'PUMA', 'puma', NULL, NULL),
(5, 1, 'ASICS', 'asics', NULL, NULL),
(6, 2, 'Fendi', 'fendi', NULL, NULL),
(7, 2, 'Guess', 'guess', NULL, NULL),
(8, 2, 'Valentino', 'valentino', NULL, NULL),
(16, 3, 'Dior', 'dior', NULL, NULL),
(17, 3, 'Versace', 'versace', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabpanes`
--

CREATE TABLE `tabpanes` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabpanes`
--

INSERT INTO `tabpanes` (`id`, `category_name`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 'T-SHIRT', 137, NULL, NULL),
(7, 'T-SHIRT', 138, NULL, NULL),
(8, 'T-SHIRT', 140, NULL, NULL),
(9, 'T-SHIRT', 142, NULL, NULL),
(11, 'BLAZERS', 146, NULL, NULL),
(12, 'BLAZERS', 148, NULL, NULL),
(13, 'BLAZERS', 151, NULL, NULL),
(14, 'BLAZERS', 152, NULL, NULL),
(15, 'SUNGLASS', 153, NULL, NULL),
(16, 'SUNGLASS', 155, NULL, NULL),
(17, 'SUNGLASS', 156, NULL, NULL),
(18, 'SUNGLASS', 158, NULL, NULL),
(19, 'KIDS', 99, NULL, NULL),
(20, 'KIDS', 100, NULL, NULL),
(21, 'KIDS', 101, NULL, NULL),
(22, 'KIDS', 103, NULL, NULL),
(31, 'POLO SHIRT', 161, NULL, NULL),
(32, 'POLO SHIRT', 163, NULL, NULL),
(33, 'POLO SHIRT', 164, NULL, NULL),
(34, 'POLO SHIRT', 166, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahid', 'jahidulpathan@gmail.com', '$2y$10$Z3szh3U16pMwofrcqN5YTeYUlEIAhVAOmM3F5q7I1FauipVdBf64m', 'erVvtnqtTJnjlmHFKmUFxoEYsD4hs4nnq0sgeAjLSLAOQAtHOIZdYn5X1VgK', '2017-07-25 07:09:12', '2017-07-25 07:09:12'),
(2, 'jahid', 'adsf@fsfasd.com', '$2y$10$FLbBwnu.RYGp2l0gnFfwXeYEbgJ5ssmRQHTC5W8Gdnb6USj9WUjpq', 'p7rVuu0LDK44MVpMFE2KptTUri849Bb2uoNK2q7pQJCgPCUpTYRA10En0Tyq', '2017-07-25 12:31:24', '2017-07-25 12:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `product_id`, `name`, `email`, `review`, `product_rating`, `created_at`, `updated_at`) VALUES
(1, 140, 'dsafasf', 'sdf@esdfs', 'fsdfasdf', 4, '2017-07-18 07:30:57', '2017-07-18 07:30:57'),
(2, 140, 'dsfsdf', 'sdfasdf@Edsf', 'asdfasdf', 4, '2017-07-18 07:31:27', '2017-07-18 07:31:27'),
(3, 140, 'asdfasd', 'safsadf@sdfas', 'dfasdf', 4, '2017-07-18 07:34:42', '2017-07-18 07:34:42'),
(4, 140, 'asdfasdf', 'sadfdsf@fasasdf', 'sdfasdfasd', 4, '2017-07-18 07:36:51', '2017-07-18 07:36:51'),
(5, 140, 'sdfasdf', 'sdfasf@dsfsf', 'sdfsdf', 4, '2017-07-18 07:38:06', '2017-07-18 07:38:06'),
(6, 143, 'zxcvxzcv', 'cvzxcv2zx@ddfgsdf', 'gdfgsdfgsdg', 4, '2017-07-18 07:38:42', '2017-07-18 07:38:42'),
(7, 143, 'asdfas', 'asdfsadf@sfafasdf', 'asdfsadf', 4, '2017-07-18 07:43:50', '2017-07-18 07:43:50'),
(8, 143, 'sdfasdf', 'dsafadsf@sfasdf', 'Bad Product', 4, '2017-07-18 07:46:02', '2017-07-18 07:46:02'),
(9, 143, 'sdfdsf', 'dsf@dfsfas', 'fsdfsaf', 4, '2017-07-18 07:52:59', '2017-07-18 07:52:59'),
(10, 143, 'sdfsd', 'sdfds@sfdasdf', 'sdfasdf', 4, '2017-07-18 07:54:24', '2017-07-18 07:54:24'),
(11, 143, 'asdfasd', 'fasdfs@sdfsa', 'fsdfsdaf', 4, '2017-07-18 07:58:47', '2017-07-18 07:58:47'),
(12, 143, 'sfdgsdf', 'dsfg@fdfa', 'sfsdfsdf', 4, '2017-07-18 07:59:32', '2017-07-18 07:59:32'),
(13, 143, 'zcxvzxvzx', 'vzxcvxcv2df2fd@cvbcx', 'cxbxcvbcv', 4, '2017-07-18 08:02:18', '2017-07-18 08:02:18'),
(14, 138, 'sdfsdf', 'sdfsdf@sdffas', 'dfsdfas', 4, '2017-07-18 08:03:13', '2017-07-18 08:03:13'),
(15, 138, 'Jahid', 'jahidulpathan@gmail.com', 'What the hell is going on.', 4, '2017-07-18 08:13:16', '2017-07-18 08:13:16'),
(16, 138, 'sfsdf', 'sdfd@dsdff', 'sdafsadf', 4, '2017-07-18 08:16:59', '2017-07-18 08:16:59'),
(17, 138, 'sdfs', 'sfsdf@dsfsdf', 'sdfsadf', 4, '2017-07-18 08:22:24', '2017-07-18 08:22:24'),
(18, 138, 'zxcvzxc', 'zxcvzx2fddf2@sdf', 'sfdsdf', 4, '2017-07-18 08:23:54', '2017-07-18 08:23:54'),
(19, 138, 'asdf', 'adsfsdf@dsdf', 'sdf', 4, '2017-07-18 08:24:55', '2017-07-18 08:24:55'),
(20, 138, 'asdfa', 'sdfsdf@SDS', '@fsasdf', 4, '2017-07-18 08:25:34', '2017-07-18 08:25:34'),
(21, 138, 'asdfdasf', 'sdafdsaf@sdffasd', 'fasdfasdf', 4, '2017-07-18 08:31:01', '2017-07-18 08:31:01'),
(22, 138, 'asdsad', 'sadfdsf@fasasdf', 'asdfsa', 4, '2017-07-18 08:31:38', '2017-07-18 08:31:38'),
(23, 138, 'sdfasdf', 'sadfs@fsdfasf', 'sdfsadf', 4, '2017-07-18 08:31:51', '2017-07-18 08:31:51'),
(25, 14, 'asasd', 'asd@fsd', 'sadfsdf', 4, '2017-07-19 05:04:42', '2017-07-19 05:04:42'),
(26, 14, 'dgd', 'forg3tful.mind@gmail.com', 'asdfasdfs', 3, '2017-07-19 07:43:08', '2017-07-19 07:43:08'),
(31, 14, 'sadfasdf', 'fdsf@dsfa', 'sdfasdfas', 5, '2017-07-19 09:42:22', '2017-07-19 09:42:22'),
(32, 14, 'sadfasd', 'asfsd@fsdfad', 'sfasdfasf', 5, '2017-07-19 09:42:42', '2017-07-19 09:42:42'),
(33, 14, 'zxcvzx', 'zxcvzx2fddf2@sdf', 'zxvzxcvzxc', 5, '2017-07-19 09:42:54', '2017-07-19 09:42:54'),
(34, 14, 'asdfa', 'asdfasf@dsf', 'asdgasg', 4, '2017-07-19 09:51:42', '2017-07-19 09:51:42'),
(35, 14, 'adfas', 'ds@dsf', 'sdaf', 4, '2017-07-19 09:53:35', '2017-07-19 09:53:35'),
(36, 14, 'daf', 'forg3tful.mind@gmail.com', 'asdfasdf', 3, '2017-07-19 09:53:47', '2017-07-19 09:53:47'),
(37, 14, 'zxcvcx', 'forg3tful.mind@gmail.com', 'CZXCZczXCZXc', 5, '2017-07-19 09:54:14', '2017-07-19 09:54:14'),
(38, 14, 'asdfas', 'fdsadf@fsfd', 'fasdfasf', 1, '2017-07-19 09:54:55', '2017-07-19 09:54:55'),
(39, 14, 'Forget', 'sdf@efsdf', 'dfasdf', 1, '2017-07-19 09:55:09', '2017-07-19 09:55:09'),
(40, 20, 'xczvzxcv', 'cv@cZCX', 'ZXCZXC', 2, '2017-07-19 09:55:36', '2017-07-19 09:55:36'),
(41, 14, 'sfagas', 'asdgs@fsafsdf', 'sdfasdfsa', 4, '2017-07-20 13:58:54', '2017-07-20 13:58:54'),
(42, 14, 'Pathan', 'adsfsdf@dsdf', 'fdasdf', 1, '2017-07-20 13:59:15', '2017-07-20 13:59:15'),
(43, 94, 'sdgsdg', 'sdfg@fdfs', 'gsdfgsdfgf', 3, '2017-07-25 10:44:14', '2017-07-25 10:44:14'),
(44, 29, 'sdgd', 'dfgsf@fzdg', 'dfgsdfg', 5, '2017-07-26 07:09:31', '2017-07-26 07:09:31'),
(45, 45, 'wertwe', 'ewrt@satgadfs', 'gdfhahj', 4, '2017-07-31 05:47:02', '2017-07-31 05:47:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_items`
--
ALTER TABLE `feature_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `header_sliders`
--
ALTER TABLE `header_sliders`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_period_id_foreign` (`period_id`);

--
-- Indexes for table `product_periods`
--
ALTER TABLE `product_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommended_items`
--
ALTER TABLE `recommended_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recommended_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tabpanes`
--
ALTER TABLE `tabpanes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabpanes_product_id_foreign` (`product_id`),
  ADD KEY `tabpanes_category_name_foreign` (`category_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_reviews_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feature_items`
--
ALTER TABLE `feature_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `header_sliders`
--
ALTER TABLE `header_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `product_periods`
--
ALTER TABLE `product_periods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recommended_items`
--
ALTER TABLE `recommended_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tabpanes`
--
ALTER TABLE `tabpanes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feature_items`
--
ALTER TABLE `feature_items`
  ADD CONSTRAINT `feature_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `product_periods` (`id`),
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `recommended_items`
--
ALTER TABLE `recommended_items`
  ADD CONSTRAINT `recommended_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `tabpanes`
--
ALTER TABLE `tabpanes`
  ADD CONSTRAINT `tabpanes_category_name_foreign` FOREIGN KEY (`category_name`) REFERENCES `categories` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabpanes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD CONSTRAINT `user_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
