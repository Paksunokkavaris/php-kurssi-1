<?php
/*Luo koodi, joka tarkistaa onko muuttujassa $number (luo itse) oleva luku alle tai
yhtäsuuri kuin 9 JA muuttujassa $letter (luo itse) oleva kirjain “S”. Jos ehtolause on
tosi, tulosta “Tottakai”, muutoin “Ei ollutkaan”.
*/
//muutujat

$number = 28 ;
$letter = "H" ;
// vaihtoehto meneteömä muutujan vertailu
//$vertailukohde1 = 9
//$vertailukohde2 = "S"

//vertailu
echo "Onko numero sama vertailu: ". "<br>";
if ($number === 9 /* $vertailukohde1  */)
{ echo "Tottakai". "<br>";

}else {
    echo "Ei ollutkaan". "<br>" ;
}
//vertailu
echo "<br>"."Onko kirjain sama vertailu: ". "<br>";
if ($letter === "S" /* $vertailukohde2  */)
{ echo "Tottakai". "<br>";

}else {
    echo "Ei ollutkaan". "<br>";


}

echo "kiitos";