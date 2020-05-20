-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2020, 12:32:51
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `filmyorumla`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `film_id` int(11) NOT NULL,
  `yorum_puan` int(11) NOT NULL,
  `baslik_yorum` text NOT NULL,
  `yorum` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `username`, `film_id`, `yorum_puan`, `baslik_yorum`, `yorum`, `tarih`) VALUES
(18, 'pardus', 1, 3, 'asdasd', 'asdasd', '12.05.20'),
(35, 'pardus', 1, 9, 'test2', 'asdasdasd', '12.05.20'),
(36, 'pardus', 3, 1, 'test', 'asdasd', '19.05.20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favori_filmler`
--

CREATE TABLE `favori_filmler` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `favori_filmler`
--

INSERT INTO `favori_filmler` (`id`, `film_id`, `username`, `status`) VALUES
(12, 1, 'pardus', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `puan` int(11) NOT NULL,
  `gorsel` text NOT NULL,
  `cikis_tarih` text NOT NULL,
  `yonetmen` text NOT NULL,
  `zaman` text NOT NULL,
  `aciklama` text NOT NULL,
  `anahtar_kelime` text NOT NULL,
  `kategori` text NOT NULL,
  `imdb_puan` float NOT NULL,
  `poster` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `film`
--

INSERT INTO `film` (`id`, `name`, `puan`, `gorsel`, `cikis_tarih`, `yonetmen`, `zaman`, `aciklama`, `anahtar_kelime`, `kategori`, `imdb_puan`, `poster`) VALUES
(1, 'test', 6, 'images\\uploads\\movie-single.jpg', '10.10.2005', 'Mustafa AKBEL', '153', 'asdkjhasdasd asljdasljd asldj klasd laksdla sldj asljdlas jdlasdl asd', 'heyecan, korku', '1,5', 2, ''),
(2, 'test2', 6, 'images\\uploads\\mv-it4.jpg', '10.10.2005', 'Mustafa AKBEL', '153', 'asdkjhasdasd asljdasljd asldj klasd laksdla sldj asljdlas jdlasdl asd', 'heyecan, korku', '1,5', 3, ''),
(3, 'test3', 1, 'images\\uploads\\mv-it5.jpg', '10.10.2005', 'Mustafa AKBEL', '153', 'asdkjhasdasd asljdasljd asldj klasd laksdla sldj asljdlas jdlasdl asd', 'heyecan, korku', '1,5', 10, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `lastname`, `email`, `password`) VALUES
(23, 'test', 'Güncelle', 'Güncelle', 'makbel@havelsan.com.tr', 'c4ca4238a0b923820dcc509a6f75849b'),
(25, 'pardus', 'Mustafa  ', 'AKBEL2', 'akbel@outlook.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `favori_filmler`
--
ALTER TABLE `favori_filmler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `favori_filmler`
--
ALTER TABLE `favori_filmler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
