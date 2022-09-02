-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2021 pada 03.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_disperdagin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `nama`, `tanggal`, `waktu`, `tempat`, `pelaksana`, `created_at`, `updated_at`) VALUES
(17, 'HALAL', '2021-10-07', '09.00 - 16.00 WIB', 'Aula DISPERDAGIN Kab. Cirebon', 'Bidang Industri', '2021-10-07 01:33:29', '2021-10-07 01:33:29'),
(18, 'ACC', '2021-10-07', '09.00 - 16.00 WIB', 'Aula DISPERDAGIN Kab. Cirebon', 'Bidang Industri', '2021-10-07 01:34:36', '2021-10-07 01:34:36'),
(19, 'CIC', '2021-10-08', '09.00 - 16.00 WIB', 'Malioboro, Yogyakarta', 'Bidang Industri', '2021-10-07 01:35:35', '2021-10-07 01:35:35'),
(20, 'Pelatihan Desain Produk Industri Kreatif', '2021-10-08', '09.00 - 16.00 WIB', 'Hotel Patra Cirebon', 'Bidang Industri', '2021-10-07 01:36:23', '2021-10-07 01:36:23'),
(21, 'Sekolah Pasar', '2021-10-08', '09.00 - 16.00 WIB', 'Pasar Sumber, Cirebon', 'Bidang Pasar', '2021-10-07 01:37:21', '2021-10-07 01:37:21'),
(22, 'Pasar Sehat', '2021-10-07', '09.00 - 16.00 WIB', 'Ciledug, Cirebon', 'Bidang Pasar', '2021-10-07 01:37:59', '2021-10-07 01:37:59'),
(23, 'Penerapan E-Retribusi', '2021-10-07', '09.00 - 16.00 WIB', 'Babakan, Cirebon', 'Bidang Pasar', '2021-10-07 01:38:44', '2021-10-07 01:38:44'),
(24, 'Pameran Perdagangan', '2021-11-09', '09.00 - 16.00 WIB', 'Pekalongan, Jawa Tengah', 'Bidang Perdagangan', '2021-10-07 01:40:55', '2021-11-08 01:07:23'),
(25, 'Sosialisasi Kebijakan Penyederhanaan Prosedur dan Dokumen Ekspor dan Impor', '2021-11-09', '09.00 - 16.00 WIB', 'Pasar Kalitanjung, Cirebon', 'Bidang Perdagangan', '2021-10-07 02:05:45', '2021-11-08 01:07:04'),
(26, 'Sosialisasi Operasionalisasi dan Pengembangan UPT Kemetrologian Daerah', '2021-11-09', '09.00 - 16.00 WIB', 'Pasar Caplek, Bode, Cirebon', 'Bidang Metrologi', '2021-10-07 02:21:00', '2021-11-08 01:06:49'),
(27, 'Pembinaan dan Pengembangan SDM Pasar', '2021-11-09', '09.00 - 16.00 WIB', 'Pasar Pasalaran, Plered, Cirebon', 'Bidang Pasar', '2021-10-07 02:22:51', '2021-11-08 01:06:34'),
(28, 'Pembinaan Kemampuan Teknologi Industri', '2021-11-09', '09.00 - 16.00 WIB', 'Hotel Aston, Kedawung, Cirebon', 'Bidang Industri', '2021-10-07 02:25:08', '2021-11-08 01:06:18'),
(29, 'Jum\'at Bersih', '2021-11-09', '09.00 - 11.00 WIB', 'Dinas Perdagangan dan Perindustrian Kab. Cirebon', 'Seluruh Bidang', '2021-10-07 08:13:23', '2021-11-08 01:06:02'),
(40, 'Test Now', '2021-11-08', '09.00 - 09.30 WIB', 'Aula DISPERDAGIN Kab. Cirebon', 'Bidang Perdagangan', '2021-10-14 03:24:08', '2021-11-08 01:05:48'),
(41, 'Test Tomorrow', '2021-11-08', '09.00 - 09.30 WIB', 'pt rotan', 'bidang sarana dan pelaku distribusi', '2021-10-14 03:24:33', '2021-11-08 01:05:34'),
(42, 'Sosialisasi Kebijakan Penyederhanaan Prosedur dan Dokumen Ekspor dan Impor ulili', '2021-11-08', '09.00 - 09.30 WIB', 'Aula DISPERDAGIN Kab. Cirebon', 'Bidang Perdagangan', '2021-10-14 03:39:28', '2021-11-08 01:05:19'),
(43, 'makan', '2021-11-08', '12.00 - 13.00', 'warung makan', 'sekertariat', '2021-11-05 02:49:51', '2021-11-08 01:05:03'),
(44, 'rapat koordinasi', '2021-11-08', '13.00 - 14.00', 'Aula DISPERDAGIN Kab. Cirebon', 'sekertariat', '2021-11-05 02:50:49', '2021-11-08 01:04:47'),
(45, 'pulang bersama', '2021-11-08', '15.30 - 16.00', 'rumah masing - masing', 'seluruh staf', '2021-11-05 02:51:52', '2021-11-08 01:04:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_024211_create_agendas_table', 2),
(5, '2021_07_22_030518_create_agenda_table', 3),
(6, '2021_07_22_030810_create_agenda_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arul Rachman', 'arulrachmanfaruqhy@gmail.com', NULL, '$2y$10$B86ovdf.x2Ph9xQIwuIRme9qgXQV9JuFIEkZypq0x7GHYU7h2MxIq', NULL, '2021-07-28 19:43:22', '2021-07-28 19:43:22'),
(2, 'admin ganteng', 'admin@gmail.com', NULL, 'admin123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
