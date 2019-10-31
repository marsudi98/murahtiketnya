-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2019 pada 05.39
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bandara`
--

CREATE TABLE `bandara` (
  `kode_bandara` varchar(10) NOT NULL,
  `nama_bandara` varchar(100) NOT NULL,
  `lokasi_bandara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bandara`
--

INSERT INTO `bandara` (`kode_bandara`, `nama_bandara`, `lokasi_bandara`) VALUES
('ABU', 'Atambua', 'Atambua'),
('AMQ', 'Pattimura', 'Ambon'),
('ARD', 'Mali', 'Pulau Alor'),
('BDJ', 'Syamsuddin Noor', 'Banjarmasin'),
('BDO', 'Husein Sastranegara', 'Bandung'),
('BEJ', 'Kalimarau', 'Berau'),
('BIK', 'Frans Kaisiepo', 'Biak'),
('BJW', 'Soa', 'Bajawa'),
('BKS', 'Fatmawati Soekarno', 'Bengkulu'),
('BMU', 'Muhammad Salahuddin', 'Bima'),
('BPN', 'Sepinggan', 'Balikpapan'),
('BTH', 'Hang Nadim', 'Batam'),
('BTJ', 'Sultan Iskandar Muda', 'Banda Aceh'),
('BTW', 'Bersujud', 'Batu Licin'),
('BUW', 'Baubau', 'Baubau'),
('BWX', 'Blimbingsari', 'Banyuwangi'),
('CGK', 'Soekarno Hatta', 'Jakarta - Cengkareng'),
('CXP', 'Tunggul Wulung', 'Cilacap'),
('DEX', 'Nop Goliot', 'Dekai'),
('DJB', 'Sultan Thaha Syaifuddin', 'Jambi'),
('DJJ', 'Sentani', 'Jayapura'),
('DPS', 'Ngurah Rai', 'Denpasar, Bali'),
('DTB', 'Silangit', 'Silangit'),
('DUM', 'Pinang Kampai', 'Dumai'),
('ENE', 'H. Hasan Aroeboesman', 'Ende'),
('FKQ', 'Fakfak', 'Fakfak'),
('GLX', 'Galela', 'Galela'),
('GNS', 'Gunung Sitoli, Binaka', 'Gunungsitoli'),
('GTO', 'Jalaluddin', 'Gorontalo'),
('HLP', 'Halim Perdanakusuma', 'Jakarta - Halim'),
('JOG', 'Adi Sutjipto', 'Yogyakarta'),
('KAZ', 'Tobelo', 'Tobelo'),
('KBU', 'Kotabaru', 'Kotabaru'),
('KDI', 'Haluoleo', 'Kendari'),
('KJT', 'Kertajati', 'Majalengka'),
('KNG', 'Kaimana, Utarom', 'Kaimana'),
('KNO', 'Kuala Namu', 'Medan (Kuala Namu)'),
('KOE', 'El Tari', 'Kupang'),
('KRC', 'Depati Parbo', 'Kerinci'),
('KTG', 'Rahadi Oesman', 'Ketapang'),
('KWB', 'Dewadaru', 'Karimun Jawa'),
('LAH', 'Labuha, Oesman Sadik', 'Labuha'),
('LBJ', 'Labuanbajo, Komodo', 'Labuan Bajo'),
('LKA', 'Gewayantana', 'Larantuka'),
('LLG', 'Silampari', 'Lubuk Linggau'),
('LLO', 'Legaligo', 'Polopo'),
('LMU', 'Matak', 'Anambas'),
('LOP', 'Lombok', 'Lombok, Mataram'),
('LSW', 'Lhokseumawe, Malikussaleh', 'Lhokseumawe'),
('LUV', 'Tual, Dumatubin', 'Tual'),
('LUW', 'Syukuran Aminuddin Amir ', 'Luwuk'),
('LWE', 'Wonopito', 'Lewoleba'),
('MDC', 'Sam Ratulangi', 'Manado'),
('MEQ', 'Meulaboh, Cut Nyak Dien', 'Meulaboh'),
('MJU', 'Mamuju', 'Mamuju'),
('MKQ', 'Mopah', 'Merauke'),
('MKW', 'Rendani', 'Manokwari'),
('MLG', 'Abdul Rachman Saleh', 'Malang'),
('MLK', 'Melalan', 'Melak'),
('MLN', 'Robert Atty Bessing', 'Malinau'),
('MNA', 'Melonguane', 'Melanguane'),
('MOF', 'Wai Oti', 'Maumere'),
('MOH', 'Morowali', 'Morowali'),
('MPC', 'Mukomuko', 'Mukomuko'),
('MTW', 'Bandar Udara Beringin', 'Muara Teweh'),
('MWS/MRB', 'Muara Bungo', 'Muara Bungo'),
('NAH', 'Naha', 'Tahuna'),
('NBX', 'Nabire', 'Nabire'),
('NNX', 'Nunukan', 'Nunukan'),
('NTX', 'Natuna Ranai', 'NatunaRanai'),
('OTI', 'Morotai', 'Morotai'),
('PDG', 'Minangkabau', 'Padang'),
('PGK', 'Depati Amir', 'Pangkal Pinang'),
('PKN', 'Pangkalan Bun', 'Pangkalan Bun'),
('PKU', 'Sultan Syarif Kasim II', 'Pekanbaru'),
('PKY', 'Tjilik Riwut', 'Palangkaraya'),
('PLM', 'Sultan Mahmud Badaruddin II', 'Palembang'),
('PLW', 'Mutiara', 'Palu'),
('PNK', 'Supadio', 'Pontianak'),
('PSJ', 'Poso, Kasiguncu', 'Poso'),
('PSU', 'Putussibau', 'Putussibau'),
('PUM', 'Sangia Nibandera Pomalaa', 'Pomalaa'),
('PXA', 'Atung Bungsu', 'Pagar Alam'),
('RGT', 'Japura', 'Rengat'),
('RJM', 'Marinda', 'Raja Ampat'),
('RRZ', 'Sibolga', 'Sibolga'),
('RTG', 'Frans Sales Lega', 'Ruteng'),
('RTI', 'Rote', 'Rote'),
('RTU', 'Maratua', 'Maratua'),
('SBG', 'Maimun Saleh', 'Sabang'),
('SMG', 'Lasikin', 'Simeuleu'),
('SMQ', 'H. Asan Sampit', 'Sampit'),
('SNX', 'Lasikin', 'Sinabang'),
('SOC', 'Adisumarmo', 'Solo'),
('SOQ', 'Dominique Edward Osok', 'Sorong'),
('SQG', 'Susilo', 'Sintang'),
('SRG', 'Achmad Yani', 'Semarang'),
('SRI', 'Temindung', 'Samarinda'),
('SUB', 'Juanda', 'Surabaya'),
('SUP', 'Trunojoyo', 'Sumenep'),
('SWQ', 'Sumbawa, Brang Biji', 'Sumbawa'),
('SXK', 'Bandar Udara Olilit', 'Saumlaki'),
('TIM', 'Mozes Kilangin', 'Timika'),
('TJG', 'Warukin', 'Tanjung Warukin'),
('TJQ', 'H.A.S Hanandjoeddin', 'Tanjung Pandan'),
('TJS', 'Tanjung Harapan', 'Tanjung Selor'),
('TKG', 'Radin Inten II', 'Lampung'),
('TLI', 'Toli Toli', 'Toli Toli'),
('TMC', 'Tampolaka', 'Tambolaka'),
('TNJ', 'Raja Haji Fisabilillah', 'Tanjung Pinang'),
('TRK', 'Juwata', 'Tarakan'),
('TSY', 'Wiriadinata', 'Tasikmalaya'),
('TTE', 'Sultan Babullah', 'Ternate'),
('TXE', 'Rembele', 'Rembele/Takengon'),
('UOL', 'Pogugol', 'Buol'),
('UPG', 'Sultan Hasanuddin', 'Ujungpandang, Makassar'),
('WGI', 'Wangi wangi, Matahora', 'Wangi wangi'),
('WGP', 'Waingapu', 'Waingapu'),
('WMX', 'Wamena', 'Wamena'),
('WNI', 'Matahara', 'Wakatobi'),
('WUB', 'Buli', 'Buli'),
('YKR', 'Selayar', 'Selayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `no_rekening`, `nama_bank`, `nama_pemilik`) VALUES
(1, '6900099744', 'BCA', 'PT. AFFAN UTAMA'),
(2, '013901002309302', 'BRI', 'PT. AFFAN UTAMA'),
(5, '1560004974285', 'Mandiri', 'PT. AFFAN UTAMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_passenger_kai`
--

CREATE TABLE `customer_passenger_kai` (
  `id` int(10) NOT NULL,
  `id_cust_order` int(5) NOT NULL,
  `is_adult` int(1) NOT NULL DEFAULT 1,
  `is_infant` int(1) NOT NULL DEFAULT 0,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `personal_id` varchar(100) DEFAULT NULL,
  `wagon_no` varchar(255) DEFAULT NULL,
  `seat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer_passenger_kai`
--

INSERT INTO `customer_passenger_kai` (`id`, `id_cust_order`, `is_adult`, `is_infant`, `name`, `title`, `personal_id`, `wagon_no`, `seat`) VALUES
(1, 1539157762, 1, 0, 'Kukuh Heru', 'MR', '890715270775', 'EKONOMI-1', '2B'),
(2, 1539161231, 1, 0, 'Kukuh Heru', 'MR', '888899999667', 'EKONOMI-2', '8D'),
(3, 1539829459, 1, 0, 'Wahyu pria', 'MR', '321589652158627', 'EKO_AC-1', '4D'),
(4, 1539844053, 1, 0, 'Kukuh Heru Irawan', 'MR', '10071989', 'PREMIUM-4', '12B'),
(5, 1540014255, 1, 0, 'Farid Angga', 'MR', '123442322', 'EKO_AC-1', '15B'),
(6, 1540014983, 1, 0, 'Supriadi', 'MR', '327108546532897', 'EKO_AC-2', '6B'),
(7, 1540214593, 1, 0, 'Farid Angga', 'MR', '1234577', 'EKO_AC-1', '1C'),
(8, 1541237080, 1, 0, 'Farid Angga', 'MR', '3549373823826483', 'PREMIUM-2', '19C'),
(9, 1541241292, 1, 0, 'muchhermen', 'MR', '3127534587670873', 'EKONOMI-1', '9D'),
(10, 1542250978, 1, 0, 'farid angga', 'MR', '12453372736277', 'EKO_AC-1', '1C'),
(11, 1542431219, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'PREMIUM.-1', '8C'),
(12, 1542448520, 1, 0, 'Wahyu pria nugroho', 'MR', '3218569875250006', 'EKO_AC-1', '1D'),
(13, 1542590821, 1, 0, 'muchhermen', 'MR', '3270010308730012', 'PREMIUM-1', '5B'),
(14, 1542592474, 1, 0, 'Wahyu', 'MR', '327156898920006', 'EKO_AC-1', '2C'),
(15, 1542724360, 1, 0, 'Farid Angga', 'MR', '12474847493828', 'BIS-1', '4C'),
(16, 1542894802, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKONOMI-1', '5C'),
(17, 1544685034, 1, 0, 'muchhermen', 'MR', '312701030873190023', 'EKO-1', '4A'),
(18, 1546950798, 1, 0, 'Wahyu pria', 'MR', '32768976540987', 'EKO_AC-1', '10C'),
(19, 1547212026, 1, 0, 'roby nasir', 'MR', '3127564708735431', 'EKO-1', '18D'),
(20, 1547429677, 1, 0, 'muchhermen', 'MR', '31275605308730002', 'EKO-1', '3A'),
(21, 1547615712, 1, 0, 'Farid Angga', 'MR', '1235393738372927', 'EKONOMI-3', '19C'),
(22, 1547622677, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'PREMIUM-1', '1C'),
(23, 1547698296, 1, 0, 'muchhermen', 'MR', '3127010308730001', 'EKO-1', '1B'),
(24, 1547795491, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'PREMIUM-1', '1C'),
(25, 1547809469, 1, 0, 'Arshya', 'MR', '09122004', 'EKO_AC-1', '2A'),
(26, 1548125324, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO-1', '2B'),
(27, 1548125324, 0, 1, 'zafeer', 'MSTR', '-', '-', '-'),
(28, 1548127529, 1, 0, 'Farid Angga', 'MR', '423123', 'EKO-2', '11B'),
(29, 1548164886, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKONOMI-1', '8A'),
(30, 1548164886, 1, 0, 'fatimah azzahra', 'MRS', '32750108910022', 'EKONOMI-1', '7B'),
(31, 1548164886, 1, 0, 'togu harahap', 'MR', '3127346587960002', 'EKONOMI-1', '7C'),
(32, 1548164886, 0, 1, 'zafeer', 'MSTR', '-', '-', '-'),
(33, 1548229724, 1, 0, 'Farid Angga', 'MR', '3507250710890002', 'EKO_AC-4', '5C'),
(34, 1548234397, 1, 0, 'Kukuh Heru Irawan', 'MR', '3513121007890005', 'PREMIUM.-1', '4A'),
(35, 1548234786, 1, 0, 'Ari Agustina', 'MRS', '3507254208910001', 'EKO_AC-1', '4C'),
(36, 1548239118, 1, 0, 'Farid Angga', 'MR', '3850278096182930002', 'PREMIUM-1', '2D'),
(37, 1548336947, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO-2', '7C'),
(38, 1548336947, 1, 0, 'muchhendayani', 'MRS', '3127567698765434', 'EKO-2', '7D'),
(39, 1548336947, 0, 1, 'zafeer', 'MSTR', '-', '-', '-'),
(40, 1548490760, 1, 0, 'muchhendy', 'MR', '3172042603720004', 'EKS-2', '6C'),
(41, 1548490760, 1, 0, 'yulizanierti', 'MRS', '3172041807760004', 'EKS-2', '6D'),
(42, 1548490760, 0, 1, 'zafeer agha', 'MSTR', '-', '-', '-'),
(43, 1548500489, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO-7', '7A'),
(44, 1548672967, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO_AC-3', '6A'),
(45, 1548672967, 1, 0, 'Fatimah Azzahra', 'MS', '3275010507940024', 'EKO_AC-3', '6B'),
(46, 1548672967, 0, 1, 'zaffeer', 'MSTR', '-', '-', '-'),
(47, 1549553711, 1, 0, 'farid Angga', 'MR', '3507250720890001', 'EKONOMI-1', '1B'),
(48, 1549553711, 0, 1, 'harun irsyad', 'MSTR', '-', '-', '-'),
(49, 1549553938, 1, 0, 'Farid Angga', 'MR', '350170710890001', 'BIS-1', '1A'),
(50, 1549553938, 0, 1, 'harun irsyad', 'MSTR', '-', '-', '-'),
(51, 1549554231, 1, 0, 'Farid Angga', 'MR', '350170710890001', 'EKONOMI-1', '1A'),
(52, 1549880823, 1, 0, 'farid Angga', 'MR', '350170710891001', 'EKONOMI-1', '5C'),
(53, 1550399356, 1, 0, 'Fatima Azzahra', 'MS', '3275010308730007', 'EKO-1', '2A'),
(54, 1550529340, 1, 0, 'Fatima Azzahra', 'MS', '3275010308730007', 'EKO-3', '15C'),
(55, 1550537177, 1, 0, 'Fatima Azzahra', 'MS', '32750103870023', 'EKO-3', '7A'),
(56, 1551195405, 1, 0, 'agus ariyawan', 'MR', '3275030808880046', 'EKO-1', '13A'),
(57, 1551195405, 1, 0, 'dwi nur estikaweni', 'MRS', '3275036309900023', 'EKO-1', '13B'),
(58, 1551195405, 1, 0, 'aisyah adwa fadwa ariyani', 'MS', '08072014', 'EKO-1', '13C'),
(59, 1551195405, 0, 1, 'sheza farzana ariyani', 'MISS', '-', '-', '-'),
(60, 1551275037, 1, 0, 'puryanto', 'MR', '3275011005720037', 'PREMIUM-3', '21B'),
(61, 1551277294, 1, 0, 'Fatima Azzahra', 'MS', '3127010308730023', 'EKO-1', '2B'),
(62, 1551287025, 1, 0, 'juriono', 'MRS', '3275012305710020', 'EKONOMI-8', '6D'),
(63, 1551287025, 1, 0, 'supriati', 'MRS', '3275014305760034', 'EKONOMI-8', '6E'),
(64, 1551287025, 1, 0, 'mutiara cahaya putri', 'MS', '11122013', 'EKONOMI-8', '7A'),
(65, 1551287025, 1, 0, 'sumitha maharani dewi', 'MS', '27032002', 'EKONOMI-8', '7B'),
(66, 1551287044, 1, 0, 'roy arbi prasetyo', 'MR', '3275011107930014', 'EKONOMI-8', '21D'),
(67, 1551287044, 1, 0, 'anisa rika bukanah', 'MRS', '3275014510960025', 'EKONOMI-8', '21E'),
(68, 1551287044, 1, 0, 'Lika susanti', 'MRS', '3518122705870001', 'EKONOMI-8', '22A'),
(69, 1551316730, 1, 0, 'puryanto', 'MR', '3275011005720037', 'EKONOMI-3', '11A'),
(70, 1551340187, 1, 0, 'Muchhermen', 'MS', '3275010308730023', 'EKO-1', '3A'),
(71, 1551360342, 1, 0, 'juriono', 'MR', '270302', 'EKONOMI-1', '5E'),
(72, 1552046442, 1, 0, 'Fatima Azzahra', 'MS', '3275010308790023', 'EKONOMI-4', '4C'),
(73, 1552137085, 1, 0, 'DIANA SARI SABDOWATI', 'MRS', '3216055402890001', 'PREMIUM_SS', '2A'),
(74, 1552137085, 1, 0, 'MUHAMMAD KHARIRI AFANDI', 'MR', '3216056801590001', 'PREMIUM_SS', '2B'),
(75, 1552137085, 0, 1, 'FACHRY ZAFFRAN KHOIRY', 'MSTR', '-', '-', '-'),
(76, 1552150873, 1, 0, 'DIANA SARI SABDOWATI', 'MRS', '3216055402890001', 'PREMIUM_SS', '7C'),
(77, 1552150873, 1, 0, 'MUHAMMAD KHARIRI AFANDI', 'MR', '3216056801590001', 'PREMIUM_SS', '7D'),
(78, 1552150873, 0, 1, 'FACHRY ZAFFRAN KHOIRY', 'MSTR', '-', '-', '-'),
(79, 1552151051, 1, 0, 'MURYANTO', 'MR', '3216053012780006', 'EKS-5', '3A'),
(80, 1552151051, 1, 0, 'INDAH KURNIANENGSIH', 'MRS', '3216055809780003', 'EKS-5', '3B'),
(81, 1552151051, 1, 0, 'NURAFNIFATIMAH AZZAHRA', 'MRS', '3216055605030003', 'EKS-5', '3C'),
(82, 1552151051, 1, 0, 'MUHAMMAD YASSIN ABDILLAH', 'MR', '3216051802080001', 'EKS-5', '3D'),
(83, 1552151607, 1, 0, 'PATONAH', 'MRS', '3216010503880005', 'PREMIUM_SS', '19B'),
(84, 1552233669, 1, 0, 'TULUS HARYANTO', 'MR', '3275011604860038', 'EKS-1', '2A'),
(85, 1552233669, 1, 0, 'SUTRIN INDAYANI', 'MRS', '3275016501800017', 'EKS-1', '2B'),
(86, 1552233669, 1, 0, 'AL GHAZALI', 'MR', '24082016', 'EKS-1', '2C'),
(87, 1552550345, 1, 0, 'Agus Setiawan', 'MR', '3172042812800004', 'EKONOMI-4', '2A'),
(88, 1552550345, 1, 0, 'Ayu Aulia Asyhari', 'MS', '3172047005030005', 'EKONOMI-4', '2B'),
(89, 1552796973, 1, 0, 'puryanto', 'MR', '3275011006720037', 'EKO-1', '2A'),
(90, 1552799821, 1, 0, 'Farid Angga', 'MR', '3507250710890002', 'EKONOMI-1', '1B'),
(91, 1552800428, 1, 0, 'Farid Angga', 'MR', '3507250710890002', 'BIS-1', '4B'),
(92, 1552800428, 1, 0, 'Farid Angga', 'MR', '3507250710890002', 'BIS-1', '4B'),
(93, 1552817152, 1, 0, 'MURYANTO', 'MR', '3216053012780006', 'EKS-6', '5C'),
(94, 1553242047, 1, 0, 'Achmad Suroio', 'MR', '3573050511690001', 'EKO-1', '11D'),
(95, 1561622038, 1, 0, 'Farid Angga', 'MR', '123456788', 'EKS-3', '2B'),
(96, 1561981435, 1, 0, 'bayu', 'MR', '1727271781', 'PREMIUM_SS', '3B'),
(97, 1562039822, 1, 0, 'Farid Angga', 'MR', '350307108900002', 'PREMIUM_SS', '1B'),
(98, 1562041655, 1, 0, 'muchhermen', 'MR', '3127010308730023', 'EKONOMI-1', '10C'),
(99, 1562133925, 1, 0, 'Farid Angga', 'MR', '3503201708900002', 'EKO-1', '19B'),
(100, 1562158380, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKONOMI-2', '4C'),
(101, 1562206475, 1, 0, 'muchhermen', 'MR', '3127010308730023', 'EKONOMI-1', '10D'),
(102, 1562869249, 1, 0, 'mulyadi', 'MRS', '3174011205820007', 'EKONOMI-6', '17E'),
(103, 1563284032, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKONOMI-2', '7D'),
(104, 1563362779, 1, 0, 'Farid Angga', 'MR', '35072050710890002', 'EKS-1', '6C'),
(105, 1563364431, 1, 0, 'Agus Setiawan', 'MR', '3172042812800004', 'EKONOMI-6', '5A'),
(106, 1563364431, 1, 0, 'Assalwa Gusnia Kurniasih', 'MS', '3172045803070010', 'EKONOMI-6', '5B'),
(107, 1563507370, 1, 0, 'sunarko', 'MR', '3301022205780002', 'EKONOMI-4', '1A'),
(108, 1563543507, 1, 0, 'sunarko', 'MR', '3301022205780002', 'EKS-1', '13B'),
(109, 1563591115, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKONOMI-2', '6C'),
(110, 1563628247, 1, 0, 'Farid Angga', 'MR', '3507250710890002', 'EKS-1', '7B'),
(111, 1563974120, 1, 0, 'supama herlambang', 'MR', '3404070303650006', 'EKS-9', '3C'),
(112, 1564470866, 1, 0, 'Dedi Ihsan', 'MR', '3245010807710021', 'PREMIUM.-3', '2D'),
(113, 1564470866, 1, 0, 'hendayani', 'MRS', '3245041506750023', 'PREMIUM.-3', '2C'),
(114, 1564470866, 1, 0, 'syifa ihsan', 'MS', '03082011', 'PREMIUM.-3', '2B'),
(115, 1564470866, 1, 0, 'abi ihsan', 'MR', '08092013', 'PREMIUM.-3', '2A'),
(116, 1564470866, 0, 1, 'Moh Zafeer', 'MSTR', '-', '-', '-'),
(117, 1564475899, 1, 0, 'Farid Angga Pribadi', 'MR', '350720710890002', 'PREMIUM_SS', '13B'),
(118, 1564480718, 1, 0, 'dedi ihsan', 'MR', '3240010308720022', 'EKONOMI-2', '5B'),
(119, 1566131174, 1, 0, 'sunarko', 'MR', '780514232196', 'EKS-2', '13B'),
(120, 1566276554, 1, 0, 'melania ena susiani', 'MRS', '3216067012690031', 'EKO-4', '4C'),
(121, 1566530592, 1, 0, 'dedi ihsan', 'MR', '3256765489760024', 'EKO-5', '20C'),
(122, 1566534467, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO-2', '3B'),
(123, 1566829194, 1, 0, 'Farid Angga', 'MR', '350720710890001', 'PREMIUM_SS-1', '5A'),
(124, 1567157225, 1, 0, 'nanda salwina', 'MS', '3175044311001001', 'BIS-1', '8A'),
(125, 1567649414, 1, 0, 'Puupu', 'MRS', '3514135805980001', 'EKO-1', '14B'),
(126, 1567670476, 1, 0, 'muchhermen', 'MR', '3275010308730023', 'EKO-4', '14B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_booking_kai`
--

CREATE TABLE `data_booking_kai` (
  `id` int(10) NOT NULL,
  `id_cust_order` varchar(10) NOT NULL,
  `kode_booking` varchar(20) NOT NULL,
  `retrieveKey` varchar(20) NOT NULL,
  `payment_time` timestamp NULL DEFAULT NULL,
  `total_adult` varchar(20) NOT NULL,
  `total_infant` varchar(20) DEFAULT NULL,
  `status_bayar` int(1) NOT NULL DEFAULT 0 COMMENT '0:belum, 1:sudah, 2:tiket, 3:menunggu konfirmasi',
  `bank_pengirim` varchar(10) DEFAULT NULL,
  `status_pengiriman_tiket` int(1) NOT NULL DEFAULT 0 COMMENT '0:belum,1:terkirim',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `confirm_tiket_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stasiun_keberangkatan` varchar(100) NOT NULL,
  `stasiun_kedatangan` varchar(100) DEFAULT NULL,
  `stasiun_keberangkatan_nama` varchar(100) DEFAULT NULL,
  `stasiun_kedatangan_nama` varchar(100) DEFAULT NULL,
  `kota_keberangkatan` varchar(100) DEFAULT NULL,
  `kota_kedatangan` varchar(100) DEFAULT NULL,
  `waktu_keberangkatan` timestamp NULL DEFAULT NULL,
  `waktu_kedatangan` timestamp NULL DEFAULT NULL,
  `convenience_fee` int(20) DEFAULT NULL,
  `discount_channel` int(20) DEFAULT NULL,
  `total_fare` int(20) DEFAULT NULL,
  `ntsa` int(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `timelimit` varchar(50) NOT NULL,
  `kereta` varchar(100) DEFAULT NULL,
  `view` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_booking_kai`
--

INSERT INTO `data_booking_kai` (`id`, `id_cust_order`, `kode_booking`, `retrieveKey`, `payment_time`, `total_adult`, `total_infant`, `status_bayar`, `bank_pengirim`, `status_pengiriman_tiket`, `created_at`, `confirm_tiket_at`, `deleted_at`, `stasiun_keberangkatan`, `stasiun_kedatangan`, `stasiun_keberangkatan_nama`, `stasiun_kedatangan_nama`, `kota_keberangkatan`, `kota_kedatangan`, `waktu_keberangkatan`, `waktu_kedatangan`, `convenience_fee`, `discount_channel`, `total_fare`, `ntsa`, `email`, `phoneNo`, `timelimit`, `kereta`, `view`) VALUES
(1, '1539157762', '', '162786', NULL, '1', '0', 0, '', 0, '2018-10-10 07:49:22', NULL, '2018-11-04 07:10:49', 'PSE', 'SBI', 'PASAR SENEN', 'SURABAYA PASAR TURI', 'Jakarta', 'Surabaya', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7500, -7500, 165000, 158000, 'kukuh.heru.irawan@gmail.com', '081231394658', '10-Oct-2018 15:38', 'KERTAJAYA 178', 0),
(2, '1539161231', '', '162814', NULL, '1', '0', 0, '', 0, '2018-10-10 08:47:11', NULL, '2019-01-08 03:45:59', 'PSE', 'SBI', 'PASAR SENEN', 'SURABAYA PASAR TURI', 'Jakarta', 'Surabaya', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7500, -7500, 175000, 168000, 'kukuh.heru.irawan@gmail.com', '081231394658', '10-Oct-2018 16:36', 'KERTAJAYA 178', 0),
(3, '1539829459', '', '164772', NULL, '1', '0', 0, '', 0, '2018-10-18 02:24:19', NULL, '2019-01-08 03:45:57', 'GMR', 'CN', 'GAMBIR', 'CIREBON', 'Jakarta', 'Cirebon', '2018-10-22 15:20:00', '2018-10-22 18:27:00', 7500, -7500, 80000, 73000, 'Affanutama@yahoo.co.id', '081283900091', '2018-10-18 10:02:00', 'CIREBON EKSPRES 70', 0),
(4, '1539844053', '28402', '164866', NULL, '1', '0', 0, '', 0, '2018-10-18 06:27:33', NULL, '2019-01-08 03:45:56', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2018-10-19 00:50:00', '2018-10-19 04:07:00', 7500, -7500, 99941, 93000, 'kukuh.heru.irawan@gmail.com', '081231394658', '2018-10-18 14:07:00', 'ARGO PARAHYANGAN PREMIUM 7058', 0),
(5, '1540014255', '28619', '165401', NULL, '1', '0', 0, '', 0, '2018-10-20 05:44:15', NULL, '2019-01-08 03:45:56', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2018-10-20 22:05:00', '2018-10-21 01:39:00', 7500, -7500, 99998, 93000, 'anggatpl07@gmail.com', '081357046700', '2018-10-20 13:23:00', 'ARGO PARAHYANGAN 20', 0),
(6, '1540014983', '2861a', '165402', NULL, '1', '0', 0, '', 0, '2018-10-20 05:56:23', NULL, '2019-01-08 03:45:55', 'GMR', 'CN', 'GAMBIR', 'CIREBON', 'Jakarta', 'Cirebon', '2018-10-22 04:00:00', '2018-10-22 07:04:00', 7500, -7500, 99800, 93000, 'Affanutama@yahoo.co.id', '081283900091', '2018-10-20 13:34:00', 'TEGAL BAHARI 64', 0),
(7, '1540214593', '28887', '166023', '2018-11-16 04:35:20', '1', '0', 1, '', 0, '2018-10-22 13:23:13', NULL, '2019-01-08 03:45:54', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2018-10-24 22:05:00', '2018-10-25 01:39:00', 7500, -7500, 99933, 93000, 'anggatpl07@gmail.com', '081357046700', '2018-10-22 21:03:00', 'ARGO PARAHYANGAN 20', 0),
(8, '1541237080', '29723', '169763', NULL, '1', '0', 0, '', 0, '2018-11-03 09:24:40', NULL, '2019-01-08 03:45:52', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2018-11-04 00:50:00', '2018-11-04 04:07:00', 7500, -7500, 99981, 93000, 'anggatpl07@gmail.com', '081357046700', '2018-11-03 17:04:00', 'ARGO PARAHYANGAN PREMIUM 7058', 0),
(9, '1541241292', '29744', '169796', NULL, '1', '0', 0, '', 0, '2018-11-03 10:34:52', NULL, '2019-01-08 03:45:51', 'PSE', 'TG', 'PASAR SENEN', 'TEGAL', 'Jakarta', 'Tegal', '2018-11-12 00:35:00', '2018-11-12 05:50:00', 7500, 0, 56486, 49500, 'muchhermen@yahoo.com', '081283900091', '2018-11-03 18:14:00', 'TEGAL EKSPRES 210', 0),
(10, '1542250978', '2a9eb', '174571', NULL, '1', '0', 0, '', 0, '2018-11-15 03:02:58', NULL, '2019-01-08 03:45:50', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2018-11-21 22:05:00', '2018-11-22 01:39:00', 7500, -7500, 99946, 93000, 'anggatpl07@gmail.com', '081357046700', '2018-11-15 10:42:00', 'ARGO PARAHYANGAN 20', 0),
(11, '1542431219', '2ad3f', '175423', NULL, '1', '0', 0, '', 0, '2018-11-17 05:06:59', NULL, '2019-01-08 03:45:50', 'PSE', 'SLO', 'PASAR SENEN', 'SOLOBALAPAN', 'Jakarta', 'Solo', '2019-01-14 15:00:00', '2019-01-14 23:55:00', 7500, -7500, 239981, 233000, 'muchhermen@yahoo.com', '081281288879', '2018-11-17 12:46:00', 'SENJA UTAMA SOLO 116', 0),
(12, '1542448520', '2adae', '175534', NULL, '1', '0', 0, '', 0, '2018-11-17 09:55:20', NULL, '2019-01-08 03:45:49', 'BKS', 'CN', 'BEKASI', 'CIREBON', 'Bekasi', 'Cirebon', '2018-11-21 04:32:00', '2018-11-21 07:04:00', 7500, -7500, 99958, 93000, 'muchhermen@yahoo.com', '081283900091', '2018-11-17 17:35:00', 'TEGAL BAHARI 64', 0),
(13, '1542590821', '2af04', '175876', NULL, '1', '0', 0, '', 0, '2018-11-19 01:27:01', NULL, '2019-01-08 03:45:47', 'PSE', 'SLO', 'PASAR SENEN', 'SOLOBALAPAN', 'Jakarta', 'Solo', '2019-01-14 06:20:00', '2019-01-14 16:00:00', 7500, -7500, 269996, 263000, 'muchhermen@yahoo.com', '081281288879', '2018-11-19 09:06:00', 'JAYAKARTA PREMIUM 7064', 0),
(14, '1542592474', '2af13', '175891', NULL, '1', '0', 0, '', 0, '2018-11-19 01:54:34', NULL, '2019-01-08 03:45:46', 'BKS', 'CN', 'BEKASI', 'CIREBON', 'Bekasi', 'Cirebon', '2018-11-21 04:32:00', '2018-11-21 07:04:00', 7500, -7500, 99904, 93000, 'affanutama@yahoo.co.id', '081283900091', '2018-11-19 09:34:00', 'TEGAL BAHARI 64', 0),
(15, '1542724360', '2b193', '176531', NULL, '1', '0', 0, '', 0, '2018-11-20 14:32:40', NULL, '2019-01-08 03:45:44', 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2018-11-29 09:30:00', '2018-11-30 01:33:00', 7500, -7500, 339946, 333000, 'anggatpl07@gmail.com', '081357046700', '2018-11-20 22:12:00', 'MUTIARA SELATAN 111', 0),
(16, '1542894802', '2b4b1', '177329', NULL, '1', '0', 0, '', 0, '2018-11-22 13:53:22', NULL, '2019-01-08 03:45:14', 'PSE', 'SMC', 'PASAR SENEN', 'SEMARANGPONCOL', 'Jakarta', 'Semarang', '2018-11-27 16:00:00', '2018-11-27 23:15:00', 7500, -7500, 139904, 133000, 'muchhermen@yahoo.com', '081281288879', '2018-11-22 21:32:00', 'TAWANG JAYA 202', 0),
(17, '1544685034', '2d440', '185408', NULL, '1', '0', 0, '', 0, '2018-12-13 07:10:34', NULL, '2019-01-08 03:45:30', 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-02-04 06:00:00', '2019-02-04 19:42:00', 7500, -7500, 229936, 223000, 'muchhermen@yahoo.com', '081281288879', '2018-12-13 14:49:00', 'JAYABAYA 144', 0),
(18, '1546950798', '2ec6b', '191595', NULL, '1', '0', 0, '', 0, '2019-01-08 12:33:18', NULL, '2019-03-16 21:46:21', 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-09 03:30:00', '2019-01-09 06:39:00', 7500, -7500, 99940, 93000, 'affanutama@yahoo.co.id', '085711155684', '2019-01-08 20:13:00', 'ARGO PARAHYANGAN 24', 1),
(19, '1547212026', '2f037', '192567', NULL, '1', '0', 0, '', 0, '2019-01-11 13:07:06', NULL, '2019-03-16 21:46:46', 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-02-10 23:45:00', '2019-02-11 07:53:00', 7500, -7500, 179912, 173000, 'robynasir@gmail.com', '081510012364', '2019-01-11 20:46:00', 'GAJAHWONG 154', 1),
(20, '1547429677', '2f26b', '193131', NULL, '1', '0', 0, '', 0, '2019-01-14 01:34:37', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-02-10 23:45:00', '2019-02-11 07:53:00', 7500, -7500, 239956, 233000, 'muchhermen@yahoo.com', '081281288879', '2019-01-14 09:14:00', 'GAJAHWONG 154', 1),
(21, '1547615712', '2f56a', '193898', NULL, '1', '0', 0, '', 0, '2019-01-16 05:15:12', NULL, NULL, 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-01-24 08:15:00', '2019-01-25 00:51:00', 7500, -7500, 108919, 102000, 'anggatpl07@gmail.com', '081357046700', '2019-01-16 12:54:00', 'MATARMAJA 172', 1),
(22, '1547622677', '2f597', '193943', NULL, '1', '0', 0, '', 0, '2019-01-16 07:11:17', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-02-11 06:20:00', '2019-02-11 14:54:00', 7500, -7500, 219982, 213000, 'muchhermen@yahoo.com', '081281288879', '2019-01-16 14:50:00', 'JAYAKARTA PREMIUM 7064', 1),
(23, '1547698296', '2f67a', '194170', NULL, '1', '0', 0, '', 0, '2019-01-17 04:11:36', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-01-27 23:45:00', '2019-01-28 07:53:00', 7500, -7500, 239993, 233000, 'muchhermen@yahoo.com', '081281288879', '2019-01-17 11:51:00', 'GAJAHWONG 154', 1),
(24, '1547795491', '2f81a', '194586', NULL, '1', '0', 0, '', 0, '2019-01-18 07:11:31', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-02-12 06:20:00', '2019-02-12 14:54:00', 7500, -7500, 219968, 213000, 'muchhermen@yahoo.com', '081281288879', '2019-01-18 14:50:00', 'JAYAKARTA PREMIUM 7064', 1),
(25, '1547809469', '2f872', '194674', NULL, '1', '0', 3, '', 0, '2019-01-18 11:04:29', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-29 22:05:00', '2019-01-30 01:39:00', 7500, -7500, 109904, 103000, 'kukuh.heru.irawan@gmail.com', '085646412251', '2019-01-18 18:44:00', 'ARGO PARAHYANGAN 20', 1),
(26, '1548125324', '2fb17', '195351', NULL, '1', '1', 3, '', 0, '2019-01-22 02:48:44', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-02-17 23:45:00', '2019-02-18 07:53:00', 7500, -7500, 239942, 233000, 'muchhermen@yahoo.com', '081281288879', '2019-01-22 10:28:00', 'GAJAHWONG 154', 1),
(27, '1548127529', '45678', '195369', '2019-01-21 20:41:58', '1', '0', 1, '', 0, '2019-01-22 03:25:29', NULL, NULL, 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-01-24 11:15:00', '2019-01-25 03:05:00', 7500, -7500, 244972, 238000, 'anggatpl07@gmail.com', '081357046700', '2019-01-22 11:05:00', 'MAJAPAHIT 142', 1),
(28, '1548164886', '2fc3e', '195646', '2019-01-22 06:55:45', '3', '1', 2, '', 1, '2019-01-22 13:48:06', '2019-01-22 06:56:18', NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-02-18 03:15:00', '2019-02-18 11:06:00', 7500, -7500, 293985, 287000, 'muchhermen@yahoo.com', '081281288879', '2019-01-22 21:21:00', 'GAYA BARU MALAM SELATAN 174', 1),
(29, '1548229724', '2fd32', '195890', NULL, '1', '0', 0, '', 0, '2019-01-23 07:48:44', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-23 22:05:00', '2019-01-24 01:39:00', 7500, -7500, 109959, 103000, 'anggatpl07@gmail.com', '081357046700', '2019-01-23 15:28:00', 'ARGO PARAHYANGAN 20', 1),
(30, '1548234397', '2fd4e', '195918', NULL, '1', '0', 0, '', 0, '2019-01-23 09:06:37', NULL, NULL, 'PSE', 'BD', 'PASAR SENEN', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-27 02:40:00', '2019-01-27 06:15:00', 7500, -7500, 109977, 103000, 'ari.agustinaa@gmail.com', '085755617475', '2019-01-23 16:46:00', 'ARGO PARAHYANGAN TAMBAHAN 7062', 1),
(31, '1548234786', '2fd50', '195920', NULL, '1', '0', 0, '', 0, '2019-01-23 09:13:06', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-02-02 13:00:00', '2019-02-02 16:14:00', 7500, -7500, 109995, 103000, 'ari.agustinaa@gmail.com', '085755617475', '2019-01-23 16:52:00', 'ARGO PARAHYANGAN 30', 1),
(32, '1548239118', '2fd64', '195940', NULL, '1', '0', 0, '', 0, '2019-01-23 10:25:18', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-28 00:50:00', '2019-01-28 04:07:00', 7500, 0, 117473, 110500, 'anggatpl07@gmail.com', '081357046700', '2019-01-23 18:05:00', 'PANGANDARAN 12410', 1),
(33, '1548336947', '2feb5', '196277', '2019-01-24 06:40:11', '2', '1', 2, '', 1, '2019-01-24 13:35:47', '2019-01-24 06:40:55', NULL, 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-03-12 06:00:00', '2019-03-12 19:42:00', 7500, -7500, 489905, 483000, 'muchhermen@yahoo.com', '081281288879', '2019-01-24 21:13:00', 'JAYABAYA 144', 1),
(34, '1548490760', 'SAND02', '196664', '2019-01-26 01:20:03', '2', '1', 2, '', 1, '2019-01-26 08:19:20', '2019-01-26 01:21:00', NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-31 22:05:00', '2019-02-01 01:39:00', 7500, -7500, 299985, 293000, 'much_hendy@yahoo.com', '08128782861', '2019-01-26 15:59:00', 'ARGO PARAHYANGAN 20', 1),
(35, '1548500489', 'AFFA02', '196684', '2019-01-26 04:03:03', '1', '0', 2, '', 1, '2019-01-26 11:01:29', '2019-01-26 04:09:14', NULL, 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-03-12 06:00:00', '2019-03-12 19:42:00', 7500, -7500, 244901, 238000, 'muchhermen@yahoo.com', '081281288879', '2019-01-26 18:40:00', 'JAYABAYA 144', 1),
(36, '1548672967', 'PRAB02', '197077', '2019-01-28 03:57:29', '2', '1', 2, '', 1, '2019-01-28 10:56:07', '2019-01-28 03:58:10', NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-01-28 22:05:00', '2019-01-29 01:39:00', 7500, -7500, 219935, 213000, 'muchhermen@yahoo.com', '081281288879', '2019-01-28 18:34:00', 'ARGO PARAHYANGAN 20', 1),
(37, '1549553711', '30bb8', '199608', NULL, '1', '1', 0, '', 0, '2019-02-07 15:35:11', NULL, '2019-03-16 21:46:33', 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2019-02-13 09:00:00', '2019-02-14 00:48:00', 7500, 0, 267496, 260500, 'anggatpl07@gmail.com', '081357046700', '2019-02-07 23:14:00', 'MALABAR 91', 1),
(38, '1549553938', '30bb9', '199609', NULL, '1', '1', 0, '', 0, '2019-02-07 15:38:58', NULL, '2019-03-16 21:46:27', 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2019-03-21 09:00:00', '2019-03-22 00:48:00', 7500, 0, 332436, 325500, 'anggatpl07@gmail.com', '081357046700', '2019-02-07 23:18:00', 'MALABAR 91', 1),
(39, '1549554231', '30bba', '199610', NULL, '1', '0', 0, '', 0, '2019-02-07 15:43:51', NULL, NULL, 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2019-03-13 09:00:00', '2019-03-14 00:48:00', 7500, 0, 257449, 250500, 'anggatpl07@gmail.com', '081357046700', '2019-02-07 23:23:00', 'MALABAR 91', 1),
(40, '1549880823', '30eaf', '200367', NULL, '1', '0', 0, '', 0, '2019-02-11 10:27:03', NULL, NULL, 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2019-02-14 09:00:00', '2019-02-15 00:48:00', 7500, 0, 267411, 260500, 'anggatpl07@gmail.com', '081357046700', '2019-02-11 18:06:00', 'MALABAR 91', 1),
(41, '1550399356', '31555', '202069', '2019-02-17 03:30:18', '1', '0', 2, '', 1, '2019-02-17 10:29:16', '2019-02-17 03:30:35', NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-03-17 23:45:00', '2019-03-18 07:53:00', 7500, 0, 247481, 240500, 'affanutama@yahoo.co.id', '081283900091', '2019-02-17 18:08:00', 'GAJAHWONG 154', 1),
(42, '1550529340', '3165b', '202331', NULL, '1', '0', 0, '', 0, '2019-02-18 22:35:40', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-03-17 23:45:00', '2019-03-18 07:53:00', 7500, 0, 247457, 240500, 'affanutama@yahoo.co.id', '081283900091', '2019-02-19 06:14:00', 'GAJAHWONG 154', 1),
(43, '1550537177', '31663', '202339', NULL, '1', '0', 0, '', 0, '2019-02-19 00:46:17', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-03-17 23:45:00', '2019-03-18 07:53:00', 7500, 0, 247404, 240500, 'affanutama@yahoo.co.id', '081283900091', '2019-02-19 08:25:00', 'GAJAHWONG 154', 1),
(44, '1551195405', '3205d', '204893', NULL, '3', '1', 0, '', 0, '2019-02-26 15:36:45', NULL, NULL, 'BKS', 'KYA', 'BEKASI', 'KROYA', 'Bekasi', 'Cilacap', '2019-05-26 05:52:00', '2019-05-26 11:45:00', 7500, 0, 847479, 840500, 'ariyawan_a@yahoo.com', '08585406243', '2019-02-26 23:16:00', 'SINGASARI 156', 1),
(45, '1551275037', 'KQ9ILS', '205165', '2019-02-27 07:19:20', '1', '0', 1, '', 0, '2019-02-27 13:43:57', NULL, NULL, 'PSE', 'WK', 'PASAR SENEN', 'WALIKUKUN', 'Jakarta', 'Ngawi', '2019-03-06 06:20:00', '2019-03-06 17:01:00', 7500, 0, 357496, 350500, 'puryanto03131@gmail.com', '08121348355', '2019-02-27 21:22:00', 'JAYAKARTA PREMIUM 7064', 1),
(46, '1551277294', '32175', '205173', '2019-02-27 07:22:43', '1', '0', 2, '', 1, '2019-02-27 14:21:34', '2019-02-27 07:22:57', NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-03-03 23:45:00', '2019-03-04 07:53:00', 7500, 0, 247496, 240500, 'affanutama@yahoo.co.id', '081283900091', '2019-02-27 22:01:00', 'GAJAHWONG 154', 1),
(47, '1551287025', '321a7', '205223', NULL, '4', '0', 3, '', 0, '2019-02-27 17:03:45', NULL, NULL, 'PSE', 'NJ', 'PASAR SENEN', 'NGANJUK', 'Jakarta', 'Nganjuk', '2019-05-29 08:15:00', '2019-05-29 20:36:00', 7500, 0, 443478, 436500, 'odoyoke79@gmail.com', '082210530019', '2019-02-28 00:43:00', 'MATARMAJA 172', 1),
(48, '1551287044', '321ad', '205229', NULL, '3', '0', 3, '', 0, '2019-02-27 17:04:04', NULL, NULL, 'PSE', 'NJ', 'PASAR SENEN', 'NGANJUK', 'Jakarta', 'Nganjuk', '2019-05-29 08:15:00', '2019-05-29 20:36:00', 7500, 0, 334488, 327500, 'anisarika04@gmail.com', '085215733072', '2019-02-28 00:43:00', 'MATARMAJA 172', 1),
(49, '1551316730', '32235', '205365', NULL, '1', '0', 3, '', 0, '2019-02-28 01:18:50', NULL, '2019-03-16 21:46:02', 'PSE', 'WK', 'PASAR SENEN', 'WALIKUKUN', 'Jakarta', 'Ngawi', '2019-03-13 10:00:00', '2019-03-13 20:56:00', 7500, 0, 87471, 80500, 'puryanto03131@gmail.com', '08121348355', '2019-02-28 08:57:00', 'BRANTAS 176', 1),
(50, '1551340187', '322bf', '205503', NULL, '1', '0', 0, '', 0, '2019-02-28 07:49:47', NULL, NULL, 'PSE', 'YK', 'PASAR SENEN', 'YOGYAKARTA', 'Jakarta', 'Yogyakarta', '2019-03-12 23:45:00', '2019-03-13 07:53:00', 7500, 0, 232442, 225500, 'affanutama@yahoo.co.id', '081283900091', '2019-02-28 15:29:00', 'GAJAHWONG 154', 1),
(51, '1551360342', '32333', '205619', NULL, '1', '0', 0, '', 0, '2019-02-28 13:25:42', NULL, NULL, 'PSE', 'NJ', 'PASAR SENEN', 'NGANJUK', 'Jakarta', 'Nganjuk', '2019-04-10 10:00:00', '2019-04-10 22:35:00', 7500, 0, 91498, 84500, 'jurionosupriati34517@gmail.com', '081381554426', '2019-02-28 21:04:00', 'BRANTAS 176', 1),
(52, '1552046442', '32c6b', '207979', NULL, '1', '0', 0, '', 0, '2019-03-08 12:00:42', NULL, NULL, 'PSE', 'LPN', 'PASAR SENEN', 'LEMPUYANGAN', 'Jakarta', 'Yogyakarta', '2019-03-19 04:20:00', '2019-03-19 12:42:00', 7500, 0, 81489, 74500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-08 19:40:00', 'BENGAWAN 184', 1),
(53, '1552137085', '32d6f', '208239', NULL, '2', '1', 0, '', 0, '2019-03-09 13:11:25', NULL, NULL, 'BMA', 'PSE', 'BUMIAYU', 'PASAR SENEN', 'Brebes', 'Jakarta', '2019-03-25 14:55:00', '2019-03-25 19:17:00', 7500, 0, 407418, 400500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-09 20:51:00', 'SAWUNGGALIH 123', 1),
(54, '1552150873', '32d91', '208273', NULL, '2', '1', 0, '', 0, '2019-03-09 17:01:13', NULL, NULL, 'BMA', 'PSE', 'BUMIAYU', 'PASAR SENEN', 'Brebes', 'Jakarta', '2019-06-08 14:55:00', '2019-06-08 19:17:00', 7500, 0, 647441, 640500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-10 00:41:00', 'SAWUNGGALIH 123', 1),
(55, '1552151051', '32dac', '208300', NULL, '4', '0', 0, '', 0, '2019-03-09 17:04:11', NULL, NULL, 'TA', 'GMR', 'TULUNGAGUNG', 'GAMBIR', 'Tulungagung', 'Jakarta', '2019-06-08 08:46:00', '2019-06-08 21:27:00', 7500, 0, 3047492, 3040500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-10 00:44:00', 'GAJAYANA 41', 1),
(56, '1552151607', '32db1', '208305', NULL, '1', '0', 0, '', 0, '2019-03-09 17:13:27', NULL, NULL, 'KTA', 'PSE', 'KUTOARJO', 'PASAR SENEN', 'Kutoarjo', 'Jakarta', '2019-06-08 10:00:00', '2019-06-08 17:56:00', 7500, 0, 327499, 320500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-10 00:53:00', 'KUTOJAYA UTARA 191', 1),
(57, '1552233669', '32e98', '208536', NULL, '3', '0', 0, '', 0, '2019-03-10 16:01:09', NULL, NULL, 'PWT', 'GMR', 'PURWOKERTO', 'GAMBIR', 'Purwokerto', 'Jakarta', '2019-05-21 15:40:00', '2019-05-21 20:45:00', 7500, 0, 847423, 840500, 'affanutama@yahoo.co.id', '081283900091', '2019-03-10 23:41:00', 'TAKSAKA 53', 1),
(58, '1552550345', '5W7KQB', '209291', '2019-03-14 01:20:32', '2', '0', 2, '', 1, '2019-03-14 07:59:05', '2019-03-14 01:33:28', NULL, 'PSE', 'PK', 'PASAR SENEN', 'PEKALONGAN', 'Jakarta', 'Pekalongan', '2019-03-16 16:00:00', '2019-03-16 21:45:00', 7500, 0, 287401, 280500, 'agus.setiawan7007@gmail.com', '08159886798', '2019-03-14 15:37:00', 'TAWANG JAYA 202', 1),
(59, '1552800428', '3347b', '210043', NULL, '1', '0', 0, NULL, 0, '2019-03-17 05:30:31', NULL, NULL, 'ML', 'BD', 'MALANG', 'BANDUNG', 'Malang', 'Bandung', '2019-03-20 09:30:00', '2019-03-21 01:33:00', 7500, 0, 332459, 325500, 'anggatpl07@gmail.com', '081357046700', '2019-03-17 13:07:00', 'MUTIARA SELATAN 111', 1),
(60, '1552817152', 'PRAB02', '210083', '2019-03-17 03:07:44', '1', '0', 2, NULL, 1, '2019-03-17 10:05:52', '2019-03-17 03:09:54', NULL, 'PWT', 'GMR', 'PURWOKERTO', 'GAMBIR', 'Purwokerto', 'Jakarta', '2019-04-09 03:43:00', '2019-04-09 08:42:00', 7500, 0, 262425, 255500, 'affanutama@yahoo.co.id', '081281288879', '2019-03-17 17:45:00', 'TAKSAKA 51', 1),
(61, '1553242047', 'GCE4GZ', '211783', '2019-03-22 01:51:41', '1', '0', 2, NULL, 1, '2019-03-22 08:07:27', '2019-03-22 01:52:31', NULL, 'PSE', 'ML', 'PASAR SENEN', 'MALANG', 'Jakarta', 'Malang', '2019-04-16 06:00:00', '2019-04-16 19:42:00', 7500, 0, 357497, 350500, 'Surojoahmad@gmail.com', '083814701081', '2019-03-22 15:46:00', 'JAYABAYA 144', 1),
(62, '1561622038', '3f3e3', '259043', NULL, '1', '0', 0, NULL, 0, '2019-06-27 07:53:58', NULL, NULL, 'GMR', 'CN', 'GAMBIR', 'CIREBON', 'Jakarta', 'Cirebon', '2019-06-28 02:00:00', '2019-06-28 04:56:00', 7500, 0, 207422, 200500, 'anggatpl07@gmail.com', '081357046700', '2019-06-27 15:33:00', 'ARGO JATI 16', 1),
(63, '1561789316', '3f76c', '259948', NULL, '1', '0', 0, NULL, 0, '2019-06-29 06:21:56', NULL, NULL, 'BKS', 'BD', 'BEKASI', 'BANDUNG', 'Bekasi', 'Bandung', '2019-07-08 22:58:00', '2019-07-09 01:52:00', 7500, 0, 117445, 110500, 'much_hendy@yahoo.com', '081382977672', '2019-06-29 14:00:00', 'ARGO PARAHYANGAN 20', 1),
(64, '1561981435', '3fb5d', '260957', NULL, '1', '0', 0, NULL, 0, '2019-07-01 11:43:55', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-07-02 13:00:00', '2019-07-02 16:14:00', 7500, 0, 117495, 110500, 'tiketbayu@gmail.com', '082338894210', '2019-07-01 19:23:00', 'ARGO PARAHYANGAN 30', 1),
(65, '1562039822', '3fc90', '261264', NULL, '1', '0', 0, NULL, 0, '2019-07-02 03:57:02', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-07-03 11:45:00', '2019-07-03 14:54:00', 7500, 0, 117470, 110500, 'anggatpl07@gmail.com', '081357046700', '2019-07-02 11:37:00', 'ARGO PARAHYANGAN 28', 1),
(66, '1562041655', '3fc9e', '261278', NULL, '1', '0', 0, NULL, 0, '2019-07-02 04:27:35', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-07-15 15:20:00', '2019-07-15 22:29:00', 7500, 0, 167402, 160500, 'muchhermen@yahoo.com', '081281288879', '2019-07-02 12:07:00', 'PROGO 186', 1),
(67, '1562133925', '3ff7f', '262015', NULL, '1', '0', 3, NULL, 0, '2019-07-03 06:05:25', NULL, NULL, 'ML', 'JNG', 'MALANG', 'JATINEGARA', 'Malang', 'Jakarta', '2019-07-13 04:45:00', '2019-07-13 18:21:00', 7500, 0, 307497, 300500, 'anggatpl07@gmail.com', '081357046700', '2019-07-03 13:45:00', 'JAYABAYA 143', 1),
(68, '1562158380', '4007a', '262266', NULL, '1', '0', 0, NULL, 0, '2019-07-03 12:53:00', NULL, '2019-07-04 03:15:46', 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-07-15 15:20:00', '2019-07-15 22:29:00', 7500, 0, 167491, 160500, 'muchhermen@yahoo.com', '081281288879', '2019-07-03 20:29:00', 'PROGO 186', 0),
(69, '1562206475', '4010a', '262410', NULL, '1', '0', 0, NULL, 0, '2019-07-04 02:14:35', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-07-15 15:20:00', '2019-07-15 22:29:00', 7500, 0, 167428, 160500, 'affanutama@yahoo.co.id', '081283900091', '2019-07-04 09:54:00', 'PROGO 186', 1),
(70, '1562869249', '41256', '266838', NULL, '1', '0', 0, NULL, 0, '2019-07-11 18:20:49', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-08-04 03:15:00', '2019-08-04 11:06:00', 7500, 0, 105476, 98500, 'mul08448@gmail.com', '085774115596', '2019-07-12 02:00:00', 'GAYA BARU MALAM SELATAN 174', 1),
(71, '1563284032', 'MUCH73', '269489', '2019-07-16 07:55:57', '1', '0', 2, NULL, 1, '2019-07-16 13:33:52', '2019-07-16 07:56:31', NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-07-24 15:20:00', '2019-07-24 22:29:00', 7500, 0, 167455, 160500, 'muchhermen@yahoo.com', '081281288879', '2019-07-16 21:13:00', 'PROGO 186', 1),
(72, '1563362779', '41f26', '270118', NULL, '1', '0', 0, NULL, 0, '2019-07-17 11:26:19', NULL, NULL, 'GMR', 'ML', 'GAMBIR', 'MALANG', 'Jakarta', 'Malang', '2019-07-20 10:40:00', '2019-07-21 02:06:00', 7500, 0, 562496, 555500, 'anggatpl07@gmail.com', '071357046700', '2019-07-17 19:05:00', 'GAJAYANA 42', 1),
(73, '1563364431', 'RVAV4F', '270125', '2019-07-17 05:01:40', '2', '0', 2, NULL, 1, '2019-07-17 11:53:51', '2019-07-17 05:07:13', NULL, 'PSE', 'WLR', 'PASAR SENEN', 'WALERI', 'Jakarta', 'Kendal', '2019-07-17 16:00:00', '2019-07-17 22:32:00', 7500, 0, 267447, 260500, 'agus.setiawan7007@gmail.com', '08159886798', '2019-07-17 19:16:00', 'TAWANG JAYA 202', 1),
(74, '1563507370', 'X5CMAZ', '271198', '2019-07-18 21:31:02', '1', '0', 3, NULL, 1, '2019-07-19 03:36:10', '2019-07-18 21:31:20', NULL, 'LPN', 'MA', 'LEMPUYANGAN', 'MAOS', 'Yogyakarta', 'Cilacap', '2019-08-14 11:15:00', '2019-08-14 14:09:00', 7500, 0, 87459, 80500, 'kokosyafiq.vn@gmail.com', '081327112392', '2019-07-19 11:14:00', 'KAHURIPAN 181', 1),
(75, '1563543507', 'PVTDZ8', '271603', '2019-07-19 06:49:56', '1', '0', 2, NULL, 1, '2019-07-19 13:38:27', '2019-07-19 06:50:43', NULL, 'RAP', 'MDN', 'RANTAU PRAPAT', 'MEDAN', 'Rantau Prapat', 'Medan', '2019-08-13 16:10:00', '2019-08-13 21:45:00', 7500, 0, 157418, 150500, 'kokosyafiq.vn@gmail.com', '081327112392', '2019-07-19 21:15:00', 'SRIBILAH U49', 1),
(76, '1563591115', '42571', '271729', NULL, '1', '0', 3, NULL, 0, '2019-07-20 02:51:55', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-07-29 15:20:00', '2019-07-29 22:29:00', 7500, 0, 167419, 160500, 'muchhermen@yahoo.com', '081281288879', '2019-07-20 10:29:00', 'PROGO 186', 1),
(77, '1563628247', '426a0', '272032', NULL, '1', '0', 0, NULL, 0, '2019-07-20 13:10:47', NULL, NULL, 'GMR', 'ML', 'GAMBIR', 'MALANG', 'Jakarta', 'Malang', '2019-07-31 09:30:00', '2019-08-01 01:15:00', 7500, 0, 527496, 520500, 'anggatpl07@gmail.com', '081357046700', '2019-07-20 20:50:00', 'BIMA 44', 1),
(78, '1563974120', '42feb', '274411', NULL, '1', '0', 0, NULL, 0, '2019-07-24 13:15:20', NULL, NULL, 'YK', 'GMR', 'YOGYAKARTA', 'GAMBIR', 'Yogyakarta', 'Jakarta', '2019-07-25 01:00:00', '2019-07-25 08:42:00', 7500, 0, 377452, 370500, 'supamaherlambang@gmail.com', '081328178822', '2019-07-24 20:53:00', 'TAKSAKA 51', 1),
(79, '1564470866', 'KAI0308', '277520', '2019-07-30 00:16:56', '4', '1', 2, NULL, 1, '2019-07-30 07:14:26', '2019-07-30 00:17:29', NULL, 'PSE', 'SLO', 'PASAR SENEN', 'SOLOBALAPAN', 'Jakarta', 'Solo', '2019-08-19 15:00:00', '2019-08-19 23:55:00', 7500, 0, 1007427, 1000500, 'muchhermen77@gmail.com', '081281288879', '2019-07-30 14:52:00', 'SENJA UTAMA SOLO 116', 1),
(80, '1564475899', '43c51', '277585', NULL, '1', '0', 0, NULL, 0, '2019-07-30 08:38:19', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-07-31 01:45:00', '2019-07-31 05:01:00', 7500, 0, 117493, 110500, 'anggatpl07@gmail.com', '081357046700', '2019-07-30 16:18:00', 'ARGO PARAHYANGAN 22', 1),
(81, '1564480718', '43c92', '277650', NULL, '1', '0', 0, NULL, 0, '2019-07-30 09:58:38', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-08-21 15:20:00', '2019-08-21 22:29:00', 7500, 0, 167403, 160500, 'muchhermen@yahoo.com', '081281288879', '2019-07-30 17:37:00', 'PROGO 186', 1),
(82, '1565136230', '44c30', '281648', NULL, '1', '0', 3, NULL, 0, '2019-08-07 00:03:50', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-08-08 00:50:00', '2019-08-08 04:07:00', 7500, 0, 117434, 110500, 'anggatpl07@gmail.com', '081357046709', '2019-08-07 07:43:00', 'PANGANDARAN 12410', 1),
(83, '1566094539', '45efc', '286460', NULL, '1', '0', 0, NULL, 0, '2019-08-18 02:15:39', NULL, NULL, 'GMR', 'BD', 'GAMBIR', 'BANDUNG', 'Jakarta', 'Bandung', '2019-08-19 00:50:00', '2019-08-19 04:07:00', 7500, 0, 117438, 110500, 'anggatpl07@gmail.com', '081357046700', '2019-08-18 09:54:00', 'PANGANDARAN 12410', 1),
(84, '1566131174', '45fab', '286635', NULL, '1', '0', 0, NULL, 0, '2019-08-18 12:26:14', NULL, NULL, 'MDN', 'RAP', 'MEDAN', 'RANTAU PRAPAT', 'Medan', 'Rantau Prapat', '2019-08-22 15:30:00', '2019-08-22 20:49:00', 7500, 0, 157436, 150500, 'kokosyafiq.vn@gmail.com', '081327112392', '2019-08-18 20:02:00', 'SRIBILAH U50', 1),
(85, '1566276554', 'GXYXPZ', '287433', '2019-08-19 22:24:16', '1', '0', 2, NULL, 1, '2019-08-20 04:49:14', '2019-08-19 22:29:02', NULL, 'YK', 'JNG', 'YOGYAKARTA', 'JATINEGARA', 'Yogyakarta', 'Jakarta', '2019-08-25 02:07:00', '2019-08-25 10:17:00', 7500, 0, 307411, 300500, 'melaniaenasusiani@yahoo.com', '081282716392', '2019-08-20 12:28:00', 'BOGOWONTO 151', 1),
(86, '1566361666', '2CSZWK', '287833', '2019-08-20 21:39:06', '1', '0', 2, NULL, 1, '2019-08-21 04:27:46', '2019-08-20 21:40:53', NULL, 'PSE', 'SBI', 'PASAR SENEN', 'SURABAYA PASAR TURI', 'Jakarta', 'Surabaya', '2019-08-26 07:00:00', '2019-08-26 18:40:00', 7500, 0, 242423, 235500, 'nsalwina@gmail.com', '087870187986', '2019-08-21 12:06:00', 'KERTAJAYA 178', 1),
(87, '1566530592', '467ae', '288686', NULL, '1', '0', 0, NULL, 0, '2019-08-23 03:23:12', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-09-03 03:15:00', '2019-09-03 11:06:00', 7500, 0, 107470, 100500, 'muchhermen77@gmail.com', '081211006901', '2019-08-23 11:20:00', 'GAYA BARU MALAM SELATAN 174', 1),
(88, '1566534467', '467d0', '288720', NULL, '1', '0', 0, NULL, 0, '2019-08-23 04:27:47', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-09-02 23:45:00', '2019-09-03 06:53:00', 7500, 0, 187431, 180500, 'muchhermen77@gmail.com', '081211006901', '2019-08-23 12:24:00', 'GAJAHWONG 154', 1),
(89, '1566658703', '3ASNTW', '289232', '2019-08-24 08:16:40', '2', '0', 2, NULL, 1, '2019-08-24 14:58:23', '2019-08-24 08:27:59', NULL, 'PWT', 'PSE', 'PURWOKERTO', 'PASAR SENEN', 'Purwokerto', 'Jakarta', '2019-08-26 14:08:00', '2019-08-26 19:17:00', 7500, 0, 507470, 500500, 'agus.setiawan7007@gmail.com', '08159886798', '2019-08-24 22:34:00', 'SAWUNGGALIH 123', 1),
(90, '1566828921', '46c9e', '289950', NULL, '1', '0', 3, NULL, 0, '2019-08-26 14:15:21', NULL, NULL, 'PWT', 'PSE', 'PURWOKERTO', 'PASAR SENEN', 'Purwokerto', 'Jakarta', '2019-08-29 14:08:00', '2019-08-29 19:17:00', 7500, 0, 212451, 205500, 'anggatpl07@gmail.com', '081357046700', '2019-08-26 21:55:00', 'SAWUNGGALIH 123', 1),
(91, '1566829194', '123456', '289951', '2019-09-01 21:32:58', '1', '0', 2, NULL, 1, '2019-08-26 14:19:54', '2019-09-01 21:33:58', NULL, 'PWT', 'PSE', 'PURWOKERTO', 'PASAR SENEN', 'Purwokerto', 'Jakarta', '2019-08-28 14:08:00', '2019-08-28 19:17:00', 7500, 0, 212467, 205500, 'anggatpl07@gmail.com', '081357046700', '2019-08-26 21:59:00', 'SAWUNGGALIH 123', 1),
(92, '1567157225', '47329', '291625', NULL, '1', '0', 0, NULL, 0, '2019-08-30 09:27:05', NULL, NULL, 'SBI', 'PSE', 'SURABAYA PASAR TURI', 'PASAR SENEN', 'Surabaya', 'Jakarta', '2019-09-05 08:30:00', '2019-09-05 19:36:00', 7500, 0, 297462, 290500, 'nsalwina@gmail.com', '087870187986', '2019-08-30 17:23:00', 'GUMARANG 77', 1),
(93, '1567649414', '478a5', '293029', NULL, '1', '0', 0, NULL, 0, '2019-09-05 02:10:14', NULL, NULL, 'SGU', 'PSE', 'SURABAYA GUBENG', 'PASAR SENEN', 'Surabaya', 'Jakarta', '2019-09-26 05:00:00', '2019-09-26 18:55:00', 7500, 0, 111414, 104500, 'puita.sari@gmail.com', '081330071967', '2019-09-05 10:06:00', 'GAYA BARU MALAM SELATAN 173', 1),
(94, '1567670476', '4794a', '293194', NULL, '1', '0', 0, NULL, 0, '2019-09-05 08:01:16', NULL, NULL, 'PSE', 'KTA', 'PASAR SENEN', 'KUTOARJO', 'Jakarta', 'Kutoarjo', '2019-09-09 15:20:00', '2019-09-09 22:29:00', 7500, 0, 157469, 150500, 'muchhermen77@gmail.com', '081281288879', '2019-09-05 15:57:00', 'PROGO 186', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_airport`
--

CREATE TABLE `list_airport` (
  `id_airport` int(5) NOT NULL,
  `airport_code` varchar(10) NOT NULL,
  `airport_name` varchar(50) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `country_id` varchar(3) NOT NULL,
  `id_island` int(3) NOT NULL,
  `is_popular` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_airport`
--

INSERT INTO `list_airport` (`id_airport`, `airport_code`, `airport_name`, `location_name`, `country_id`, `id_island`, `is_popular`) VALUES
(1, 'AMQ', 'Pattimura', 'Ambon', 'id', 1, 0),
(2, 'ABU', 'ATAMBUA', 'Atambua', 'id', 1, 0),
(3, 'BJW', 'Soa', 'Bajawa', 'id', 1, 0),
(4, 'BPN', 'Sepinggan', 'BalikPapan', 'id', 1, 0),
(5, 'BTJ', 'Sultan Iskandar Muda', 'Banda Aceh', 'id', 1, 0),
(6, 'BDO', 'Husein Sastranegara', 'Bandung', 'id', 1, 0),
(7, 'BDJ', 'SYAMSUDDIN NOOR', 'Banjarmasin', 'id', 1, 0),
(8, 'BWX', 'BLIMBINGSARI', 'Banyuwangi - BLIMBINGSARI', 'id', 1, 0),
(9, 'BTH', 'Hang Nadim', 'Batam', 'id', 1, 0),
(10, 'BUW', 'Baubau', 'Baubau', 'id', 1, 0),
(11, 'BKS', 'Fatmawati Soekarno', 'Bengkulu', 'id', 1, 0),
(12, 'BEJ', 'Kalimarau', 'Berau', 'id', 1, 0),
(13, 'BIK', 'Frans Kaisiepo', 'Biak', 'id', 1, 0),
(14, 'BMU', 'Muhammad Salahuddin', 'Bima', 'id', 1, 0),
(16, 'WUB', 'Buli', 'Buli', 'id', 1, 0),
(17, 'UOL', 'Pogugol', 'Buol', 'id', 1, 0),
(18, 'DPS', 'NGURAH RAI', 'Denpasar, Bali', 'id', 1, 0),
(19, 'ENE', 'H. Hasan Aroeboesman', 'Ende', 'id', 1, 0),
(20, 'FKQ', 'Fakfak', 'FakFak', 'id', 1, 0),
(21, 'GLX', 'GALELA', 'Galela', 'id', 1, 0),
(22, 'GTO', 'Jalaluddin', 'Gorontalo', 'id', 1, 0),
(23, 'GNS', 'Gunung Sitoli, Binaka', 'GunungSitoli', 'id', 1, 0),
(24, 'CGK', 'Soekarno Hatta', 'Jakarta - Cengkareng', 'id', 1, 0),
(25, 'HLP', 'HALIM PERDANAKUSUMA', 'Jakarta - Halim', 'id', 1, 0),
(26, 'DJB', 'Sultan Thaha Syaifuddin', 'Jambi', 'id', 1, 0),
(27, 'DJJ', 'Sentani', 'Jayapura', 'id', 1, 0),
(28, 'KNG', 'Kaimana, Utarom', 'Kaimana', 'id', 1, 0),
(29, 'KDI', 'Haluoleo', 'Kendari', 'id', 1, 0),
(30, 'KTG', 'RAHADI OESMAN', 'Ketapang', 'id', 1, 0),
(31, 'KBU', 'Kotabaru', 'Kotabaru', 'id', 1, 0),
(32, 'KOE', 'El Tari', 'Kupang', 'id', 1, 0),
(33, 'LBJ', 'Labuanbajo, Komodo', 'LabuanBajo', 'id', 1, 0),
(34, 'LAH', 'Labuha, Oesman Sadik', 'Labuha', 'id', 1, 0),
(35, 'TKG', 'Radin Inten II', 'Lampung', 'id', 1, 0),
(36, 'LSW', 'Lhokseumawe, Malikussaleh', 'Lhokseumawe', 'id', 1, 0),
(37, 'LOP', 'Lombok', 'Lombok, Mataram', 'id', 1, 0),
(38, 'LUW', 'Syukuran Aminuddin Amir', 'Luwuk', 'id', 1, 0),
(39, 'MLG', 'Abdul Rachman Saleh', 'Malang', 'id', 1, 0),
(40, 'MLN', 'ROBERT ATTY BESSING', 'Malinau', 'id', 1, 0),
(41, 'MJU', 'Mamuju', 'Mamuju', 'id', 1, 0),
(42, 'MDC', 'Sam Ratulangi', 'Manado', 'id', 1, 0),
(43, 'MKW', 'Rendani', 'Manokwari', 'id', 1, 0),
(44, 'MOF', 'Wai Oti', 'Maumere', 'id', 1, 0),
(45, 'KNO', 'Kuala Namu', 'Medan (Kuala Namu)', 'id', 1, 0),
(46, 'MLK', 'MELALAN', 'Melak', 'id', 1, 0),
(47, 'MNA', 'Melonguane', 'Melanguane', 'id', 1, 0),
(48, 'MKQ', 'Mopah', 'Merauke', 'id', 1, 0),
(49, 'MEQ', 'Meulaboh, Cut Nyak Dien', 'Meulaboh', 'id', 1, 0),
(50, 'OTI', 'MOROTAI', 'MOROTAI', 'id', 1, 0),
(51, 'MTW', 'BANDAR UDARA BERINGIN', 'Muara Teweh', 'id', 1, 0),
(52, 'NBX', 'Nabire', 'Nabire', 'id', 1, 0),
(53, 'NTX', 'Natuna Ranai', 'NatunaRanai', 'id', 1, 0),
(54, 'NNX', 'NUNUKAN', 'Nunukan', 'id', 1, 0),
(55, 'PDG', 'Minangkabau', 'Padang', 'id', 1, 0),
(56, 'PKY', 'Tjilik Riwut', 'Palangka raya', 'id', 1, 0),
(57, 'PLM', 'Sultan Mahmud Badaruddin II', 'Palembang', 'id', 1, 0),
(58, 'PLW', 'Mutiara', 'Palu', 'id', 1, 0),
(59, 'PGK', 'Depati Amir', 'Pangkal pinang', 'id', 1, 0),
(60, 'PKN', 'PANGKALAN BUN', 'Pangkalan Bun', 'id', 1, 0),
(61, 'PKU', 'Sultan Syarif Kasim II', 'Pekanbaru', 'id', 1, 0),
(62, 'PUM', 'Sangia Nibandera Pomalaa', 'Pomalaa', 'id', 1, 0),
(63, 'PNK', 'Supadio', 'Pontianak', 'id', 1, 0),
(64, 'PSJ', 'Poso, Kasiguncu', 'Poso', 'id', 1, 0),
(65, 'ARD', 'Mali', 'Pulau Alor', 'id', 1, 0),
(66, 'PSU', 'PUTUSSIBAU', 'Putussibau', 'id', 1, 0),
(67, 'RTI', 'ROTE', 'Rote', 'id', 1, 0),
(68, 'RTG', 'Frans Sales Lega', 'Ruteng', 'id', 1, 0),
(69, 'SRI', 'TEMINDUNG', 'Samarinda', 'id', 1, 0),
(70, 'SMQ', 'H. Asan Sampit', 'Sampit', 'id', 1, 0),
(71, 'SXK', 'BANDAR UDARA OLILIT', 'Saumlaki', 'id', 1, 0),
(72, 'YKR', 'SELAYAR', 'Selayar', 'id', 1, 0),
(73, 'SRG', 'Achmad Yani', 'Semarang', 'id', 1, 0),
(74, 'RRZ', 'SIBOLGA', 'Sibolga', 'id', 1, 0),
(75, 'DTB', 'Silangit', 'Silangit', 'id', 1, 0),
(76, 'SNX', 'Lasikin', 'Sinabang', 'id', 1, 0),
(77, 'SQG', 'SUSILO', 'Sintang', 'id', 1, 0),
(78, 'SOC', 'Adisumarmo', 'Solo', 'id', 1, 0),
(79, 'SOQ', 'Dominique Edward Osok', 'Sorong', 'id', 1, 0),
(80, 'SWQ', 'Sumbawa, Brang Biji', 'Sumbawa', 'id', 1, 0),
(81, 'SUB', 'Juanda', 'Surabaya', 'id', 1, 0),
(82, 'NAH', 'Naha', 'Tahuna', 'id', 1, 0),
(83, 'TMC', 'Tampolaka', 'Tambolaka', 'id', 1, 0),
(84, 'TJQ', 'H.A.S Hanandjoeddin', 'Tanjung Pandan', 'id', 1, 0),
(85, 'TNJ', 'Raja Haji FIsabilillah', 'Tanjung Pinang', 'id', 1, 0),
(86, 'TJS', 'TANJUNG HARAPAN', 'Tanjung Selor', 'id', 1, 0),
(87, 'TJG', 'WARUKIN', 'Tanjung Warukin', 'id', 1, 0),
(88, 'TRK', 'Juwata', 'Tarakan', 'id', 1, 0),
(89, 'TTE', 'Sultan Babullah', 'Ternate', 'id', 1, 0),
(90, 'TIM', 'Mozes Kilangin', 'Timika', 'id', 1, 0),
(91, 'KAZ', 'Tobelo', 'Tobelo', 'id', 1, 0),
(92, 'TLI', 'TOLI TOLI', 'TOLI TOLI', 'id', 1, 0),
(93, 'LUV', 'Tual, Dumatubin', 'Tual', 'id', 1, 0),
(94, 'UPG', 'SULTAN HASANUDDIN', 'Ujungpandang, Makassar', 'id', 1, 0),
(95, 'WGP', 'WAINGAPU', 'Waingapu', 'id', 1, 0),
(96, 'WNI', 'Matahora', 'Wakatobi', 'id', 1, 0),
(97, 'WMX', 'WAMENA', 'Wamena', 'id', 1, 0),
(98, 'WGI', 'Wangi wangi, Matahora', 'Wangi wangi', 'id', 1, 0),
(99, 'JOG', 'Adi Sutjipto', 'Yogyakarta', 'id', 1, 0),
(100, 'ADL', 'ADELAIDE', 'Adelaide', 'au', 1, 0),
(101, 'ASP', 'Alice Springs', 'Alice Springs', 'au', 1, 0),
(102, 'AVV', 'AVALON', 'AVALON', 'au', 1, 0),
(103, 'BNK', 'BALLINA BYRON', 'BALLINA BYRON', 'au', 1, 0),
(104, 'BNE', 'BRISBANE', 'Brisbane', 'au', 1, 0),
(105, 'CNS', 'CAIRNS', 'Cairns', 'au', 1, 0),
(106, 'CBR', 'CANBERRA', 'CANBERRA', 'au', 1, 0),
(107, 'CFS', 'Coffs Harbour', 'Coffs Harbour', 'au', 1, 0),
(108, 'DRW', 'DARWIN', 'Darwin', 'au', 1, 0),
(109, 'OOL', 'GOLD COAST', 'Gold Coast', 'au', 1, 0),
(110, 'HTI', 'HAMILTON ISLAND', 'HAMILTON ISLAND', 'au', 1, 0),
(111, 'HIS', 'HAYMAN ISLAND', 'HAYMAN ISLAND', 'au', 1, 0),
(112, 'HBA', 'HOBART', 'Hobart', 'au', 1, 0),
(113, 'LST', 'LAUNCESTON', 'Launceston', 'au', 1, 0),
(114, 'MKY', 'MACKAY', 'Mackay (Whitsundays)', 'au', 1, 0),
(115, 'MEL', 'MELBOURNE', 'Melbourne', 'au', 1, 0),
(116, 'VIZ', 'MELBOURNE (ALL AIRPORTS)', 'Melbourne (all airports)', 'au', 1, 0),
(117, 'NTL', 'NEWCASTLE - PORT STEPHENS', 'NEWCASTLE - PORT STEPHENS', 'au', 1, 0),
(118, 'PER', 'PERTH', 'Perth', 'au', 1, 0),
(119, 'MCY', 'SUNSHINE COAST', 'Sunshine Coast', 'au', 1, 0),
(120, 'SYD', 'SYDNEY (KINGSFORD-SMITH)', 'Sydney', 'au', 1, 0),
(121, 'TSV', 'TOWNSVILLE', 'TOWNSVILLE', 'au', 1, 0),
(122, 'AYQ', 'ULURU', 'Uluru', 'au', 1, 0),
(123, 'PPP', 'WHITSUNDAY COAST - PROSERPINE', 'WHITSUNDAY COAST - PROSERPINE', 'au', 1, 0),
(124, 'CGP', 'SHAH AMANAT', 'Chittagong', 'bd', 1, 0),
(125, 'DEL', 'INDIRA GANDHI', 'Delhi', 'bd', 1, 0),
(126, 'DAC', 'Dhaka', 'Dhaka', 'bd', 1, 0),
(127, 'BWN', 'BRUNEI', 'Brunei', 'bn', 1, 0),
(128, 'PNH', 'PHNOM PENH', 'Phnom Penh', 'kh', 1, 0),
(129, 'REP', 'SIEM REAP', 'Siem Reap', 'kh', 1, 0),
(130, 'PEK', 'Beijing Capital', 'Beijing', 'cn', 1, 0),
(131, 'CTU', 'Chengdu Shuangliu', 'Chengdu', 'cn', 1, 0),
(132, 'CKG', 'Chongqing Jiangbei', 'Chongqing', 'cn', 1, 0),
(133, 'CAN', 'Guangzhou Baiyun', 'Guangzhou', 'cn', 1, 0),
(134, 'KWL', 'Guilin Liangjiang', 'Guilin', 'cn', 1, 0),
(135, 'HAK', 'HAIKOU', 'Haikou', 'cn', 1, 0),
(136, 'HGH', 'HANGZHOU XIAOSHAN', 'Hangzhou', 'cn', 1, 0),
(137, 'KMG', 'Kunming Wujiaba', 'Kunming', 'cn', 1, 0),
(138, 'NNG', 'Nanning Wuxu', 'Nanning', 'cn', 1, 0),
(139, 'NGB', 'Ningbo Lishe', 'Ningbo', 'cn', 1, 0),
(140, 'TAO', 'Qingdao', 'Qingdao', 'cn', 1, 0),
(141, 'PVG', 'Shanghai Pudong', 'Shanghai', 'cn', 1, 0),
(142, 'SWA', 'SHANTOU / JIEYANG', 'SHANTOU / JIEYANG', 'cn', 1, 0),
(143, 'SHE', 'Shenyang', 'Shenyang', 'cn', 1, 0),
(144, 'SZX', 'Shenzhen', 'Shenzhen', 'cn', 1, 0),
(145, 'TSN', 'Tianjin', 'Tianjin', 'cn', 1, 0),
(146, 'WUH', 'Wuhan Tianhe', 'Wuhan', 'cn', 1, 0),
(147, 'XIY', 'Xi An Xianyang', 'Xi\'an', 'cn', 1, 0),
(148, 'CMB', 'Naike', 'Colombo', 'co', 1, 0),
(149, 'NAN', 'NADI', 'NADI', 'fj', 1, 0),
(150, 'HKG', 'HONG KONG', 'Hong Kong', 'hk', 1, 0),
(151, 'AMD', 'SARDAR VALLABHBHAI PATEL', 'Ahmedabad', 'in', 1, 0),
(152, 'BLR', 'Bangalore', 'Bangalore', 'in', 1, 0),
(153, 'MAA', 'Chennai', 'Chennai', 'in', 1, 0),
(154, 'HYD', 'Hyderabad', 'Hyderabad', 'in', 1, 0),
(155, 'COK', 'Kochi', 'Kochi', 'in', 1, 0),
(156, 'CCU', 'Netaji Subhas Chandra Bosen', 'Kolkata', 'in', 1, 0),
(157, 'BOM', 'CHHATRAPATI SHIVAJI', 'Mumbai', 'in', 1, 0),
(158, 'TRV', 'Thiruvananthapuram', 'Thiruvananthapuram', 'in', 1, 0),
(159, 'TRZ', 'Tiruchirapalli (Trichy)', 'Tiruchirapalli (Trichy)', 'in', 1, 0),
(160, 'FUK', 'FUKUOKA', 'Fukuoka', 'jp', 1, 0),
(161, 'KOJ', 'KAGOSHIMA', 'Kagoshima', 'jp', 1, 0),
(162, 'KMJ', 'KUMAMOTO', 'Kumamoto', 'jp', 1, 0),
(163, 'MYJ', 'MATSUYAMA', 'Matsuyama', 'jp', 1, 0),
(164, 'NGO', 'NAGOYA CHUBU CENTRAIR', 'Nagoya', 'jp', 1, 0),
(165, 'OIT', 'OITA', 'Oita', 'jp', 1, 0),
(166, 'OKA', 'OKINAWA, NAHA', 'Okinawa - Naha', 'jp', 1, 0),
(167, 'KIX', 'OSAKA, KANSAI', 'Osaka - Kansai', 'jp', 1, 0),
(168, 'CTS', 'SAPPORO, SHIN-CHITOSE', 'Sapporo - Shin-Chitose', 'jp', 1, 0),
(169, 'TAK', 'TAKAMATSU ', 'Takamatsu ', 'jp', 1, 0),
(170, 'HND', 'Tokyo, Haneda', 'Tokyo - Haneda', 'jp', 1, 0),
(171, 'NRT', 'TOKYO, NARITA', 'Tokyo - Narita', 'jp', 1, 0),
(172, 'VTE', 'Wattay', 'Vientiane', 'la', 1, 0),
(173, 'MFM', 'MACAU', 'Macau', 'mo', 1, 0),
(174, 'AOR', 'Sultan Abdul Halim', 'Alor Setar', 'my', 1, 0),
(175, 'BTU', 'Bintulu', 'Bintulu', 'my', 1, 0),
(176, 'JHB', 'Senai', 'Johor Baru', 'my', 1, 0),
(177, 'KBR', 'Sultan Ismail Petra', 'Kota Bharu', 'my', 1, 0),
(178, 'BKI', 'Kota Kinabalu', 'Kota Kinabalu', 'my', 1, 0),
(179, 'KUL', 'KUALA LUMPUR', 'Kuala Lumpur', 'my', 1, 0),
(180, 'TGG', 'SULTAN MAHMUD', 'Kuala Terengganu', 'my', 1, 0),
(181, 'KCH', 'Kuching', 'Kuching', 'my', 1, 0),
(182, 'LGK', 'Langkawi', 'Langkawi', 'my', 1, 0),
(183, 'MKZ', 'Malacca', 'Malacca', 'my', 1, 0),
(184, 'MYY', 'Miri', 'Miri', 'my', 1, 0),
(185, 'PEN', 'PENANG', 'Penang', 'my', 1, 0),
(186, 'SDK', 'Sandakan', 'Sandaka', 'my', 1, 0),
(187, 'SBW', 'Sibu', 'Sibu', 'my', 1, 0),
(188, 'SZB', 'Sultan Abdul Aziz Shah', 'Subang', 'my', 1, 0),
(189, 'IPH', 'IPOH', 'SULTAN AZLAN SHAH', 'my', 1, 0),
(190, 'TWU', 'Tawau', 'Tawau', 'my', 1, 0),
(191, 'MDL', 'Mandalay', 'Mandalay', 'mm', 1, 0),
(192, 'RGN', 'YANGOON', 'Yangoon', 'mm', 1, 0),
(193, 'KTM', 'Tribhuvan', 'Kathmandu', 'np', 1, 0),
(194, 'AKL', 'AUCKLAND', 'AUCKLAND', 'nz', 1, 0),
(195, 'CHC', 'CHRISTCHURCH', 'CHRISTCHURCH', 'nz', 1, 0),
(196, 'DUD', 'DUNEDIN', 'DUNEDIN', 'nz', 1, 0),
(197, 'ZQN', 'QUEENSTOWN', 'QUEENSTOWN', 'nz', 1, 0),
(198, 'WLG', 'WELLINGTON', 'WELLINGTON', 'nz', 1, 0),
(199, 'BCD', 'Bacolod', 'Bacolod', 'ph', 1, 0),
(200, 'CEB', 'Mactan-Cebu', 'Cebu', 'ph', 1, 0),
(201, 'CRK', 'CLARK', 'Clark', 'ph', 1, 0),
(202, 'DVO', 'Davao', 'Davao', 'ph', 1, 0),
(203, 'ILO', 'Iloilo', 'Iloilo', 'ph', 1, 0),
(204, 'MNL', 'NINOY AQUINO', 'Manila (NAIA)', 'ph', 1, 0),
(205, 'PPS', 'Puerto Princesa', 'Puerto Princesa', 'ph', 1, 0),
(206, 'TAC', 'Tacloban', 'Tacloban', 'ph', 1, 0),
(207, 'JED', 'King Abdulaziz', 'Jeddah', 'sa', 1, 0),
(208, 'SIN', 'Changi', 'Singapore', 'sg', 1, 0),
(209, 'PUS', 'Gimhae', 'Busan', 'kr', 1, 0),
(210, 'ICN', 'Incheon', 'Seoul', 'kr', 1, 0),
(211, 'TPE', 'TAIWAN TAOYUAN', 'Taipei', 'tw', 1, 0),
(212, 'DMK', 'DON MUEANG', 'Bangkok - Don Mueang', 'th', 1, 0),
(213, 'BKK', 'SUVARNABHUMI', 'Bangkok - Suvarnabhumi', 'th', 1, 0),
(214, 'CNX', 'CHIANG MAI', 'Chiang Mai', 'th', 1, 0),
(215, 'CEI', 'Mae Fah Luang-Chiang Rai', 'Chiang Rai', 'th', 1, 0),
(216, 'HDY', 'Hat Yai', 'Hat Yai', 'th', 1, 0),
(217, 'KBV', 'Krabi', 'Krabi', 'th', 1, 0),
(218, 'KOP', 'Nakhon Phanom', 'Nakhon Phanom', 'th', 1, 0),
(219, 'NST', 'Nakhon Si Thammarat', 'Nakhon Si Thammarat', 'th', 1, 0),
(220, 'NAW', 'Narathiwat', 'Narathiwat', 'th', 1, 0),
(221, 'HKT', 'PHUKET', 'Phuket', 'th', 1, 0),
(222, 'URT', 'Surat Thani', 'Surat Thani', 'th', 1, 0),
(223, 'TST', 'Trang', 'Trang', 'th', 1, 0),
(224, 'UBP', 'Ubon Ratchathani', 'Ubon Ratchathani', 'th', 1, 0),
(225, 'UTH', 'Udonthani', 'Udon Thani', 'th', 1, 0),
(226, 'DIL', 'Presidente Nicolau Lobato', 'Dili', 'tl', 1, 0),
(227, 'ABU', 'ABU DHABI', 'Abu Dhabi', 'ae', 1, 0),
(228, 'HNL', 'HONOLULU', 'HONOLULU', 'us', 1, 0),
(229, 'BMV', 'BUON MA THUOT', 'Buon Ma Thuot', 'vn', 1, 0),
(230, 'DAD', 'DA NANG', 'Da Nang', 'vn', 1, 0),
(231, 'VDH', 'DONG HOI', 'Dong Hoi', 'vn', 1, 0),
(232, 'HPH', 'HAI PHONG', 'Hai Phong', 'vn', 1, 0),
(233, 'SGN', 'TAN SON NHAT', 'Ho Chi Minh City', 'vn', 1, 0),
(234, 'HUI', 'HUI', 'HUI', 'vn', 1, 0),
(235, 'CXR', 'NHA TRANG', 'Nha Trang', 'vn', 1, 0),
(236, 'HAN', 'NOI BAI', 'Noi Bai', 'vn', 1, 0),
(237, 'PQC', 'PHU QUOC', 'Phu Quoc', 'vn', 1, 0),
(238, 'UIH', 'QUY NHON', 'Quy Nhon ', 'vn', 1, 0),
(239, 'THD', 'THANH HOA', 'Thanh Hoa', 'vn', 1, 0),
(240, 'TBB', 'TUY HOA', 'Tuy Hoa', 'vn', 1, 0),
(241, 'VII', 'VINH', 'Vinh', 'vn', 1, 0),
(242, 'AMS', 'Schipol International Airports', 'Amsterdam', 'nl', 1, 0),
(243, 'LON', 'London Gatwick Airport', 'London', 'gb', 1, 0),
(244, 'IXC', 'Chandigarh', 'Chandigarh', 'in', 1, 0),
(245, 'JAI', 'Jaipur', 'Jaipur', 'in', 1, 0),
(246, 'GOI', 'Goa', 'Goa', 'in', 1, 0),
(248, 'DEL', 'New Delhi', 'New Delhi', 'in', 1, 0),
(249, 'VTZ', 'Visakhapatnam', 'Visakhapatnam', 'in', 1, 0),
(250, 'PNQ', 'Pune', 'Pune', 'in', 1, 0),
(251, 'GAU', 'Guwahati', 'Guwahati', 'in', 1, 0),
(252, 'MLE', 'Male', 'Maldives', 'mv', 1, 0),
(253, 'CMB', 'Kolombo', 'Kolombo', 'lk', 1, 0),
(254, 'KHH', 'Kaohsiung', 'Kaohsiung', 'tw', 1, 0),
(255, 'KWB', 'Dewadaru', 'KARIMUN JAWA', 'id', 1, 0),
(256, 'LMU', 'Matak', 'ANAMBAS', 'id', 1, 0),
(257, 'RGT', 'Japura', 'RENGAT', 'id', 1, 0),
(258, 'MOH', 'Morowali', 'MOROWALI', 'id', 1, 0),
(259, 'BTW', 'Bersujud', 'BATU LICIN', 'id', 1, 0),
(260, 'CXP', 'Tunggul Wulung', 'CILACAP', 'id', 1, 0),
(261, 'DUM', 'Pinang Kampai', 'DUMAI', 'id', 1, 0),
(262, 'KRC', 'Depati Parbo', 'KERINCI', 'id', 1, 0),
(263, 'MWS/MRB', 'Muara Bungo', 'MUARA BUNGO', 'id', 1, 0),
(264, 'LKA', 'Gewayantana', 'LARANTUKA', 'id', 1, 0),
(265, 'LLG', 'Silampari', 'LUBUK LINGGAU', 'id', 1, 0),
(266, 'KJT', 'KERTAJATI', 'MAJALENGKA', 'id', 1, 0),
(267, 'MPC', 'Mukomuko', 'MUKOMUKO', 'id', 1, 0),
(268, 'PXA', 'Atung bungsu', 'PAGAR ALAM', 'id', 1, 0),
(269, 'LLO', 'Legaligo', 'POLOPO', 'id', 1, 0),
(270, 'RJM', 'Marinda', 'RAJA AMPAT', 'id', 1, 0),
(271, 'TXE', 'Rembele', 'REMBELE/TAKENGON', 'id', 1, 0),
(272, 'SBG', 'Maimun Saleh', 'SABANG', 'id', 1, 0),
(273, 'SMG', 'Lasikin', 'SIMEULEU', 'id', 1, 0),
(274, 'SUP', 'Trunojoyo', 'SUMENEP', 'id', 1, 0),
(275, 'TSY', 'Wiriadinata', 'TASIKMALAYA', 'id', 1, 0),
(276, 'LWE', 'Wonopito', 'LEWOLEBA', 'id', 1, 0),
(277, 'DEX', 'Nop Goliot', 'DEKAI', 'id', 1, 0),
(278, 'RTU', 'Maratua', 'MARATUA ', 'id', 1, 0);

--
-- Trigger `list_airport`
--
DELIMITER $$
CREATE TRIGGER `delete_airport` AFTER DELETE ON `list_airport` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi);
    UPDATE versi SET versi = `version`+1;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertAirport` AFTER INSERT ON `list_airport` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi);
    UPDATE versi SET versi = `version`+1;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateAirport` AFTER UPDATE ON `list_airport` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi);
    UPDATE versi SET versi = `version`+1;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_stasiun`
--

CREATE TABLE `list_stasiun` (
  `code` varchar(20) NOT NULL,
  `nama_stasiun` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_stasiun`
--

INSERT INTO `list_stasiun` (`code`, `nama_stasiun`, `negara`, `kota`) VALUES
('AKB', 'AEKLOBA', 'ID', 'Medan'),
('AW', 'AWIPARI', 'ID', 'Tasikmalaya'),
('AWN', 'ARJAWINANGUN', 'ID', 'Cirebon'),
('BAP', 'BANDARKALIPAH', 'ID', 'Medan'),
('BAT', 'Barat', 'ID', 'Magetan'),
('BB', 'BREBES', 'ID', 'Brebes'),
('BBD', 'BABADAN', 'ID', 'Ponorogo'),
('BBG', 'BRUMBUNG', 'ID', 'Demak'),
('BBK', 'BABAKAN', 'ID', 'Cirebon'),
('BBN', 'BRAMBANAN', 'ID', 'Yogyakarta'),
('BBT', 'BABAT', 'ID', 'Lamongan'),
('BBU', 'BLAMBANGANUMPU', 'ID', 'Lampung'),
('BD', 'BANDUNG', 'ID', 'Bandung'),
('BDT', 'BANDARTINGGI', 'ID', 'Medan'),
('BDW', 'BANGODUWA', 'ID', 'Jatibarang'),
('BG', 'BANGIL', 'ID', 'Pasuruan'),
('BGM', 'BUNGAMAS', 'ID', 'Lahat'),
('BGR', 'BAGOR', 'ID', 'Nganjuk'),
('BIB', 'BLIMBINGPENDOPO', 'ID', 'Prabumulih'),
('BIJ', 'BINJAI', 'ID', 'Binjai'),
('BJ', 'BOJONEGORO', 'ID', 'Bojonegoro'),
('BJG', 'BOJONG', 'ID', 'Pekalongan'),
('BJI', 'BANJARSRI', 'ID', 'Ciamis'),
('BJL', 'BAJALINGGEI', 'ID', 'Medan'),
('BJR', 'BANJAR', 'ID', 'Banjar'),
('BKA', 'BULAKAMBA', 'ID', 'Brebes'),
('BKI', 'BEKRI', 'ID', 'Lampung'),
('BKS', 'BEKASI', 'ID', 'Bekasi'),
('BL', 'BLITAR', 'ID', 'Blitar'),
('BMA', 'BUMIAYU', 'ID', 'Brebes'),
('BMG', 'BLIMBING', 'ID', 'Malang'),
('BOO', 'BOGOR', 'ID', 'Bogor'),
('BRN', 'BARON', 'ID', 'Nganjuk'),
('BTA', 'BATURAJA', 'ID', 'Baturaja'),
('BTG', 'BATANG', 'ID', 'Batang'),
('BTH', 'BUTUH', 'ID', 'Purworejo'),
('BTK', 'BATANGKUIS', 'ID', 'Medan'),
('BTT', 'BATU TULIS', 'ID', 'Bogor'),
('BW', 'BANYUWANGIBARU', 'ID', 'Banyuwangi'),
('CAW', 'CIAWI', 'ID', 'Tasikmalaya'),
('CB', 'CIBATU', 'ID', 'Garut'),
('CBB', 'CIBEBER', 'ID', 'Cianjur'),
('CBD', 'CIBADAK', 'ID', 'Sukabumi'),
('CCL', 'CICALENGKA', 'ID', 'Bandung'),
('CCR', 'CICURUG', 'ID', 'Sukabumi'),
('CD', 'CIKADONGDONG', 'ID', 'Bandung'),
('CGB', 'CIGOMBONG', 'ID', 'Bogor'),
('CI', 'CIAMIS', 'ID', 'Ciamis'),
('CJ', 'CIANJUR', 'ID', 'Cianjur'),
('CKP', 'CIKAMPEK', 'ID', 'Cikampek'),
('CLD', 'CILEDUG', 'ID', 'Cirebon'),
('CLG', 'CILEGON', 'ID', 'Cilegon'),
('CLH', 'CILEGEH', 'ID', 'Indramayu'),
('CLK', 'CILAKU', 'ID', 'Cianjur'),
('CMI', 'CIMAHI', 'ID', 'Bandung'),
('CN', 'CIREBON', 'ID', 'Cirebon'),
('CNP', 'CIREBONPRUJAKAN', 'ID', 'Cirebon'),
('CO', 'COMAL', 'ID', 'Pemalang'),
('CP', 'CILACAP', 'ID', 'Cilacap'),
('CPD', 'CIPEUNDEUY', 'ID', 'Garut'),
('CPI', 'CIPARI', 'ID', 'Cilacap'),
('CRA', 'CIPUNEGARA', 'ID', 'Subang'),
('CRB', 'CARUBAN', 'ID', 'Madiun'),
('CRG', 'CIREUNGAS', 'ID', 'Sukabumi'),
('CSA', 'CISAAT', 'ID', 'Sukabumi'),
('CU', 'CEPU', 'ID', 'Blora'),
('DEN', 'DENPASAR', 'ID', 'Denpasar'),
('DMR', 'DOLOKMERANGIR', 'ID', 'Medan'),
('DPL', 'DOPLANG', 'ID', 'Blora'),
('GB', 'GOMBONG', 'ID', 'Gombong'),
('GD', 'GUNDIH', 'ID', 'Grobogan'),
('GDB', 'GEDEBAGE', 'ID', 'Bandung'),
('GDG', 'GEDANGAN', 'ID', 'Sidoarjo'),
('GDM', 'GANDRUNGMANGUN', 'ID', 'Cilacap'),
('GDS', 'GANDASOLI', 'ID', 'Sukabumi'),
('GG', 'GENENG', 'ID', 'Ngawi'),
('GHM', 'GIHAM', 'ID', 'Lampung'),
('GI', 'GRATI', 'ID', 'Pasuruan'),
('GLM', 'GLENMORE', 'ID', 'Banyuwangi'),
('GM', 'GUMILIR', 'ID', 'Cilacap'),
('GMR', 'GAMBIR', 'ID', 'Jakarta'),
('GNM', 'GUNUNGMEGANG', 'ID', 'Prabumulih'),
('GRM', 'GARUM', 'ID', 'Blitar'),
('HGL', 'HAURGEULIS', 'ID', 'Indramayu'),
('HL', 'HENGELO', 'ID', 'Medan'),
('HRP', 'HAURPUGUR', 'ID', 'Bandung'),
('IJ', 'IJO', 'ID', 'Gombong'),
('JAKK', 'JAKARTA KOTA', 'ID', 'Jakarta'),
('JG', 'JOMBANG', 'ID', 'Jombang'),
('JN', 'JENAR', 'ID', 'Purworejo'),
('JNG', 'JATINEGARA', 'ID', 'Jakarta'),
('JR', 'JEMBER', 'ID', 'Jember'),
('JRL', 'JERUKLEGI', 'ID', 'Cilacap'),
('JTB', 'JATIBARANG', 'ID', 'Indramayu'),
('JTR', 'JATIROTO', 'ID', 'Jember'),
('KA', 'KARANGANYAR', 'ID', 'Kebumen'),
('KAB', 'KADOKANGANGABUS', 'ID', 'Indramayu'),
('KAC', 'KIARACONDONG', 'ID', 'Bandung'),
('KB', 'KOTABUMI', 'ID', 'Lampung'),
('KBD', 'KALIBODRI', 'ID', 'Kendal'),
('KBR', 'KALIBARU', 'ID', 'Banyuwangi'),
('KBS', 'KEBASEN', 'ID', 'Banyumas'),
('KD', 'KEDIRI', 'ID', 'Kediri'),
('KDB', 'KEDUNGBANTENG', 'ID', 'Sragen'),
('KE', 'KARANG TENGAH', 'ID', 'Sukabumi'),
('KEJ', 'KEDUNGJATI', 'ID', 'Grobogan'),
('KG', 'KEDUNGGALAR', 'ID', 'Ngawi'),
('KGB', 'KETANGGUNGAN BARAT', 'ID', 'Brebes'),
('KGG', 'KETANGGUNGAN', 'ID', 'Brebes'),
('KGT', 'KARANGJATI', 'ID', 'Grobogan'),
('KIS', 'KISARAN', 'ID', 'Kisaran'),
('KIT', 'KALITIDU', 'ID', 'Bojonegoro'),
('KJ', 'KEMRAJEN', 'ID', 'Banyumas'),
('KK', 'KLAKAH', 'ID', 'Lumajang'),
('KLN', 'KUALANAMU', 'ID', 'Kualanamu'),
('KLT', 'KALISAT', 'ID', 'Jember'),
('KM', 'KEBUMEN', 'ID', 'Kebumen'),
('KNE', 'KARANGASEM', 'ID', 'Banyuwangi'),
('KNS', 'KRENGSENG', 'ID', 'Pekalongan'),
('KOP', 'KOTAPADANG', 'ID', 'Lubuk Linggau'),
('KPN', 'KEPANJEN', 'ID', 'Malang'),
('KPT', 'KERTAPATI', 'ID', 'Palembang'),
('KRN', 'KRIAN', 'ID', 'Sidoarjo'),
('KRO', 'KEBONROMO', 'ID', 'Sragen'),
('KRR', 'KARANGSARI', 'ID', 'Banyumas'),
('KRT', 'KRETEK', 'ID', 'Brebes'),
('KRW', 'KARANGSUWUNG', 'ID', 'Cirebon'),
('KSB', 'KESAMBEN', 'ID', 'Blitar'),
('KSL', 'KALISETAIL', 'ID', 'Banyuwangi'),
('KT', 'KLATEN', 'ID', 'Klaten'),
('KTA', 'KUTOARJO', 'ID', 'Kutoarjo'),
('KTK', 'KOTOK', 'ID', 'Jember'),
('KTM', 'KERTASEMAYA', 'ID', 'Indramayu'),
('KTS', 'KERTOSONO', 'ID', 'Nganjuk'),
('KWG', 'KAWUNGANTEN', 'ID', 'Cilacap'),
('KWN', 'KUTOWINANGUN', 'ID', 'Kebumen'),
('KYA', 'KROYA', 'ID', 'Cilacap'),
('LBG', 'LEBENG', 'ID', 'Cilacap'),
('LBJ', 'LEBAKJERO', 'ID', 'Garut'),
('LBP', 'LUBUKPAKAM', 'ID', 'Deli Serdang'),
('LG', 'LINGGAPURA', 'ID', 'Brebes'),
('LL', 'LELES', 'ID', 'Garut'),
('LLG', 'LUBUK LINGGAU', 'ID', 'Lubuk Linggau'),
('LMG', 'LAMONGAN', 'ID', 'Lamongan'),
('LMP', 'LIMAPULUH', 'ID', 'Medan'),
('LN', 'LANGEN', 'ID', 'Banjar'),
('LOS', 'LOSARI', 'ID', 'Cirebon'),
('LP', 'LAMPEGAN', 'ID', 'Cianjur'),
('LPN', 'LEMPUYANGAN', 'ID', 'Yogyakarta'),
('LR', 'LARANGAN', 'ID', 'Brebes'),
('LT', 'LAHAT', 'ID', 'Lahat'),
('LW', 'LAWANG', 'ID', 'Malang'),
('LWG', 'LUWUNG', 'ID', 'Cirebon'),
('MA', 'MAOS', 'ID', 'Cilacap'),
('MBM', 'MAMBANGMUDA', 'ID', 'Medan'),
('MBU', 'MERBAU', 'ID', 'Rantau Prapat'),
('MDN', 'MEDAN', 'ID', 'Medan'),
('ME', 'MUARA ENIM', 'ID', 'Muara Enim'),
('MER', 'MERAK', 'ID', 'Cilegon'),
('MGB', 'MANGGA BESAR', 'ID', 'Jakarta'),
('ML', 'MALANG', 'ID', 'Malang'),
('MLK', 'MALANG KOTA LAMA', 'ID', 'Malang'),
('MLW', 'MELUWUNG', 'ID', 'Cilacap'),
('MN', 'MADIUN', 'ID', 'Madiun'),
('MNJ', 'MANONJAYA', 'ID', 'Tasikmalaya'),
('MP', 'MARTAPURA', 'ID', 'Kotabumi'),
('MR', 'MOJOKERTO', 'ID', 'Mojokerto'),
('MRI', 'MANGGARAI', 'ID', 'Jakarta'),
('MSG', 'MASENG', 'ID', 'Bogor'),
('MSL', 'MUARASALING', 'ID', 'Lubuk Linggau'),
('MSR', 'MASARAN', 'ID', 'Sragen'),
('NBO', 'NGROMBO', 'ID', 'Grobogan'),
('NG', 'NAGREG', 'ID', 'Garut'),
('NJ', 'NGANJUK', 'ID', 'Nganjuk'),
('NT', 'NGUNUT', 'ID', 'Tulungagung'),
('NTG', 'NOTOG', 'ID', 'Banyumas'),
('PA', 'PARON', 'ID', 'Madiun'),
('PAT', 'PATUGURAN', 'ID', 'Brebes'),
('PB', 'PROBOLINGGO', 'ID', 'Probolinggo'),
('PBA', 'PERBAUNGAN', 'ID', 'Medan'),
('PBM', 'PRABUMULIH', 'ID', 'Prabumulih'),
('PDL', 'PADALARANG', 'ID', 'Bandung'),
('PGB', 'PEGADENBARU', 'ID', 'Subang'),
('PHA', 'PADANGHALABAN', 'ID', 'Medan'),
('PK', 'PEKALONGAN', 'ID', 'Pekalongan'),
('PLB', 'PLABUAN', 'ID', 'Pekalongan'),
('PLD', 'PLERED', 'ID', 'Purwakarta'),
('PME', 'PAMINGKE', 'ID', 'Medan'),
('PML', 'PEMALANG', 'ID', 'Pemalang'),
('PNJ', 'PANINJAWAN', 'ID', 'Baturaja'),
('PPK', 'PRUPUK', 'ID', 'Tegal'),
('PPR', 'PAPAR', 'ID', 'Kediri'),
('PRA', 'PERLANAAN', 'ID', 'Medan'),
('PRB', 'PREMBUN', 'ID', 'Kebumen'),
('PRK', 'PARUNGKUDA', 'ID', 'Sukabumi'),
('PRP', 'PARUNGPANJANG', 'ID', 'Bogor'),
('PS', 'PASURUAN', 'ID', 'Pasuruan'),
('PSE', 'PASAR SENEN', 'ID', 'Jakarta'),
('PTA', 'PETARUKAN', 'ID', 'Pemalang'),
('PUR', 'PULURAJA', 'ID', 'Medan'),
('PWK', 'PURWAKARTA', 'ID', 'Purwakarta'),
('PWS', 'PURWOSARI', 'ID', 'Solo'),
('PWT', 'PURWOKERTO', 'ID', 'Purwokerto'),
('RAP', 'RANTAU PRAPAT', 'ID', 'Rantau Prapat'),
('RBG', 'RANDUBLATUNG', 'ID', 'Blora'),
('RBP', 'RAMBIPUJI', 'ID', 'Jember'),
('RCK', 'RANCAEKEK', 'ID', 'Bandung'),
('RGP', 'ROGOJAMPI', 'ID', 'Banyuwangi'),
('RH', 'RENDEH', 'ID', 'Bandung'),
('RJP', 'RAJAPOLAH', 'ID', 'Tasikmalaya'),
('RK', 'RANGKAS BITUNG', 'ID', 'Lebak'),
('RPH', 'RAMPAH', 'ID', 'Serdang Bedagai'),
('SAD', 'SADANG', 'ID', 'Purwakarta'),
('SBI', 'SURABAYA PASAR TURI', 'ID', 'Surabaya'),
('SBJ', 'SEIBEJANGKAR', 'ID', 'Medan'),
('SBP', 'SUMBERPUCUNG', 'ID', 'Malang'),
('SD', 'SURODADI', 'ID', 'Semarang'),
('SDA', 'SIDOARJO', 'ID', 'Sidoarjo'),
('SDR', 'SIDAREJA', 'ID', 'Cilacap'),
('SDU', 'SINDANGLAUT', 'ID', 'Cirebon'),
('SG', 'SERANG', 'ID', 'Serang'),
('SGG', 'SONGGOM', 'ID', 'Brebes'),
('SGU', 'SURABAYA GUBENG', 'ID', 'Surabaya'),
('SI', 'SUKABUMI', 'ID', 'Sukabumi'),
('SIR', 'SIANTAR', 'ID', 'Pematang Siantar'),
('SK', 'SOLOJEBRES', 'ID', 'Solo'),
('SKP', 'SIKAMPUH', 'ID', 'Cilacap'),
('SLO', 'SOLOBALAPAN', 'ID', 'Solo'),
('SLW', 'SLAWI', 'ID', 'Tegal'),
('SMB', 'SEMBUNG', 'ID', 'Jombang'),
('SMC', 'SEMARANGPONCOL', 'ID', 'Semarang'),
('SMT', 'SEMARANGTAWANG', 'ID', 'Semarang'),
('SNA', 'SAUNGNAGA', 'ID', 'Lahat'),
('SPH', 'SUMPIUH', 'ID', 'Banyumas'),
('SPJ', 'SEPANJANG', 'ID', 'Sidoarjo'),
('SR', 'SRAGEN', 'ID', 'Sragen'),
('SRD', 'SARADAN', 'ID', 'Madiun'),
('SRI', 'SRAGI', 'ID', 'Pekalongan'),
('SRJ', 'SUMBERREJO', 'ID', 'Bojonegoro'),
('SRW', 'SRUWENG', 'ID', 'Kebumen'),
('STL', 'SENTOLO', 'ID', 'Yogyakarta'),
('SUM', 'SUMBERLAWANG', 'ID', 'Yogyakarta'),
('SWD', 'SUMBERWADUNG', 'ID', 'Banyuwangi'),
('SWT', 'SROWOT', 'ID', 'Klaten'),
('TA', 'TULUNGAGUNG', 'ID', 'Tulungagung'),
('TAL', 'TALUN', 'ID', 'Blitar'),
('TBI', 'TEBING TINGGI', 'ID', 'Medan'),
('TBK', 'TAMBAK', 'ID', 'Banyumas'),
('TG', 'TEGAL', 'ID', 'Tegal'),
('TGL', 'TANGGUL', 'ID', 'Jember'),
('TGN', 'TANJUNG', 'ID', 'Brebes'),
('TGR', 'TEMUGURUH', 'ID', 'Banyuwangi'),
('THB', 'TANAH ABANG', 'ID', 'Jakarta'),
('TI', 'TEBING TINGGI', 'ID', 'Lahat'),
('TIS', 'TERISI', 'ID', 'Indramayu'),
('TJS', 'TANJUNGRASA', 'ID', 'Subang'),
('TLY', 'TULUNGBUYUT', 'ID', 'Lampung'),
('TNB', 'TANJUNGBALAI', 'ID', 'Tanjung Balai'),
('TNG', 'TANGERANG', 'ID', 'Tangerang'),
('TNK', 'TANJUNGKARANG', 'ID', 'Lampung'),
('TPK', 'TANJUNG PRIUK', 'ID', 'Jakarta'),
('TSM', 'TASIKMALAYA', 'ID', 'Tasikmalaya'),
('TW', 'TELAWA', 'ID', 'Boyolali'),
('UI', 'UNIVERSITAS INDONESI', 'ID', 'Depok'),
('UJM', 'UJANMAS', 'ID', 'Muara Enim'),
('UJN', 'UJUNGNEGORO', 'ID', 'Batang'),
('WB', 'WARUNG BANDREK', 'ID', 'Garut'),
('WDW', 'WARUDUWUR', 'ID', 'Cirebon'),
('WG', 'WLINGI', 'ID', 'Blitar'),
('WIL', 'WILANGAN', 'ID', 'Nganjuk'),
('WK', 'WALIKUKUN', 'ID', 'Ngawi'),
('WLR', 'WALERI', 'ID', 'Kendal'),
('WNS', 'WONOSARI', 'ID', 'Kebumen'),
('WO', 'WONOKROMO', 'ID', 'Surabaya'),
('WR', 'WARU', 'ID', 'Sidoarjo'),
('WT', 'WATES', 'ID', 'Yogyakarta'),
('YK', 'YOGYAKARTA', 'ID', 'Yogyakarta');

--
-- Trigger `list_stasiun`
--
DELIMITER $$
CREATE TRIGGER `deleteStasiun` AFTER DELETE ON `list_stasiun` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi_stasiun);
    UPDATE versi_stasiun SET versi = `version`+1;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertStasiun` AFTER INSERT ON `list_stasiun` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi_stasiun);
    UPDATE versi_stasiun SET versi = `version`+1;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateStasiun` AFTER UPDATE ON `list_stasiun` FOR EACH ROW BEGIN
    DECLARE `version` INT;
    SET `version` = (SELECT versi FROM versi_stasiun);
    UPDATE versi_stasiun SET versi = `version`+1;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maskapai`
--

CREATE TABLE `maskapai` (
  `kode_maskapai` varchar(10) NOT NULL,
  `nama_maskapai` varchar(100) NOT NULL,
  `logo_maskapai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maskapai`
--

INSERT INTO `maskapai` (`kode_maskapai`, `nama_maskapai`, `logo_maskapai`) VALUES
('AIR', 'Air  Asia', 'assets/logo_maskapai/AIR.png'),
('CIT', 'Citilink', 'assets/logo_maskapai/CIT.png'),
('GAR', 'Garuda', 'assets/logo_maskapai/GAR.png'),
('LIO', 'Lion Air', 'assets/logo_maskapai/LIO.png'),
('SRI', 'Sriwijaya', 'assets/logo_maskapai/SRI.png'),
('TRA', 'TransNusa', 'assets/logo_maskapai/TRA.png'),
('TRI', 'Trigana', 'assets/logo_maskapai/TRI.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(5) NOT NULL,
  `kode_penerbangan` int(5) NOT NULL,
  `kode_pemesan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `kode_penerbangan`, `kode_pemesan`) VALUES
(1, 85766, '0000-00-00'),
(2, 85766, '0000-00-00'),
(7, 85766, '0000-00-00'),
(8, 233, '0000-00-00'),
(9, 23, '0000-00-00'),
(10, 2233, '2019-08-01'),
(11, 28912, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer_passenger_kai`
--
ALTER TABLE `customer_passenger_kai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_booking_kai`
--
ALTER TABLE `data_booking_kai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_airport`
--
ALTER TABLE `list_airport`
  ADD PRIMARY KEY (`id_airport`);

--
-- Indeks untuk tabel `list_stasiun`
--
ALTER TABLE `list_stasiun`
  ADD PRIMARY KEY (`code`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `customer_passenger_kai`
--
ALTER TABLE `customer_passenger_kai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `data_booking_kai`
--
ALTER TABLE `data_booking_kai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `list_airport`
--
ALTER TABLE `list_airport`
  MODIFY `id_airport` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
