-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 03:27 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ragunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `create_at`) VALUES
(1, 'Informasi Harga Tiket', '<table border=\"5\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\">\r\n<tbody>\r\n<tr>\r\n<td style=\"text-align: center;\" rowspan=\"2\" align=\"center\" valign=\"middle\" width=\"30%\">\r\n<p>Tarif masuk<br /> pengunjung</p>\r\n<p><a href=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-01.jpg\"><img class=\"aligncenter\" src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-01.jpg\" alt=\"ticket-01\" /></a></p>\r\n</td>\r\n<td width=\"40%\">Dewasa</td>\r\n<td width=\"30%\">Rp. 4.000,-/orang</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Anak-anak</td>\r\n<td align=\"left\" valign=\"top\">Rp. 3.000,-/orang</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table border=\"5\" width=\"100%\" cellspacing=\"10\" cellpadding=\"0\">\r\n<tbody>\r\n<tr bgcolor=\"#FFFFFF\">\r\n<td align=\"left\">&nbsp;</td>\r\n</tr>\r\n<tr bgcolor=\"#FFFFFF\">\r\n<td align=\"left\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\">\r\n<tbody>\r\n<tr>\r\n<td style=\"text-align: center;\" rowspan=\"5\" align=\"center\" valign=\"middle\" width=\"30%\">\r\n<p>Tarif penitipan<br /> kendaraan / parkir</p>\r\n<p><a href=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-02.jpg\"><img class=\"aligncenter\" src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-02.jpg\" alt=\"ticket-02\" /></a></p>\r\n</td>\r\n<td width=\"40%\">Bus besar, truk besar, dan mobil box besar</td>\r\n<td width=\"30%\">Rp. 15.000,-/hari</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Bus kecil, Truk kecil, mobil box kecil, dan pick up besar</td>\r\n<td align=\"left\" valign=\"top\">Rp. 12.500,-/hari</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Mobil sedan, minibus/sejenis, termasuk dalam bentuk pickup kecil</td>\r\n<td align=\"left\" valign=\"top\">Rp. 6.000,-/hari</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Sepeda motor, dan kendaraan roda tiga</td>\r\n<td align=\"left\" valign=\"top\">Rp. 3.000,-/hari</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Sepeda</td>\r\n<td align=\"left\" valign=\"top\">Rp. 1.000,-/hari</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr bgcolor=\"#FFFFFF\">\r\n<td align=\"left\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\">\r\n<tbody>\r\n<tr>\r\n<td style=\"text-align: center;\" rowspan=\"12\" align=\"center\" valign=\"middle\" width=\"30%\">\r\n<p>Pemakaian fasilitas<br /> wahana / fauna</p>\r\n<p><a href=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-03.jpg\"><img class=\"aligncenter\" src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-03.jpg\" alt=\"ticket-03\" /></a></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\" width=\"40%\">Kuda tunggang</td>\r\n<td align=\"left\" valign=\"top\" width=\"30%\">Rp. 5.000,-/satu kali keliling</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Onta tunggang</td>\r\n<td align=\"left\" valign=\"top\">Rp. 7.500,-/satu kali keliling</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Taman satwa anak</td>\r\n<td align=\"left\" valign=\"top\">Rp. 2.500,-/satu kali keliling</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Perahu Angsa</td>\r\n<td align=\"left\" valign=\"top\">Rp. 18.000,-/satu kali keliling</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Kereta keliling</td>\r\n<td align=\"left\" valign=\"top\">Rp. 7.500,-/satu kali keliling</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Sepeda tunggal</td>\r\n<td align=\"left\" valign=\"top\">Rp. 10.000,-/orang</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Sepeda ganda</td>\r\n<td align=\"left\" valign=\"top\">Rp. 15.000,-/orang</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Kuda bendi</td>\r\n<td align=\"left\" valign=\"top\">Rp. 15.000,-/satu kali keliling</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr bgcolor=\"#FFFFFF\">\r\n<td align=\"left\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\">\r\n<tbody>\r\n<tr>\r\n<td style=\"text-align: center;\" rowspan=\"2\" align=\"center\" valign=\"middle\" width=\"30%\">\r\n<p>Tarif masuk Pusat<br /> Primata Schmutzer</p>\r\n<p><a href=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-04.jpg\"><img class=\"aligncenter\" src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/ticket-04.jpg\" alt=\"ticket-04\" /></a></p>\r\n</td>\r\n<td width=\"40%\">Hari Selasa s.d Jumat (usia 3 tahun ke atas)</td>\r\n<td width=\"30%\">Rp. 6.000,-/orang</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">Hari Sabtu s.d Minggu / libur nasional (usia 3 tahun ke atas)</td>\r\n<td align=\"left\" valign=\"top\">Rp. 7.500,-/orang</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'gambar_1492001605.jpg', '2017-04-12 00:17:04'),
(2, 'Jadwal Makan Satwa', '<p><strong>2:30 PM &ndash; 2:45 PM</strong><br />Waktu makan siang Gajah Sumatera<br /><br /><strong>3:00 PM &ndash; 3:15 PM</strong><br />Jadwal makan sore Gajah Sumatera<br /><br /><strong>3:00 PM &ndash; 3:15 PM</strong><br />Jadwal makan sore Komodo<br /><br /><strong>12:00 PM &ndash; 12:30 PM</strong><br />Jadwal makan siang Gorilla</p>', 'gambar_1492002282.jpg', '2017-04-12 00:17:04'),
(3, 'Peta & Petunjuk Arah', '<h2>PETUNJUK ARAH</h2>\r\n<p>Jl. Harsono RM. No. 1,<br />Ragunan, Pasar Minggu,<br />Jakarta Selatan 12550 Indonesia</p>\r\n<p>&nbsp;</p>\r\n<p>Taman Margasatwa Ragunan berada di daerah Ragunan, Pasar minggu. Sekitar 20 km dari pusat kota Jakarta.</p>\r\n<p><strong>PETA LOKASI</strong></p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td><img src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2014/10/local_maps1.jpg\" /></td>\r\n</tr>\r\n</tbody>\r\n</table>', 'gambar_1492002132.jpg', '2017-04-12 00:17:04'),
(4, 'Tingkah unik gorilla saat makan', '<p>Percaya kah kamu bahwa gorilla tidak mengkonsumsi daging , makhluk seberat lebih dari 170kg hanya mengkonsumsi sayur dan buah-buahan. Karena gorilla termasuk hewan herbivora. Gorilla di Pusat Primata Schmutzer Taman Margasatwa Ragunan bisa makan 5x&nbsp; sehari pada pukul (07.00 ,09.00, 12.00, 15.00, dan 16.00 wib) dalam porsi yang sama dengan menu yang berbeda, jika di totalkan dalam satu hari gorilla mampu mengkonsumsi sayur dan buah&nbsp; kurang lebih 10 kg , pada pukul (09.00, 12.00 dan 15.00 wib) feeding time Gorilla pengunjung dapat melihat langsung para petugas memberi makan gorilla.<br /><br />Hal ini menjadi salah satu daya tarik yang bisa di nikmati oleh pengunjung. Selain itu menjadi sarana edukasi pengu jung yang ingin mengetahui cara makan gorilla tersebut. Tingkah unik gorilla saat makan yaitu mereka bersenandung saat mendapatkan makanan yang mereka sukai, dan memilih makanan yang dia sukai terlebih dahulu lalu memakannya dengan cara membelakangi pengunjung, ini ada kaitannya dengan sifat gorilla yang pemalu. Karna itu, sering kita lihat Gorilla tidak pernah mau bertatapan secara langsung dengan pengunjung. maka dari itu tingkah unik gorilla yang sedang makan tak jarang membuat para pengunjung terhibur.<br /><br />Menurut http://nationalgeographic.co.id para ilmuwan meluncurkan versi upgrade dari genom gorila berdasarkan DNA, Penelitian terbaru menunjukkan bahwa Gorila dan manusia memiliki kaitan genetik sedikit lebih erat dari yang sebelumnya diakui, dengan perbedaan genom hanya 1,6 %.<br /><br />&ldquo;Saya senang adanya feeding time di ragunan ini, sebab kita bisa melihat langsung bagaimana dan apa saja makanan yang di makan Gorilla. Tempat ini juga&nbsp; menyenangkan bagi pengujung&nbsp; yang membawa anak anak kecil&rdquo; ucap tyas salah satu pengunjung Taman Margasatwa Ragunan.</p>', 'gambar_1484577158.jpg', '2017-04-12 00:17:04'),
(5, 'Telur Burung Unta Seberat 1,6 Kg Ditetaskan Di Incubator', '<div class=\"entry-content\">\r\n<p>Jakarta, 30 September 2016. Taman Margasatwa Ragunan memiliki banyak unggas, Dan beberapa ungags ada yang menjadi unggulan. Belum lama ini ada beberapa unggas yang bertelur antara yakni burung unta <em>(</em><em>Struthio camelus)</em> , ayam kalkun <em>(Meleagris gallopavo)</em> dan kuau mas.</p>\r\n<figure><img class=\"alignright\" src=\"http://ragunanzoo.jakarta.go.id/wp-content/uploads/2016/09/unta-post-.jpg\" alt=\"unta-post\" /></figure>\r\n<p>Dengan berat telur dan masa eram telur masing-masing yang berbeda, yakni :</p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td width=\"193\"><strong>Nama Binatang</strong></td>\r\n<td width=\"232\"><strong>Berat Telur</strong></td>\r\n<td width=\"213\"><strong>Masa Eram</strong></td>\r\n</tr>\r\n<tr>\r\n<td width=\"193\">Burung Unta</td>\r\n<td width=\"232\">1,6 kg</td>\r\n<td width=\"213\">&plusmn;38 hari</td>\r\n</tr>\r\n<tr>\r\n<td width=\"193\">Ayam Kalkun</td>\r\n<td width=\"232\">2,8 gram</td>\r\n<td width=\"213\">&plusmn;25 hari</td>\r\n</tr>\r\n<tr>\r\n<td width=\"193\">Kuau Mas</td>\r\n<td width=\"232\">2,5 gram</td>\r\n<td width=\"213\">&plusmn;25 hari</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Namun uniknya telur-telur tersebut bukannya dierami oleh induknya melainkan dengan bantuan mesin tetas (<em>incubator</em>). Sejauh ini belum banyak penangkaran yang berani menggunakan mesin incubator untuk menetaskan telur-telur dari induk betina. Hanya beberapa penangkaran saja yang sudah menggunakan mesin <em>incubator</em> seperti Taman Margasatwa Ragunan. &ldquo;Mesin <em>incubator</em> ini dapat menjadi solusi yang efektif untuk mengatasi induk yang sering mengabaikan telurnya didalam sarang atau bahkan memecahkan telurnya&rdquo; jelas Sailan selaku <em>Curator</em> Satwa di Taman Margasatwa Ragunan. Dalam penggunaan mesin <em>incubator</em> ada beberapa proses yang harus diperhatikan, antara lain :</p>\r\n<ul>\r\n<li>masa <em>incubasi</em></li>\r\n<li>cara meletakan telur</li>\r\n<li>jadwal memutar telur</li>\r\n<li>peneropongan telur (<em>candling</em>)</li>\r\n<li>suhu dan kelembaban mesin</li>\r\n</ul>\r\n<p>&ldquo;Kami berharap dengan penggunaan mesin incubator ini menjadi cara mudah untuk menjaga kelestarian satwa langka dari kepunahan&rdquo; imbuh Sailan. Penggunaan mesin <em>incubato</em>r menjadi solusi apabila pengeraman alami tidak berjalan dengan normal. &nbsp;&ldquo;Mengatur suhu untuk penetasan telur yang tepat pada mesin merupakan syarat mutlak untuk mendapatkan keberhasilan dan daya tetas yang tinggi.&nbsp;Suhu ideal yang tepat pada mesin penetas telur unggas biasanya diatur antara 37-40&deg;C dengan cara mengatur&nbsp;<em><a href=\"http://tetasan.com/thermostat-penetas-telur/\">thermoregulator</a>, &ldquo;&nbsp; </em>pungkas Sailan mengakiri pembicaraan<em>.</em></p>\r\n</div>', 'gambar_1492002467.jpg', '2017-04-12 12:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `file`, `deskripsi`, `kategori`, `create_at`) VALUES
(11, '2cb0200d61eb7d107a87eb8886148cc2.jpg', '<p>Ini merupakan salah satu spesies burung unta koleksi kebun binatang ragunan.</p>', 'gambar', '2017-04-12 13:14:46'),
(12, '6b3d1a786998cf050455a371ca090e68.mp4', '<p>Kebun Binatang Ragunan, Wisata Favorit Keluarga</p>', 'video', '2017-04-12 13:18:45'),
(13, '5ffb2aa7a54ab85002834a8b5a2d98dd.jpeg', '<p>Patung di kebun binatang ragunan</p>', 'gambar', '2017-04-12 13:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
