-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2016 pada 12.52
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `body`, `user`, `created_at`, `updated_at`) VALUES
(1, '<p style="text-align: center;"><strong><span style="font-size: 14pt;">Ini adalah halaman Tentang Kami!</span></strong></p>\r\n<p style="text-align: left;"><strong><span style="font-size: 14pt;">Kami adalah (...)</span></strong></p>', 'Admin', '2016-08-24 19:55:44', '2016-09-02 22:25:18');

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
(1, '<p>Ini adalah laman Tentang Kami!&nbsp;<img src="../../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" /></p>', 'Tentang Kami', 'Admin', '2016-09-08 02:33:12', '2016-09-12 18:47:29'),
(2, '<p>Ini adalah Laman Portofolio</p>', 'Portofolio', 'Admin', '2016-09-08 03:09:00', '2016-09-08 00:25:33');

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
('2016_09_08_024349_create_menus_table', 8);

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
(1, 'Gratis Pemasangan selama 1Bulan', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'DVR', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:37:25', '2016-09-20 16:21:50'),
(2, 'Ini Adalah Artikel Pertamaku', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>', 'IP Cam', 'Artikel', 'Publikasi', 'Admin', '2016-09-07 08:38:55', '2016-09-20 02:39:46'),
(3, 'Judul 6', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'NVR', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:39:56', '2016-09-20 14:34:24'),
(4, 'Ii adalah an45', '<p>asdasd</p>', 'IP Cam', 'Artikel', 'Konsep', 'Admin', '2016-09-07 08:40:45', '2016-09-07 19:04:03'),
(5, '54321', '<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>\r\n<p>Oportere expetendis omittantur et pri, sit ad tota dicam ponderum. Nihil corpora cu sit, eu errem prompta democritum sed, eum porro molestiae ei. In has velit animal petentium. At sed novum erant expetendis, an pri iisque prodesset. Duo an verterem iudicabit, phaedrum liberavisse id vix, et assum splendide vim. Vel cu mediocrem constituam, ullum docendi inciderint ex nam.</p>\r\n<p>Nec cu tota elitr suscipiantur, noluisse vituperata constituam te pro. Id torquatos suscipiantur cum, facer alienum sit ut, ex eos dicat clita. Ea qui posse posidonium. Est ut platonem salutandi conceptam, quis volutpat liberavisse per et, nostro malorum per te. Noluisse maluisset ex vel. Te aliquid feugiat eligendi his, sed et antiopam mnesarchum.</p>\r\n<p>Vocibus detraxit delicatissimi duo at, veniam nonumes gloriatur his id, falli dictas accusamus cu pro. Vidisse propriae disputationi ea cum, amet elaboraret et pro. Ea sed euismod mentitum, te sint stet cetero vis. Mel an ferri oratio volutpat. Mel ei odio magna deserunt, et ius explicari corrumpit.</p>\r\n<p>Audiam honestatis pri ea. Nam an dicam laboramus, ex erant nominavi temporibus nam, cu his esse nostrud corpora. Vix ullum munere persequeris ei. Id diam alia graeci est, sea sonet facete utroque in. Quo at tale equidem, vero admodum repudiare nam no.</p>\r\n<p>Duo posse democritum cu, in duo libris rationibus. His ea scripta molestie, an placerat similique sit, mea veritus nusquam id. Scaevola detraxit delicatissimi no per. Eos at dicit ridens nominavi. Ullum omnesque definitiones est an, quot solet per ne. An ceteros detraxit voluptatibus pro.</p>\r\n<p>Eum soluta audiam ad, vis quem impedit adipisci in. Eu est sumo impedit facilisi. Prima nostrud torquatos id mel. Per voluptua disputando interpretaris no, sonet nullam iriure per et, eam ea commodo singulis.</p>\r\n<p>Eu has modo modus. Tempor feugait eu usu, diceret platonem an eos. Solum possit sea in, eu has agam vero minimum. Sea at facer consulatu definitiones, hinc quidam alienum eos ea. Ius decore feugait similique at. Eum etiam semper feugait et.</p>\r\n<p>Vix modo fastidii definiebas ex, saepe delicata petentium in sit, has in legimus perfecto. Meis posse mea te, vix eu purto dicta. No clita torquatos qui, nec putent appellantur ei, gubergren forensibus mei ex. Est ea vitae aliquid. Usu vidisse minimum adipisci ut, eu autem scaevola explicari duo.</p>\r\n<p>Est quis modo ne. Ex impetus meliore oportere mea, oblique accommodare ut qui, has case iisque commune et. Vel omnis autem novum eu, diam alterum democritum ex sed. Id novum timeam sententiae ius. Eu sea omnes vitae, per id quis ignota maluisset, sit id facilisis dissentiet vituperatoribus.</p>\r\n<p>Lorem ipsum dolor sit amet, ex eruditi fastidii dissentiunt mei. Nam everti suscipit et, no mel probo disputando instructior. Putent ceteros phaedrum mei eu, duo ea eirmod oportere accommodare, est ei error iudicabit. Qui te modo unum novum, pri eu epicuri voluptaria. Discere civibus te pri, nec no hinc inermis. Ne ullum lucilius mel, alii contentiones reprehendunt vim ea.</p>', 'IP Cam', 'Promo', 'Publikasi', 'Admin', '2016-09-07 08:41:39', '2016-09-20 21:50:09'),
(10, '345', '<p>345</p>', 'IP Cam', 'Promo', 'Konsep', 'Admin', '2016-09-07 19:13:58', '2016-09-07 19:13:58'),
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
(2, 'Produk gagal', '<p>234234</p>', 'IP Cam', 'Konsep', 'Admin', '2016-09-07 16:57:16', '2016-09-07 16:57:16'),
(3, 'qwe123456789', '<p>qwe123</p>', 'IP Cam', 'Publikasi', 'Admin', '2016-09-07 19:14:56', '2016-09-19 23:00:17');

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
(1, 'Slide 1', '', '', 'http://dunia-cctv.com/images/slideshow/2015-01-24_bannerSELURUHINDONESIA.jpg', 'Admin', '2016-08-26 21:17:13', '2016-08-31 01:57:38'),
(2, 'Slide 2', 'Corak Warna', 'Gambar Warna Warni', 'http://localhost/blog/assets/img/uploads/slide/62632.jpg', 'Admin', '2016-08-26 21:17:13', '2016-09-21 00:30:33'),
(3, 'Slide 3', '', 'Ini adalah gambar pensil warna milikku', 'http://localhost/blog/assets/img/uploads/slide/47976.jpg', 'Admin', '2016-08-26 21:17:13', '2016-09-08 00:56:58'),
(4, 'Slide 4', 'Slide 4', '', '', 'Admin', '2016-08-26 21:17:13', '2016-09-03 21:52:04');

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
(1, 'Admin', '$2y$10$3XNziMbNZYU40UYrHhmL8eZGeyqZWprU28BDEVRUJ0.UIWI1AEdZu', '73kA4NvaY7pdIra8oyIU7wLwYbBkxhi5G4CzaXAHetMAiQP3vWzyMUgkk5SL', '2016-08-08 17:00:00', '2016-09-20 04:46:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`usr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
