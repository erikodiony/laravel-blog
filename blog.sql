-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2016 pada 10.35
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `other`, `user`, `created_at`, `updated_at`) VALUES
(1, 'JL. Indonesia Raya No.45, Kertosono, Nganjuk', '+62812345678', 'xxx@xxx.xxx', '-', 'Admin', '2016-08-25 04:25:28', '2016-09-08 00:52:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `isi`, `user`, `status`, `ip`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Pelayanan memuaskan, CCTV berkualitas, mudah di operasikan dan tentunya sesuai dengan yang diharapkan pelanggan!', 'Agus', 'Tampilkan', '192.168.137.142', 'F2JbZf9p0RsuYAlnf0w8qk3ZkF0gxtVuhpkGTCDL', '2016-10-08 21:31:13', '2016-10-09 21:46:33'),
(2, 'Harga Lumayan terjangkau, namun sesuai dengan kualitas yang didapatkan, dan pelayanan yang diberikan sangat memuaskan sehingga ketika ada kesulitan, pelanggan tak perlu bingung, Terima Kasih CCTVQu!', 'Lina', 'Tampilkan', '::1', '9Qw2PjLjJ9zblROOah4whMMKcXD3Uvz2XjjJ3d23', '2016-10-09 01:14:58', '2016-10-11 00:24:06'),
(3, 'CCTV berkualitas, pelayanan memuaskan dan harga yang ditawarkan lumayan terjangkau!', 'Andre', 'Tampilkan', '::1', 'ta1ltD99fmrQkdoi2AoWB5r5v4h1GC6Lj1XTakB5', '2016-10-10 11:46:41', '2016-10-10 11:47:11'),
(4, 'I', 'i', 'Sembunyikan', '192.168.137.142', 'hsyCrUH0Rndik9W88T4HWwUjTzTwV0W0IcZPsLQN', '2016-10-10 14:40:17', '2016-10-11 19:33:58'),
(5, 'Pelayanan sangat bagus !', 'Bagus', 'Tampilkan', '192.168.137.142', '8TcFZwpmbhGM4m6Ojx8lMal17tTVUainUOf7asb8', '2016-10-11 00:00:34', '2016-10-11 00:31:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `isi`, `jenis`, `user`, `created_at`, `updated_at`) VALUES
(1, '<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'Tentang Kami', 'Admin', '2016-09-08 02:33:12', '2016-10-06 20:47:48'),
(2, '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'Portofolio', 'Admin', '2016-09-08 03:09:00', '2016-10-06 19:55:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_25_024329_create_abouts_table', 1),
('2016_08_25_025059_create_abouts_table', 2),
('2016_08_25_101211_create_contacts_table', 3),
('2016_08_27_051045_create_slides_table', 4),
('2016_09_03_061804_create_slide_products_table', 5),
('2016_09_04_101731_create_products_table', 6),
('2016_09_07_083348_create_posts_table', 7),
('2016_09_08_024349_create_menus_table', 8),
('2016_10_08_084152_create_feedbacks_table', 9),
('2016_10_11_050325_create_polls_table', 10),
('2016_10_15_062702_create_comments_table', 11),
('2016_10_17_233333_create_photos_table', 12),
('2016_10_22_133858_create_stats_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`id`, `img`, `judul`, `jenis`, `user`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/uploads/43649.jpg', 'Kucing', 'Arsip', 'Admin', '2016-10-22 22:18:07', '2016-10-22 22:55:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polls`
--

CREATE TABLE `polls` (
  `id` int(10) UNSIGNED NOT NULL,
  `param1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `param2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `param3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `polls`
--

INSERT INTO `polls` (`id`, `param1`, `param2`, `param3`, `ip`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Bagus', 'Cukup', 'Jelek', '::1', 'iupPX2D5OvMkX7fgwtkh1RwxXJvbuvaTqXHlZm3e', '2016-10-11 00:10:25', '2016-10-11 00:10:25'),
(2, 'Bagus', 'Jelek', 'Cukup', '192.168.137.142', '8TcFZwpmbhGM4m6Ojx8lMal17tTVUainUOf7asb8', '2016-10-11 00:13:34', '2016-10-11 00:13:34'),
(3, 'Cukup', 'Jelek', 'Bagus', '::1', 'yQ3lbSUn9uaqdTtYwvD13nnLMmWTGbQ0To0kCRL2', '2016-10-11 00:17:18', '2016-10-11 00:17:18'),
(4, 'Jelek', 'Cukup', 'Bagus', '192.168.137.142', 'txLkZu9t0EnMgZO70kW7tWYHOgIAGVAbKUZJt58j', '2016-10-11 00:19:46', '2016-10-11 00:19:46'),
(5, 'Cukup', 'Cukup', 'Cukup', '192.168.137.142', 'beW1VLPCDkV3iQT3etTIffPehMKjLyyIp1nPLVp2', '2016-10-11 00:20:45', '2016-10-11 00:20:45'),
(6, 'Cukup', 'Cukup', 'Cukup', '::1', 'fbISTLsW8xJfHTaNy2eMrPUrzezVpjKKYsvomCIQ', '2016-10-11 18:08:10', '2016-10-11 18:08:10'),
(7, 'Bagus', 'Bagus', 'Bagus', '::1', 'TfzxUhHBdvO9sdqn3WVGDg1JqPFPQgLQ9IWUhIKy', '2016-10-18 00:17:37', '2016-10-18 00:17:37'),
(8, 'Bagus', 'Bagus', 'Bagus', '192.168.137.142', 'QM3kZFgZKrs1BMngKgJspf9aD4PvApx2I6GttQtn', '2016-10-18 00:21:38', '2016-10-18 00:21:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `isi`, `tag`, `jenis`, `status`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Gratis Pemasangan', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'DVR', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:37:25', '2016-10-20 22:52:59'),
(2, 'Ini Adalah Artikel Pertamaku', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>', 'IP Cam', 'Artikel', 'Publikasi', 'Admin', '2016-09-07 08:38:55', '2016-09-20 02:39:46'),
(3, 'Judul 6', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'NVR', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:39:56', '2016-09-20 14:34:24'),
(4, 'Ini adalah Post', '<p>asdasd</p>', 'IP Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:40:45', '2016-10-20 19:43:51'),
(5, '54321', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:41:39', '2016-09-20 21:50:09'),
(10, '345', '<p>345</p>', 'IP Cam', 'Promo', 'Konsep', 'Admin', '2016-09-02 08:39:56', '2016-09-01 19:13:58'),
(11, 'Promo 4', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-20 21:47:28', '2016-09-20 21:47:52'),
(12, 'Promo 5', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-20 21:48:16', '2016-09-20 21:48:16'),
(13, 'Promo 56', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'Analog Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-20 21:48:47', '2016-09-20 21:48:47'),
(14, 'Ini adalah Atrikel yang berkaitan dengan artikel ini', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Artikel', 'Publikasi', 'Admin', '2016-09-20 21:51:26', '2016-09-20 21:51:26'),
(15, 'Ini adalah Atrikel yang berkaitan dengan artikel ini', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Artikel', 'Publikasi', 'Admin', '2016-09-20 21:51:30', '2016-09-20 21:51:30');
INSERT INTO `posts` (`id`, `judul`, `isi`, `tag`, `jenis`, `status`, `user`, `created_at`, `updated_at`) VALUES
(16, 'In adalah ANU', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'NVR', 'Artikel', 'Publikasi', 'Admin', '2016-09-20 21:52:11', '2016-09-20 21:52:11'),
(17, 'Artikel 3', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'DVR', 'Artikel', 'Publikasi', 'Admin', '2016-09-20 21:52:37', '2016-09-20 21:52:37'),
(18, 'ArtikelXXX', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'Analog Cam', 'Artikel', 'Konsep', 'Admin', '2016-09-20 21:53:06', '2016-09-20 23:13:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `judul`, `isi`, `tag`, `status`, `user`, `created_at`, `updated_at`) VALUES
(2, 'Produk1', '<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>', 'Analog Cam', 'Publikasi', 'Admin', '2016-09-07 16:57:16', '2016-10-20 23:59:21'),
(3, 'qwe123456789', '<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>', 'IP Cam', 'Publikasi', 'Admin', '2016-09-07 19:14:56', '2016-10-06 23:01:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_ke` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `string_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `slide_ke`, `judul`, `isi`, `string_url`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Slide 1', 'Slide 1', '', 'http://localhost/blog/assets/img/uploads/slide/99061.jpg', 'Admin', '2016-08-26 21:17:13', '2016-10-16 17:43:01'),
(2, 'Slide 2', 'Corak Warna', 'Gambar Warna Warni', 'http://localhost/blog/assets/img/uploads/slide/47976.jpg', 'Admin', '2016-08-26 21:17:13', '2016-10-16 17:43:46'),
(3, 'Slide 3', '', 'Ini adalah gambar pensil warna milikku', 'http://localhost/blog/assets/img/uploads/slide/99061.jpg', 'Admin', '2016-08-26 21:17:13', '2016-10-16 17:43:59'),
(4, 'Slide 4', 'Slide 4', '', 'http://localhost/blog/assets/img/uploads/slide/47976.jpg', 'Admin', '2016-08-26 21:17:13', '2016-10-16 17:43:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide_products`
--

CREATE TABLE `slide_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `string_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `slide_products`
--

INSERT INTO `slide_products` (`id`, `label`, `string_url`, `user`, `created_at`, `updated_at`) VALUES
(1, 'IP Cam', 'http://www.stealth.co.id/wp-content/uploads/2013/09/Stealth-IP-CCTV-Camera-Megapixel-Series-SIP-MP-W40-202x113.jpg', 'Admin', '2016-08-26 21:17:13', '2016-08-26 21:17:13'),
(2, 'NVR', 'http://www.dunia-cctv.com/images/avh306.jpg', 'Admin', '2016-08-26 21:17:13', '2016-09-04 01:38:48'),
(3, 'Analog Cam', 'http://www.cepro.com/images/uploads/channel_vision_cam_300.jpg', 'Admin', '2016-08-26 21:17:13', '2016-09-08 01:02:23'),
(4, 'DVR', 'http://www.anugrahpratama.com/a/wp-content/uploads/2015/05/Best-Seller-CCTV-Security-Kits-DVR-CCTV-Camera-Adaptor-Cables.jpg', 'Admin', '2016-08-26 21:17:13', '2016-09-08 01:06:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `device` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stats`
--

INSERT INTO `stats` (`id`, `user`, `token`, `ip`, `country`, `device`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '87cf6fb04b4235819d33d37bcd4eea1218885ba0', '::1', '-', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36 OPR/40.0.2308.90', '2016-10-22 22:44:48', '2016-10-22 22:44:48'),
(2, 'Pengunjung', '87cf6fb04b4235819d33d37bcd4eea1218885ba0', '::1', '-', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.76 Mobile Safari/537.36', '2016-10-22 22:45:32', '2016-10-22 22:45:32'),
(3, 'Pengunjung', '26729bcd5740204b6c283ffa8ffb1a986e828810', '192.168.137.142', '-', 'Mozilla/5.0 (Windows Phone 10.0; Android 6.0.1; Microsoft; RM-1090) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Mobile Safari/537.36 Edge/14.14393', '2016-10-22 22:58:06', '2016-10-22 22:58:06'),
(4, 'Admin', 'd06c4c166fde54378bf2a7caf3de2682ec78b8dd', '192.168.137.142', '-', 'Mozilla/5.0 (Windows Phone 10.0; Android 6.0.1; Microsoft; RM-1090) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Mobile Safari/537.36 Edge/14.14393', '2016-10-22 23:02:20', '2016-10-22 23:02:20'),
(5, 'Admin', '64a320f2f0e96a7fb54a7af705380dc67b2406e8', '::1', '-', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36 OPR/40.0.2308.90', '2016-10-23 01:15:28', '2016-10-23 01:15:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usr` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `usr`, `pwd`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$3XNziMbNZYU40UYrHhmL8eZGeyqZWprU28BDEVRUJ0.UIWI1AEdZu', 'RbhWqRwxN0sxVivGcxy4navk61uU36kaW165U6UE53NiA2OMNYj8MAfnKISC', '2016-08-08 17:00:00', '2016-10-23 01:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_products`
--
ALTER TABLE `slide_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`usr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slide_products`
--
ALTER TABLE `slide_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
