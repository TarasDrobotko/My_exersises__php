<?php
//Задача 17.1, 2
/*$arr = [1, -2, -3, 0, 7, 5];

function isNumberInRange($num) {
    if($num > 0 and $num < 10)
        return true;
    else 
        return false;
    
}

foreach($arr as $elem) {
    if(isNumberInRange($elem)) {
        $newArr[] = $elem;
    }
}

var_dump($newArr);*/


//Задача 17.3
/*function getDigitsSum($num)
	{
		return array_sum((str_split($num, 1)));
	}*/
	
	//echo getDigitsSum(1024); 

        
       /* echo '<hr>';
        ////Задача 17.4
        * 
$arrYears = [];

	for ($i = 0; $i < 2018; $i++) {
       
            if(getDigitsSum($i) == 13)
		$arrYears[] = $i;
	}
        var_dump($arrYears); */
        
       /* $year = date('Y');
	$arr = [];
	for ($i = 1; $i < $year; $i++) {
		if(getDigitsSum($i) == 13) {
			$arr[] = $i;
		}
	}
	
	var_dump($arr);*/
        
        //Задача 17.6
        /*$arrNumbers = [23, 45, 18, 6, 24, 56, 77];
        
        function isEven($num)
	{
		return $num % 2 == 0;
	}
        
        foreach ($arrNumbers as $elem) {
            if(isEven($elem)) {
                $arrEven[] = $elem;
            }
        }
        
        var_dump($arrEven);*/
        
        //Задача 17.7
       /* function getDivisors($num) {
            for($i = 1; $i <= $num; $i++) {
                if($num % $i == 0) {
                    $arrDivisors[] = $i;
                }
                        
            }
            return $arrDivisors;
        }
        
        //getDivisors(123);*/
       
       
        //Задача 17.8
      /*   function getCommonDivisors($a, $b) {
          return array_intersect(getDivisors($a), getDivisors($b)); 
          
             /*for($i = 1; $i <= $a; $i++) {
             for($i = 1; $i <= $b; $i++) {
                if($a % $i == 0 and $b % $i == 0) {
                    $arrCommonDivisors[] = $i;
                } 
             }    
         }
          var_dump($arrCommonDivisors);
         }
         
         var_dump(getCommonDivisors(25, 50));*/

//task 19.2
$arr = [1, 2, 3, 4, 5, 6];

	sequence($arr);

	function sequence($arr)
	{
		echo array_shift($arr).'<br>'; //выводим последний элемент массива
    
		if(!empty($arr)) {
			sequence($arr); //это рекурсия
		}
	}
        
 //task 19.3
        function numb($numb) {
          $numb = array_sum(str_split($numb, 1));
            if($numb > 9) {
                $numb = numb($numb);
                 
            }
            return $numb;
        }
        
      echo  numb(19235);