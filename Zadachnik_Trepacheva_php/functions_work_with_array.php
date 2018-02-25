<?php
//task 8.5
$arr = [1, 2, 3, 4, 5];
	echo array_product($arr);

//task 8.6
$arr1 = [1, 2, 3, 4, 5, 6, 7];
echo '<br>' . array_sum($arr1) / count($arr1);

//task 8.8
$arrAbc = range('a', 'z');
var_dump($arrAbc);

//task 8.9
$arr = range(1, 9);
echo '<br>'. implode('-', $arr);

//task 8.13
$arr = [1, 2, 3, 4, 5];
var_dump(array_slice($arr, 1, -1));

//task 8.14
$arr2 = [1, 2, 3, 4, 5];
array_splice($arr2, 1, 2);
var_dump($arr2);

//task 8.16
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ['a', 'b', 'c']);
var_dump($arr);

//task 8.17
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
var_dump($arr);

//task 8.19
$arr = ['a', 'b', 'c'];
$arr1 = [1, 2, 3];
$arr_combine = array_combine($arr1, $arr);
var_dump($arr_combine);

//task 8.23
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	array_splice($arr, array_search('-', $arr), 1);
        var_dump($arr);
//task 8.25
        $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	rsort($arr);
	var_dump($arr);
        
        $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	asort($arr);
	var_dump($arr);
        
        $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	arsort($arr);
	var_dump($arr);
        
        $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	ksort($arr);
	var_dump($arr);
        
//task 8.33
        $arr = [1, 2, 3, 4, 5];
array_shift($arr);
array_pop($arr);
var_dump($arr);

//task 8.35
$arr = [1, 2, 3, 4, 5, 6, 7, 8];


	$str = '';
	while (count($arr) > 0) {
		$str .= array_shift($arr);
		$str .= array_pop($arr);
	}

	echo $str;