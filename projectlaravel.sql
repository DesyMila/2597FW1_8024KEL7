-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 09.14
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectlaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `eskul_siswa`
--

CREATE TABLE IF NOT EXISTS `eskul_siswa` (
`id` int(10) unsigned NOT NULL,
  `jenis_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'lala', '1234337', 'jl. sentosa', 3, '2017-05-18 15:41:46', '2017-05-18 15:41:46'),
(2, 'hihi', '2711873', 'jl. kemakmuran', 14, '2017-05-19 02:47:19', '2017-05-19 02:47:19'),
(3, 'lala', '98989', 'jl. xkslclsk', 15, '2017-05-19 02:52:01', '2017-05-19 02:52:01'),
(5, 'wkwkwk', '23144', 'jl. senyum', 18, '2017-05-19 02:59:25', '2017-05-19 02:59:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_matapelajaran`
--

CREATE TABLE IF NOT EXISTS `guru_matapelajaran` (
`id` int(10) unsigned NOT NULL,
  `guru_id` int(10) unsigned NOT NULL,
  `mata_pelajaran_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `guru_matapelajaran`
--

INSERT INTO `guru_matapelajaran` (`id`, `guru_id`, `mata_pelajaran_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-05-18 15:43:32', '2017-05-18 15:43:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_matapelajaran`
--

CREATE TABLE IF NOT EXISTS `jadwal_matapelajaran` (
`id` int(10) unsigned NOT NULL,
  `ruang_kelas_id` int(10) unsigned NOT NULL,
  `guru_matapelajaran_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_matapelajaran`
--

INSERT INTO `jadwal_matapelajaran` (`id`, `ruang_kelas_id`, `guru_matapelajaran_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-05-18 15:43:59', '2017-05-18 15:43:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_ekskul`
--

CREATE TABLE IF NOT EXISTS `jenis_ekskul` (
`id` int(10) unsigned NOT NULL,
  `nama_eskul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_sekolah`
--

CREATE TABLE IF NOT EXISTS `kepala_sekolah` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kepala_sekolah`
--

INSERT INTO `kepala_sekolah` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'lala', '1234337', 'jl. jhjkhk', 4, '2017-05-18 16:16:53', '2017-05-18 16:16:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
`id` int(10) unsigned NOT NULL,
  `nama_matapelajaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_matapelajaran`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Arab', '2017-05-18 15:42:30', '2017-05-18 15:42:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_30_142727_buat_table_pengguna', 1),
('2017_04_30_142743_buat_table_guru', 1),
('2017_04_30_142756_buat_table_siswa', 1),
('2017_04_30_142819_buat_table_staff', 1),
('2017_04_30_142845_buat_table_kepala_sekolah', 1),
('2017_04_30_142952_buat_table_ruang_kelas', 1),
('2017_04_30_143124_buat_table_mata_pelajaran', 1),
('2017_04_30_143147_buat_table_guru_matapelajaran', 1),
('2017_04_30_143204_buat_table_jadwal_matapelajaran', 1),
('2017_04_30_143235_buat_table_jenis_eskul', 1),
('2017_04_30_143256_buat_table_eskul_siswa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('siswa','staff','guru','kepala') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'desy', 'desy', 'kepala', 'xLEuQU08Af0zzjN9BrGEnCYv7jdsW3uFWO3bZ7iVGFj1aN9Avwhnp87wM9TW', NULL, '2017-05-19 21:36:04'),
(2, 'dija', 'dija', 'staff', '4Rw9Rm65IQrfdc7RBUBYCKTdhl4TmUacWuin8ydG3Q66UeN4aaCMRBGoXdBr', NULL, '2017-05-21 01:41:31'),
(3, 'lala', 'lala', 'guru', 'JYjHa07EiF3RV8nrgwd1ktPHQh8y3PtxJ6zRzaoChwcPOBtVO1uRhSbSxVy1', '2017-05-18 15:41:46', '2017-05-21 01:49:47'),
(4, 'lalu', 'lau', 'guru', '0h8kwfayv2LI5XswQiGsGJQu0ZMg1jzS4iqeILL71uCWAOlIJYziW9MTRxBg', '2017-05-18 16:16:53', '2017-05-19 16:56:35'),
(14, 'hihi123', 'hihi', 'siswa', 'Vg1X8Cr4I6Cmbo4PeSKGgkTPqdNLiJ7OyEUM7WjlPRfrL3kGbwey1n5QTvmq', '2017-05-19 02:47:19', '2017-05-19 17:56:12'),
(15, 'cici', 'cici', 'siswa', 'g26gmKUppHjt0AsRUedv5YsnM7H6kaVJurpRXgNIH03vSHBiXiQENt9pZbHy', '2017-05-19 02:52:01', '2017-05-21 01:45:16'),
(17, 'desy123', 'desy123', 'siswa', 'FZaur1xjxXDPmBQseshuVLNKuHk5KAr1BXQfBb1TI4GnWzJ4RzzL3mNm1hfV', '2017-05-19 02:58:17', '2017-05-21 01:42:21'),
(18, 'ceria', 'hihi', 'siswa', 'lt6JRsbVgHGl2Ws6RSZmpuQLHLAzUsSNLDE8XVK18jY5CPJ0dLwL04hDrbi6', '2017-05-19 02:59:25', '2017-05-19 03:23:23'),
(19, 'hoho', 'hoho', 'staff', 'iZAYcpGqhzCd2oraGo3DzZCtIN5TyRhrWAvNZRzjCCw1mloyaVWX5vMFyL31', '2017-05-19 03:00:14', '2017-05-21 01:43:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `ruang_kelas` (
`id` int(10) unsigned NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`id`, `nama_ruangan`, `created_at`, `updated_at`) VALUES
(1, 'Kelas VII', '2017-05-18 15:42:52', '2017-05-18 15:42:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(6, 'dkakkl', '43984982', 'jl. jdfjskldjf', 17, '2017-05-19 02:58:17', '2017-05-19 02:58:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'hoho', '2187182', 'jl. sjklsdfk', 19, '2017-05-19 03:00:14', '2017-05-19 03:00:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskul_siswa`
--
ALTER TABLE `eskul_siswa`
 ADD PRIMARY KEY (`id`), ADD KEY `eskul_siswa_jenis_id_foreign` (`jenis_id`), ADD KEY `eskul_siswa_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id`), ADD KEY `guru_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `guru_matapelajaran`
--
ALTER TABLE `guru_matapelajaran`
 ADD PRIMARY KEY (`id`), ADD KEY `guru_matapelajaran_guru_id_foreign` (`guru_id`), ADD KEY `guru_matapelajaran_mata_pelajaran_id_foreign` (`mata_pelajaran_id`);

--
-- Indexes for table `jadwal_matapelajaran`
--
ALTER TABLE `jadwal_matapelajaran`
 ADD PRIMARY KEY (`id`), ADD KEY `jadwal_matapelajaran_ruang_kelas_id_foreign` (`ruang_kelas_id`), ADD KEY `jadwal_matapelajaran_guru_matapelajaran_id_foreign` (`guru_matapelajaran_id`);

--
-- Indexes for table `jenis_ekskul`
--
ALTER TABLE `jenis_ekskul`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
 ADD PRIMARY KEY (`id`), ADD KEY `kepala_sekolah_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id`), ADD KEY `siswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`), ADD KEY `staff_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eskul_siswa`
--
ALTER TABLE `eskul_siswa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `guru_matapelajaran`
--
ALTER TABLE `guru_matapelajaran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal_matapelajaran`
--
ALTER TABLE `jadwal_matapelajaran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_ekskul`
--
ALTER TABLE `jenis_ekskul`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `eskul_siswa`
--
ALTER TABLE `eskul_siswa`
ADD CONSTRAINT `eskul_siswa_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_ekskul` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `eskul_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
ADD CONSTRAINT `guru_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru_matapelajaran`
--
ALTER TABLE `guru_matapelajaran`
ADD CONSTRAINT `guru_matapelajaran_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `guru_matapelajaran_mata_pelajaran_id_foreign` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_matapelajaran`
--
ALTER TABLE `jadwal_matapelajaran`
ADD CONSTRAINT `jadwal_matapelajaran_guru_matapelajaran_id_foreign` FOREIGN KEY (`guru_matapelajaran_id`) REFERENCES `guru_matapelajaran` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `jadwal_matapelajaran_ruang_kelas_id_foreign` FOREIGN KEY (`ruang_kelas_id`) REFERENCES `ruang_kelas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
ADD CONSTRAINT `kepala_sekolah_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `siswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
ADD CONSTRAINT `staff_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
