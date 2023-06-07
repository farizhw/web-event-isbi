-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` char(10) NOT NULL,
  `judul_artikel` varchar(1000) NOT NULL,
  `kat_artikel` varchar(20) NOT NULL,
  `isi_artikel` varchar(3000) NOT NULL,
  `tgl_artikel` datetime NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `kat_artikel`, `isi_artikel`, `tgl_artikel`, `gambar`) VALUES
('A20220001', 'ISBI Bandung Revitalisasi Wayang Wong Priangan Bergaya Sinematografi Film Bersama 3 Perguruan Tinggi Seni Lainnya', 'berita', 'Selasa 24 Mei 2022, Institut Seni Budaya Indonesia (ISBI) Bandung menampilkan Drama Tari yang dikemas dalam bentuk sinematografi film berjudul “Jabang Tutuka, Birth of The Blazing Knight”. Sinematografi film ini merupakan cerita yang mengangkat keagungan nilai Wayang Wong yang mengisahkan Jabang Tutuka, seorang anak yang ditakdirkan untuk mengalahkan Naga Percona, yang memporak porandakan kahyangan yang nantinya menjadi cikal bakal dari kelahiran Gatotkaca.\r\n\r\nLahirnya karya seni ini menjadi salah satu upaya revitalisasi atau menghidupkan kembali seni wayang wong priangan oleh beberapa perguruan tinggi seni di Indonesia yakni ISBI Bandung, ISI Surakarta, ISBI Denpasar, dan IKJ. Karya seni pertunjukan ini merupakan realisasi dari riset yang didukung Badan Riset dan Inovasi Nasional (BRIN) beserta Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudristek). \r\n\r\nPenayangan film ini dibagi dalam 2 sesi yakni sesi I pukul 19.00 WIB dan sesi II pukul 20.30 WIB yang diselenggarakan di Gedung Kesenian Sunan Ambu ISBI Bandung. Karya ini berhasil mengundang tepuk tangan kepuasan dan senyum kekaguman dari pada penonton setelah selesai menyaksikannya. Setiap sesi, kursi terisi penuh oleh penonton dari berbagai kalangan, dari seniman dan budayawan hingga penikmat seni dan masyarakat umum. \r\n\r\nKepala Dinas Pariwisata dan Kebudayaan Provinsi Jawa Barat, Drs. Benny Bachtiar, M.Si., Sekretaris Komisi IV DPRD Jabar, Dr. Buky Wibawa Karya Guna., M.Si. juga berkesempatan hadir dan menyaksikan penayangan Jabang Tutuka, Birth of The Blazing Knight ini.\r\n\r\nMelalui wawancara singkat, Ka. Disparbud Provinsi Jabar menyampaikan apresiasi atas penampilan yang sangat kreatif. Ia menilai bahwa drama tari ini menampilkan sesuatu yang sangat menarik, dan memberikan wawasan yang jarang diketahui banyak orang bahwa Jabang Tutuka ini merupakan cikal bakal Gatotkaca. Drs. Benny menyebutkan bahwa pertunjukkan Wayang Wong seperti ini dapat meningkatkan wawasan kebudayaan Indonesia dan ia pun berharap kedepannya kesenian ini akan terus disosialisasikan kepada generasi milenial sehingga dapat menumbuhkan kembali jati diri anak muda bangsa.', '2022-08-21 01:15:00', '60-jabangtutuka1.jpeg'),
('A20220002', 'Selamat! Gita Suara Choir ISBI Bandung Meraih Juara 1 Kategori Folklore', 'prestasi', 'Gita Suara Choir ISBI Bandung menjadi salah satu pengisi acara yang diselenggarakan oleh Kementerian Perencanaan Pembangunan Nasional/Badan Perencanaan Pembangunan Republik Indonesia. Dalam acara ini dibawakanlah serangkaian lagu-lagu daerah dari Indonesia Timur, antara lain:\r\nBolelebo, Huhate, Apuse, Sajojo, dan Yamko Rambe Yamko, yang semuanya dikemas apik oleh Indra Ridwan sebagai penata musik.', '2022-08-21 01:24:00', '585-p2.jpg'),
('A20220003', 'Prestasi Kembali Terukir, Humas ISBI Bandung Raih Penghargaan ', 'prestasi', 'Bekasi, Kamis (31/03/2022), ISBI Bandung mendapatkan penghargaan sebagai \"Pengelola Kehumasan Terinovatif\" dari Direktorat Jenderal Pendidikan Vokasi Kemdikbudristek yang diserahkan langsung oleh Sesditjen DIKSI, Dr. Wartanto pada Rapat Kerja Humas dan Publikasi di Harris Hotel & Conventions Bekasi.\r\n\r\nWakil Rektor Bidang Perencanaan, Sistem Informasi dan Kerjasama, Dr. Suhendi Afryanto, S.Kar., M.M menyatakan bahwa penghargaan yg diterima oleh Humas ISBI Bandung dari Dirjen Pendidikan Vokasi sebagai Pengelola Kehumasan Terinovatif, mengindikasikan prestasi kinerja yang dilakukan secara militan dan sustain meskipun belum ditunjang oleh jumlah staf dan sarpras yang memadai. Di samping hal itu, komitmen untuk terus berbuat yang terbaik di tengah keterbatasan yang ada menjadi spirit yang tetap menggelora. \r\n\r\nISBI Bandung sebagai satu-satunya perguruan tinggi seni negeri di Jawa Barat bertekad untuk terus memberikan informasi seputar kiprahnya dalam mempertahankan budaya bangsa berbasis kearifan lokal Sunda melalui kehumasan dipandang cukup strategis. Mengingat humas ISBI Bandung menjadi jendela informasi yang harus pertama kali dilihat oleh publiknya sendiri, baik yang bersifat eksklusif maupun yang inklusif sekalipun. Sehingga dari perannya tersebut, secara langsung maupun tidak langsung, humas ISBI Bandung harus mengambil posisi terdepan dalam mengelola berbagai informasi yang dibutuhkan oleh masyarat, terutama _core bisnis_ ISBI Bandung sebagai lembaga pendidikan formal bidang seni budaya. Jika humas ISBI Bandung dalam kurun waktu dua tahun berturut-turut meraih prestasi sesuai tugas dan fungsinya, semoga hal ini menjadi pertanda dinamisnya pengelolaan sistem informasi yang ada di lingkungan Kemdikbudristek, mengingat ISBI Bandung merupakan bagian integral dari induk organisasi kementerian sebagai satuan kerja. Untuk itu semoga spirit yang sekarang ada tidak mudah padam, karena tantangan perubahan masyarakat terus berjalan, pungkas Suhendi.\r\n\r\nRektor ISBI Bandung, Prof. Dr. Een Herdiani, S.Sen., M.Hum menyampaikan kebahagiaannya \"Kami mengucapkan terima kasih kepada tim Humas ISBI Bandung yang telah bekerja keras untuk terus menerus meningkatkan inovasi dengan menyajikan informasi yang jelas pada masyarakat luas yg membutuhkan informasi. Tentu kami jajaran pimpinan dan seluruh civitas ISBI Bandung sangat bangga Tim Humas ISBI Bandung dapat meraih penghargaan tersebut. \r\n\r\nSemoga prestasi yang dicapai terus dapat ditingkatkan dan dipertahankan. Dan semoga selalu menjadi inspirasi untuk kita semua dalam keluarga besar ISBI Bandung\", sahut Rektor ISBI Bandung menutup ucapannya.\r\n\r\nHikmaningtias Maharani, S.T., M.Kom yang mewakili tim Humas ISBI Bandung dalam menerima penghargaan tersebut menyatakan bahwa dari 54 peserta yang mengumpulkan laporan kinerja kehumasan dan video kisah sukses alumni vokasi dari berbagai Politeknik, PTN, Unista, Akademi dan Balai, ISBI Bandung berhasil menjadi yang terbaik bersama dengan tim humas SV-UGM, SV-IPB, Politekni', '2022-08-21 12:18:00', '259-p1.jpg'),
('A20220004', 'ISBI Bandung Undang Putra Putri Terbaik Indonesia Untuk Ikut Serta Pada Pesta Demokrasi Pemilihan Rektor 2022-2026', 'berita', 'Menjelang berakhirnya masa jabatan Rektor Institut Seni Budaya Indonesia (ISBI) Bandung periode 2018-2022 pada bulan September 2022 ini, ISBI Bandung telah membentuk dan mengangkat panitia kegiatan Seleksi Terbuka Pengisian Jabatan Pimpinan Tinggi Utama (Pemilihan Rektor) Periode 2022-2026.\r\nPanitia Pemilihan Rektor (Pilrek) ISBI Bandung periode 2022-2026 menyelenggarakan konferensi pers sebagai salah satu bentuk sosialisasi penyelenggaraan Pilrek ISBI Bandung periode 2022-2026 pada Senin, 13 Juni 2022. Konferensi pers tersebut dihadiri oleh Rektor ISBI Bandung, Prof. Dr. Een Herdiani, S.Sen,. M.Hum., Ketua Senat Prof. Anis Sujana, Sekertaris Senat Dr. Wanda Listiani, Anggota Senat Dr. Deni Hermawan dan Prof. Endang Caturwati serta Ka. Biro Akademik dan Umum Dede Priana, S.Sn., M.Si.. Disamping itu Panitia Pilrek ISBI Bandung juga turut hadir yakni Iip Sarip Hidayana, S.Sn., M.Sn selaku Ketua Pelaksana, Neneng Yanti Khozanatu Lahpan, Ph.D. sebagai Sekretaris dan Komarudin, S.Kar., MM. sebagai salah satu anggota panitia.\r\n\r\nProses Pilrek ini merupakan seleksi terbuka, merujuk pada UU No. 5 tahun 2014 tentang Pemilihan Aparatur Sipil Negara yang dilakukan secara terbuka dan kompetitif di kalangan PNS dengan memperhatikan syarat, kompetensi dan ketentuan yang berlaku.\r\nPilrek ISBI Bandung periode 2022-2026 ini mengusung tema “Pemimpin Pinunjul, ISBI Bandung Unggul”. Pinunjul adalah kata dalam bahasa Sunda yang memiliki arti kelebihan atau unggul. Pemimpin pinunjul dapat diartikan sebagai pemimpin yang memiliki sejumlah kualitas pribadi yang cakap dan unggul. Harapannya, melalui pemilihan rektor ini dapat terpilih pemimpin yang memiliki kecakapan dan keunggulan dalam berbagai hal yang mampu menghadapi beragam tantangan, khususnya persaingan global yang memerlukan kepemimpinan yang unggul. Dengan terpilihnya pemimpin pinunjul (memiliki keunggulan) dalam Pilrek ini, diharapkan dapat membawa ISBI Bandung menuju perguruan tinggi negeri seni budaya yang unggul, berjati diri, berkualitas, dan berdaya saing dalam skala lokal, nasional, dan global.\r\nProf. Een berharap pemimpin selanjutnya bisa lebih baik dari pemimpin sebelumnya dan bisa membawa ISBI Bandung menjadi lebih unggul.\r\n“Seperti tema Pemilihan Rektor, Pemimpin Pinunjul, ISBI Bandung Unggul, saya harap pemimpin yang pinunjul akan terpilih sehingga bisa membawa ISBI Bandung menjadi lebih unggul,” tuturnya.\r\n\r\nAnggota Senat yang juga mantan Ketua STSI, Prof. Endang juga menyampaikan harapan untuk rektor selanjutnya.\r\n“Setiap pemimpin pasti punya cita-cita, seiring berkembangnya zaman. Mudah-mudahan pemimpin yang baru bisa memanfaatkan aset yang dimiliki ISBI Bandung sesuai dengan apa yang sudah dikonsepkan,” harapnya.', '2022-08-21 12:35:00', 'pilrek1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jad`
--

CREATE TABLE `jad` (
  `id_jad` int(15) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jad`
--

INSERT INTO `jad` (`id_jad`, `kegiatan`, `mulai`, `selesai`) VALUES
(1, 'Kejain Skripsi', '2022-07-22 08:00:00', '2022-07-21 11:00:00'),
(9, 'Rapat ', '2022-08-06 13:00:00', '2022-08-06 16:36:00'),
(10, 'Rapat Dengan KaProdi Seni', '2022-08-12 13:00:00', '2022-08-12 16:00:00'),
(11, 'Rapat dengan staff ISBI ', '2022-08-15 14:00:00', '2022-08-15 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(2) NOT NULL,
  `nama_jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('F', 'FESTIVAL'),
('S', 'SEMINAR'),
('T', 'TALK SHOW'),
('W', 'WEBINAR');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `kode_artikel` varchar(10) NOT NULL,
  `nama_artikel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`kode_artikel`, `nama_artikel`) VALUES
('berita', 'BERITA'),
('prestasi', 'PRESTASI');

-- --------------------------------------------------------

--
-- Table structure for table `keg`
--

CREATE TABLE `keg` (
  `id_kegiatan` int(15) NOT NULL,
  `judul_k` varchar(100) NOT NULL,
  `desk_k` varchar(3000) NOT NULL,
  `tglmulai` datetime NOT NULL,
  `tglakhir` datetime NOT NULL,
  `jenis_k` enum('Internal','Eksternal') NOT NULL,
  `kategori_k` varchar(20) NOT NULL,
  `gambar_k` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keg`
--

INSERT INTO `keg` (`id_kegiatan`, `judul_k`, `desk_k`, `tglmulai`, `tglakhir`, `jenis_k`, `kategori_k`, `gambar_k`) VALUES
(19, 'Festival Budaya Nusantara IV 2021', 'Antropologi Budaya ISBI Bandung Proudly Presents\r\n\r\nFESTIVAL BUDAYA NUSANTARA IV\r\n\"Celebrating Diversity, Embracing Creativity\"\r\n\r\nDepartment of Cultural Anthropology ISBI Bandung is pleased to announce Festival Budaya Nusantara IV will be held on 27-28 October 2021 on virtual platform.\r\n\r\nDay 1 \r\n\r\nDate: 27 Oktober 2021 \r\nTime: 09.00 WIB\r\nVia Zoom Meeting\r\nLink: https://bit.ly/FBNAntroDay1 \r\n\r\nPerforming Collaboration\r\nDwiki Darmawan, Dosen-dosen Antropologi Budaya ISBI Bandung, Ethnotik Gamelan Australia, Ensamble Tikoro, WAJIWA dan Karinding Antropologi\r\n\r\nInternational Webinar\r\nInvited Speakers:\r\n- Prof. Dr. Made Mantle Hood (Tainan National University of the Arts, Taiwan)\r\n- Dr. Sharyn Graham Davies (Monash University, Australia)\r\n- Drs. Bambang Sundayana (Asosiasi Antropologi Indonesia)\r\n\r\nInternational Conference\r\n\r\nDay 2\r\nDate: 28 Oktober 2021\r\nTime: 08:00 WIB\r\nVia Zoom Meeting|\r\nLink: https://bit.ly/FBNAntroDay2 \r\n\r\nOpening Virtual Art Gallery\r\n\r\nTalkshow Enterpreunership\r\nInvited Speakers:\r\n- Kawendra Lukistian (GEKRAFS)\r\n- Indriyani Handyastuti (Enhaiipreuneur)\r\n\r\nSharing Session with Practitioners\r\nInvited Speakers:\r\n- Robi Rusdiana (Ensamble Tikoro)\r\n- Alfiyanto (Wajiwa)\r\n- Arief Yudi Rahman (Jatiwangi Art Factory)\r\n- Iman Soleh (Celah Celah Langit)\r\n- Efiq Zulfiqar (Ethnotik Gamelan Australia)\r\n\r\nLive Performance\r\n- Ethnotik Gamelan Australia\r\n- Ensambel Tikoro\r\n- WAJIWA\r\n\r\nPengumuman Lomba Esai \r\nPameran Seni BPNB \r\nClosing Ceremony\r\n\r\nSave the date and join with us‼️\r\n\r\nFurther information\r\nWebsite: https://fbnisbi.com/ \r\nInstagram: @fbn_antroisbi\r\nYouTube: FBN Antropologi ISBI Bandung', '2022-07-01 09:00:00', '2022-07-02 15:00:00', 'Internal', 'F', 'revisi_poster_1_20211026_1188424762.jpeg'),
(20, 'Explore about IT', '*✨ EXPLO-IT✨*\r\n.\r\n*Hello guys!!!*\r\nExplore about IT atau dapat disebut *EXPLO-IT* merupakan program kerja tahunan dari *Departemen Penalaran Intelektual HIMATIF STT Bandung*. Yang dimana didalamnya membahas mengenai perkembangan Teknlogi saat ini. Salah satu Teknologi yang sedang berkembang saat ini yaitu mengenai pengembangan Cloud Computing.\r\n.\r\nMaka dari itu kami mempersembahakan Webinar *EXPLO-IT* dengan tema *Cloud Computing Evolution To Hybrid Cloud Adaptation*.\r\n.\r\nAdapun pembicara dalam acara tersebut yaitu:\r\n🗣 : *Hardika Gutama ~ Senior Site Reability Engineer*\r\nDana Indonesia\r\n.\r\nDan yang akan di pandu oleh MC serta Moderator yaitu:\r\n.\r\nMC :\r\n🧕 : *Rani Rahmawati*\r\nBPH HIMATIF STT Bandung\r\n.\r\nModerator :\r\n🤵 : *Anggie Dwi Permana*\r\nBPH HIMATIF STT Bandung\r\n.\r\n.\r\nAcara ini akan dilaksanakan pada:\r\n📅 : 19 September 2021\r\n🕙 : 08.30 - selesai\r\n📍 : Zoom Meeting Room\r\n.\r\n*✨Free HTM✨*\r\n.\r\n*Benefit:*\r\n📌 Free SKKM (Untuk Mahasiswa STT Bandung)\r\n📌 E-Sertifikat\r\n📌 Ilmu yang bermanfaat\r\n📌 Doorprize\r\n.\r\n*Link pendaftaran:*\r\nhttps://bit.ly/EXPLOIT2021\r\n.\r\n*Contact person:*\r\n👩‍💻 : 087782448102 (Erika Yuni Bastian)\r\n👩‍💻 : 082118256801 (Putri Jesica Nursalma)\r\n.\r\nKegiatan ini berlaku untuk seluruh Mahasiswa STT Bandung dan masyarakat umum. Ayo daftarkan diri anda dan jangan sampai ketinggalan.\r\n.\r\n*Limited Seat!!!*', '2022-07-08 10:00:00', '2022-07-08 13:30:00', 'Internal', 'W', 'FLAYER EXPLOIT.jpg'),
(21, 'Seminar Internasional Festival Kesenian Indonesia (FKI) - XI 2021 ', '!! Call For Paper !!\r\nSEMINAR INTERNASIONAL\r\nFestival Kesenian Indonesia (FKI) - XI 2021\r\n\"Indonesian Art Spirit: Cultural Ecosystem and Diversity\"\r\n\r\nInstitut Seni Budaya Indonesia (ISBI) Bandung\r\n20 - 21 Oktober 2021\r\n\r\nDalam rangkaian kegiatan Festival Kesenian Indonesia (FKI) -XI 2021 bekerjasama dengan 9 Perguruan Tinggi Seni, akan diselenggarakan Seminar Internasional   \"Indonesian Art Spirit: Cultural Ecosystem and Diversity\".  Kirimkan artikel anda sebagai momen dalam menjalin diplomasi seni budaya di dalam dan luar negeri. Seminar dan publikasi hasil penelitian seni dan budaya ini menjadi salah satu upaya perguruan tinggi seni Indonesia merayakan semangat ke-Indonesia-an agar terus tumbuh selama pandemi.\r\n\r\nPanduan Pemakalah Seminar/Guidelines\r\n1. Penulis Pemakalah Terbuka untuk Umum\r\n2. Penulis makalah mengisi formulir pendaftaran pada link http://tiny.cc/pendaftaranfki-isbi21\r\n3. Full paper berbahasa Inggri, format word, mengikuti format terlampir di link http://tiny.cc/templatefull-fki21\r\n4. Makalah akan disajikan pada tanggal 20-21 Oktober 2021\r\n5. Presentation Slide dengan format pdf, max. 5 hal/slide\r\n6. Presentasi dapat disampaikan dengan bahasa Inggris, Indonesia, atau lokal\r\n7. Pengiriman full paper dan slide presentasi melalui: isbibandunglppm@gmail.com  \r\n\r\nJANGAN LUPA UNTUK CATAT TANGGAL PENTINGNYA YAAA\r\n- Pendaftaran Pemakalah: 13 September - 08 Oktober 2021\r\n- Batas Akhir Pengiriman (Full Paper dan Slide PPT): 08 Oktober 2021\r\n- Pengumuman Full Paper: 11 Oktober 2021\r\n-Penyajian Makalah: 20-21 Oktober 2021\r\n\r\n#CallForPaper\r\n#FestivalKesenianIndonesiaXI2021\r\n#ISBIBandung\r\n#MerdekaBelajar\r\n#KampusMerdeka', '2022-07-22 10:00:00', '2022-07-23 11:00:00', 'Eksternal', 'S', '491-semnar.jpg'),
(22, 'Talkshow Wayang Orang Sunda', 'Ikutilah!!\r\n\r\nTalkshow Wayang Orang Sunda\r\nHari, tanggal : Selasa, 15 Maret 2022\r\nPukul : 14.WIB s/d Selesai\r\nLive melalui aplikasi ZOOM Meeting\r\nMeeting ID : 831 9120 4855\r\nPasscode : 320752\r\n\r\nSampai Jumpa!!!\r\n\r\n#ISBIBandung\r\n#WayangOrangSunda\r\n#KampusMerdeka\r\n#MerdekaBelajar\r\n#CentreOfCreativityBasedOnCulturalZone', '2022-07-29 14:00:00', '2022-07-29 15:30:00', 'Eksternal', 'T', 'talksh.jpg'),
(24, 'FESTIVAL SENI TRADISIONAL', 'ini adalah festival seni tahun ke-3', '2022-08-20 10:00:00', '2022-08-20 12:00:00', 'Internal', 'F', 'sanggar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(15) NOT NULL,
  `judul_k` varchar(30) NOT NULL,
  `desk_k` varchar(50) NOT NULL,
  `tglmulai` datetime NOT NULL,
  `tglakhir` datetime NOT NULL,
  `jenis_k` enum('Internal','Eksternal') NOT NULL,
  `kategori_k` varchar(20) NOT NULL,
  `gambar_k` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_k`, `desk_k`, `tglmulai`, `tglakhir`, `jenis_k`, `kategori_k`, `gambar_k`) VALUES
(3, 'Budaya Trasdisi vs Digital', 'Seminar Budaya', '2022-06-30 12:00:00', '2022-06-30 14:00:00', 'Internal', 'Seminar', '2posterseminar-budaya-fakultas-sastra-2.jpg'),
(7, 'JUDUL JUDULAN', 'asdsadfsaf', '2022-06-30 09:00:00', '2022-06-30 12:00:00', 'Internal', 'Festival', 'festival.png'),
(16, 'TONIGHT SHOW ', 'asdsd', '2022-07-09 14:00:00', '2022-07-07 15:30:00', 'Internal', 'Talkshow', '669-4113893614.jpg'),
(22, 'PODCAST TALKSHOW', 'talkshow in aslkdalksdjlsajd', '2022-07-23 09:00:00', '2022-07-23 13:00:00', 'Internal', 'Talkshow', 'talkshow.jpg'),
(24, 'a', 'a', '2022-07-23 10:21:00', '2022-07-23 10:21:00', 'Eksternal', 'Talkshow', '49-tv.jpg'),
(25, 'asdsad', 'asdasd', '2022-07-23 10:22:00', '2022-07-23 10:22:00', 'Eksternal', 'Webinar', 'wallpaperflare.com_wallpaper (1).jpg'),
(26, 'aku aku akusas', 'ssss', '2022-07-23 10:23:00', '2022-07-23 10:23:00', 'Internal', 'Festival', 'lofi_generator.png'),
(27, 'adasd', 'ddd', '2022-07-23 10:24:00', '2022-07-23 10:24:00', 'Eksternal', 'Seminar', '154-The-Collide-of-Old-and-New-Media-Age.jpg'),
(28, 'Ini judulllll', 'Ini Deskripsiiii', '2022-07-22 09:01:00', '2022-07-23 10:00:00', 'Internal', 'Festival', '866-Desain-Poster-Musik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`) VALUES
(3, 'Fariz', 'farizh77@gmail.com', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `level`) VALUES
(7, 'tido', '41607a3d410ae2a88f3aae483ac49bb9', 'SuperAdmin'),
(13, 'superadmin', '827ccb0eea8a706c4c34a16891f84e7b', 'SuperAdmin'),
(14, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(15, 'pimpinan', '827ccb0eea8a706c4c34a16891f84e7b', 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `kode_prodi` varchar(4) NOT NULL,
  `nama_prodi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` char(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nowa` varchar(15) NOT NULL,
  `tgl_up` datetime NOT NULL,
  `namafile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul`, `nama`, `email`, `nowa`, `tgl_up`, `namafile`) VALUES
('P20220001', 'judul1', 'nama1', 'farizh77@gmail.com', '08956746665', '2022-08-10 09:29:42', 'PEDOMAN KP TIF.pdf'),
('P20220003', 'tesssstt', 'cahyo', 'cahyopromom@gmail.co', '089809769', '2022-08-11 12:06:35', 'UTS-WEB-18111051-FarizHawari.pdf'),
('P20220004', 'judul1', 'Fariz', 'farizh77@gmail.com', '089630687123', '2022-08-11 01:45:01', 'UAS_MOBPROG2_18111051_FarizHawari_TIFRP18CNSA.pdf'),
('P20220005', 'WEBINAR SENI MUSIK', 'Rian ', 'rian@gmail.com', '089753519107', '2022-08-15 01:29:00', '7016-Article Text-24549-1-10-20191219.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(5) NOT NULL,
  `ket_slider` varchar(100) NOT NULL,
  `kat_slider` varchar(30) NOT NULL,
  `nama_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `ket_slider`, `kat_slider`, `nama_slider`) VALUES
(1, 'SENI TARI', 'Fakultas Seni Pertunjukan', 'seni tari.jpg'),
(2, 'SENI KARAWITAN', 'Fakultas Seni Pertunjukan', 'seni karawitan.jpg'),
(3, 'SENI TEATER', 'Fakultas Seni Pertunjukan', 'seni teater.jpg'),
(4, 'MUSIK BAMBU', 'Fakultas Seni Pertunjukan', 'musik bambu.jpg'),
(5, 'SENI RUPA MURNI', 'Fakultas Seni Rupa dan Desain', 'senirupamurni.jpeg'),
(6, 'KRIYA SENI', 'Fakultas Seni Rupa dan Desain', '437-kriyasenii.jpg'),
(7, 'TATA RIAS DAN BUSANA', 'Fakultas Seni Rupa dan Desain', '708-tatariass.jpeg'),
(8, 'ANTROPOLOGI BUDAYA', 'Fakultas Budaya dan Media', 'fd57315048b2a0e2ee02ed04b0927842_XL.jpg'),
(9, 'TELEVISI  DAN FILM', 'Fakultas Budaya dan Media', 'tv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `ket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul`, `ket`) VALUES
(1, 'Visi', 'Visi ISBI  Bandung Menjadi Institusi Pendidikan Tinggi Seni Budaya  yang berjati diri, berkualitas, dan berdaya saing dalam skala lokal, nasional, dan global.'),
(2, 'Misi', 'Untuk mewujudkan Visi, ISBI Bandung mempunyai misi sebagai berikut: <br>\n<b>1.</b> Menyelenggarakan Tridarma Perguruan Tinggi di bidang seni budaya yang memperkokoh karakter budaya bangsa. <br>\n<b>2.</b> Memberdayakan seni budaya secara kreatif dan inovatif. <br>\n<b>3.</b> Membangun  sumber daya manusia unggul dan kompetitif. <br>\n<b>4.</b> Menjalin kerja sama seni budaya dalam tingkat lokal dan global.'),
(3, 'Tujuan', 'Berdasarkan Visi dan Misi tersebut, ISBI Bandung mempunyai tujuan sebagai berikut: <br>\r\n<b>1.</b> Meningkatkan pendidikan, penelitian, dan pengabdian kepada masyarakat di bidang seni budaya secara profesional untuk kemajuan bangsa. <br>\r\n<b>2.</b> Mengembangkan ilmu pengetahuan dan teknologi di bidang seni budaya yang bermanfaat bagi kemaslahatan manusia. <br>\r\n<b>3.</b> Menghasilkan sumber daya manusia yang berkualitas, bertaqwa kepada Tuhan Yang Maha Esa, terdidik, terampil, dan profesional di bidang seni budaya yang memiliki kepekaan dalam menjawab tantangan zaman. <br> \r\n<b>4.</b> Meningkatkan pengetahuan dan pengalaman di bidang seni budaya dalam upaya pemeliharaan, pengembangan, dan pemanfaatannya melalui jejaring nasional dan internasional.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `kategori_artikel` (`kat_artikel`);

--
-- Indexes for table `jad`
--
ALTER TABLE `jad`
  ADD PRIMARY KEY (`id_jad`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indexes for table `keg`
--
ALTER TABLE `keg`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `kategori_k` (`kategori_k`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jad`
--
ALTER TABLE `jad`
  MODIFY `id_jad` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `keg`
--
ALTER TABLE `keg`
  MODIFY `id_kegiatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `kategori_artikel` FOREIGN KEY (`kat_artikel`) REFERENCES `kategori_artikel` (`kode_artikel`);

--
-- Constraints for table `keg`
--
ALTER TABLE `keg`
  ADD CONSTRAINT `keg_ibfk_1` FOREIGN KEY (`kategori_k`) REFERENCES `jurusan` (`kode_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
