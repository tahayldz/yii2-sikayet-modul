-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Oca 2021, 18:08:52
-- Sunucu sürümü: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Sürümü: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sikayetTurleri`
--

CREATE TABLE `sikayetTurleri` (
  `sikayetTur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sikayetTurleri`
--

INSERT INTO `sikayetTurleri` (`sikayetTur`) VALUES
('kargo sikayeti'),
('paketleme sikayeti'),
('personel sikayet'),
('urun iade sikayeti');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sikayetTurleri`
--
ALTER TABLE `sikayetTurleri`
  ADD PRIMARY KEY (`sikayetTur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
