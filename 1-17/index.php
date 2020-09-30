<?php


function first_function(string $word): string
{
    return $word . " World!";
}
echo first_function("WaZaP");
echo "<br>";
function second(): float
{
    return 123.30;
}

echo "<br>";
function third(string $letter) : array
{
    return ['A', 'B', $letter];
}

echo "<br>";
// Tähän tulee fourth()
function fourth(int $eka, int $toka):int
{
    return $eka + $toka;

}
echo fourth (3, 2);
