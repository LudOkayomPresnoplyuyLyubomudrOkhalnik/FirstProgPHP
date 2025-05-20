<?php


function ctan($rad) {
    return 1 / tan($rad);
}


$x = floatval(readline($prompt="Введите x: "));

/* Первое слагаемое */
$fcos = cos(sqrt(abs($x))); // Косинус в числителе
$scos = pow(cos(sqrt(abs($x))), 2)+5; // Косинус в знаменателе

$arccos = pow(acos($fcos/$scos), 6);
$fTerm = pow($arccos, 0.2); // Результат первого слагаемого
/* Первое слагаемое */

/* Второе слагаемое */
$logSum = pow(4, ctan(4*$x)) + 5;
$sTerm = log($logSum, 2);
/* Второе слагаемое */

$y = $fTerm + $sTerm;

if (($x >= -1.5) && ($x <= 1.5)) {
    if (($y >= -1.5) && ($y <= 1.5)) {
        echo "True";
    }
    else {
        echo "False";
    }
}
else {
    echo "False";
}

?>
