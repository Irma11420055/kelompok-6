-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2021 pada 18.44
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok06_`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_models`
--

CREATE TABLE `buku_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_buku` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku_models`
--

INSERT INTO `buku_models` (`id`, `judul_buku`, `kategory_id`, `harga_buku`, `deskripsi_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `gambar_buku`, `created_at`, `updated_at`) VALUES
(1, 'Perahu Kertas', 'Novel', '80.000', 'Perahu Kertas, sebuah novel fiksi karangan penulis wanita Dewi Lestari atau biasa dipanggil Dee. Dalam bukunya cerita dimulai dengan kisah seorang pria bernama Keenan. Ia adalah remaja yang telah menyelesaikan pendidikan tingkat SMA di Amsterdam, Belanda.', 'Dewi Lestari (Dee)', 'Treudee Pustaka Sejati dan Bentang Pustaka', '2010', '1621094984.jpg', '2021-05-15 09:09:44', '2021-05-15 09:09:44'),
(2, '5 cm', 'Novel', '85.000', '5 Cm, sebuah novel fiksi yang berkisah tentang lima orang sahabat yang bernama Zafran, Arial, Ian, Genta, dan Riani sebagai satu-satunya wanita. Mereka memiliki komitmen dan impian masing-masing.Riani adalah sosok wanita yang cantik dan cerdas, ia mempunyai cita-cita untuk bekerja di stasiun televisi. Arial, memiliki perawakan yang tinggi besar dan paling tampan di antara yang lainnya. Zafran, berpostur tubuh kurus yang merupakan anak band, ia memiliki impian menjadi seorang picisan. Genta, salah satu orang di antara mereka yang selalu dianggap “leader”. Ian memiliki perawakan yang lebih dari ideal, ia fanatik dengan bola dan penggemar Happy Salma.', 'Dhonny Dhirgantoro', 'PT. Grasindo, Yogyakarta', '2005', '1621095060.jpg', '2021-05-15 09:11:00', '2021-05-15 09:11:00'),
(3, 'Koala Kumal', 'Novel', '75.000', 'Raditya Dika adalah salah satu insan kreatif Indonesia yang karyanya selalu sukses diterima masyarakat. Kesuksesannya berawal dari aktivitas isengnya, yaitu nge-blogging. Tulisan di blognya lalu diadaptasi menjadi sebuah buku fiksi berjudul Kambing Jantan, yang merupakan hasil karya perdana Raditya Dika.', 'Raditya Dika', 'Gagas Media', '2015', '1621095152.jpg', '2021-05-15 09:12:32', '2021-05-15 09:12:32'),
(4, 'Corat-coret di Toilet', 'Cerpen', '45.000', 'Buku Corat-Coret di Toilet merupakan antologi atau kumpulan cerpen yang menceritakan beragam kisah kehidupan manusia kebanyakan. Cerpen pertama yang berjudul Peterpan mengisahkan pemuda idealisme melawan pemerintahan yang diktator, dalam perjuangannya ia mengorbankan banyak hal, namun pengorbanannya itu berakhir sia-sia, idealisme tak mampu melawan yang berkuasa, pemimpin diktator tetap berjaya di singgasananya.', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2016', '1621095254.jpg', '2021-05-15 09:14:14', '2021-05-15 09:14:14'),
(5, 'Kereta Tidur', 'Cerpen', '30.000', 'Agaknya, imajinasi pula yang membuat Kereta Tidur menjadi lebih hidup. Cerita-cerita didalamnya dituliskan dengan kekuatan fiksi imajinatif sehingga mengundang pemaknaan baru atas sebuah cerita. Sekalipun cerita-cerita itu adalah kenyataan dan realitas yang biasa ditemui sehari-hari.', 'Avianti Armand', 'Gramedia Pustaka Utama', '2013', '1621095509.jpg', '2021-05-15 09:18:29', '2021-05-15 09:18:29'),
(6, '11:11', 'Cerpen', '40.000', 'Pilihan paling aman tentu membuat buku serupa tapi tak sama. Ibarat musik, mirip album baru rasa lama. Namun, si Bung enggan melakukan itu. Buku 11:11 berisi sebelas cerita dan sebelas lagu. Setiap cerita punya lagu yang ibarat film adalah soundtrack pengiringnya. Pilihan judul 11:11 ini karena setiap cerita punya tema yang berbeda.', 'Fiersa Besari', 'Media Kita', '2018', '1621095619.jpg', '2021-05-15 09:20:19', '2021-05-15 09:20:19'),
(7, 'Buku Komik 100 Kebiasaan Nabi Seri 1 - Al Kautsar', 'Komik', '29.000', 'Belajar Islam tidak harus bikin kening berkerut. Belajar Islam juga bisa dengan cara yang asyik dan menyenangkan. Komik dalam buku ini mengajarkan kepada kita tentang kebiasaan, anjuran, dan larangan dari Nabi Muhammad saw. yang pasti sangat bermanfaat buat kamu. Komik 100 Kebiasaan Nabi ini membuat tersenyum sekaligus merenung. Kita dihibur sekaligus diingatkan. (Ardian Syaf, Penggambar Komik) Mungkin inilah komik Islami pertama yang betul-betul lahir dari khazanah kultur Indonesia dan mengangkat kearifan lokal bangsa Indonesia.', 'Wawan Kukang &amp', 'Straighttedge Dw No ISBN', '2002', '1621095809.jpg', '2021-05-15 09:23:29', '2021-05-15 09:23:29'),
(8, 'Detektif Conan 98', 'Komik', '22.400', 'Gara-gara usahanya menyelidiki Ai Haibara, Masumi Sera malah harus berhadapan dengan Subaru Okiya! Sementara itu, Conan sudah semakin dekat mengungkap identitas asli Mary, si “adik perempuan dari luar daerah”!! Shukichi Haneda menjumpai kasus pembunuhan saat membantu kelompok latihan para pemain shogi profesional! Kasus yang rumit itu memaksa Shuichi Akai untuk ikut turun tangan! Dan tidak lupa pertandingan analisis antara Conan dan Heiji yang diatur oleh Momiji Oka untuk memecahkan pesan bersandi seorang ibu untuk keempat anaknya!', 'Aoyama Gosho', 'Elex Media Komputindo', '2003', '1621095885.jpg', '2021-05-15 09:24:45', '2021-05-15 09:24:45'),
(9, 'Minion Evil Panic', 'Komik', '39.900', 'Selalu ada kehebohan yang terjadi. Kali ini minions berubah jadi ungu dan jahat. Sukanya makan apa saja, merusak apa saja dan membuat keributan di antara para minions yang lain. Apa lagi ya kebandelan mereka?', 'Renaud Collin & Stephanie Lapuss', 'Elex Media Komputindo', '2000', '1621096023.jpg', '2021-05-15 09:27:03', '2021-05-15 09:27:03'),
(10, 'Dinosaurus', 'Ensiklopedia', '180.000', 'Apa itu dinosaurus? Bagaimana kehidupan dinosaurus zaman dulu? Mengapa dinosaurus bisa punah? Ada banyak sekali pertanyaan tentang dinosaurus Pasti kamu Juga ingin tahu! Buka lipatannya atau putar kertasnya, lalu temukan lawabannya di Ensiklopedia Super Seru!', 'LANGUE AU CHAT', 'Bhuana Ilmu Populer', '2021', '1621096163.png', '2021-05-15 09:29:23', '2021-05-15 09:29:23'),
(11, 'Alam Semesta', 'Ensiklopedia', '165.000', 'Buku ini menjelaskan benda-benda yang ada di ruang angkasa kita. Mulai dari Matahari dan planet-planet di Tata Surya, Asteroid, penjelajahan ruang angkasa, dan berbagai hal unik dan menarik yang ada di ruang angkasa.', 'Yusup Somadinata', 'Elex Media Komputindo', '2021', '1621096227.png', '2021-05-15 09:30:27', '2021-05-15 09:30:27'),
(12, 'sains', 'Ensiklopedia', '152.000', 'Alam semesta kita begitu menakjubkan, besar, luas, dan tua. Sains membantu kita memahami itu semua, dari zarah terkecil sampai galaksi nun jauh, dari sejak Ledakan Besar sampai zaman digital, dari fosil dinosaurus sampai cara zat kimia dalam tubuh kita bekerja. Sains merupakan cara kita mengumpulkan fakta, mengembangkan ide untuk menjelaskan fakta-fakta tersebut, dan membuat prediksi-prediksi yang kita uji. \r\nEnsiklopedia Saintis Junior membantumu memahami segala hal tentang sains dengan foto, ilustrasi, infografis, dan penjelasan-penjelasan singkat. Ensiklopedia ini mencakup segala bidang sains, dari fisika, biologi, kedokteran, kimia, geologi, sampai astronomi.', 'Giles Sparrow', 'Kepustakaan Populer Gramedia', '2020', '1621096316.png', '2021-05-15 09:31:56', '2021-05-15 09:31:56'),
(13, 'RADEN AJENG KARTINI', 'Biografi', '22.620', 'BUKU SEJARAH BIOGRAFI RADEN AJENG KARTINI \r\nTokoh emansipasi tidak lain dan tidak bukan adalah RA. Kartini. Sebagai pionir perjuangan kaum perempuan, sosoknya begitu fenomenal. Oleh karenanya, Sobat wajib mengetahui kisah perjalanan hidup Kartini yang sedemikian hebat, hingga sosoknya masih dikenang hingga kini dan nanti. Dapatkan kisah inspiratifnya yang lengkap hanya di buku “Raden Ajeng Kartini”. Yuk, segera beli biar jiwa kebangsaan Sobat semua semakin membara!', 'Anom Whani Wicaksono', 'C-Klik Media', '2017', '1621096391.png', '2021-05-15 09:33:11', '2021-05-15 09:33:11'),
(14, 'KI HAJAR DEWANTARA / PUTRA KERATON PAHLAWAN BANGSA', 'Biografi', '29.250', 'Ki Hadjar Dewantara dikenal sebagai pemilik konsep pendidikan “ing ngarsa sung tuladha, ing madya mangun karsa, tut wuri handayani” yang hingga kini masih diadaptasi oleh sistem pendidikan di Indonesia. Kisah Ki Hadjar Dewantara menemukan konsep pendidikan ini terangkum sempurna dalam buku ini. Tak hanya itu, buku ini juga berisi perjalanan hidup Ki Hadjar Dewantara sebagai keturunan ningrat dalam memperjuangkan pendidikan di Tanah Air saat masa penjajahan. Teladan dari pendiri Taman Siswa di Yogyakarta ini patut kita jadikan pemantik spirit dalam menuntut ilmu.', 'Syariful Hermawan', 'C-Klik Media', '2019', '1621096514.png', '2021-05-15 09:35:14', '2021-05-15 09:35:14'),
(15, 'Fajar Kebangunan Ulama', 'Biografi', '42.000', 'Buku ini mengkaji pemikiran agama dan aktivitas politik KH. Hasyim Asy’ari (1871-1947), pendiri Pesantren Tebuireng dan Nahdlatul Ulama. KH. Hasyim Asy’ari merupakan salah satu ulama besar yang memiliki aktifitas beranekaragam, mulai dari kedudukan sebagai anutan umat, pemikir, hingga ruang politik. Kiprah, pemikiran, dan liku-liku perjalanan hidup KH. Hasyim Asy’ari sebagian besar terangkum dalam buku ini. Mencermati kiprahnya, maka tidak salah bila KH. Hasyim Asy’ari dikatakan sebagai pemimpin spiritual banyak ulama, tentara, dan politikus.', 'Drs. Lathiful Khuluk', 'LKiS', '2009', '1621096590.png', '2021-05-15 09:36:30', '2021-05-15 09:36:30'),
(16, 'Kumpulan dongeng si Kancil', 'Dongeng', '18.700', 'Buku ini menyajikan kisah-kisah tentang kecerdikan si Kancil dalam menyelesaikan suatu masalah dan meloloskan diri dari binatang-binatang yang ingin memangsanya.', 'M.B. Rahimsyah A.R.', 'Lingkar Media', '2013', '1621096687.jpg', '2021-05-15 09:38:07', '2021-05-15 09:38:07'),
(17, 'Putri Salju', 'Dongeng', '39.900', 'Buku ini bercerita tentang sifat iri yang dirasakan oleh seorang wanita terhadap anak tirinya. Penyakit hati itu didasarkan pada ego sang ibu angkat yang ingin menjadi wanita paling cantik di dunia.', 'Winkanda Satria', 'Cabe Rawit', '2013', '1621096757.jpg', '2021-05-15 09:39:17', '2021-05-15 09:39:17'),
(18, 'Cinderella', 'Dongeng', '18.700', 'Buku ini bercerita tentang Kisah seorang gadis yang diperlakukan tidak adil oleh ibu dan saudara tirinya.', 'Tim Redaksi', 'Pelangi', '2013', '1621096812.jpg', '2021-05-15 09:40:12', '2021-05-15 09:40:12');

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
-- Struktur dari tabel `kategori_buku_models`
--

CREATE TABLE `kategori_buku_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_buku_models`
--

INSERT INTO `kategori_buku_models` (`id`, `nama_kategory`, `created_at`, `updated_at`) VALUES
(1, 'Novel', NULL, NULL),
(2, 'Cerpen', NULL, NULL),
(3, 'Komik', NULL, NULL),
(4, 'Ensiklopedia', NULL, NULL),
(5, 'Biografi', NULL, NULL),
(6, 'Dongeng', NULL, NULL);

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
(44, '2014_10_12_000000_create_users_table', 1),
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2019_08_19_000000_create_failed_jobs_table', 1),
(47, '2021_05_01_080834_create_buku_models_table', 1),
(48, '2021_05_01_081709_create_kategori_buku_models_table', 1),
(49, '2021_05_01_081855_create_transaksi_models_table', 1),
(50, '2021_05_09_074652_create_pemesanans_table', 1),
(51, '2021_05_15_024002_create_transaksis_table', 1);

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
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `id_buku`, `id_user`, `fullname`, `phone`, `address`, `city`, `state`, `postal_code`, `jumlah`, `pengiriman`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Budi U', '081263112198', 'Cempaka Putih', 'Jakarta', 'Indonesia', '23145', 2, 'JNE (7-8 hari ) Rp 20.000', 'Terima', '1621096993.jpg', '2021-05-15 09:42:45', '2021-05-15 09:43:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_models`
--

CREATE TABLE `transaksi_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wopss', 'wopss@gmail.com', '2021-05-15 09:08:07', 'Admin', '$2y$10$Fg3VIXiSBdFapdhSJ3glV.JMQm4DsTebmZmu5OhtvCfY61JQ9rMGa', NULL, '2021-05-15 09:08:07', '2021-05-15 09:08:07'),
(2, 'Budi', 'budi@gmail.com', '2021-05-15 09:41:31', 'User', '$2y$10$2hy3xJJN7DlGrUhLumg/neibo1odkItMnwk0WuZ9.kEjarLe7xS3K', NULL, '2021-05-15 09:41:31', '2021-05-15 09:41:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_models`
--
ALTER TABLE `buku_models`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori_buku_models`
--
ALTER TABLE `kategori_buku_models`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_models`
--
ALTER TABLE `transaksi_models`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `buku_models`
--
ALTER TABLE `buku_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_buku_models`
--
ALTER TABLE `kategori_buku_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_models`
--
ALTER TABLE `transaksi_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
