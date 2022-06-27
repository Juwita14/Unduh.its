-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 27, 2022 at 05:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unduh_database`
--

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
-- Table structure for table `file_installer`
--

CREATE TABLE `file_installer` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `nama_file_installer` varchar(300) NOT NULL,
  `size` float NOT NULL,
  `file_download` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_installer`
--

INSERT INTO `file_installer` (`id_software`, `id`, `nama_file_installer`, `size`, `file_download`) VALUES
(3, 8, 'Mathematica_9.0.0_WIN', 1.12, 'Mathematica_9.0.0_WIN.exe'),
(5, 16, 'Minitab', 326.007, 'mtb1623mu.zip'),
(4, 18, 'LabVIEW2013', 1.471, 'LabVIEW2013.rar');

-- --------------------------------------------------------

--
-- Table structure for table `file_panduan`
--

CREATE TABLE `file_panduan` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `nama_file_panduan` varchar(300) NOT NULL,
  `namaFIles` varchar(300) NOT NULL,
  `namapanduan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_panduan`
--

INSERT INTO `file_panduan` (`id_software`, `id`, `nama_file_panduan`, `namaFIles`, `namapanduan`) VALUES
(3, 35, 'Panduan Mathematica', 'LANGKAH_AKTIVASI_SOFTWARE_MATHEMATICA_9.pdf', 'LANGKAH_AKTIVASI_SOFTWARE_MATHEMATICA_9.pdf'),
(4, 41, 'Panduan Instalasi LabView', 'Panduan_Instalasi_LabView.pdf', 'Panduan_Instalasi_LabView.pdf'),
(5, 43, 'Installasi dan Aktifasi Minitab', 'Installasi_dan_Aktifasi_Minitab.pdf', 'Installasi_dan_Aktifasi_Minitab.pdf'),
(2, 45, 'Panduan nstallasi Matlab R2018b lisensi Concurrent ITS', 'PETUNJUK_Installasi_Matlab_R2018b_lisensi_Concurrent_ITS.pdf', 'PETUNJUK_Installasi_Matlab_R2018b_lisensi_Concurrent_ITS.pdf'),
(2, 47, 'Panduan Install dan Aktivasi Matlab ITS', 'PETUNJUK_Installasi_dan_Aktivasi_Matlab_01_ITS.pdf', 'PETUNJUK_Installasi_dan_Aktivasi_Matlab_01_ITS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `fitur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id_software`, `id`, `fitur`) VALUES
(5, 59, '<p><strong>1. Manajemen Data dan File</strong></p>\r\n\r\n<ul>\r\n	<li>File proyek all-in-one mencakup seluruh analisis</li>\r\n	<li>Lembar kerja seperti spreadsheet</li>\r\n	<li>Lembar kerja tak terbatas, dengan hingga 4000 kolom dan baris tak terbatas di masing-masing</li>\r\n	<li>Impor/ekspor: Excel, Teks, CSV, HTML, dll.</li>\r\n	<li>Database kueri dengan ODBC</li>\r\n</ul>\r\n\r\n<p><strong>2. Statistik Dasar</strong></p>\r\n\r\n<ul>\r\n	<li>File proyek all-in-one mencakup seluruh analisis</li>\r\n	<li>Lembar kerja seperti spreadsheet</li>\r\n	<li>Lembar kerja tak terbatas, dengan hingga 4000 kolom dan baris tak terbatas di masing-masing</li>\r\n	<li>Impor/ekspor: Excel, Teks, CSV, HTML, dll.</li>\r\n	<li>Database kueri dengan ODBC</li>\r\n</ul>\r\n\r\n<p><strong>3. Analisis regresi</strong></p>\r\n\r\n<ul>\r\n	<li>Regresi linier</li>\r\n	<li>Regresi nonlinier</li>\r\n	<li>Regresi ortogonal</li>\r\n	<li>Regresi logistik biner, ordinal dan nominal</li>\r\n</ul>\r\n\r\n<p><strong>4. Analisis Varians</strong></p>\r\n\r\n<ul>\r\n	<li>ANOVA</li>\r\n	<li>Model linier umum (GLM)</li>\r\n	<li>Desain bersarang yang tidak seimbang</li>\r\n	<li>MANOVA</li>\r\n</ul>\r\n\r\n<p><strong>5. dst</strong></p>'),
(4, 60, '<p>Fitur baru yang ditambahkan antara lain:</p>\r\n\r\n<ul>\r\n	<li>New - Event Inspector Window&nbsp;</li>\r\n	<li>New - High Priority events</li>\r\n	<li>New - Flush Event Queue Function</li>\r\n	<li>New - VI Scripting methods and properties for events</li>\r\n	<li>New - Mouse Scroll Wheel Event</li>\r\n	<li>Improvements to the Edit Events Dialog:\r\n	<ul>\r\n		<li>You can filter search the list of event sources and events. For easy navigation.</li>\r\n		<li>You can limit instances of the event in the static queue (Similar to Flush Queue function)</li>\r\n	</ul>\r\n	</li>\r\n</ul>'),
(1, 75, '<p>asasas</p>'),
(3, 99, '<p><em>Mathematica</em>&nbsp;9 menambahkan area utama baru, lebih jauh memperluas&nbsp;basis algoritme, pengetahuan, dan kemampuan antarmuka.</p>\r\n\r\n<ul>\r\n	<li>Social Network Analysis<br />\r\n	Rangkaian lengkap fungsi analisis jaringan sosial, termasuk deteksi komunitas, grup kohesif, dan pengukuran sentralitas, ditambah tautan bawaan ke Facebook, LinkedIn, Twitter, dan banyak lagi.</li>\r\n	<li>Systemwide Support for Units<br />\r\n	Dukungan yang sangat terintegrasi untuk lebih dari 4.500 unit&mdash;termasuk entri linguistik bentuk bebas, konversi, dan pemeriksaan konsistensi dimensi di seluruh grafik dan perhitungan numerik dan simbolis.</li>\r\n	<li>Penerapan EnterpriseCDF<br />\r\n	Mathematica Enterprise Edition yang baru memungkinkan penerapan CDF langsung dengan data langsung saat runtime dan fitur lain yang disempurnakan. Mode pratinjau meniru Wolfram CDF Player dan Wolfram Player Pro .</li>\r\n	<li>Pemrosesan Gambar Volumetrik 3D<br />\r\n	Mesin pemrosesan gambar sekarang mendukung pencitraan volumetrik 3D seperti operasi piksel, pemfilteran lokal, dan morfologi. Termasuk rendering permukaan dan volume 3D.</li>\r\n	<li>Algoritma Pemrosesan Gambar Tingkat Lanjut Baru<br />\r\n	Gunakan pelacakan fitur, deteksi wajah, penyempurnaan gambar, dan algoritme lain yang sangat dioptimalkan untuk melakukan analisis gambar yang komprehensif.</li>\r\n	<li>Interactive Image Assistant<br />\r\n	Cara baru untuk menemukan kemampuan pemrosesan gambar, dengan with point-and-click access semua dalam lingkungan notebook.</li>\r\n	<li>Pemrosesan Sinyal Analog dan Digital Terintegrasi<br />\r\n	Filter dan analisis sinyal&mdash;suara, gambar, dan data multidimensi&mdash;dan langsung rancang dan terapkan filter interaktif. Mendukung SystemModeler.</li>\r\n	<li>Peningkatan Utama untuk Pemecahan Persamaan Diferensial<br />\r\n	Memecahkan persamaan diferensial dengan diskontinuitas, sistem dinamis diskrit/kontinu hybrid, persamaan diferensial parametrik , dan persamaan aljabar diferensial.</li>\r\n	<li>Berbagai Dukungan Akses Web<br />\r\n	Akses web sisi klien penuh untuk bertukar data dengan server jarak jauh dan untuk berinteraksi dengan API web. Koneksi asinkron untuk pemrograman gaya AJAX.</li>\r\n</ul>'),
(2, 105, '<p><strong>R2015a</strong> menghadirkan fitur-fitur baru di MATLAB dan Simulink sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>MATLAB: Dukungan untuk Arduino Leonardo dan&nbsp;Arduino boards lainnya</li>\r\n	<li>Simulink: Kontrol grafis dan tampilan untuk penyetelan dan simulasi pengujian</li>\r\n	<li>KStatistics and Machine Learning Toolbox (sebelumnya&nbsp;Statistics Toolbox): Aplikasi Classification Learner untuk model pelatihan dan mengklasifikasikan data menggunakan pembelajaran mesin yang diawasi</li>\r\n	<li>MATLAB Compiler SDK: Ekstensi ke MATLAB Compiler untuk membuat komponen C/C++, Java, dan .NET</li>\r\n	<li>Communications System Toolbox: Konektivitas dan penargetan untuk SDR berbasis Zynq, metode sinkronisasi baru untuk penerima nirkabel, dan contoh tautan QAM ujung ke ujung</li>\r\n	<li>Antenna Toolbox: Produk baru untuk merancang, menganalisis, dan memvisualisasikan elemen antena dan susunan antena</li>\r\n	<li>Robotics System Toolbox: Produk baru untuk merancang dan menguji algoritme untuk aplikasi robotika</li>\r\n	<li>Simulink Test: Produk baru untuk membuat rangkaian uji, membuat rangkaian uji kompleks, dan mengelola uji berbasis simulasi</li>\r\n	<li>Vision HDL Toolbox: Produk baru untuk merancang pemrosesan gambar, video, dan sistem visi komputer untuk FPGA dan ASI</li>\r\n</ul>\r\n\r\n<p><strong>R2018b</strong> menghadirkan fitur-fitur antara lain:</p>\r\n\r\n<ul>\r\n	<li>Analisis data\r\n	<ul>\r\n		<li>Argumen Dimensi Vektor: Beroperasi pada beberapa dimensi sekaligus untuk fungsi reduksi yang dipilih</li>\r\n		<li>grouptransformFungsi: Mengubah tabel atau data jadwal berdasarkan grup groupsummaryFungsi: Melakukan perhitungan ringkasan grup pada matriks tallArray: Tulis algoritme khusus untuk beroperasi pada array tinggi</li>\r\n	</ul>\r\n	</li>\r\n	<li>Impor dan Ekspor Data\r\n	<ul>\r\n		<li>Alat Impor: Hasilkan kode yang ditingkatkan saat mengimpor dari spreadsheet</li>\r\n		<li>Data Berbasis Web: Baca dari sumber data berbasis web seperti Amazon Web Services dan Azure Blob Storage menggunakan readtable, detectImportOptions, spreadsheetDatastore, imread, dan imfinfo</li>\r\n		<li>writeFungsi: Tulis array tinggi dalam berbagai format ke lokasi lokal atau jauh</li>\r\n	</ul>\r\n	</li>\r\n	<li>grafis\r\n	<ul>\r\n		<li>Interaksi Sumbu: Jelajahi data dengan menggeser, memperbesar, tips data, dan rotasi 3-D diaktifkan secara default</li>\r\n		<li>Bilah Alat Sumbu: Mengakses dan menyesuaikan bilah alat eksplorasi data untuk setiap objek Sumbu</li>\r\n		<li>Plot Geografis: Buat plot garis, sebaran, dan kepadatan titik pada peta interaktif dan kendalikan properti sumbu geografis</li>\r\n	</ul>\r\n	</li>\r\n</ul>');

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
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2019_08_19_000000_create_failed_jobs_table', 1),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `persyaratan_sistem`
--

CREATE TABLE `persyaratan_sistem` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `persyaratan_sistem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persyaratan_sistem`
--

INSERT INTO `persyaratan_sistem` (`id_software`, `id`, `persyaratan_sistem`) VALUES
(3, 41, '<ul>\r\n	<li>Prosesor: Intel Pentium IV 2.4 GHz</li>\r\n	<li>Ruang Disk: 5,5 GB</li>\r\n	<li>Memori Sistem (RAM): 2 GB+ direkomendasikan</li>\r\n	<li>GPU: Untuk menggunakan kemampuan komputasi GPU bawaan Mathematica 9, Anda memerlukan kartu grafis yang mendukung OpenCL atau CUDA, seperti banyak kartu dari NVIDIA, AMD, dan lainnya.</li>\r\n	<li>Mathematica 9 tersedia pada platform Windows, Mac, dan Linux</li>\r\n</ul>'),
(1, 44, 'Peramban web Chrome, Firefox, Safari, dan Edge. Catatan: JavaScript harus diaktifkan.'),
(5, 51, '<ul>\r\n	<li><strong>Sistem Operasi</strong>&nbsp;- XP, Vista, atau Windows 7 atau 8 versi 32-bit dan 64-bit</li>\r\n	<li><strong>RAM</strong>&nbsp;- 512 MB (minimal);&nbsp;1+ GB (disarankan)</li>\r\n	<li><strong>Prosesor</strong>&nbsp;- Pentium 4 atau setara</li>\r\n	<li><strong>Ruang Hard Disk:</strong>\r\n	<ul>\r\n		<li><strong>Multi-Pengguna</strong>&nbsp;- tersedia ruang kosong 140 MB (minimum)</li>\r\n		<li><strong>Single-User</strong>&nbsp;- 160 MB (minimum) ruang kosong yang tersedia</li>\r\n		<li><strong>Paket Bahasa</strong>&nbsp;- Tambahan ruang kosong 55 MB per Paket Bahasa yang diinstal</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Resolusi Layar</strong>&nbsp;- 1024 x 768 atau lebih tinggi</li>\r\n	<li><strong>Adobe&reg; Reader</strong>&nbsp;- Versi 5.0 atau lebih tinggi diperlukan untuk&nbsp;<em>Meet Minitab</em></li>\r\n	<li><strong>Konektivitas: Koneksi</strong>&nbsp;internet diperlukan untuk aktivasi lisensi pengguna tunggal</li>\r\n</ul>'),
(4, 52, '<ul>\r\n	<li><strong>Processor</strong>&nbsp;- Pentium III/Celeron 866 MHz atau setara</li>\r\n	<li><strong>RAM</strong>&nbsp;- 256 MB</li>\r\n	<li><strong>Screen Resolution</strong>&nbsp;- 1024 x 768 Piksel</li>\r\n	<li><strong>Operating System:</strong>\r\n	<ul>\r\n		<li>Windows 8.1/8/7/Vista (32-bit and 64-bit)</li>\r\n		<li>Windows XP SP3 (32-bit)</li>\r\n		<li>Windows Server 2008 R2 (64-bit)</li>\r\n		<li>Windows Server 2003 R2 (32-bit)</li>\r\n	</ul>\r\n	</li>\r\n	<li>Setidaknya 250 MB ruang disk</li>\r\n</ul>'),
(1, 53, '<p>Persyaratan memori Memori minimal 4 GB.asas</p>'),
(2, 67, '<p><strong>Persyartan Sistem&nbsp;Matlab 2015:</strong></p>\r\n\r\n<ul>\r\n	<li>Windows\r\n	<ul>\r\n		<li>Operating Systems: Windows 10: Windows 8</li>\r\n		<li>Processors: Intel or AMD x86 processor&nbsp;</li>\r\n		<li>Disk Space: 1 GB untuk MATLAB&nbsp;3-4 GB untuk pemasangan biasa</li>\r\n		<li>RAM: 2 GB</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Linux\r\n	<ul>\r\n		<li>Operating Systems: Ubuntu 14.04 LTS and 14.10, Red Hat Enterprise Linux 6 and 7&nbsp;</li>\r\n		<li>Processors: Any Intel or AMD x86&nbsp;</li>\r\n		<li>Disk Space: 1 GB untuk MATLAB,&nbsp;3-4 GB untuk pemasangan biasa</li>\r\n		<li>RAM: 2 GB (disarankan 4 GB)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Persyartan Sistem&nbsp;Matlab 2018b:</strong></p>\r\n\r\n<ul>\r\n	<li>Windows\r\n	<ul>\r\n		<li>Operating Systems: Windows 10, Windows 7.</li>\r\n		<li>Processors:\r\n		<ul>\r\n			<li>Minimal prosesor Intel atau AMD x86-64</li>\r\n			<li>Direkomendasikan prosesor Intel atau (AMD x86-64)</li>\r\n		</ul>\r\n		</li>\r\n		<li>Disk Space:\r\n		<ul>\r\n			<li>Minimum 2,6 GB ruang HDD untuk MATLAB saja, 4-6 GB untuk instalasi biasa</li>\r\n			<li>Direkomendasikan Sebuah SSD</li>\r\n		</ul>\r\n		</li>\r\n		<li>RAM: Minimal 4 GB. Direkomendasikan 8 GB</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Linux\r\n	<ul>\r\n		<li>Operating Systems: Ubuntu 18.04 LTS, Ubuntu 16.04 LTS, Ubuntu 14.04 LTS, Debian 9, Debian 8</li>\r\n		<li>Processors:\r\n		<ul>\r\n			<li>Minimal prosesor Intel atau AMD x86-64</li>\r\n			<li>Direkomendasikan prosesor Intel atau AMD x86-64</li>\r\n		</ul>\r\n		</li>\r\n		<li>Disk Space:\r\n		<ul>\r\n			<li>Minimum 2,6 GB ruang HDD untuk MATLAB saja, 4-6 GB untuk instalasi biasa</li>\r\n			<li>Direkomendasikan Sebuah SSD</li>\r\n		</ul>\r\n		</li>\r\n		<li>RAM: Minimal 4 GB. Direkomendasikan 8 GB</li>\r\n	</ul>\r\n	</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `preview`
--

CREATE TABLE `preview` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `nama_gambar` varchar(256) NOT NULL,
  `namaFiles` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preview`
--

INSERT INTO `preview` (`id_software`, `id`, `nama_gambar`, `namaFiles`) VALUES
(3, 28, 'Mathematica1', 'mathematica1.PNG'),
(1, 29, 'Creative Cloude', 'adobe1.PNG'),
(2, 44, 'Matlab 2015', 'matlabbbb.PNG'),
(1, 62, 'Photoshop', 'Adobe-photoshop-cc-2019.jpg'),
(1, 63, 'Illustrator', 'illustrator.jpg'),
(1, 64, 'Indesign', 'indesign.png'),
(1, 68, 'Acrobat DC', 'Acrobat DC.png'),
(1, 69, 'Premiere Pro', 'Premiere Pro.png'),
(1, 70, 'Adobe XD', 'XD.png'),
(2, 71, 'Matlab 2015 1', 'matlab.PNG'),
(2, 72, 'Matlab 2015 2', 'matlab1.png'),
(3, 73, 'Factor Mathematica', 'mathematica facttor.jpg'),
(4, 74, 'National Instruments LabVIEW 2013', 'National Instrument.jpg'),
(4, 75, 'LabVIEW 2013', 'labview 2013.PNG'),
(5, 78, 'Minitab 1', 'minitab1.PNG'),
(5, 79, 'Minitab 2', 'minitab2.PNG'),
(2, 81, 'Matlab 2018b', '2018b.PNG'),
(5, 83, 'Minitab 3', 'minitab 3.png');

-- --------------------------------------------------------

--
-- Table structure for table `ringkasan`
--

CREATE TABLE `ringkasan` (
  `id_software` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `ringkasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ringkasan`
--

INSERT INTO `ringkasan` (`id_software`, `id`, `ringkasan`) VALUES
(4, 27, 'LabVIEW software is ideal for any measurement or control system, and the heart of the NI design platform. Integrating all the tools that engineers and scientists need to build a wide range of applications in dramatically less time, LabVIEW is a development environment for problem solving, accelerated productivity, and continual innovation.'),
(4, 28, '<p>LabVIEW is a graphical programming platform that helps engineers scale from design to test and from small to large systems. It offers unprecedented integration with existing legacy software, IP, and hardware while capitalizing on the latest computing technologies. LabVIEW provides tools to solve today&rsquo;s problems&mdash;and the capacity for future innovation&mdash;faster and more effectively.</p>\r\n\r\n<p>Untuk melakukan download software berlisensi, pengguna&nbsp;harus terkoneksi dengan jaringan intranet. Pengguna silahkan login dengan menggunakan username email berdomain [at]its.ac.id dengan password email dari pengguna.</p>'),
(3, 29, '<p>ITS memiliki lisensi Mathematica versi 9 yang bersifat perpetual dan dapat dijalankan melalui jaringan lokal(intranet) ITS. Software ini dapat diinstall dan digunakan pada laboratorium atau untuk keperluan riset. Terdapat 30 concurent licenses yang dapat digunakan melalui intranet ITS.</p>\r\n\r\n<ol>\r\n	<li>Gunakan IP Server beerikut ini untuk aktivasi Mathematica:&nbsp;<strong>10.199.6.23</strong></li>\r\n	<li>Software ini memerlukan komunikasi ke server ITS untuk verifikasi penggunaan.</li>\r\n	<li>Selamat menggunakan.</li>\r\n</ol>\r\n\r\n<p>Informasi tentang Mathematica, silakan kunjungi <a href=\"https://www.wolfram.com/mathematica/\" target=\"_blank\">Offical Wolfram Mathematica.</a></p>\r\n\r\n<p>Untuk melakukan download software berlisensi, pengguna&nbsp;harus terkoneksi dengan jaringan intranet. Pengguna silahkan login dengan menggunakan username email berdomain [at]its.ac.id dengan password email dari pengguna.</p>'),
(5, 39, '<p>Merupakan aplikasi statistika yang banyak digunakan untuk mempermudahkan pengolahan data statistik. Baik itu untuk tujuan sosial dan teknik. ITS telah membeli Lisensi Perpetual untuk penggunaan secara jaringan dengan batas penggunaan aktif secara bersamaan sebanyak 25 pengguna.</p>\r\n\r\n<p>Untuk melakukan download software berlisensi, pengguna&nbsp;harus terkoneksi dengan jaringan intranet. Pengguna silahkan login dengan menggunakan username email berdomain [at]its.ac.id dengan password email dari pengguna.</p>'),
(2, 40, '<p>ITS memiliki lisensi Matlab Toolbox tanpa batas Artinya semua toolbox sudah tersedia dan bisa digunakan. Lisensi yang dimiliki bersifat Perpetual dan dijalankan pada tanpa harus konek jaringan lokal ITS atau intranet ITS. Tetapi waktu proses instalasi Matlab harus menggunakan jaringan internet (Jaringan bukan intarnet ITS bisa). Lisensi ini bisa digunakan dengan terlebih dahulu menginstall source yang disediakan dan dapat diinstall pada laboratorium atau jurusan.</p>\r\n\r\n<p>Untuk file download serta informasi tentang software MATLAB silahkan kunjungi&nbsp;&nbsp;<a href=\"https://www.mathworks.com/products/matlab.html\">MathWorks</a></p>\r\n\r\n<table align=\"left\" border=\"0.4\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:600px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>1.</td>\r\n			<td>Simulink</td>\r\n			<td>49.</td>\r\n			<td>Powertrain Blockset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.</td>\r\n			<td>5G Toolbox</td>\r\n			<td>50.</td>\r\n			<td>Predictive Maintenance Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.</td>\r\n			<td>AUTOSAR Blockset</td>\r\n			<td>51.</td>\r\n			<td>RF Blockset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.</td>\r\n			<td>Aerospace Blockset</td>\r\n			<td>52.</td>\r\n			<td>RF Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.</td>\r\n			<td>Aerospace Toolbox</td>\r\n			<td>53.</td>\r\n			<td>ROS Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6.</td>\r\n			<td>Antenna Toolbox</td>\r\n			<td>54.</td>\r\n			<td>Reinforcement Learning Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7.</td>\r\n			<td>Audio Toolbox</td>\r\n			<td>55.</td>\r\n			<td>Risk Management Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8.</td>\r\n			<td>Automated Driving Toolbox</td>\r\n			<td>56.</td>\r\n			<td>Robotics System Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9.</td>\r\n			<td>Bioinformatics Toolbox</td>\r\n			<td>57.</td>\r\n			<td>Robust Control Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10.</td>\r\n			<td>Communications Toolbox</td>\r\n			<td>58.</td>\r\n			<td>Sensor Fusion and Tracking Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11.</td>\r\n			<td>Computer Vision Toolbox</td>\r\n			<td>59.</td>\r\n			<td>SerDes Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12.</td>\r\n			<td>Control System Toolbox</td>\r\n			<td>60.</td>\r\n			<td>Signal Processing Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13.</td>\r\n			<td>Curve Fitting Toolbox</td>\r\n			<td>61.</td>\r\n			<td>SimBiology</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14.</td>\r\n			<td>DSP System Toolbox</td>\r\n			<td>62.</td>\r\n			<td>SimEvents</td>\r\n		</tr>\r\n		<tr>\r\n			<td>15.</td>\r\n			<td>Data Acquisition Toolbox</td>\r\n			<td>63.</td>\r\n			<td>Simscape</td>\r\n		</tr>\r\n		<tr>\r\n			<td>16.</td>\r\n			<td>Database Toolbox</td>\r\n			<td>64.</td>\r\n			<td>Simscape Driveline</td>\r\n		</tr>\r\n		<tr>\r\n			<td>17.</td>\r\n			<td>Datafeed Toolbox</td>\r\n			<td>65.</td>\r\n			<td>Simscape Electrical</td>\r\n		</tr>\r\n		<tr>\r\n			<td>18.</td>\r\n			<td>Deep Learning Toolbox</td>\r\n			<td>66.</td>\r\n			<td>Simscape Fluids</td>\r\n		</tr>\r\n		<tr>\r\n			<td>19.</td>\r\n			<td>Econometrics Toolbox</td>\r\n			<td>67.</td>\r\n			<td>Simscape Multibody</td>\r\n		</tr>\r\n		<tr>\r\n			<td>20.</td>\r\n			<td>Embedded Coder</td>\r\n			<td>68.</td>\r\n			<td>Simulink 3D Animation</td>\r\n		</tr>\r\n		<tr>\r\n			<td>21.</td>\r\n			<td>Filter Design HDL Coder</td>\r\n			<td>69.</td>\r\n			<td>Simulink Check</td>\r\n		</tr>\r\n		<tr>\r\n			<td>22.</td>\r\n			<td>Financial Instruments Toolbox</td>\r\n			<td>70.</td>\r\n			<td>Simulink Code Inspector</td>\r\n		</tr>\r\n		<tr>\r\n			<td>23.</td>\r\n			<td>Financial Toolbox</td>\r\n			<td>71.</td>\r\n			<td>Simulink Coder</td>\r\n		</tr>\r\n		<tr>\r\n			<td>24.</td>\r\n			<td>Fixed-Point Designer</td>\r\n			<td>72.</td>\r\n			<td>Simulink Control Design</td>\r\n		</tr>\r\n		<tr>\r\n			<td>25.</td>\r\n			<td>Fuzzy Logic Toolbox</td>\r\n			<td>73.</td>\r\n			<td>Simulink Coverage</td>\r\n		</tr>\r\n		<tr>\r\n			<td>26.</td>\r\n			<td>GPU Coder</td>\r\n			<td>74.</td>\r\n			<td>Simulink Design Optimization</td>\r\n		</tr>\r\n		<tr>\r\n			<td>27.</td>\r\n			<td>Global Optimization Toolbox</td>\r\n			<td>75.</td>\r\n			<td>Simulink Design Verifier</td>\r\n		</tr>\r\n		<tr>\r\n			<td>28.</td>\r\n			<td>HDL Coder</td>\r\n			<td>76.</td>\r\n			<td>Simulink Desktop Real-Time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>29.</td>\r\n			<td>HDL Verifier</td>\r\n			<td>77.</td>\r\n			<td>Simulink PLC Coder</td>\r\n		</tr>\r\n		<tr>\r\n			<td>30.</td>\r\n			<td>Image Acquisition Toolbox</td>\r\n			<td>78.</td>\r\n			<td>Simulink Real-Time</td>\r\n		</tr>\r\n		<tr>\r\n			<td>31.</td>\r\n			<td>Image Processing Toolbox</td>\r\n			<td>79.</td>\r\n			<td>Simulink Report Generator</td>\r\n		</tr>\r\n		<tr>\r\n			<td>32.</td>\r\n			<td>Instrument Control Toolbox</td>\r\n			<td>80.</td>\r\n			<td>Simulink Requirements</td>\r\n		</tr>\r\n		<tr>\r\n			<td>33.</td>\r\n			<td>LTE HDL Toolbox</td>\r\n			<td>81.</td>\r\n			<td>Simulink Test</td>\r\n		</tr>\r\n		<tr>\r\n			<td>34.</td>\r\n			<td>LTE Toolbox</td>\r\n			<td>82.</td>\r\n			<td>SoC Blockset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>35.</td>\r\n			<td>MATLAB Coder</td>\r\n			<td>83.</td>\r\n			<td>Spreadsheet Link</td>\r\n		</tr>\r\n		<tr>\r\n			<td>36.</td>\r\n			<td>MATLAB Compiler</td>\r\n			<td>84.</td>\r\n			<td>Stateflow</td>\r\n		</tr>\r\n		<tr>\r\n			<td>37.</td>\r\n			<td>MATLAB Compiler SDK</td>\r\n			<td>85.</td>\r\n			<td>Statistics and Machine Learning Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>38.</td>\r\n			<td>MATLAB Report Generator</td>\r\n			<td>86.</td>\r\n			<td>Symbolic Math Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>39.</td>\r\n			<td>Mapping Toolbox</td>\r\n			<td>87.</td>\r\n			<td>System Composer</td>\r\n		</tr>\r\n		<tr>\r\n			<td>40.</td>\r\n			<td>Mixed-Signal Blockset</td>\r\n			<td>88.</td>\r\n			<td>System Identification Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>41.</td>\r\n			<td>Model Predictive Control Toolbox</td>\r\n			<td>89.</td>\r\n			<td>Text Analytics Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>42.</td>\r\n			<td>Model-Based Calibration Toolbox</td>\r\n			<td>90.</td>\r\n			<td>Trading Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>43.</td>\r\n			<td>Navigation Toolbox</td>\r\n			<td>91.</td>\r\n			<td>Vehicle Dynamics Blockset</td>\r\n		</tr>\r\n		<tr>\r\n			<td>44.</td>\r\n			<td>OPC Toolbox</td>\r\n			<td>92.</td>\r\n			<td>Vehicle Network Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>45.</td>\r\n			<td>Optimization Toolbox</td>\r\n			<td>93.</td>\r\n			<td>Vision HDL Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>46.</td>\r\n			<td>Parallel Computing Toolbox</td>\r\n			<td>94.</td>\r\n			<td>WLAN Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>47.</td>\r\n			<td>Partial Differential Equation Toolbox</td>\r\n			<td>95.</td>\r\n			<td>Wavelet Toolbox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>48</td>\r\n			<td>Phased Array System Toolbox</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>'),
(2, 72, '<p>Pengguna:&nbsp;<strong>Dosen, Peneliti, Mahasiswa, Tenaga Kependidikan.</strong><br />\r\n<strong>Petunjuk Installasi Matlab ITS dapat di Unduh di bawah.</strong>&nbsp;Silahkan mengontak IT admin tiap2 departemen apabila membutuhkan bantuan, atau dapat mengontak DPTSI melalui&nbsp;<a href=\"https://servicedesk.its.ac.id/\" target=\"_blank\">servicedesk.its.ac.id</a>.</p>\r\n\r\n<p>Untuk melakukan download software berlisensi, pengguna&nbsp;harus terkoneksi dengan jaringan intranet. Pengguna silahkan login dengan menggunakan username email berdomain [at]its.ac.id dengan password email dari pengguna.</p>'),
(1, 73, '<p>Adobe creative cloud adalah perangkat aplikasi dan layanan dari Adobe Inc. Adobe Creative Cloud memberikan pelanggan akses menuju perangkat&nbsp;lunak seperti</p>\r\n\r\n<ul>\r\n	<li>Adobe Photoshop yang digunakan untuk membuat gambar atau mendesign, membuat grafik dan seni lainnya</li>\r\n	<li>Adobe Illustrator yang digunakan untuk membuat design ataupun ikon</li>\r\n	<li>Adobe Premire Pro yang digunakan untuk mengedit video</li>\r\n	<li>Adobe Acrobat DC yang digunakan untuk membuka file berupa PDF dan dokumen lainnya</li>\r\n	<li>Adobe InDesign digunakan untuk menerbitkan sebuah buku, majalah digital, eBook dan lainnya</li>\r\n	<li>Adobe XD digunakan untuk mendesign website, aplikasi mobile, game dan brand lainnya, dan aplikasi mobile lainnya.</li>\r\n</ul>'),
(1, 82, '<p>&lt;p&gt;Untuk melakukan download software berlisensi, pengguna&amp;nbsp;harus terkoneksi dengan jaringan intranet. Pengguna silahkan login dengan menggunakan username email berdomain [at]its.ac.id dengan password email dari pengguna.&lt;/p&gt;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(20) NOT NULL,
  `nama_software` varchar(300) NOT NULL,
  `nama_perusahaan` varchar(300) NOT NULL,
  `ringkasann` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `nama_software`, `nama_perusahaan`, `ringkasann`) VALUES
(1, 'Adobe', '', ''),
(2, 'Matlab', '', ''),
(3, 'Mathematica', 'MT', ''),
(4, 'LabVIEW', 'NI', 'ada'),
(5, 'Minitab', 'm', '');

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
  `level` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Juwita', 'admin@gmail.com', NULL, '$2y$10$r2N6puvAt/ee0P3q1yY5D.Bg3bf3EefQgzyF1W/wVsePaR030xJGa', 'admin', NULL, NULL, NULL),
(2, 'Juwita Kartika Rani', 'juwita@gmail.com', NULL, '$2y$10$sY/k6ovVZKRVduyAwgXXT.NrdUCEmpuCGJgwUQc3V0cdQEy53pRG2', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file_installer`
--
ALTER TABLE `file_installer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

--
-- Indexes for table `file_panduan`
--
ALTER TABLE `file_panduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

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
-- Indexes for table `persyaratan_sistem`
--
ALTER TABLE `persyaratan_sistem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

--
-- Indexes for table `preview`
--
ALTER TABLE `preview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

--
-- Indexes for table `ringkasan`
--
ALTER TABLE `ringkasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_software` (`id_software`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_installer`
--
ALTER TABLE `file_installer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `file_panduan`
--
ALTER TABLE `file_panduan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persyaratan_sistem`
--
ALTER TABLE `persyaratan_sistem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `preview`
--
ALTER TABLE `preview`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `ringkasan`
--
ALTER TABLE `ringkasan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
