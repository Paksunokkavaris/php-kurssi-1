<?php
/*Tulosta valitsemallasi silmukalla luvut nollasta kymmeneen 0,5 välein. Erota luvut
pilkulla ja välilyönnillä. Desimaalierottimena voit käyttää pistettä.
Esim: 0, 0.5, 1, 1.5, 2, 2.5, … 10
*/

$muuttuja1  = 0 ;
$vertauskohde = 10 ;
$lisäys = 0.5 ;


for ($muuttuja = $muuttuja1 ; $muuttuja <= $vertauskohde; $muuttuja += $lisäys) {
    print($muuttuja . "<br>");
}