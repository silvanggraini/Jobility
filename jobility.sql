-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 13.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobility`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `masukan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infoloker`
--

CREATE TABLE `infoloker` (
  `ID` int(10) NOT NULL,
  `lowongan` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `syarat` varchar(50) NOT NULL,
  `gaji` varchar(20) NOT NULL,
  `detailpersyaratan` varchar(255) NOT NULL,
  `jobdesk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infoloker`
--

INSERT INTO `infoloker` (`ID`, `lowongan`, `perusahaan`, `lokasi`, `keterangan`, `syarat`, `gaji`, `detailpersyaratan`, `jobdesk`) VALUES
(1, 'Software System', 'Advotics', 'Jakarta', 'Advotics introduced a cloud platform to digitize workforce, business network, and physical assets and products, with the main objective of converting data', 'Tunadaksa', 'Rp. 5.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(2, 'UI/UX Marketplace Web Designer', 'Cudy Technologies', 'Jakarta', 'Review and edit designs created by junior designers within the company. Write style guides to help designers create consistent, reusable components.', 'Tunadaksa', 'Rp. 7.500.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(3, 'Graphic Designer , UI/UX ', 'Stucel ', 'Jakarta', 'Collaborate  with other designers to give and receive thoughtfull feedback.', 'Tunadaksa', 'Rp. 4.500.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain\r\n', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(4, 'UI/UX Dessigner', 'DETIKcom', 'Jakarta', 'Selalu update dengan tren desain dan teknologi online, Familiar dengan UI/UX designer process, Familiar dengan UI/UX tools.', 'Tunadaksa', 'Rp. 5.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain\r\n', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(5, 'UI & UX Designer ', 'PT. Maju Gemilang Indotech', 'Jakarta', 'Translate clients marketing objectives and information content into a solid website concept, create usable website layout according to clients needs.', 'Tunadaksa', 'Rp. 8.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain\r\n', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(6, 'UI / UX Designer', 'Nimbly', 'Jakarta', 'A mobile solutions that automates woekflows, improving efficiency and generating cost savings by providing data-driven insights from field operations remotly', 'Tunadaksa', 'Rp. 4.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface\r\n'),
(7, 'UI UX DESIGNER', 'Astronacci International', 'Jakarta', 'Lebih dari 2 tahun pengalaman sebagai UI/UX designer di Web dan Mobile apps. Mengumpulkan, meneliti, menyelidiki serta mengevaluasi kenyamanan pengguna.', 'Tunadaksa', 'Rp. 4.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain\r\n', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(8, 'UI / UX Designer ', 'ACC Kredit Mobil', 'Jakarta', 'If you are passionate in digital and arts, this position will e very suitable for you. UI /UX Designer in ACC will be responsible to develop Varios Digital.', 'Tunadaksa', 'Rp. 4.500.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain\r\n', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(9, 'UI /UX Designer', 'Cermati.com 1.4', 'jakarta', 'Plan, think and design how user interact with our product (start from wireframing into high fidelity mockuo design). Solid oral and written communication.', 'Tunadaksa', 'Rp. 7.500.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface'),
(10, 'UI/UX Designer', 'PT Medika Komunika TReknologi', 'Jakarta', 'Collaborate closely with other stakeholders includng designer, egineers, product managaers, business analysts.', 'Tunadaksa', 'Rp. 8.000.000', '1. Pendidikan Minimal S1 jurusan DKV, Desain Grafis, TI\r\n2. Memiliki tingkat kreativitas tinggi\r\n3. Up to date dengan desain terbaru\r\n4. Menguasai tools terkait dengan desain', '1. Menguasai teknik editing dan pembuatan desain secara maksimal\r\n2. Memiliki kemampuan untuk memvisualisasikan user flow\r\n3. Terampil dalam pembuatan mockup atau wireframing sebagai rancangan awal user interface');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopelatihan`
--

CREATE TABLE `infopelatihan` (
  `ID` int(10) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `NamaPelatihan` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infopelatihan`
--

INSERT INTO `infopelatihan` (`ID`, `Gambar`, `NamaPelatihan`, `Keterangan`, `link`) VALUES
(1, 'pelatihanAdministrasi.jpg', 'Pelatihan Administrasi', 'Pelatihan ini di selenggarakan untuk menambah minat dan bakat anda. Disini kita akan belajar banyak sekali ilmu mengenai Administrasi. untuk info lebih lanjut silahkan hubungi Hp/Wa = 082266865959', 'http://pelatihanAdministrasi.ac.id'),
(2, 'pelatihanAsik.jpg', 'Training Asik Kartu Prakerja', 'Training yang di selenggarakan pihak prakerja bertujuan untuk lebih melatih atau memberi bekal kepada masyarakat yang telah mendapatkan kartu prakerja. ', 'http://pelatihanAsik.ac.id'),
(3, 'pelatihanCorelDraw.png', 'Cara Menghasilkan jutaan Hanya Dengan CorelDraw', 'Pada pelatihan ini kita akan sama - sama belajar untuk memanfaatkan aplikasi desain yaitu CorelDraw untuk meraup keuntungan hingga jutaan rupiah. Tunggu apalagi yuk buruan daftar!!!', 'http://pelatihanCorelDraw.ac.id'),
(4, 'pelatihanDesain.png', 'Membuat Desain Kaos Oblong Dengan CorrelDraw', 'Pada pelatihan ini kita belajar membuat sebuah desain yang sangat menarik pada kaos oblong sehingga kaos oblong tersebut bisa menjadi barang dengan  harga jual tinggi.', 'http://pelatihanDesain.ac.id'),
(5, 'pelatihanDigitaslMarkerting.jpg', 'Pelatihan Waroeng Digital', 'Pelatihan yang mengajarkan tentang ilmu marketing online. Dengan pemateri yang mempunyai banyak pengalaman serta penyampaian yang menarik. ', 'http://pelatihanPrakerjaDigital.ac.id'),
(6, 'pelatihanDriver.jpg', 'Pelatihan Driver', 'Disini anda akan belajar dan berlatih bagaimana menjadi driver yang baik dan benar tentunya akan dilatih hingga mahir dalam hal Driver.', 'http://pelatihanDriver.ac.id'),
(7, 'pelatihanGelombang9.jpg', 'Pelatihan Menulis Gelombang 9 telah dibuka !!1', 'bagi teman - teman yang tidak kebagian slot untuk pelatihan -pelatihan sebelumnya bisa daftar lagi pada gelombang 9 ini. Mari buruan daftar seblum kehabisan slot.', 'http://pelatihanPrakerjaGel9.ac.id'),
(8, 'pelatihanParkerja.png', 'Pelatihan Prakerja', 'Bagi masyarakat yang telah mendapatkan atau lolos seleksi Kartu Prakerja diharapkan mengikuti pelatihan Prakerja. Yang dihatapkan untuk menunjang skil dan bakat dalam hal bekerja.', 'http://PrakerjaDisability.ac.id'),
(9, 'pelatihanPrakerjaPemerintah.jpg', 'Pelatihan Prakerja Gelombang 12', 'Kabar baik bagi kita masyarakat yang pekrjaannya terkena dampak pandemi, kini gelombang pendaftaran kartu prakerja gelombang 12 telah dibuka !!! . Segera daftarkan diri anda dan semoga lolos seleksi.', 'http://Disability.ac.id'),
(10, 'pelatihanRuangGuru.jpeg', 'Pelatihan Ruang Guru', 'Mari kita manfaatnya saldo dari kartu prakerja untuk mengasah skil academy anda. Segera daftarkan diri anda dan buatlah diri anda lebih bermanfaat.', 'http://pelatihanRuangGuruDisabilitas.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infoperusahaan`
--

CREATE TABLE `infoperusahaan` (
  `ID` int(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `NamaPerusahaan` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infoperusahaan`
--

INSERT INTO `infoperusahaan` (`ID`, `logo`, `NamaPerusahaan`, `Keterangan`) VALUES
(1, 'Google.jpg', 'Google', 'Google didirikan oleh Larry Page dan Sergey Brin saat masih mahasiswa Ph.D. di Universitas Stanford. Mereka berdua memegang 16 persen saham perusahaan. Mereka menjadikan Google sebagai perusahaan swasta pada tanggal 4 September 1998. Pernyataan misinya adalah \"mengumpulkan informasi dunia dan membuatnya dapat diakses dan bermanfaat oleh semua orang\".'),
(2, 'Shopee.png', 'Shopee', 'Shopee adalah situs elektronik komersial yang berkantor pusat di Singapura di bawah naungan SEA Group (sebelumnya dikenal dengan nama Garena), yang didirikan pada 2009 oleh Forrest Li. Shopee pertama kali diluncurkan di Singapura pada tahun 2015, dan sejak itu memperluas jangkauannya ke Malaysia, Thailand, Taiwan, Indonesia, Vietnam, dan Filipina. Mulai tahun 2019, Shopee juga sudah aktif di negara Brasil, menjadikannya negara pertama di Amerika Selatan dan luar Asia yang dikunjungi Shopee.\r\n'),
(3, 'DANA.png', 'DANA', 'Dana adalah layanan keuangan digital yang berbasis di Jakarta, Indonesia.Perjalanan Dana dimulai pada tahun 2018 sebagai aplikasi yang menawarkan pembayaran, poin loyalitas, dan layanan keuangan yang didukung oleh lengan digital KMK Online. Namun ia mendapat izin untuk beroperasi sebagai perusahaan fintech di seluruh Indonesia pada 5 Desember 2018.'),
(4, 'Gojek.png', 'Gojek', 'Gojek (sebelumnya ditulis GO-JEK) merupakan sebuah perusahaan teknologi asal Indonesia yang melayani angkutan melalui jasa ojek. Perusahaan ini didirikan pada tahun 2010 di Jakarta oleh Nadiem Makarim.[3][4] Saat ini, Gojek telah tersedia di 50 kota di Indonesia.'),
(5, 'lazada.png', 'Lazada', 'Lazada Group adalah sebuah perusahaan e-commerce Asia Tenggara yang didirikan oleh Rocket Internet dan Pierre Poignant pada 2012, dan dimiliki oleh Alibaba Group. Pada 2014, Lazada Group mengoperasikan situs-situs di Indonesia, Malaysia, Filipina, Singapura, Thailand, dan Vietnam dan meraih sekitar US$647 juta dari beberapa putaran investasi dari para investornya seperti Tesco, Temasek Holdings, Summit Partners, JPMorgan Chase, Investment AB Kinnevik dan Rocket Internet.'),
(6, 'Tokopedia.png', 'Tokopedia', 'Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring. Sejak didirikan pada tahun 2009, Tokopedia telah bertransformasi menjadi sebuah unicorn yang berpengaruh tidak hanya di Indonesia tetapi juga di Asia Tenggara. Hingga saat ini, Tokopedia termasuk marketplace yang paling banyak dikunjungi oleh masyarakat Indonesia'),
(7, 'Traveloka.jpg', 'Traveloka', 'Perusahaan Traveloka merupakan salah satu jasa layanan travel dalam bentuk platform yang cukup terkenal di Asia tenggara. Jasa ini menyediakan berbagai layanan mulai dari tiket akomodasi hingga penyewaan hotel.\r\nSejarah Traveloka dan perkembangannya tak pernah bisa luput dari pengaruh perkembangan teknologi. Terlebih dengan adanya dukungan dari Indonesia yang menjadi salah satu negara dengan penggunaan internet terbanyak di Asia.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(2, 'silvanggraini', '$2y$10$eU28pAmyUYSHDQNxQRwKPOwSq6y8BzIFMeg92lavmam'),
(3, 'wulandarit', '$2y$10$qNbjCL9ClG73Dxcr6V0yOOWnqn.oNcm0BYIXe7Rl6xF'),
(4, 'Iyahh123', '$2y$10$xsioo0X5Y.C/VXNwolkqdunN8fdSes/OWnD20gBdif.'),
(5, 'khanza123', '$2y$10$RS.6.u.qLt92ld24Tiz5qu/HFWh.muUUVpbiS9Cor8W'),
(6, 'ariltanjung', '$2y$10$gsv7OFJVKW36mkRh1Wji0u1c7P1ck2W1bJN262P3quV'),
(7, 'anggrainisilva', '$2y$10$Jm6Tx2tlMIL4bXhYL.Dkx.i/VlA0/uI72Fbn871ax6Q'),
(8, 'admin', '$2y$10$QC1yxAQ1vaPYprJsTvlVHuB1Y78uZNCZHrWdjppNRls'),
(10, 'AlfiRaziq', '$2y$10$I5Zzkb7J3d6VztHglTyXJu/xHzxlpWnG9elYcas3Bcz'),
(11, 'Ismet Syaputra', '$2y$10$P1hE1rsSkcSY3Q.mXL.Hueotp.tRa9NzlrKB5oI6dSh'),
(12, 'admin2', '$2y$10$rY0BfoNj.MXXMSPXEAKtheXwCV49M53ZLxYWUwdRwUm'),
(16, '', '$2y$10$tkHze1wg000hvsHC6bxQz.N0wgxxlAch1KtvA7.QXTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `ID` int(10) NOT NULL,
  `namaDepan` varchar(100) NOT NULL,
  `namaBelakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodePos` int(10) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `infoloker`
--
ALTER TABLE `infoloker`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `infopelatihan`
--
ALTER TABLE `infopelatihan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `infoperusahaan`
--
ALTER TABLE `infoperusahaan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infoloker`
--
ALTER TABLE `infoloker`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `infopelatihan`
--
ALTER TABLE `infopelatihan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `infoperusahaan`
--
ALTER TABLE `infoperusahaan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
