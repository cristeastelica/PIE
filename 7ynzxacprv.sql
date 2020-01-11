-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 03:05 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7ynzxacprv`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidati`
--

CREATE TABLE `candidati` (
  `cod` int(11) NOT NULL,
  `nume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scoala_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judet_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localitate_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parola_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materia` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidati`
--

INSERT INTO `candidati` (`cod`, `nume_candidati`, `prenume_candidati`, `adresa_candidati`, `telefon_candidati`, `email_candidati`, `clasa_candidati`, `scoala_candidati`, `judet_candidati`, `localitate_candidati`, `user_candidati`, `parola_candidati`, `materia`) VALUES
(9, 'gwrgrnt', 'rgbrg', 'rfrg', '0779854788', 'sr@gmail.com', 'fbrb', 'f', 'rwg', 'sf', 'a', 'a', 'romana');

-- --------------------------------------------------------

--
-- Table structure for table `comisie`
--

CREATE TABLE `comisie` (
  `cod` int(11) NOT NULL,
  `nume_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parola_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comisie`
--

INSERT INTO `comisie` (`cod`, `nume_comisie`, `prenume_comisie`, `email_comisie`, `telefon_comisie`, `username_comisie`, `parola_comisie`, `rol_comisie`) VALUES
(1, 'comisie1', 'comisie1', '0321023215', 'comisie1@yahoo.com', 'comisie1', 'comisie1', 'comisie'),
(2, 'comisie2', 'comisie2', '0321231232', 'comisie2@yahoo.com', 'comisie2', 'comisie2', 'comisie'),
(3, 'comisie3', 'comisie3', '0365214563', 'comisie3@yahoo.com', 'comisie3', 'comisie3', 'comisie');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cod` int(45) NOT NULL,
  `subiect` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nume` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mesaj` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cod`, `subiect`, `nume`, `prenume`, `telefon`, `email`, `mesaj`) VALUES
(1, 'reclamatie', 'Cristea', 'Stelica', '0764095301', 'stelica@gmail.com', 'Nota prea mica la proba 1.'),
(2, 'Intrebare', 'Tudose', 'Tania', '0764095301', 'tt@yahoo.com', 'Unde se vor afisa viitoarele etape ale olimpiadei?'),
(3, 'Felicitari', 'Baciu', 'Adina', '0789659877', 'baciuadina@gmail.com', 'Cel mai bun site'),
(4, 'Intrebare', 'Bumbaru', 'Sonia', '0764095301', 'bb@yahoo.com', 'Cand se da proba a doua ?');

-- --------------------------------------------------------

--
-- Table structure for table `rezultate`
--

CREATE TABLE `rezultate` (
  `cod` int(45) NOT NULL,
  `nume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scoala_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localitate_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judet_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materia` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `puncte` varchar(12) COLLATE utf8_unicode_ci DEFAULT '0',
  `locul` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultate`
--

INSERT INTO `rezultate` (`cod`, `nume_candidati`, `prenume_candidati`, `clasa_candidati`, `scoala_candidati`, `localitate_candidati`, `judet_candidati`, `materia`, `puncte`, `locul`) VALUES
(97, 'gwrgrnt', 'rgbrg', 'fbrb', 'f', 'sf', 'rwg', 'romana', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `utilizator`
--

CREATE TABLE `utilizator` (
  `cod` int(11) NOT NULL,
  `user` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilizator`
--

INSERT INTO `utilizator` (`cod`, `user`, `pass`, `rol`) VALUES
(1, 'stelica', 'stelica', 'elev'),
(2, 'cristina', 'cristina', 'elev'),
(3, 'maria', 'maria', 'elev'),
(4, 'marian', 'marian', 'elev'),
(5, 'gheorghe', 'gheorghe', 'elev'),
(6, 'antonia', 'antonia', 'elev'),
(7, 'comisie1', 'comisie1', 'comisie'),
(8, 'comisie2', 'comisie2', 'comisie'),
(9, 'comisie3', 'comisie3', 'comisie'),
(125, 'mara', 'mara', 'elev'),
(126, 'mircea', 'mircea', 'elev'),
(127, 'stelica', 'parola123', 'elev'),
(128, 'stel', 'stel', 'elev'),
(129, 'a', 'a', 'elev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidati`
--
ALTER TABLE `candidati`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `comisie`
--
ALTER TABLE `comisie`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `rezultate`
--
ALTER TABLE `rezultate`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidati`
--
ALTER TABLE `candidati`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comisie`
--
ALTER TABLE `comisie`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cod` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rezultate`
--
ALTER TABLE `rezultate`
  MODIFY `cod` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
