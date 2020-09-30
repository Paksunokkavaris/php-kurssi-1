<?php

$muuttuja = random_int(1, 5000);
 echo"muuttuja on :  ". $muuttuja. "<br>";
 

 if ($muuttuja > 4000 )
 {echo "A". "<br>" . "<br>". "> 4000";}
 
 elseif($muuttuja > 3000 )
 {echo "C". "<br>". "<br>". "> 3000";}

 elseif(($muuttuja === 1000) || ($muuttuja === 0))
 {echo "B". "<br>". "<br>"." 0 tai 1000 ";}

 else
 {echo "D". "<br>". "<br>". "Ei vastaa mihinkään vertailuihin" ;}
