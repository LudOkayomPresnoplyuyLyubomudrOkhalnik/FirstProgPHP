<?php


$v1 = floatval(readline($prompt="Введите первый объём (v1): "));
$t1 = floatval(readline($prompt="Введите первую температуру (t1): "));
$v2 = floatval(readline($prompt="Введите второй объём (v2): "));
$t2 = floatval(readline($prompt="Введите вторую температуру (t2): "));


$resultV = $v1+$v2;
$resultT = ($v1*$t1+$v2*$t2)/$resultV;


printf("[%-s\t] %.4f\n", "Суммарный объём",  $resultV);
printf("[%-s\t] %.4f\n", "Суммарная температура",  $resultT);


?>
