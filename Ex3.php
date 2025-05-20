<?php

$x = floatval(readline($prompt="Введите x: "));


if ($x < 1) { // Первая строка
    echo asin($x/(pow($x, 2) + 1));
}
elseif ($x < 2) { // Вторая строка
    echo log(pow($x, 4)/(1+pow($x, 4)));
}
elseif ($x >= 2) { // Третья строка
    echo log10(abs(pow(2, -$x)*pow($x, 4-$x)));
}

?>
