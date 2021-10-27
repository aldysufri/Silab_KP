-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 03:23 AM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sila_kemas`
--
CREATE DATABASE IF NOT EXISTS `sila_kemas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sila_kemas`;

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` text NOT NULL,
  `merk_alat` text NOT NULL,
  `jumlah_alat` int(11) NOT NULL,
  `satuan_alat` text NOT NULL,
  `tgl_masuk_alat` date NOT NULL,
  `lokasi_alat` text NOT NULL,
  `kondisi_alat` text NOT NULL,
  `foto_alat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `merk_alat`, `jumlah_alat`, `satuan_alat`, `tgl_masuk_alat`, `lokasi_alat`, `kondisi_alat`, `foto_alat`) VALUES
(1493959178, 'Mikroskop elektrik', 'mikroskop', 5, 'unit', '2016-11-06', 'Laboratorium Epidemiologi', 'Baik', 'alat_1493959178.jpg'),
(1493894925, 'Mikroskop monokuler', '.', 15, 'unit', '2017-05-05', 'Laboratorium Epidemiologi', 'Baik', 'alat_1493958751.jpg'),
(1493959349, 'Binocular  Microscope with camera digital', 'Axio', 1, 'unit', '2016-03-22', 'Laboratorium Epidemiologi', 'Baik', 'alat_1493959349.jpg'),
(1493959488, 'Audiometer Clinical ', 'Interacoustic-AD 2261', 1, 'unit', '2016-03-22', 'Laboratorium K3', 'Baik', 'alat_1493959488.jpg'),
(1493959718, 'Digital Spirometer', 'Cosmed Pony FX', 1, 'unit', '2016-04-06', 'Laboratorium K3', 'Baik', 'alat_1493959718.jpg'),
(1493959909, 'Reaction timer', 'Lakassidaya 77', 1, 'unit', '2007-07-17', 'Laboratorium K3', 'Baik', 'alat_1493959909.jpg'),
(1493960014, 'Sound level meter', 'Lutron', 4, 'unit', '2010-05-12', 'Laboratorium K3', 'Baik', 'alat_1493960014.jpg'),
(1493960425, '4 in 1 environmental meter', 'extech', 1, 'unit', '2010-05-20', 'Laboratorium K3', 'Baik', 'alat_1493960425.jpg'),
(1493960541, '5 in 1 environmental meter', 'mextec', 1, 'unit', '2010-05-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1493960541.jpg'),
(1494203188, 'Questemp 34', 'Quest Technologies', 1, 'unit', '2006-07-19', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494203189.jpg'),
(1494203953, 'Kitchen scale', 'No name', 5, 'unit', '2012-06-16', 'Laboratorium Gizi', 'Baik', 'alat_1494203953.jpg'),
(1494472087, 'Food Model', ' ', 1, 'Set', '2017-05-11', 'Laboratorium Gizi', ' ', 'alat_1494472087.jpg'),
(1494472264, 'Hygrometer', ' ', 2, ' Buah', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472264.jpg'),
(1494472319, 'GPS', 'Garmin', 1, 'Buah', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472319.jpg'),
(1494472407, 'Air pollution detection : Impinger', 'Lamotte', 1, 'set', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472407.jpg'),
(1494472441, 'Beaker glass 250 ml', 'Pyrex', 10, 'Buah', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472441.jpg'),
(1494472494, 'Fire Turn Out Gear', ' ', 1, 'Set', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494472494.jpg'),
(1494472537, 'COD plus colorimeter', 'Lamotte', 1, 'Set', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472537.jpg'),
(1494472579, 'COD Reactor', 'Hach', 1, 'Set', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494472579.jpg'),
(1494476530, 'Sension probe', 'Hach', 2, 'Buah', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494476530.jpg'),
(1494476596, 'Botol sampling air vertikal', 'Model HSW-220', 1, 'Set', '2017-04-12', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494476596.jpg'),
(1494476808, 'Carbon Monoxide meter', 'EXTECH CO10', 1, 'Unit', '2016-03-04', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494476808.jpg'),
(1494476891, 'Amtast 8 in 1, uji kualitas air', 'Amtast EC-900', 1, 'Buah', '2017-04-01', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494476891.jpg'),
(1518661892, 'Pipet ukur 1 ml', 'pyrex', 10, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518661892.jpg'),
(1494477280, 'Instrument case spectro portable', 'Hach', 1, 'Set', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494477280.jpg'),
(1494477413, 'Audiometri', 'Maico', 1, 'Set', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494477413.jpg'),
(1494477465, 'Autoclave sterilisator', '2 All American Autoclave 75x', 1, 'Set', '2016-05-01', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494477465.jpg'),
(1494477508, 'Luxmeter', 'Krisbow', 2, 'Buah', '2017-04-01', 'Laboratorium K3', 'Baik', 'alat_1494477508.jpg'),
(1494477551, 'Anemometer', 'Lutron AM-4200', 1, 'Buah', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494477551.jpg'),
(1494477996, 'Thermometer Higrometer', 'HTC-2', 2, 'Set', '2017-04-01', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494477996.jpg'),
(1494478129, 'Sarung tangan', ' ', 3, 'Pasang', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494478129.jpg'),
(1494478537, 'Earplug', ' ', 10, 'Buah', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494478537.jpg'),
(1494478665, 'Kacamata google', ' ', 2, 'Buah', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494478665.jpg'),
(1494479634, 'Safety shoes', ' ', 1, 'Pasang', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494479634.jpg'),
(1494479752, 'Face Shield', ' ', 2, 'Buah', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494479752.jpg'),
(1494479801, 'Safety helm', ' ', 2, 'Buah', '2017-05-11', 'Laboratorium K3', 'Baik', 'alat_1494479801.jpg'),
(1494479863, 'Centrifudge', 'Hettich-Rotoflix 32A', 1, 'Set', '2016-03-22', 'Laboratorium Biomedik', 'Baik', 'alat_1494479863.jpg'),
(1494479899, 'Exicator', ' ', 1, 'Unit', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494479899.jpg'),
(1494479951, 'Kjeldahl System', 'BUCHI K-355, K-425, Chiller F-108', 1, 'Set', '2016-04-06', 'Laboratorium Biomedik', 'Baik', 'alat_1494479951.jpg'),
(1494479994, 'Lemari asam', ' ', 1, 'Unit', '2017-05-11', 'Laboratorium Biomedik', 'Baik', 'alat_1494479994.jpg'),
(1494480515, 'Thermostatic', 'Memmert', 1, 'Unit', '2017-05-11', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494480515.jpg'),
(1494557038, 'Buret mikro 5 ml', 'pyrex', 2, 'buah', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494557038.jpg'),
(1494557294, 'Buret mikro 10 ml', 'pyrex', 3, 'buah', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1494557294.jpg'),
(1496023594, 'Timbangan injak', 'Camry', 6, 'buah', '2014-08-13', 'Laboratorium Gizi', 'Baik', 'alat_1496023597.jpg'),
(1496023909, 'Mikrotoa (Alat ukur tinggi badan)', 'GEA', 3, 'buah', '2012-08-08', 'Laboratorium Gizi', 'Baik', 'alat_1496023910.jpg'),
(1496024013, 'Pita lila', '-', 10, 'buah', '2010-07-14', 'Laboratorium Gizi', 'Baik', 'alat_1496024013.jpg'),
(1496024363, 'Hemoglobinometer', 'Apel-HG220', 1, 'set', '2016-04-06', 'Laboratorium Biomedik', 'Baik', 'alat_1496024363.jpg'),
(1496024674, 'Tensimeter raksa', 'Riester', 3, 'set', '2012-09-12', 'Laboratorium Biomedik', 'Baik', 'alat_1496024674.jpg'),
(1496024878, 'Nesco 4 in 1', 'Nesco', 3, 'set', '2017-04-27', 'Laboratorium Biomedik', 'Baik', 'alat_1496025190.jpg'),
(1496025072, 'Tensimeter digital', 'Omron', 3, 'set', '2017-04-26', 'Laboratorium Biomedik', 'Baik', 'alat_1496025072.jpg'),
(1496367544, 'Home theater 5.1 inch', 'sony', 1, 'set', '2017-04-11', 'Laboratorium Audio Visual', 'Baik', 'alat_1496367544.jpg'),
(1496367684, 'Kamera DSLR 750 D Kit2', 'Canon', 1, 'set', '2017-04-11', 'Laboratorium Audio Visual', 'Baik', 'alat_1496367769.jpg'),
(1496368235, 'Waterbath', '.', 1, 'set', '2015-08-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1496368235.jpg'),
(1496368357, 'Body fat monitor ', 'Omron', 2, 'unit', '2015-07-17', 'Laboratorium Gizi', 'Baik', 'alat_1496368357.jpg'),
(1496368669, 'Metronome', 'Beyer', 1, 'unit', '2010-08-12', 'Laboratorium Gizi', 'Baik', 'alat_1496368669.jpg'),
(1496368899, 'Metronome', 'Joyo', 1, 'unit', '2010-06-16', 'Laboratorium Gizi', 'Baik', 'alat_1496368899.jpg'),
(1496369009, 'Metronome', 'Cherub', 1, 'unit', '2010-06-16', 'Laboratorium Gizi', 'Baik', 'alat_1496369009.jpg'),
(1496372837, 'Handycam', 'Sony', 1, 'unit', '2014-08-21', 'Laboratorium Audio Visual', 'Baik', 'alat_1496372837.jpg'),
(1496373027, 'Dry Cabinet  WD-150 145Lt/2Sec', 'Wonderful', 1, 'unit', '2016-10-20', 'Laboratorium Audio Visual', 'Baik', 'alat_1496373027.jpg'),
(1496373244, 'Monitor 55', 'LG ', 1, 'unit', '2016-12-17', 'Laboratorium Audio Visual', 'Baik', 'alat_1496373244.jpg'),
(1496373335, 'Tripod', 'Excell', 1, 'unit', '2016-12-17', 'Laboratorium Audio Visual', 'Baik', 'alat_1496373335.jpg'),
(1496373846, 'Mikropipet', 'Socorox', 1, 'buah', '2013-09-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1496373846.jpg'),
(1496374027, 'Refraktometer ', 'Atago', 1, 'buah', '2009-08-11', 'Laboratorium Gizi', 'Baik', 'alat_1496374027.jpg'),
(1496374168, 'Stetoskop', 'Riester', 7, 'buah', '2007-07-06', 'Laboratorium Biomedik', 'Baik', 'alat_1496374168.jpg'),
(1506913788, 'PH meter', 'ATC 2011', 2, 'unit', '2017-06-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1506913788.jpg'),
(1506914479, 'Vibrasi meter', 'lutron VB-8201HA', 1, 'unit', '2017-09-13', 'Laboratorium K3', 'Baik', 'alat_1506914479.jpg'),
(1518661950, 'Pipet ukur 5 ml', 'pyrex', 10, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518661950.jpg'),
(1518662009, 'Pipet ukur 10 ml', 'pyrex', 10, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518662009.jpg'),
(1518662281, 'Gelas ukur 5 ml', 'pyrex', 10, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518662281.jpg'),
(1518662378, 'Gelas ukur 25 ml', 'pyrex', 10, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518662378.jpg'),
(1518662474, 'Tabung durham', 'pyrex', 100, 'buah', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1518662474.jpg'),
(1518663383, 'APAR powder kapasitas 2 kg', 'Guard all', 4, 'tabung', '2017-10-20', 'Laboratorium K3', 'Baik', 'alat_1518663383.jpg'),
(1518663432, 'Apar powder 3,5 kg', 'Yamato', 1, 'tabung', '2017-10-20', 'Laboratorium K3', 'Baik', 'alat_1518663432.jpg'),
(1518663478, 'APAR powder 3 kg', 'Anugrah', 1, 'tabung', '2017-10-20', 'Laboratorium K3', 'Baik', 'alat_1518663478.jpg'),
(1518663530, 'APAR powder 4,5 kg', 'Servvo', 1, 'tabung', '2017-10-20', 'Laboratorium K3', 'Baik', 'alat_1518663530.jpg'),
(1531184837, 'HIGH VOLUME AIR SAMPLER', 'STAFLEX TFIA-2 Series', 1, 'unit', '2017-06-28', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1531184837.jpg'),
(1535603805, 'Hemometer Sahli', 'Hemometer', 15, 'set', '2007-08-15', 'Laboratorium Biomedik', 'Baik', 'alat_1535603805.jpg'),
(1535939799, 'Multi gas detector (CO2,H2S,CH4)', 'SA', 1, 'set', '2018-05-08', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1535939799.jpg'),
(1535940684, 'UA Sure', 'UA sure', 1, 'unit', '2015-07-03', 'Laboratorium Biomedik', 'Baik', 'alat_1535940684.jpg'),
(1537236488, 'Tripod Camera', 'tripod', 1, 'unit', '2017-08-10', 'Laboratorium Audio Visual', 'Baik', 'alat_1537236488.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` text NOT NULL,
  `jumlah_bahan` int(11) NOT NULL,
  `satuan_bahan` text NOT NULL,
  `tgl_masuk_bahan` date NOT NULL,
  `lokasi_bahan` text NOT NULL,
  `kondisi_bahan` text NOT NULL,
  `foto_bahan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `jumlah_bahan`, `satuan_bahan`, `tgl_masuk_bahan`, `lokasi_bahan`, `kondisi_bahan`, `foto_bahan`) VALUES
(1494292349, 'Amonium chloride(NH4Cl)', 1000, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494292199, 'AgNo3', 50, 'gram', '2015-05-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494292250, 'Allylthiourea', 100, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'baik', 'default'),
(1494292410, 'Amylum', 50, 'gram', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494292471, 'Asam Oksalat', 800, 'mg', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494292522, 'CaCl', 200, 'mg', '2015-05-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494292703, 'EDTA', 3, 'botol', '2015-05-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293086, 'FeCl', 250, 'gram', '2015-05-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293132, 'Giemsa', 2, 'botol', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293173, 'Kalium Bikromat (K2Cr2O7)', 500, 'gram', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293245, 'K2Cr04', 500, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293302, 'KH2PO4', 250, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494293818, 'KI', 400, 'gram', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494294052, 'Kalium Permanganat', 800, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494294102, 'NaCl', 1000, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494553786, 'NaOH teknis', 1750, 'gram', '2015-05-22', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494553840, 'NaOH pa', 1500, 'gram', '2015-05-21', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494553882, 'Na2HPO4', 1000, 'gram', '2015-05-21', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494553922, 'Na2Oksalat', 250, 'gram', '2015-05-13', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494553955, 'Glukosa powder', 1000, 'gram', '2015-05-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554098, 'Na2S2O3', 2000, 'gram', '2015-05-14', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554142, 'Sulfanilamide', 100, 'ml', '2015-05-21', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554240, 'Dettol', 5, 'botol', '2016-10-21', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554399, 'Pasir Silika', 20, 'kg', '2016-10-19', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518658781, 'Media BGLB', 500, 'gram', '2017-05-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554628, 'Stik glukosa', 4, 'dos', '2017-03-23', 'Laboratorium Biomedik', 'Baik', 'default'),
(1494554665, 'Stik kolesterol', 5, 'dos', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494554700, 'Stik Trigliserid', 5, 'dos', '2016-11-18', 'Laboratorium Biomedik', 'Baik', 'default'),
(1494554758, 'Stik uric acid', 4, 'dos', '2016-09-23', 'Laboratorium Biomedik', 'Baik', 'default'),
(1494556541, 'Reagen Golongan Darah', 3, 'set', '2016-11-18', 'Laboratorium Biomedik', 'Baik', 'default'),
(1494554902, 'Kertas Golongan Darah', 2, 'pack', '2016-11-18', 'Laboratorium Biomedik', 'Baik', 'default'),
(1494554955, 'kertas saring whatman', 2, 'dos', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555061, 'Batre Alkaline Aa', 50, 'buah', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555276, 'Batre Alkaline Aaa', 40, 'buah', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555387, 'media nutrient agar', 2, 'kg', '2016-12-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555477, 'media endo agar', 1, 'kg', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555538, 'Media Blood Agar Plate', 1, 'kg', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494555982, 'Standard Fe 1000 ppm', 2, 'buah', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556032, 'Standard amonia 1000 ppm', 2, 'botol', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556087, 'Hidroksolamin', 2, 'botol', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556143, 'Buffer ph 10', 4, 'liter', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556201, 'Fenantrolin', 2, 'botol', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556247, 'Asam Phospat Pa', 1, 'liter', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556327, 'MnSO4 Pa', 1, 'kg', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556402, 'Pasir zeolit untuk water treatment', 50, 'kg', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556449, 'Stik Urin 18 Parameter', 5, 'dos', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556611, 'Alkohol 96%', 30, 'liter', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556675, 'Indikator phenol ptialin', 1, 'botol', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1494556716, 'Indikator Methyl Orange', 1, 'botol', '2016-11-18', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1516236282, 'Aquades', 200, 'liter', '2017-09-15', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518658833, 'Media TSIA (Triple Sugar Iron Agar)', 500, 'gram', '2017-05-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518658899, 'Potassium Hydroxide Pellets for analysis', 500, 'gram', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518658976, 'Indikator BTB (Bromothymol Monohydrate)', 5, 'gram', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659066, 'Peptone Himedia', 1000, 'gram', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659108, 'Glukosa pro analisa Himedia', 500, 'gram', '2017-11-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659225, 'Lactosa (lactosemonohydrate)', 1000, 'gram', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659302, 'Sukrosa pro analisa Himedia', 1000, 'gram', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659419, 'Maltosa pro analisa', 500, 'gram', '2017-10-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659703, 'Urea agar base (merck)', 500, 'gram', '2017-10-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518659965, 'Macconkey agar (merck)', 500, 'gram', '2017-04-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660182, 'Media SIM Agar (merck)', 500, 'gram', '2017-04-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660332, 'Media Simon Sitrat (Himedia)', 500, 'gram', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660382, 'Aquades', 500, 'liter', '2017-04-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660445, 'Reagen golongan darah (tulip)', 4, 'set', '2017-10-20', 'Laboratorium Biomedik', 'Baik', 'default'),
(1518660476, 'Kertas golongan darah', 3, 'pack', '2017-10-20', 'Laboratorium Biomedik', 'Baik', 'default'),
(1518660688, 'Standard Fe 1000 ppm', 500, 'ml', '2017-08-23', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660753, 'Kertas saring whatman grade 40 diameter 125 mm', 1, 'pack', '2017-04-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518660916, 'zeolit granule', 40, 'kg', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518661026, 'Dettol desinfektan', 10, 'botol', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518661078, 'Alkohol 96%', 50, 'liter', '2017-10-20', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518661152, 'Masker medis sensimarc', 8, 'dus', '2017-04-24', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default'),
(1518661210, 'Sarung tangan high temperature krisbow', 4, 'buah', '2017-04-24', 'Laboratorium K3', 'Baik', 'default'),
(1518661260, 'Sarung tangan latex steril', 10, 'dus', '2018-10-23', 'Laboratorium K3', 'Baik', 'default'),
(1518661374, 'Kertas stiker f4', 4, 'pack', '2017-04-24', 'Laboratorium Audio Visual', 'Baik', 'default'),
(1518661422, 'Kertas cetak foto', 4, 'pack', '2017-04-24', 'Laboratorium Audio Visual', 'Baik', 'default'),
(1535685104, 'Potato Dextrosa Agar', 500, 'gram', '2017-10-17', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_kegiatan` time NOT NULL,
  `ruang_kegiatan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal_kegiatan`, `jam_kegiatan`, `ruang_kegiatan`) VALUES
(1493883698, 'Praktikum keselamatan dan kesehatan kerja (pengukuran suhu lingkungan)', '2017-05-10', '09:30:00', 'F5-105'),
(1493960836, 'Praktikum Laboratorium kesehatan lingkungan (pengukuran kualitas air)', '2017-05-09', '07:30:00', 'F5-105'),
(1493960943, 'Praktikum mikrobiologi dan parasitologi', '2017-05-11', '08:00:00', 'F5-104'),
(1493961008, 'Praktikum Promosi kesehatan (Pengembangan Media)', '2017-05-11', '07:30:00', 'F5-101'),
(1495163026, 'Praktikum Laboratorium kesehatan lingkungan (MPN Coli)', '2017-05-19', '09:30:00', 'F5-105'),
(1495163505, 'Praktikum keselamatan dan kesehatan kerja (pengukuran kualitas udara)', '2017-05-19', '09:30:00', 'F5-104'),
(1496373422, 'Praktikum Laboratorium kesehatan lingkungan (pengukuran faktor fisik)', '2017-06-06', '07:30:00', 'F5-105'),
(1504053911, 'Praktikum Laboratorium kesehatan lingkungan', '2017-08-30', '11:00:00', 'F5.105'),
(1504053961, 'Praktikum keselamatan dan kesehatan kerja ', '2017-09-04', '20:45:00', 'F5.105'),
(1504053996, 'Praktikum keselamatan dan kesehatan kerja', '2017-09-05', '11:00:00', 'F5.105'),
(1507680309, 'Praktikum Laboratorium kesehatan lingkungan ', '2017-10-11', '11:00:00', 'F5.105'),
(1535508061, 'Praktikum kesling (pengenalan alat pengukuran kualitas udara)', '2018-08-29', '11:00:00', 'Laboratorium Kesehatan Lingkungan'),
(1535939076, 'Praktikum keselamatan dan kesehatan kerja (tensi dan antropometri)', '2018-09-03', '08:00:00', 'laboratorium K3'),
(1535939115, 'Praktikum keselamatan dan kesehatan kerja (reaction timer)', '2018-09-06', '11:00:00', 'laboratorium K3'),
(1536024794, 'Praktikum kesehatan lingkungan ( pengukuran kualitas udara sekitar Unnes)', '2018-09-04', '11:00:00', 'Kegiatan lapangan'),
(1536025114, 'Praktikum Penentuan Status Gizi', '2018-09-13', '13:00:00', 'Laboratoium Biomedis'),
(1536025144, 'Praktikum Penentuan Status Gizi', '2018-09-14', '08:00:00', 'Laboratoium Biomedis'),
(1536025250, 'Praktikum keselamatan dan kesehatan kerja (Vibrasi)', '2018-09-13', '08:00:00', 'laboratorium K3'),
(1536025299, 'Praktikum keselamatan dan kesehatan kerja (Kapasitas vital paru)', '2018-09-20', '08:00:00', 'laboratorium K3'),
(1536025439, 'Praktikum keselamatan dan kesehatan kerja (kebisingan)', '2018-10-04', '08:00:00', 'laboratorium K3'),
(1536025566, 'Surveilans K3', '2018-09-05', '08:00:00', 'laboratorium K3'),
(1536025609, 'Rodentologi Kesmas', '2018-09-05', '08:00:00', 'Laboratorium Epidemiologi'),
(1536025669, 'Public Health Rodentology', '2018-09-05', '11:00:00', 'Laboratorium Epidemiologi'),
(1537750464, 'Praktikum keselamatan dan kesehatan kerja (pencahayaan)', '2018-09-27', '08:00:00', 'laboratorium K3'),
(1539652618, 'Praktikum kesehatan lingkungan ( pengukuran kualitas air sekitar Unnes)', '2018-10-17', '09:00:00', 'Laboratorium Kesehatan Lingkungan'),
(1539653040, 'Praktikum keselamatan dan kesehatan kerja (Audiometri)', '2018-10-18', '08:00:00', 'laboratorium K3'),
(1539653105, 'Praktikum kesehatan lingkungan ( Uji kualitas makanan)', '2018-10-24', '11:00:00', 'Laboratorium Kesehatan Lingkungan'),
(1542263907, 'Praktikum Laboratorium K3 (Alat pelindung diri)', '2018-11-15', '08:00:00', 'laboratorium K3');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_alat_bahan`
--

CREATE TABLE `peminjaman_alat_bahan` (
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `type_barang` text NOT NULL,
  `nama` text NOT NULL,
  `nim_nip` text NOT NULL,
  `jurusan_prodi` text NOT NULL,
  `no_hp` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keperluan` text NOT NULL,
  `tanggal_start` date NOT NULL,
  `jam_start` time NOT NULL,
  `tanggal_end` date NOT NULL,
  `jam_end` time NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman_alat_bahan`
--

INSERT INTO `peminjaman_alat_bahan` (`id_peminjaman`, `id_barang`, `type_barang`, `nama`, `nim_nip`, `jurusan_prodi`, `no_hp`, `jumlah`, `keperluan`, `tanggal_start`, `jam_start`, `tanggal_end`, `jam_end`, `status`) VALUES
(1496728355, 1496024013, 'alat', 'Faiqotunnuriyah', '6411416005', 'IKM', '085713080394', 3, 'Kuliah Dasar Gizi Kesehatan Masyarakat', '2017-06-06', '08:00:00', '2017-06-07', '13:00:00', 'clear'),
(1496728156, 1496023594, 'alat', 'Faiqotunnuriyah', '6411416005', 'IKM', '085713080394', 2, 'Kuliah Dasar Gizi Kesehatan Masyarakat', '2017-06-06', '08:00:00', '2017-06-07', '13:00:00', 'clear'),
(1496728017, 1496023909, 'alat', 'Faiqotunnuriyah', '6411416005', 'IKM', '085713080394', 2, 'Kuliah Dasar Gizi Kesehatan Masyarakat', '2017-06-06', '08:00:00', '2017-06-07', '13:00:00', 'clear'),
(1496633282, 1493959718, 'alat', 'Miana Ciputra Handari', '6411413003', 'IKM', '087737879702', 1, 'Penelitian', '2017-08-07', '13:00:00', '2017-08-07', '13:00:00', 'clear'),
(1496372109, 1494203188, 'alat', 'Bilqis Filayati', '6411414054', 'IKM', '089665861142', 1, 'Praktikum kesehatan lingkungan', '2017-06-07', '07:30:00', '2017-06-08', '08:00:00', 'reject'),
(1496371173, 1493959178, 'alat', 'roziq bahtiar', '5302411222', 'PTIK', '085740898694', 1, 'Penelitian', '2017-06-03', '09:45:00', '2017-06-07', '21:45:00', 'reject'),
(1496369339, 1496367684, 'alat', 'Sri Rahayu', '6411414102', 'IKM', '85799459690', 1, 'Kuliah Pengembangan Media', '2017-06-02', '09:00:00', '2017-06-05', '09:00:00', 'clear'),
(1496728984, 1493960014, 'alat', 'Devi Sharaswati', '6411414060', 'IKM', '85788881596', 1, 'praktikum kesehatan lingkungan pengukuran lingkungan fisik', '2017-06-06', '10:00:00', '2017-06-09', '10:00:00', 'clear'),
(1496729082, 1494203188, 'alat', 'Devi Sharaswati', '6411414060', 'IKM', '085788881596', 1, 'praktikum kesehatan lingkungan pengukuran lingkungan fisik', '2017-06-06', '10:00:00', '2017-06-09', '10:00:00', 'clear'),
(1496729268, 1494477508, 'alat', 'Devi Sharaswati', '085788881598', 'IKM', '085788881598', 1, 'praktikum kesehatan lingkungan pengukuran lingkungan fisik', '2017-06-06', '10:00:00', '2017-06-09', '10:00:00', 'clear'),
(1497233860, 1494476808, 'alat', 'Mei Ernawati', '6411413053', 'IKM', '087887220026', 1, 'Studi pendahuluan skripsi', '2017-06-13', '10:00:00', '2017-06-14', '10:00:00', 'clear'),
(1497350950, 1493959178, 'alat', 'ssds', '3434343434', 'fdsfdfdfdfs', '34343434343', 1, 'cvcvcvc', '2017-06-14', '14:45:00', '2017-06-15', '14:50:00', 'reject'),
(1503637615, 1494477508, 'alat', 'Istiana Rasopi', '6411413089', 'IKM', '081390527370', 1, 'Penelitian skripsi', '2017-08-26', '13:00:00', '2017-08-28', '14:00:00', 'clear'),
(1507681397, 1494472407, 'alat', 'Ike Rahayu', '6411415006', 'IKM', '089644292764', 1, 'Praktikum kesehatan lingkungan', '2017-10-11', '11:00:00', '2017-10-11', '13:00:00', 'clear'),
(1507683784, 1496368669, 'alat', 'Drs. Sugiharto, M.Kes', '131571557', 'IKM', '081390493246', 1, 'Penelitian', '2017-10-11', '08:00:00', '2017-10-18', '14:00:00', 'clear'),
(1511141080, 1493959178, 'alat', 'Iman', '0920909', 'TKJ', '023942041', 1, 'praktek', '2017-11-21', '08:20:00', '2017-11-21', '08:20:00', 'clear'),
(1511881911, 1493959178, 'alat', 'asdad', '1231313', 'asdads', '786976896786', 1, 'asdadad', '2017-11-29', '17:25:00', '2017-11-29', '20:15:00', 'clear'),
(1526872366, 1493894925, 'alat', 'roziq', '1231', 'sdfsdf', '12121', 12, 'sdfsdf', '2018-05-22', '10:00:00', '2018-05-28', '10:00:00', 'reject'),
(1526872604, 1493959488, 'alat', 'roziq', '123456', 'ptil', '1234', 1, 'sdsdf', '2018-05-26', '10:00:00', '2018-05-31', '07:00:00', 'reject'),
(1526886566, 1493959349, 'alat', 'roziq bahtiar', '121212', 'wwww', '085740898694', 2, '1qdassdf', '2018-05-24', '14:10:00', '2018-05-31', '16:10:00', 'reject'),
(1527663328, 1493959178, 'alat', 'tonononono', '21213464612', 'hbsba', '0210125410', 1, 'prktkuk', '2018-05-30', '14:50:00', '2018-05-30', '15:50:00', 'reject'),
(1530332060, 1493959178, 'alat', 'anha nifi', '270202', 'Farmasi', '089615772002', 1, 'praktek', '2018-06-30', '11:30:00', '2018-06-30', '00:00:00', 'reject'),
(1530498477, 1530498238, 'alat', 'Cristian Asep', '03762863', 'Rekayasa Perangkat Lunak', '089535890553', 1, 'hayang wee', '2018-07-02', '09:30:00', '2018-07-31', '00:00:00', 'pending'),
(1530499709, 1493894925, 'alat', 'anha nifi', '270202002', 'farmsi', '089615772002', 2, 'penelitian kentang', '2018-07-02', '09:45:00', '2018-07-03', '09:55:00', 'clear'),
(1530968025, 1493894925, 'alat', 'ahmad', '213', 'fisika', '222', 2, 'penelitian', '2018-07-08', '16:05:00', '2018-07-27', '04:20:00', 'reject'),
(1531126731, 1493959718, 'alat', 'Cita Arunnika R.', '6411414052', 'IKM', '87837441609', 1, 'Penelitian', '2018-07-11', '10:00:00', '2018-07-13', '02:00:00', 'clear'),
(1531127182, 1496367684, 'alat', 'Dewi Latifatul Janah', '6411415052', 'IKM', '085801776503', 1, 'Tugas mata kuliah teknologi pengembangan media', '2018-07-09', '13:00:00', '2018-07-13', '14:00:00', 'clear'),
(1531209430, 1493959718, 'alat', 'Cita Arunnika R.', '6411414052', 'IKM', '087837441610', 1, 'Penelitian', '2018-07-18', '10:00:00', '2018-07-19', '14:00:00', 'clear'),
(1531272132, 1531184837, 'alat', 'Cita Arunnika R.', '6411414052', 'IKM', '087837441610', 1, 'Penelitian', '2018-07-11', '11:00:00', '2018-07-13', '14:00:00', 'clear'),
(1532321404, 1493959718, 'alat', 'Novia Putri Aristi', '6411414145', 'IKM', '082242367337', 1, 'Penelitian', '2018-07-26', '10:00:00', '2018-07-30', '14:00:00', 'clear'),
(1532321550, 1531184837, 'alat', 'Novia Putri Aristi', '6411414145', 'IKM', '082242367337', 1, 'Penelitian', '2018-07-26', '10:00:00', '2018-07-30', '14:00:00', 'clear'),
(1535254945, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan Alat untuk Mata Kuliah Laboratorium Kesling', '2018-08-29', '11:00:00', '2018-08-30', '08:00:00', 'reject'),
(1535276293, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081327056072', 1, 'Pengenalan Alat untuk Mata Kuliah Laboratorium Kesling', '2018-08-29', '11:00:00', '2018-08-29', '01:30:00', 'reject'),
(1535276808, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411616002', 'Ilmu Kesehatan Masyarakat ', '081327056072', 1, 'Pengenalan Alat untuk Mata Kuliah Laboratorium Kesling', '2018-08-29', '11:00:00', '2018-08-29', '13:30:00', 'reject'),
(1535277083, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081327056072', 1, 'Pengenalan Alat untuk Mata Kuliah Laboratorium Kesling', '2018-08-29', '11:00:00', '2018-08-29', '13:30:00', 'reject'),
(1535277355, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat ', '081237056072', 1, 'Pengenalan Alat untuk Mata Kuliah Laboratorium Kesling', '2018-08-29', '11:00:00', '2018-08-29', '13:30:00', 'clear'),
(1535642752, 1531184837, 'alat', 'AYU TRI ISMIATI', '6411416114', 'ILMU KESEHATAN MASYARAKAT', '082322332894', 1, 'Praktikum pengukuran kualitas udara', '2018-09-03', '09:00:00', '2018-09-03', '12:00:00', 'reject'),
(1535676572, 1531184837, 'alat', 'Titania Ramadhanti', '6411416038', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-04', '16:30:00', 'reject'),
(1535677327, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081327056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-06', '07:00:00', '2018-09-06', '09:00:00', 'reject'),
(1535677335, 1531184837, 'alat', 'Titania Ramadhanti', '6411416038', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-04', '16:30:00', 'reject'),
(1535678700, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081327056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-06', '07:00:00', '2018-09-06', '09:00:00', 'reject'),
(1535678855, 1531184837, 'alat', 'Titania Ramadhanti', '6411416038', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-05', '08:00:00', 'reject'),
(1535679352, 1531184837, 'alat', 'Titania Ramadhanti', '6411416038', 'IKM', '081802555179', 1, 'Praktikum lab kesling', '2018-09-04', '14:30:00', '2018-09-05', '08:00:00', 'reject'),
(1535680076, 1531184837, 'alat', 'Pangesty Tisna Wahyu Nurcahyani', '6411416084', 'Ilmu Kesehatan Masyarakat', '085879541736', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-05', '16:00:00', '2018-09-06', '08:00:00', 'reject'),
(1535682940, 1531184837, 'alat', 'Ulfatul Magfiroh', '6411416136', 'Ilmu Kesehatan Masyarakat', '085740374626', 1, 'Praktikum pengukuran kualitas udara', '2018-09-04', '12:00:00', '2018-09-04', '14:00:00', 'reject'),
(1535683256, 1494472407, 'alat', 'Titania Ramadhanti', '6411416051', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-04', '16:30:00', 'reject'),
(1535683498, 1494472407, 'alat', 'Ayu Tri Ismiati', '6411416114', 'Ilmu Kesehatan Masyarakat', '082322332894', 1, 'Praktikum pengukuran kualitas udara', '2018-09-03', '09:00:00', '2018-09-03', '12:00:00', 'reject'),
(1535684149, 1494472407, 'alat', 'Titania Ramadhanti', '6411416038', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-04', '16:30:00', 'reject'),
(1535684366, 1493960425, 'alat', 'Titania Ramadhanti', '6411416038', 'Ilmu Kesehatan Masyarakat', '081802555179', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-04', '14:30:00', '2018-09-04', '16:30:00', 'reject'),
(1535684468, 1493960425, 'alat', 'AYU TRU ISMIATI', '6411416114', 'Ilmu Kesehatan Masyarakat', '082322332894', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-03', '12:00:00', 'reject'),
(1535685449, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-06', '12:00:00', 'clear'),
(1535685564, 1494472407, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-06', '12:00:00', 'clear'),
(1535685667, 1493960425, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-06', '12:00:00', 'clear'),
(1535686367, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-06', '12:00:00', 'reject'),
(1535686413, 1535685104, 'bahan', 'MAULIDHINA MAHARDIKA', '6411414147', 'ILMU KESEHATAN MASYARAKAT/KESEHATAN LINGKUNGAN', '085726802279', 70, 'STUDI PENDAHULUAN DAN PENELITIAN', '2018-09-03', '07:00:00', '2018-09-03', '13:00:00', 'reject'),
(1535686487, 1531184837, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Udara', '2018-09-03', '09:00:00', '2018-09-06', '12:00:00', 'reject'),
(1535933671, 1493959909, 'alat', 'Ali Mei Hadip Musyafak', '6411416133', 'Prodi Kesehatan Masyarakat', '089668615222', 1, 'Praktikum Mata Kuliah Laboratorium Keselamatan dan Kesehatan Kerja', '2018-09-10', '08:00:00', '2018-09-10', '11:00:00', 'clear'),
(1535939766, 1516236282, 'bahan', 'Nur Afidah', '6511417024', 'IKM/Gizi', '085802342460', 0, 'Praktikum', '2018-09-05', '09:00:00', '2018-09-05', '11:30:00', 'reject'),
(1535940650, 1535603805, 'alat', 'Nur Afidah', '6511417024', 'IKM/GIZI', '085802342460', 5, 'Praktikum metode sahli', '2018-09-05', '09:00:00', '2018-09-05', '11:30:00', 'reject'),
(1535940689, 1535939799, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '09:00:00', '2018-09-13', '15:00:00', 'reject'),
(1535941057, 1493960425, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '09:00:00', '2018-09-13', '15:00:00', 'reject'),
(1535941181, 1535940684, 'alat', 'Nur Afidah', '6511417024', 'IKM/GIZI', '085802342460', 5, 'Praktikum metode sahli', '2018-09-05', '09:00:00', '2018-09-05', '11:30:00', 'reject'),
(1535994110, 1535940684, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktek metode sahli', '2018-09-05', '13:00:00', '2018-09-05', '15:00:00', 'reject'),
(1535994451, 1535940684, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktek metode sahli', '2018-09-07', '08:00:00', '2018-09-07', '10:30:00', 'reject'),
(1535994710, 1535603805, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktek metode sahli', '2018-09-05', '13:00:00', '2018-09-05', '15:00:00', 'reject'),
(1535994881, 1535603805, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktek metode sahli', '2018-09-07', '08:00:00', '2018-09-07', '10:30:00', 'reject'),
(1536034800, 1535603805, 'alat', 'Nur Afidah', '6511417024', 'IKM/GIZI', '085802342460', 5, 'Praktikum metode sahli', '2018-09-07', '09:30:00', '2018-09-07', '11:00:00', 'reject'),
(1536035309, 1535940684, 'alat', 'Nur Afidah', '6511417024', 'IKM/GIZI', '085802342460', 5, 'Praktikum metode sahli', '2018-09-07', '09:30:00', '2018-09-07', '11:00:00', 'reject'),
(1536035543, 1535940684, 'alat', 'Kharisma Fitriana', '6511417037', 'IKM/GIZI', '089662701281', 5, 'Praktek metode sahli', '2018-09-07', '08:00:00', '2018-09-07', '09:30:00', 'reject'),
(1536035664, 1535603805, 'alat', 'Kharisma Fitriana', '6511417037', 'IKM/GIZI', '089662701281', 5, 'Praktek metode sahli', '2018-09-07', '08:00:00', '2018-09-07', '09:30:00', 'reject'),
(1536039312, 1494472494, 'alat', 'Chrisna Yudha Bayu Dwi Pamungkas', '6411416043', 'Kesehatan Masyarakat', '089622591054', 1, 'Untuk Public Health Expo IKM 2018', '2018-09-07', '11:00:00', '2018-09-10', '08:45:00', 'clear'),
(1536065019, 1535685104, 'bahan', 'MAULIDHINA MAHARDIKA', '6411414147', 'ILMU KESEHATAN MASYARAKAT/KESEHATAN LINGKUNGAN', '085726802279', 10, 'STUDI PENDAHULUAN', '2018-09-10', '07:30:00', '2018-09-10', '13:00:00', 'clear'),
(1536076918, 1493960425, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'clear'),
(1536077764, 1493960425, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'reject'),
(1536077984, 1535939799, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'clear'),
(1536078488, 1535939799, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'reject'),
(1536078936, 1535939799, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'reject'),
(1536079464, 1535939799, 'alat', 'Dian Fitriana', '6411414111', 'IKM', '0895414869411', 1, 'Penelitian', '2018-09-13', '08:00:00', '2018-09-13', '15:00:00', 'reject'),
(1536211630, 1494472087, 'alat', 'Muhammad Fadlil Fatihunnajah', '6511417049', 'Gizi', '082313686007', 1, 'Stand Gizi di PH Expo', '2018-09-07', '15:00:00', '2018-09-10', '12:00:00', 'clear'),
(1536540829, 1493959909, 'alat', 'Ditha Andriyani Putri', '6411416072', 'IKM/Kesmas', '081229770984', 1, 'Praktikum Laboratorium K3 tentang Kelelahan', '2018-09-10', '13:00:00', '2018-09-10', '15:00:00', 'reject'),
(1536551922, 1493959718, 'alat', 'Mega nanda', '6411416062', 'Ilmu kesehatan masyarakat', '085290137588', 1, 'Praktikum laboratorium K3', '2018-09-13', '08:00:00', '2018-09-17', '14:00:00', 'reject'),
(1536686523, 1493959718, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Mayarakat', '085290137588', 1, 'Praktikum laboratorium K3', '2018-09-13', '08:00:00', '2018-09-14', '11:00:00', 'clear'),
(1536686755, 1493959718, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 1, 'Praktikum laboratorium K3', '2018-09-13', '08:00:00', '2018-09-14', '11:00:00', 'reject'),
(1536727903, 1535940684, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 5, 'Praktek metode sahli', '2018-09-13', '10:00:00', '2018-09-13', '12:00:00', 'reject'),
(1536728037, 1535603805, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 5, 'Praktek metode sahli', '2018-09-13', '10:00:00', '2018-09-13', '12:00:00', 'reject'),
(1536810267, 1506914479, 'alat', 'Mega Nansa', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 1, 'Praktikum Laboratorium K3', '2018-09-20', '08:00:00', '2018-09-20', '14:00:00', 'clear'),
(1536891042, 1531184837, 'alat', 'Safira Lie Faradilah', '6411414086', 'Ilmu Kesehatan Masyarakat ', '082324466011', 1, 'Penelitian', '2018-09-18', '06:00:00', '2018-09-25', '12:00:00', 'reject'),
(1536891234, 1494477551, 'alat', 'Safira Lie Faradilah', '6411414086', 'Ilmu Kesehatan Masyarakat', '082324466011', 1, 'Penelitian', '2018-09-18', '06:00:00', '2018-09-25', '12:00:00', 'reject'),
(1536891388, 1494476808, 'alat', 'Safira Lie Faradilah', '6411414086', 'Ilmu Kesehatan Masyarakat', '082324466011', 1, 'Penelitian', '2018-09-18', '06:00:00', '2018-09-25', '12:00:00', 'reject'),
(1537072120, 1535940684, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 5, 'Praktikum Metode Sahli', '2018-09-21', '08:00:00', '2018-09-21', '10:00:00', 'reject'),
(1537072316, 1535603805, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 5, 'Praktikum Metode Sahli', '2018-09-21', '08:00:00', '2018-09-21', '10:00:00', 'clear'),
(1537149232, 1535940684, 'alat', 'Nur Afidah', '6511417024', 'IKM/GIZI', '085802342460', 5, 'Praktikum Metode Sahli', '2018-09-19', '07:30:00', '2018-09-19', '09:00:00', 'reject'),
(1537149504, 1535603805, 'alat', 'Nur Afidah', '6511417024', 'IKM/Gizi', '085802342460', 5, 'Praktikum Metode Sahli', '2018-09-19', '07:30:00', '2018-09-19', '09:00:00', 'reject'),
(1537150020, 1493959178, 'alat', 'Ardha Nur Majida', '6411414127', 'IKM', '085727010018', 1, 'Penelitian', '2018-10-01', '10:00:00', '2018-11-15', '00:00:00', 'reject'),
(1537150252, 1493959178, 'alat', 'Ardha Nur Majida', '6411414127', 'IKM', '085727010018', 1, 'Penelitian', '2018-10-01', '12:00:00', '2018-11-02', '15:00:00', 'clear'),
(1537150374, 1493894925, 'alat', 'Ardha Nur Majida', '6411414127', 'IKM', '085727010018', 1, 'Penelitian', '2018-10-01', '12:00:00', '2018-11-02', '15:00:00', 'clear'),
(1537150744, 1493894925, 'alat', 'Ardha Nur Majida', '6411414127', 'IKM', '085727010018', 1, 'Penelitian', '2018-10-01', '12:00:00', '2018-11-02', '13:00:00', 'reject'),
(1537221900, 1531184837, 'alat', 'Safira Lie Faradilah', '6411414086', 'IKM', '082324466011', 1, 'Penelitian', '2018-09-24', '08:00:00', '2018-09-28', '15:00:00', 'clear'),
(1537222021, 1494477551, 'alat', 'Safira Lie Faradilah', '6411414086', 'IKM', '082324466011', 1, 'Penelitian', '2018-09-24', '08:00:00', '2018-09-28', '15:00:00', 'clear'),
(1537222187, 1494476808, 'alat', 'Safira Lie Faradilah', '6411414086', 'IKM', '082324466011', 1, 'Penelitian', '2018-09-24', '08:00:00', '2018-09-28', '15:00:00', 'clear'),
(1537239314, 1537236488, 'alat', '                                                                                              SHOLIHATUL MUKARROMAH', '6411416076', 'Ilmu Kesehatan Masyarakat/Prodi Kesehatan Masyarakat', '0895606954827', 1, 'Pembuatan Film Edukasi Kesehatan', '2018-09-20', '15:00:00', '2018-10-01', '11:00:00', 'clear'),
(1537239633, 1496372837, 'alat', 'SHOLIHATUL MUKARROMAH', '6411416076', 'Ilmu Kesehatan Masyarakat', '0895606954827', 1, 'Pembuatan Film Edukasi Kesehatan', '2018-09-20', '15:00:00', '2018-10-01', '11:00:00', 'clear'),
(1537239818, 1496367684, 'alat', 'SHOLIHATUL MUKARROMAH', '6411416076', 'Ilmu Kesehatan Masyarakat/Kesehatan Masyarakat', '0895606954827', 1, 'Pembuatan Film Edukasi Kesehatan', '2018-09-20', '15:00:00', '2018-10-01', '11:00:00', 'clear'),
(1537240151, 1496373335, 'alat', 'SHOLIHATUL MUKARROMAH', '6411416076', 'ILMU KESEHATAN MASYARAKAT', '0895606954827', 1, 'Pembuatan Film Edukasi Kesehatan', '2018-09-20', '15:00:00', '2018-10-01', '11:00:00', 'reject'),
(1537668134, 1494477508, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 1, 'Praktikum Laboratorium K3', '2018-09-27', '08:00:00', '2018-09-27', '11:00:00', 'clear'),
(1537833007, 1496025072, 'alat', 'Bertakalswa Hermawati', '197909202016032207', 'IKM', '081210930391', 2, 'Pembekalan mahasiswa PKL', '2018-09-25', '08:00:00', '2018-09-26', '10:00:00', 'clear'),
(1538459939, 1506913788, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan alat untuk pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '11:30:00', 'clear'),
(1538460450, 1494472579, 'alat', 'Palupi Wahyu Utami', '641116002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan alat untuk pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '11:30:00', 'reject'),
(1538460740, 1494472441, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan alat untuk pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '11:30:00', 'reject'),
(1538461256, 1494472579, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan alat untuk pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '11:30:00', 'reject'),
(1538465224, 1494472579, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Pengenalan alat untuk Pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '09:00:00', 'reject'),
(1538467913, 1494476891, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat ', '081237056072', 1, 'Pengenalan alat untuk pengukuran kualitas air', '2018-10-04', '09:00:00', '2018-10-04', '11:30:00', 'reject'),
(1538705075, 1493959178, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum matkul entomologi kesehatan', '2018-10-10', '11:00:00', '2018-10-10', '11:00:00', 'reject'),
(1538705525, 1493959178, 'alat', 'Indah Ayu sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah kesehatan masyarakat', '2018-10-10', '11:00:00', '2018-10-11', '12:00:00', 'reject'),
(1538705714, 1493959178, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan ', '2018-10-10', '11:00:00', '2018-10-11', '13:00:00', 'clear'),
(1538705862, 1493894925, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan', '2018-10-10', '11:00:00', '2018-10-11', '13:00:00', 'reject'),
(1538705993, 1493959349, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan', '2018-10-10', '11:00:00', '2018-10-11', '13:00:00', 'reject'),
(1538885729, 1494476891, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktek Pengukuran Kualitas Air', '2018-10-10', '11:00:00', '2018-10-12', '12:00:00', 'clear'),
(1538886897, 1494472579, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat ', '081237056072', 1, 'Praktek Pengukuran Kualitas Air', '2018-10-10', '11:00:00', '2018-10-12', '12:00:00', 'clear'),
(1538887332, 1494557294, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat ', '081237056072', 1, 'Praktek Pengukuran Kualitas Air', '2018-10-10', '11:00:00', '2018-10-12', '12:00:00', 'clear'),
(1538912330, 1494472537, 'alat', 'Palupi Wahyu Utami ', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktek Pengukuran Kualitas Air', '2018-10-10', '11:00:00', '2018-10-12', '12:00:00', 'clear'),
(1538916415, 1493960014, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 2, 'Praktikum Laboratorium K3', '2018-10-11', '08:00:00', '2018-10-08', '11:00:00', 'clear'),
(1538965654, 1493959178, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan ', '2018-10-10', '13:00:00', '2018-10-11', '13:00:00', 'reject'),
(1538965745, 1493894925, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan', '2018-10-10', '13:00:00', '2018-10-11', '13:00:00', 'clear'),
(1538965823, 1493959349, 'alat', 'Indah Ayu Sulistiyawatin', '6411416018', 'Kesehatan masyarakat', '085640793402', 4, 'Praktikum mata kuliah entomologi kesehatan', '2018-10-10', '13:00:00', '2018-10-11', '13:00:00', 'reject'),
(1539224384, 1494472087, 'alat', 'Mardiana, S.K.M., M. Si. ', '198004202005012003', 'Ilmu Kesehatan Masyarakat', '081225206480', 1, 'Pengabdian masyarakat', '2018-10-12', '08:00:00', '2018-10-16', '08:00:00', 'clear'),
(1539224696, 1496367684, 'alat', 'Mardiana, S.K.M., M.Si', '198004202005012003', 'Ilmu Kesehatan Masyarakat', '081225206480', 1, 'Pengabdian Dosen', '2018-10-12', '08:00:00', '2018-10-16', '08:00:00', 'clear'),
(1539403835, 1493959488, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 2, 'Praktikum Laboratorium K3', '2018-10-18', '08:00:00', '2018-10-18', '11:00:00', 'pending'),
(1539927788, 1493959178, 'alat', 'ahmaddfdfd', '312134343434', 'fsfsdfdvdv', '122312313213232', 5, 'dfdvbdyvbv', '2018-10-26', '00:40:00', '2018-10-19', '12:40:00', 'reject'),
(1539996911, 1496374168, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktikum Antropometri ', '2018-10-24', '12:00:00', '2018-10-24', '02:00:00', 'clear'),
(1539997005, 1496374168, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktikum', '2018-10-24', '12:00:00', '2018-10-24', '14:00:00', 'reject'),
(1539997050, 1496374168, 'alat', 'Kharisma Fitriana', '6511417037', 'Gizi', '089662701281', 1, 'Praktikum Antropometri ', '2018-10-24', '12:00:00', '2018-10-24', '14:00:00', 'reject'),
(1540176424, 1496374168, 'alat', 'Nur Afidah', '6511417024', 'IKM/Gizi', '085802342460', 1, 'Praktikum Penilaian Status Gizi', '2018-10-24', '09:00:00', '2018-10-24', '11:30:00', 'clear'),
(1540259713, 1518663383, 'alat', 'Nuhab Mujtaba Mahfuzh', '6411417140', 'Kesehatan masyarakat', '082241251930', 7, 'Praktik kuliah manajemen bencana', '2018-10-23', '09:00:00', '2018-10-23', '11:00:00', 'pending'),
(1540262531, 1496024674, 'alat', 'nur afidah', '6511417024', 'ikm/gizi', '085802342460', 1, 'praktikum penilaian status gizi', '2018-10-24', '09:00:00', '2018-10-24', '11:30:00', 'clear'),
(1540262613, 1496025072, 'alat', 'nur afidah', '6511417024', 'ikm/gizi', '85802342460', 1, 'praktikum penilaian status gizi', '2018-10-24', '09:00:00', '2018-10-24', '11:30:00', 'clear'),
(1540262835, 1496023594, 'alat', 'nur afidah', '6511417024', 'ikm/gizi', '85802342460', 1, 'praktikum penilaian status gizi', '2018-10-24', '09:00:00', '2018-10-24', '11:30:00', 'reject'),
(1540262995, 1496023594, 'alat', 'nur afidah', '6511417024', 'ikm/gizi', '85802342460', 2, 'praktikum penilaian status gizi', '2018-10-24', '09:00:00', '2018-10-24', '11:30:00', 'clear'),
(1540368896, 1494203188, 'alat', 'Megananda', '6411416062', 'Kesehatan MAsyarakat', '085290137588', 1, 'praktikum Mata Kuliah Praktek Laboratorium Kesehatan dan Keselamantan Kerja', '2018-10-25', '08:00:00', '2018-10-25', '11:00:00', 'clear'),
(1540424810, 1494477465, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Makanan dan Minuman ', '2018-10-29', '09:00:00', '2018-11-01', '15:00:00', 'clear'),
(1540425756, 1518662474, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Makanan dan Minuman', '2018-10-29', '09:00:00', '2018-11-01', '15:00:00', 'clear'),
(1540425901, 1518662009, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Kualitas Makanan dan Minuman', '2018-10-29', '09:00:00', '2018-11-01', '15:00:00', 'clear'),
(1540787520, 1506913788, 'alat', 'Insani Salsabilla Putri', '6511417016', 'IKM/Gizi', '082324133568', 1, 'mengukur pH', '2018-11-02', '07:00:00', '2018-11-02', '12:00:00', 'pending'),
(1540879335, 1496367684, 'alat', 'Azi Riskiyanto', '6411417120', 'IKM/KESMAS', '085642040844', 1, 'Seminar Nasional Kesehatan 2018', '2018-11-18', '07:00:00', '2018-11-19', '09:00:00', 'reject'),
(1540906529, 1531184837, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat ', '085290137588', 1, 'Praktik Laboratorium K3', '2018-10-31', '08:00:00', '2018-10-31', '11:00:00', 'clear'),
(1540985107, 1506913788, 'alat', 'Akhmad Samsu Dukha', '6511418074', 'IKM/Gizi', '085879514466', 1, 'Praktikum', '2018-11-01', '09:00:00', '2018-11-01', '15:00:00', 'pending'),
(1540986941, 1506913788, 'alat', 'Supri Hartini', '6511418009', 'IKM/Gizi', '081382374563', 6, 'Untuk praktikum Ilmu Bahan Pangan', '2018-11-01', '09:00:00', '2018-11-01', '15:00:00', 'pending'),
(1540992141, 1494203953, 'alat', 'Supri Hartini', '6511418009', 'IKM/GIZI', '081382374563', 6, 'Praktikum Ilmu Bahan Pangan', '2018-11-01', '09:00:00', '2018-11-01', '15:00:00', 'pending'),
(1541030253, 1506913788, 'alat', 'Asyifa Adni Maghfira', '6511417050', 'Ilmu Kesehatan Masyarakat / Gizi', '0895347204193', 1, 'Untuk mengukur pH', '2018-11-02', '10:00:00', '2018-11-02', '14:00:00', 'pending'),
(1541178405, 1531184837, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 1, 'Praktikum laboratorium K3', '2018-11-08', '08:00:00', '2018-11-08', '11:00:00', 'clear'),
(1541260426, 1496374027, 'alat', 'Supri Hartini', '6511418009', 'IKM/Gizi', '081382374563', 6, 'praktikum Ilmu Bahan Pangan', '2018-11-08', '09:00:00', '2018-11-08', '15:00:00', 'pending'),
(1541260689, 1494203953, 'alat', 'Supri Hartini', '6511418009', 'IKM/Gizi', '081382374563', 6, 'praktikum Ilmu Bahan Pangan', '2018-11-08', '09:00:00', '2018-11-08', '15:00:00', 'pending'),
(1541386604, 1535685104, 'bahan', 'MAULIDHINA MAHARDIKA', '6411414147', 'ILMU KESEHATAN MASYARAKAT/KESEHATAN LINGKUNGAN', '085726802279', 99, 'PENELITIAN', '2018-11-08', '08:00:00', '2018-11-08', '13:00:00', 'clear'),
(1541427246, 1493894925, 'alat', 'hap', '2180759', 'IT', '394048', 7, 'praktikum', '2018-11-14', '06:30:00', '2018-11-21', '18:25:00', 'pending'),
(1541554575, 1496025072, 'alat', 'Fajar Abi Rafdi', '6411417084', 'Kesehatan Masyarakat', '087719795642', 2, 'Pengambilan data untuk tugas mata kuliah BIostatistika', '2018-11-07', '15:00:00', '2018-11-08', '10:30:00', 'pending'),
(1541554796, 1496023909, 'alat', 'Fajar Abi Rafdi', '6411417084', 'Kesehatan Masyarakat', '087719795642', 2, 'Pengambilan data untuk tugas Biostatistika', '2018-11-07', '15:00:00', '2018-11-08', '10:30:00', 'clear'),
(1541554892, 1496023594, 'alat', 'Fajar Abi Rafdi', '6411417084', 'Kesehatan Masyarakat', '087719795642', 2, 'Pengambilan data untuk tugas mata kuliah Biostatistika', '2018-11-07', '15:00:00', '2018-11-08', '10:30:00', 'clear'),
(1541678804, 1494203953, 'alat', 'Supri Hartini', '6511418009', 'IKM/Gizi', '081382374563', 6, 'Praktikum Ilmu Bahan Pangan', '2018-11-15', '09:00:00', '2018-11-15', '15:00:00', 'pending'),
(1541679198, 1494203953, 'alat', 'Supri Hartini', '6511418009', 'IKM/Gizi', '081382374563', 6, 'Praktikum Ilmu Bahan Pangan', '2018-11-22', '09:00:00', '2018-11-22', '15:00:00', 'pending'),
(1541952462, 1494203188, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Faktor Fisik ', '2018-11-14', '11:00:00', '2018-11-16', '11:00:00', 'clear'),
(1541952579, 1493960014, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Faktor Fisik', '2018-11-14', '11:00:00', '2018-11-16', '11:00:00', 'clear'),
(1541952693, 1506914479, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat ', '081237056072', 1, 'Praktikum Pengukuran Faktor Fisik', '2018-11-14', '11:00:00', '2018-11-16', '11:00:00', 'clear'),
(1541952772, 1494477508, 'alat', 'Palupi Wahyu Utami', '6411416002', 'Ilmu Kesehatan Masyarakat', '081237056072', 1, 'Praktikum Pengukuran Faktor Fisik', '2018-11-14', '11:00:00', '2018-11-16', '11:00:00', 'clear'),
(1542083355, 1494479752, 'alat', 'Mega Nanda', '6411416062', 'Ilmu Kesehatan Masyarakat', '085290137588', 2, 'Praktikum Laboratorium K3', '2018-11-15', '08:00:00', '2018-11-15', '11:00:00', 'pending'),
(1542149377, 1494477465, 'alat', 'Insani Salsabilla Putri', '6511417016', 'IKM/Gizi', '082324133568', 4, 'Sterilisasi', '2018-11-19', '09:00:00', '2018-11-19', '12:00:00', 'pending'),
(1542175699, 1496023594, 'alat', 'Gusti Sesanti Sandra Nastiti', '6411415072', 'IKM/IKM', '083843685688', 2, 'PKL Komunitas Desa Kalikayen Dusun Lengkongsari', '2018-11-16', '10:00:00', '2018-11-21', '13:00:00', 'pending'),
(1542175850, 1496023909, 'alat', 'Gusti Sesanti Sandra Nastiti', '6411415072', 'IKM/IKM', '083843685688', 2, 'PKL Komunitas Desa Kalikayen Dusun Lengkongsari', '2018-11-16', '10:00:00', '2018-11-21', '13:00:00', 'pending'),
(1542176110, 1496368357, 'alat', 'Nurul Fajariyana', '6411415019', 'IKM/IKM', '085728034957', 1, 'PKL Komunitas Desa Kalikayen Dusun lingkongsari', '2018-11-16', '10:00:00', '2018-11-21', '13:00:00', 'clear'),
(1542176208, 1496025072, 'alat', 'Nurul Fajariyana', '6411415019', 'IKM/IKM', '085728034957', 2, 'PKL Komunitas Desa Kalikayen Dusun lingkongsari', '2018-11-16', '10:00:00', '2018-11-21', '13:00:00', 'clear'),
(1542176576, 1496024878, 'alat', 'Nurul Fajariyana', '6411415019', 'IKM/IKM', '085728034957', 1, 'PKL Komunitas Desa Kalikayen Dusun lingkongsari', '2018-11-16', '10:00:00', '2018-11-21', '13:00:00', 'clear'),
(1542245257, 1496025072, 'alat', 'Choerun Nisa', '6411415150', 'Ilmu Kesehatan masyarakat ', '085726444430', 2, 'PKL KOMUNITAS kegiatan posbindu ', '2018-11-21', '08:20:00', '2018-11-23', '13:00:00', 'pending'),
(1542246766, 1496023909, 'alat', 'Anggita nurmallasari', '6511417045', 'Gizi', '081283678681', 1, 'Untuk keperluan melakukan pengukuran status gizi di desa Delik sari', '2018-11-15', '15:00:00', '2018-11-16', '13:30:00', 'pending'),
(1542247034, 1496023594, 'alat', 'Anggita Nurmallasari', '6511417045', 'Gizi', '081283678681', 1, 'Projek sosial duta unnes di desa delik sari', '2018-11-15', '15:00:00', '2018-11-16', '13:00:00', 'pending'),
(1542341180, 1493894925, 'alat', 'Asyifa Adni Maghfira', '6511417050', 'IKM/Gizi', '085786810025', 1, 'Mengamati perkembang biakan bakteri', '2018-11-19', '08:00:00', '2018-11-19', '10:00:00', 'pending'),
(1542593182, 1506913788, 'alat', 'Sri Nur Oktafia Ningsih', '6411414039', 'Ilmu Kesehatan Masyarakat ', '081578759046', 1, 'Penelitian ', '2018-11-26', '08:00:00', '2018-11-28', '15:00:00', 'pending'),
(1542593825, 1494472319, 'alat', 'Sri Nur Oktafia Ningsih', '6411414039', 'ilmu kesehatan masyarakat ', '081578759046', 1, 'Penelitian ', '2018-11-26', '08:00:00', '2018-11-28', '15:00:00', 'clear'),
(1542594500, 1506913788, 'alat', 'Sri Nur Oktafia Ningsih', '641141039', 'Ilmu Kesehatan Masyarakat ', '081578759046', 1, 'Penelitian ', '2018-11-26', '08:00:00', '2018-11-28', '15:00:00', 'pending'),
(1542801351, 1496025072, 'alat', 'Isnaini Alfazcha Zukhruf', '6411415083', 'Ilmu Kesehatan Masyarakat', '085727875294', 1, 'Kegiatan PKL Komunitas di Dusun Kebon Taman Desa Kalikayen ', '2018-11-26', '10:00:00', '2018-12-03', '13:00:00', 'pending'),
(1543503851, 1493959349, 'alat', '123', '123', '123', '123', 1, '1231', '2018-11-30', '20:05:00', '2018-11-30', '22:10:00', 'pending'),
(1543746951, 1518662281, 'alat', 'nuni', '13170574', 'hm', '09876427282829', 1, 'praktikum', '2018-12-02', '01:30:00', '2018-12-02', '05:30:00', 'pending'),
(1544575216, 1496373244, 'alat', 'Moch. Rofi\'', '170441100018', 'Sistem Informasi', '082333015454', 1, 'Acara', '2018-12-13', '07:40:00', '2018-12-14', '08:40:00', 'pending'),
(1545468565, 1493959178, 'alat', 'gftfugrug', '423424234', 'vgtgt', '2442423423423', 3, 'praktik', '2018-12-22', '15:35:00', '2018-12-22', '16:35:00', 'pending'),
(1545473559, 1493959178, 'alat', 'tampan', '1401480184', 'SI Teknik Informatika', '0857800523676', 1, 'Untuk laboratorium', '2018-12-22', '16:25:00', '2018-12-23', '18:30:00', 'pending'),
(1546999344, 1496025072, 'alat', 'Heni Isniyati', '132327022', 'IKM', '081904485993', 1, 'pengabdian', '2019-01-12', '14:00:00', '2019-01-14', '10:00:00', 'pending'),
(1547102812, 1493959488, 'alat', 'Heni Isniyati', '132327022', 'IKM', '081904485993', 1, 'Praktikum', '2019-01-11', '10:00:00', '2019-01-11', '15:00:00', 'pending'),
(1547622922, 1493959178, 'alat', 'sagjahdaj', '1243645', 'analis', '1216357246862', 1, 'praktikumg.n.', '2019-01-16', '14:10:00', '2019-01-17', '14:10:00', 'pending'),
(1547623516, 1493959178, 'alat', 'igyugyg', '653653563563', 'jhvhjvh', '5798686986986', 10, 'pruyryii', '2019-01-16', '15:15:00', '2019-01-16', '15:30:00', 'pending'),
(1549347748, 1496367684, 'alat', 'Muhamad Syaiful Bachri Al Yunus', '6411417036', 'Ilmu Kesehatan Masyarakat', '08984813563', 1, 'Acara Mahasiswa Berprestasi Jurusan IKM', '2019-02-18', '07:00:00', '2019-02-19', '08:00:00', 'pending'),
(1549351067, 1496367684, 'alat', 'Muhamad Syaiful Bachri Al Yunus', '6411417036', 'Ilmu Kesehatan Masyarakat', '08984813563', 1, 'TM Mahasiswa Berprestasi Jurusan IKM', '2019-02-15', '07:00:00', '2019-02-16', '08:30:00', 'pending'),
(1550127608, 1496025072, 'alat', 'Dewa Akbar Bahari', '8111415234', 'Ilmu Hukum/Ilmu Hukum', '0895359645764', 3, 'Untuk KKN', '2019-02-18', '08:30:00', '2019-02-22', '14:15:00', 'pending'),
(1550129270, 1496023594, 'alat', 'Dewa Akbar Bahari', '8111415234', 'Ilmu Hukum/Ilmu Hukum', '0895359645764', 2, 'Untuk KKN', '2019-02-18', '08:30:00', '2019-02-22', '14:15:00', 'pending'),
(1552272595, 1518660753, 'bahan', 'sdas', '2323', 'asd', '4235', 3, '34', '2019-03-27', '18:50:00', '2019-03-12', '15:50:00', 'pending'),
(1552471377, 1496025072, 'alat', 'Nirmala Ficky Sebrina', '6411417119', 'IKM/Kesehatan Masyarakat', '083842101740', 3, 'Pelatihan 3 Biro HIMA IKM UNNES', '2019-03-17', '09:00:00', '2019-03-18', '09:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'adminsilab', 'silab@techarea.co.id', '$2y$12$aEBjW6O.5IgLvDWUmDAASudLxJyIe8y0AGz6HV/apuAAFYR0x2Ld.');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id_setting` int(11) NOT NULL,
  `key` text NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id_setting`, `key`, `value`) VALUES
(1, 'home_card', '{\"left_card_icon\":\"info\",\"left_card_title\":\"Info Laboratorium\",\"left_card_content\":\"Informasi Umum tentang Laboratorium terkait. Berisi tentang profil singkat laboratorium dengan dilengkapi keterangan pengelola.\",\"center_card_icon\":\"extension\",\"center_card_title\":\"Penggunaan ALat\",\"center_card_content\":\"SIstem penggunaan alat atau fasilitas laboratorium bagi civitas akademika Jurusan IKM dan pengguna dilingkungan kampus.\",\"right_card_icon\":\"store\",\"right_card_title\":\"Kunjungi Laboratorium\",\"right_card_content\":\"Ingin tahu tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda\"}'),
(2, 'web_footer', '{\"footer_description_title\":\"SILAB IKM Unnes\",\"footer_description_content\":\"Sistem Informasi laboratorium Jurusan IKM Universitas Negeri Semarang. Digunakan untuk mengelola administrasi laboratorium secara online.\",\"footer_link_title\":\"External Link\",\"footer_link_content\":[{\"name\":\"Techarea\",\"url\":\"techarea.co.id\"},{\"name\":\"Unnes\",\"url\":\"unnes.ac.id\"},{\"name\":\"IKM Unnes\",\"url\":\"ikm.unnes.ac.id\"},{\"name\":\"FIK Unnes\",\"url\":\"fik.unnes.ac.id\"}]}'),
(3, 'laboratorium', '{\"nama\":\"Laboratorium Jurusan IKM FIK UNNES\",\"telepon\":\"\",\"alamat\":\"Gedung F5 Lt. 1, Jurusan IKM, Kampus Unnes Sekaran\",\"email\":\"labikm2016@gmail.com\",\"profil\":\"<p><!-- [if gte mso 9]><xml>\\r\\n <w:WordDocument>\\r\\n  <w:View>Normal<\\/w:View>\\r\\n  <w:Zoom>0<\\/w:Zoom>\\r\\n  <w:TrackMoves\\/>\\r\\n  <w:TrackFormatting\\/>\\r\\n  <w:PunctuationKerning\\/>\\r\\n  <w:ValidateAgainstSchemas\\/>\\r\\n  <w:SaveIfXMLInvalid>false<\\/w:SaveIfXMLInvalid>\\r\\n  <w:IgnoreMixedContent>false<\\/w:IgnoreMixedContent>\\r\\n  <w:AlwaysShowPlaceholderText>false<\\/w:AlwaysShowPlaceholderText>\\r\\n  <w:DoNotPromoteQF\\/>\\r\\n  <w:LidThemeOther>IN<\\/w:LidThemeOther>\\r\\n  <w:LidThemeAsian>X-NONE<\\/w:LidThemeAsian>\\r\\n  <w:LidThemeComplexScript>X-NONE<\\/w:LidThemeComplexScript>\\r\\n  <w:Compatibility>\\r\\n   <w:BreakWrappedTables\\/>\\r\\n   <w:SnapToGridInCell\\/>\\r\\n   <w:WrapTextWithPunct\\/>\\r\\n   <w:UseAsianBreakRules\\/>\\r\\n   <w:DontGrowAutofit\\/>\\r\\n   <w:SplitPgBreakAndParaMark\\/>\\r\\n   <w:EnableOpenTypeKerning\\/>\\r\\n   <w:DontFlipMirrorIndents\\/>\\r\\n   <w:OverrideTableStyleHps\\/>\\r\\n  <\\/w:Compatibility>\\r\\n  <m:mathPr>\\r\\n   <m:mathFont m:val=\\\"Cambria Math\\\"\\/>\\r\\n   <m:brkBin m:val=\\\"before\\\"\\/>\\r\\n   <m:brkBinSub m:val=\\\"--\\\"\\/>\\r\\n   <m:smallFrac m:val=\\\"off\\\"\\/>\\r\\n   <m:dispDef\\/>\\r\\n   <m:lMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:rMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:defJc m:val=\\\"centerGroup\\\"\\/>\\r\\n   <m:wrapIndent m:val=\\\"1440\\\"\\/>\\r\\n   <m:intLim m:val=\\\"subSup\\\"\\/>\\r\\n   <m:naryLim m:val=\\\"undOvr\\\"\\/>\\r\\n  <\\/m:mathPr><\\/w:WordDocument>\\r\\n<\\/xml><![endif]--><\\/p>\\r\\n<p style=\\\"text-align: left;\\\">Laboratorium sebagai sarana, prasarana dan mekanisme kerja yang menunjang secara unik satu atau lebih dari Tri dharma Perguruan Tinggi, melalui pengalaman langsung dalam bentuk keterampilan, pemahaman, dan wawasan dalam pendidikan dan pengajaran serta dalam pengembangan ilmu dan teknologi serta pengabdian masyarakat.<\\/p>\\r\\n<p>Sistem Informasi Laboratorium IKM Universitas Negeri Semarang merupakan sistem pengelolaan laboratorium yang dikembangkan untuk memfasilitasi kebutuhan akan peningkatan pelayanan serta ketersediaan data dan informasi yang <em>update<\\/em> dan terstruktur mengenai ketentuan umum peminjaman, ketersediaan alat dan bahan, serta jadwal kegiatan laboratorium di jurusan IKM.<\\/p>\\r\\n<p><!-- [if gte mso 9]><xml>\\r\\n <w:WordDocument>\\r\\n  <w:View>Normal<\\/w:View>\\r\\n  <w:Zoom>0<\\/w:Zoom>\\r\\n  <w:TrackMoves\\/>\\r\\n  <w:TrackFormatting\\/>\\r\\n  <w:PunctuationKerning\\/>\\r\\n  <w:ValidateAgainstSchemas\\/>\\r\\n  <w:SaveIfXMLInvalid>false<\\/w:SaveIfXMLInvalid>\\r\\n  <w:IgnoreMixedContent>false<\\/w:IgnoreMixedContent>\\r\\n  <w:AlwaysShowPlaceholderText>false<\\/w:AlwaysShowPlaceholderText>\\r\\n  <w:DoNotPromoteQF\\/>\\r\\n  <w:LidThemeOther>IN<\\/w:LidThemeOther>\\r\\n  <w:LidThemeAsian>X-NONE<\\/w:LidThemeAsian>\\r\\n  <w:LidThemeComplexScript>X-NONE<\\/w:LidThemeComplexScript>\\r\\n  <w:Compatibility>\\r\\n   <w:BreakWrappedTables\\/>\\r\\n   <w:SnapToGridInCell\\/>\\r\\n   <w:WrapTextWithPunct\\/>\\r\\n   <w:UseAsianBreakRules\\/>\\r\\n   <w:DontGrowAutofit\\/>\\r\\n   <w:SplitPgBreakAndParaMark\\/>\\r\\n   <w:EnableOpenTypeKerning\\/>\\r\\n   <w:DontFlipMirrorIndents\\/>\\r\\n   <w:OverrideTableStyleHps\\/>\\r\\n  <\\/w:Compatibility>\\r\\n  <m:mathPr>\\r\\n   <m:mathFont m:val=\\\"Cambria Math\\\"\\/>\\r\\n   <m:brkBin m:val=\\\"before\\\"\\/>\\r\\n   <m:brkBinSub m:val=\\\"--\\\"\\/>\\r\\n   <m:smallFrac m:val=\\\"off\\\"\\/>\\r\\n   <m:dispDef\\/>\\r\\n   <m:lMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:rMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:defJc m:val=\\\"centerGroup\\\"\\/>\\r\\n   <m:wrapIndent m:val=\\\"1440\\\"\\/>\\r\\n   <m:intLim m:val=\\\"subSup\\\"\\/>\\r\\n   <m:naryLim m:val=\\\"undOvr\\\"\\/>\\r\\n  <\\/m:mathPr><\\/w:WordDocument>\\r\\n<\\/xml><![endif]--><\\/p>\\r\\n<p><!-- [if gte mso 9]><xml>\\r\\n <w:LatentStyles DefLockedState=\\\"false\\\" DefUnhideWhenUsed=\\\"true\\\"\\r\\n  DefSemiHidden=\\\"true\\\" DefQFormat=\\\"false\\\" DefPriority=\\\"99\\\"\\r\\n  LatentStyleCount=\\\"267\\\">\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"0\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Normal\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"heading 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 7\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 8\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 9\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 7\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 8\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 9\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"35\\\" QFormat=\\\"true\\\" Name=\\\"caption\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"10\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Title\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"1\\\" Name=\\\"Default Paragraph Font\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"11\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtitle\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"22\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Strong\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"20\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"59\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Table Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" UnhideWhenUsed=\\\"false\\\" Name=\\\"Placeholder Text\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"1\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"No Spacing\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" UnhideWhenUsed=\\\"false\\\" Name=\\\"Revision\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"34\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"List Paragraph\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"29\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Quote\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"30\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Quote\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"19\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtle Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"21\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"31\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtle Reference\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"32\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Reference\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"33\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Book Title\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"37\\\" Name=\\\"Bibliography\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" QFormat=\\\"true\\\" Name=\\\"TOC Heading\\\"\\/>\\r\\n <\\/w:LatentStyles>\\r\\n<\\/xml><![endif]--><!-- [if gte mso 10]>\\r\\n<style>\\r\\n \\/* Style Definitions *\\/\\r\\n table.MsoNormalTable\\r\\n\\t{mso-style-name:\\\"Table Normal\\\";\\r\\n\\tmso-tstyle-rowband-size:0;\\r\\n\\tmso-tstyle-colband-size:0;\\r\\n\\tmso-style-noshow:yes;\\r\\n\\tmso-style-priority:99;\\r\\n\\tmso-style-parent:\\\"\\\";\\r\\n\\tmso-padding-alt:0in 5.4pt 0in 5.4pt;\\r\\n\\tmso-para-margin:0in;\\r\\n\\tmso-para-margin-bottom:.0001pt;\\r\\n\\ttext-align:justify;\\r\\n\\ttext-indent:.5in;\\r\\n\\tmso-pagination:widow-orphan;\\r\\n\\tfont-size:11.0pt;\\r\\n\\tfont-family:\\\"Calibri\\\",\\\"sans-serif\\\";\\r\\n\\tmso-ascii-font-family:Calibri;\\r\\n\\tmso-ascii-theme-font:minor-latin;\\r\\n\\tmso-hansi-font-family:Calibri;\\r\\n\\tmso-hansi-theme-font:minor-latin;\\r\\n\\tmso-bidi-font-family:\\\"Times New Roman\\\";\\r\\n\\tmso-bidi-theme-font:minor-bidi;}\\r\\n<\\/style>\\r\\n<![endif]--><span style=\\\"font-size: 11.0pt; line-height: 115%; font-family: \'Cambria\',\'serif\'; mso-ascii-theme-font: major-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: \'Times New Roman\'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\\\"><br \\/><\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\",\"ketentuan\":\"<p class=\\\"MsoNormal\\\" style=\\\"margin-left: 18.0pt; text-indent: -18.0pt; mso-list: l1 level1 lfo1;\\\">Prosedur peminjaman alat dan bahan silahkan download <a title=\\\"PROSEDUR PINJAM ALAT-1\\\" href=\\\"..\\/storage\\/files\\/PROSEDUR%20PINJAM%20ALAT-1.doc\\\">Disini<\\/a><\\/p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"margin-left: 18.0pt; text-indent: -18.0pt; mso-list: l1 level1 lfo1;\\\"><!--[endif]--><strong><span style=\\\"font-size: 11.0pt;\\\">Ketentuan Umum<\\/span><\\/strong><\\/p>\\r\\n<ol style=\\\"margin-top: 0cm;\\\" start=\\\"1\\\" type=\\\"1\\\">\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Laboratorium jurusan IKM melayani peminjaman alat\\/barang bagi civitas akademika jurusan IKM, dan pemangku kepentingan internal maupun eksternal <\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Bagi peminjam <strong>mahasiswa dari luar jurusan IKM dan Umum<\\/strong>, <strong>harus menggunakan surat permohonan peminjaman dari instansi peminjam dengan ketentuan sesuai kebijakan fakultas<\\/strong>.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Kepala laboratorium berhak menyetujui atau menolak permohonan peminjaman alat <\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Apabila kepala laboratorium tidak berada di tempat lebih dari 1 hari, pengajuan surat permohonan untuk sementara dapat dilakukan melalui staf laboratorium dan selanjutnya tetap dimintakan pengesahan dari kepala laboratorium.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Peminjaman alat oleh mahasiswa dari luar jurusan IKM dan Umum <strong>wajib<\\/strong> didampingi staf laboratorium jurusan IKM<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Penugasan staf laboratorium untuk mendampingi peminjaman alat berdasar pada surat tugas yang dibuat oleh Fakultas Ilmu Keolahragaan<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Segala sesuatu yang berkaitan dengan penugasan staf laboratorium menjadi tanggung jawab manajemen fakultas.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Staf laboratorium berkewajiban melakukan pemeriksaan alat sebelum dipinjamkan dan saat pengembalian di depan peminjam.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Peminjam wajib meninggalkan kartu identitas ( KTM\\/KTP )selama waktu peminjaman<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Kerusakan yang terjadi pada alat yang dipinjam, menjadi tanggungjawab peminjam<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\">Laboratorium jurusan IKM hanya melayani peminjaman dan pengembalian alat pada hari dan jam kerja.<\\/li>\\r\\n<\\/ol>\\r\\n<p>&nbsp;<\\/p>\",\"map_url\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d3959.6445190777213!2d110.3982464!3d-7.0509911!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bddb2391b4d%3A0x1ccfcd76872e0bd4!2sDekanat+Fakultas+Ilmu+Keolahragaan!5e0!3m2!1sid!2sid!4v1494457274949\",\"foto\":\"foto_1494203711.jpg\",\"denah\":\"denah_1507681078.jpg\"}'),
(4, 'web_image', '{\"header\":\"header_1494485570.jpg\",\"drawer\":\"drawer_1494203369.jpg\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `peminjaman_alat_bahan`
--
ALTER TABLE `peminjaman_alat_bahan`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_alat_bahan_bahan` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `kece` double(20,20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
