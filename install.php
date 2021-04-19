<?php

$db = new SQLite3('guitarshop.sqlite');
$db->exec("CREATE TABLE IF NOT EXISTS tipusok(id INTEGER PRIMARY KEY, nev TEXT NOT NULL)");
$db->exec("INSERT INTO tipusok(nev) VALUES ('gitar')");
$db->exec("INSERT INTO tipusok(nev) VALUES ('basszus')");
$db->exec("INSERT INTO tipusok(nev) VALUES ('erosito')");
$db->exec("INSERT INTO tipusok(nev) VALUES ('kiegeszito')");

$db->exec("CREATE TABLE IF NOT EXISTS termekek(
    id INTEGER PRIMARY KEY, 
    nev VARCHAR(60) NOT NULL, 
    ar INT(11) NOT NULL, 
    leiras VARCHAR(1000) NOT NULL, 
    kep VARCHAR(20), 
    typeId INTEGER,
    FOREIGN KEY (typeId) REFERENCES tipusok(id))");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES ('Ibanez TMB30 MGR', 59900, 'Nyak: TMB4, juhar<br> Menzúra: 30\" <br> Test: Nyárfa<br> Fogólap: Jatoba<br> Fogólapberakás: Fehér pont berakás<br> Érintők: Medium<br> Húrláb: B10<br> Hangszedő: Nyaki: Dynamix P, Híd: Dynamix P<br> Hardware: Króm<br> Szín: Mint Green', 'bass1.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES ('Ibanez GSR-200B WK', 82900, 'Test: Nyatoh<br> Nyak: Jávor<br> Fogólap: Jatoba, rádiusz: 305 mm<br> Menzúra: 864 mm<br> Nyakszélesség a húrvezetőnél: 41 mm<br> Bundok: 22 medium<br> Hangszedő: PSNDP precision (nyak), PSNDJ jazzbass (híd) pickup<br> Elektronika: 2 hangerő, 1 hangszín, 1 Phat II eq<br> Híd: B-10 (19 mm húrtáv)', 'bass2.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Epiphone Toby Deluxe-IV Bass Translucent Amber', 99900, 'Test: Radiat<br> Nyak: Juhar<br> Fogólap: Rózsafa<br> Menzúra: 863,6 mm (34\")<br> Bundok: 24<br> Hangszedők: Tobias TBR Split-Humbucker (nyak), Tobias TBT Split-Humbucker (híd) pickup<br> Elektronika: 1 hangerő, 1 blend, 1 hangszín, 1 aktív Tonexpressor, 9 voltos aktív elektronika<br> Híd: Flush-mount, low-profile, fully adjustable<br> Hangolókulcsok: Deluxe Die-cast<br> Szín: (Trans Amber)', 'bass3.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Ibanez SR300EB CA', 109900, 'Konstrukció: Csavarozott nyak<br> Test: Nyatoh<br> Nyak: 5 részből illesztett jávor/dió SR4<br> Fogólap: rózsafa, rádiusz: 305 mm<br> Menzúra: 864 mm<br> Nyakszélesség a húrvezetőnél: 38 mm<br> Bundok: 24 Medium<br> Hangszedő: PowerSpan Dual Coil (nyak), PowerSpan Dual Coil (híd) passzív pickup<br> Elektronika: 1 hangerő, 1 balancer, 3 sávos EQ, 3-állású power tap kapcsoló<br> Híd: Accu-cast B120 bridge', 'bass4.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Squier Classic Vibe 50S Precision Bass 2-Color Sunburst', 124900, 'Test: fenyő<br> Nyak: juhar<br> Menzúra: 34\" (86.36 cm)<br> Fogólap: juhar<br> Bundok: 20 Narrow Tall<br> Híd: 4-Saddle Vintage-Style<br> Hangszedők: Fender Designed Alnico Single-Coil<br> Elektronika: hangerő, hangszín<br> Szín: 2-Color Sunburst', 'bass5.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Blackstar Fly 3 mini Combo', 22900, '3 Watt elemes gitárkombó, aktív monitor, PC hangfal<br> Teljesítmény: 3 Watt<br> Hangszóró: 3\"<br> Csatornák száma: 2<br> Vezérlők: Gain, torzító kapcsoló, hangerő, EQ/ISF, visszhang hangerő, visszhang idő<br> Effekt: visszhang<br> Analóg csatlakozók: gitár bemenet, MP3/vonal bemenet (mini jack), fejhallgató/hangszóró emulált kimenet (mini Jack)<br> Tartozék: 6 db ceruza elem<br> Opciók: hálózati adapter, kiegészítő hangfal<br> Méret: 170 x 126 x 102', 'erosito1.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Marshall MG30GFX', 64900, 'Teljesítmény: 30 Watt<br> Hangszórók: 1x10\" Custom speakers (4Ω, 30w)<br> Csatornák száma: 4<br> Vezérlők: Gain, clean/crunch select, bass, OD1/OD2 select, middle, treble, reverb, volume, tuner, tap, store, FX select, master volume<br> Effekt: Reverb, phaser, flanger, delay, chorus<br> Analóg csatlakozók: gitár bemenet, fejhallgató kimenet, Aux in, hangszóró kimenet<br> Méret: 480 x 420 x 225 mm<br> Súly: 10,8 kg', 'erosito2.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Peavey Bandit 112', 139000, 'TransTube áramkör<br> 100 watt (RMS) 4 Ohm-on (külső hangládával)<br> 80 watt (RMS) 8 Ohm-on<br> 12\" Blue Marvel hangszóró<br> magas és alacsony szintű bemenet<br> 2 csatorna, Clean és Lead, (láb)kapcsolható<br> csatornánként 3 sávos EQ<br> 3 állású hangzás kapcsoló mindkét csatornán<br> Reverb és Boost<br> hangszóró szimulációs direkt kimenet, szabályozható', 'erosito3.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Peavey Classic 50/410 Combo', 309900, '50 watt (RMS) 16 vagy 8 Ohm-on<br> Normal és Bright bemenet<br> 3x 12AX7 előfok cső<br> 4x EL84 végfok cső<br> 4x 10\" Celestion hangszóró<br> 2 csatorna, Normal,Lead (láb)kapcsolható<br> 3 sávos közös passzív EQ, Reverb és Presence szabályzó<br> a tiszta csatornán hangerő szabályzás<br> a torzított csatornán Pre/Post Gain szabályzás,<br> tartozék lábkapcsoló (csatorna és zengető választás)<br> ventilátoros hűtés<br> klasszikus szövet borítás', 'erosito4.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Marshall JVM-210C<br> ', 519900, '100 Wattos csöves gitárkombó<br> Teljesítmény: 100 Watt<br> Hangszóró: 2x 12\" (Vintage, Heritage)<br> Csövek: 4x ECC83, 1x ECC83, 4x EL34<br> Csatornák száma: 3 (tiszta/crunch, torzító)<br> Vezérlők: Csatorna kapcsolók (Clean/Crunch, Overdrive), minden csatornán külön gain, hangerő, mély, közép, magas, csatornánként zengető vezérlő, Master szekció: Master kapcsoló, Presence, Resonance, Master 1, Master 2, közös: effekt hurok kapcsoló, lábkapcsoló/MIDI Program kapcsoló, hátlap: vonalkimenet Bypass kapcsoló, effekt szint kapcsoló, Mix (Dry, Wet)<br> Analóg csatlakozók: gitár bemenet, vonal kimenet (XLR), effekt hurok, erősítő insert, 5 hangfal kimenet<br> Digitális/kontroller csatlakozók: MIDI, lábkapcsoló<br> Tartozék: PEDL-00045', 'erosito5.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Squier Classic Vibe 70s Stratocaster HSS Walnut', 139900, 'Konstrukció: Csavarozott nyak<br> Test: Nyárfa<br> Nyak: Juhar<br> Fogólap: Indiai Babér<br> Rádiusz: 241 mm<br> Menzúra: 25,5\" (648 mm)<br> Bundok: 21<br> Híd: 6-nyerges Vintage-stílusú szinkronizált tremoló<br> Kulcsok: Vintage-stílusú<br> Hangszedők: Fender által tervezett Alnico Single-Coil (nyak és közép), Alnico Humbucking (Híd)Elektronika: fő-hangerő, 2 hangszín, 5-állású hangszedő választó kapcsoló<br> Szín: Dió (Walnut)', 'gitar1.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Cort G280Select AM<br> ', 169900, 'Konstrukció: csavarozott nyak<br> Menzúra: 25.5\" (648 mm)<br> Test: éger, égetett juhar tetővel<br> Nyak: kanadai kemény juhar<br> Fogólap: rózsafa<br> Berakás: fehér pont pozíciójelölők<br> Hangszedő: Cort® Voiced Tone VTS63 & VTH77<br> Elektronika: hangerő, hangszín, 5-állású kapcsoló<br> Hardver szín: króm<br> Híd: Cort® CFA-III Tremolo<br> Kulcs: Cort® Staggered Locking<br> Bund: 22<br> Húrok: Addario® EXL120', 'gitar2.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Fender Player Stratocaster MN 3-Color Sunburst', 229900, 'Konstrukció: csavarozott nyak\r\nTest: éger\r\nNyak: jávor, modern C profil\r\nMenzúra: 648 mm\r\nFogólap: jávor\r\nÉrintők: 22 medium jumbo\r\nHangszedők: 3x Player Series Alnico 5 Strat Single-Coil pickup\r\nElektronika: 5-állású kapcsoló, hangerő, 2 hangszín\r\nHíd: 2-Point Synchronized Tremolo with Bent Steel Saddles\r\nSzín:(BCMS: Black Cherry Metallic Satin)', 'gitar3.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Epiphone Les Paul Modern Figured Magma Orange Fade', 229900, 'Test: Mahogany / AAA Lángolt juhar fedlap\r\nNyak: Mahogany\r\nFogólap: Ében\r\nMenzúra: 24.72\" / 628mm\r\nBundok: 22 Medium jumbo\r\nHangszedők: ProBucker-2 humbucker w/coil-splitting\r\n                      ProBucker-3 humbucker w/coil-splitting\r\nElektronika: 2 Volume w/coil splitting and treble bleed, 2-Tone with phase switching\r\nHíd: LockTone ABR\r\nHangolókulcsok: Grover Locking Rotomatic tuners with Tulip Buttons with an 18:1 ratio\r\nSzín: Magma Orange Fade', 'gitar4.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Jackson King V KV Gloss Black', 324900, 'Jackson Pro Series elektromos gitár\r\n\r\nTest: mahagóni\r\nNyak: juhar\r\nMenzúra: 648 mm\r\nFogólap: ébenfa\r\nBundok: 24 Jumbo\r\nHíd: Floyd Rose 1000 Series Double-Locking Tremolo (süllyesztett)\r\nHangszedők: Seymour Duncan Distortion TB-6 (híd), Seymour Duncan Distortion SH-6N (nyak)\r\nElektronika: 3 állású kapcsoló, hangerő, hangszín\r\nSzín: Gloss Black', 'gitar5.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Ibanez IEGS6, 09-42 gitárhúr', 1890, 'Ibanez nikkelezett húrkészlet elektromos gitárhoz\r\nHúrvastagságok: .009/.011/.016/.024/.032/.042\r\nSuper Light', 'kieg1.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Dunlop - Max Grip Standard pengető', 250, 'Méretek:\r\n0.60 mm\r\n0.73 mm\r\n0.88 mm\r\n1.0 mm\r\n1.14 mm\r\n1.5 mm', 'kieg2.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Warwick RCL 30253 D6 gitárkábel', 1990, '3 m / 10 ft.,\r\nPipás - döntött 1/4 csatlakozó,\r\nMűanyag házban\r\nKülső átmérő :7 mm / 0.28\r\nColour: black\r\nAranyozott bevonat a csatlakozó hegyén', 'kieg3.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Warwick Rockbag Basic Line Szólógitár Tok', 5000, 'Puha tok vékony béléssel, szólógitárhoz\r\nVízlepergető anyag', 'kieg4.jpg', 0)");
$db->exec("INSERT INTO termekek(nev, ar, leiras, kep, typeId) VALUES('Joyo JMT-9000B', 3500, 'Kromatikus hangoló és digitális metronóm egyben', 'kieg5.jpg', 0)");



$db->exec("CREATE TABLE IF NOT EXISTS felhasznalok(id INTEGER PRIMARY KEY, nev VARCHAR(40) NOT NULL, irszam VARCHAR(10) NOT NULL, telepules VARCHAR(30) NOT NULL, cim VARCHAR(60) NOT NULL, email VARCHAR(40) NOT NULL UNIQUE)");
$db->exec("CREATE TABLE IF NOT EXISTS rendelesek(
id INTEGER PRIMARY KEY, 
felhasznalo_id INTEGER, 
termek_id INTEGER,
FOREIGN KEY (felhasznalo_id) REFERENCES felhasznalok(id),
FOREIGN KEY (termek_id) REFERENCES termekek(id))");






?>
