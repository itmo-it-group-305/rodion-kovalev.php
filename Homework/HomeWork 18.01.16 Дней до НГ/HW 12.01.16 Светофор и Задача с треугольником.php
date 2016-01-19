<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 12.01.16
 * Time: 23:35
 */

////1 и 2 создать переменную и присвоить ей значение. Год
//$year = 2015;
//
//// 3 С помощью тернатрного оператора выяснить, является ли год високосным и вывесьти результат проверки на экран,
//// используя var_dump()
//
//
//$var = ($year%4==0) && ($year%400==0)  ? "Этот Год високосный" : "Этот год не високосный";
//var_dump($var);





//Время зеленое и красное

//echo date('i', time());
//$date = (int)date('i');
//echo($date%5<3? 'green' : 'red');
//




//Катеты и гипотенузы. Задача доказать что треугольник является прямоугольным


$a = [2,7];
$b = [6,1];
$c = [12,5]

$katet1 = (2-6)**2 + (7-1)**2;
//ff

$katet1Int = intval($katet1);
var_dump($katet1Int);
echo "<br>";
$katet2 = (6-12)**2 + (1-5)**2;


$katet2Int = intval($katet2);
var_dump($katet2Int);
echo "<br>";
$gipotenuza= (2-12)**2 + (7-5)**2;



$gipotenuzaInt = intval($gipotenuza);
var_dump($gipotenuzaInt);
echo "<br>";
echo "$katet1 + $katet2 == $gipotenuza?";
echo "<br>";

echo "<br>";
$result = $katet1 + $katet2 == $gipotenuza ? "Прямоугольный" : "Не такой уж и прямоугольный";
$RESULT = "Вывод: ";
echo $RESULT.$result;

