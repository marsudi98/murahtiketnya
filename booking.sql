-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 04:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `kode_bandara` varchar(10) NOT NULL,
  `nama_bandara` varchar(100) NOT NULL,
  `lokasi_bandara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
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
-- Table structure for table `bank`
--
-- in use(#1932 - Table 'booking.bank' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'booking.bank' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `customer_passenger_kai`
--
-- in use(#1932 - Table 'booking.customer_passenger_kai' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'booking.customer_passenger_kai' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `data_booking_kai`
--
-- in use(#1932 - Table 'booking.data_booking_kai' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'booking.data_booking_kai' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `list_airport`
--
-- in use(#1932 - Table 'booking.list_airport' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'booking.list_airport' doesn't exist in engine)

--
-- Triggers `list_airport`
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
-- Table structure for table `list_stasiun`
--

CREATE TABLE `list_stasiun` (
  `code` varchar(20) NOT NULL,
  `nama_stasiun` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_stasiun`
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
-- Triggers `list_stasiun`
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
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `kode_maskapai` varchar(10) NOT NULL,
  `nama_maskapai` varchar(100) NOT NULL,
  `logo_maskapai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maskapai`
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
-- Table structure for table `pemesanan`
--
-- in use(#1932 - Table 'booking.pemesanan' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'booking.pemesanan' doesn't exist in engine)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`kode_bandara`);

--
-- Indexes for table `list_stasiun`
--
ALTER TABLE `list_stasiun`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`kode_maskapai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
