
<!-- Это форма авторизации: -->
	<form action='action2.php' method='POST'>
		<input name='login'>
		<input name='password' type='password'>
		<input type='submit' value='Отправить'>
	</form>
<!-- Конец формы авторизации. -->
<?php
/*$foo = "foobar";
$bar = "barbaz";

print $bar; // foo - это foobar

/*if(isset($_POST['submit'])) {
echo '<pre>';
print_r($_POST);
echo '</pre>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>INPUT TYPES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="index1.php" method="post">
                <hr>
                <p>Upload a photo</p>
                <input type="file" name="file">
                <br><br><hr><br>
                
                <input type="reset" value="Clear the form">
                <input type="submit" value="Send" name="submit">
            </form>
        </div>
    </body>
</html>
<?php
/*$array = array('Автотехника' => array (
    'товар Opel Vivaro ' => 7,
    'товар Audi A6 ' => 2,
),
    'товар велосипед BMX'  => 3,
    'товар велосипед BMV'  => 4,
    
    
);

function sum($array, $level = 0) {
    var_dump($level);
    static $count;
    static $items;
    
    if(is_array($array)) {
        $level++;
        foreach($array as $element) {
            sum($element, $level);
        }
    }
     else {
       $count++;
       $items = $items + $array;
      // print_r($array);
       //  echo 'Не массив.';
    }
    
   return array('count' => $count, 'items' => $items);
    
}

$result = sum($array);
print_r($result);


function recursion($a)
{
    if ($a < 20) {
        echo '</br>'."$a\n";
        recursion($a + 1);
    }
}
recursion(5);


function factory($n) 
{ 
   if(!$n) 
   { 
      return("Факториал числа $n не существует."); 
   } 
   else 
   { 
      if($n <= 1){return 1;} 
      return $n * factory($n-1); // здесь происходит повторный вызов функции 
   } 

} 

echo '</br>' . factory(3);  // 6 */
 
?>  


