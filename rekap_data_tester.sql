-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 06:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekap_data_tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `deskripsi`) VALUES
(1, 'NETWORKING PACKAGES', ''),
(2, 'TECHNICIAN PACKAGES', ''),
(3, 'OFFICE APPLICATION PACKAGES', ''),
(4, 'PROFESSIONAL PACKAGES', ''),
(5, 'TECHNIC DESIGN PACKAGES', ''),
(6, 'WEB PROGRAM', ''),
(7, 'PROGRAM BERBASIS FRAMEWORK', ''),
(8, 'PROGRAM JAVA & ANDROID ', ''),
(9, 'DATABASE PACKAGES', ''),
(10, 'MULTIMEDIA & GRAPHIC DESIGN PACKAGES', ''),
(11, 'Linux & Networking', ''),
(13, 'Progamming', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `pengajar_id` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `saldo/defisit_bln_lalu` float NOT NULL,
  `jml_durasi` float NOT NULL,
  `saldo/defisit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `durasi` float NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kode`, `nama`, `idKategori`, `durasi`, `deskripsi`, `note`) VALUES
(1, 'LIN1', 'Linux Basic', 1, 12, 'Materi training Linux Basic ini memfokuskan pada pengenalan dan penggunaan sistem operasi linux untuk workstation dan desktop. Peserta diberikan pemahaman tentang sistem operasi linux dan distribusi linux, peserta juga diajarkan bagaimana menginstal sistem operasi linux, serta bagaimana mngelola file dan direktori di linux, mengenal beberapa perintah-perintah dasar yang sering digunakan di linux, mengenal teks editor vi, serta diajarkan bagaimana bekerja dalam lingkungan teks mode maupun graphical mode (X window) di linux', ''),
(2, 'LIN2', 'Linux System Administration & Networking ', 1, 20, 'Linux System Administration & Networking – Materi training ini memfokuskan pada penerapan dan penggunaan sistem operasi linux untuk server. Peserta diberikan pemahaman tentang cara kerja dan proses boot di linux, peserta juga diajarkan bagaiman mengeloa user dan group, menginstal dan menguninstal software rpm dan tarball, peserta diajarkan mengkonfigurasi jaringan, membuat gateway dan internet sharing. Dan peserta diajarkan dan dibimbing menginstal dan mengkonfigurasi aplikasi-aplikasi server seperti dns, http, smtp, pop3, imap, webmail, file server dan PDC, serta web proxy.', ''),
(3, 'LIN3', 'Linux Complete (LIN1+LIN2)', 1, 32, 'Linux Complete – Materi training merupakan gabungan materi Linux Basic dan Linux System Administration & Networking sehingga peserta mampu menguasai Linux dengan cepat dan tidak setengah-setengah dalam penguasaan materinya.', ''),
(4, 'LIN4', 'Linux Security', 1, 20, 'Linux Security – Materi training ini merupakan materi lanjutan Linux Basic dan Linux System Administration & Networking (Linux Complete). Melalui materi ini, para peserta akan diperkenalkan berbagai macam faktor keamanan dalam membangun sistem komputer ~ terutama yang berbasis Open Source.', ''),
(5, 'LIN5', 'Linux Shell Programming ', 1, 20, 'Materi training ini memfokuskan pada fungsi shell sebagai bahasa pemrograman. Peserta diberikan pemahaman tentang fungsi shell, fitur-fitur dari sebuah shell dan cara menggunakan shell sebagai bahasa pemrograman.\r\n\r\n', ''),
(6, 'CISCO1', 'CISCO : Rounting & Switching Implementation', 1, 32, 'Training ini dipersiapkan untuk memberikan bekal pengetahuan mengenai jaringan komputer dan perencanaan serta pengembangan jaringan komputer yang menggunakan perangkat jaringan enterprise seperti router dan manageable switch khususnya produk router dan switch CISCO.', ''),
(7, 'CISCO2', 'CISCO CCNA Fast Track', 1, 16, 'Training ini dipersiapkan untuk memberikan bekal pengetahuan praktis mengenai jaringan komputer dan pengembangan jaringan komputer yang menggunakan perangkat router dan switch cisco. Training ini juga dipersiapkan untuk memperoleh sertifikasi CCNA.', ''),
(8, 'MIKRO1', 'MikroTik Fundamental', 1, 28, 'MikroTIK Fundamental  adalah sistem operasi dan perangkat lunak yang dapat digunakan untuk menjadikan komputer menjadi router network yang handal, mencakup berbagai fitur yang dibuat untuk ip network dan jaringan wireless, cocok digunakan oleh ISP dan provider hotspot.', ''),
(9, 'MIKRO2', 'MikroTik Advanced', 1, 40, 'Mikrotik RouterOS adalah sistem operasi dan perangkat lunak yang dapat digunakan untuk menjadikan komputer menjadi router network yang handal, mencakup berbagai fitur yang dibuat untuk ip network dan jaringan wireless, cocok digunakan oleh ISP dan provider hotspot.\r\n\r\nPerlatihan ini merupakan pelatihan lanjutan dari fitur-fitur Mikrotik seperti metode upgrade, routing, switching, VPN, wireless, firewall dan QoS.', ''),
(10, 'HUAWEI1', 'Huawei Rounting & Switching Implementation (HRSI)', 1, 32, '', ''),
(11, 'HUAWEI2', 'Huawei Certifieid Datacom Associate - Huawei Networking Teknologies & Device (HCDA-HNTD)', 1, 42, '', ''),
(12, 'JUNOS1', 'Juniper Junos (JNCIA-Junos Bootcamp)', 1, 15, 'Juniper Junos – Mengapa mengikuti JNCIA-Junos Bootcamp?\r\n\r\nJadwal pilihan 2 hari Full-Time atau 5 sesi Part-Time\r\nTraining dengan 50% lab dan 50% teori\r\nHands-on menggunakan real juniper router\r\nDiberikan waktu 30 menit untuk sholat wajib berjamaah (bagi muslim)\r\nRuangan kelas aman dan nyaman', ''),
(13, 'EHACK', 'Ethical Hacking', 1, 32, '', ''),
(14, 'TEK1', 'PC Assembling, LAN & WIreless LAN ', 2, 16, 'PC Assembling & LAN Materi training Merakit PC dan Jaringan ini memfokuskan pada pengenalan perangkat keras suatu komputer dan cara merakitnya menjadi suatu komputer yang lengkap. Peserta diberikan pemahaman tentang komponen perangkat keras yang membentuk suatu komputer, peserta juga diajarkan bagaimana melakukan partisi harddisk dan menginstalasi sistem operasi, serta diajarkan juga teknik membangun LAN dan cara instalasinya.', ''),
(15, 'LAN', 'Wireless LAN Security', 2, 6, 'Kelas Wireless Security merupakan lanjutan dari materi Wireless LAN Standard dengan materi khusus yang lebih spesifik pada keamanan jaringan wireless dalam LAN dengan pengenalan jenis-jenis hardware yang terkait dengan kebutuhan sesuai materi. Wireless security merupakan sistem keamanan dalam menggunakan jaringan wireless. Sampai saat ini terdapat beberapa macam wireless security seperti WEP, WPA, WPA2 Enterprise dan WPA2 Personal.', ''),
(16, 'WIN1/001', 'MS. Office/OpenOffice/LibreOffice Advanced ', 3, 24, 'Materi training Ms. Office Advanced berisi lanjutan dari Ms. Office Complete standard. Materi ini berisi tentang penggunaan Microsoft Office atau LibreOffice dengan cakupan materi yang lebih dalam dan kompleks. Formula-formula yang telah dibahas pada paket Microsoft Office / LibreOffice Complete akan lebih dikembangkan lagi struktur formula dan fungsinya.', ''),
(17, 'WIN2/002', 'Ms. Office /OpenOffice/LibreOffice for Secret', 3, 24, 'Materi training Ms. Office / LibreOffice Complete ini adalah paket pelatihan dari modul-modul Microsoft Windows / Linux dan Microsoft / Libre Office yang paling banyak dipergunakan dalam pekerjaan sehari-hari. Mulai dari manajemen file, pembuatan aneka surat dan format naskah ~ baik untuk keperluan pribadi ataupun untuk keperluan dinas. Pembuatan pelaporan dalam bentuk tabel-tabel dan perhitungan-nya secara praktis. Mulai dari perhitungan sederhana sampai kepada analisa statistik dan keuangan serta visualiasi data dalam bentuk grafik. Alhamdulillah Produk Microsoft yang dipergunakan oleh NF COMPUTER ini sudah berlisensi.', ''),
(18, 'OFS', 'Ms. Office/OpenOffice/LibreOPffice for Secretary', 3, 24, 'Paket MS Office / LibreOffice for Secretary ini sengaja dirancang untuk memenuhi kebutuhan SDM perkantoran modern – khususnya dalam membekali tugas-tugas kesekretarisan yang banyak menggunakan aplikasi Office. Baik yang berbasis MS Windows maupun yang berbasis Open Source.\r\nHal ini perlu dilakukan, karena banyak para lulusan SMA/SMK yang berminat untuk bekerja di perkantoran tetapi masih minim skill mereka di bidang aplikasi office. Demikian juga para Junior Secretary – kebanyakan di antara mereka yang selama ini sudah terbiasa menggunakan aplikasi itu, hanyalah sebagai pengganti mesin ketik saja. Padahal banyak sekali fitur-fitur dalam aplikasi itu yang dapat memudahkan pekerjaan sehari-hari. Mulai dari penggunaan internet, pengaturan perjanjian dan agenda kerja, pembuatan dan pengiriman email, surat menyurat, makalah, proposal, lembar kerja elektronik & aplikasi database, sampai pada cara membuat dan mempersiapkan slide presentasi secara profesional.\r\n\r\n', ''),
(19, 'OFAW', 'Ms. Word/OpenOffice/LibreOffice For Academi', 3, 12, '', ''),
(20, 'WIN3/003', 'Presentasi Professional', 3, 16, 'Paket training Presentasi Profesional ini menitikberatkan kepada materi pembuatan slide presentasi yang menarik dan secara efektif dapat menyampaikan isi presentasi kepada audiens. Didalamnya akan dipelajari bagaimana teknik presentasi yang menarik, struktur slide presentasi yang baik, dan bagaimana menjadikan animasi flash menjadi sebuah tambahan nilai (added value) bagi tercapainya tujuan presentasi.\r\nProgram aplikasi yang digunakan pada paket training ini adalah Microsoft Powerpoint dan sebagai added value maka dibahas juga teknik pembuatan animasi menggunakan Flash dengan berbagai bentuk output file.', ''),
(21, 'MPJC', 'Ms. Projects', 3, 16, 'Materi training Microsoft Project adalah bagaimana mengatur jadwal dan mengelola proyek dengan cara monitoring tugas-tugas secara rinci dan akurat.', ''),
(22, 'PNAP', 'Program Network Administrator Professional(PNAP)', 4, 110, 'program ini ditujukan bagi mereka yang ingin memiliki keahlian dan kemampuan untuk berkarir di bidang jaringan komputer sebagai network administrator (pengelola jaringan komputer).\r\n\r\nProgram pendidikan dan latihan ini diselenggarakan dalam waktu 110 Jam. Metode pembelajaran yang diterapkan dalam program ini tidak hanya pada pengetahuan dan konsep saja tetapi berorientasi pada kemampuan praktis melalui praktikum dan latihan yang intensif. Dengan demikian program ini akhirnya diharapkan mampu menghasilkan tenaga atau sumber daya manusia yang memiliki pengetahuan dan kemampuan yang nyata dalam merancang, membangun dan mengelola jaringan komputer.\r\n\r\nProgram ini juga memberikan pengetahuan dan kemampuan praktis dalam mengelola sistem operasi linux. Pengetahuan tentang linux ini sangatlah relevan dengan tujuan dari program ini, karena pada kenyataannya jika berbicara tentang jaringan komputer dan infrastrukturnya, akan ditemukan banyak sekali penggunaan dan pemanfaatan sistem linux untuk digunakan sebagai server server dalam jaringan komputer. Untuk itu dibutuhkan kemampuan tambahan bagi seorang network administrator untuk dapat juga menginstal dan menglola sistem linux.\r\n\r\nProgram ini diselenggarakan berdasarkan kurikulum dan materi belajar yang dibuat sendiri oleh Lembaga Pendidikan dan Pengembangan Profesi Terpadu Nurul Fikri (LP3T-NF) dengan mempertimbangkan kebutuhan akan proses belajar yang intensif dan efektif.', ''),
(23, 'LPT1', 'LPIC-1 Certification Preparation(LPIC-1 Prep)', 4, 40, 'LPIC-1 Certification Preparation Class merupakan training resmi dari Linux Professional Institute (LPI) Canada dengan Nurul Fikri sebagai mitra kerjasama training resmi (ATP/Approved Training Partner) dan IOSN (International Open Source Network).\r\nLPIC-1 Preparation merupakan upaya persiapan untuk mencapai kelulusan dalam uji sertifikasi LPIC-1. Selain itu LPIC-1 Preparation mempersiapkan peserta untuk dapat menjadi seorang administrator sistem linux yang kompeten.\r\nLPIC-1 Adalah program sertifikasi profesional Linux yang terdiri dari dua unit ujian, yaitu Exam 101 dan Exam 102. Sertifikat LPIC diterima apabila peserta lulus dalam kedua exam tersebut.\r\nSertifikasi LPI diakui dunia internasional sebagai salah satu sertifikasi Linux terbaik dan menjadi rujukan sertifikasi internasional.', ''),
(24, 'LPT2', 'LPIC-1 Certification Preparation (LPIC-1 Prep) + EXAMS', 4, 40, '', ''),
(25, 'LPR', 'Linux Professional (LPro)', 4, 52, 'Menghasilkan SDM TI (teknologi informasi dan komputer) Profesional (Linux Professional) yang kreatif dan memiliki kemampuan untuk menginstal, menggunakan, membangun dan mengelola server dengan sistem operasi Linux.', ''),
(26, 'PHPP', 'PHP Professional (PHPro)', 4, 100, '', ''),
(27, 'JAVP', 'Java Professional (JAVAPro)', 4, 84, '', ''),
(28, 'PMP', 'Project Management Professional Fundamental', 4, 32, '', ''),
(29, 'QCAD', 'QCAD 2D', 5, 24, '', ''),
(30, 'FCAD', 'FreeCAD 3D', 5, 24, '', ''),
(31, 'CAD1', 'AutoCAD Standard ', 5, 30, 'AutoCAD Standard materi dasar grafis merancang bentuk suatu object dengan pembekalan materi 2D dan 3D untuk detail object bentuk yang lebih spesifik. AutoCAD adalah perangkat lunak komputer CAD untuk menggambar 2 dimensi dan 3 dimensi yang dikembangkan oleh Autodesk.\r\n\r\nFormat data asli AutoCAD, DWG, dan yang lebih tidak populer, Format data yang bisa dipertukarkan (interchange file format) DXF, secara de facto menjadi standard data CAD. Akhir-akhir ini AutoCAD sudah mendukung DWF, sebuah format yang diterbitkan dan dipromosikan oleh Autodesk untuk mempublikasikan data CAD.', ''),
(32, 'CAD2', 'AutoCAD Advanced', 5, 16, 'AutoCAD Advanced materi lanjutan seputar grafis merancang bentuk suatu object dengan pembekalan materi yang lebih mendalam 2D dan 3D untuk detail object bentuk yang lebih spesifik dengan kombinasi 2D & 3D dan lain-lain. AutoCAD adalah perangkat lunak komputer CAD untuk menggambar 2 dimensi dan 3 dimensi yang dikembangkan oleh Autodesk.\r\n\r\nFormat data asli AutoCAD, DWG, dan yang lebih tidak populer, Format data yang bisa dipertukarkan (interchange file format) DXF, secara de facto menjadi standard data CAD. Akhir-akhir ini AutoCAD sudah mendukung DWF, sebuah format yang diterbitkan dan dipromosikan oleh Autodesk untuk mempublikasikan data CAD.', ''),
(33, 'WEB1', 'Web Standard (HTML,CSS,& Javascript)', 6, 16, 'Web Standard (HTML, CSS & Javascript) pada materi training DHTML ini meliputi materi HTML, CSS dan JavaScript. HTML digunakan untuk mendesign halaman website. CSS digunakan untuk menata dokumen HTML yang pernah dibuat dan memperindah tampilan halaman web dengan style-style CSS. JavaScript digunakan untuk membangun website dinamis dengan pemograman yang berjalan di sisi web browser.\r\n\r\n', ''),
(34, 'PHP1', 'PHP & MySQL Standard', 6, 24, 'PHP MySQL Standard Materi training PHP dan MySQL standard ini memfokuskan pada penggunaan bahasa pemrograman web PHP dan database MySQL untuk membangun aplikasi database berbasis web ataupun website dengan mudah dan benar. Peserta diajarkan menggunakan sintak dan struktur bahasa PHP, meliputi tipe data, operator, dan perintah-perintah serta fungsi-fungsi built-in php. Peserta diajarkan bagaimana merancang database dan tabel di mysql, dan bagaimana menampilkan, menyimpan, mengupdate, serta mendelete data dalam database mysql. Peserta juga diajarkan bagaimana membuat script php yang mengakses database mysql.', ''),
(35, 'WEB2', 'Web Complete(WEB1 + PHP1, Hosting)', 6, 44, 'Materi training Web Complete ini merupakan gabungan dari paket Web Standard dan PHP & MySQL Standard. Yaitu sebuah kombinasi bahasa pemrograman web HTML, PHP dan database MySQL untuk membangun aplikasi database berbasis web yang interaktif. Peserta diajarkan menggunakan tag-tag HTML, sintak dan struktur bahasa PHP. Peserta diajarkan bagaimana merancang database dan tabel di mysql, serta bagaimana menampilkan, menyimpan, mengupdate, serta mendeletenya. Peserta juga diajarkan bagaimana membuat script PHP yang dapat mengakses database mysql.', ''),
(36, 'PHP3', 'PHP & AJAX', 6, 20, 'PHP & Ajax Materi training AJAX dan PHP ini memfokuskan pada implementasi teknologi AJAX pada sebuah aplikasi web dengan menggunakan bahasa pemrograman PHP. Diharapkan setelah mengikuti training ini siswa atau peserta kursus dapat memahami dan menggunakan CSS, JavaScript sebagai salah satu bagian dari teknologi AJAX serta menggunakan PHP sebagai pemrograman di sisi server dikombinasikan dengan teknologi AJAX.', ''),
(37, 'PHP4', 'PHP ORACLE', 6, 28, 'PHP Professional Siswa dibimbing dalam memahami dan mendalami pemrograman PHP dari dasar dan lebih mendalam, dimana peserta sebelumnya sudah menguasai dasar-dasar pemrograman PHP beserta sistem database MySQL, dan telah mampu menggunakan PHP & MySQL dasar dalam membuat program aplikasi tertentu untuk mendalami materi lebiih mendalam dengan berbagai studi kasus dan menjadi programmer PHP yang mampu menggunakan Framework', ''),
(38, 'WEB3', 'Web Instant (HTML, CSS, Wordpress, Joomla, Hosting)', 6, 24, 'Web Instant pada materi training ini meliputi materi HTML, CSS CMS Joomla! dan Blog WordPress. Peserta diajarkan menggunakan sintak HTML dan CSS, dan diajarkan penggunaan Content Management System (CMS) JOOMLA serta membuat Blog dengan WordPress', ''),
(39, 'WEB4', 'Web Design Interactive', 6, 36, 'Web Design Interactive pada materi training ini meliputi materi HTML, CSS CMS Joomla! dan Blog WordPress. Peserta diajarkan menggunakan sintak HTML dan CSS, dan diajarkan penggunaan Content Management System (CMS) JOOMLA serta membuat Blog dengan WordPress.\r\nSelain itu peserta didik dibimbing dalam mengenal, memahami dan menggunakan tool dan script di dalam Flash. Proses akhir dari pembelajaran Flash ini adalah peserta didik dapat membuat animasi yang menarik, program-program berbasis multimedia, dan mempublishnya menjadi berbagai bentuk tampilan khas Flash.\r\n', ''),
(40, 'SEO', 'SEO WEB', 6, 16, 'Search Engine Optimization (SEO) adalah serangkaian proses yang dilakukan secara sistematis yang bertujuan untuk meningkatkanvolume dan kualitas trafik kunjungan melalui mesin pencari menuju situs web tertentu dengan memanfaatkan mekanisme kerja atau algoritma mesin pencari tersebut. Tujuan dari SEO adalah menempatkan sebuah situs web pada posisi teratas, atau setidaknya halaman pertama hasil pencarian berdasarkan kata kunci tertentu yang ditargetkan. Secara logis, situs web yang menempati posisi teratas pada hasil pencarian memiliki peluang lebih besar untuk mendapatkan pengunjung.\r\n\r\nSejalan dengan makin berkembangnya pemanfaatan jaringan internet sebagai media bisnis, kebutuhan atas SEO juga semakin meningkat. Berada pada posisi teratas hasil pencarian akan meningkatkan peluang sebuah perusahaan pemasaran berbasis web untuk mendapatkan pelanggan baru. Peluang ini dimanfaatkan sejumlah pihak untuk menawarkan jasa optimisasi mesin pencari bagi perusahaan-perusahaan yang memiliki basis usaha di internet.', ''),
(41, 'PYT1', 'Python Programming Fundamental', 6, 32, 'Python adalah bahasa pemrograman interpreter yang dapat digunakan untuk mengembangkan atau membuat program atau aplikasi, mulai dari program atau aplikasi untuk sistem komputer, jaringan komputer sampai pada aplikasi sistem informasi berbasis web. Python memiliki struktur bahasa yang sangat sederhana, mudah digunakan dan banyak memiliki dukungan pustaka (libraries) yang memperkaya dan mempertangguh python sebagai bahasa pemrogram yang dapat digunakan untuk berbagai keperluan.\r\n\r\nPython adalah salah satu bahasa pemrograman yang bebas dan terbuka (free and open source software) dikembangkan oleh Guido van Rossum. Python kini telah menjadi bahasa pemrograman yang powerfull, dapat berjalan pada berbagai platform sistem operasi. Bahkan sebagian besar distribusi linux menjadikan python sebagai standar bahasa pengembangan program atau aplikasi yang disertakan langsung pada berbagai distribusi linux. Anda akan mendapati cukup banyak aplikasi jaringan, tool hacking, dan aplikasi atau program kontrol instrumentasi serta science memanfaatkan bahasa pemrograman python untuk pengembangannya.\r\n\r\nUntuk menghasilkan sumber daya manusia yang memiliki pengetahuan dan kemampuan praktis dalam mengembangkan program atau aplikasi berbasis python maka kami menyelenggarakan program pelatihan dan pendidikan pemrograman python fundamental yang diselenggrakan dalam waktu yang tidak terlalu lama, guna memberikan pemahaman, pengetahuan, keterampilan serta pengalaman nyata dalam membangun atau mengembangkan program atau aplikasi berbasis bahasa pemrograman python, Pelatihan python fundamental ini dirancang bukan hanya untuk diikuti oleh mereka yang sudah memiliki bekal pengetahuan programming, namun juga untuk dapat diikuti oleh programmer pemula atau mereka yang ingin menjadi programmer.', ''),
(42, 'PYT2', 'Python For System Adminstrator', 6, 40, 'Python for System Administration adalah bahasa pemrograman interpreter yang dapat digunakan untuk mengembangkan atau membuat program atau aplikasi, mulai dari program atau aplikasi untuk sistem komputer, jaringan komputer sampai pada aplikasi sistem informasi berbasis web. Python memiliki struktur bahasa yang sangat sederhana, mudah digunakan dan banyak memiliki dukungan pustaka (libraries) yang memperkaya dan mempertangguh python sebagai bahasa pemrogram yang dapat digunakan untuk berbagai keperluan.\r\n\r\nPython adalah salah satu bahasa pemrograman yang bebas dan terbuka (free and open source software) dikembangkan oleh Guido van Rossum. Python kini telah menjadi bahasa pemrograman yang powerfull, dapat berjalan pada berbagai platform sistem operasi. Bahkan sebagian besar distribusi linux menjadikan python sebagai standar bahasa pengembangan program atau aplikasi yang disertakan langsung pada berbagai distribusi linux.\r\n\r\nSeorang pengelola (sysadmin) sistem unix atau linux umumnya memerlukan keterampilan pemrograman, karena seringkali dalam melaksanakan tugasnya sebagai seorang system administrator berhadapan dengan kondisi atau situasi yang mengharuskan seorang sysadmin membuat atau mengembangkan sendiri tool atau program untuk membantu dan mengotomasi pekerjaan atau tugasnya sehari hari. Dan dikarenakan umunya sistem unix atau linux telah dilengkapi secara default dengan python interpreter maka sebagian besar mereka para sysadmin mengunakan python sebagai bahasa untuk membangun atau membuat tool atau program yang dibutuhkannya.\r\n\r\nPelatihan dan pendidikan python for system administration ini diselenggrakan untuk memberikan pengetahuan dan kemampuan praktis dan nyata bagi para sistem administrator atau juga network administrator dalam membantu memudahkan, mengoptimalkan dan mengotomasi pekerjaan atau tugas tugas mereka dalam aktifitas sehari hari. Peserta akan diberikan materi terkait pemrograman python untuk sistem dan jaringan.', ''),
(43, 'PHP(digant', 'PHP Yii Framework Fundamental', 7, 56, 'PHP Yii Framework Fundamental pada materi ini siswa dibimbing dalam memahami Pemrograman OOP dengan PHP5 dan menggunakan Framework dalam membuat aplikasi web. Framework yang digunakan adalah Yii Framework.', ''),
(44, 'PHP5', 'PHP Yii Framework Advanced', 7, 28, 'PHP Yii Framework Advanced pada materi ini siswa dibimbing dalam memahami Pemrograman OOP dengan PHP5 dan menggunakan Framework dalam membuat aplikasi web. Framework yang digunakan adalah Yii Framework.', ''),
(45, 'PHP6', 'PHP Zend Framework', 7, 28, '', ''),
(46, 'PHP7', 'PHP Codelgniter', 7, 28, 'PHP CodeIgniter Framework pada materi ini siswa dibimbing dalam memahami Pemrograman OOP dengan PHP5 dan menggunakan Framework dalam membuat aplikasi web. Framework yang digunakan adalah Code Igniter.', ''),
(47, 'PHP8', 'PHP Laravel Framework', 7, 28, 'PHP Laravel Framework – PHP Laravel Framework pada materi ini peserta dibimbing dalam memahami Pemrograman OOP dengan PHP5 dan menggunakan Framework dalam membuat aplikasi web. Framework yang digunakan adalah Code Igniter.', ''),
(48, 'JAV5', 'Java Zkoss Framework', 7, 28, '', ''),
(49, 'JAV6', 'Java Spring Framework', 7, 28, 'Materi training Java Framework mempelajari penggunaan kerangka kerja (framework) aplikasi web berbasis Java. Peserta diajarkan bagaimana menggunakan Web Framework Spring MVC beserta library aplikasi Java lainnya seperti JDBC, JSTL dan Library Spring Framework untuk membuat aplikasi bisnis berbasis web yang dinamis. Serta menggunakan library CSS untuk membangun aplikasi web yang responsive.', ''),
(50, 'ADROID1', 'Java for Android', 8, 16, 'Java for Android – materi training ini memfokuskan pada penggunaan bahasa pemrograman java untuk membangun aplikasi di Platform Ponsel Cerdas (Smartphone). Peserta dalam mengikuti paket Java for Android ini diajarkan konsep pemrograman di java, Class dan Object, Konsep Object Oriented Programming Java, Instalasi Android SDK, Konsep Pemrograman Android, Object dan Komponen Form, Design Layout, 2D dan multimedia.', ''),
(51, 'ADROID2', 'Android for Developer', 8, 20, 'Materi training Android for Developer ini memfokuskan pada penggunaan bahasa pemrograman java untuk membangun aplikasi di Platform Ponsel Cerdas (Smartphone). Instalasi Android SDK, Konsep Pemrograman Android, Object dan Komponen Form, Design Layout, 2D dan multimedia.', ''),
(52, 'ANDROID3', 'Android Complete(ANDRIOD1+ ANDROID2)', 8, 36, 'Materi training Pemrograman Android Complete ini memfokuskan pada penggunaan bahasa pemrograman java untuk membangun aplikasi di Platform Ponsel Cerdas (Smartphone). Peserta diajarkan konsep pemrograman di java, Class dan Object, Konsep Object Oriented Programming Java, Instalasi Android SDK, Konsep Pemrograman Android, Object dan Komponen Form, Design Layout, 2D dan multimedia.', ''),
(53, 'ANDROID4', 'Android Advanced', 8, 28, 'Materi Android Programming Advanced merupakan kelanjutan dari Android Programming. Pelatihan memfokuskan pada pembuatan aplikasi Android menggunakan fitur-fitur lanjutan yang memerlukan pengetahuan lebih, seperti pembacaaan status device, penggunaan media kamera dan penyimpanannya, pustaka Google Maps V2, hingga koneksi Android ke Web Service.', ''),
(54, 'ANDROID5', 'Android Hybrid(Ionic)', 8, 28, 'Android Hibryd materi training Android Hibryd ini membangun aplikasi di Platform Ponsel Cerdas (Smartphone). Peserta diajarkan konsep pemrograman dengan Ionic Framework.', ''),
(55, 'JAV1', 'Java Fundamental with Netbeans', 8, 28, 'Java Fundamental – Java Fundamental pada kelas ini peserta diajarkan menguasai programming dengan Java, salah satu yang populer dalam jenis pemrograman OOP yang dibutuhkan dunia kerja.', ''),
(56, 'JAV2', 'Java Web & JSF', 8, 28, 'Java Web & JSF materi  training Java Web Programming ini memfokuskan pada penggunaan lebih lanjut bahasa pemrograman java untuk membangun aplikasi database berbasis web. Peserta diajarkan dasar-dasar HTTP, Peserta juga diajarkan penulisan konsep pemrograman di java seperti Servlet dan JSP, teknik bekerja dengan JDBC, Konsep JavaBean dan Pengenalan Framework JSF', ''),
(57, 'JAV3 ', 'Java Complete (JAV1+JAV2)', 8, 56, '\r\nJava Complete – Materi training Java Complete adalah gabungan dari traning Java Fundamental dan Java Web Programming dan JSF. Peserta diajarkan mulai dari dasar-dasar algoritma pemrograman dengan Java hingga membuat aplikasi web yang terkoneksi ke database. Peserta juga diperkenalkan dengan Framework Web JSF. Selama belajar peserta diajarkan menggunakan perintah commandline dan menggunakan IDE NetBeans.', ''),
(58, 'SQL1', 'MySQL', 9, 20, 'Program yang membimbing siswa dalam memperdalam Database MySQL yang meliputi pengenalan dan konsep database, Model relational database, DDL dan DML, JOIN Table, Fungsi Aggregate, VIEW, TRIGGER dan Store Procedure, juga mempelajari Manajemen User dan Izin akses Database, Backup dan Restore database.', ''),
(59, 'SQL2', 'Ms. SQL Server', 9, 20, 'Ms. SQL Server Program yang membimbing siswa dalam memperdalam Database MSQL Server yang meliputi pengenalan dan konsep database, Model relational database, DDL dan DML SQL pada SQL Server, Menggunakan TSQL Server, VIEW, TRIGGER dan Store Procedure, juga mempelajari Manajemen User dan Izin akses Database, Backup dan Restore database.', ''),
(60, 'SQL3', 'PostgreSQL', 9, 20, 'Program yang membimbing siswa dalam memperdalam Database PostgreSQL yang meliputi pengenalan dan konsep database, Model relational database, DDL dan DML, JOIN Table, Fungsi Aggregate, VIEW, TRIGGER dan Store Procedure, juga mempelajari Manajemen User dan Izin akses Database, Backup dan Restore database', ''),
(61, 'SQL4', 'SQL Oracle', 9, 20, 'SQL with Oracle adalah program yang membimbing siswa dalam memperdalam database Oracle yang meliputi pengenalan dan konsep database, Model relational database, DDL dan DML, JOIN Table, Fungsi Aggregate, VIEW,  dan TRIGGER.', ''),
(62, 'ORC1', 'Oracle Administration I - Fundamental', 9, 20, '', ''),
(63, 'ORC2', 'Oracle Administration I - Advanced', 9, 20, '', ''),
(64, 'ACC1', 'Ms. Access Standard', 9, 16, 'Ms. Access Standard adalah program training yang akan membimbing peserta untuk menguasai aplikasi Microsoft Access (aplikasi database) secara efektif dan efisien sesuai dengan kebutuhan dunia kerja pada umumnya di lingkungan perkantoran, kelas ini merupakan aplikasi database untuk input data ke dalam server dengan konten-konten yg terstruktur sesuai dengan kebutuhan', ''),
(65, 'ACC2', 'Ms. Access Programming ', 9, 20, '', ''),
(66, 'INFGRAPH', 'InfoGraphics', 10, 16, '', ''),
(67, 'VIDEO', 'Video Editing with Adobe Premiere', 10, 12, 'Video Editing with Adobe Premiere & After Effect – Materi training Video Editing with Adobe Premiere & After Effect ini memfokuskan pada penggunaan aplikasi untuk melakukan modifikasi video dan pembuatan film singkat. Peserta diajarkan menggunakan aplikasi Adobe Premiere untuk melakukan editing video (menggabungkan beberapa video menjadi satu film/dokumentasi, menambahkan background, sound, dan obyek multimedia lain). Peserta juga diajarkan menggunakan aplikasi Adobe After Effect untuk membuat animasi bergerak.', ''),
(68, 'BLEND1', 'Modeling Animation with Blender', 10, 16, 'Kelas khusus desain grafis menggunakan program aplikasi animasi 3 dimensi Blender. Program aplikasi berbasis Open Source ini akan digunakan untuk membuat berbagai bentuk gambar 3 dimensi dan file animasi sederhana.\r\nSetelah selesai training, peserta diharapkan dapat membuat model-model 3 dimensi sederhana dan mengatur pergerakannya dalam animasi frame by frame.', ''),
(69, 'BLEND2', 'Architecture Animation with Blender', 10, 16, 'Merupakan lanjutan dari kelas Modelling Animation dengan fokus pembelajaran ke arah pembuatan model-model arsitektur dan berbagai bentuk propertinya. Animasi yang dihasilkan lebih banyak menggunakan teknik Walk Through dan Tracking.\r\nSetelah selesai training, peserta diharapkan dapat membuat model-model 3 dimensi di bidang arsitektur dan mengatur pergerakannya menjadi sebuah animasi walkthrough.', ''),
(70, 'BLEND3', '3D Character Animation with Blender', 10, 16, ' Level tertinggi dari paket animasi 3 dimensi  menggunakan  Blender. Akan  dibahas  teknik  pembuatan  karakter  dan  animasinya.  Termasuk efek-efek khusus menggunakan Particle, Physics, dan Open GL. Setelah  selesai  training,  peserta  diharapkan  dapat  membuat  berbagai bentuk  karakter  3  dimensi  dan  membuat  pergerakannya  menjadi sebuah film animasi.', ''),
(71, 'GIMP', 'Photo Editing with Gimp / Adope Photoshop', 10, 24, 'Materi training Photo & Image Editing with GIMP/Photoshop ini memfokuskan pada penggunaan aplikasi untuk melakukan modifikasi gambar & foto menggunakan fitur-fitur yang ada dalam aplikasi GIMP. Dimulai dari pengenalan tools, seleksi tingkat dasar, penggunaan curve, filter-filter hingga ke seleksi tingkat mahir (dengan menggunakan masking dan channel).\r\nPeserta juga akan diajarkan bagaimana cara membuat publikasi yang menarik. Setelah selesai training, peserta diharapkan dapat mengaplikasikan ilmunya menjadi seorang Desainer kreatif (membuka usaha sendiri / sebagai profesional).', ''),
(72, 'SCR', 'Desktop Publishing with Scribus / Adobe InDesign', 10, 12, 'Materi training Desktop Publishing with Scribus/inDesign ini memfokuskan pada penggunaan aplikasi untuk membuat layout suatu publikasi (buku, majalah, bulletin, dsb). Peserta juga diajarkan tentang cara membuat Master Document, menggunakan gambar kedalam publikasi, export ke format lain.', ''),
(73, 'INKS1', 'Vector Graphic Editor with Inkscape / CorelDRAW', 10, 12, 'Materi training Vector Graphic Editing dengan Inkscape/CorelDraw ini memfokuskan pada penggunaan aplikasi untuk membuat dan memodifikasi gambar vektor menggunakan fitur-fitur yang ada dalam aplikasi Inkscape. Dimulai dari pengenalan interface & tools, pembuatan gambar vector, komposisi warna, dan pemanfaatan beberapa efek gambar untuk menciptakan gambar vector yang menarik.', ''),
(74, 'INKS2', 'Graphic Design Complete (Adobe Photoshop , InDesign, CorelDRAW)', 10, 40, 'Peserta didik dibimbing untuk mengenal dan menguasai software-software yang biasa digunakan untuk membuat dan mengolah gambar. Sistem pembelajaran yang digunakan berupa pengerjaan proyek-proyek desain grafis sesuai dengan kebutuhan terkini.', ''),
(75, '-', 'Bahasa Inggris', 6, 23, '-', '-'),
(76, '1', 'Administrasi Basis Data', 9, 46, '-', '-'),
(77, '2', 'Microsoft Excel Basic-Intermediate', 3, 14, '', ''),
(78, '3', 'Microsoft Excel Advanced', 3, 14, '-', '-'),
(79, '4', 'Teknis Manajemen Database PostreSQL', 9, 20, '-', '-'),
(80, '6', 'Office Complete', 3, 24, '-', '-'),
(81, '7', 'UX', 6, 32, '-', '-'),
(82, '8', 'Anguler', 6, 32, '-', '-'),
(83, '9', 'Leaflet', 13, 32, '-', '-'),
(84, '10', 'Pemrogaman R', 13, 8, '-', '-'),
(85, 'FC001', 'Fun Coding', 13, 20, '', ''),
(86, 'ALGO', 'Pengantar Algoritma', 13, 20, '', '');

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
(1, '2021_09_04_100340_create_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `kategori` enum('Internal','Eksternal','Freelance') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tmpLahir` varchar(45) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `cv` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id`, `nip`, `nama`, `kategori`, `gender`, `tmpLahir`, `tglLahir`, `alamat`, `email`, `hp`, `foto`, `cv`) VALUES
(4, '1131286201', 'Ahmad Rio Ardiansyah, S.Si. M.Si', 'Internal', 'L', 'Pekalongan', '1986-09-13', '', '-', '081573954126', NULL, NULL),
(6, '1070974201', 'Henry Saptono, S.Si., M.Kom', 'Internal', 'L', 'Jakarta', '1974-09-07', 'Jl. H Rijin, Kp Kelapa dua Rt 05/11 Cimanggis Depok\r\n', 'henry@nurulfikri.com  ', '08158984709', NULL, NULL),
(7, '1111184201', 'Hilmy Abidzar Tawakal, ST., M.Kom', 'Internal', 'L', 'Jakarta', '1984-11-11', '-', 'hilmi@gmail.com', '-', NULL, NULL),
(9, '1230763201', 'Drs. Rusmanto, M.M.', 'Internal', 'L', 'Sragen', '1963-11-23', '-', 'rus@nurulfikri.ac.id', '08159029992', NULL, NULL),
(10, '1140471201', 'Sirojul Munir, S.Si, M.Kom', 'Internal', 'L', 'Jakarta', '1971-04-14', '-', 'sirojulmunir@gmail.com', '-', NULL, NULL),
(11, '1060672201', 'Suhendi, ST, MMSI', 'Internal', 'L', 'Jakarta', '1972-06-06', '-', 'suhendi@gmail.com', '081380006672', NULL, NULL),
(13, '1260883201', 'Zaki Imaduddin S.T, M.Kom', 'Internal', 'L', 'Jakarta', '1983-08-26', '-', 'zaki@gmail.com', '-', NULL, NULL),
(15, '1081090101', 'Edo Riansyah, S.Kom', 'Internal', 'L', 'Bogor', '1990-10-08', '-', 'edo@gmail.com', '-', NULL, NULL),
(17, '1010885101', 'Danil Syahrizal ', 'Internal', 'L', 'Bogor', '1985-08-01', '-', 'dani@gmail.com', '-', NULL, NULL),
(18, '1101080101', 'Nasrul,S.Pd.I., S.Kom., M.Kom.', 'Internal', 'L', 'Jakarta', '1980-10-10', 'Jl. Jatijajar II Komplek Linux Asri Blok A No.9 Rt. 04/08 Tapos, Jatijajar, Depok\r\n', 'nasrul99@gmail.com', '085780844411', NULL, NULL),
(20, '1130381101', 'Hafidz Atamim, S.Kom', 'Eksternal', 'L', 'Jakarta', '1981-03-13', 'Cililitan Kecil 1 No.9 B Rt.016/07 Kramat Jati Jakarta Timur\r\n', 'hafidzlp3tnf@gmail.com', '-', NULL, NULL),
(21, '1040578101', 'Achmad Ilham, S.Kom', 'Internal', 'L', 'Jakarta', '1978-05-04', 'JL. Malawi 1 No. 88 Depok-Timur 16417\r\n', 'ilham@nurulfikri.com', '-', NULL, NULL),
(22, '1180574101', 'Daseh Hidayat', 'Eksternal', 'L', 'Bandung', '1974-05-18', 'Komp.Timah Blok CC I/1 Rt.05/12 Cimanggis Depok\r\n', 'daseh@nurulfikri.com  ', '-', NULL, NULL),
(23, '1060476101', 'Sugandi, S.T', 'Internal', 'L', 'Cirebon', '1976-04-06', 'Jl.Kalisari Lapan Gg.Sawi No.23 Rt.02/01 Pekayon Ps.Rebo\r\n', 'gandinf7799@gmail.com', '083874895833', NULL, NULL),
(24, '2260892101', 'Laisa Nurin Mentari, S.Kom', 'Internal', 'P', 'Jakarta', '1992-01-26', 'Kesatrian Ditlantas RT 001/RW 002 No. 44, Pejaten Barat, Pasar Minggu\r\n', 'laisa@nurulfikri.co.id', '-', NULL, NULL),
(27, '-', 'Hasna Mujahidah Amatullah', 'Freelance', 'P', '', NULL, '', 'hasnamujahidah@gmail.com', '-', NULL, NULL),
(32, '-', 'Yuliadi, A.Md.', 'Internal', 'L', '-', NULL, '-', 'yuliadi@nurulfikri.com', '085213888063', NULL, NULL),
(34, '-', 'Ahmad Arif', 'Internal', 'L', '-', NULL, '-', 'ahmad@gmail.com', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengajar_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `email`, `pengajar_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL),
(2, '1131286201', 'password', NULL, NULL, 4, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(3, '1070974201', 'password', NULL, NULL, 6, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(4, '1111184201', 'password', NULL, NULL, 7, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(5, '1230763201', 'password', NULL, NULL, 9, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(6, '1140471201', 'password', NULL, NULL, 10, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(7, '1060672201', 'password', NULL, NULL, 11, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(8, '1260883201', 'password', NULL, NULL, 13, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(9, '1081090101', 'password', NULL, NULL, 15, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(10, '1010885101', 'password', NULL, NULL, 17, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(11, '1101080101', 'password', NULL, NULL, 18, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(12, '1130381101', 'password', NULL, NULL, 20, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(13, '1040578101', 'password', NULL, NULL, 21, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(14, '1180574101', 'password', NULL, NULL, 22, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(15, '1060476101', 'password', NULL, NULL, 23, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(16, '2260892101', 'password', NULL, NULL, 24, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(17, '-', 'password', NULL, NULL, 27, '2021-09-16 01:58:42', '2021-09-16 01:58:42'),
(18, '-', 'password', NULL, NULL, 32, '2021-09-16 01:58:43', '2021-09-16 01:58:43'),
(19, '-', 'password', NULL, NULL, 34, '2021-09-16 01:58:43', '2021-09-16 01:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `pengajar_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `tgl_buat` date NOT NULL,
  `judul` text NOT NULL,
  `durasi_jam` time NOT NULL,
  `keterangan` text DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `pengajar_id`, `materi_id`, `tgl_buat`, `judul`, `durasi_jam`, `keterangan`, `link`) VALUES
(1, 4, 20, '2021-12-31', 'video pertama', '01:45:50', 'sldanksd asldkna sdlaksnd alsdkn alskdna lsdkna lsdkn', 'https://www.youtube.com/watch?v=B8BG4qHy6tE'),
(2, 4, 2, '2021-12-31', 'video kedua', '01:45:50', 'asdlaksdnaklsd j', 'https://www.youtube.com/watch?v=B8BG4qHy6tE'),
(3, 4, 2, '2021-12-31', 'video ketiga', '01:45:50', 'asda skdna lsdnalsd knasdlknasldk nalsdkna lskdnalsdnkals kdnaln', 'https://www.youtube.com/watch?v=B8BG4qHy6tE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_laporan_pengajar1` (`pengajar_id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_materi_kategori` (`idKategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_materi_has_pengajar_materi1` (`materi_id`),
  ADD KEY `fk_materi_has_pengajar_pengajar1` (`pengajar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_pengajar1` FOREIGN KEY (`pengajar_id`) REFERENCES `pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `fk_materi_kategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `fk_materi_has_pengajar_materi1` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materi_has_pengajar_pengajar1` FOREIGN KEY (`pengajar_id`) REFERENCES `pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
