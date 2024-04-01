-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Apr 2024 pada 14.01
-- Versi server: 10.6.17-MariaDB
-- Versi PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilhikma_dbbilhikmah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kutipan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `kutipan`, `created_at`, `updated_at`) VALUES
(9, 12, 'Anak dari Saudari Perempuan Termasuk Ahli Waris?', '<div><em>Konsultasi Fikih Warisan yang berjudul “Apakah Anak dari Saudari Perempuan Termasuk Ahli Waris?” ini diasuh oleh Ustadz Mohammad Nurhadi, M.H alumnus magister Hukum Ekonomi Syariah (HES) Universitas Darussalam (UNIDA) Gontor.</em></div><div><strong>Pertanyaan:</strong></div><div>Tante saya meninggal dalam keadaan masih gadis. Orang tua tante sudah meninggal. Mayit punya empat saudara kandung: satu laki-laki dan tiga perempuan (satu saudari perempuan sudah almarhum, namun sudah punya keturunan).</div><div>Pertanyaannya, apakah anak dari almarhumah masih berhak mendapat warisan dari saudarinya yang meninggal?</div><div><strong>Jawaban:<br></strong><br></div><div dir=\"rtl\">اَلْحَمْدُ للهِ رَبِّ الْعَالَمِيْنَ وَالصَّلَاةُ وَالسَّلَامُ عَلَى رَسُوْلِ اللهِ الْأَمِيْنِ وَعَلَى آلِهِ وَصَحْبِهِ اَجْمَعِيْنَ<br><br></div><div>Sebelumnya kami ucapkan terima kasih atas pertanyaan yang diajukan. Kami coba untuk menguraikan ulang kasus di atas agar lebih jelas.<br><br></div><div>Ada seorang gadis meninggal dunia yang memiliki 1 saudara laki-laki dan 3 saudari perempuan, namun salah satu dari 3 saudari perempuan tersebut telah meninggal dunia dan memiliki anak. Apakah anak tersebut berhak mendapatkan warisan dari bibinya (saudari ibunya) yang meninggal dunia?<br><br>Kita harus tahu bahwa yang berhak mendapat warisan adalah para <a href=\"https://www.dakwah.id/ahli-waris-utama-yang-pasti-mendapatkan-warisan/\">ahli waris</a>. Pertanyaannya, apakah keponakan atau anak dari saudari perempuan termasuk ahli waris? Jawabannya adalah mereka bukanlah ahli waris, sehingga tidak berhak mendapatkan warisan.</div>', 'ADq3cqP6n8DkoYDINMuA2TIGFKR0Ye.jpg', 'Konsultasi Fikih Warisan yang berjudul “Apakah Anak dari Saudari Perempuan Termasuk Ahli Waris?” ini...', '2024-01-22 02:39:59', '2024-03-03 17:13:31'),
(10, 12, '10 Pembahasan Hukum Seputar Ibadah Qurban', '<div>Segala puji milik Allah Rabb Semesta Alam. Shalawat dan salam semoga selalu tercurah kepada utusan terbaik, Muhammad <em>shallallahu ‘alaihi wasallam</em>, juga kepada keluarga dan para sahabat beliau. Amma ba’du,<br><br></div><div>Poin Pertama<br><br></div><div>Dalil disyariatkannya ibadah Qurban adalah firman Allah <em>subhanahu wata’ala</em>,<br><br></div><div dir=\"rtl\">فَصَلِّ لِرَبِّكَ وَانْحَرْۗ<br><br></div><div>“<em>Maka dirikanlah shalat dan sembelihlah</em>.” <a href=\"https://www.marja.id/quran/108_al-kawtsar/ayat_2/\">(QS. Al-Kautsar: 2)<br></a><br></div><div>Ibadah Qurban juga didasarkan kepada <em>sunnah qauliyah</em> (perkataan), <em>fi’liyah</em> (perbuatan), dan <em>taqririyah</em> (ketetapan). Di antara dalilnya adalah Rasulullah <em>shallallahu ‘alaihi wasallam</em> berqurban dengan dua ekor kambing gibas berwarna putih dan bertanduk. Hadits di atas diriwayatkan oleh Imam Muslim dalam kitab <em>Shahih</em>-nya.<br><br></div><div>Ibadah Qurban lebih utama daripada sedekah sunnah.<br><br></div><div>Poin kedua<br><br></div><div>Hukum berqurban adalah sunnah<em> ‘ain</em> bagi setiap individu dan sunnah<em> kifayah</em> bagi ahli bait yang berjumlah banyak. Berqurban tidaklah wajib kecuali dengan nazar. Nazar dalam hal ini ada dua bentuk.<br><br></div><div><strong>Bentuk pertama:</strong> <em>Nazar hakiki</em>, yaitu apabila seseorang berkata, “Atas nama Allah saya wajibkan atas diri saya berqurban dengan kambing ini.”<br><br></div><div><strong>Bentuk kedua:</strong> <em>Nazar hukmi</em>, yaitu seseorang mengucapkan, “Saya jadikan kambing ini sebagai Qurban atas diriku.”<br><br></div><div>Poin ketiga<br><br></div><div>Jenis hewan Qurban adalah hewan ternak, yaitu unta, sapi, dan kambing. Maka tidak sah berqurban dengan selain jenis hewan tersebut.<br><br></div><div>Urutan hewan Udhiyah yang paling utama bagi seorang yang berqurban sendirian adalah seekor unta, kemudian sapi, kemudian domba, kemudian kambing, kemudian 1/7 bagian dari seekor unta, dan 1/7 bagian dari seekor sapi.<br><br></div><div>Poin keempat<br><br></div><div>Syarat sahnya hewan Qurban adalah telah mencapai umur yang ditetapkan oleh syariat. Unta harus genap berumur 5 tahun, sapi dan kambing harus genap berumur 2 tahun, dan domba harus genap berumur 1 tahun.<br><br></div><div>Poin kelima<br><br></div><div>Definisi Udhiyah adalah nama bagi sesuatu (hewan) dari hewan ternak yang disembelih pada hari Idul Adha dan hari-hari Tasyriq dalam rangka mendekatkan diri kepada Allah.<br><br></div><div>Poin keenam<br><br></div><div>Syarat ibadah Qurban adalah disembelih setelah terbitnya matahari dan telah berlalu waktu selama shalat dua rakaat dan dua khutbah yang ringan.<br><br></div><div>Waktu yang lebih utama adalah mengakhirkan hingga matahari naik sepenggalah. Boleh menyembelih Qurban pada siang dan malam hari Tasyriq, namun menyembelih di waktu malam tanpa uzur hukumnya makruh.<br><br></div><div>Poin ketujuh<br><br></div><div>Bersepakat tujuh orang untuk berqurban dengan seekor unta, hukumnya sah. Baik semuanya bersepakat menjadikan bagiannya sebagai Qurban, atau sebagian menjadikannya Qurban dan sebagian yang lain berniat akikah, atau sebagian lainnya sebagai<em> hadyu</em> dan sebagian lainnya hanya untuk mendapatkan daging.<br><br></div><div>Poin kedelapan<br><br></div><div>Tidak sah berqurban dengan hewan ternak yang buta sebelah, apalagi buta kedua matanya. Demikian pula tidak sah dengan hewan yang jelas pincang. Kriteria hewan disebut pincang apabila dia ketinggalan dari koloninya saat digiring ke tempat gembala. Yaitu terlambat dan didahului oleh kumpulannya saat menuju tempat&nbsp; gembala.<br><br></div><div>Poin kesembilan<br><br></div><div>Tidak sah berqurban dengan hewan yang terlahir tanpa telinga atau hewan yang terputus telinganya. Jika telinganya terputus namun tidak terpisah dan tetap menggantung, maka tetap sah jika dijadikan Qurban.<br><br></div><div>Poin kesepuluh<br><br></div><div>Kaidah terkait aib pada hewan yang menghalangi keabsahan Qurban yaitu setiap aib yang mengurangi daging atau mengurangi bagian yang dapat dimakan, makan ini adalah aib penyebab tidak sahnya Qurban.<br><br></div>', 'nt291Q36js1XSZErD8uElKS9eXx6js.jpg', 'Segala puji milik Allah Rabb Semesta Alam. Shalawat dan salam semoga selalu tercurah kepada utusan t...', '2024-01-22 02:44:17', '2024-01-22 02:45:09'),
(11, 13, 'Iman Kepada Hari Berbangkit Fondasi Tawakal dalam Kehidupan', '<div>Iman kepada <a href=\"https://www.dakwah.id/iman-kepada-hari-berbangkit-fondasi-tawakal-dalam-kehidupan/\">hari berbangkit</a> adalah fondasi tawakal dan kebahagiaan seorang muslim. Mengapa demikian? Sahabat dakwah.id akan menemukan jawabannya pada artikel berikut.<br><br></div><div>Kisah yang masih hangat. Pada 8 September 2022, salah seorang ASN yang bekerja di Bappeda Kota Semarang ditemukan tewas terbakar. Korban dinyatakan hilang sejak 24 Agustus 2022, dan diduga kuat, korban merupakan saksi kunci dari kasus korupsi yang ia ketahui.<br><br></div><div>Ada juga kisah suami yang membunuh istrinya, lantaran istri tidak mau diajak rujuk oleh suami di Sulawesi.<br><br></div><div>Mendengar berita-berita ini, ada harapan dalam imajinasi, <em>ending-</em>nya pelaku tidak berhasil membunuh korban dan ia mendapatkan hukuman setimpal, atau setidaknya hukuman berat. Dan korban selamat, ikut menyaksikan pelaku dihukum. Karena sudah berencana menghilangkan nyawa orang.<br><br></div><div>Tapi ternyata, itu hanya harapan imajinatif. Pembunuhan sudah terjadi, yang mati tidak akan hidup kembali. Sebagian orang bahkan berharap, hukuman bagi pelakunya adalah pelaku dibakar dan dibunuh. Minimal, kehidupan pelaku harus rusak dan hancur lantaran perbuatannya.<br><br></div><div>Harapan orang-orang mungkin simpel, orang jahat harus diberi hukuman setimpal dan kontan di dunia. Akan tetapi, harapan seperti itu hanya terjadi di sinetron. <em>Happy ending</em> yang diharapkan oleh masyarakat hanyalah harapan fiktif dan tidak bisa terjadi secara mutlak dalam kehidupan.<br><br></div><div>Pelaku kejahatan tidak harus menerima hukumannya di dunia. Bisa jadi ia selalu bahagia di dunia, tercukupi rezekinya.<br><br></div><div>Namun, pelaku kejahatan tidak bisa lari dari pertanggungjawaban di kehidupan setelah kematian. Keyakinan ini yang menjadi salah satu fondasi tawakalnya seorang muslim dalam kehidupan di dunia.<br><br></div><div>Karma atau Balasan?<br><br></div><div>Dalam Islam, kebaikan dan keburukan pasti berbalas. Akan tetapi, tidak semua kebaikan dan keburukan dibalas di dunia. Dalam Islam, konsep seperti karma tidak bisa berlaku.<br><br></div><div>Secara singkat, karma meniscayakan adanya reinkarnasi (<em>raj</em>’<em>ah</em>) di kehidupan selanjutnya untuk mendapatkan akibat dari sebab yang ia usahakan di kehidupan sebelumnya. Karma adalah hukum sebab akibat (<em>causality/the law of case and effect</em>) tanpa adanya campur tangan penguasa atau raja.<br><br></div><div>Contoh dari pemahaman karma ini adalah, saat manusia terlahir sebagai orang miskin atau ia hidup susah, itu bukan hukuman dari Tuhan. Melainkan akibat perilakunya di kehidupan sebelumnya. Jadi, selama karma masih bersama kehidupan, senantiasa akan ada kehidupan berikutnya (Punarbhawa), dan kematian merupakan akhir yang sementara. Jika kekuatan karma yang baik sudah membaku disebut guna, akan memancar berwujud ‘aurora’.<br><br></div><div>Disebutkan sebuah kutipan dalam Slokantara 68, ‘<em>Karma phala ngaranika phalaning gawe hala hayu</em>’ yang artinya: Karma pahala itu namanya hasil perbuatan baik buruk. (<em>Materi Pokok Pendidikan Agama Hindu</em>, I Ketut Bantas dan I Nengah Dana, 149)<br><br></div><div>Dan ‘<em>Anakaranam katham karyam samsaretra bhavisyasti</em>’yang artinya: Mungkinkan sesuatu perbuatan tiada sebab (dan akibatnya) di dalam lingkungan samsara (lahir dan mati) di sini. (<em>Panca Craddha</em>, I. B. Oka Punyaatmadja, 58)<br><br></div><div><strong>Artikel Refleksi: </strong><a href=\"https://www.dakwah.id/benci-karena-cinta-allah/\">Benci Karena Cinta Kepada Allah<br></a><br></div><div>Jika orang berbuat baik dan buruk harus menemui akibatnya di dunia, tentu akan panjang usia dunia. Mengingat, semua orang pasti pernah berbuat salah, tidak ada yang sempurna.<br><br></div><div>Apakah semua manusia harus dihidupkan lagi di kesempatan berikutnya, sedangkan dunia harus berakhir dengan Kiamat? Apakah hari berbangkit?<br><br></div><div>Selain itu, keyakinan tentang konsep karma mengharuskan untuk tidak percaya hari Kiamat dan hari berbangkit.<br><br></div><div>Iman Kepada Hari Akhir dan Hari Berbangkit<br><br></div><div>Percaya kepada hari akhir dan hari berbangkit adalah keyakinan mendasar dan menjadi pokok <a href=\"https://www.dakwah.id/artikel-tentang-akidah/\">akidah Islam</a>. Tidak ada yang mengetahui kapan Kiamat dan kapan hari berbangkit (<em>yaum ba</em>’<em>ts</em>).<br><br></div><div>Ibnu Qayyim al-Jauziyah <em>rahimahullah </em>menjelaskan urutan kehidupan yang bakal dilalui manusia,<br><br></div><div><strong><em>Pertama</em></strong>, (dār al-ūlā) saat berada di rahim ibu. Di ruang yang sempit dan dalam tiga lapis kegelapan (zhulumāt ats-tsalāt): kegelapan perut ibu, kegelapan rahim ibu, dan kegelapan selaput penutup janin.<br><br></div><div><strong><em>Kedua</em></strong>, kehidupan dunia. Tempat manusia akan bertumbuh, kehidupan yang menjadi bakal kebahagiaan atau kesengsaraan.<br><br></div><div><strong><em>Ketiga</em></strong>, kehidupan barzakh. Lebih luas dan lebih besar daripada kehidupan di dunia. Namun, penisbatannya seperti kehidupan dunia dibanding kehidupan di rahim ibu.<br><br></div><div><strong><em>Keempat</em></strong>, kehidupan selamanya (dār al-Qarār). Kehidupan di surga atau di neraka yang mana tidak ada kehidupan lagi setelah fase ini. (<em>Rūḥ</em>, Ibnu al-Qayyim, 116)<br><br></div><div>Setiap manusia akan diberi kesempatan hidup di dunia untuk mengumpulkan bekal. Kelak, seusai mati, ia akan menerima akibat dan pahala dari perilaku dan tingkah lakunya selama di dunia. Selama di dunia, mungkin sebagian orang sudah menerima sebagian akibat dari perbuatannya, tetapi penyempurnaan pahala akan didapat pada hari Kiamat.<br><br></div>', 'eEmvFJcZGQ9137qaU8HTdrpn9HME3T.jpg', 'Iman kepada hari berbangkit adalah fondasi tawakal dan kebahagiaan seorang muslim. Mengapa demikian?...', '2024-01-22 03:56:03', '2024-01-22 03:56:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `isyarats`
--

CREATE TABLE `isyarats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `isyarats`
--

INSERT INTO `isyarats` (`id`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(12, 'Aa', 'YRCDTe74Aj4LnoxQwIxZMqYuq78Uny.png', '2024-01-22 01:04:01', '2024-01-22 01:04:01'),
(13, 'Bb', 'IDzFaHgHuhI41OBg9pjKev1dqWemVF.png', '2024-01-22 01:04:13', '2024-01-22 01:04:13'),
(14, 'Cc', 'bQf18IqgGZKKJSdn8my7ml8bybbJ2A.png', '2024-01-22 01:04:24', '2024-01-22 01:04:24'),
(15, 'Dd', '5mSAer34Auu0ewcG2ZxsHRqeW7kwgF.png', '2024-01-22 01:04:39', '2024-01-22 01:04:39'),
(16, 'Ee', '5YFvAZp8IqGwWAZGcBqmxXDGVBsIhT.png', '2024-01-22 01:49:58', '2024-01-22 01:49:58'),
(17, 'Ff', 'KLCluA80QmK0IdlOZQ2oFcmWfsiPL8.png', '2024-01-22 01:50:45', '2024-01-22 01:50:45'),
(18, 'Gg', 'ZnSfT4ofQAtDLjRsISRgt5pez5p41N.png', '2024-01-22 01:51:04', '2024-01-22 01:51:04'),
(19, 'Hh', '87YNMaBx6H0W7ydqHais1r6xNXq1eA.png', '2024-01-22 01:51:20', '2024-01-22 01:51:20'),
(20, 'Ii', 'gXc62HdisiUwMTDUcQrZQQOe9U79tS.png', '2024-01-22 01:51:33', '2024-01-22 01:51:33'),
(21, 'Jj', '1i7Jwn4Q3ZWZTKk550BGnPzuzzaY4U.png', '2024-01-22 01:51:49', '2024-01-22 01:51:49'),
(22, 'Kk', 'm95VBqRpCSa2txzaoGTbZwQd1yn6dm.png', '2024-01-22 01:52:02', '2024-01-22 01:52:02'),
(23, 'Ll', '3ijIiE48Fv04qTUuVSkpYy5U966aok.png', '2024-01-22 01:52:48', '2024-01-22 01:52:48'),
(24, 'Mm', 'C6RCEW75n391RAqJzyOs0HIxZj260n.png', '2024-01-22 01:54:24', '2024-01-22 01:54:24'),
(25, 'Nn', 'uw2gbnrsxHIWXyfNQvigeeTwcatK3q.png', '2024-01-22 01:55:36', '2024-01-22 01:55:36'),
(26, 'Oo', 'BBk1nUW5YhGBD2c1DxwZfIgQmF8UCl.png', '2024-01-22 01:56:02', '2024-01-22 01:56:02'),
(27, 'Pp', 'pFKSIzsjai0wgFO1ghQRJUkC32R4k7.png', '2024-01-22 01:56:37', '2024-01-22 01:56:37'),
(28, 'Qq', 'ltFKtLeuO2qUi8prwck9zAiC8R0DkP.png', '2024-01-22 01:56:52', '2024-01-22 01:56:52'),
(29, 'Rr', 'NGfh6ANqEze2V65s5PVFeywzPlJtEV.png', '2024-01-22 01:57:07', '2024-01-22 01:57:07'),
(30, 'Ss', '7VPfNAa7xz2r2iNQp9r5edDRw8W571.png', '2024-01-22 01:57:24', '2024-01-22 01:57:24'),
(31, 'Tt', '7wmmgkNV8mpWyC4mPRAhUw1Zac5WQQ.png', '2024-01-22 01:58:01', '2024-01-22 01:58:01'),
(32, 'Uu', 'rBm2wpimy8MUCbk3HAee7KEZVMV1M5.png', '2024-01-22 01:58:45', '2024-01-22 01:58:45'),
(33, 'Vv', 'MpmNQYYKKAcnCMDDJ0A8yVkHfV0c8D.png', '2024-01-22 01:59:01', '2024-01-22 01:59:01'),
(34, 'Ww', 'ZSGJyPOH1efqYIhioTVksjBkAPReC9.png', '2024-01-22 01:59:17', '2024-01-22 01:59:17'),
(35, 'Xx', '2XMPrjKRBDL9zt3nnsCAwSLwmP1tmT.png', '2024-01-22 01:59:30', '2024-01-22 01:59:30'),
(36, 'Yy', 'pQ7I8CV0UHJIfu2uhtp38A4z2h6sRh.png', '2024-01-22 02:01:03', '2024-01-22 02:01:03'),
(37, 'Zz', 'w8504IuLwy59ADxq7BCkx1GO6QnhXB.png', '2024-01-22 02:01:40', '2024-01-22 02:01:40'),
(38, '0', 'GvmUV4t101tMydHZreRTWeTo7LNuBy.png', '2024-01-27 04:01:05', '2024-01-27 04:01:05'),
(39, '1', 'TBfWrnDoF5EtKqD2thA80awzxhWhCO.png', '2024-01-27 04:01:49', '2024-01-27 04:01:49'),
(40, '2', 'fD9NJuDRlnTvR78NuceUmFIm54oKZN.png', '2024-01-27 04:02:17', '2024-01-27 04:02:17'),
(41, '3', 'AWb7V4tiBZoAnBc0LLk4fg80qfBXYq.png', '2024-01-27 04:02:30', '2024-01-27 04:02:30'),
(42, '4', 'tYMJyIQT94x0SoKRRg6UcFftSHEJpu.png', '2024-01-27 04:03:29', '2024-01-27 04:03:29'),
(43, '5', 'AFtINj6JSqFArpocNdYUHB6wkooUjY.png', '2024-01-27 04:03:39', '2024-01-27 04:03:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Ada Kategori', '2023-12-02 22:26:50', '2024-01-22 03:45:04'),
(2, 'Kultum', '2023-12-02 22:26:54', '2023-12-24 17:24:14'),
(3, 'Bahasa Isyarat', '2023-12-02 22:26:58', '2023-12-24 17:24:26'),
(5, 'Pandangan Hidup', '2023-12-24 00:48:19', '2024-01-22 02:22:20'),
(6, 'Amalan Sunnah', '2024-01-08 06:45:57', '2024-01-22 02:22:34'),
(10, 'Belajar Islami', '2024-01-22 02:22:57', '2024-01-22 02:22:57'),
(11, 'Khutbah Jumat', '2024-01-22 02:24:33', '2024-01-22 02:24:33'),
(12, 'Fiqih', '2024-01-22 02:25:51', '2024-01-22 02:25:51'),
(13, 'Aqidah', '2024-01-22 02:25:57', '2024-01-22 02:25:57'),
(14, 'Adab', '2024-01-22 02:26:03', '2024-01-22 02:26:03'),
(16, 'Kajian Harian', '2024-01-22 03:45:18', '2024-01-22 03:45:18'),
(20, 'Kajian Islami', '2024-01-27 00:52:56', '2024-01-27 00:53:53'),
(22, 'Belajar Isyarat', '2024-01-27 00:53:26', '2024-01-27 00:53:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_03_120544_create_kategoris_table', 1),
(6, '2023_12_03_115942_create_artikels_table', 1),
(7, '2023_12_03_120614_create_posters_table', 1),
(8, '2023_12_03_120631_create_videos_table', 1),
(9, '2023_12_27_124838_create_isyarats_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posters`
--

INSERT INTO `posters` (`id`, `id_kategori`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(15, 5, 'Tidak ada alasan untuk malas belajar', 'n8MglVWGiY6VdmJtPZG0FyI4T53AWe.jpg', '2024-01-22 02:27:14', '2024-01-22 02:27:14'),
(16, 5, 'Kunci Kebaikan Dunia Akhirat', 'lwBj4N863JQfVptk0qsKlqEIdWcwhL.jpg', '2024-01-22 02:27:46', '2024-01-22 02:27:46'),
(17, 10, 'Bukti Syukur', 'mz6H6BNnVqFEtDDcqCodBmKwTfzKdt.jpg', '2024-01-22 02:28:12', '2024-01-22 02:28:12'),
(18, 1, 'Tipu Daya Syaiton', 'i3kT1yo2v6JoiNzRs4SKS9Cv2nO4Av.jpg', '2024-01-22 02:28:42', '2024-01-22 02:28:42'),
(19, 14, 'Derita Orang yang Riya', 'FIYHxsrgmnAkXvRi9y3MJckDzWwSJ8.jpg', '2024-01-22 02:29:24', '2024-01-22 02:29:24'),
(20, 12, 'Jangan Pernah Tinggalkan Sholat', 'MQqucDMwyhwQjqfzihL57WRJctrScU.jpg', '2024-01-22 02:30:47', '2024-01-25 09:10:13'),
(21, 11, 'Jadikan Sabar dan Sholat', '4FRWwetOu7gH42qXI7u7kWTzfLVPCI.jpg', '2024-01-22 02:31:29', '2024-01-22 02:31:29'),
(22, 5, 'Jagalah Waktumu', 'eviCfXieGRlsPsk9sJ0xTAvRrof8Ld.jpg', '2024-01-22 02:32:11', '2024-01-22 02:32:11'),
(23, 5, 'Kerugian yang paling rugi', 'VRYC09BLGa0nNGHj9hpcLWB9EbvuGF.jpg', '2024-01-22 02:32:51', '2024-01-22 02:32:51'),
(24, 12, 'Amanah Sebagai Modal', 'kuUCIGbMEbNFJJvWMoKpXwF1HlzhQU.jpg', '2024-01-22 02:33:37', '2024-01-22 02:33:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Bilhikmah Admin', 'admin@gmail.com', NULL, '$2y$10$s01x0WOxWrfbn2TbDq4tXuxuFhUAoo10N88OaD3XAj94ikUqyFnyO', NULL, '2023-12-27 06:02:06', '2024-02-29 16:06:58'),
(2, 'admin', 'fulan bin funlan', 'admin2@gmail.com', NULL, '$2y$10$G6tz.JHiYsPcswDVK.ihB.R0HKliRz1n4k3KjBf5733knpsoEx25C', NULL, '2024-01-19 20:58:19', '2024-02-29 16:05:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `view_count` bigint(20) NOT NULL DEFAULT 1,
  `kutipan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `id_kategori`, `judul`, `deskripsi`, `link`, `view_count`, `kutipan`, `created_at`, `updated_at`) VALUES
(6, 2, 'JALAN TENGAH BERKEMAJUAN', '<div>Membuka Tanwir II Pimpinan Pusat Muhammadiyah dan Pimpinan Pusat ‘Aisyiyah, Sabtu (4/9) Ketua Umum PP Muhammadiyah Haedar Nashir menyampaikan duka cita terhadap wafatnya 134,356 jiwa warga Indonesia per tanggal 3 September 2021 karena Covid-19.<br><br>“Muhamamdiyah penting meletakkan musibah pandemi yang telah berjalan dua tahun ini sebagai “am al-hazmi’ atau ‘tahun duka’. Betapa berat korban sakit dan meninggal akibat virus Corona ini baik secara kuantitatif maupun kualitatif,” tuturnya.<br><br>Mengutip Ayat ke-32 Surat Al-Maidah di mana Allah menyatakan mahalnya satu jiwa manusia, Haedar menuturkan bahwa wafatnya 134 ribu penduduk Indonesia dan 4 juta lebih penduduk dunia akibat Covid-19 adalah musibah luar biasa.</div>', 'BNj9XZ1ZU1U', 20, 'Membuka Tanwir II Pimpinan Pusat Muhammadiyah dan Pimpinan Pusat ‘Aisyiyah, Sabtu (4/9) Ketua Umum P...', '2024-01-22 05:19:53', '2024-03-20 16:05:52'),
(7, 16, 'OPTIMIS HADAPI KRISIS', '<div>0</div>', 'R3eI8PBqO1g', 9, '0', '2024-01-22 07:43:28', '2024-03-20 16:05:53'),
(8, 10, 'Hadapi Resesi Global, Anwar Abbas Kutip Kisah Nabi Yusuf Saat Menjadi Bendahara Mesir', '<div>Hadapi Resesi Global, Anwar Abbas Kutip Kisah Nabi Yusuf Saat Menjadi Bendahara Mesir</div>', '7Pk3uKJ-jDA', 8, 'Hadapi Resesi Global, Anwar Abbas Kutip Kisah Nabi Yusuf Saat Menjadi Bendahara Mesir', '2024-01-22 07:45:23', '2024-03-20 16:05:54'),
(10, 1, 'TAUHID DAN IKHLAS, 2 ENERGI YANG JADIKAN MUHAMMADIYAH KOKOH BERDIRI SAMPAI SAAT INI', '<div>0</div>', 'pW072an50Ec', 1, '0', '2024-01-22 07:48:16', '2024-02-26 18:34:46'),
(11, 2, 'TEOLOGI AL-INSYIRAH MENJADIKAN MUHAMMADIYAH SEBAGAI GERAKAN YANG BERKEMAJUAN', '<div>0</div>', 'v5TU4z35OS4', 3, '0', '2024-01-22 07:49:50', '2024-03-12 05:38:10'),
(12, 14, 'RISALAH PEREMPUAN BERKEMAJUAN PANDUAN UNTUK SEMUA KALANGAN', '<div>0</div>', 'FFMAZF8DjSs', 1, '0', '2024-01-22 07:51:06', '2024-02-26 18:35:23'),
(13, 16, 'PENGAJIAN UMUM PIMPINAN PUSAT MUHAMMADIYAH | Energi Baru Pasca Muktamar', '<div>0</div>', 'OqjMJI3lgzI', 1, '0', '2024-01-22 07:53:36', '2024-02-26 18:35:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `isyarats`
--
ALTER TABLE `isyarats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_judul_unique` (`judul`);

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
-- Indeks untuk tabel `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posters_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_id_kategori_foreign` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isyarats`
--
ALTER TABLE `isyarats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `posters`
--
ALTER TABLE `posters`
  ADD CONSTRAINT `posters_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
