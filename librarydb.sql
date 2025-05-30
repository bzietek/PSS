-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 30, 2025 at 04:16 PM
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
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `IdBook` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `IdGenre` int(11) NOT NULL,
  `bookDescription` text NOT NULL,
  `availableCopies` int(11) NOT NULL,
  `isBorrowed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`IdBook`, `title`, `author`, `IdGenre`, `bookDescription`, `availableCopies`, `isBorrowed`) VALUES
(1, 'Harry Potter i Zakon Feniksa', 'J.K. Rowling', 1, 'Harry znów spędza nudne, przykre wakacje w domu Dursleyów. Czeka go piąty rok nauki w Hogwarcie i chciałby jak najszybciej spotkać się ze swoimi najlepszymi przyjaciółmi, Ronem i Hermioną. Ci jednak wyraźnie go zaniedbują. Gdy Harry ma już dość wszystkiego postanawia jakoś zmienić swoją nieznośną sytuację, sprawy przyjmują całkiem nieoczekiwany obrót.', 0, 0),
(2, 'Hobbit, czyli tam i z powrotem', 'J.R.R. Tolkien', 1, 'Arcydzieło literatury fantasy. Baśniowy, przemyślany w najdrobniejszych szczegółach fantastyczny świat oraz barwne postaci i ich wspaniałe przygody. Bohaterem jest tytułowy hobbit, „istota większa od liliputa, mniejsza jednak od krasnala”, pełen życzliwości dla świata, dobroci, nieskory do męstwa, a przecież odważny, poczciwy, a przecież sprytny.', 2, 0),
(3, 'Wiedźmin - Ostatnie życzenie', 'Andrzej Sapkowski', 1, 'Później mówiono, że człowiek ów nadszedł od północy, od Bramy Powroźniczej. Nie był stary, ale włosy miał zupełnie białe. Kiedy ściągnął płaszcz, okazało się, że na pasie za plecami ma miecz.\r\nBiałowłosego przywiodło do miasta królewskie orędzie: trzy tysiące orenów nagrody za odczarowanie nękającej mieszkańców Wyzimy strzygi.\r\nTakie czasy nastały. Dawniej po lasach jeno wilki wyły, teraz namnożyło się rozmaitego paskudztwa – gdzie spojrzysz, tam upiory, bazyliszki, diaboły, żywiołaki, wiły i utopce plugawe. A i niebacznie uwolniony z amfory dżinn, potrafiący zamienić życie spokojnego miasta w koszmar, się trafi.\r\nTu nie wystarczą zwykłe czary ani osinowe kołki. Tu trzeba zawodowca.\r\nWIEDŹMINA.', 3, 0),
(4, 'Gra o tron', 'George R.R. Martin', 1, ' W Zachodnich Krainach o ośmiu tysiącach lat zapisanej historii widmo wojen i katastrofy nieustannie wisi nad ludźmi. Zbliża się zima, lodowate wichry wieją z północy, gdzie schroniły się wyparte przez ludzi pradawne rasy i starzy bogowie. Zbuntowani władcy na szczęście pokonali szalonego Smoczego Króla, Aerysa Targaryena, zasiadającego na Żelaznym Tronie Zachodnich Krain, lecz obalony władca pozostawił po sobie potomstwo, równie szalone jak on sam. Tron objął Robert - najznamienitszy z buntowników. Minęły już lata pokoju i oto możnowładcy zaczynają grę o tron...\r\n', 4, 0),
(5, 'Lśnienie', 'Stephen King', 2, ' Danny Torrance ma tylko pięć lat, ale jego paranormalne zdolności sprawiają, że widzi więcej niż zwykłe dziecko. Kiedy jego ojciec, niespełniony pisarz o imieniu Jack, dostaje pracę jako opiekun górskiego hotelu Panorama, rodzina przenosi się w nowe miejsce, licząc, że najbliższe kilka miesięcy spędzą w ciszy i spokoju. Żadne z nich nie wie jednak, co tak naprawdę ich czeka… Pewnego dnia śnieżyca odcina hotel od świata. Mimo to Torrance’owie czują, że nie są sami. Kim jest tajemnicza kobieta z pokoju 217? A przemierzające korytarze bliźniaczki? Zamaskowani goście jeżdżący windą w górę i w dół? Do tego jeszcze z Jackiem zaczyna być coś nie tak. W jego oczach czai się coś dziwnego… i bardzo złego. Coś, co lśni mrocznym blaskiem.\r\n', 8, 0),
(6, 'Smętarz dla zwierzaków', 'Stephen King', 2, 'Na świecie istnieją dobre i złe miejsca. Nowy dom rodziny Creedów w Ludlow był niewątpliwie dobrym miejscem - przytulną, przyjazną wiejską przystanią po zgiełku i chaosie Chicago. Cudowne otoczenie Nowej Anglii, łąki, las to idealna siedziba dla młodego lekarza, jego żony, dwójki dzieci i kota. Wspaniała praca, mili sąsiedzi i droga, po której nieustannie przetaczają się ciężarówki. Droga i miejsce za domem, w lesie, pełne wzniesionych dziecięcymi rękami nagrobków - to tam dzieci z miasteczka zakopują swe martwe zwierzaki. Ci, którzy nie znają przeszłości, zwykle ją powtarzają... i nie chcą słuchać ostrzeżeń. ', 6, 0),
(7, 'Miasteczko Salem', 'Stephen King', 2, 'Po śmierci żony Ben Mears wraca do Jerusalem w stanie Maine, gdzie spędził kilka lat jako dziecko. W drodze do miasteczka zatrzymuje się na chwilę w starym Domu Marstenów. Ben przeżył tam coś przerażającego, ale nigdy do końca nie zrozumiał, co się wtedy stało. Miejsce wygląda tak samo, jak mężczyzna je zapamiętał. Ben rozważa nawet wynajęcie Domu Marstenów – pomimo że budynek jest brudną ruiną – uważa, że w ten sposób zamknie niedokończone sprawy. No i chce napisać naprawdę przerażający horror, a gdzie łatwiej będzie się wczuć w straszliwą atmosferę? Niestety rezydencja została niedawno sprzedana, więc Ben wynajmuje pokój w pensjonacie.', 8, 0),
(8, 'To', 'Stephen King', 2, 'Dorośli uznają miejscowość Derry za swojskie i porządne miasto, idealne do wychowywania dzieci. Ale to dzieci widzą – i czują – co tak strrrasznie różni Derry od innych miejsc. Tylko one potrafią dostrzec \"TO\", ukryte w kanałach, przybierające najróżniejsze postacie, prosto z dziecięcych koszmarów. \"TO\" zna ich największe lęki, ale tylko dzieci mogą stanąć do walki z potworem. Po zaginięciu George’a Denbrough dzieci decydują się zmierzyć z TO. Będzie to ich pierwsze, ale nie ostatnie starcie z TO, które, ukryte w zakamarkach pamięci, zamieni dawne dziecięce koszmary w przerażającą rzeczywistość dorosłych… Czy odważycie się sięgnąć po TO? ', 9, 0),
(9, 'Mężczyźni, którzy nienawidzą kobiet', 'Stieg Larsson', 3, 'Pewnego wrześniowego dnia w 1966 roku szesnastoletnia Harriet Vanger znika bez śladu. Prawie czterdzieści lat później Mikael Blomkvist - dziennikarz i wydawca magazynu \"Millennium\" otrzymuje nietypowe zlecenie od Henrika Vangera - magnata przemysłowego, stojącego na czele wielkiego koncernu. Ten prosi znajdującego się na zakręcie życiowym dziennikarza o napisanie kroniki rodzinnej Vangerów. Okazuje się, że spisywanie dziejów to tylko pretekst do próby rozwiązania skomplikowanej zagadki. Mikael Blomkvist, skazany za zniesławienie, rezygnuje z obowiązków zawodowych i podejmuje się niezwykłego zlecenia. Po pewnym czasie dołącza do niego Lisbeth Salander - młoda, intrygująca outsiderka i genialna researcherka. Wspólnie szybko wpadają na trop mrocznej i krwawej historii rodzinnej. ', 10, 0),
(10, 'Dziewczyna, która igrała z ogniem', 'Stieg Larsson', 3, 'W kolejnej, po \"Mężczyznach, którzy nienawidzą kobiet\", części trylogii Millennium główną bohaterką jest Lisbeth Salander. Seria dramatycznych wypadków wywołuje u Lisbeth wspomnienia mrocznej przeszłości, z którą raz na zawsze postanawia się rozprawić. Dwoje dziennikarzy, Dag i Mia, docierają do niezwykłych informacji na temat rozległej siatki przemycającej z Europy Wschodniej do Szwecji ludzi wykorzystywanych w branży seksualnej. Wiele zamieszanych w to osób piastuje odpowiedzialne funkcje w społeczeństwie. ', 2, 0),
(11, '4.50 z Paddington ', 'Agatha Christie', 3, 'Akcja książki zbudowana jest wokół zagadki morderstwa popełnionego w pociągu. Śledztwo okazuje się trudne i nietypowe: nie znaleziono ofiary, a jedyny świadek zdarzenia podróżował innym pociągiem. Nikt nie wierzy starszej damie upierającej się przy swojej wersji zdarzeń. Intryga zagęszcza się, gdy dochodzi do kolejnych zabójstw. Panna Marple, detektyw amator, wysyła na miejsce zbrodni swoją młoda przyjaciółkę Lucy Eyesbarrow.', 96, 0),
(12, 'I nie było już nikogo', 'Agatha Christie', 3, 'Tajemniczy gospodarz zaprasza do domu na wyspie dziesięć osób. Gdy dwie z nich giną, goście zdają sobie sprawę, że to, co początkowo uważali za nieszczęśliwy wypadek, jest dziełem zabójcy. Postanawiają odkryć jego tożsamość, ale okazuje się, że… nikt nie ma alibi.\r\nOdizolowani od społeczeństwa, niezdolni do opuszczenia miejsca pobytu, umierają jeden po drugim w sposób opisany w dziecięcej rymowance, którą wywieszono w ich pokojach.\r\n', 0, 0),
(13, 'Władca Pierścieni', 'J.R.R. Tolkien', 1, 'Epicka opowieść o pierścieniu władzy.', 5, 0),
(14, 'Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 1, 'Historia młodego czarodzieja Harry’ego Pottera.', 2, 0),
(15, 'Gra o Tron', 'George R.R. Martin', 1, 'Walka o Żelazny Tron w Westeros.', 4, 0),
(16, 'Diuna', 'Frank Herbert', 1, 'Saga o pustynnej planecie Arrakis i przyprawie melanż.', 2, 0),
(17, 'Eragon', 'Christopher Paolini', 1, 'Historia chłopca i jego smoka w świecie Alagaësia.', 6, 0),
(18, 'Ziemiomorze', 'Ursula K. Le Guin', 1, 'Magiczna podróż po archipelagu pełnym czarów.', 3, 0),
(19, 'Czarnoksiężnik z Archipelagu', 'Ursula K. Le Guin', 1, 'Pierwsza część kultowej sagi o Gedzie.', 5, 0),
(20, 'Silmarillion', 'J.R.R. Tolkien', 1, 'Historia Śródziemia i jego mitologii.', 0, 0),
(21, 'Fundacja', 'Isaac Asimov', 1, 'Klasyczna powieść science fiction o upadku imperium.', 3, 0),
(22, 'Hyperion', 'Dan Simmons', 1, 'Saga o pielgrzymach podróżujących na planetę Hyperion.', 2, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `borrow`
--

CREATE TABLE `borrow` (
  `IdBorrow` int(11) NOT NULL,
  `IdBook` int(11) NOT NULL,
  `damageDescription` text DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `returnDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`IdBorrow`, `IdBook`, `damageDescription`, `createdBy`, `createdAt`, `returnDate`) VALUES
(4, 12, 'nie ma pierwszego rozdzialu', 12, '2025-01-17 18:16:36', '2025-01-17 21:33:40'),
(5, 9, 'git', 12, '2025-01-17 18:18:26', '2025-01-17 22:03:11'),
(6, 1, 'jest git', 12, '2025-01-17 18:18:40', '2025-01-17 21:48:10'),
(7, 10, '', 15, '2025-01-17 18:27:30', '2025-01-17 22:03:15'),
(8, 1, '', 19, '2025-01-17 21:27:39', '2025-01-18 11:38:46'),
(9, 12, 'bez okladki', 20, '2025-01-17 21:48:48', '2025-01-17 21:49:13'),
(10, 12, 'git', 20, '2025-01-17 21:49:35', '2025-01-17 22:00:50'),
(11, 9, 'git', 20, '2025-01-17 21:52:07', '2025-01-17 22:00:53'),
(12, 9, 'git', 20, '2025-01-17 21:54:17', '2025-01-17 22:00:56'),
(13, 12, '', 20, '2025-01-17 22:03:58', '2025-01-17 22:38:25'),
(14, 11, '', 20, '2025-01-17 22:18:33', '2025-01-17 22:38:24'),
(15, 2, '', 20, '2025-01-17 22:20:55', '2025-01-17 22:38:23'),
(16, 1, '', 20, '2025-01-17 22:21:24', '2025-01-17 22:38:23'),
(17, 2, '', 20, '2025-01-17 22:28:16', '2025-01-17 22:38:22'),
(18, 12, '', 20, '2025-01-17 22:39:14', '2025-01-18 11:30:07'),
(19, 11, '', 20, '2025-01-17 22:39:59', '2025-01-17 22:40:15'),
(20, 6, '', 20, '2025-01-17 22:40:03', '2025-01-17 22:40:16'),
(21, 11, 'zniszczyl cala ksiazke', 22, '2025-01-18 08:46:03', '2025-01-18 08:46:33'),
(22, 11, '', 22, '2025-01-18 08:46:08', '2025-01-18 08:46:34'),
(23, 10, 'cala rozwalona', 24, '2025-01-18 09:28:12', '2025-01-18 09:28:35'),
(24, 1, '', 24, '2025-01-18 09:28:16', '2025-01-18 09:28:37'),
(25, 10, 'zniszczyl pierwsza strone', 25, '2025-01-18 11:29:28', '2025-01-18 11:30:17'),
(26, 8, '', 20, '2025-01-18 11:38:22', '2025-04-04 10:30:02'),
(27, 3, 'rozpierdolil w pol, spalil', 26, '2025-01-18 21:20:50', '2025-01-18 21:21:15'),
(28, 12, 'to akurat git', 26, '2025-01-18 21:20:53', '2025-01-18 21:21:21'),
(29, 1, 'wszystko ok', 27, '2025-01-22 21:22:32', '2025-01-22 21:25:34'),
(30, 7, 'rozwalila pierwsza strone', 27, '2025-01-22 21:22:37', '2025-01-22 21:25:43'),
(31, 12, 'rozwalona', 27, '2025-01-22 21:22:52', '2025-01-22 21:25:50'),
(32, 1, '', 28, '2025-04-04 11:25:31', '2025-04-04 12:00:27'),
(33, 2, '', 28, '2025-04-04 11:26:12', '2025-04-18 14:33:01'),
(34, 1, '', 28, '2025-04-04 11:27:27', '2025-04-18 14:33:03'),
(35, 1, '', 28, '2025-04-04 11:30:28', '2025-04-18 14:33:04'),
(36, 2, '', 28, '2025-04-04 11:30:35', '2025-04-18 14:33:05'),
(37, 2, '', 28, '2025-04-04 11:31:07', '2025-04-18 14:33:06'),
(38, 5, '', 28, '2025-04-04 11:33:12', '2025-04-18 14:33:09'),
(39, 2, '', 28, '2025-04-04 11:34:49', '2025-04-18 14:33:09'),
(40, 13, '', 28, '2025-04-04 11:59:37', '2025-04-18 14:33:12'),
(41, 16, '', 28, '2025-04-18 14:21:33', '2025-04-18 14:33:07'),
(42, 2, '', 28, '2025-04-18 14:22:04', '2025-04-18 14:33:13'),
(43, 2, '', 28, '2025-04-18 14:30:23', '2025-04-18 14:33:13'),
(44, 11, 'nie wiem', 12, '2025-05-30 14:36:55', '2025-05-30 14:37:26'),
(45, 2, '1', 12, '2025-05-30 14:37:47', '2025-05-30 14:38:09'),
(46, 2, '2', 12, '2025-05-30 14:37:49', '2025-05-30 14:38:12'),
(47, 2, '3', 12, '2025-05-30 14:37:56', '2025-05-30 14:38:14'),
(48, 2, NULL, 31, '2025-05-30 14:42:29', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cms_content`
--

CREATE TABLE `cms_content` (
  `id` int(11) NOT NULL,
  `section` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `cms_content`
--

INSERT INTO `cms_content` (`id`, `section`, `content`, `updated_at`) VALUES
(1, 'main_text', 'Uwaga! W dniu 20 maja (poniedziałek) biblioteka będzie nieczynna z powodu inwentaryzacji księgozbioru. Zapraszamy ponownie od wtorku 21 maja w standardowych godzinach 8:00–18:00.\r\n\r\nNowości w bibliotece!  \r\nOd dziś dostępne są najnowsze książki takich autorów jak Remigiusz Mróz, Stephen King oraz Olga Tokarczuk. Zapraszamy do wypożyczania – liczba egzemplarzy ograniczona!\r\n\r\nZmiana regulaminu wypożyczeń!  \r\nOd 1 czerwca maksymalna liczba książek, które można wypożyczyć jednocześnie, wynosi 5.  \r\nProsimy o zapoznanie się z nowym regulaminem na miejscu w bibliotece lub na stronie www.\r\n\r\nAkcja \"Książka za książkę\"!  \r\nW dniach 3–7 czerwca przynieś książkę, której już nie czytasz i wymień ją na inną.  \r\nZadbajmy wspólnie o obieg książek w naszej społeczności!\r\n', '2025-05-18 16:45:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `genre`
--

CREATE TABLE `genre` (
  `IdGenre` int(11) NOT NULL,
  `genreName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`IdGenre`, `genreName`) VALUES
(1, 'Fantastyka'),
(2, 'Horror'),
(3, 'Kryminał');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `roleName` varchar(50) NOT NULL,
  `roleDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleName`, `roleDescription`) VALUES
('admin', 'szef'),
('bibliotekarz', 'ksiazki'),
('czytelnik', 'p');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `updatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUser`, `login`, `password`, `firstName`, `lastName`, `createdAt`, `createdBy`, `updatedAt`, `updatedBy`) VALUES
(12, 'krzysiek', '81dc9bdb52d04dc20036dbd8313ed055', 'krzysiek', 'trombka', '2025-01-16 21:30:51', 12, '2025-01-16 21:30:51', 12),
(14, 'julian', '81dc9bdb52d04dc20036dbd8313ed055', 'julian', 'julian', '2025-01-17 18:26:17', 14, '2025-01-17 18:26:17', 14),
(15, 'lol', '81dc9bdb52d04dc20036dbd8313ed055', 'lol', 'lol', '2025-01-17 18:27:15', 15, '2025-01-17 18:27:15', 15),
(16, 'bartekz', '827ccb0eea8a706c4c34a16891f84e7b', 'bartosz', 'zietek', '2025-01-17 18:44:58', 16, '2025-01-17 18:44:58', 16),
(17, 'basia', 'd93591bdf7860e1e4ee2fca799911215', 'barbara', 'ksiazka', '2025-01-17 18:46:24', 17, '2025-01-17 18:46:24', 17),
(18, 'oskar', '81dc9bdb52d04dc20036dbd8313ed055', 'oskar', 'grzyb', '2025-01-17 21:02:02', 18, '2025-01-17 21:02:02', 18),
(19, 'ziutek', '81dc9bdb52d04dc20036dbd8313ed055', 'ziutek', 'ziutkowski', '2025-01-17 21:27:29', 19, '2025-01-17 21:27:29', 19),
(20, 'paula', '00a1f187721c63501356bf791e69382c', 'paulina', 'niewiem', '2025-01-17 21:41:08', 20, '2025-01-17 21:41:08', 20),
(21, 'szybko', '81dc9bdb52d04dc20036dbd8313ed055', 'szybko', 'wolno', '2025-01-17 21:44:18', 21, '2025-01-17 21:44:18', 21),
(22, 'ktos', '81dc9bdb52d04dc20036dbd8313ed055', 'ktos', 'ktos', '2025-01-18 08:45:38', 22, '2025-01-18 08:45:38', 22),
(23, '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '1234', '2025-01-18 08:47:16', 23, '2025-01-18 08:47:16', 23),
(24, 'neko', '81dc9bdb52d04dc20036dbd8313ed055', 'klaudia', 'zietek', '2025-01-18 09:27:48', 24, '2025-01-18 09:27:48', 24),
(25, 'gawel', '81dc9bdb52d04dc20036dbd8313ed055', 'gawel', 'nazwisko', '2025-01-18 11:28:03', 25, '2025-01-18 11:28:03', 25),
(26, 'sese', '7bc46d3edd635096439c594eec9bc037', 'mebastian', 'sakiela', '2025-01-18 21:20:32', 26, '2025-01-18 21:20:32', 26),
(27, 'wikiloczek', '585ff7e5e3d0f2f6ce0334320951fb61', 'wiktoria', 'kuznicka', '2025-01-22 21:22:11', 27, '2025-01-22 21:22:11', 27),
(28, 'bartek123', '4297f44b13955235245b2497399d7a93', 'bartek123123', 'ketrab321321', '2025-04-04 09:47:17', 28, '2025-04-04 09:47:17', 28),
(29, 'dude', '4297f44b13955235245b2497399d7a93', 'dude', 'dude', '2025-04-04 10:27:43', 29, '2025-04-04 10:27:43', 29),
(30, 'johnny', '4297f44b13955235245b2497399d7a93', 'jan', 'janokowski', '2025-04-18 14:32:05', 30, '2025-04-18 14:32:05', 30),
(31, 'pawelgawel', '4297f44b13955235245b2497399d7a93', 'pawel', 'gawel', '2025-05-30 14:42:04', 31, '2025-05-30 14:42:04', 31);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE `user_role` (
  `IdUser_Role` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `roleName` varchar(50) NOT NULL,
  `createdAt` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updatedAt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`IdUser_Role`, `IDUser`, `roleName`, `createdAt`, `updatedAt`) VALUES
(1, 12, 'czytelnik', '2025-01-16 21:30:51.497993', '2025-01-16 21:30:51.497993'),
(3, 14, 'czytelnik', '2025-01-17 18:26:17.466478', '2025-01-17 18:26:17.466478'),
(4, 15, 'bibliotekarz', '2025-01-17 18:27:15.409306', '2025-01-17 18:27:15.409306'),
(5, 16, 'admin', '2025-01-17 18:44:58.032483', '2025-01-17 18:44:58.032483'),
(6, 17, 'bibliotekarz', '2025-01-17 18:46:24.740923', '2025-01-17 18:46:24.740923'),
(7, 18, 'admin', '2025-01-17 21:02:02.261269', '2025-01-17 21:02:02.261269'),
(8, 19, 'czytelnik', '2025-01-17 21:27:29.440281', '2025-01-17 21:27:29.440281'),
(9, 20, 'czytelnik', '2025-01-17 21:41:08.957127', '2025-01-17 21:41:08.957127'),
(10, 21, 'czytelnik', '2025-01-17 21:44:18.542607', '2025-01-17 21:44:18.542607'),
(11, 22, 'bibliotekarz', '2025-01-18 08:45:38.461257', '2025-01-18 08:45:38.461257'),
(12, 23, 'czytelnik', '2025-01-18 08:47:16.707137', '2025-01-18 08:47:16.707137'),
(13, 24, 'bibliotekarz', '2025-01-18 09:27:48.492703', '2025-01-18 09:27:48.492703'),
(14, 25, 'bibliotekarz', '2025-01-18 11:28:03.158376', '2025-01-18 11:28:03.158376'),
(15, 26, 'bibliotekarz', '2025-01-18 21:20:32.173577', '2025-01-18 21:20:32.173577'),
(16, 27, 'bibliotekarz', '2025-01-22 21:22:11.506054', '2025-01-22 21:22:11.506054'),
(17, 28, 'czytelnik', '2025-04-04 09:47:17.794494', '2025-04-04 09:47:17.794494'),
(18, 29, 'bibliotekarz', '2025-04-04 10:27:43.604811', '2025-04-04 10:27:43.604811'),
(19, 30, 'czytelnik', '2025-04-18 14:32:05.550934', '2025-04-18 14:32:05.550934'),
(20, 31, 'czytelnik', '2025-05-30 14:42:04.887864', '2025-05-30 14:42:04.887864');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`IdBook`),
  ADD KEY `IdGenre` (`IdGenre`);

--
-- Indeksy dla tabeli `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`IdBorrow`),
  ADD KEY `IdBook` (`IdBook`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indeksy dla tabeli `cms_content`
--
ALTER TABLE `cms_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section` (`section`);

--
-- Indeksy dla tabeli `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`IdGenre`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD KEY `roleName` (`roleName`) USING BTREE;

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `createdBy` (`createdBy`),
  ADD KEY `updatedBy` (`updatedBy`);

--
-- Indeksy dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`IdUser_Role`),
  ADD KEY `roleName` (`roleName`),
  ADD KEY `IDUser` (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `IdBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `IdBorrow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cms_content`
--
ALTER TABLE `cms_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `IdGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `IdUser_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`IdGenre`) REFERENCES `genre` (`IdGenre`);

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `users` (`IdUser`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`IdBook`) REFERENCES `books` (`IdBook`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `users` (`IdUser`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`updatedBy`) REFERENCES `users` (`IdUser`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IdUser`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`roleName`) REFERENCES `role` (`roleName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
