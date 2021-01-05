-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 02:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_title`, `r_date`, `genre`, `album_cover`, `created_at`, `updated_at`) VALUES
(1, 'Evermore', '2020-12-11', 'pop', '1609601238.webp', '2021-01-02 09:57:18', '2021-01-02 09:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_name`, `description`, `artist_cover`, `created_at`, `updated_at`, `slug`, `occupation`) VALUES
(1, 'Anne Marie', 'Anne-Marie Rose Nicholson is an English singer and songwriter. She has attained several charting singles on the UK Singles Chart, including Clean Bandit\'s \"Rockabye\", featuring Sean Paul, which peaked at number one, as well as \"Alarm\", \"Ciao Adios\", \"Friends\" and \"2002\". Her debut studio album Speak Your Mind was released on 27 April 2018, and peaked at number three on the UK Albums Chart. She was nominated for four awards at the 2019 Brit Awards, including Best British Female Solo Artist. In 2015, she signed a record deal with Asylum and, till 2018, she was releasing her work through the label. In late 2018, Anne-Marie left Atlantic and signed a record deal with Warner Bros. Records, owner of Atlantic.', '1609344679.jpg', '2020-12-30 10:41:19', '2020-12-30 10:41:19', 'Anne-Marie', 'Singer'),
(2, 'Ellie Goulding', 'Elena Jane Goulding ; born 30 December 1986) is an English singer and songwriter. Her career began when she met record producers Starsmith and Frankmusik, and she was later spotted by Jamie Lillywhite, who later became her manager and A&R. After signing to Polydor Records in July 2009, Goulding released her debut extended play, An Introduction to Ellie Goulding later that year.', '1609345763.jpg', '2020-12-30 10:59:23', '2020-12-30 10:59:23', 'Ellie-Goulding', 'Singer'),
(3, 'Dino James', 'Dino James is a popular Indian rapper, singer, composer, and lyricist. He has a self-titled youtube channel where he usually uploads music videos and the fact is that most of the lyrics of his songs are based on his real-life experiences and struggle faced by him.', '1609386544.jpg', '2020-12-30 22:19:04', '2020-12-30 22:19:04', 'Dino-James', 'Musical artist'),
(4, 'Alan Walker', 'Alan Olav Walker is an English-Norwegian DJ and record producer. In 2015, Walker received international acclaim after releasing the single \"Faded\", which received platinum certifications in 14 countries. In 2020, he was ranked 26th on DJ Mag. He released his debut studio album, Different World, in 2018.', '1609386769.jpg', '2020-12-30 22:22:49', '2020-12-30 22:22:49', 'Alan-Walker', 'DJ'),
(5, 'Marshmello', 'Christopher Comstock, known professionally as Marshmello, is an American electronic music producer and DJ. He first gained international recognition by releasing remixes of songs by American DJ duo Jack Ü and Russian-German DJ Zedd.', '1609386956.jpg', '2020-12-30 22:25:56', '2020-12-30 22:25:56', 'Marshmello', 'DJ'),
(6, 'Charlie Puth', 'Charles Otto Puth Jr. is an American singer, songwriter, and record producer. His initial exposure came through the viral success of his song videos uploaded to YouTube.', '1609387288.jpg', '2020-12-30 22:31:28', '2020-12-30 22:31:28', 'Charlie-Puth', 'singer-songwriter'),
(7, 'Wiz Khalifa', 'Cameron Jibril Thomaz, better known by his stage name Wiz Khalifa, is an American rapper, singer, songwriter, and actor. He released his debut album, Show and Prove, in 2006, and signed to Warner Bros. Records in 2007.', '1609478424.jpg', '2020-12-31 23:50:24', '2020-12-31 23:50:24', 'wiz-khalifa', 'Rapper'),
(8, 'Selena Gomez', 'Selena Marie Gomez is an American singer, actress, and producer. Born and raised in Texas, Gomez began her career by appearing on the children\'s television series Barney & Friends. Wikipedia', '1609490918.jpg', '2021-01-01 03:18:38', '2021-01-01 03:18:38', 'selena-gomez', 'singer'),
(9, 'Arijit Singh', 'Arijit Singh is an Indian playback singer. He sings predominantly in Hindi and Bengali but has also performed in various other Indian languages. He is the recipient of a National Award and a record six Filmfare Awards.', '1609506748.jpg', '2021-01-01 07:42:28', '2021-01-01 07:42:28', 'arijit-singh', 'playback singer'),
(10, 'Atif Aslam', 'Muhammad Atif Aslam born 12 March 1983; mostly referred to as Atif Aslam) is a Pakistani playback singer and actor. He has recorded numerous chart-topping songs in both Pakistan and India and is known for his vocal belting technique.', '1609507071.jpg', '2021-01-01 07:47:51', '2021-01-01 07:47:51', 'atif-aslam', 'playback singer'),
(11, 'Jasmine Thompson', 'Jasmine Ying Thompson is an English singer and songwriter. Thompson began her career at the age of ten by filming herself singing and uploading the videos to YouTube.', '1609507808.jpg', '2021-01-01 08:00:08', '2021-01-01 08:00:08', 'jasmine-thompson', 'Singer-songwriter'),
(12, 'Clean Bandit', 'Clean Bandit are a British electronic music group, formed in Cambridge in 2008. As of 2020, the group consists of Grace Chatto and brothers Jack and Luke Patterson. Many of their projects are known for blending elements of both classical and dance music, and featuring guest vocalists.', '1609510079.jpg', '2021-01-01 08:37:59', '2021-01-01 08:37:59', 'clean-bandit', 'Musical group'),
(13, 'The Chainsmokers', 'The Chainsmokers is an American electronic DJ and production duo consisting of Alexander \"Alex\" Pall and Andrew \"Drew\" Taggart. They started out by releasing remixes of songs by indie artists. The EDM-pop duo achieved a breakthrough with their 2014 song \"#Selfie\", which became a top twenty single in several countries.', '1609582587.png', '2021-01-02 04:46:27', '2021-01-02 04:46:27', 'the-chainsmokers', 'Electronic duo'),
(14, 'Maroon 5', 'Maroon 5 is an American pop rock band from Los Angeles, California. It currently consists of lead vocalist Adam Levine, keyboardist and rhythm guitarist Jesse Carmichael, lead guitarist James Valentine, drummer Matt Flynn, keyboardist PJ Morton and bassist Sam Farrar.', '1609582629.jpg', '2021-01-02 04:47:09', '2021-01-02 04:47:09', 'maroon-5', 'Pop Band'),
(15, 'Ed Sheeran', 'Edward Christopher Sheeran MBE is an English singer, songwriter, musician, record producer, actor, and businessman. After first recording music in 2004, he began gaining attention through YouTube. In early 2011, Sheeran independently released the extended play, No. 5 Collaborations Project.', '1609582824.jpg', '2021-01-02 04:50:24', '2021-01-02 04:50:24', 'ed-sheeran', 'Singer-songwriter'),
(16, 'Zayn Malik', 'Zain Javadd Malik, known mononymously as Zayn, is an English singer and songwriter. Born and raised in Bradford, Malik auditioned as a solo contestant for the British music competition The X Factor in 2010.', '1609600654.jpg', '2021-01-02 09:47:34', '2021-01-02 09:47:34', 'zayn-malik', 'Singer-songwriter'),
(17, 'Taylor Swift', 'Taylor Alison Swift is an American singer-songwriter. Her narrative songwriting, which often centers around her personal life, has received widespread critical plaudits and media coverage. Born in West Reading, Pennsylvania, Swift relocated to Nashville, Tennessee in 2004 to pursue a career in country music', '1609600679.jpg', '2021-01-02 09:47:59', '2021-01-02 09:47:59', 'taylor-swift', 'singer');

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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `g_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `g_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hindi', 'hindi', '2020-12-30 10:34:28', '2020-12-30 10:34:28'),
(2, 'English', 'english', '2020-12-30 10:34:55', '2020-12-30 10:34:55'),
(3, 'Classical', 'Classical', '2020-12-31 09:50:27', '2020-12-31 09:50:27'),
(4, 'Hip-Hop', 'Hip-Hop', '2020-12-31 09:50:53', '2020-12-31 09:50:53'),
(5, 'Jazz', 'naa', '2020-12-31 09:51:04', '2020-12-31 09:51:04'),
(6, 'Pop', 'na', '2020-12-31 09:51:13', '2020-12-31 09:51:13'),
(7, 'Rock', 'naa', '2020-12-31 09:51:23', '2020-12-31 09:51:23'),
(8, 'Punjabi', 'naa', '2020-12-31 09:51:35', '2020-12-31 09:51:35');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_12_29_095202_create_sessions_table', 1),
(7, '2020_12_30_145829_create_genres_table', 2),
(8, '2020_12_30_153945_create_artists_table', 2),
(9, '2020_12_30_154235_create_albums_table', 2),
(10, '2020_12_30_154500_create_tracks_table', 2),
(11, '2020_12_31_040627_add_slug_to_artists_table', 3),
(12, '2020_12_31_073051_add_slug_to_tracks_table', 4),
(13, '2020_12_31_171732_add_multi_artist_to_tracks_table', 5),
(15, '2021_01_01_084130_add_occupation_to_artists_table', 6);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('7seas0TbrxUj7q0s4R0WnM9p2L1S8Z8UGagbpmDe', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS25DVmVONERxOVlRbFFOQXVHMkVkT1hoOTVtUVdvcmNITWwyakh5cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM0OiJodHRwOi8vbG9jYWxob3N0L211c2ljL2FydGlzdC9zZWxlbmEtZ29tZXo/aWQ9ZXlKcGRpSTZJbEpqUVZKdU5WaFZjVEZJVVhvNFRGTTVWREoxVlZFOVBTSXNJblpoYkhWbElqb2lMemhHVFd0bFExa3lWVlo0UjI5RVlscGhSakZuZHowOUlpd2liV0ZqSWpvaVlqUXpOREkzWVRJNU5URTVNalU0Tmpnd01tTTJOalZoTldVd09HSm1NREU1WldFMU5EQXhZekpqWmpZNU9Ea3dOR1poT0dWallqWmlOMkZpTVRFeFlTSjkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1609852015),
('Sfclty3OLwDlCoXJ13r7zzPFgZ4f8sUkSOBFlNlB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 Edg/87.0.664.66', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUxzZU1PV0ZxeTg4ZWYyZTRZTm5IaFFsY3FEVWxyZXI4bFI5S2JvZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvbXVzaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1609852112),
('w0hwL4RIQMY4dIh5WyBnUDJDk2aIntALaiWHlXiW', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUFvNmRISkNiZWJUZkxNaHBHZmRocklBTEdtd2pUOVF4UFU0VDNIRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvbXVzaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1609828667);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `song_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED DEFAULT NULL,
  `track_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `multi_artist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `song_title`, `artist_id`, `album_id`, `track_file`, `track_cover`, `created_at`, `updated_at`, `slug`, `genre_id`, `multi_artist`) VALUES
(1, 'Alarm', 1, NULL, '1609389860_alarm.mp3', '1609389860.jpg', '2020-12-30 23:14:20', '2020-12-30 23:14:20', 'alarm', 2, NULL),
(2, 'Beating Heart', 2, NULL, '1609400350_beating-heart.mp3', '1609400350.jpg', '2020-12-31 02:09:10', '2020-12-31 02:09:10', 'beating-heart', 2, NULL),
(3, 'Faded', 4, NULL, '1609429237_faded.mp3', '1609429237.jpg', '2020-12-31 10:10:37', '2020-12-31 10:10:37', 'faded', 2, NULL),
(8, 'Friends', 1, NULL, '1609439723_friends.mp3', '1609439723.jpg', '2020-12-31 13:05:24', '2020-12-31 13:05:24', 'friends', 2, '1,5'),
(9, 'Love Me Like You Do', 2, NULL, '1609477608_love-me-like-you-do.mp3', '1609477608.jpg', '2020-12-31 23:36:48', '2020-12-31 23:36:48', 'love-me-like-you-do', 2, NULL),
(10, 'Ciao Adios', 1, NULL, '1609477746_ciao-adios.mp3', '1609477746.jpg', '2020-12-31 23:39:06', '2020-12-31 23:39:06', 'ciao-adios', 2, NULL),
(11, 'See you Again', 6, NULL, '1609478495_see-you-again.mp3', '1609478495.jpg', '2020-12-31 23:51:35', '2020-12-31 23:51:35', 'see-you-again', 2, '6,7'),
(12, 'Wolves', 8, NULL, '1609491248_wolves.mp3', '1609491248.jpg', '2021-01-01 03:24:08', '2021-01-01 03:24:08', 'wolves', 2, '5,8'),
(13, 'Wishlist', 3, NULL, '1609506335_wishlist.mp3', '1609506335.jpg', '2021-01-01 07:35:35', '2021-01-01 07:35:35', 'wishlist', 1, NULL),
(14, 'Hancock', 3, NULL, '1609506519_hancock.mp3', '1609506519.jpg', '2021-01-01 07:38:39', '2021-01-01 07:38:39', 'hancock', 1, NULL),
(15, 'Channa Mereya', 9, NULL, '1609507256_channa-mereya.mp3', '1609507256.webp', '2021-01-01 07:50:56', '2021-01-01 07:50:56', 'channa-mereya', 1, NULL),
(16, 'Pehli Dafa', 10, NULL, '1609507434_pehli-dafa.mp3', '1609507434.jpg', '2021-01-01 07:53:54', '2021-01-01 07:53:54', 'pehli-dafa', 1, NULL),
(17, 'Agar Tum Sath Hoo', 9, NULL, '1609507543_agar-tum-sath-hoo.mp3', '1609507543.webp', '2021-01-01 07:55:43', '2021-01-01 07:55:43', 'agar-tum-sath-hoo', 1, NULL),
(18, '7 Years Old', 11, NULL, '1609507933_7-years-old.mp3', '1609507933.jpg', '2021-01-01 08:02:14', '2021-01-01 08:02:14', '7-years-old', 2, NULL),
(19, 'Tujhe Meri Yaadien', 3, NULL, '1609508176_tujhe-meri-yaadien.mp3', '1609508176.jpg', '2021-01-01 08:06:16', '2021-01-01 08:06:16', 'tujhe-meri-yaadien', 1, NULL),
(20, 'Attention', 6, NULL, '1609509581_attention.mp3', '1609509581.png', '2021-01-01 08:29:41', '2021-01-01 08:29:41', 'attention', 2, NULL),
(21, 'We don\'t Talk Anymore', 6, NULL, '1609509830_we-dont-talk-anymore.mp3', '1609509830.png', '2021-01-01 08:33:50', '2021-01-01 08:33:50', 'we-dont-talk-anymore', 2, '6,8'),
(22, 'Rockabye', 1, NULL, '1609510132_rockabye.mp3', '1609510132.jpg', '2021-01-01 08:38:52', '2021-01-01 08:38:52', 'rockabye', 2, '1,12'),
(23, '2002', 1, NULL, '1609510513.mp3', '1609510513_2002.jpg', '2021-01-01 08:45:13', '2021-01-01 08:45:13', '2002', 2, NULL),
(24, 'Come Over', 1, NULL, '1609510768_come-over.mp3', '1609510768.png', '2021-01-01 08:49:28', '2021-01-01 08:49:28', 'come-over', 2, NULL),
(25, 'I Don’t Wanna Live Forever', 16, NULL, '1609600818_i-dont-wanna-live-forever.mp3', '1609600818.jpg', '2021-01-02 09:50:18', '2021-01-02 09:50:18', 'i-dont-wanna-live-forever', 2, '16,17'),
(26, 'Willow', 17, NULL, '1609601310_willow.mp3', '1609601310.webp', '2021-01-02 09:58:30', '2021-01-02 09:58:30', 'willow', 2, NULL),
(27, 'Girls Like You', 14, NULL, '1609602797_girls-like-you.mp3', '1609602797.jpg', '2021-01-02 10:23:17', '2021-01-02 10:23:17', 'girls-like-you', 2, NULL),
(28, 'Memories', 14, NULL, '1609602831_memories.mp3', '1609602831.webp', '2021-01-02 10:23:51', '2021-01-02 10:23:51', 'memories', 2, NULL),
(29, 'Takeaway', 13, NULL, '1609728547_takeaway.mp3', '1609728547.jpg', '2021-01-03 21:19:07', '2021-01-03 21:19:07', 'takeaway', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$Q/9472RiacsHbw1/pXUwWe1OT7haAQNPa.k5ZfMZ9KaQ9K0Us81s.', NULL, NULL, 'DFIRYo2xRsyrZKNr6FTQ94DrAlaEuPzz9fz4dmckuJPJKJdUTiZa22Lb1EsA', NULL, NULL, 1, '2020-12-30 11:58:40', '2020-12-30 11:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tracks_artist_id_foreign` (`artist_id`),
  ADD KEY `tracks_album_id_foreign` (`album_id`),
  ADD KEY `tracks_genre_id_foreign` (`genre_id`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `tracks_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `tracks_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `tracks_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
