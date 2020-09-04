-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Sze 03. 13:09
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `rabit`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `title` varchar(128) COLLATE utf32_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_hungarian_ci;

--
-- A tábla adatainak kiíratása `advertisements`
--

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(1, 5, 'Book'),
(2, 5, 'House'),
(3, 1, 'Toys'),
(4, 1, 'Furniture'),
(5, 1, 'Food'),
(6, 4, 'Drink'),
(7, 6, 'Pets');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(128) COLLATE utf32_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'John'),
(2, 'Peter'),
(3, 'Buffet'),
(4, 'Paul'),
(5, 'Mary'),
(6, 'Smith');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `advertisements`
--
ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
