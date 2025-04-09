-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2025 at 02:57 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ozdz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowa`
--

CREATE TABLE `slowa` (
  `id` int(11) NOT NULL,
  `dlugosc_slowa` int(11) NOT NULL,
  `slowo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `slowa`
--

INSERT INTO `slowa` (`id`, `dlugosc_slowa`, `slowo`) VALUES
(1, 3, 'kot'),
(2, 3, 'dom'),
(3, 3, 'las'),
(4, 3, 'kij'),
(5, 4, 'ryba'),
(6, 4, 'pies'),
(7, 4, 'kawa'),
(8, 4, 'mama'),
(9, 4, 'tata'),
(10, 4, 'lato'),
(11, 4, 'zima'),
(12, 4, 'ptak'),
(13, 4, 'koza'),
(14, 4, 'wino'),
(15, 4, 'okno'),
(16, 5, 'rower'),
(17, 5, 'drzwi'),
(18, 5, 'pomoc'),
(19, 5, 'kwiat'),
(20, 5, 'lampa'),
(21, 6, 'apteka'),
(22, 6, 'drzewo'),
(23, 6, 'wiosna'),
(24, 6, 'cukier'),
(25, 6, 'kanapa'),
(26, 6, 'kwiaty'),
(27, 7, 'fryzjer'),
(28, 7, 'samolot'),
(29, 7, 'traktor'),
(30, 7, 'telefon'),
(31, 7, 'fotelik'),
(32, 7, 'rodzina'),
(33, 8, 'tygodnik'),
(34, 8, 'komputer'),
(35, 8, 'szklanka'),
(36, 8, 'kwiatowy'),
(37, 8, 'kuchnia'),
(38, 8, 'ceramika'),
(39, 8, 'jedzenie'),
(40, 9, 'samochody'),
(41, 9, 'telewizor'),
(42, 9, 'kalendarz'),
(43, 9, 'pracowity'),
(44, 9, 'truskawka'),
(45, 9, 'dzieciaki'),
(46, 9, 'nauczyciel'),
(47, 9, 'gospodarz'),
(48, 10, 'ceramiczna'),
(49, 10, 'mieszkanie'),
(50, 10, 'biblioteka'),
(51, 10, 'niedzielny'),
(52, 10, 'przyjaciel'),
(53, 11, 'przedszkole'),
(54, 11, 'przedszkola'),
(55, 11, 'telewizyjny'),
(56, 11, 'komputerowy');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `slowa`
--
ALTER TABLE `slowa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slowa`
--
ALTER TABLE `slowa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
