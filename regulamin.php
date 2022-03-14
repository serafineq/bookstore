<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link rel="stylesheet" href="brown-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="img\fontello\css\fontello.css">    
</head>
<body>
    <div id="frame">
    <?php
        session_start();
        ?>
        <header>
            <div id="name"><a href="index.php">ZAKSIĄŻKOWANI.PL</a></div>
        </header>
        <section id="menu-box">
            <ul>
                <a href="ksiazki.php"><li>Książki</li></a>
                <?php
                    if(isset($_SESSION["email"])) {
                        echo "<a href='logout.php'><li>Wyloguj</li></a>";
                    }
                    else {
                        echo "<a href='logowanie.php'><li>Logowanie</li></a>";
                    }
                    if(isset($_SESSION["email"])) {

                    }
                    else {
                        echo "<a href='rejestracja.php'><li>Rejestracja</li></a>";
                    }
                ?>
                <a href="kontakt.php"><li>Kontakt</li></a>
                <a href="regulamin.php"><li>Regulamin</li></a>
                <?php
                if(isset($_SESSION["email"])) {
                    echo "<a href='profil.php'><li><div class='icon-user'>Profil</div></li></a>";
                }
                else {
                    echo "<a href='rejestracja.php'><li>Rejestracja</li></a>";
                }
                ?>
            </ul>
        </section>
        <section id="main">
            <div id="main-box">
                <div id="idk">
<?php

echo nl2br("
<b>Regulamin Serwisu Zaksiążkowani.pl</b>

1. Klient – osoba fizyczna, która ukończyła co najmniej 13. rok życia, przy czym w przypadku nieukończenia przez tę osobę 18. roku życia, wymagana jest zgoda jej przedstawiciela ustawowego, a także osoba prawna oraz jednostka organizacyjna nie będąca osobą prawną, której przepisy szczególne przyznają zdolność prawną, a która dokonuje Zamówienia.
2. Księgarnia Internetowa (Zaksiążkowani.pl) – serwis internetowy dostępny pod adresem www.znak.com.pl, za pośrednictwem którego Klient może kupić Towary.
3. Towar – produkty (w tym produkty w postaci elektronicznej, e-booki) prezentowane w e-Księgarni.
4. Zamówienie – oświadczenie woli Klienta, zmierzające bezpośrednio do zawarcia Umowy sprzedaży Towarów, określające rodzaj i liczbę Towaru.

<b>§ 1. Postanowienia ogólne</b>

1. Księgarnia Internetowa (Zaksiążkowani.pl) prowadzona jest przez Sprzedawcę.
2. Niniejszy regulamin („Regulamin”) określa prawa i obowiązki Klientów w związku z korzystaniem z e-Księgarni, w tym określa:
a) warunki i zasady składania przez Klientów Zamówień drogą elektroniczną w ramach e-Księgarni oraz

b) zasady zawierania umów sprzedaży Towarów w ramach e-Księgarni.

3. Sprzedawca i Klient wzajemnie zobowiązani są do przestrzegania postanowień Regulaminu.

<b>§ 2. Warunki korzystania z Księgarni Internetowej</b>

1. Klient zobowiązany jest w szczególności do:
a) korzystania z e-Księgarni w sposób nie zakłócający jej funkcjonowania, w szczególności poprzez użycie określonego oprogramowania lub urządzeń,

b) niedostarczania i nieprzekazywania treści zabronionych przez przepisy obowiązującego prawa,

c) korzystania z e-Księgarni w sposób zgodny z przepisami obowiązującego na terytorium Rzeczypospolitej Polskiej prawa, postanowieniami Regulaminu, a także z przyjętymi w danym zakresie zwyczajami,

d) korzystania z e-Księgarni w sposób nieuciążliwy dla pozostałych Klientów oraz dla Sprzedawcy, z poszanowaniem ich dóbr osobistych (w tym prawa do prywatności) i wszelkich przysługujących im praw,

e) korzystania z wszelkich treści zamieszczonych w ramach e-Księgarni jedynie w zakresie własnego użytku osobistego.

2. Korzystanie z e-Księgarni możliwe jest pod warunkiem spełnienia przez system teleinformatyczny, z którego korzysta Klient następujących minimalnych wymagań technicznych:
a) przeglądarka internetowa: Internet Explorer w wersji 9 lub nowszej; Firefox w wersji 3.6.4 lub nowszej; Chrome w wersji 8 lub nowszej; Opera w wersji 10.60 lub nowszej; Safari w wersji 5.0 lub nowszej lub inna przeglądarka internetowa obsługująca technologie HTML5, CSS3 oraz JavaScript;

b) sugerowana rozdzielczość ekranu: 1024x768;

c) dostępu do sieci Internet według standardowych stawek stosowanych i naliczanych przez operatora telekomunikacyjnego Klienta.

d) ponadto Klient powinien posiadać numer telefonu komórkowego, na który będą wysyłane informacje o możliwości odbioru paczki.

<b>§ 3. Warunki realizacji Zamówienia</b>

1. 1. W celu zawarcia umowy sprzedaży Towaru należy na stronie e-Księgarni dokonać wyboru dostępnego Towaru i złożyć elektroniczne Zamówienie, podejmując kolejne czynności w oparciu o wyświetlane Klientowi komunikaty lub informacje.
2. Złożenie skutecznego Zamówienia możliwe jest po akceptacji niniejszego Regulaminu.
3. W trakcie składania Zamówienia – do momentu naciśnięcia przycisku „Zamawiam z obowiązkiem zapłaty” – Klient ma możliwość modyfikacji wprowadzonych danych oraz wybranego Towaru.
4. Po podaniu przez Klienta wszystkich niezbędnych danych wyświetlone zostanie podsumowanie złożonego Zamówienia.
5. 5. W celu wysłania Zamówienia konieczna jest akceptacja i potwierdzenie przez Klienta wszystkich jego istotnych elementów oraz naciśnięcie przycisku „Kupuję i płacę”.
6. Informacje o Towarach podane na stronach internetowych Sklepu stanowią ofertę, w rozumieniu art. 66 Kodeksu Cywilnego, chyba że z informacji tej jednoznacznie wynika, że towar jest niedostępny i złożenie Zamówienia nie jest możliwe.
7. Wysłanie przez Klienta Zamówienia stanowi oświadczenie woli zawarcia ze Sprzedawcą umowy sprzedaży, zgodnie z treścią Regulaminu.
8. Umowę traktuje się za zawartą z momentem wpływu Zamówienia Klienta do systemu informatycznego e-Księgarni, pod warunkiem zgodności Zamówienia z Regulaminem.
9. Po zawarciu umowy, Klient otrzymuje wiadomość e-mail, zawierającą potwierdzenie istotnych elementów Zamówienia.
10. Umowa sprzedaży Towaru zawierana jest w języku polskim.
11. Księgarnia Internetowa nie prowadzi sprzedaży hurtowej. W przypadku złożenia przez jednego Klienta w ciągu 30 dni jednego lub więcej Zamówień na łącznie więcej niż 3 sztuki tego samego Towaru lub Zamówień na łącznie więcej niż 20 sztuk różnych Towarów, Sprzedawca zastrzega sobie prawo do anulowania takiego Zamówienia lub do jego realizacji na indywidualnie uzgodnionych z Klientem warunkach.
12. Utrwalenie, zabezpieczenie, udostępnienie oraz potwierdzenie Klientowi istotnych postanowień Umowy sprzedaży Towarów następuje poprzez przesłanie Klientowi na podany przez niego adres e-mail potwierdzenia złożenia Zamówienia wraz z kopią niniejszego regulaminu.

<b>§ 4. Ceny produktów i promocje</b>

1. Ceny Towarów na stronie e-Księgarni zamieszczone przy Towarze podawane są w złotych polskich i zawierają podatek VAT. Ceny te nie zawierają informacji dotyczących kosztów przesyłki oraz ewentualnych opłat celnych, które podawane są oddzielne przed złożeniem Zamówienia.
2. Ceną wiążącą i ostateczną jest cena Towaru podana w Koszyku w chwili składania Zamówienia przez Klienta na stronie e-Księgarni.
3. W przypadku Zamówień składanych w ramach obowiązujących promocji są one realizowane z uwzględnieniem rabatów wynikających z warunków konkretnej promocji, obliczanych od regularnych cen Towarów z chwili składania Zamówienia.
4. W przypadku sprzedaży w ramach ogłaszanych promocji e-Księgarnia zastrzega możliwość wprowadzenia ograniczeń ilościowych w sprzedaży Towarów tego samego rodzaju (np. określenie maksymalnej liczby egzemplarzy tego samego tytułu). Ograniczenia, o których mowa powyżej, określane są w warunkach promocji.

<b>§ 5. Formy płatności, warunki dostawy</b>

1. Księgarnia internetowa udostępnia następujące formy płatności:
a) Płatność online. Jest to płatność z wykorzystaniem karty płatniczej, przelewu online, lub systemu płatności mobilnych Blik. Ta forma płatności realizowana jest przez zewnętrznego operatora płatności. W przypadku braku wpłaty w terminie 7 dni Zamówienie zostaje anulowane.

b) Przelew na rachunek Sprzedawcy (przedpłata): rachunek i dane do przelewu Klient otrzymuje na podany adres e-mail. W przypadku braku wpłaty w terminie 7 dni Zamówienie zostaje anulowane.

c) Płatność przy odbiorze gotówkową lub kartą. Z tytułu płatności przy odbiorze zostanie pobrana dodatkowa opłata, której wysokość jest podawana w trakcie składania Zamówienia. Ta opcja płatności nie jest dostępna przy Zamówieniach, których łączna wartość wynosi 500 zł lub więcej.

2. Wyboru formy dostawy zakupionego Towaru Klient dokonuje w trakcie składania Zamówienia.
3. Informacja o kosztach dostawy dotycząca konkretnego Zamówienia dostępna jest w trakcie jego składania. Aktualna tabela zawierająca informacje o kosztach dostawy oraz o ewentualnych zwolnieniach z kosztów dostawy, dostępna jest na stronach e-Księgarni.
4. Przy odbiorze przesyłki z Towarem, Klient powinien sprawdzić przesyłkę, a w szczególności jej opakowanie. W przypadku stwierdzenia uszkodzenia przesyłki lub samego opakowania, Klient może odmówić odbioru przesyłki i powinien zwrócić się do jej dostawcy o sporządzenie protokołu szkody.
5. Sprzedawca do każdego zrealizowanego Zamówienia wystawia na dane podane przez Klienta w Zamówieniu fakturę w formie elektronicznej i doręcza ją na podany przez Klienta adres poczty elektronicznej.
6. Klient nabywający Towary w ramach prowadzonej przez siebie działalności gospodarczej (potocznie „kupujący na fakturę”) powinien w trakcie składania Zamówienia w zakładce „dane do faktury” podać swoją firmę, jej adres oraz numer identyfikacji do celów podatkowych (NIP). Sprzedawca może odmówić wystawienia faktury lub jej korekty w razie braku lub błędnego podania numeru NIP Klienta.

<b>§ 6. Uprawnienie do odstąpienia od Umowy</b>

1. Klient będący osobą fizyczną może odstąpić od umowy zawartej na odległość bez podania przyczyny w terminie 14 (słownie: czternastu) dni. Uprawnienie do odstąpienia od umowy nie przysługuje jeśli Klient zawarł umowę w ramach prowadzonej przez siebie działalności gospodarczej polegającej na produkcji lub sprzedaży zamówionych Towarów.
2. Wskazany w punkcie powyżej termin 14-dniowy liczony jest od dnia, w którym nastąpiło wydanie Towaru. Datą wydania Towaru jest data jego odbioru przez Klienta lub data jego doręczenia przez operatora pocztowego lub kuriera. Dla zachowania wskazanego terminu wystarczające jest wysłanie oświadczenia przed jego terminem.
3. Aby skorzystać z prawa do odstąpienia, Klient powinien złożyć Sprzedawcy jednoznaczne oświadczenie o skorzystaniu z tego prawa np. za pomocą poczty tradycyjnej lub elektronicznej.
4. Oświadczenie o odstąpieniu od umowy Klient może złożyć na formularzu odstąpienia od umowy stanowiącym załącznik do regulaminu. Korzystanie z formularza nie jest obowiązkowe, ale gwarantuje, że Sprzedawca jednoznacznie zinterpretuje wolę Klienta.
5. W razie skorzystania z prawa odstąpienia Klient zobowiązany jest do zwrotu zakupionego Towaru. Zwrot powinien nastąpić niezwłocznie, nie później niż w terminie 14 dni. Do czasu zwrotu Towaru Klient odpowiada za zniszczenie i uszkodzenie Towaru lub inne zmniejszenie jego wartości, chyba że było to niezbędne do zbadania charakteru, cech lub funkcjonalności Towaru.
6. Zakupiony Towar należy zwrócić na adres: Społeczny Instytut Wydawniczy ZNAK Sp. z o.o., Panattoni Park III, ul. Majdzika 15, 32-050 Skawina.
7. Koszt opakowania i odesłania Towaru ponosi Klient. Koszty te zależą od wybranego przez Klienta operatora pocztowego.
8. Prawo odstąpienia od umowy nie przysługuje w przypadku następujących Towarów:
a) nagrań audialnych i wizualnych oraz zapisanych na nośnikach programów komputerowych jeśli opakowanie zostało otwarte po dostarczeniu;

b) o właściwościach określonych przez Klienta w Zamówieniu lub ściśle związanych z jego osobą (przykładowo książka lub gadżet z dedykacją podaną przez Klienta),

c) o w przypadku dostarczania dzienników, periodyków lub czasopism,

d) innych przepadkach przewidzianych prawem.

9. Sprzedawca niezwłocznie po otrzymaniu zwrotu Towaru, nie później jednak niż w terminie 14 dni od otrzymania oświadczenia o odstąpieniu od umowy, zwróci Klientowi uiszczoną kwotę obejmującą cenę Towaru oraz koszt wysyłki Towaru do Klienta (z wyjątkiem dodatkowych kosztów wynikających z wybranego przez Klienta sposobu dostarczenia Towaru innego niż najtańszy - zwykła wysyłka za pośrednictwem operatora pocztowego).
10. Zwrot pieniędzy zostanie dokonany tym samym sposobem, jak wybrana przez Klienta forma płatności przy składaniu Zamówienia, chyba że Klient składając oświadczenie o odstąpieniu od umowy wskaże numer rachunku bankowego.

<b>§ 7. Dane osoboweZasady przetwarzania danych osobowych Klientów przez Sprzedawcę opisane w Polityce prywatności dostępnej na stronie e-Księgarni.§ 8. Reklamacje, postanowienia końcowe
</b>
1. Reklamacje Klient może zgłaszać pisemnie na adres e-Księgarni: Społeczny Instytut Wydawniczy ZNAK Sp. z o.o., ul. Madalińskiego 9, 30-303 Kraków lub mailowo na adres: sklep@znak.com.pl
2. W reklamacji Klient powinien podać swoje imię i nazwisko, adres do korespondencji, rodzaj i datę wystąpienia nieprawidłowości.
3. Sprzedawca rozpozna reklamację niezwłocznie nie później jednak niż w terminie 14 dni od jej złożenia.
4. Sprzedawca odpowiada wobec Klienta za wady fizyczne i prawne zakupionego Towaru. Jeśli Klient ma miejsce zwykłego pobytu w Polsce, odpowiedzialność tę reguluje art. 556 i następne ustawy - Kodeks cywilny.
§ Rozwiązywanie sporów i postanowienia końcowe

1. Konsument może uzyskać bezpłatną pomoc w sprawie swoich uprawnień́ oraz w sprawie sporu między nim, a Sprzedawcą, zwracając się do powiatowego (miejskiego) rzecznika konsumentów lub organizacji społecznej, do której zadań statutowych należy ochrona konsumentów. Informacje dla konsumentów, w tym informacje na temat możliwości uzyskania pomocy, dostępne są na stronie internetowej Prezesa Urzędu Ochrony Konkurencji i Konsumentów (uokik.gov.pl) w zakładce „Rozstrzyganie sporów konsumenckich”.
2. Pod adresem https://ec.europa.eu/consumers/odr konsument ma dostęp do rozstrzygania sporów konsumenckich drogą elektroniczną za pomocą unijnej platformy internetowej (platforma ODR). Platforma ODR stanowi wielojęzyczną, interaktywną stronę internetową dla obsługi konsumentów i przedsiębiorców dążących do pozasądowego rozstrzygnięcia sporów wynikających z zawarcia na odległość umowy sprzedaży lub umowy o świadczenie usług.
3. Ewentualne spory powstałe między Klientem niebędącym konsumentem a Sprzedawcą, rozstrzygane będą przez sąd miejscowo właściwy dla siedziby Sprzedawcy.
4. Klienci mogą uzyskać dostęp do niniejszego Regulaminu w każdym czasie za pośrednictwem odsyłacza zamieszczonego w stopce strony głównej Księgarni Internetowej oraz pobrać go i sporządzić jego wydruk.
5. Załącznikiem do regulaminu jest wzór oświadczenia o odstąpieniu od umowy.")
?>                    
                </div>
            </div>
        </section>
    </div>
</body>
</html>