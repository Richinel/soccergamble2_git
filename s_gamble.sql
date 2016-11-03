-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 03 nov 2016 om 19:22
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `s_gamble`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_squad` varchar(255) NOT NULL,
  `home_notation` varchar(20) NOT NULL,
  `away_squad` varchar(255) NOT NULL,
  `away_notation` varchar(20) NOT NULL,
  `score` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `matches`
--

INSERT INTO `matches` (`match_id`, `home_squad`, `home_notation`, `away_squad`, `away_notation`, `score`, `date`) VALUES
(1, 'Feyenoord', '2,50', 'Ajax', '2,30', '4 - 0', '23 - 10 - 2016'),
(3, 'FC Test', '', 'Real Test', '', '3 - 4', ''),
(4, 'FC Utrecht', '', 'AZ', '', '2 - 0', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `rights` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `credits`, `rights`) VALUES
(3, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 25, 1),
(4, 'Richinel', 'Richinel', 'Jarbandhan', 'fcea920f7412b5da7be0cf42b8c93759', 'rj_1993@live.nl', 100, 3),
(5, 'GrappigeAnti', 'Jandino', 'Asporaat', 'fcea920f7412b5da7be0cf42b8c93759', 'j.asporaat@live.nl', 25, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
