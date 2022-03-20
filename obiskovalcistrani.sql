-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 11. jun 2020 ob 08.28
-- Različica strežnika: 10.4.11-MariaDB
-- Različica PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `obiskovalcistrani`
--

-- --------------------------------------------------------

--
-- Struktura tabele `obiskovalci`
--

CREATE TABLE `obiskovalci` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `priimek` varchar(20) NOT NULL,
  `upIme` varchar(20) NOT NULL,
  `geslo` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Odloži podatke za tabelo `obiskovalci`
--

INSERT INTO `obiskovalci` (`id`, `ime`, `priimek`, `upIme`, `geslo`, `email`, `telefon`) VALUES
(1, 'Gasper', 'Leskovec', 'nekineki', 'nekineki', 'leskovecg@gmail.com', '040040444'),
(2, 'Leskovec', 'Gasper', 'nekineki', 'nekineki', 'leskovecg@gmail.com', '2342343333'),
(3, 'Jamez', 'Novak', 'janezn', 'janez', 'janeznovak@gmail.com', '040268555');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `obiskovalci`
--
ALTER TABLE `obiskovalci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `obiskovalci`
--
ALTER TABLE `obiskovalci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
