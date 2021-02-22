-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Cze 2020, 13:45
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kategoria` int(11) UNSIGNED NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id_kategoria`, `nazwa`) VALUES
(1, 'desery'),
(2, 'obiady'),
(3, 'zupy'),
(4, 'vege');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kuchnie_swiata`
--

CREATE TABLE `kuchnie_swiata` (
  `id_kuchnie_swiata` int(11) UNSIGNED NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `zdjecie` varchar(100) NOT NULL,
  `id_kategoria` int(11) UNSIGNED NOT NULL,
  `skladniki` varchar(1024) NOT NULL,
  `przygotowanie` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kuchnie_swiata`
--

INSERT INTO `kuchnie_swiata` (`id_kuchnie_swiata`, `nazwa`, `opis`, `zdjecie`, `id_kategoria`, `skladniki`, `przygotowanie`) VALUES
(1, 'Pieczony bakłażan z kaszą jęczmienną', 'Im częściej jem bakłażany, tym bardziej uniwersalnym warzywem mi się wydają! Bakłażan jest pyszny i można go przygotować na naprawdę…', '../img/bakłazan.jpg', 4, 'bakłażan - 2 szt,\r\nkasza jęczmienna - 1/2 szklanki,\r\nkumin mielony - 2 łyżeczki, \r\nkolendra mielona - 2 łyżeczki, \r\nchili - ok. 1 łyżeczka płatków (lub do smaku)', '3/4 oliwy połącz w miseczce z przeciśniętym przez praskę czosnkiem, kuminem, kolendrą, chili, słodką papryką i szczyptą soli.\r\n\r\nBakłażany przetnij wzdłuż na połówki. Miąższ natnij w skośną kratkę (tak, aby jednak nie naciąć skórki). Każdą połówkę posmaruj równomiernie mieszanką przypraw. Ułóż je na blaszce do pieczenia (przyprawioną stroną do góry) i wstaw do piekarnika nagrzanego do 200 oC (góra/dół), piecz aż będą miękkie, ok. 30 minut (jeśli widzisz, że wierzch zbytnio się przypieka, nakryj go folią aluminiową lub pergaminem).\r\n\r\nRodzynki namocz przez 20 minut w ciepłej wodzie.\r\n\r\nKaszę ugotuj w osolonej wodzie. Ciepłą połącz z rodzynkami, migdałami i resztą oliwy, możesz dodać do smaku nieco soku z cytryny.\r\n\r\nUpieczone bakłażany ułóż na półmisku.'),
(2, 'Socca / fariniata- placuszki z mąki z ciecierzycy', 'Mąkę z ciecierzycy mam zwykle w kuchennej szafce, bo jak żadna inna nadaje idealną chrupkość gofrom (TU przykładowy przepis) czy...', '../img/socca.jpg', 1, 'mąka z ciecierzycy - 120 g,\r\nwoda - 230 ml,\r\nsól - szczypta,\r\nbiałko - 1 szt(z jednego jajka),\r\nsoda - szczypta ok. 1/4 łyżeczki\r\nopcjonalnie oliwa - ok. 1 łyżka', 'W miseczce połącz mąkę z ciecierzycy z wodą i solą.  Białko jajka lekko ubij na delikatną pianę. Dodaj do ciasta, delikatnie połącz.  Ja do placuszków dodaję jeszcze odrobinę sody, są wtedy bardziej pulchne- tym samym nieco dalsze od oryginału, ale ja lubię bardziej delikatne placuszki.  Smażenie: rozgrzej patelnię, a następnie nieco zmniejszy ogień. Rozgrzej na patelni odrobinę oliwę, nalej porcję ciasta, a następnie smaż, aż pojawią się na powierzchni bąbelki powietrza. Przełóż i smaż z drugiej strony, na złoto.'),
(3, 'SYRNIKI- TWAROGOWE PLACUSZKI', 'Syrniki (zwane też twarożnikami) to potrawa kuchni rosyjskiej, ukraińskiej, białoruskiej. Placuszki składające się w większości z białego sera, który po…', '../img/syrniki.jpg', 1, 'twaróg - 1/2 kg (mielony, w kostce),\r\njajko - 2 szt,\r\nkaszka manna - 100 g,\r\nsól - duża szczypta,\r\ncukier - 2 łyżki,\r\nmąka pszenna - ok. 3 łyżki, do obtaczania,\r\nolej - do smażenia,\r\n', 'W misce połącz rozdrobniony widelcem twaróg, jajka, kaszkę, sól i cukier. Całość wymieszaj, aby składniki się połączyły, niezbyt jednak długo.\r\n\r\nŁyżką nabieraj porcję ciasta, przełóż na talerz z mąką, obtocz. Rękoma delikatnie uformuj okrągły placuszek, gruby na ok. 1,5 cm. Otrzep nadmiar mąki.\r\n\r\nPlacuszki układaj na patelni z rozgrzanym olejem, smaż na złoto z obu stron, na rozgrzanym oleju.\r\n\r\nPodawaj na ciepło z ulubionymi dodatkami np. kwaśną śmietaną i konfiturą owocową.'),
(5, 'Mus truskawkowy', 'Mus truskawkowy jest super uniwersalny i bardzo prosty do zrobienia. Szykuję z niego nie tylko desery w pucharkach, ale i krem do tortu, czy też mus do serników na zimno.', '../img/mus.jpg', 1, '500 g truskawek świeżych lub mrożonych,\r\n1 szklanka śmietanki kremówki 30 % - 250 g,\r\n4 płaskie łyżeczki żelatyny - 15 g,\r\n3 łyżki cukru pudru - 60 g,\r\n3 łyżki soku z cytryny lub limonki,', 'Szklanka ma u mnie pojemność 250 ml.\r\nŚmietankę trzymaj schłodzoną w lodówce. \r\n\r\nChłodzenie gotowego musu: Aby mus stężał, należy odłożyć go do lodówki. To jak szybko zrobi się sztywny zależy głównie od tego, jak duże jest naczynie. Jeśli podzielisz go na kilka deserów do miseczek po 200 ml, to będzie gotowy już po około dwóch, trzech godzinach. \r\n\r\nKalorie policzone zostały na podstawie użytych przeze mnie składników. Jest to więc orientacyjna ilość kalorii liczona na podstawie produktów, których użyłam w danym przepisie. Z podanej ilości składników wyszło mi 700 gramów musu, co u mnie odpowiadało pojemności około 850 ml. Taka ilość wystarczy na cztery desery w pucharkach o pojemności trochę ponad 200 ml każdy. Musem można też przełożyć dwie warstwy mniejszego tortu lub też wyłożyć go jako górna warstwa sernika na zimno. '),
(6, 'abcd', 'abdc                       ', '../img/default.jpg', 2, 'abbcd,', 'advd.'),
(7, 'abcd', 'abdc                       ', '../img/zupa.jpg', 2, 'abbcd,', 'advd.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_oceny` int(10) UNSIGNED NOT NULL,
  `id_kuchnie_swiata` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `ocena` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_oceny`, `id_kuchnie_swiata`, `id_user`, `ocena`) VALUES
(1, 1, 15, 5),
(2, 2, 15, 3),
(3, 2, 20, 1),
(7, 7, 15, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `email`, `pass`) VALUES
(15, 'Andrzej', 'Dominiak', 'szykacz@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Zk16T29iM3dKZmNHQUwvQQ$h1BpwroXh7actSh1poB8Obn1B/qvE2/QJn2MQAxc/aM'),
(20, 'Wojtek', 'Andrzejak', 'szykacz15@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZmJSUWIydW9vWkwyT1hLMA$WL0BSiBV0j+cMd/y8dGAgAe1lNN1HSgb00XwEKzYD24'),
(21, 'Szymon', 'Kowalczyk', 's@op.pl', '$argon2id$v=19$m=65536,t=4,p=1$cXFFcTdCZ1Y1VzdvSm1xMw$jvJy0hecuH8xbKhCPllOcK0oRAsLpRja9Dt/f6/g6e8'),
(22, 'Szymon', 'Kowalczyk', 's2@op.pl', '$argon2id$v=19$m=65536,t=4,p=1$OUUyOGQzUi9SMUhQYmxtNA$Lo/OeWjoJ1LSoznoERz02HkxEl+GCUFahtfuSvxsgfg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indeksy dla tabeli `kuchnie_swiata`
--
ALTER TABLE `kuchnie_swiata`
  ADD PRIMARY KEY (`id_kuchnie_swiata`),
  ADD KEY `id_kategoria` (`id_kategoria`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id_oceny`),
  ADD KEY `id_kuchnie_swiata` (`id_kuchnie_swiata`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kategoria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `kuchnie_swiata`
--
ALTER TABLE `kuchnie_swiata`
  MODIFY `id_kuchnie_swiata` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_oceny` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kuchnie_swiata`
--
ALTER TABLE `kuchnie_swiata`
  ADD CONSTRAINT `kuchnie_swiata_ibfk_1` FOREIGN KEY (`id_kategoria`) REFERENCES `kategorie` (`id_kategoria`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_kuchnie_swiata`) REFERENCES `kuchnie_swiata` (`id_kuchnie_swiata`),
  ADD CONSTRAINT `oceny_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
