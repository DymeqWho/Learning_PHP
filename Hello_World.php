<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>

<?php
$zmienna4 = 4;
$Zmienna4 = 2;
$wysokosc = 5;
$szerokosc = 9;
echo "<h1>Hello World!</h1>\n";
echo "piszę stronę <br />\n";
echo "łączę stringi za pomocą kropki"." to są połączone stringi za pomocą kropki\n";

echo "<br/> $zmienna4";
echo "<br /> $Zmienna4";
echo "<br />_________________________________<br />";
var_dump($Zmienna4);
 echo "<br />_________________________________<br />";
 $tekst = "abcd";
 echo "<br />_________________________________<br />";
var_dump($tekst);
 echo "<br />_________________________________<br />";
 echo $tekst{0};
 echo "<br /><br /><br /><br /><br /><br />";
 echo "wysokość wynosi $wysokosc <br />";
 echo 'szerokość wynosi $szerokosc <br />';
 echo "<br /><br /><br />";
 
 echo ord('1');
 echo "<br />";
 echo chr(49);
  echo "<br /><br />";
 $zm = 4.512323;
 echo "<br />_________________________________<br />";
var_dump($zm);
 echo "<br />_________________________________<br />";
 echo (int)($zm);
 echo "<br />_________________________________<br />";
 echo round($zm);
 echo "<br />_________________________________<br />";
 echo round($zm,1);
 echo "<br /><br />";
 $czy_to_prawda = true; //można wpisać false
 echo $czy_to_prawda;
 echo "<br /><br />";
 define("NAZWA_GRY", "Hello World!");
 echo NAZWA_GRY;
 echo "<br /><br /><br />";
 
 //tablice!
 $nazwa_tablicy[0] = 1;
 $nazwa_tablicy[1] = 2;
 $nazwa_tablicy[2] = 3;
 $nazwa_tablicy[3] = 4;
 
 
 $nazwa_tablicy2[0] = "pierwszy element";
 $nazwa_tablicy2[1] = "drugi element";
 $nazwa_tablicy2[2] = "trzeci element";
 $nazwa_tablicy2[3] = "czwarty element";
 
 echo "$nazwa_tablicy2[3]". "<br />";
 echo "$nazwa_tablicy[3]". "<br /><br />";
 
 $nazwa_tablicy3[] = "pierwszy element nieindexowany";
 $nazwa_tablicy3[] = "drugi element nieindexowany";
 $nazwa_tablicy3[] = "trzeci element nieindexowany";
 $nazwa_tablicy3[] = "czwarty element nieindexowany";
 
 echo "$nazwa_tablicy3[0]"."<br />";
 echo "$nazwa_tablicy3[1]"."<br />";
 echo "$nazwa_tablicy3[2]"."<br />";
 echo "$nazwa_tablicy3[3]"."<br /><br />";
 
 $nazwa_tablicy4[0] = "pierwszy element hybrydy nieindexowany";
 $nazwa_tablicy4[1] = "drugi element hybrydy nieindexowany";
 $nazwa_tablicy4[] = "trzeci element hybrydy nieindexowany";
 $nazwa_tablicy4[] = "czwarty element  hybrydy nieindexowany";
 
 echo "$nazwa_tablicy4[0]"."<br />";
 echo "$nazwa_tablicy4[1]"."<br />";
 echo "$nazwa_tablicy4[2]"."<br />";
 echo "$nazwa_tablicy4[3]"."<br /></br>";
 
 print_r($nazwa_tablicy4);
 echo"<br /> <br />";

 echo "<pre>";
 print_r($nazwa_tablicy4);
 echo "</pre>";
 echo"<br /> <br />";
 
 //tablice asocjacyjne (skojarzeniowe) np.
 $czlowiek["imie"] = "Dymitr";
 $czlowiek["nazwisko"] = "Misiejuk";
 
 echo "<pre>";
 print_r($czlowiek);
 echo "</pre>";
 echo"<br /> <br />";
 
 echo"<br /> <br />";
 
 //tablice zasięgu np.
 
 $tab_z = array('wart1','wart2','wart3');
 echo "<pre>";
 print_r($tab_z);
 echo "</pre>"."<br />";
 $tab_z2 = array(2 => 'wart1','wart2','wart3');
 echo "<pre>";
 print_r($tab_z2);
 echo "</pre>"."<br />";
 $tab_z3 = array('imie' => "Dymitr",'nazwisko'=>"Misiejuk");
 echo "<pre>";
 print_r($tab_z3);
 echo "</pre>"."<br />";
 
 //tablice "wielowymiarowe"
 
 $ludzie[0]["imie"] = "Dymitr";
 $ludzie[0]["nazwisko"] = "Misiejuk";
 
 $ludzie[1]["imie"] = "Ewa";
 $ludzie[1]["nazwisko"] = "Ciura";
 
 echo "<pre>";
 print_r($ludzie);
 echo "</pre>"."<br />";
 
  $ludzie2["imie"][0] = "Dymitr";
 $ludzie2["nazwisko"][0] = "Misiejuk";
 
 $ludzie2["imie"][1] = "Ewa";
 $ludzie2["nazwisko"][1] = "Ciura";
 echo "<pre>";
 print_r($ludzie2);
 echo "</pre>"."<br />";
 
 
/* 
 * średnik kończy "myśl";
 * 
 * stringi można łaczyć za pomocą "."
 * 
 * w średnikach można stosować znaczniki html np. "<h2></h2>" czy "<br />"
 * 
 * /n
 * jeżeli chcę by kod strony wyświetlał porządek w kodzie php powinienem dodać "\n" 
 * przed średnikiem jeszcze w "kod\n";
 * 
 * zmienną zaznacza się za pomocą "$"
 * 
 * nazwa zmiennej nie może się zaczynać od cyfry ani znaku specjalnego jak np. : ; %
 * generalnie unika się używania w nazwach zmiennych polskich znaków
 * 
 * Nazwy zmiennych rozróżniają wielkości liter! 
 * Trzeba na wielkości liter uważać (przykład $zmienna4 != $Zmienna4) !!!
 * 
 * w celu wyświetlenia zmiennej trzeba zawsze pamiętać o symbolu "$" przed nazwą
 * 
 * najlepiej gdy nazwy zmiennych są samodefiniujące się, żeby nie zgadywać o co chodzi
 * 
 * funkcja var_dump($wyrazenie); poinformuje co to za jakość zmiennej, która jest pod 
 * nazwą np. $wyrazenie Może to być np. "int" czyli liczba całkowita, albo "string" czyli 
 * zestaw liter.
 * 
 *  np. string(4) oznacza, ze zmienna ma 4 znaki.
 * 
 * Można wywołać konkretny znak z danego stringa, licząc od 0 jako pierwszego w kolejności
 * 1, jako drugi w kolejności itd. Robi się to za pomocą echo $tekst{0} (nawias jest klamerką)
 * 
 * echo " " używa się do wyświetlania wszystkiego + wartości zmiennych,
 * 
 * a echo ' ' używa się do wyświetlania wszystkiego jako ciąg znaków
 * 
 * Można też podczas wyświetlania w " " przed znakiem np. $ wstawić \ i wtedy też nie zostanie
 * zinterpretowany jako wartość, a jako ciag symboli np. echo "dupa \%wysokosc"; co da
 * na ekranie dupa %wysokosc
 * 
 * funkcje ord('coś') służą do wyświetlania kolejnosci znaku w tablicy ASCII, a z kolei
 * chr(49) służą do wyświetlania co znajduje się pod daną liczbą w tablicy ASCII
 * 
 * zmienna zmiennoprzecinkowa jest zmienną zwaną float i powinno sie ją zapisywać z 
 * "." jako przecinkiem, np. 4.5, 2.33, 7.94 itp.
 * 
 * Jeżeli chcemy wyciągnąć z liczby zmiennoprzecinkowej tylko jej wartość niezaokrągloną 
 * całkowitą, używamy działania  echo (int)($zm); W tym przypadku ze zmiennej zmiennoprzecinkowej
 * $zm o wartości 4.2, wyświetli wyłącznie 4. Takie działanie nazywa się "rzutowaniem" 
 * i można rzutować na inne sprawy, np. "float"
 * 
 * jeżeli chcemy zaokrąglić liczbę zmiennoprzecinkową do najbliższej całkowitej, używamy funkcji
 * np. round($zm) Można zaokrąglać do którejś cyfry po przecinku, wystarczy wtedy wpisać np.
 * round($zm, 1) żeby zaokrąglił do pierwszej cyfry po przecinku
 * 
 * symbolem true w PHP jest 1 (lub dowolna liczba różna od 0), a symbolem false jest 0
 * 
 * pewną stałą mogę chcieć zdefiniować tylko raz na zawsze. Używam wtedy funkcji 
 * define("NAZWA_FUNKCJI", "jak ma się nazywać");
 * Dużymi literami lepiej jest wpisać jak ma się ta funkcja nazywać. W zwyczaju 
 * jest żeby STAŁA rózniła się od $zmiennej, a nazwa po przecinku może być dowolnymi literami.
 * 
 * Żeby wyświetlić STAŁĄ, używa się 
 * echo NAZWA_FUNKCJI;
 * bez jakiegokolwiek dolara czy innego znaczka wcześniej.
 * 
 * Dzięki "stałym zmiennym" nie można już inaczej ich zdefiniować, nawet przez przypadek
 * (to jest taki jakby #id w CSS)
 * 
 * TABLICE:
 * 
 * tablice to są zbiory elementów pod tą samą nazwą, 
 * np. $nazwa_tablicy[0] 
 * - reprezentuje element pierwszy tablicy o nazwie "nazwa_tablicy"
 * $nazwa_tablicy[0] = 1;
 * $nazwa_tablicy[1] = 2;
 * $nazwa_tablicy[2] = 3;
 * $nazwa_tablicy[3] = 4;
 * albo
 * $nazwa_tablicy2[0] = "pierwszy element";
 * $nazwa_tablicy2[1] = "drugi element";
 * $nazwa_tablicy2[2] = "trzeci element";
 * $nazwa_tablicy2[3] = "czwarty element";
 * albo
 * $nazwa_tablicy3[] = "pierwszy element nieindexowany";
 * $nazwa_tablicy3[] = "drugi element nieindexowany";
 * $nazwa_tablicy3[] = "trzeci element nieindexowany";
 * $nazwa_tablicy3[] = "czwarty element nieindexowany";
 * to są kolejne elementy tak samo nazywajacej sie tablicy, ale w różnej kolejności.
 * Liczenie w tablicach zawsze zaczyna się od 0!!! PHP potrafi samo uzupełniać kolejność
 * tak samo nazywającej się tablicy. Jednak by wywołać jakąś wartość, trzeba już wpisać np.
 * 
 * echo "$nazwa_tablicy3[2]";
 * 
 * żeby wyświetlić trzeci element nieindexowanej tablicy
 * 
 * by wyświetlić
 * 
 * możemy zrobić też chybrydę np.
 * $nazwa_tablicy4[0] = "pierwszy element hybrydy nieindexowany";
 * $nazwa_tablicy4[1] = "drugi element hybrydy nieindexowany";
 * $nazwa_tablicy4[] = "trzeci element hybrydy nieindexowany";
 * $nazwa_tablicy4[] = "czwarty element  hybrydy nieindexowany";
 * 
 * żeby tablica się sama uzupełniała. Jednak pierwszy w kolejności element musi być
 * określony przez nas, bo nie wyświetli się. To kolejne elementy będą uzupełniały się same.
 * 
 * by wyświetlić coś z tablicy, zawsze musi być określone, który element nas interesuje!
 * 
 * print_r($zmienna);
 * pozwoli nam odczytać, co widzi komputer, np. jak przyporządkowane są zmienne w tablicach.
 * 
 * jeżeli chcemy, aby komenda print_r($zmienna); była wyświetlona w kolumnie, 
 * można użyć komendy html <pre>, np.
 * 
 * echo <pre>;
 * print_r($zmienna);
 * echo </pre>;
 * 
 * Można zrobić tablice asocjacyjne, np.
 * $czlowiek["imie"] = "Dymitr";
 * $czlowiek["nazwisko"] = "Misiejuk";
 * $czlowiek["wiek"] = "33";
 * 
 * 
 * Można stworzyć tablice z zasięgiem, np.
 * 
 * $tab_z = array('wart1','wart2','wart3');
 * 
 * zwróć uwagę na '' !!!
 * Taka tablica sama się porządkuje od najniższego elementu.
 * Można zmienić sposób numerowania, od którego powinno się zaczynać w sposób:
 * 
 * $tab_z2 = array(2 => 'wart1','wart2','wart3');
 * 
 * ta 2 => wskazuje, że war1 będzie przypisane [2], czyli 3-ci element.
 * 
 * Można tablice zbudować łącząc wartości w inny sposób, np.
 * 
 * $tab_z3 = array('imie' => "Dymitr",'nazwisko'=>"Misiejuk");
 * 
 * taka tablica wyświetli odpowiednie wartości we wlaściwy sposób.
 * 
 * 
 * Istnieją tablice "wielowymiarowe", np.
 * $ludzie[0]["imie"] = "Dymitr";
 * $ludzie[0]["nazwisko"] = "Misiejuk";
 
 * $ludzie[1]["imie"] = "Ewa";
 * $ludzie[1]["nazwisko"] = "Ciura";
 * 
 * Gdzie [0] oznacza kolejny element wiersza
 * np. ["imie"] oznacza jakby kolumnę
 * np. ["nazwisko"] oznacza jakby kolejną kolumnę
 * 
 *     ["imie"] ["nazwisko"]
 *    ----------------------
 *    |         |          |
 * [0]| Dym...  | Misi...  |
 *    |         |          |
 *    ----------------------
 *    |         |          |
 * [1]| Ewa...  | Ciura... |
 *    |         |          |
 *    ----------------------
 * 
 *      Zmieniając kolejność 
 * $ludzie["imie"][0] = "Dymitr";
 * $ludzie["nazwisko"][0] = "Misiejuk";
 
 * $ludzie["imie"][1] = "Ewa";
 * $ludzie["nazwisko"][1] = "Ciura";
 * 
 * otrzymujemy:
 * 
 *                ["0"]     ["1"]
 *             ----------------------
 *             |         |          |
 *     ["imie"]| Dym...  | Misi...  |
 *             |         |          |
 *             ----------------------
 *             |         |          |
 * ["nazwisko"]| Ewa...  | Ciura... |
 *             |         |          |
 *             ----------------------
 * 
 */
 
 
 echo "OPERATORY";
 $zmn = 10;
 $zmn2= 20;
 echo"<br /> <br />";
 echo $zmn + $zmn2;
 echo"<br /> <br />";
 echo $zmn - $zmn2;
  echo"<br /> <br />";
 echo $zmn * $zmn2; 
   echo"<br /> <br />";
 echo $zmn / $zmn2; 
    echo"<br /> <br />";
 echo 5 % 4;
    echo"<br /> <br />";
 echo 5 % 2;   
    echo"<br /> <br />";
 echo 2 % 5;   
    echo"<br /> <br />";
 echo "Dymitr"."Misiejuk";
    echo"<br /> <br />";
    
    $a = 10;
    $a += 2; // zamieniam wartość zmiennej $a na $a + 2 cztli w tym wypadku 12 [$a = $a + 2;].
    echo $a;
    echo"<br /> <br />";
    $i = 5;
    echo ++$i;
     echo"<br /> <br />";
    echo $i;
    echo"<br /> <br />";
    $i2 = 5;
    echo $i2++;
     echo"<br /> <br />";
     echo $i2;
    echo"<br /> <br />";
 
 /* OPERATORY
  *  = jest operatorem PRZYPISANIA. Przypisuje jakąś wartość np:
  * $zmn = 10;
  * oznacza, że przypisano $zmn wartość 10.
  * + jest operatorem dodawania. Może dodawać zmienne, np. $zmn + $zmn2.
  * - jest operatorem odejmowania. Może odejmować zmienne, np. $zmn + $zmn2.
  * * jest operatorem mnożenia. Może mnożyć zmienne, np. $zmn + $zmn2.
  * / jest operatorem dzielenia. Może dzielić zmienne, np. $zmn + $zmn2.
  * 
  * % mod czyli modulo - operator reszty z dzielenia i coś jeszcze.
  * 
  * . jako operator łączenia stringów.
  * 
  * += jako operato doadjący do wartości jakiejść zmiennej coś jeszcze i zastepujący 
  * tą wartość o + to coś jeszcze.
  * Można to stosować do wszystkich operatorów matematycznych:
  * +=
  * -=
  * *=
  * /=
  * %=
  * 
  * Preinkrementacja
  * ++$i;
  * Przy wyświetlaniu od razu do zmienne $i powiększy o 1.
  * 
  * 
  * Postinkrementacja
  * $i++;
  * 
  * Przy wyświetlaniu najpierw wyświetli $i zanim powiększy o 1 za nastepnym razem.
  * 
  * Analogicznie działa
  * Predekrementacja
  * 
  *--$i;
  * 
  * oraz 
  * 
  * Postdekrementacja
  * 
  * $i--;
  *
  * 
  */
    echo"<br /> <br />";
 echo "OPERATORY POROWNANIA inaczej RELACYJNE";
 $pp = 5;
 $pp2 = 6;
 echo"<br /> <br />";
 echo"<br /> <br />";
 echo $pp == $pp2;
 echo"<br /> <br />";
 var_dump($pp == $pp2);
 echo"<br /> <br />";
 var_dump($pp!=$pp2);
 echo"<br /> <br />";
 var_dump($pp<>$pp2);
 
 /*OPERATORY POROWNANIA inaczej RELACYJNE
  * 1 oznacza prawdę (i dowolna inna liczna)
  * 0 oznacza fałsz (albo NIC, PUSTKA też oznaczają fałsz)
  * 
  * == operator porównania. Wyświetli albo 1 albo nic.
  * 
  * var_dump();
  * 
  * Wyświetli czy prawda czy fałsz opisowo jako bool(fals) albo bool(true).
  * 
  * != operator pokazywania czy zmienne są różne.
  * <> też operator pokazywania czy zmienne są różne.
  * 
  * > sprawdza czy operator po lewej od znaku jest większy od tego po prawej.
  * < sprawdza czy operator po lewej od znaku jest mniejszy od tego po prawej.
  * >= większe-równe
  * <=  mniejsze-równe
  * 
  * === operator identyczności. Sprawdza czy np. jest identyczny ciag znaków, 
  * bo coś moze być zapisane jako ciąg znaków np. "5" a coś jako liczba 5.
  * W tym wypadku "5" nie jest identyczne z 5.
  * !== sprawdzenie czy nie są identyczne.
  */
 echo"<br /> <br />";
 echo "Zmienne logiczne";
 echo"<br /> <br />";
 echo "zajżyj do notatek, bo to zwykła logika formalna";
 /* and == && -> i czyli koniunkcja
  * or == ||  -> lub czyli alternatywa 
  * xor -> albo czyli alternatywa wykluczająca (eXculsive or)
  * ! -> czyli zaprzeczene, taka logiczna ~
  * 
  * 
  * 
  * 
  */
  echo"<br /> <br />"; echo"<br /> <br />"; echo"<br /> <br />";
  echo "Operatory bitowe";
 echo"<br /> <br />";
 echo 2 & 10; // operator and bitowy czyli że 2 = 0 0 1 0 w zapisie bitowym
 echo"<br /> <br />";
 echo 2 | 10; // operator or bitowy
 echo"<br /> <br />";
 echo 2 ^ 10; // operator xor bitowy
 echo"<br /> <br />";
 echo ~10; // operator not bitowy, zaprzeczenie
 echo"<br /> <br />";
 echo 5 >> 2; // operator przesunięcia w prawo bitowy
 echo"<br /> <br />";
 echo 5 << 2; // operator przesunięcia w lewo bitowy
?>
   </body>
</html>