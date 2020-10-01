<?php
/*Luo foreach -silmukka, joka tulostaa ulos kaikki arvot tehtävän index.php
-tiedostosta löytyvästä taulukosta omille riveilleen.
*/

$array = ['Hello', 'World', 'This', 'Is', 'Foreach', 'Loop', 'PHP is easy and fun!'];

$arr = array(1, 2, 3, 4);
foreach ($array as &$value) {
   echo $value . "<br>" ;
}
