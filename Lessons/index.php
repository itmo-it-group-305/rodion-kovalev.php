<?php
$usr='Lolya';

echo $usr;
echo '<br>';
$current-$usr = $usr;
echo $usr;
echo '<br>';
$team = ['lolya', 'lox', 'mister', 'twister'];
echo $team[0];
echo '<br>';
$arr = [
    ['hello', 'ittle', 'puppy'],
    ['hi', 'e.Jack', '!'],
];
echo $arr[0][2];
echo '<br>';
$q= "data\t\nimya\ntplatezh";
echo $q;

echo $out = <<<_END
Hello little puppie
My name is Rodeo
!!!
_END;
echo '<br>';

$str = 456*3;
echo substr($str, 0, 5);
echo '<br>';
echo 'Это строка' . __LINE__ . 'in file' . __FILE__;
echo '<br>';
echo 'Это строка' . __LINE__ . 'in file' . __DIR__;
echo '<br>';
//function longdate($timestamp)
//{
//    $temp = date("l F jS Y", $timestamp);
//    return $temp;
//}
//echo longdate();
$temp = "Дата : ";
echo longdate(time());
function longdate($timestamp)
{
    return $temp . date(" l F jS Y", $timestamp);
}
echo '<br>';
function test()
{
    static $count = 0;
    echo $count;
    $count++;
}
echo test();
echo test();
echo test();
?>


