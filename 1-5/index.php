<?php

$array = ['A', 'B', 'C','D', 'E', 'F','G', 'H', 'K'];


for($i = 0; $i < 11;  $i++) {
    echo $array[$i] . " ";
 }

echo "<br>";
$array_2 = array_reverse($array);
 foreach ($array_2 as $arvo){
     echo $arvo. " " ;
    }
