-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 02:26 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019_silab_smk`
--

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
(1493959178, 'Mikroskop elektrik', 'mikroskop', 9, 'unit', '2016-11-06', 'Laboratorium Epidemiologi', 'Baik', 'alat_1493959178.jpg'),
(1493894925, 'Mikroskop monokuler', '.', 11, 'unit', '2017-05-05', 'Laboratorium Epidemiologi', 'Baik', 'alat_1493958751.jpg'),
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
(1535603805, 'Hemometer Sahli', 'Hemometer', 15, 'set', '2007-08-15', 'Laboratorium Biomedik', 'Baik', 'alat_1535603805.jpg'),
(1535939799, 'Multi gas detector (CO2,H2S,CH4)', 'SA', 1, 'set', '2018-05-08', 'Laboratorium Kesehatan Lingkungan', 'Baik', 'alat_1535939799.jpg'),
(1535940684, 'UA Sure', 'UA sure', 1, 'unit', '2015-07-03', 'Laboratorium Biomedik', 'Baik', 'alat_1535940684.jpg'),
(1537236488, 'Tripod Camera', 'tripod', 1, 'unit', '2017-08-10', 'Laboratorium Audio Visual', 'Baik', 'alat_1537236488.jpg'),
(1569913141, 'ujicoba', 'ujicoba', 1, 'buah', '2019-10-01', 'tempat', 'baik', 'alat_1570162987.jpg');

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
(1570594667, 'Phenolphthalein ', 100, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Phenolphthalein.jpg'),
(1570163863, 'Microhaematocrit kapiler', 1, 'tubes', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/microhematokrit.jpg'),
(1570162333, 'Kertas saring biasa', 10, 'lembar', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/kertas saring.jpg'),
(1570594735, 'Natrium Hidroksida NAOH', 500, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Natrium%20Hidroksida.jpg'),
(1570587038, 'Safranin', 25, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/SAFRANIN.jpg'),
(1570586860, 'Dimethylamino Benzaldehyd', 25, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Dimethylamino%20benzaldehyd.jpg'),
(1570501440, 'Ziehl neelson (fucsin)', 500, 'ml', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/ziehlnelsen%20fuchsin.jpg'),
(1570162166, 'Fehling A', 1000, '1000ml', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Fehling A.jpg'),
(1570586785, 'Mercurous Hg2No3', 50, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Mercurous%20Hg2(NO3)2h.jpg'),
(1570585248, 'Alkohol', 15, 'liter', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/Alkohol.jpg'),
(1570501513, 'Eosin Yellow', 25, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/eosin%20yellow.jpg'),
(1570498260, 'Benedict', 1250, 'ml', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/Benedict.jpg'),
(1570498567, 'Citric Acid monohydrate (asam sitrat)', 500, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/citric%20acid%20monohydrate%20(asam%20sitrat).jpg'),
(1570501278, 'Phenol Red', 25, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Phenol%20red.jpg'),
(1570413831, 'NUTRIN AGAR', 500, 'gr', '2019-10-05', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Nutrin%20agar.jpg'),
(1570586585, 'Silver Nitrate', 60, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Silver%20Nitrate.jpg'),
(1570585764, 'Kalium Chlorid (KCl)', 1, 'kg', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Kalium%20ohlorid%20(Kcl).jpg'),
(1570585911, 'Etanol', 2500, 'ml', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Etanol.jpg'),
(1570586483, 'Aceton ', 150, 'cc', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Aceton.jpg'),
(1570586409, 'Iodium', 600, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Iodium.jpg'),
(1570586318, 'Potassium Iodide', 250, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Potassium%20Iodide.jpg'),
(1570586240, 'Cooper II Sulfate', 1, 'kg', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Cooper%20II%20Suilfate.jpg'),
(1570586144, 'Sodium hydroxide', 500, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Sodium%20Hydroxide.jpg'),
(1570585992, 'Reseker', 250, 'ml', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Reseker.jpg'),
(1570586069, 'Sodium Acetate', 250, 'gr', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Sodium%20Acetate.jpg'),
(1570163398, 'Sodium chloride', 500, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/sodium chlorida.jpg'),
(1570501048, 'Methanol', 2500, 'ml', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Metanol.jpg'),
(1570501135, 'Titriplex (edta)', 1, 'kg', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Titriplex(Edta).jpg'),
(1570501213, 'Lactose Monohydrate', 250, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Lactose%20monohydrate.jpg'),
(1570414035, 'IMERSION OIL', 100, 'ml', '2019-10-05', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Imersion%20oil.jpg'),
(1570585661, 'Ammonium Chlorid', 1, 'kg', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Ammonium%20chlorid.jpg'),
(1570585594, 'Spritus', 15, 'liter', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Spritus.jpg'),
(1570585332, 'Xylol', 10, 'liter', '2019-10-09', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Xylol.jpg'),
(1570501367, 'Larutan lugol', 250, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Larutan%20lugol.jpg'),
(1570500800, 'Natrium Nitropusid', 200, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Natrium%20Nitropusid.jpg'),
(1570500696, 'Natrium Hydroxide', 500, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Natrium%20Hidroksida.jpg'),
(1570500588, 'KOH (kalium hidroksida)', 500, 'gr', '2019-10-08', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/KOH.jpg'),
(1570163513, 'PHENOL CRYSTAL(smart lab)', 1000, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/bahan_1570163513.jpg'),
(1569900269, 'Fehling B', 1000, 'ml', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Fehling B.jpg'),
(1569900377, 'Zinc Acetat (smart lab)', 1000, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Zinc Acetat.jpg'),
(1569900473, 'Barium Chlorida(BacI2)', 100, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Barium chlorida.jpg'),
(1569910182, 'Trisodium Citrate dhydrate', 1000, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Trisodium citrate dihydrate.jpg'),
(1569910412, 'Sodium Sulfate for analis Merck', 1000, 'gr', '2019-10-01', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/sodium sulfate.jpg'),
(1570414092, 'Gentien Violet ', 100, 'gr', '2019-10-05', 'LABORATORIUM MEDIA', 'BAIK', 'http://silab-smk-dharma.techarea.co.id/storage/source/bahan/Gentien%20Violet.jpg');

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
(1542263907, 'Praktikum Laboratorium K3 (Alat pelindung diri)', '2018-11-15', '08:00:00', 'laboratorium K3'),
(1569985565, 'uji', '2019-10-10', '10:50:00', 'ujicoba');

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
(1569644938, 1493959178, 'alat', 'as', '9842328', 'IKM', '739872189', 1, 'fibewifiev', '2019-09-29', '18:35:00', '2019-09-30', '05:30:00', 'clear'),
(1569639651, 1493959178, 'alat', 'admjgbptw', '3208020', 'IKM', '298113280', 1, 'uihiufhreub', '2019-09-29', '19:35:00', '2019-09-30', '08:25:00', 'clear'),
(1569823848, 1493959178, 'alat', 'Aminuddin Shofi Ashari', '72893219', 'IKM', '8908309', 1, 'UHDEIWUH', '2019-09-30', '13:05:00', '2019-10-01', '17:25:00', 'clear'),
(1569825474, 1493959178, 'alat', 'Irvan Aldi Pratama', '09830', 'IKM', '908303', 1, 'admjgbptw', '2019-09-30', '18:30:00', '2019-09-30', '22:05:00', 'clear'),
(1569830421, 1493959178, 'alat', 'Aminuddin Shofi Ashari', '8726868', 'IKM', '09803', 1, 'oiowqhoqi', '2019-09-30', '07:30:00', '2019-09-30', '06:30:00', 'clear'),
(1569910433, 1493959178, 'alat', 'ujicoba', '739299', 'ujicoba', '020381739', 1, 'ujicoba', '2019-10-02', '23:55:00', '2019-10-03', '14:10:00', 'clear'),
(1569910600, 1493959178, 'alat', 'ujicoba', '00983827', 'ujicoba', '0908318239', 1, 'ujicoba', '2019-10-02', '12:10:00', '2019-10-04', '13:15:00', 'clear'),
(1569911289, 1493959178, 'alat', 'ujicoba', '09839797', 'ujcoba', '0383984974', 1, 'ujicoba', '2019-10-02', '14:10:00', '2019-10-03', '13:30:00', 'clear'),
(1569918577, 1569897791, 'bahan', 'TES', '0000', 'ANKES', '00000', 12, 'PEMBUATAN SAMPLE TES', '2019-10-01', '16:25:00', '2019-10-01', '17:25:00', 'clear'),
(1569920584, 1493959178, 'alat', 'as', '9387937', 'as', '379379', 1, 'pinjam', '2019-10-02', '20:40:00', '2019-10-04', '16:20:00', 'clear'),
(1569921029, 1493959178, 'alat', 'as', '038089380', 'iiduiu', '29879', 1, 'admjbiuiu', '2019-10-02', '16:20:00', '2019-10-04', '15:15:00', 'clear'),
(1569921301, 1569897791, 'bahan', 'TES 1', '00000', 'ANKES', '00000', 50, 'SAMPLE TES', '2019-10-02', '13:05:00', '2019-10-02', '16:00:00', 'clear'),
(1569935165, 1493959178, 'alat', 'bjfbejfbejf', '3274823', 'ehfe', '932746237', 1, 'euhfuehf', '2019-10-01', '20:40:00', '2019-10-03', '19:35:00', 'clear'),
(1569982663, 1494292349, 'bahan', 'uji', '192839', 'ikm', '09032108', 1, 'oihieuwuiw', '2019-10-03', '09:40:00', '2019-10-03', '20:40:00', 'clear'),
(1569986109, 1494292349, 'bahan', 'uji', '903028', 'IKM', '380021830', 1, 'uihhwidu', '2019-10-02', '22:45:00', '2019-10-03', '01:10:00', 'clear'),
(1570256413, 1570162333, 'bahan', 'tes', '000', 'ankes', '00000', 1, 'tes', '2019-10-05', '13:00:00', '2019-10-15', '16:00:00', 'clear'),
(1571804525, 1493959178, 'alat', 'uji coba', '123456', 'IKM', '08765', 1, 'uji coba', '2019-10-23', '23:55:00', '2019-10-25', '17:30:00', 'clear'),
(1571804867, 1493959178, 'alat', 'uji coba', '0987654', 'IKM', '23456', 1, 'uji coba', '2019-10-23', '05:30:00', '2019-10-26', '05:25:00', 'clear'),
(1571805472, 1493959178, 'alat', 'ggg', '234567', 'IKM', '234567', 1, 'dfghjk', '2019-10-24', '17:25:00', '2019-10-30', '06:30:00', 'clear'),
(1571805871, 1571805817, 'alat', 'gggg', '23456', 'ikm', '87654', 1, 'jaj', '2019-10-23', '05:25:00', '2019-10-24', '17:25:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `barang_id` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `trx_id` varchar(225) NOT NULL,
  `increase` int(11) NOT NULL,
  `decrease` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `barang_id`, `type`, `trx_id`, `increase`, `decrease`, `remain`, `status`, `description`, `created_at`) VALUES
(77, '1493959178', 'alat', 'TRX20190928100114VUS', 0, 1, 8, 'Out', '1569639651', '2019-09-28 10:01:14'),
(78, '1493959178', 'alat', 'IN20190928111620XLT', 1, 0, 9, 'In', '1569639651', '2019-09-28 11:16:20'),
(79, '1493959178', 'alat', 'TRX2019092811302936X', 0, 1, 8, 'Out', '1569644938', '2019-09-28 11:30:29'),
(80, '1493959178', 'alat', 'TRX20190928113053B0R', 1, 0, 9, 'In', '1569644938', '2019-09-28 11:30:53'),
(81, '1493959178', 'alat', 'TRX20191001132154MJ9', 0, 1, 8, 'Out', '1569910600', '2019-10-01 06:21:54'),
(82, '1493959178', 'alat', 'TRX20191001132200THJ', 0, 1, 7, 'Out', '1569910433', '2019-10-01 06:22:00'),
(83, '1493959178', 'alat', 'TRX20191001132206XUM', 0, 1, 6, 'Out', '1569830421', '2019-10-01 06:22:06'),
(84, '1493959178', 'alat', 'TRX20191001132212DK0', 0, 1, 5, 'Out', '1569823848', '2019-10-01 06:22:12'),
(85, '1493959178', 'alat', 'TRX20191001132218K81', 0, 1, 4, 'Out', '1569825474', '2019-10-01 06:22:18'),
(86, '1493959178', 'alat', 'TRX20191001132242WQA', 1, 0, 5, 'In', '1569823848', '2019-10-01 06:22:42'),
(87, '1493959178', 'alat', 'TRX20191001132248ZEL', 1, 0, 6, 'In', '1569910433', '2019-10-01 06:22:48'),
(88, '1493959178', 'alat', 'TRX20191001132559YRM', 1, 0, 7, 'In', '1569910600', '2019-10-01 06:25:59'),
(89, '1493959178', 'alat', 'TRX20191001132603DJ1', 1, 0, 8, 'In', '1569830421', '2019-10-01 06:26:03'),
(90, '1493959178', 'alat', 'TRX20191001132609W5F', 1, 0, 9, 'In', '1569825474', '2019-10-01 06:26:09'),
(91, '1493959178', 'alat', 'TRX20191001133531DLW', 0, 1, 8, 'Out', '1569911289', '2019-10-01 06:35:31'),
(92, '1493959178', 'alat', 'TRX20191001133909EUD', 1, 0, 9, 'In', '1569911289', '2019-10-01 06:39:09'),
(93, '1569913141', 'alat', 'IN20191001140041C93', 10, 0, 11, 'In', 'stok masuk ', '2019-10-01 07:00:41'),
(94, '1569897791', 'bahan', 'TRX20191001155653A0N', 0, 12, 988, 'Out', '1569918577', '2019-10-01 08:56:53'),
(95, '1493959178', 'alat', 'TRX201910011605371KC', 0, 1, 8, 'Out', '1569920584', '2019-10-01 09:05:37'),
(96, '1569897791', 'bahan', 'TRX20191001161549BOJ', 0, 50, 938, 'Out', '1569921301', '2019-10-01 09:15:49'),
(97, '1494292349', 'bahan', 'TRX20191002091843Y3S', 0, 1, 998, 'Out', '1569982663', '2019-10-02 02:18:43'),
(98, '1493959178', 'alat', 'TRX201910020929377K9', 0, 1, 7, 'Out', '1569935165', '2019-10-02 02:29:37'),
(99, '1493959178', 'alat', 'TRX20191002101201VZM', 0, 1, 6, 'Out', '1569921029', '2019-10-02 03:12:01'),
(100, '1494292349', 'bahan', 'TRX2019100210155698Z', 0, 1, 997, 'Out', '1569986109', '2019-10-02 03:15:56'),
(101, '1493959178', 'alat', 'TRX20191002101700O6C', 1, 0, 7, 'In', '1569920584', '2019-10-02 03:17:00'),
(102, '1493959178', 'alat', 'TRX20191023081232M07', 1, 0, 8, 'In', '1569921029', '2019-10-23 01:12:32'),
(103, '1493959178', 'alat', 'TRX20191023081240W3O', 1, 0, 9, 'In', '1569935165', '2019-10-23 01:12:40'),
(104, '1493959178', 'alat', 'TRX201910231124169H2', 0, 1, 8, 'Out', '1571804525', '2019-10-23 04:24:16'),
(105, '1493959178', 'alat', 'TRX201910231124451PC', 1, 0, 9, 'In', '1571804525', '2019-10-23 04:24:45'),
(106, '1493959178', 'alat', 'TRX20191023113138WEM', 0, 1, 8, 'Out', '1571804867', '2019-10-23 04:31:38'),
(107, '1493959178', 'alat', 'TRX20191023113211SK9', 1, 0, 9, 'In', '1571804867', '2019-10-23 04:32:11'),
(108, '1493959178', 'alat', 'TRX20191023113839F4M', 0, 1, 8, 'Out', '1571805472', '2019-10-23 04:38:39'),
(109, '1493959178', 'alat', 'TRX201910231139029EG', 1, 0, 9, 'In', '1571805472', '2019-10-23 04:39:02'),
(110, '1570162333', 'bahan', 'TRX20191106140311TNJ', 0, 1, 9, 'Out', '1570256413', '2019-11-06 07:03:11');

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
(1, 'adminsilab', 'analitikamedan@yahoo.co.id', '$2y$12$aEBjW6O.5IgLvDWUmDAASudLxJyIe8y0AGz6HV/apuAAFYR0x2Ld.');

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
(1, 'home_card', '{\"left_card_icon\":\"info\",\"left_card_title\":\"Info Laboratorium\",\"left_card_content\":\"Informasi Umum tentang Laboratorium terkait. Berisi tentang profil singkat laboratorium dengan dilengkapi keterangan pengelola.\",\"center_card_icon\":\"extension\",\"center_card_title\":\"Penggunaan ALat\",\"center_card_content\":\"SIstem penggunaan alat atau fasilitas laboratorium bagi civitas akademika Jurusan teknologi laboratorium medik dan pengguna dilingkungan sekolah.\",\"right_card_icon\":\"store\",\"right_card_title\":\"Kunjungi Laboratorium\",\"right_card_content\":\"Ingin tahu tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda\"}'),
(2, 'web_footer', '{\"footer_description_title\":\"SILAB SMK DHARMA ANALITIKA MEDA\",\"footer_description_content\":\"Sistem Informasi laboratorium SMK Dharma Analitika Medan. Digunakan untuk mengelola administrasi laboratorium secara online.\",\"footer_link_title\":\"External Link\",\"footer_link_content\":[{\"name\":\"Techarea\",\"url\":\"techarea.co.id\"},{\"name\":\"SMK Dharma Analitika\",\"url\":\"smkanaliskesehatandharmaanalitika.sch.id\"},{\"name\":\"TLM\",\"url\":\"silab-smk-dharma.techarea.co.id\"},{\"name\":\"TLM\",\"url\":\"silab-smk-dharma.techarea.co.id\"}]}'),
(3, 'laboratorium', '{\"nama\":\"Laboratorium SMK DHARMA ANALITIKA MEDAN\",\"telepon\":\"0616626679\",\"alamat\":\"JL.PANCING II NO. 40 KEL.INDRA KASIH KEC MEDAN TEMBUNG \",\"email\":\"analitikamedan@yahoo..co.id\",\"profil\":\"<p><!-- [if gte mso 9]><xml>\\r\\n <w:WordDocument>\\r\\n  <w:View>Normal<\\/w:View>\\r\\n  <w:Zoom>0<\\/w:Zoom>\\r\\n  <w:TrackMoves\\/>\\r\\n  <w:TrackFormatting\\/>\\r\\n  <w:PunctuationKerning\\/>\\r\\n  <w:ValidateAgainstSchemas\\/>\\r\\n  <w:SaveIfXMLInvalid>false<\\/w:SaveIfXMLInvalid>\\r\\n  <w:IgnoreMixedContent>false<\\/w:IgnoreMixedContent>\\r\\n  <w:AlwaysShowPlaceholderText>false<\\/w:AlwaysShowPlaceholderText>\\r\\n  <w:DoNotPromoteQF\\/>\\r\\n  <w:LidThemeOther>IN<\\/w:LidThemeOther>\\r\\n  <w:LidThemeAsian>X-NONE<\\/w:LidThemeAsian>\\r\\n  <w:LidThemeComplexScript>X-NONE<\\/w:LidThemeComplexScript>\\r\\n  <w:Compatibility>\\r\\n   <w:BreakWrappedTables\\/>\\r\\n   <w:SnapToGridInCell\\/>\\r\\n   <w:WrapTextWithPunct\\/>\\r\\n   <w:UseAsianBreakRules\\/>\\r\\n   <w:DontGrowAutofit\\/>\\r\\n   <w:SplitPgBreakAndParaMark\\/>\\r\\n   <w:EnableOpenTypeKerning\\/>\\r\\n   <w:DontFlipMirrorIndents\\/>\\r\\n   <w:OverrideTableStyleHps\\/>\\r\\n  <\\/w:Compatibility>\\r\\n  <m:mathPr>\\r\\n   <m:mathFont m:val=\\\"Cambria Math\\\"\\/>\\r\\n   <m:brkBin m:val=\\\"before\\\"\\/>\\r\\n   <m:brkBinSub m:val=\\\"--\\\"\\/>\\r\\n   <m:smallFrac m:val=\\\"off\\\"\\/>\\r\\n   <m:dispDef\\/>\\r\\n   <m:lMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:rMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:defJc m:val=\\\"centerGroup\\\"\\/>\\r\\n   <m:wrapIndent m:val=\\\"1440\\\"\\/>\\r\\n   <m:intLim m:val=\\\"subSup\\\"\\/>\\r\\n   <m:naryLim m:val=\\\"undOvr\\\"\\/>\\r\\n  <\\/m:mathPr><\\/w:WordDocument>\\r\\n<\\/xml><![endif]--><\\/p>\\r\\n<p style=\\\"text-align: left;\\\">Laboratorium sebagai sarana, prasarana dan mekanisme kerja yang menunjang secara unik satu atau lebih dari, melalui pengalaman langsung dalam bentuk keterampilan, pemahaman, dan wawasan dalam pendidikan dan pengajaran serta dalam pengembangan ilmu dan teknologi serta pengabdian masyarakat.<\\/p>\\r\\n<p>Sistem Informasi Laboratorium Kesehatan SMK Dharma Analitika merupakan sistem pengelolaan laboratorium yang dikembangkan untuk memfasilitasi kebutuhan akan peningkatan pelayanan serta ketersediaan data dan informasi yang <em>update<\\/em> dan terstruktur mengenai ketentuan umum peminjaman, ketersediaan alat dan bahan, serta jadwal kegiatan laboratorium di jurusan Masing masing.<\\/p>\\r\\n<p><!-- [if gte mso 9]><xml>\\r\\n <w:WordDocument>\\r\\n  <w:View>Normal<\\/w:View>\\r\\n  <w:Zoom>0<\\/w:Zoom>\\r\\n  <w:TrackMoves\\/>\\r\\n  <w:TrackFormatting\\/>\\r\\n  <w:PunctuationKerning\\/>\\r\\n  <w:ValidateAgainstSchemas\\/>\\r\\n  <w:SaveIfXMLInvalid>false<\\/w:SaveIfXMLInvalid>\\r\\n  <w:IgnoreMixedContent>false<\\/w:IgnoreMixedContent>\\r\\n  <w:AlwaysShowPlaceholderText>false<\\/w:AlwaysShowPlaceholderText>\\r\\n  <w:DoNotPromoteQF\\/>\\r\\n  <w:LidThemeOther>IN<\\/w:LidThemeOther>\\r\\n  <w:LidThemeAsian>X-NONE<\\/w:LidThemeAsian>\\r\\n  <w:LidThemeComplexScript>X-NONE<\\/w:LidThemeComplexScript>\\r\\n  <w:Compatibility>\\r\\n   <w:BreakWrappedTables\\/>\\r\\n   <w:SnapToGridInCell\\/>\\r\\n   <w:WrapTextWithPunct\\/>\\r\\n   <w:UseAsianBreakRules\\/>\\r\\n   <w:DontGrowAutofit\\/>\\r\\n   <w:SplitPgBreakAndParaMark\\/>\\r\\n   <w:EnableOpenTypeKerning\\/>\\r\\n   <w:DontFlipMirrorIndents\\/>\\r\\n   <w:OverrideTableStyleHps\\/>\\r\\n  <\\/w:Compatibility>\\r\\n  <m:mathPr>\\r\\n   <m:mathFont m:val=\\\"Cambria Math\\\"\\/>\\r\\n   <m:brkBin m:val=\\\"before\\\"\\/>\\r\\n   <m:brkBinSub m:val=\\\"--\\\"\\/>\\r\\n   <m:smallFrac m:val=\\\"off\\\"\\/>\\r\\n   <m:dispDef\\/>\\r\\n   <m:lMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:rMargin m:val=\\\"0\\\"\\/>\\r\\n   <m:defJc m:val=\\\"centerGroup\\\"\\/>\\r\\n   <m:wrapIndent m:val=\\\"1440\\\"\\/>\\r\\n   <m:intLim m:val=\\\"subSup\\\"\\/>\\r\\n   <m:naryLim m:val=\\\"undOvr\\\"\\/>\\r\\n  <\\/m:mathPr><\\/w:WordDocument>\\r\\n<\\/xml><![endif]--><\\/p>\\r\\n<p><!-- [if gte mso 9]><xml>\\r\\n <w:LatentStyles DefLockedState=\\\"false\\\" DefUnhideWhenUsed=\\\"true\\\"\\r\\n  DefSemiHidden=\\\"true\\\" DefQFormat=\\\"false\\\" DefPriority=\\\"99\\\"\\r\\n  LatentStyleCount=\\\"267\\\">\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"0\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Normal\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"heading 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 7\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 8\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"9\\\" QFormat=\\\"true\\\" Name=\\\"heading 9\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 7\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 8\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" Name=\\\"toc 9\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"35\\\" QFormat=\\\"true\\\" Name=\\\"caption\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"10\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Title\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"1\\\" Name=\\\"Default Paragraph Font\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"11\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtitle\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"22\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Strong\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"20\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"59\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Table Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" UnhideWhenUsed=\\\"false\\\" Name=\\\"Placeholder Text\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"1\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"No Spacing\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" UnhideWhenUsed=\\\"false\\\" Name=\\\"Revision\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"34\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"List Paragraph\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"29\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Quote\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"30\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Quote\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 1\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 2\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 3\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 4\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 5\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"60\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Shading Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"61\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"62\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Light Grid Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"63\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"64\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Shading 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"65\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"66\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium List 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"67\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 1 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"68\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 2 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"69\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Medium Grid 3 Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"70\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Dark List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"71\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Shading Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"72\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful List Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"73\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" Name=\\\"Colorful Grid Accent 6\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"19\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtle Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"21\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Emphasis\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"31\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Subtle Reference\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"32\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Intense Reference\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"33\\\" SemiHidden=\\\"false\\\"\\r\\n   UnhideWhenUsed=\\\"false\\\" QFormat=\\\"true\\\" Name=\\\"Book Title\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"37\\\" Name=\\\"Bibliography\\\"\\/>\\r\\n  <w:LsdException Locked=\\\"false\\\" Priority=\\\"39\\\" QFormat=\\\"true\\\" Name=\\\"TOC Heading\\\"\\/>\\r\\n <\\/w:LatentStyles>\\r\\n<\\/xml><![endif]--><!-- [if gte mso 10]>\\r\\n<style>\\r\\n \\/* Style Definitions *\\/\\r\\n table.MsoNormalTable\\r\\n\\t{mso-style-name:\\\"Table Normal\\\";\\r\\n\\tmso-tstyle-rowband-size:0;\\r\\n\\tmso-tstyle-colband-size:0;\\r\\n\\tmso-style-noshow:yes;\\r\\n\\tmso-style-priority:99;\\r\\n\\tmso-style-parent:\\\"\\\";\\r\\n\\tmso-padding-alt:0in 5.4pt 0in 5.4pt;\\r\\n\\tmso-para-margin:0in;\\r\\n\\tmso-para-margin-bottom:.0001pt;\\r\\n\\ttext-align:justify;\\r\\n\\ttext-indent:.5in;\\r\\n\\tmso-pagination:widow-orphan;\\r\\n\\tfont-size:11.0pt;\\r\\n\\tfont-family:\\\"Calibri\\\",\\\"sans-serif\\\";\\r\\n\\tmso-ascii-font-family:Calibri;\\r\\n\\tmso-ascii-theme-font:minor-latin;\\r\\n\\tmso-hansi-font-family:Calibri;\\r\\n\\tmso-hansi-theme-font:minor-latin;\\r\\n\\tmso-bidi-font-family:\\\"Times New Roman\\\";\\r\\n\\tmso-bidi-theme-font:minor-bidi;}\\r\\n<\\/style>\\r\\n<![endif]--><span style=\\\"font-size: 11.0pt; line-height: 115%; font-family: \'Cambria\',\'serif\'; mso-ascii-theme-font: major-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: \'Times New Roman\'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\\\"><br \\/><\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\",\"ketentuan\":\"<p class=\\\"MsoNormal\\\" style=\\\"margin-left: 18.0pt; text-indent: -18.0pt; mso-list: l1 level1 lfo1;\\\">Prosedur peminjaman alat dan bahan silahkan download <a title=\\\"PROSEDUR PINJAM ALAT-1\\\" href=\\\"..\\/storage\\/files\\/PROSEDUR%20PINJAM%20ALAT-1.doc\\\">Disini<\\/a><\\/p>\\r\\n<p class=\\\"MsoNormal\\\" style=\\\"margin-left: 18.0pt; text-indent: -18.0pt; mso-list: l1 level1 lfo1;\\\"><!--[endif]--><strong><span style=\\\"font-size: 11.0pt;\\\">Ketentuan Umum<\\/span><\\/strong><\\/p>\\r\\n<ol style=\\\"margin-top: 0cm;\\\" start=\\\"1\\\" type=\\\"1\\\">\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Laboratorium SMK Dharma Analitika melayani peminjaman alat\\/barang bagi civitas akademika jurusan kesehatan, dan pemangku kepentingan internal maupun eksternal <\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Bagi peminjam&nbsp; <strong>pembimbing(guru<\\/strong>\\/<strong>siswa),<\\/strong>&nbsp;<strong>harus menggunakan surat permohonan peminjaman dari instansi peminjam dengan ketentuan sesuai kebijakan Sekolah<\\/strong>.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Kepala laboratorium berhak menyetujui atau menolak permohonan peminjaman alat <\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Apabila kepala laboratorium tidak berada di tempat lebih dari 1 hari, pengajuan surat permohonan untuk sementara dapat dilakukan melalui staf laboratorium dan selanjutnya tetap dimintakan pengesahan dari kepala laboratorium.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Peminjaman alat oleh siswa dari,&nbsp;&nbsp;<strong>wajib<\\/strong> didampingi staf laboratorium.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Penugasan staf laboratorium untuk mendampingi peminjaman alat berdasar pada surat tugas yang dibuat oleh Pembimbing Guru<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Segala sesuatu yang berkaitan dengan penugasan staf laboratorium menjadi tanggung jawab manajemen Sekolah.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Staf laboratorium berkewajiban melakukan pemeriksaan alat sebelum dipinjamkan dan saat pengembalian di depan peminjam.<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Peminjam wajib meninggalkan kartu identitas ( Kartu Pelajar\\/KTP )selama waktu peminjaman<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\"><span style=\\\"font-size: 11.0pt;\\\">Kerusakan yang terjadi pada alat yang dipinjam, menjadi tanggungjawab peminjam<\\/span><\\/li>\\r\\n<li class=\\\"MsoNormal\\\" style=\\\"text-align: justify; mso-list: l0 level1 lfo2;\\\">Laboratorium Media hanya melayani peminjaman dan pengembalian alat pada hari dan jam kerja.<\\/li>\\r\\n<\\/ol>\\r\\n<p>&nbsp;<\\/p>\",\"map_url\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d15927.317210437466!2d98.7046845!3d3.626438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1b03918526f5261!2sSekolah%20Menengah%20Kejuruan%20Dharma%20Analitika!5e0!3m2!1sid!2sid!4v1571203974609!5m2!1sid!2sid\",\"foto\":\"foto_1569917799.jpg\",\"denah\":\"denah_1507681078.jpg\"}'),
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
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
