<?phpheader("Content-Type: text/html; charset=utf-8")?>
//22.10-11
<form action="" method ="POST">
        <textarea rows="5"  name ="text"></textarea><br>
        <input type="submit" name="Відправити">
        </form>
<?php
if(isset($_REQUEST['text'])){

$arr = explode(' ', $_REQUEST['text']);
$words = count($arr);

    $symbols = mb_strlen(implode($arr));
    $symbols1 = mb_strlen($_REQUEST['text']);
    
  
$text = trim(str_replace(' ', '', $_REQUEST['text']));
$count = mb_strlen($text);
$arr = array_count_values(str_split($text, 1));
foreach($arr as $key => $param){
echo $key.' = '.round(($param*100)/$count).'%'.'<br>';
}
echo 'Кількість слів:' .$words.'<br>';
echo 'Кількість символів без пробілів:' .$symbols.'<br>';
echo 'Кількість всіх символів:' .$symbols1.'<br>';
}

//22.12
$arr_words = ['mother', 'volvo', 'wolf', 'alkohol', "house", "car"];
$arr_words1 = ['мама', "брат", "машина"];
?>
<form action="" method ="POST">
    <label>Введіть набір букв:<input type="text" name="text"></label><br>
        <input type="submit" name="Відправити">
        </form>
<?php
if(isset($_POST['text'])){
    //echo $_POST['text'];
    $letters = explode(" ", $_POST['text']);
    //var_dump($letters);
    $letters_trim = str_replace(',', '', implode("", $letters));
    //var_dump($letters_trim);
    function mb_str_split($value, $count) {  
   return preg_split('#(?<!^)(?!$)#u', $value);
    
}  
  $letters1 = mb_str_split($letters_trim, 1);
  //var_dump($letters1);
  
    $letters_unique = array_unique($letters1);
    var_dump($letters_unique);
   foreach ($arr_words as $key => $value) {
        $value_arr = str_split($value, 1);
        $result = array_intersect($letters_unique, $value_arr);
        if($result == $letters_unique) {
            echo $value . '<br>';
    
        }
        
    }
     foreach ($arr_words1 as $key => $value) {
$value_arr = mb_str_split($value, 1);
 $result = array_intersect($letters_unique, $value_arr);
        if($result == $letters_unique) {
            echo $value . '<br>';
     }
     
        }
}

$arr = [35, 2, 3, 43, 5];
foreach ($arr as $elem) {
		if (strpos($elem, '3') !== false) {
			echo $elem . '<br>';
		}
	}
