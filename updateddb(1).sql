-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updateddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adminLevel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminLevel`) VALUES
(2, 0),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `basketproductquantity`
--

CREATE TABLE `basketproductquantity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productVariantID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basketproductquantity`
--

INSERT INTO `basketproductquantity` (`id`, `productVariantID`, `quantity`, `price`) VALUES
(7, 1, 3, 1099),
(7, 1, 3, 1099),
(7, 1, 3, 1099),
(7, 1, 3, 1099),
(7, 1, 1, 1099),
(7, 1, 1, 1099),
(7, 1, 1, 1099),
(7, 1, 1, 1099),
(7, 2, 1, 1000),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 3, 1, 900),
(7, 4, 1, 800),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(7, 2, 1, 1000),
(6, 3, 1, 900),
(6, 3, 1, 900);

-- --------------------------------------------------------

--
-- Table structure for table `billingaddresses`
--

CREATE TABLE `billingaddresses` (
  `addressID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `addressLine1` varchar(255) DEFAULT NULL,
  `addressLine2` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postCode` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
('test@gmail.com|127.0.0.1', 'i:2;', 1711313333),
('test@gmail.com|127.0.0.1:timer', 'i:1711313333;', 1711313333),
('testaccount@gmail.com|127.0.0.1', 'i:2;', 1711351862),
('testaccount@gmail.com|127.0.0.1:timer', 'i:1711351862;', 1711351862);

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Phones'),
(2, 'Tablets'),
(3, 'Computers'),
(4, 'Consoles'),
(5, 'Accessories');

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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `gradeID` int(11) NOT NULL,
  `gradeName` text NOT NULL,
  `gradeDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`gradeID`, `gradeName`, `gradeDesc`) VALUES
(1, 'Brand New', 'Products in this category are brand new, sealed in their original packaging, and have never been used.'),
(2, 'Excellent\r\n', 'Products in this grade are in excellent condition, with no signs of wear.'),
(3, 'Good', 'Items in the Good category show signs of light use but are in good overall condition.'),
(4, 'Fair', 'Products graded as Fair have noticeable signs of wear and use.');

-- --------------------------------------------------------

--
-- Table structure for table `inventoryalerts`
--

CREATE TABLE `inventoryalerts` (
  `alertID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `alertType` varchar(255) DEFAULT NULL,
  `alertDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `variantID` int(11) NOT NULL,
  `orderItemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderID`, `productID`, `quantity`, `variantID`, `orderItemID`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 1, 2),
(2, 3, 1, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalAmount` decimal(10,2) NOT NULL,
  `shippingAddressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `user_id`, `orderDate`, `totalAmount`, `shippingAddressID`) VALUES
(1, 7, '2024-03-14 00:00:00', '1099.99', 1),
(2, 6, '2024-03-25 09:04:36', '1899.99', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `imageURL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `categoryID`, `description`, `imageURL`) VALUES
(1, 'iPhone 15 Pro', 1, 'The latest model of the iPhone, featuring cutting-edge technology.', 'https://m.media-amazon.com/images/I/71vKy5OHuPL._AC_SL1500_.jpg'),
(2, 'Samsung Galaxy S21 Ultra', 1, 'Flagship Samsung model with advanced features.', 'https://m.media-amazon.com/images/I/81ISuov-+yL._AC_SL1500_.jpg'),
(3, 'Google Pixel 6', 1, 'The Google Pixel 6 features Google\'s own Tensor chip for improved performance and AI capabilities, along with a redesigned camera system for stunning photos.', 'https://m.media-amazon.com/images/I/71E5YsaFNGL._AC_SL1500_.jpg'),
(4, 'OnePlus 9 Pro', 1, 'The OnePlus 9 Pro offers a premium experience with its Hasselblad partnership for color-calibrated photography, smooth 120Hz display, and fast charging.', 'https://m.media-amazon.com/images/I/71koYhbr-3S._AC_SL1500_.jpg'),
(5, 'Xiaomi Mi 11', 1, 'The Xiaomi Mi 11 stands out with its 108MP triple camera setup, vibrant AMOLED display, and the powerful Snapdragon 888 processor.', 'https://m.media-amazon.com/images/I/51PqS91h+cL._AC_SL1001_.jpg'),
(6, 'LG G8 ThinQ', 1, 'The LG G8 ThinQ features innovative Hand ID and Air Motion controls, a crystal-clear OLED display, and a versatile Z Camera for depth sensing.', 'https://i.ebayimg.com/images/g/K5UAAOSwf-hl6yfm/s-l1600.jpg'),
(7, 'Sony Xperia 1 III', 1, 'The Sony Xperia 1 III combines a 4K HDR OLED display with a professional-grade triple camera system and exceptional audio capabilities, catering to photography and multimedia enthusiasts.', 'https://m.media-amazon.com/images/I/71dZkK5OhcS._AC_SL1500_.jpg'),
(8, 'Motorola Moto G Power', 1, 'The Motorola Moto G Power boasts a long-lasting battery life of up to three days, a large HD+ display, and a versatile triple camera system for all your photography needs.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/3b894409-47c4-4d13-b667-3a9072358735-1_c17ecc5d-0914-4278-9a33-04855192bd0e.jpg'),
(9, 'Google Pixel 4a', 1, 'The Google Pixel 4a offers an incredible camera with astrophotography capabilities, a compact design, and Google\'s clean Android experience, all at an affordable price.', 'https://m.media-amazon.com/images/I/61KQWDTRxVL._AC_SL1500_.jpg'),
(10, 'OnePlus Nord 2', 1, 'The OnePlus Nord 2 delivers flagship-level performance with its MediaTek Dimensity 1200-AI chipset, a fluid AMOLED display, and Warp Charge technology, making it a mid-range powerhouse.', 'https://m.media-amazon.com/images/I/71b7gZyb18L._AC_SL1500_.jpg'),
(11, 'iPad Pro 12.9-inch', 2, 'The latest iPad Pro model with a 12.9-inch display, featuring cutting-edge performance and technology.', 'https://m.media-amazon.com/images/I/81c+9BOQNWL._AC_SL1500_.jpg'),
(12, 'Samsung Galaxy Tab S9', 2, 'High-performance tablet with a stunning display and Samsung Dex support.', 'https://m.media-amazon.com/images/I/71dIUhuFQXL._AC_SL1500_.jpg'),
(13, 'Microsoft Surface Pro 7', 2, 'Versatile laptop-tablet hybrid from Microsoft with Windows 10.', 'https://m.media-amazon.com/images/I/71YaI6AXzZL._AC_SL1500_.jpg'),
(14, 'Lenovo Tab P11', 2, 'Affordable Android tablet with a high-resolution display and kid-friendly features.', 'https://m.media-amazon.com/images/I/61PZvrcaVyL._AC_SL1500_.jpg'),
(15, 'Amazon Fire HD 10', 2, 'Amazon\'s flagship tablet, offering a full HD screen and up to 12 hours of battery life.', 'https://m.media-amazon.com/images/I/51bSpHki3vL._AC_SL1000_.jpg'),
(16, 'Huawei MatePad T10s', 2, 'Budget-friendly tablet with a robust design and immersive sound.', 'https://m.media-amazon.com/images/I/517DwwcLS4L._AC_SL1000_.jpg'),
(17, 'Amazon Kindle Oasis', 2, 'Premium e-reader with an adjustable warm light and the latest e-ink technology for reading.', 'https://m.media-amazon.com/images/I/811yZf3Xv+L._AC_SL1500_.jpg'),
(18, 'Microsoft Surface Go 2', 2, 'Compact and lightweight 2-in-1 tablet that’s perfect for on-the-go productivity.', 'https://m.media-amazon.com/images/I/51XjIlysvgL._AC_SL1080_.jpg'),
(19, 'Samsung Galaxy Tab A7', 2, 'Affordable tablet with a vibrant display and Dolby Atmos surround sound.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/ac71f179-4abb-4fcb-bc0e-135180319c2d-1_96032768-3471-460c-ab5c-caacf3568c81.jpg'),
(20, 'Lenovo Tab M8', 2, 'Sleek and powerful tablet with a stunning IPS display and long-lasting battery.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/c390bc98-8f29-4468-8ed9-2a5c6470c04d-1_a3757260-b7d6-4516-82f0-28191e89a802.jpg'),
(21, 'PlayStation 5', 3, 'The latest generation console from Sony, offering advanced graphics and performance.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/7b0d7cf2-735b-4e69-b953-e4bceae3306b-1_558182e3-6eb9-4d06-a580-c77b8d96d5cf.jpg'),
(22, 'Xbox Series X', 3, 'Microsoft\'s most powerful console ever, designed for a generation that prioritizes speed and performance.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/acd64e8b-426b-4468-b6c6-5fccd3a64d0a-1_83c94cf4-a9da-4a56-a417-9c8c801899fb.jpg'),
(23, 'Nintendo Switch OLED Model', 3, 'The newest addition to the Switch family with a vibrant OLED screen for enhanced gameplay.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/7911f36c-a23c-4448-9d3e-b8a2ee6fc9c9-1_d1255c7d-9898-4f70-974c-2db2cde5e833.jpg'),
(24, 'PlayStation 4 Pro', 3, 'A high-performance console with 4K gaming and entertainment capabilities, available as refurbished.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/5d35e521-10d4-432a-8494-b425238c8506-1_9a712ecf-2df7-48fc-8e55-b265f3cf9b98.jpg'),
(25, 'Xbox One S', 3, 'A sleek and powerful console for gaming and entertainment, featuring 4K resolution support.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/bd0a7793-a03b-40d0-b106-6c96a3a8871a-1_6ef1a9b3-9551-4a3e-9997-aca6af7267f1.jpg'),
(26, 'Nintendo Switch Lite', 3, 'A compact and lightweight version of the Nintendo Switch, designed for handheld play.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/9ebc571b-7f74-43d3-9e4c-bc58daa60038-1_22c77a37-32c9-4f10-ba47-bf9fae781969.jpg'),
(27, 'PlayStation 4 Slim', 3, 'The slimmer, lighter version of the original PS4, available as refurbished.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/5e9e7df4-33d4-4bf4-b4dc-c78b76b640e6-1_f6d74747-7085-456a-9037-8b94c30d5365.jpg'),
(28, 'Xbox Series S', 3, 'The smallest, sleekest Xbox ever, offering next-gen performance in a compact size.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/a581618c-52c2-4139-b510-55cc1e5ed36d-1_9c42960c-71ff-4e92-b9ed-e0d1a44a7ba2.jpg'),
(29, 'Meta Quest 3', 3, 'The next evolution in VR gaming, offering immersive experiences without the need for a PC.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/01a020f4-e1d6-4dec-967a-12cc0dc3c7b2-1_806db300-9e26-46d1-8913-bc1779a2db1e.jpg'),
(30, 'Sega Genesis Mini', 3, 'A compact version of the classic Sega Genesis console, preloaded with 40 legendary games.', 'https://m.media-amazon.com/images/I/51PCiqTcClL._AC_SL1200_.jpg'),
(31, 'Logitech G Pro X Gaming Headset', 4, 'High-quality gaming headset with DTS Headphone:X 2.0 surround sound.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/cdf33ce8-48d1-4208-869b-9e8f98a3ac7f-1_2d7f912c-d0c5-4f19-9320-7243e774699f.jpg'),
(32, 'Wireless Charging Pad', 4, 'Convenient wireless charging pad for Qi-enabled devices.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/cdf33ce8-48d1-4208-869b-9e8f98a3ac7f-1_2d7f912c-d0c5-4f19-9320-7243e774699f.jpg'),
(33, 'Bose QuietComfort 35 II', 4, 'Noise-cancelling headphones with Alexa voice control.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/cdf33ce8-48d1-4208-869b-9e8f98a3ac7f-1_2d7f912c-d0c5-4f19-9320-7243e774699f.jpg'),
(34, 'Wireless Bluetooth Earbuds', 4, 'Compact and lightweight wireless earbuds with high-quality sound.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/cdf33ce8-48d1-4208-869b-9e8f98a3ac7f-1_2d7f912c-d0c5-4f19-9320-7243e774699f.jpg'),
(35, 'Gaming Mouse Pad', 4, 'Extended mouse pad with a smooth surface for gaming.', 'https://m.media-amazon.com/images/I/71XGWnyhLCL._AC_SL1500_.jpg'),
(36, 'JBL Flip 5 Portable Bluetooth Speaker', 4, 'Portable waterproof speaker with powerful sound and 12 hours of playtime.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/e2d6ec64-dac9-4a6c-bd18-32d883fff528-1_9013e9ef-19e9-47d2-9ec7-1140dadfa3b3.jpg'),
(37, 'Wireless Charging Stand', 4, 'Stylish stand for wireless charging of smartphones and earbuds.', 'https://m.media-amazon.com/images/I/71FkDvgbuHL._AC_SL1500_.jpg'),
(38, 'SteelSeries Arctis 7 Gaming Headset', 4, 'Wireless gaming headset with lossless 2.4 GHz wireless audio designed for gaming.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/b2c3f22a-43cc-44f5-8e55-79cf3ec7dcd8-1_52af2c05-7f69-477d-8f94-64911b5b3284.jpg'),
(39, 'Anker Wireless Mouse', 4, 'Ergonomic wireless mouse with advanced optical tracking.', 'https://www.backmarket.co.uk/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D1920/https://d2e6ccujb3mkqf.cloudfront.net/b2c3f22a-43cc-44f5-8e55-79cf3ec7dcd8-1_52af2c05-7f69-477d-8f94-64911b5b3284.jpg'),
(40, 'Universal Laptop Sleeve', 4, 'Soft neoprene sleeve to protect laptops up to 15 inches.', 'https://m.media-amazon.com/images/I/61+cXEPw8BL._AC_SL1000_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productvariants`
--

CREATE TABLE `productvariants` (
  `variantID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `gradeID` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productvariants`
--

INSERT INTO `productvariants` (`variantID`, `productID`, `gradeID`, `price`, `quantity`) VALUES
(1, 1, 1, '1099.00', 25),
(2, 1, 2, '999.99', 15),
(3, 1, 3, '899.99', 10),
(4, 1, 4, '799.99', 5),
(5, 2, 1, '1299.99', 20),
(6, 2, 2, '1199.99', 15),
(7, 2, 3, '999.99', 10),
(8, 2, 4, '899.99', 5),
(9, 3, 1, '799.99', 20),
(10, 3, 2, '699.99', 15),
(11, 3, 3, '599.99', 10),
(12, 3, 4, '499.99', 5),
(13, 4, 1, '899.99', 20),
(14, 4, 2, '849.99', 15),
(15, 4, 3, '799.99', 10),
(16, 4, 4, '749.99', 5),
(17, 5, 1, '849.99', 20),
(18, 5, 2, '799.99', 15),
(19, 5, 3, '749.99', 10),
(20, 5, 4, '699.99', 5),
(21, 6, 1, '399.99', 20),
(22, 6, 2, '359.99', 15),
(23, 6, 3, '319.99', 10),
(24, 6, 4, '279.99', 5),
(25, 7, 1, '1099.99', 20),
(26, 7, 2, '1049.99', 15),
(27, 7, 3, '999.99', 10),
(28, 7, 4, '949.99', 5),
(29, 8, 1, '199.99', 25),
(30, 8, 2, '179.99', 20),
(31, 8, 3, '159.99', 15),
(32, 8, 4, '139.99', 10),
(33, 9, 1, '349.99', 20),
(34, 9, 2, '319.99', 15),
(35, 9, 3, '289.99', 10),
(36, 9, 4, '259.99', 5),
(37, 10, 1, '499.99', 18),
(38, 10, 2, '469.99', 14),
(39, 10, 3, '439.99', 10),
(40, 10, 4, '409.99', 6),
(41, 11, 1, '1099.99', 20),
(42, 11, 2, '1049.99', 15),
(43, 11, 3, '999.99', 10),
(44, 11, 4, '949.99', 5),
(45, 12, 1, '799.99', 15),
(46, 12, 2, '759.99', 12),
(47, 12, 3, '719.99', 9),
(48, 12, 4, '679.99', 6),
(49, 13, 1, '899.99', 12),
(50, 13, 2, '859.99', 9),
(51, 13, 3, '819.99', 7),
(52, 13, 4, '779.99', 4),
(53, 14, 1, '299.99', 20),
(54, 14, 2, '269.99', 15),
(55, 14, 3, '239.99', 10),
(56, 14, 4, '209.99', 5),
(57, 15, 1, '149.99', 30),
(58, 15, 2, '129.99', 25),
(59, 15, 3, '109.99', 20),
(60, 15, 4, '89.99', 15),
(61, 16, 1, '179.99', 18),
(62, 16, 2, '159.99', 14),
(63, 16, 3, '139.99', 10),
(64, 16, 4, '119.99', 6),
(65, 17, 1, '249.99', 12),
(66, 17, 2, '229.99', 9),
(67, 17, 3, '209.99', 6),
(68, 17, 4, '189.99', 3),
(69, 18, 1, '399.99', 15),
(70, 18, 2, '379.99', 11),
(71, 18, 3, '359.99', 7),
(72, 18, 4, '339.99', 4),
(73, 19, 1, '229.99', 20),
(74, 19, 2, '209.99', 15),
(75, 19, 3, '189.99', 10),
(76, 19, 4, '169.99', 5),
(77, 20, 1, '149.99', 25),
(78, 20, 2, '129.99', 20),
(79, 20, 3, '109.99', 15),
(80, 20, 4, '89.99', 10),
(81, 21, 1, '499.99', 5),
(82, 21, 2, '469.99', 3),
(83, 21, 3, '439.99', 2),
(84, 21, 4, '409.99', 1),
(85, 22, 1, '499.99', 8),
(86, 22, 2, '469.99', 6),
(87, 22, 3, '439.99', 4),
(88, 22, 4, '409.99', 2),
(89, 23, 1, '349.99', 10),
(90, 23, 2, '319.99', 8),
(91, 23, 3, '289.99', 6),
(92, 23, 4, '259.99', 4),
(93, 24, 2, '399.99', 5),
(94, 24, 3, '369.99', 3),
(95, 24, 4, '339.99', 2),
(96, 25, 1, '249.99', 14),
(97, 25, 2, '219.99', 11),
(98, 25, 3, '189.99', 8),
(99, 25, 4, '159.99', 5),
(100, 26, 1, '199.99', 15),
(101, 26, 2, '179.99', 12),
(102, 26, 3, '159.99', 9),
(103, 26, 4, '139.99', 6),
(104, 27, 2, '299.99', 10),
(105, 27, 3, '269.99', 7),
(106, 27, 4, '239.99', 4),
(107, 28, 1, '299.99', 12),
(108, 28, 2, '269.99', 9),
(109, 28, 3, '239.99', 6),
(110, 28, 4, '209.99', 3),
(111, 29, 1, '399.99', 8),
(112, 29, 2, '369.99', 6),
(113, 29, 3, '339.99', 4),
(114, 29, 4, '309.99', 2),
(115, 30, 1, '79.99', 20),
(116, 30, 2, '69.99', 15),
(117, 30, 3, '59.99', 10),
(118, 30, 4, '49.99', 5),
(119, 31, 1, '129.99', 20),
(120, 31, 2, '119.99', 18),
(121, 31, 3, '109.99', 15),
(122, 31, 4, '99.99', 12),
(123, 32, 1, '29.99', 50),
(124, 32, 2, '27.99', 45),
(125, 32, 3, '25.99', 40),
(126, 32, 4, '23.99', 35),
(127, 33, 1, '279.99', 8),
(128, 33, 2, '259.99', 7),
(129, 33, 3, '239.99', 6),
(130, 33, 4, '219.99', 5),
(131, 34, 1, '49.99', 30),
(132, 34, 2, '44.99', 27),
(133, 34, 3, '39.99', 24),
(134, 34, 4, '34.99', 21),
(135, 35, 1, '19.99', 35),
(136, 35, 2, '17.99', 32),
(137, 35, 3, '15.99', 29),
(138, 35, 4, '13.99', 26),
(139, 36, 1, '119.99', 20),
(140, 36, 2, '109.99', 18),
(141, 36, 3, '99.99', 16),
(142, 36, 4, '89.99', 14),
(143, 37, 1, '39.99', 30),
(144, 37, 2, '35.99', 27),
(145, 37, 3, '31.99', 24),
(146, 37, 4, '27.99', 21),
(147, 38, 1, '149.99', 15),
(148, 38, 2, '139.99', 13),
(149, 38, 3, '129.99', 11),
(150, 38, 4, '119.99', 9),
(151, 39, 1, '24.99', 25),
(152, 39, 2, '22.99', 22),
(153, 39, 3, '20.99', 19),
(154, 39, 4, '18.99', 16),
(155, 40, 1, '19.99', 35),
(156, 40, 2, '17.99', 32),
(157, 40, 3, '15.99', 29),
(158, 40, 4, '13.99', 26);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
('Hh4kSanGzzwaq7nkr1B5R9fF3p21qPQtKxOJwrys', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQno3YVhOMXN2T0Y4c1JBc1RJZ3FrYjNDeVpkSFBsZno2Qzg0UnhjYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1711542023),
('Ow013Y8CIIeTmwlijTcfJA1D8cArTezbWpSTD7qf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDlVc1FkNkEwYmpmRXVHTm9USTdWR1pUZWRQVUJhOHVHN29PcTVlZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWFyY2gtcmVzdWx0cz9jYXRlZ29yeT1QaG9uZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711542906),
('wIbMdNmGyUfhxcr8mUYibEOqYPJton2gLS6ny3Eh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOE9nNkVNYTMwcXFUM1dhOEJKVHd0NFRGQnZVdEdMYVg1M0o4WlBNUSI7czo1OiJlcnJvciI7czo0MzoiUGxlYXNlIGxvZ2luIHRvIGFjY2VzcyB0aGUgYWRtaW4gZGFzaGJvYXJkLiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjE6e2k6MDtzOjU6ImVycm9yIjt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO319', 1711542023),
('WYuGAgnkDS7uoNu4MdgmAcoe14H9erTkZHnhvYO8', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia1pEVm9IQkt2alNLRVBnZHFoZHVRWXcxeGU3NUZVbEtZWDcyUUlKZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWFyY2giO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=', 1711548435);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `shipmentID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `trackingNumber` varchar(255) DEFAULT NULL,
  `shipmentDate` datetime NOT NULL,
  `estimatedArrival` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippingaddresses`
--

CREATE TABLE `shippingaddresses` (
  `addressID` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `addressLine1` varchar(255) DEFAULT NULL,
  `addressLine2` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postCode` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `shippingaddresses`
--

INSERT INTO `shippingaddresses` (`addressID`, `id`, `firstName`, `lastName`, `company`, `addressLine1`, `addressLine2`, `country`, `county`, `city`, `postCode`, `phoneNumber`) VALUES
(1, 9, 'John', 'Doe', 'Company Inc.', '123 Main St', 'Suite 100', 'USA', 'State', 'City', '12345', '555-1234'),
(4, 6, 'test', 'user', 'testinc.', '123', 'Main Street', 'England', 'Greater London', 'london', 'E1 6AN', '09876543219');

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
(1, 'test', 'test@gmail.com', NULL, '$2y$12$cx5.rnEyB2794SOhNNgXG.Z7c5i5A1l6wpBUrnvwEYFdcLfssQt1u', NULL, '2024-03-19 21:18:07', '2024-03-19 21:18:07'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$4JlX7XcbjKWeQTk3fARO6ODMfi0nZQkrXiAg/vmijhFifqLERzvzu', NULL, '2024-03-19 22:02:33', '2024-03-19 22:02:33'),
(3, 'admin2', 'admin2@gmail.com', NULL, '$2y$12$fLVeYlOZ1OwOCk1C0oxXVeuTx7MF/QSVBTJmbkikrX.pjlZoe9r2C', NULL, '2024-03-22 17:26:13', '2024-03-22 17:26:13'),
(4, 'john', 'john@gmail.com', NULL, '$2y$12$1iirHMP8.fci9gz484piMOVKu8MXgJcMg7.XeZZ7qi9wPDm0lvuBy', NULL, '2024-03-23 14:16:16', '2024-03-23 14:16:16'),
(5, 'JohnDoe', 'johndoe@example.com', NULL, '$2y$12$3nbW6NI9M3dfFPzySPnHb.VGXrQt/SEkea5NoKwdhffP830mMZxQK', NULL, '2024-03-24 18:51:38', '2024-03-24 18:51:38'),
(6, 'testuser', 'tetsuser@gmail.com', NULL, '$2y$12$LFOczJHDuhntLQCjiBcgl.ugu0JLHUzpAA7zSy3oQYAUtKkotT2bO', NULL, '2024-03-24 20:48:47', '2024-03-24 20:48:47'),
(7, 'hubert', 'hubert@gmail.com', NULL, '$2y$12$KqvKSlR1cUUTJc6jobpGCeI7XXeVOocRLUD/3SIIrWl1lFIvYtmgK', NULL, '2024-03-26 19:02:32', '2024-03-26 19:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `unique_index` (`id`,`adminLevel`);

--
-- Indexes for table `basketproductquantity`
--
ALTER TABLE `basketproductquantity`
  ADD KEY `fk_bid_id` (`id`),
  ADD KEY `fk_productvariantid` (`productVariantID`);

--
-- Indexes for table `billingaddresses`
--
ALTER TABLE `billingaddresses`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`gradeID`);

--
-- Indexes for table `inventoryalerts`
--
ALTER TABLE `inventoryalerts`
  ADD PRIMARY KEY (`alertID`),
  ADD KEY `productID` (`productID`);

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
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`orderItemID`),
  ADD KEY `fk_productId_productID` (`productID`),
  ADD KEY `fk_orderID` (`orderID`),
  ADD KEY `fk_pvariantid` (`variantID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `id` (`user_id`),
  ADD KEY `shippingAddressID` (`shippingAddressID`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `productvariants`
--
ALTER TABLE `productvariants`
  ADD PRIMARY KEY (`variantID`),
  ADD KEY `fk_gradeID` (`gradeID`),
  ADD KEY `productVariants_productID_fk` (`productID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`shipmentID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `shippingaddresses`
--
ALTER TABLE `shippingaddresses`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `id` (`id`) USING BTREE;

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
-- AUTO_INCREMENT for table `billingaddresses`
--
ALTER TABLE `billingaddresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `gradeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `orderItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `productvariants`
--
ALTER TABLE `productvariants`
  MODIFY `variantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `shippingaddresses`
--
ALTER TABLE `shippingaddresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_id_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `basketproductquantity`
--
ALTER TABLE `basketproductquantity`
  ADD CONSTRAINT `fk_bid_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_productvariantid` FOREIGN KEY (`productVariantID`) REFERENCES `productvariants` (`variantID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `fk_orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `fk_productId_productID` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`),
  ADD CONSTRAINT `fk_pvariantid` FOREIGN KEY (`variantID`) REFERENCES `productvariants` (`variantID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_shippingAddressID` FOREIGN KEY (`shippingAddressID`) REFERENCES `shippingaddresses` (`addressID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_categoryID` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Constraints for table `productvariants`
--
ALTER TABLE `productvariants`
  ADD CONSTRAINT `fk_gradeID` FOREIGN KEY (`gradeID`) REFERENCES `grades` (`gradeID`),
  ADD CONSTRAINT `productVariants_productID_fk` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
