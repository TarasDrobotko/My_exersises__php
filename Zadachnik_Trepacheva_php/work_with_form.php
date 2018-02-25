<?php
$arr = [1, 4, 6, 10, 11, 3, 8];

	$flag = false;
	foreach($arr as $key=>$elem) {
		if ($key > 0 and  $elem == $arr[$key - 1]) {
			$flag = true;
			break;
		}
	}

	if ($flag == true) {
		echo 'да';
	} else {
		echo 'нет';
	}

//task 20.7
	function input($type, $name, $value)
	{
		return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
	}
	echo input('text', 'input', 15);
        
 //task 20.8
 function inputSave($type, $name, $value)
	{        if(isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
		return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
	}
        }
	echo inputSave('text', 'input', 15);
        
        //task 20.9
      function input1($name)
	{
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1">';
	}
	echo input1('checkbox');
        
         
        //task 20.10
     function input2($name)
	{
		if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
			$value = 'checked';
		} else {
			$value = '';
		}
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
	}
	echo input2('checkbox');