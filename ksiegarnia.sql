-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Mar 2022, 18:35
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autor`
--

CREATE TABLE `autor` (
  `id_autora` int(11) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `narodowosc` varchar(30) NOT NULL,
  `jezyk` varchar(30) NOT NULL,
  `rodzaj_tworczosci` varchar(35) NOT NULL,
  `src` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `autor`
--

INSERT INTO `autor` (`id_autora`, `nazwisko`, `imie`, `narodowosc`, `jezyk`, `rodzaj_tworczosci`, `src`) VALUES
(1, 'Mickiewicz', 'Adam', 'Polska', 'polski', 'Poezja i proza', 'img\\autorzy\\mickiewicz.jpg'),
(2, 'Słowacki', 'Juliusz', 'Polska', 'polski', 'dramaty', 'img\\autorzy\\słowacki.jpg'),
(3, 'Sienkiewicz', 'Henryk', 'Polska', 'polski', 'powieści', 'img\\autorzy\\sienkiewicz.jpg'),
(4, 'Żeromski', 'Stefan', 'Polska', 'polski', 'dramaty', 'img\\autorzy\\żeromski.jpg'),
(5, 'Prus', 'Bolesław', 'Polska', 'polski', 'Proza i nowela', 'img\\autorzy\\prus.jpg'),
(6, 'Orzeszkowa', 'Eliza', 'Polska', 'polski', 'powieść', 'img\\autorzy\\orzeszkowa.jpg'),
(7, 'Krasiński', 'Zygmunt', 'Polska', 'polski', 'poezja', 'img\\autorzy\\krasiński.jpg'),
(8, 'Norwid', 'Cyprian Kamil', 'Polska', 'polski', 'poezja', 'img\\autorzy\\norwid.jpg'),
(9, 'Sapkowski', 'Andrzej', 'Polska', 'polski', 'fantazja', 'img\\autorzy\\sapkowski.jpg'),
(10, 'Dickens', 'Charles', 'Wielka Brytania', 'angielski', 'powieść', 'img\\autorzy\\dickens.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id_klienta` int(11) NOT NULL,
  `nazwisko` varchar(60) NOT NULL,
  `imie` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `haslo` varchar(150) NOT NULL,
  `pieniadze` decimal(7,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id_klienta`, `nazwisko`, `imie`, `email`, `haslo`, `pieniadze`) VALUES
(399, 'Serafin', 'Mateusz', 'serafineq@o2.pl', 'mateusz123', '500.00'),
(400, 'Malicki', 'Andrzej', 'andrzej@o2.pl', '123456', '166.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `id_autora` int(11) NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `wydawnictwo` varchar(20) NOT NULL,
  `jezyk_ksiazki` varchar(15) NOT NULL,
  `opis` text NOT NULL,
  `rok_wydania` varchar(4) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `id_autora`, `cena`, `wydawnictwo`, `jezyk_ksiazki`, `opis`, `rok_wydania`, `src`) VALUES
(1, 'Pan Tadeusz', 1, '32', 'WSiP', 'polski', 'Ta epopeja narodowa (z elementami gawędy szlacheckiej) powstała w latach 1832–1834 w Paryżu. Składa się z dwunastu ksiąg pisanych wierszem, trzynastozgłoskowym aleksandrynem polskim. Czas akcji: pięć ', '1960', 'img\\okladki\\pan-tadeusz.jpg'),
(2, 'Dziady cz.II', 1, '23', 'Wydawnictwo Znak', 'polski', 'Utwór opisujący dawny obrzęd ludowy związany z przywoływaniem dusz zmarłych, w trakcie którego żywi pomagają umarłym w odzyskaniu spokoju ducha, a zmarli w zamian udzielają żyjącym przestróg.', '1834', 'img\\okladki\\dziady2.jpg'),
(3, 'Kordian', 2, '11', 'Wydawnictwo Znak', 'polski', 'Dramat Kordian jest polemiką niezdolności do romantycznego czynu spiskowca, obezwładnionego moralną rozterką legalizmu i krytyką postawy Konrada z Dziadów. Utwór nawiązuje do powstania listopadowego i opisuje historię nieudanego spisku na życie cara Mikołaja I', '1834', 'img\\okladki\\kordian.jpg'),
(4, 'Syzyfowe Prace', 4, '40', 'WSiP', 'polski', 'W powieści Syzyfowe prace Żeromski przedstawił proces dojrzewania, dorastania i kształtowania się umysłu, charakteru i osobowości głównego bohatera, Marcina Borowicza.', '1897', 'img\\okladki\\syzyfowe-prace.jpg'),
(5, 'Lalka', 5, '39', 'WSiP', 'polski', 'Bohaterem Lalki jest Stanisław Wokulski, człowiek o dwóch obliczach', '1889', 'img\\okladki\\lalka.jpg\n'),
(6, 'Nie-Boska Komedia', 7, '50', 'WSiP', 'polski', 'Najważniejszym problemem poruszanym w dziele Krasińskiego jest konflikt polityczno-społeczny.', '1835', 'img\\okladki\\nie-boska.jpg'),
(7, 'Nad Niemnem', 6, '25', 'Bellona', 'polski', 'Nad Niemnem to epicka trzytomowa powieść, która przedstawia panoramę polskiego społeczeństwa lat 80. XIX wieku.', '1888', 'img\\okladki\\nad-niemnem.jpg'),
(8, 'Przedwiośnie', 4, '39', 'WSiP', 'polski', 'Przedwiośnie to wybitna powieść Stefana Żeromskiego wydana w 1924 (z datą 1925) w Warszawie', '1924', 'img\\okladki\\przedwiośnie.jpg'),
(9, 'Konrad Wallenrod', 1, '15', 'Siedmioróg', 'polski', 'Konrad Wallenrod to bohater głęboko nieszczęśliwy i wewnętrznie rozdarty pomiędzy tym, co etyczne, godne rycerza, a tym, co niemoralne.', '1828', 'img\\okladki\\konrad-wallenrod.jpg'),
(10, 'Ostatnie życzenie', 9, '50', 'SuperNowa', 'polski', 'zbiór opowiadań Andrzeja Sapkowskiego stanowiący wstęp do cyklu wiedźmińskiego opowiadającym o perypetiach Geralta z Rivii', '1993', 'img\\okladki\\ostatnie-zyczenie.jpg'),
(11, 'Opowieść Wigilijna', 10, '45', 'WSiP', 'polski', 'Pokazuje głębokie doświadczenie i przemianę skąpca Ebenezera Scrooge\'a, zachodzącą w czasie nocy wigilijnej.', '1843', 'img\\okladki\\opowiesc-wigilijna.jpg'),
(12, 'Potop', 3, '60', 'WSiP', 'polski', 'Głównym bohaterem powieści jest młody chorąży orszański Andrzej Kmicic, który przybywa na Laudę, aby zgodnie z testamentem Herakliusza Billewicza poślubić jego wnuczkę Aleksandrę Billewiczównę.', '1886', '	\nimg\\okladki\\potop.jpg'),
(13, 'Balladyna', 2, '28', 'IBiS', 'polski', '“Balladyna” to tragedia napisana przez Juliusza Słowackiego. Opowiada o tym, jak daleko można się posunąć by osiągnąć cel', '1839', 'img\\okladki\\balladyna.jpeg'),
(14, 'Ogniem i Mieczem', 3, '49', 'WSiP', 'polski', 'W „Ogniem i mieczem” ta historia dotyczy tragicznego konfliktu polsko-ukraińskiego, wojen polsko-kozackich i powstania Bohdana Chmielnickiego.', '1884', 'img\\okladki\\ogniem-i-mieczem.jpg'),
(15, 'Krzyżacy', 3, '56', 'WSiP', 'polski', 'Tłem historycznym Krzyżaków jest fragment historii Polski przedstawiający konflikt jagiellońskiej Polski z zakonem krzyżackim.', '1900', 'img\\okladki\\krzyżacy.jpg'),
(16, 'Gloria Victis', 6, '19', 'IBiS', 'polski', 'Gloria victis przynosi obraz jednego z tragicznych epizodów powstania styczniowego, które wybuchło w roku 1863, a rok później dogorywało. ', '1910', 'img\\okladki\\gloria-victis.jpg'),
(17, 'Quo vadis', 3, '42', 'Kolorowa Klasyka', 'polski', 'Głównym wątkiem powieści jest miłość Winicjusza i Ligii. Należą oni do dwóch odrębnych światów: Winicjusz jest patrycjuszem rzymskim, Ligia zakładniczką pochodzącą z barbarzyńskiego plemienia Ligów, a', '1895', 'img\\okladki\\quo-vadis.jpg'),
(18, 'Dziady cz.III', 1, '45', 'WSiP', 'polski', 'Trzecia część \"Dziadów\" jest więc wyznaniem miłości do Ojczyzny, ukazaniem jej cierpienia i uznaniem jej szczególnego miejsca w historii świata.', '1832', 'img\\okladki\\dziady3.png'),
(19, 'W pustyni i w puszczy', 3, '60', 'Gebethner i Wolff', 'polski', 'Powieść przygodowa dla młodzieży Henryka Sienkiewicza publikowana w odcinkach w latach 1910–1911 w dzienniku „Kurier Warszawski”, wydana w 1911 w Warszawie w wydawnictwie „Gebethner i Wolff”.', '1910', 'img\\okladki\\w-pustyni-i-w-puszczy.jpg'),
(20, 'David Copperfield', 10, '35', 'CM Klasyka', 'polski', 'Jest to historia życia Davida Copperfielda od dzieciństwa aż do wieku średniego, z jego własnymi przygodami oraz licznymi przyjaciółmi i wrogami, których spotkał na swojej drodze.', '1849', 'img\\okladki\\david-copperfield.jpg'),
(21, 'Krew elfów', 9, '56', 'supernowa', 'polski', 'Tymczasem Lwiątkiem z Cintry interesuje się pewien zagadkowy czarodziej o imieniu Rience, bez wątpienia będący wysłannikiem potężniejszego maga.', '1994', 'img\\okladki\\krew-elfow.jpg'),
(22, 'Chrzest ognia', 9, '29', 'supernowa', 'polski', 'Wiedźmin Geralt po wyleczeniu się w lesie Brokilon i zasięgnięciu informacji od łuczniczki Milvy wyrusza wraz z Jaskrem, by uratować Ciri. Ruszają wzdłuż rzeki Wstążki na zachód w kierunku Verden. Wpadają na havekarów – kupców handlujących ze Scoia\'tael, do których przybywa kilku nilfgaardzkich rycerzy.', '1996', 'img\\okladki\\chrzest-ognia.jpg'),
(23, 'Moja piosnka', 8, '20', 'ebookpoint', 'polski', 'Podmiot liryczny opisuje ją jako kraj religijny, w którym ludzie mają poszanowanie do chleba, znają wartości moralne, są życzliwi oraz pomocni. Osoba mówiąca czuje się na emigracji osamotniona, tęskni za ojczyzną', '1934', 'img\\okladki\\moja-piosnka.jpg'),
(24, 'Irydion', 7, '35', 'ossolineum', 'polski', 'Podstawowym motywem dramatu jest bunt Irydiona, syna Amfilocha – przejrzysta aluzja do tragedii powstania listopadowego – będący sprzecznością między słusznym celem, jakim jest obalenie despotyzmu, a nieszlachetną motywacją jego działań (zemsta) i środkami (podstęp, bezwzględność), które do tego celu prowadzą.', '1836', 'img\\okladki\\irydion.jpg'),
(25, 'Król-Duch', 2, '19', 'Nowoczesna Polska', 'polski', '„Król-Duch” stanowi rozszerzenie spirytualistycznej koncepcji zawartej w „Genezis z ducha”. Tym razem tytułowy duch, istota nad wyraz potężna, porusza się po historycznej przestrzeni Polski i Rusi. Wciela się we władców, a wszystko, co dzieje się w państwie, jest skutkiem jego ingerencji.', '1847', 'img\\okladki\\krol-duch.jpg'),
(26, 'Siłaczka', 4, '19', 'Lissner Studio', 'polski', 'Nowela Stefana Żeromskiego, wydana po raz pierwszy w zbiorze Opowiadania w 1895 r., opowiadająca historię lekarza Pawła Obareckiego i nauczycielki Stanisławy Bozowskiej. Akcja dzieje się w Obrzydłówku – małej wsi, do której doktor przyjechał w wieku 37 lat.', '1895', 'img\\okladki\\silaczka.jpg'),
(27, 'Milczenie', 8, '16', 'Avis Artis', 'polski', '“Milczenie” to rozprawa Cypriana Kamila Norwida o charakterze filozoficznym i literackim, napisana około 1882 roku. Autor ukazuje swoją opinię na temat niechęci ludzi jemu współczesnych wobec zagadnień filozofii. Wierzy, że jest ona w stanie \"uczynić człowieka moralnie szczęśliwym\".', '1902', 'img\\okladki\\milczenie.jpg'),
(28, 'Dobra pani', 6, '10', 'abc', 'polski', 'Eliza Orzeszkowa w swoim utworze obnaża powierzchowność i fałsz realizacji pozytywistycznego hasła filantropii i dobroduszności. Tytułowa \"dobra pani\" to ironiczne określenie Eweliny Krzyckiej, która swoją fałszywą dobroczynnością wyrządza ludziom krzywdę, traktując ich jak zabawki.', '1888', 'img\\okladki\\dobra-pani.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `data_zlozenia_zamowienia` date NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_ksiazki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `data_zlozenia_zamowienia`, `id_klienta`, `id_ksiazki`) VALUES
(62, '2022-02-11', 400, 2),
(63, '2022-02-11', 400, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autora`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
