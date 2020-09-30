<?php
$array1 = range('A', 'Z');
$array2 = range(1, 26);
$array3 = array_combine ($array1 , $array2);

echo $array3['M'];
