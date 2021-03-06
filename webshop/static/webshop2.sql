-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2021. Már 23. 19:37
-- Kiszolgáló verziója: 5.7.31
-- PHP verzió: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bass`
--

DROP TABLE IF EXISTS `bass`;
CREATE TABLE IF NOT EXISTS `bass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `leiras` varchar(600) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kep` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `bass`
--

INSERT INTO `bass` (`id`, `nev`, `ar`, `leiras`, `kep`) VALUES
(1, 'Ibanez TMB30 MGR', 59900, 'Nyak: TMB4, juhar,\r\nMenzúra: 30\"\r\nTest: Nyárfa,\r\nFogólap: Jatoba,\r\nFogólapberakás: Fehér pont berakás,\r\nÉrintők: Medium,\r\nHúrláb: B10,\r\nHangszedő: Nyaki: Dynamix P, Híd: Dynamix P,\r\nHardware : Króm,\r\nSzín: Mint Green', 'bass1.jpg'),
(2, 'Ibanez GSR-200B WK', 82900, 'Test: Nyatoh\r\nNyak: Jávor\r\nFogólap: Jatoba, rádiusz: 305 mm \r\nMenzúra: 864 mm\r\nNyakszélesség a húrvezetőnél: 41 mm\r\nBundok: 22 medium\r\nHangszedő: PSNDP precision (nyak), PSNDJ jazzbass (híd) pickup\r\nElektronika: 2 hangerő, 1 hangszín, 1 Phat II eq\r\nHíd: B-10 (19 mm húrtáv)', 'bass2.jpg'),
(3, 'Epiphone Toby Deluxe-IV Bass Translucent Amber', 99900, 'Test: Radiat\r\nNyak: Juhar\r\nFogólap: Rózsafa\r\nMenzúra: 863,6 mm (34\")\r\nBundok: 24\r\nHangszedők: Tobias TBR Split-Humbucker (nyak), Tobias TBT Split-Humbucker (híd) pickup\r\nElektronika: 1 hangerő, 1 blend, 1 hangszín, 1 aktív Tonexpressor, 9 voltos aktív elektronika\r\nHíd: Flush-mount, low-profile, fully adjustable\r\nHangolókulcsok: Deluxe Die-cast\r\nSzín: (Trans Amber)', 'bass3.jpg'),
(4, 'Ibanez SR300EB CA', 109900, 'Konstrukció: Csavarozott nyak\r\nTest: Nyatoh\r\nNyak: 5 részből illesztett jávor/dió SR4\r\nFogólap: rózsafa, rádiusz: 305 mm\r\nMenzúra: 864 mm\r\nNyakszélesség a húrvezetőnél: 38 mm\r\nBundok: 24 Medium\r\nHangszedő: PowerSpan Dual Coil (nyak), PowerSpan Dual Coil (híd) passzív pickup\r\nElektronika: 1 hangerő, 1 balancer, 3 sávos EQ, 3-állású power tap kapcsoló\r\nHíd: Accu-cast B120 bridge', 'bass4.jpg'),
(5, 'Squier Classic Vibe 50S Precision Bass 2-Color Sunburst', 124900, 'Test: fenyő\r\n​Nyak: juhar\r\nMenzúra: 34\" (86.36 cm)\r\nFogólap: juhar\r\nBundok: 20 Narrow Tall\r\nHíd: 4-Saddle Vintage-Style\r\nHangszedők: Fender Designed Alnico Single-Coil\r\nElektronika: hangerő, hangszín\r\nSzín: 2-Color Sunburst', 'bass5.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `erosito`
--

DROP TABLE IF EXISTS `erosito`;
CREATE TABLE IF NOT EXISTS `erosito` (
  `nev` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `leiras` varchar(1500) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kep` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `erosito`
--

INSERT INTO `erosito` (`nev`, `ar`, `leiras`, `kep`, `id`) VALUES
('Blackstar Fly 3 mini Combo', 22900, '3 Watt elemes gitárkombó, aktív monitor, PC hangfal\r\nTeljesítmény: 3 Watt\r\nHangszóró: 3\"\r\nCsatornák száma: 2\r\nVezérlők: Gain, torzító kapcsoló, hangerő, EQ/ISF, visszhang hangerő, visszhang idő\r\nEffekt: visszhang\r\nAnalóg csatlakozók: gitár bemenet, MP3/vonal bemenet (mini jack), fejhallgató/hangszóró emulált kimenet (mini Jack)\r\nTartozék: 6 db ceruza elem\r\nOpciók: hálózati adapter, kiegészítő hangfal\r\nMéret: 170 x 126 x 102', 'erosito1.jpg', 1),
('Marshall MG30GFX', 64900, 'Teljesítmény: 30 Watt\r\nHangszórók: 1x10\" Custom speakers (4Ω, 30w)\r\nCsatornák száma: 4\r\nVezérlők: Gain, clean/crunch select, bass, OD1/OD2 select, middle, treble, reverb, volume, tuner, tap, store, FX select, master volume\r\nEffekt: Reverb, phaser, flanger, delay, chorus\r\nAnalóg csatlakozók: gitár bemenet, fejhallgató kimenet, Aux in, hangszóró kimenet\r\nMéret: 480 x 420 x 225 mm\r\nSúly: 10,8 kg', 'erosito2.jpg', 2),
('Peavey Bandit 112', 139000, 'TransTube áramkör\r\n100 watt (RMS) 4 Ohm-on (külső hangládával)\r\n80 watt (RMS) 8 Ohm-on\r\n12\" Blue Marvel hangszóró\r\nmagas és alacsony szintű bemenet\r\n2 csatorna, Clean és Lead, (láb)kapcsolható\r\ncsatornánként 3 sávos EQ\r\n3 állású hangzás kapcsoló mindkét csatornán\r\nReverb és Boost\r\nhangszóró szimulációs direkt kimenet, szabályozható', 'erosito3.jpg', 3),
('Peavey Classic 50/410 Combo\r\n', 309900, '50 watt (RMS) 16 vagy 8 Ohm-on\r\nNormal és Bright bemenet\r\n3x 12AX7 előfok cső\r\n4x EL84 végfok cső\r\n4x 10\" Celestion hangszóró\r\n2 csatorna, Normal,Lead (láb)kapcsolható\r\n3 sávos közös passzív EQ, Reverb és Presence szabályzó\r\na tiszta csatornán hangerő szabályzás\r\na torzított csatornán Pre/Post Gain szabályzás,\r\ntartozék lábkapcsoló (csatorna és zengető választás)\r\nventilátoros hűtés\r\nklasszikus szövet borítás', 'erosito4.jpg', 4),
('Marshall JVM-210C\r\n', 519900, '100 Wattos csöves gitárkombó\r\nTeljesítmény: 100 Watt\r\nHangszóró: 2x 12\" (Vintage, Heritage)\r\nCsövek: 4x ECC83, 1x ECC83, 4x EL34\r\nCsatornák száma: 3 (tiszta/crunch, torzító)\r\nVezérlők: Csatorna kapcsolók (Clean/Crunch, Overdrive), minden csatornán külön gain, hangerő, mély, közép, magas, csatornánként zengető vezérlő, Master szekció: Master kapcsoló, Presence, Resonance, Master 1, Master 2, közös: effekt hurok kapcsoló, lábkapcsoló/MIDI Program kapcsoló, hátlap: vonalkimenet Bypass kapcsoló, effekt szint kapcsoló, Mix (Dry, Wet)\r\nAnalóg csatlakozók: gitár bemenet, vonal kimenet (XLR), effekt hurok, erősítő insert, 5 hangfal kimenet\r\nDigitális/kontroller csatlakozók: MIDI, lábkapcsoló\r\nTartozék: PEDL-00045', 'erosito5.jpg', 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `gitar`
--

DROP TABLE IF EXISTS `gitar`;
CREATE TABLE IF NOT EXISTS `gitar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `leiras` varchar(600) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kep` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `gitar`
--

INSERT INTO `gitar` (`id`, `nev`, `ar`, `leiras`, `kep`) VALUES
(1, 'Squier Classic Vibe \'70s Stratocaster HSS Walnut', 139900, 'Konstrukció: Csavarozott nyak\r\nTest: Nyárfa\r\nNyak: Juhar\r\nFogólap: Indiai Babér\r\nRádiusz: 241 mm\r\nMenzúra: 25,5\" (648 mm)\r\nBundok: 21\r\nHíd: 6-nyerges Vintage-stílusú szinkronizált tremoló\r\nKulcsok: Vintage-stílusú\r\nHangszedők: Fender által tervezett Alnico Single-Coil (nyak és közép), Alnico Humbucking (Híd)\r\nElektronika: fő-hangerő, 2 hangszín, 5-állású hangszedő választó kapcsoló\r\nSzín: Dió (Walnut)', 'gitar1.jpg'),
(2, 'Cort G280Select AM\r\n', 169900, 'Konstrukció: csavarozott nyak\r\nMenzúra: 25.5\" (648 mm)\r\nTest: éger, égetett juhar tetővel\r\nNyak: kanadai kemény juhar\r\nFogólap: rózsafa\r\nBerakás: fehér pont pozíciójelölők\r\nHangszedő: Cort® Voiced Tone VTS63 & VTH77\r\nElektronika: hangerő, hangszín, 5-állású kapcsoló\r\nHardver szín: króm\r\nHíd: Cort® CFA-III Tremolo\r\nKulcs: Cort® Staggered Locking\r\nBund: 22\r\nHúrok: D\'Addario® EXL120', 'gitar2.jpg'),
(3, 'Fender Player Stratocaster MN 3-Color Sunburst', 229900, 'Konstrukció: csavarozott nyak\r\nTest: éger\r\nNyak: jávor, modern C profil\r\nMenzúra: 648 mm\r\nFogólap: jávor\r\nÉrintők: 22 medium jumbo\r\nHangszedők: 3x Player Series Alnico 5 Strat Single-Coil pickup\r\nElektronika: 5-állású kapcsoló, hangerő, 2 hangszín\r\nHíd: 2-Point Synchronized Tremolo with Bent Steel Saddles\r\nSzín:(BCMS: Black Cherry Metallic Satin)', 'gitar3.jpg'),
(4, 'Epiphone Les Paul Modern Figured Magma Orange Fade', 229900, 'Test: Mahogany / AAA Lángolt juhar fedlap\r\nNyak: Mahogany\r\nFogólap: Ében\r\nMenzúra: 24.72\" / 628mm\r\nBundok: 22 Medium jumbo\r\nHangszedők: ProBucker-2 humbucker w/coil-splitting\r\n                      ProBucker-3 humbucker w/coil-splitting\r\nElektronika: 2 Volume w/coil splitting and treble bleed, 2-Tone with phase switching\r\nHíd: LockTone ABR\r\nHangolókulcsok: Grover Locking Rotomatic tuners with Tulip Buttons with an 18:1 ratio\r\nSzín: Magma Orange Fade', 'gitar4.jpg'),
(5, 'Jackson King V KV Gloss Black', 324900, 'Jackson Pro Series elektromos gitár\r\n\r\nTest: mahagóni\r\nNyak: juhar\r\nMenzúra: 648 mm\r\nFogólap: ébenfa\r\nBundok: 24 Jumbo\r\nHíd: Floyd Rose 1000 Series Double-Locking Tremolo (süllyesztett)\r\nHangszedők: Seymour Duncan Distortion TB-6 (híd), Seymour Duncan Distortion SH-6N (nyak)\r\nElektronika: 3 állású kapcsoló, hangerő, hangszín\r\nSzín: Gloss Black', 'gitar5.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kieg`
--

DROP TABLE IF EXISTS `kieg`;
CREATE TABLE IF NOT EXISTS `kieg` (
  `nev` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `leiras` varchar(600) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kep` varchar(60) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kieg`
--

INSERT INTO `kieg` (`nev`, `ar`, `leiras`, `kep`, `id`) VALUES
('Ibanez IEGS6, 09-42 gitárhúr', 1890, 'Ibanez nikkelezett húrkészlet elektromos gitárhoz\r\nHúrvastagságok: .009/.011/.016/.024/.032/.042\r\nSuper Light', 'kieg1.jpg', 1),
('Dunlop - Max Grip Standard pengető', 250, 'Méretek:\r\n0.60 mm\r\n0.73 mm\r\n0.88 mm\r\n1.0 mm\r\n1.14 mm\r\n1.5 mm', 'kieg2.jpg', 2),
('Warwick RCL 30253 D6 gitárkábel', 1990, '3 m / 10 ft.,\r\nPipás - döntött 1/4 csatlakozó,\r\nMűanyag házban\r\nKülső átmérő :7 mm / 0.28\r\nColour: black\r\nAranyozott bevonat a csatlakozó hegyén', 'kieg3.jpg', 3),
('Warwick Rockbag Basic Line Szólógitár Tok', 5000, 'Puha tok vékony béléssel, szólógitárhoz\r\nVízlepergető anyag', 'kieg4.jpg', 4),
('Joyo JMT-9000B', 3500, 'Kromatikus hangoló és digitális metronóm egyben', 'kieg5.jpg', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
