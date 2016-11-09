-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 nov 2016 om 15:48
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_gamble`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `home_squad` varchar(255) NOT NULL,
  `home_score` int(11) NOT NULL,
  `home_notation` varchar(20) NOT NULL,
  `away_squad` varchar(255) NOT NULL,
  `away_score` int(11) NOT NULL,
  `away_notation` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `matches`
--

INSERT INTO `matches` (`match_id`, `home_squad`, `home_score`, `home_notation`, `away_squad`, `away_score`, `away_notation`, `date`) VALUES
(1, 'Feyenoord', 4, '2,50', 'Ajax', 0, '2,30', '23 - 10 - 2016'),
(3, 'FC Test', 5, '', 'Real Test', 4, '', ''),
(4, 'FC Utrecht', 2, '', 'AZ', 3, '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `rights` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `credits`, `rights`) VALUES
(3, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 25, 1),
(5, 'main_user', 'Main', 'User', '8aa0606b7e3547a234c80fc3017fae97', 'main_user@test.nl', 25, 1),
(6, 'Richinel', 'Richinel', 'Jarbandhan', 'fcea920f7412b5da7be0cf42b8c93759', 'richinel_jarbandhan@hotmail.com', 25, 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
