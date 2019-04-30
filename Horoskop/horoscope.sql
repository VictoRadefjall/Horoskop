-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 30 apr 2019 kl 21:12
-- Serverversion: 10.1.38-MariaDB
-- PHP-version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `horoscope`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `horoscope`
--

CREATE TABLE `horoscope` (
  `Id` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `horoscopeSign` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `horoscope`
--

INSERT INTO `horoscope` (`Id`, `dateFrom`, `dateTo`, `horoscopeSign`) VALUES
(1, '2000-03-21', '2000-04-19', 'Vaedur'),
(2, '2000-04-20', '2000-05-20', 'Oxen'),
(3, '2000-05-21', '2000-06-20', 'Tvillingarna'),
(4, '2000-06-21', '2000-07-22', 'Kraeftan'),
(5, '2000-07-23', '2000-08-22', 'Lejonet'),
(6, '2000-08-23', '2000-09-22', 'Jungfrun'),
(7, '2000-09-23', '2000-10-22', 'Vagen'),
(8, '2000-10-23', '2000-11-21', 'Skorpionen'),
(9, '2000-11-22', '2000-12-21', 'Skytten'),
(10, '2000-12-22', '2001-01-19', 'Stenbocken'),
(11, '2000-01-20', '2000-02-18', 'Vattumannen'),
(12, '2000-02-19', '2000-03-20', 'Fiskarna');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `horoscope`
--
ALTER TABLE `horoscope`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `horoscope`
--
ALTER TABLE `horoscope`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
