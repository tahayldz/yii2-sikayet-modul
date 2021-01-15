-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Oca 2021, 17:58:51
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
-- Tablo için tablo yapısı `sikayet`
--

CREATE TABLE `sikayet` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sikayetTuru` varchar(50) NOT NULL,
  `sikayet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sikayet`
--
ALTER TABLE `sikayet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sikayetTur` (`sikayetTuru`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `sikayet`
--
ALTER TABLE `sikayet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sikayet`
--
ALTER TABLE `sikayet`
  ADD CONSTRAINT `sikayet_ibfk_1` FOREIGN KEY (`sikayetTuru`) REFERENCES `sikayetTurleri` (`sikayetTur`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
