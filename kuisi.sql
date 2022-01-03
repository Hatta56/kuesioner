-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 05:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama_dosen`, `prodi`, `matkul`, `created_at`, `updated_at`) VALUES
(1, 'Hatta', 'informatika', 'Algoritma', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dosen` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil1` int(11) NOT NULL,
  `hasil2` int(11) NOT NULL,
  `hasil3` int(11) NOT NULL,
  `hasil4` int(11) NOT NULL,
  `hasil5` int(11) NOT NULL,
  `hasil6` int(11) NOT NULL,
  `hasil7` int(11) NOT NULL,
  `hasil8` int(11) NOT NULL,
  `hasil9` int(11) NOT NULL,
  `hasil10` int(11) NOT NULL,
  `hasil11` int(11) NOT NULL,
  `hasil12` int(11) NOT NULL,
  `hasil13` int(11) NOT NULL,
  `hasil14` int(11) NOT NULL,
  `hasil15` int(11) NOT NULL,
  `hasil16` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `id_dosen`, `nama_mahasiswa`, `jurusan`, `npm`, `hasil1`, `hasil2`, `hasil3`, `hasil4`, `hasil5`, `hasil6`, `hasil7`, `hasil8`, `hasil9`, `hasil10`, `hasil11`, `hasil12`, `hasil13`, `hasil14`, `hasil15`, `hasil16`, `created_at`, `updated_at`) VALUES
(1, 1, 'hatta', 'informatika', '232323232', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-12-26 07:03:39', '2020-12-26 07:03:39'),
(2, 1, 'Udin', 'informatika', '433434', 1, 2, 3, 2, 1, 2, 4, 3, 2, 1, 2, 4, 3, 2, 1, 2, '2020-12-26 07:40:56', '2020-12-26 07:40:56'),
(3, 1, 'aji', 'Informatika', '11202019313', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2020-12-26 22:01:06', '2020-12-26 22:01:06'),
(4, 1, 'siswandi', 'informatika', '756', 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 1, 2, 3, 4, 3, 2, '2020-12-26 22:33:15', '2020-12-26 22:33:15'),
(5, 1, 'Udin', 'informatika', '83277349', 4, 4, 4, 4, 4, 3, 4, 2, 4, 3, 4, 3, 4, 3, 4, 4, '2020-12-26 22:51:21', '2020-12-26 22:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `npm`, `nama`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, '201943500056', 'Budiman', 'Informatika', NULL, NULL);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_11_30_143952_create_sysusers_table', 1),
(4, '2020_12_26_062437_create_dosens_table', 1),
(5, '2020_12_26_062528_create_kuesioners_table', 1),
(6, '2020_12_26_062622_create_pertanyaans_table', 1),
(7, '2020_12_26_085515_create_mahasiswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judulpertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `judulpertanyaan`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `created_at`, `updated_at`) VALUES
(1, 'Dosen Menyampaikan Kontrak Perkuliah Kepada Mahasiswa', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(2, 'Dosen Menyampaikan Tujuan Perkuliahan Yang akan dicapai', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(3, 'Dosen Tepat Waktu Dalam mengawali dan Mengakhiri Perkuliahan', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(4, 'Dosen Menggunakan Media/alat pembelajaran dalam setiap pertemuan', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(5, 'Dosen menguasai materi kuliah pada saat mengajar', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(6, 'Dosen Mengguanakan metoda perkuliahan yang bervariasi', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(7, 'Dosen selalu membuka sesi tanya jawab', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(8, 'Dosen memberikan pertemuan tambahan jika mater kurang', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(9, 'Dosen mampu memotivasi siswa agar aktif dalam proses belajar mengajar', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(10, 'Penampilan dosen dalam berpakaian rapi, bersih, dan serasi', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(11, 'Penggunaan bahasa dalam pelaksanaan perkuliahan: jelas, sopan, dan santun', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(12, 'Dosen bersedia melakukan melakukan konsultasi bila mahasiswa kesulitan dalam perkuliahan', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(13, 'Dosen menerima saran dan kritik dari mahasiswa', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(14, 'Soal ujian sesuai dengan materi kuliah yang disampaikan', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(15, 'Dosen obyektif dan transparan dalam memberikan nilai kepada mahasiswa ', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL),
(16, 'jika ada keberatan atas nilai mahasiswa, dosen menerima keberatan tersebut', 'kurang', 'cukup', 'baik', 'sangat baik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sysusers`
--

CREATE TABLE `sysusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sysusers`
--

INSERT INTO `sysusers` (`id`, `uname`, `namalengkap`, `email`, `upass`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$RFrLtXKNHhFQJH3RT.hZ3eRJK.7OpNbPJ/g3jmk4/9YUWrHHXMK1W', NULL, '2020-12-27 06:31:08', '2020-12-27 06:31:08'),
(3, 'Hatta Sugiarto', 'hattasugiarto443@gmail.com', NULL, '$2y$10$J8nneu3qKC2DJNNNfZfGBeoN4W2C5RkOrWXBYVVenDGEb1/rOJN12', NULL, '2020-12-27 08:57:10', '2020-12-27 08:57:10'),
(4, 'ahmad', 'rahayusetya111@gmail.com', NULL, '$2y$10$DvXsf9QWtgzNN9OYKGq92uWe8vEFpK3kpK1s0OJEkBfIo0Aui/ZH.', NULL, '2020-12-27 09:06:16', '2020-12-27 09:06:16'),
(5, 'azi123', 'masajifatwasulaeman@gmail.com', NULL, '$2y$10$faszt8AaQi6j82LEVeLoT.RW9sEdBrRN3.IfNno70ruBmRYB3em5i', NULL, '2020-12-27 09:11:01', '2020-12-27 09:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuesioners_id_dosen_foreign` (`id_dosen`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sysusers`
--
ALTER TABLE `sysusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sysusers_uname_unique` (`uname`);

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
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sysusers`
--
ALTER TABLE `sysusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_id_dosen_foreign` FOREIGN KEY (`id_dosen`) REFERENCES `dosens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
