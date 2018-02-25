<!DOCTYPE html>
<html>
<head>
  <title><?php print $page_title; ?></title>
  <!-- CSS files -->
</head>
<body>
<form action = action.php method=post enctype=multipart/form-data>
        <input type=file name=uploadfile>
        <input type=submit value=Загрузить>
</form>
</body>
  </html>
  <?php
/*$lst = array();
$k = "prostoe";
for($i=2; $i<7; $i++) {
    for($j=2; $j<$i; $j++){
        if(($i%$j)==0) {
            $k="ne prostoe<br>";
            echo $k;
        }
        }
    if($k=="prostoe")
       
        $lst[]=$i;
    else    
    $k="prostoe";
    }
    foreach ($lst as $list) echo $list . "</br>";

/*function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
for ($n = 1; $n <= 5; $n++) {
    echo(fibonacci($n) . ", ");
}
echo("...\n");

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array2, $array1);

print_r($result);
/*$cars = array("BMW", "Audi", "Mercedes", "Porsche");
foreach ($cars as $car) {
        echo $car . "<br />";
}
/*$arr = array('h', 'e', 'l', 'l', 'o');
$reversed = array('hi');
for($i=0; $i<count($arr); $i++) array_unshift($reversed, $arr[$i]);
print_r($reversed);
for($i=0; $i<count($reversed); $i++) echo "$reversed[$i]";
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
  /              <hr>
                <p>Upload a photo</p>
                <input type="file" name="file">
                <br><br><hr><br>
                
                <input type="reset" value="Clear the form">
                <input type="submit" value="Send" name="submit">
            </form>
        </div>
    </body>
</html>
<?php*/
$array = array('Автотехника' => array (
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
    echo $items.'<br>';
       //  echo 'Не массив.';
    }
    print_r(array('count' => $count, 'items' => $items));
   return array('count' => $count, 'items' => $items);
    
}

$result = sum($array);
echo '<br>';
print_r($result);
echo null+8;


/*function recursion($a)
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


