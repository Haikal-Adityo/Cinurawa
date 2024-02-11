-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 08:52 AM
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
-- Database: `cinurawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Property', 'property', '2023-11-12 06:27:39', '2023-11-12 06:27:39'),
(2, 'Financial', 'financial', '2023-11-12 06:27:59', '2023-11-12 06:27:59'),
(3, 'Architecture', 'architecture', '2023-11-12 06:28:08', '2023-11-12 06:28:08'),
(4, 'Creativity', 'creativity', '2023-11-12 06:28:16', '2023-11-12 06:28:16'),
(5, 'Lifestyle', 'lifestyle', '2023-11-12 06:28:23', '2023-11-12 06:28:23'),
(6, 'Culture', 'culture', '2023-11-12 06:28:31', '2023-11-12 06:28:31');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_12_092409_create_portofolios_table', 1),
(6, '2023_11_12_130703_create_categories_table', 2),
(7, '2023_11_12_130709_create_posts_table', 2),
(8, '2023_11_12_130714_create_tags_table', 2),
(9, '2023_11_12_130754_create_post_tag_table', 2);

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
-- Table structure for table `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolios`
--

INSERT INTO `portofolios` (`id`, `title`, `slug`, `sub_title`, `image`, `content`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'AR Property Project', 'ar-property-project', 'Augmented Reality', 'portofolio-images/1699785134AR Thumbnail Portofolio.jpg', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget finibus nulla, eu dignissim diam. Mauris placerat efficitur nisi et congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas varius finibus ante, sed sodales turpis ornare id. Phasellus posuere viverra nulla, eu pharetra ipsum feugiat ac. Phasellus ut magna vel massa finibus rhoncus id vitae turpis. Curabitur suscipit, lorem ac euismod faucibus, sem tellus egestas erat, eget faucibus lectus tortor in odio. Sed ut semper enim. Praesent fermentum purus mauris, id convallis nisl placerat ut.</span></p>', 1, '2023-11-12 03:31:27', '2023-11-12 03:32:14'),
(2, 'VR Property Project', 'vr-property-project', 'Virtual Reality', 'portofolio-images/1699791815VR Portofolio Thumbnail.jpg', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Integer eget malesuada enim. Mauris auctor porttitor libero vitae rutrum. Nulla gravida convallis ex id commodo. Nullam auctor ante elit, faucibus vestibulum eros efficitur et. Sed dignissim purus gravida, molestie lacus ut, sollicitudin ligula. Duis ex massa, laoreet ut nisl a, sagittis bibendum ex. Phasellus at ligula mattis, eleifend ligula ultricies, hendrerit nibh. Ut iaculis tellus in feugiat tristique. Nunc in nibh lacinia lectus gravida congue at vitae massa. In tempor massa eget erat suscipit, sit amet pellentesque est molestie. Nam eleifend ac turpis at ultricies.</span></p>', 1, '2023-11-12 05:23:35', '2023-11-12 05:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `thumbnail`, `content`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 3, 'What is your favorite leather jacket color', 'what-is-your-favorite-leather-jacket-color', 'blog-thumbnails/1699796117image_2023-11-12_203428360.png', '<p>Etiam finibus risus enim, tincidunt bibendum est convallis a. Fusce efficitur justo elit, quis interdum ipsum eleifend sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac dolor tincidunt, imperdiet justo sit amet, semper arcu. Pellentesque eget purus neque.Etiam finibus risus enim, tincidunt bibendum est convallis a. Fusce efficitur justo elit, quis interdum ipsum eleifend sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac dolor tincidunt, imperdiet justo sit amet, semper arcu. Pellentesque eget purus neque.Etiam finibus risus enim, tincidunt bibendum est convallis a. Fusce efficitur justo elit, quis interdum ipsum eleifend sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac dolor tincidunt, imperdiet justo sit amet, semper arcu. Pellentesque eget purus neque.Etiam finibus risus enim, tincidunt bibendum est convallis a. Fusce efficitur justo elit, quis interdum ipsum eleifend sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac dolor tincidunt, imperdiet justo sit amet, semper arcu. Pellentesque eget purus neque.Etiam finibus risus enim, tincidunt bibendum est convallis a. Fusce efficitur justo elit, quis interdum ipsum eleifend sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac dolor tincidunt, imperdiet justo sit amet, semper arcu. Pellentesque eget purus neque.</p>', 1, '2023-11-12 06:35:17', '2023-11-12 08:03:07'),
(2, 1, 'Kiss From Rose - Seal 2', 'kiss-from-rose-seal-2', 'blog-thumbnails/1699796158image_2023-11-12_203543869.png', '<p><a href=\"https://id.wikipedia.org/wiki/Penulis\"><span style=\"text-decoration: underline;\">Penulis</span></a> artikel adalah orang atau individu yang bertindak dalam mengarang sebuah tulisan, menggabungkan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat <a href=\"https://id.wikipedia.org/w/index.php?title=Pembaca&amp;action=edit&amp;redlink=1\"><span style=\"text-decoration: underline;\">pembaca</span></a> dapat mengetahui apa yang tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari <a href=\"https://id.wikipedia.org/wiki/Pengalaman\"><span style=\"text-decoration: underline;\">pengalaman</span></a> seseorang, <a href=\"https://id.wikipedia.org/wiki/Imajinasi\"><span style=\"text-decoration: underline;\">imajinasi</span></a>, pengetahuan umum atau <a href=\"https://id.wikipedia.org/wiki/Penelitian_ilmiah\"><span style=\"text-decoration: underline;\">penelitian ilmiah</span></a>.</p><p>Penulis artikel bermacam-macam kriterianya, yakni sebagai berikut:</p><ul><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Buku\"><span style=\"text-decoration: underline;\">buku</span></a></li><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Berita\"><span style=\"text-decoration: underline;\">berita</span></a></li><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Pemasaran\"><span style=\"text-decoration: underline;\">pemasaran</span></a></li><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Daring\"><span style=\"text-decoration: underline;\">daring</span></a></li><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Narasi\"><span style=\"text-decoration: underline;\">narasi</span></a></li><li>Penulis artikel <a href=\"https://id.wikipedia.org/wiki/Naskah\"><span style=\"text-decoration: underline;\">naskah</span></a></li></ul>', 1, '2023-11-12 06:35:58', '2023-11-12 08:24:13'),
(3, 3, 'Is summer, have you bought a cane', 'is-summer-have-you-bought-a-cane', 'blog-thumbnails/1699796226image_2023-11-12_203654814.png', '<p><strong>Maecenas non convallis quam, eu sodales justo. Pellentesque quis lectus elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p><p>Donec nec metus sed leo sollicitudin ornare sed consequat neque. Aliquam iaculis neque quis dui venenatis, eget posuere felis viverra. Ut sit amet feugiat elit, nec elementum velit. Sed eu nisl convallis, efficitur turpis eu, euismod nunc. Proin neque enim, malesuada non lobortis nec, facilisis et lectus. Ie consectetur. Nam eget neque ac ex fringilla dignissim eu ac est. Nunc et nisl vel odio posuere.</p><p>Vivamus non condimentum orci. Pellentesque venenatis nibh sit amet est vehicula lobortis. Cras eget aliquet eros. Nunc lectus elit, suscipit at nunc sed, finibus imperdiet ipsum. Maecenas dapibus neque sodales nulla finibus volutpat. Integer pulvinar massa vitae ultrices posuere. Proin ut tempor turpis. Mauris felis neque, egestas in lobortis et, sodales non ante. Ut vestibulum libero quis luctus tempus. Nullam eget dignissim massa. Vivamus id condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc.</p><p><br></p>', 1, '2023-11-12 06:37:06', '2023-11-12 08:26:46'),
(4, 2, 'I have a desert visit this summer', 'i-have-a-desert-visit-this-summer', 'blog-thumbnails/1699796262image_2023-11-12_203735997.png', '<p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>', 1, '2023-11-12 06:37:42', '2023-11-12 08:25:04'),
(5, 3, '5 Beautiful buildings you need to visit without dying', '5-beautiful-buildings-you-need-to-visit-without-dying', 'blog-thumbnails/1699804075image_2023-11-12_224741370.png', '<p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>', 1, '2023-11-12 08:47:55', '2023-11-12 08:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(4, 1),
(4, 4),
(4, 5),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'perumahan', 'perumahan', '2023-11-12 06:31:52', '2023-11-12 06:31:52'),
(2, 'jogja', 'jogja', '2023-11-12 06:32:22', '2023-11-12 06:32:22'),
(3, 'cluster', 'cluster', '2023-11-12 06:32:39', '2023-11-12 06:32:39'),
(4, 'desain bangunan', 'desain-bangunan', '2023-11-12 06:33:08', '2023-11-12 06:33:08'),
(5, 'cinurawa', 'cinurawa', '2023-11-12 06:33:19', '2023-11-12 06:33:19');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$nybWavlNmIrGeKpzGdn7U.4lPzhvTumt.ome.kX1.vn1DumQIyCv6', 'BdbAEoj3yl7UD9XeOGKnf2Y60AKTsO0ZdR7o6cZl9y5p9DjLwXsWmsoUjJFb', '2023-11-12 03:28:11', '2023-11-12 03:28:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portofolios_slug_unique` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
