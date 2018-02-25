<?php
$sum = 0;
for($i=0; $i <= 25; $i++) {
    $sum += $i;
}

echo $sum . '<br>';

$i = 0; $sum1 = 0;
while($i <= 25) {
  $sum1 += $i;
  $i++;
}

echo $sum1 . '<br>';

define('Num', 325);
for($i=1; ($k = $i*$i) <= Num; $i++) {
    echo 'число - ' . $i . '', ', його квадрат - ' . $k . '<br>';
}

echo '<hr>';

$arr_buttons = [];
for($i = 10; $i > 0; $i--) {
    $arr_buttons[] = 'Кнопка ' . $i;
}
var_dump($arr_buttons);

natsort($arr_buttons);
var_dump($arr_buttons);

echo '<ul>';
foreach($arr_buttons as $value) {
    echo '<li><a href="#">'. $value .'</a></li>';
}
echo '</ul>';