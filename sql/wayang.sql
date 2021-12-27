-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2021 pada 04.03
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayang`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `table_blog`
--

CREATE TABLE `table_blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `tahun_penerbit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_blog`
--

INSERT INTO `table_blog` (`id_blog`, `judul`, `isi`, `penulis`, `updated_at`, `created_at`, `tahun_penerbit`) VALUES
(24, 'Makin Kece', 'h', 'FIM', '2021-09-17 07:49:35', NULL, '2018-09-08'),
(29, 'Seni Patung Adiluhung Buah Tangan Wow Ipits', 'Patung mbis dibuat sebagai perlambang adanya sosok nenek moyang dalam kehidupan sehari-hari mereka. Masyarakat Suku Asmat percaya bahwa orang yang sudah meninggal mampu ditemukan kembali di dalam bentuk patung mbis. Karenanya, setiap patung mbis yang dibuat diberi nama sesuai dengan nama orang yang telah meninggal. Tapi, tidak semua orang yang sudah meninggal dibuatkan patung mbis. Hanya orang tertentu yang dibuatkan patung mbis.  Pembuatan patung yang terbuat dari kayu bakau ini melewati proses yang panjang. Awalnya, kaum pria Suku Asmat berkumpul. Sambil berteriak yang membuat suasana jadi hiruk pikuk, mereka merubuhkan pohon bakau. Setelah rubuh, batang pohon bakau dibersihkan dari ranting-ranting dan kulitnya dikupas. Batang pohon bakau lalu dilumuri cairan berwarna merah – yang bahannya juga dari pohon bakau. Selesai dilumuri cairan merah, batang pohon bakau dibawa ke desa.  Konon, masyarakat Suku Asmat percaya bahwa batang pohon bakau merupakan perwujudan tubuh nenek moyang. Sementara, cairan merah yang', 'Lifestyle blogger Nina Fajriah', NULL, NULL, '2021-09-15'),
(32, 'n', 'k', 'k', NULL, NULL, '2021-09-15'),
(33, 'n', 'k', 'k', NULL, NULL, '2021-09-15'),
(34, 'Rekomendasi tas rotan terbaik', 'Sling ba rotan berbentuk bulat ini bisa dibilang adalah salah satu produk yang paling banyak diburu. Desainnya yang polos sangat mudah dipadukan dengan berbagai macam outfit. Anda bisa tampil bergaya bohemian dengan produk ini. Tas ini bahkan cocok saat Anda hanya menggunakan celana jeans, kaos, serta sandal jepit. Anda bisa mengenakannya saat main ke pantai atau city tour.  Jenis tas Sling bag Jenis tali Kulit Ukuran Diameter 20 cm Bahan Rotan', 'Lifestyle blogger Nina Fajriah', NULL, NULL, '2021-09-07'),
(35, 'Rekomendasi tas rotan terbaik', 'Sling ba rotan berbentuk bulat ini bisa dibilang adalah salah satu produk yang paling banyak diburu. Desainnya yang polos sangat mudah dipadukan dengan berbagai macam outfit. Anda bisa tampil bergaya bohemian dengan produk ini. Tas ini bahkan cocok saat Anda hanya menggunakan celana jeans, kaos, serta sandal jepit. Anda bisa mengenakannya saat main ke pantai atau city tour.  Jenis tas Sling bag Jenis tali Kulit Ukuran Diameter 20 cm Bahan Rotan', 'Lifestyle blogger Nina Fajriah', NULL, NULL, '2021-09-07'),
(36, 'Rekomendasi tas rotan terbaik', 'Sling ba rotan berbentuk bulat ini bisa dibilang adalah salah satu produk yang paling banyak diburu. Desainnya yang polos sangat mudah dipadukan dengan berbagai macam outfit. Anda bisa tampil bergaya bohemian dengan produk ini. Tas ini bahkan cocok saat Anda hanya menggunakan celana jeans, kaos, serta sandal jepit. Anda bisa mengenakannya saat main ke pantai atau city tour.  Jenis tas Sling bag Jenis tali Kulit Ukuran Diameter 20 cm Bahan Rotan', 'Lifestyle blogger Nina Fajriah', NULL, NULL, '2021-09-07'),
(37, 'Rekomendasi tas rotan terbaik', 'Sling ba rotan berbentuk bulat ini bisa dibilang adalah salah satu produk yang paling banyak diburu. Desainnya yang polos sangat mudah dipadukan dengan berbagai macam outfit. Anda bisa tampil bergaya bohemian dengan produk ini. Tas ini bahkan cocok saat Anda hanya menggunakan celana jeans, kaos, serta sandal jepit. Anda bisa mengenakannya saat main ke pantai atau city tour.  Jenis tas Sling bag Jenis tali Kulit Ukuran Diameter 20 cm Bahan Rotan', 'Lifestyle blogger Nina Fajriah', NULL, NULL, '2021-09-07'),
(40, 'k', 'k', 'k', NULL, NULL, '2021-09-07'),
(41, 'a', 'a', 'a', NULL, NULL, '2021-09-07'),
(42, 'a', 'aa', 'a', NULL, NULL, '2021-09-07'),
(43, 'a', 'aa', 'a', NULL, NULL, '2021-09-07'),
(44, 'a', 'aa', 'a', NULL, NULL, '2021-09-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_category`
--

CREATE TABLE `table_category` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_category`
--

INSERT INTO `table_category` (`id_kategori`, `nama`, `updated_at`, `created_at`) VALUES
(2, 'Decoration', NULL, NULL),
(3, 'Statue', NULL, NULL),
(15, 'Mackrame', '2021-09-15 02:26:54', '2021-09-15 02:26:54'),
(16, 'Storage', '2021-09-15 02:27:24', '2021-09-15 02:27:24'),
(17, 'Bag', '2021-09-15 02:27:34', '2021-09-15 02:27:34'),
(18, 'Kain Batik', '2021-09-15 02:27:57', '2021-09-15 02:27:57'),
(19, 'Kain Tenun', '2021-09-15 02:28:18', '2021-09-15 02:28:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_contact`
--

CREATE TABLE `table_contact` (
  `id_contact` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_gambar`
--

CREATE TABLE `table_gambar` (
  `id_gambar_product` int(11) NOT NULL,
  `nama_file` text NOT NULL,
  `deskripsi` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_gambar`
--

INSERT INTO `table_gambar` (`id_gambar_product`, `nama_file`, `deskripsi`, `id_product`, `created_at`, `updated_at`) VALUES
(3, '1DO85xifwxByzXspjAIZVmRwgC0PAR9FCCp7Oogw.png', '', 34, '2021-09-02 00:00:40', '2021-09-02 00:00:40'),
(4, 'JAFrumkSwtmSmIxIqeGa9rb14eAyBQNRJCaf6nPE.png', '', 36, '2021-09-02 00:17:19', '2021-09-02 00:17:19'),
(5, 'guUHf6faTnKhCngi7oWNqDtHcEhtq0Xq4OgVwDbs.png', '', 36, '2021-09-02 00:17:19', '2021-09-02 00:17:19'),
(6, 'uzHdiMNxY9F6fP6heuny4ZD0JoiSrrkcrrNOcbQ5.png', '', 36, '2021-09-02 00:17:19', '2021-09-02 00:17:19'),
(7, 'mVYxqN6v16JDdIVsQD5Zv9OltyCCNLUbN0clKroq.png', '', 36, '2021-09-02 00:17:19', '2021-09-02 00:17:19'),
(8, 'kHwOm7533SP5kYOwl1upshIwNMXLDr51ieL5ZsqU.jpg', '', 37, '2021-09-02 00:29:55', '2021-09-02 00:29:55'),
(9, 'GwEZTRVr3zXC6UmMkugE0MwShUsLQWEcjWGTJsoU.jpg', '', 37, '2021-09-02 00:29:55', '2021-09-02 00:29:55'),
(10, '3UIipmAxxKGXvzl9PxEosyTKB50vFuWq4Vx9Iupi.jpg', '', 37, '2021-09-02 00:29:55', '2021-09-02 00:29:55'),
(11, 'P00iLSQbiiGUm78V4qxApeu4UJSy7kVJOeeKbSZx.jpg', '', 37, '2021-09-02 00:29:55', '2021-09-02 00:29:55'),
(12, 'imLJtibSrtJLgdxPhXxAeo9f5ktRRSWdfmAqIOq1.jpg', '', 38, '2021-09-02 02:19:07', '2021-09-02 02:19:07'),
(13, 'ZK6LU390zzCPdsJ4EnJWZsK6QviwPc3OxV3WLK5h.jpg', '', 39, '2021-09-02 20:46:27', '2021-09-02 20:46:27'),
(14, 'l3cxyRWi2szB10fZ72i6LJFKWKZjGddkWTpl5bFH.jpg', '', 39, '2021-09-02 20:46:27', '2021-09-02 20:46:27'),
(15, 'srf8FzNgXCh42DmSyaU1LvyjymmR8i9dWjGhs3DT.jpg', '', 39, '2021-09-02 20:46:27', '2021-09-02 20:46:27'),
(16, 'eIiJ0AXH3W4tFnXtDlPZq2SvXtlIXnMoqTIOuq0K.jpg', '', 39, '2021-09-02 20:46:27', '2021-09-02 20:46:27'),
(17, 'BMfXTfxmSCfnPKmrcbWkNpqwTwd6aI98miNAbhc7.jpg', '', 40, '2021-09-02 20:57:29', '2021-09-02 20:57:29'),
(18, 'TQoenV4E9pMiqiPyV5x6boeZBY6e6lembr2wpDIk.jpg', '', 40, '2021-09-02 20:57:29', '2021-09-02 20:57:29'),
(19, 'JWBr5hgBQh6VhJTll87gjd9rNSUCwlIVrUn5EITl.jpg', '', 40, '2021-09-02 20:57:30', '2021-09-02 20:57:30'),
(20, 'wj0Tf0cQAuiDfZ12M3RdakFnyOPD43gnJH1pgpfx.jpg', '', 41, '2021-09-03 00:24:49', '2021-09-03 00:24:49'),
(21, 'hMAldu3pa1FOHW78eJeT0Wuyzg93lqyPZZ77ArTU.jpg', '', 41, '2021-09-03 00:24:49', '2021-09-03 00:24:49'),
(22, 'HJ98ZibKrdVTywr18G3EQ7xTWRLwL81qzjmxpdn3.jpg', '', 42, '2021-09-03 19:54:32', '2021-09-03 19:54:32'),
(23, 'zCQsAHojtJskm8A1Oekw903LfC12KnfS6UWb1ESv.jpg', '', 42, '2021-09-03 19:54:32', '2021-09-03 19:54:32'),
(24, 'dI8v9hPtmhdaPMenoI3A83EWFnkcOEa4fopqJCLc.jpg', '', 42, '2021-09-03 19:54:32', '2021-09-03 19:54:32'),
(25, 'BmlAseKIA7DCltkbF8VJ7EVC6bq3IU2yIT9Mx1uE.jpg', '', 42, '2021-09-03 19:54:32', '2021-09-03 19:54:32'),
(26, '9yEf8Rxlg46Vug6iYLtTAHGKVhQiiMLCVdZs6sK2.jpg', '', 43, '2021-09-12 05:35:03', '2021-09-12 05:35:03'),
(27, 'XRGZuIGrZgqqy0jwnjzJcsZc5uZQkM750ZXWdB30.jpg', '', 44, '2021-09-15 01:28:37', '2021-09-15 01:28:37'),
(28, 'uqOU2zXigRZt8p2fEtMQBe2NiaOycI89NBoGKGMw.jpg', '', 44, '2021-09-15 01:28:37', '2021-09-15 01:28:37'),
(29, '3vp3ZY3D5cBQ8YbyGWfrr1UJ88SyvwuT8MjLoSjQ.jpg', '', 45, '2021-09-15 01:31:53', '2021-09-15 01:31:53'),
(30, 'hsXGcNZyAoRZ75JZXECaDdzhu6TXSMrScrL6bffZ.jpg', '', 45, '2021-09-15 01:31:53', '2021-09-15 01:31:53'),
(31, '6w9CdWNXDD41JqL5TTLQftayNtvYILjgMKGZlBdU.jpg', '', 46, '2021-09-15 01:35:28', '2021-09-15 01:35:28'),
(32, 'TQosn1CWFdQ0EmyyaE3DQzeRVWo5RV7DuXjaGC1q.jpg', '', 46, '2021-09-15 01:35:28', '2021-09-15 01:35:28'),
(33, 'LKr4dTYESOD7f6VHJLKslYCmrUGODUiE7O7uqy04.png', '', 46, '2021-09-15 01:35:28', '2021-09-15 01:35:28'),
(34, 'lalZZ4FcwPwL7P9bFvZFvv6wMLrbypLoGtVxStY6.jpg', '', 47, '2021-09-15 01:39:04', '2021-09-15 01:39:04'),
(35, 'KKLq3M9ZAEpVmH0TUzFGrtdXxx3NbZCs8dwg9J77.webp', '', 47, '2021-09-15 01:39:04', '2021-09-15 01:39:04'),
(36, 'rRswUjiB4Gg7ZGyDF87ktkkerpKFmVtSqPYbZJCD.jpg', '', 47, '2021-09-15 01:39:04', '2021-09-15 01:39:04'),
(37, '47lu0uUe10kvet8we3jUz5Fkv8MI5GHjGSjHJxLq.jpg', '', 48, '2021-09-15 01:41:53', '2021-09-15 01:41:53'),
(38, 'IZCdHXdV3ZdYSv9OfmTFaWgqI4Onvr8TvjQoJ7FT.jpg', '', 48, '2021-09-15 01:41:53', '2021-09-15 01:41:53'),
(39, 'tPR0zqvlxtncyndeWulSKgIzi1kNxVAdmoffvbMB.jpg', '', 49, '2021-09-15 01:42:55', '2021-09-15 01:42:55'),
(40, 'TPenlSxVo370XhKDIAlTmgByWrcbsy4fTMjXoarE.jpg', '', 49, '2021-09-15 01:42:55', '2021-09-15 01:42:55'),
(41, 'q5XnbuhEmfvxv7xv7vX4fdhQL8IejqJ8751n05Jz.jpg', '', 50, '2021-09-15 01:45:53', '2021-09-15 01:45:53'),
(42, '7gobNjp06VDAYmDIcHtmBOg4nH1IsxZeCdSVJDis.png', '', 50, '2021-09-15 01:45:53', '2021-09-15 01:45:53'),
(43, 'Hz64Ju5FBsLmvMUN59oxsINkjMdmToYAWINrcGCe.jpg', '', 51, '2021-09-15 01:47:59', '2021-09-15 01:47:59'),
(44, '2w5qTcoGnbr6AGn5XdPpUG1oxSYyQ2NdxyFNv6z0.jpg', '', 51, '2021-09-15 01:47:59', '2021-09-15 01:47:59'),
(45, 'txHRyG0mfZmaI3hrciMaDTczAxPba5C47zS93gjg.jpg', '', 51, '2021-09-15 01:47:59', '2021-09-15 01:47:59'),
(46, 'OiXL6gdMT9VNCv2ImoFgIt1UrAkZgOBPP5iVqAqU.jpg', '', 52, '2021-09-17 06:49:25', '2021-09-17 06:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_gambar_blog`
--

CREATE TABLE `table_gambar_blog` (
  `id_gambar_blog` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_blog` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_gambar_blog`
--

INSERT INTO `table_gambar_blog` (`id_gambar_blog`, `nama_file`, `deskripsi`, `id_blog`, `updated_at`, `created_at`) VALUES
(7, '9mfjFM4XwkW6olq2xVm9wToRzBVrtT8Je3Zot6Ca.jpg', '', 37, '2021-09-17 06:23:28', '2021-09-17 06:23:28'),
(8, 'yn7sHIBdmudaPLPz3zV4h44q0pBbpYQe1sB14TMT.jpg', '', 38, '2021-09-17 06:24:15', '2021-09-17 06:24:15'),
(9, 'sowxVw4tPEe2I9lTkJG9pCLEpegPkS82w6oMnTd6.jpg', '', 40, '2021-09-17 06:27:17', '2021-09-17 06:27:17'),
(10, 'JLEQs7PpirIp6jIyjLdCFBMMDduzN7cfTJLsL3BU.jpg', '', 40, '2021-09-17 06:27:17', '2021-09-17 06:27:17'),
(11, 'BWN8EA4RldNT69tfeDtHpeacp7rMdhYMKPbm8owk.jpg', '', 41, '2021-09-17 06:27:51', '2021-09-17 06:27:51'),
(12, 'S9o1UtOHJqUHOBP7HpbTZrYgmQnyke3Nz6gGp3ej.jpg', '', 41, '2021-09-17 06:27:51', '2021-09-17 06:27:51'),
(13, 'LYi104J0zSj7cEQjAwSJHQkGyVBnRMS3LkVLFPJy.jpg', '', 44, '2021-09-17 06:29:11', '2021-09-17 06:29:11'),
(14, '2RVz4UmcZx9074hxKtt26xXxMxzhEXDdvRNthsJq.jpg', '', 44, '2021-09-17 06:29:11', '2021-09-17 06:29:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_product`
--

CREATE TABLE `table_product` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_product`
--

INSERT INTO `table_product` (`id_product`, `nama`, `deskripsi`, `id_kategori`, `created_at`, `updated_at`) VALUES
(39, 'Tas Rotan Berbentuk Setengah Lingkaran', 'Berbeda dari bentuk sebelumnya, model tas yang satu ini memiliki bentuk setengah lingkaran. Ukurannya 20 cm dan memiliki desain agak renggang daripada jenis tas rotan yang lainnya.  Model tas rotan bulat ini unik dan terlihat klasik yang hadir dengan  warna  coklat natural.', 1, '2021-09-02 20:46:27', '2021-09-02 20:46:27'),
(40, 'Kap lampu Rotan', 'Kehebatan rotan bukan hanya terletak dari sifat-sifatnya yang lentur, kuat dan mudah dibentuk. Material ini juga tergolong sebagai bahan dasar yang cukup murah dengan estetika ala tropis yang menggoda. Produk dari material ini mudah beradaptasi dengan lingkungan sekitar, sehingga menjadikannya mudah diaplikasikan baik di bagian outdoor ataupun indoor rumah.', 2, '2021-09-02 20:57:29', '2021-09-02 20:57:29'),
(42, 'Kain Tenun Sikek', 'Songket adalah kain tenun yang dibuat dengan teknik menambah benang pakan sebagai hiasan, yaitu dengan menyisipkan benang perak, emas atau benang warna di atas benang lungsin. Tenun ini memiliki berbagai motif, seperti: lepus, jando beraes, bunga inten, tretes midar, pulir biru, kembang suku hijau, bungo cino, bunga pacik, dan lain-lain.', 2, '2021-09-03 19:54:31', '2021-09-03 19:54:31'),
(44, 'Ukiran Yogyakarta', 'ukiran motif kehidupan sehari-hari', 2, '2021-09-15 08:29:05', '2021-09-15 01:29:05'),
(45, 'Macrame', 'Makrame adalah kesenian membuat anyaman simpul berbahan kain atau tali. Karena sifatnya yang dekoratif, makrame dapat digunakan sebagai pajangan rumah atau, dalam ukuran yang lebih kecil, sebagai aksesori busana', 2, '2021-09-15 01:31:52', '2021-09-15 01:31:52'),
(46, 'Kerajinan Tempurung Kelapa', 'Berbagai kerajinan dari limbah tempurung kelapa seperti tas, celengan, lampu tidur, teko air, gelas, centong, piring, asbak, mangkok dan lampu hias', 2, '2021-09-15 01:35:28', '2021-09-15 01:35:28'),
(47, 'Patung ukir Suku Asmat', 'Seni ukir Asmat merupakan ritual religiusitas terhadap arwah nenek moyang yang disimbolkan dalam bentuk patung serta ukiran kayu', 2, '2021-09-15 01:39:04', '2021-09-15 01:39:04'),
(48, 'Keris', 'Srnjata Tradisional pulau jawa, digunakan pada masa kerajaan dalam medan perang', 2, '2021-09-15 01:41:52', '2021-09-15 01:41:52'),
(49, 'Ukir Topeng', 'Ukir topeng indonesia', 2, '2021-09-15 01:42:55', '2021-09-15 01:42:55'),
(50, 'Patung ukir Perunggu', 'Seni ukir tradisional indonesia menggambarkan mitologi, kerajaan, dan bagian interior zaman kerajaan padatahun masehi', 2, '2021-09-15 01:45:52', '2021-09-15 01:45:52'),
(51, 'Wayang Mantradeva', 'Penggambaran tokoh cerita zaman kerajaan', 2, '2021-09-15 01:47:59', '2021-09-15 01:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Hayati', 'hayati@gmail.com', '2021-09-12 06:12:31', '$2y$10$haW4VcUoei6WUnGS/qZJUeYX2b3W/e5NwY2CvvolEI73lHULFwSFi', NULL, '2021-09-12 06:12:31', '2021-09-12 06:12:31');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `table_blog`
--
ALTER TABLE `table_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `table_gambar`
--
ALTER TABLE `table_gambar`
  ADD PRIMARY KEY (`id_gambar_product`);

--
-- Indeks untuk tabel `table_gambar_blog`
--
ALTER TABLE `table_gambar_blog`
  ADD PRIMARY KEY (`id_gambar_blog`);

--
-- Indeks untuk tabel `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_blog`
--
ALTER TABLE `table_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_gambar`
--
ALTER TABLE `table_gambar`
  MODIFY `id_gambar_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `table_gambar_blog`
--
ALTER TABLE `table_gambar_blog`
  MODIFY `id_gambar_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
