-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2025 at 06:05 AM
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
-- Database: `porto_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `hobi_1` varchar(255) NOT NULL,
  `hobi_2` varchar(255) NOT NULL,
  `hobi_3` varchar(255) NOT NULL,
  `hobi_4` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `images`, `title`, `description`, `name`, `birthday`, `address`, `zip_code`, `email`, `phone`, `hobi_1`, `hobi_2`, `hobi_3`, `hobi_4`, `created_at`, `updated_at`) VALUES
(1, '1755925360-vektor.png', 'Tentang Saya', 'Saya adalah seorang Junior Web Developer yang memiliki ketertarikan besar dalam membangun dan mengembangkan website. Dengan dasar pengetahuan di bidang HTML, CSS, dan JavaScript, saya terus berusaha meningkatkan kemampuan dalam menggunakan framework modern serta memahami praktik pengembangan web yang baik. Sebagai seorang pemula yang antusias, saya senang mempelajari hal-hal baru, menyelesaikan tantangan teknis, serta berkontribusi dalam pembuatan solusi digital yang bermanfaat dan user-friendly.', 'Faris Luthfi Razzaq', '1999-03-31', 'Cipinang Asem No. 10, RT 13, RW 09, Kelurahan Kebon Pala, Kecamatan Makasar, Jakarta Timur                                                                                                                                                                     ', 13650, 'aisupi31@gmail.com', '089694573497', 'Olahraga', 'Membaca', 'Makan', 'Ngoding', '2025-08-18 07:18:50', '2025-08-24 03:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `images`, `title`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1756090331-5a741d15-6014-46b9-a55d-c79b85d8a752.png', 'Junior Web Development', 'Saya adalah seorang Junior Web Developer yang memiliki ketertarikan besar dalam membangun dan mengembangkan website. Dengan dasar pengetahuan di bidang HTML, CSS, dan JavaScript', 1, '2025-08-17 19:16:09', '2025-08-25 02:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mini_content` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `images` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatead_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `id_kategori`, `title`, `mini_content`, `content`, `penulis`, `is_active`, `images`, `tags`, `created_at`, `updatead_at`) VALUES
(3, 8, 'Pemprov DKI Kaji Bangun Underpass atau Flyover Atasi Macet di TB Simatupang ', '<p><b>Jakarta - </b>Pemerintah Provinsi (Pemprov) DKI Jakarta menggelar rapat terbatas membahas solusi kemacetan imbas proyek galian di Jalan TB Simatupang, Jakarta Selatan. Pemprov sudah meminta proyek galian dikebut hingga mengalihfungsikan trotoar untu', '<p>Jakarta - Pemerintah Provinsi (Pemprov) DKI Jakarta menggelar rapat terbatas membahas solusi kemacetan imbas proyek galian di Jalan TB Simatupang, Jakarta Selatan. Pemprov sudah meminta proyek galian dikebut hingga mengalihfungsikan trotoar untuk mengurai macet.</p><p>\"Bapak Gubernur Pramono Anung menggelar rapat terbatas guna mendapatkan laporan lapangan yang lengkap, merumuskan solusi, sekaligus memberikan instruksi,\" ujar Yustinus di Jakarta, pada Sabtu (23/8). \"Beliau telah mengarahkan beberapa langkah yang akan segera ditindaklanjuti.\" ujar Koordinator Staff Khusus Gubernur dan Wakil Gubernur Jakarta Yustinus Prastowo dalam keterangan, Minggu (24/8/2025).</p><p>Prastowo menerangkan Gubernur Jakarta Pramono Anung menyiapkan upaya jangka pendek dan panjang. Upaya ini mulai dari mempercepat pengerjaan hingga mengkaji pembangunan underpass atau jalan layang di TB Simatupang.<br style=\"\"><br style=\"\">Pertama, Pemprov DKI akan mengevaluasi menyeluruh terhadap proyek galian yang tengah berlangsung, yaitu proyek IPALD Perumda Paljaya sepanjang 7 km di Cilandak serta proyek perpipaan Rusun Tanjung Barat sepanjang 4 km. Kedua proyek ini ditargetkan rampung pada Oktober dan November 2025.</p><p>\"PAM Jaya dan Paljaya diinstruksikan mempercepat pekerjaan dengan sistem 24 jam non-stop, memperpendek pagar proyek, menempatkan flagman, dan langkah teknis lainnya,\" ujar Prastowo.<br style=\"\"><br style=\"\">Pemprov juga akan berkoordinasi dengan Pemerintah Pusat guna mengatur buka-tutup pintu masuk atau keluar tol pada jam sibuk demi mengurangi penumpukan kendaraan. Lalu juga akan memanfaatkan area yang masih tersedia sebagai halte atau parkir sementara agar kendaraan umum tidak menumpuk di pinggir jalan saat menaikkan dan menurunkan penumpang.<br style=\"\"><br style=\"\">\"Menggunakan sementara trotoar di area terdampak proyek untuk memperlebar ruas jalan, terutama di titik penyempitan (bottleneck), mengingat trotoar di lokasi tersebut saat ini belum dapat digunakan pejalan kaki,\" jelasnya.<br style=\"\"><br style=\"\">Lalu, Pemprov DKI akan memperkuat koordinasi lapangan bersama Polri, Dinas Perhubungan, Satpol PP, MRT Jakarta, hingga Transjakarta. Termasuk bekerja sama dengan Google dan platform navigasi lain untuk menampilkan informasi terkini soal proyek yang berlangsung, sekaligus memberikan rute alternatif bagi pengguna jalan.<br style=\"\"><br style=\"\">\"Solusi jangka menengah mengkaji pembangunan underpass atau flyover di perempatan besar sepanjang Jalan TB Simatupang untuk mengendalikan arus lalu lintas,\" ucapnya.<br style=\"\"><br style=\"\">Untuk itu, Yustinus berharap berharap langkah-langkah ini dapat segera mengurai kemacetan dan memberikan kenyamanan bagi pengguna jalan di kawasan TB Simatupang. Dia pun memohon maaf atas kemacetan yang terjadi di kawasan TB Simatupang.<br style=\"\"><br style=\"\">\"Kepada warga Jakarta, kami mohon maaf atas ketidaknyamanan yang terjadi. Kami juga mengimbau masyarakat untuk beralih ke transportasi umum agar volume kendaraan di jalan dapat berkurang,\" kata dia.<br></p>', 'Admin', 0, '1756027618-macet.jpeg', '[{\"value\":\"pemrovdki\"},{\"value\":\"jabodetabek\"},{\"value\":\"tb simatupang\"}]', '2025-08-24 09:26:58', '2025-08-24 14:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'IT', 'porto', '2025-08-19 13:45:45', '2025-08-19 15:45:35'),
(2, 'BISNIS', 'web', '2025-08-19 13:45:54', '2025-08-19 15:44:06'),
(3, 'WEB DEVELOPMENT', 'web', '2025-08-19 13:46:07', '2025-08-19 15:43:59'),
(4, 'jiejsfiojfijsoigrdg', 'porto', '2025-08-19 15:45:56', NULL),
(5, 'fesfefdrgg', 'Apps', '2025-08-19 15:46:08', NULL),
(6, 'fesfdgrgdrg', 'Apps', '2025-08-19 15:46:17', NULL),
(7, 'Bisnis', 'Blog', '2025-08-19 15:47:15', '2025-08-24 07:32:57'),
(8, 'Berita', 'Blog', '2025-08-19 15:47:23', '2025-08-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title_edu` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mulai_tahun` date NOT NULL,
  `akhir_tahun` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title_edu`, `sekolah`, `description`, `mulai_tahun`, `akhir_tahun`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Multimedia', 'SMK PGRI 1 Jakarta', '<p>Belajar photografi, belajar editing, belajar coding</p>', '2014-02-05', '2017-03-15', 0, '2025-08-24 20:28:41', '2025-08-24 22:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title_exp` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `awal_tahun` varchar(255) NOT NULL,
  `akhir_tahun` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title_exp`, `perusahaan`, `description`, `awal_tahun`, `akhir_tahun`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'INTERNSHIP as IT SUPPORT', 'Taman Mini Indonesia Indah', '<ul><li>Membantu masalah jaringan LAN yang terkendala, seperti server down, tidak terhubung ke perangkat.</li><li>Mempromosikan Dunia Air Tawar ini kepada pengunjung Taman Mini Indonesia Indah dengan cara membagikan brosur pada pintu masuk Taman Mini Indo', '2020-11-01', '2020-12-31', 0, '2025-08-24 22:42:00', '2025-08-24 22:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_pengguna`
--

CREATE TABLE `pesan_pengguna` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan_pengguna`
--

INSERT INTO `pesan_pengguna` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `update_at`) VALUES
(1, 'duar', 'duar@gmail.com', 'djawjopj', 'efesgdtthyjuj', '2025-08-25 00:26:12', '2025-08-25 02:26:01'),
(2, 'Faris Luthfi Razzaq', 'ais@gmai.com', 'jajpo', 'addawdawdawdawd', '2025-08-25 00:26:26', '2025-08-25 02:24:59'),
(3, 'Fadil', 'fadil@gmail.com', 'Test', 'Dicoba coba terrus sampe puyeng', '2025-08-25 02:28:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadate_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `images`, `link`, `created_at`, `upadate_at`) VALUES
(1, 'Tailwind', 'Web Development', '1756014108-tailwinf.png', 'https://portofolio-tailwind-css-pink.vercel.app/', '2025-08-24 05:41:48', '2025-08-24 06:30:22'),
(2, 'Belajar Templating Bootstrap 5', 'Web Development', '1756017803-nextcent.png', 'https://belajar-bootstrap-xi.vercel.app/', '2025-08-24 06:43:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `email`, `phone`, `address`, `facebook`, `twitter`, `instagram`, `linkedin`, `github`, `created_at`, `updated_at`) VALUES
(1, '1755924409-logo2.png', 'admin@gmail.com', '085817596096', 'Cipinang Asem No. 10, RT 13 / RW 09, Kelurahan Kebon Pala, Kecamatan Makasa, Jakarta Timur                                                                                                                                                                     ', 'hhtps://facebook.com/', 'hhtps://x.com/', 'hhtps://instagram.com/', 'hhtps://linkedin.com/', 'https://github.com/Faris31/', '2025-08-17 21:31:21', '2025-08-23 05:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `skill_hard`
--

CREATE TABLE `skill_hard` (
  `id` int(11) NOT NULL,
  `title` int(255) NOT NULL,
  `persentase` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill_soft`
--

CREATE TABLE `skill_soft` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `persentase` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_soft`
--

INSERT INTO `skill_soft` (`id`, `title`, `persentase`, `created_at`, `update_at`) VALUES
(1, 'Tailwind', 68, '2025-08-19 11:13:16', '2025-08-25 01:53:39'),
(2, 'Bootstrap', 82, '2025-08-19 11:16:00', '2025-08-25 01:53:29'),
(3, 'CSS', 63, '2025-08-19 11:20:14', '2025-08-25 01:53:21'),
(4, 'HTML', 24, '2025-08-19 11:22:57', '2025-08-25 01:53:16'),
(5, 'JavaScript', 47, '2025-08-25 01:53:52', NULL),
(6, 'Laravel', 14, '2025-08-25 01:54:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin213', 'admin12@gmail.com', '123', '2025-08-16 04:48:28', '2025-08-17 18:12:52'),
(3, 'Admin', 'admin@gmail.com', '123', '2025-08-17 19:11:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
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
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_pengguna`
--
ALTER TABLE `pesan_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_hard`
--
ALTER TABLE `skill_hard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_soft`
--
ALTER TABLE `skill_soft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan_pengguna`
--
ALTER TABLE `pesan_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill_hard`
--
ALTER TABLE `skill_hard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill_soft`
--
ALTER TABLE `skill_soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
