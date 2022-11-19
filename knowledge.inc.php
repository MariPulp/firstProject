<?php
$a = 'Я постаралась отразить свои знания на';
$b = 100;
$c = '%. Или даже больше (гуглила я ОЧЕНЬ много);';
?>

<?php
$start_time = microtime(true);
    $number = 15;

    if($number >= 10 && $number <= 30)
        $first = 'Оно нестрого входит в промежуток от 10 до 30;';
    else
        $first = 'Оно не входит в промежуток от 10 до 30;';

    if($number % 2 != 0)
        $second = ' Также является нечетным;';
    else 
        $second = ' Также является четным';

$timeWork = microtime(true) - $start_time;
?>

<?php
function example(){
    static $x = 10;
    echo $x;
        $x++;
}
?>