<?php
echo time() - mktime(7, 25, 59, 9, 1, 2010). '<br>';
echo mktime(0, 0, 0, 3, 1, 2025). '<br>';

//task 11.3
echo mktime(0, 0, 0, 12, 31) . '<br>';
//task 11.4
echo time() - mktime(13, 12, 59, 3, 15, 2000) . '<br>';
echo date('Y.m.d H:i:s') . '<br>';
//task 11.8
echo date('d.m.Y' , mktime(0, 0, 0, 2, 12, 2025)). '<br>';
//task 11.9
$week = ['нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];

echo $week[date('w', mktime(0, 0, 0, 6, 6, 2006))] .'<br>'; 
echo $week[date('w', mktime(0, 0, 0, 2, 28, 1985))] .'<br>'; 

//task 11.11
echo date('t');
?>

//task 11.12
<form action="" method="GET">
	<input type="text" name="year">
	<input type="submit">
</form>

<?php /*
	if (isset($_REQUEST['year'])) {
		$year = $_REQUEST['year'];
		if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
			echo 'год високосный';
		} else {
			echo 'год не високосный';
		}
	}
        ?>

//task 11.13
<form action="" method="GET">
	<input type="text" name="date">
	<input type="submit">
</form> 

<?php
    if(isset($_REQUEST['date'])) {
        $date = $_REQUEST['date'];
        
        $date_arr = explode('.', $date);
        
        
       echo $week[date('w', mktime(0, 0, 0,  $date_arr[1],  $date_arr[0],  $date_arr[2]))];
        
    }
    ?>
    //task 11.15
  <form action="" method="GET">
	<input type="text" name="date1">
        <input type="text" name="date2">
	<input type="submit">
</form>
    <?php
    if(isset($_REQUEST['date1']) and isset($_REQUEST['date2'])) {
        $date1 = $_REQUEST['date1'];
        $date2 = $_REQUEST['date2'];
        //$date1_arr = explode('-', $date1);
        //$date2_arr = explode('-', $date2);
        
      if($date1 > $date2) {
        echo  'Ця дата більша: ' . $date1 . '.';
          }  
       if($date1 < $date2) {
        echo 'Ця дата більша: ' . $date2 . '.<br>';
          }     
    }
    
//task 11.18
    $date = date_create('2025-12-31');
	date_modify($date, '2 days');
	echo date_format($date, 'Y-m-d') .'<br>';
        
        $date = date_create('2025-12-31');
        date_modify($date, '3 days 1 month');
	echo date_format($date, 'Y-m-d') .'<br>';
        
        $date = date_create('2025-12-31');
        date_modify($date, '1 year');
	echo date_format($date, 'Y-m-d') .'<br>';
        
        $date = date_create('2025-12-31');
        date_modify($date, '-3 days');
	echo date_format($date, 'Y-m-d') .'<br>';
        
        //task 11.19
        //Последняя секунда 31-го декабря текущего года:
	$time = mktime(23, 59, 59, 12, 31);
	
	//Первая секунда нового года:
	$time = $time + 1;
        
        echo floor(($time - time())/(60*60*24));
        
	//task 11.20
        ?>
        <form action="" method="GET">
	Введіть рік: <input type="text" name="year">
	<input type="submit">
</form>
    <?php
   /* if (isset($_REQUEST['year'])) {
		$year = $_REQUEST['year'];
		$arr = [];
		for($i = 1; $i <= 12; $i++) {
			$timestamp = mktime(0, 0, 0, $i, 13, $year);
			if (date('w', $timestamp) == 5) {
				$arr[] = date('d-m-Y', $timestamp);
			}
		}
		var_dump($arr);
	}
        
        */
        //11.21
        $date = mktime(0, 0, 0);
        $date1 = 60 * 60 * 24 * 100;
       $timestamp = $date - $date1;
        $date = date('w', $timestamp);
        $week = ['нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
        echo $week[$date];
        
        //22.4
         $week = ['неділя', 'понеділок', 'вівторок', 'середа', 'четвер', 'п\'ятниця', 'субота'];
         $months = [1=>'січня', 'лютого', 'березня', 'квітня', 'травня', 'червня', 'липня',
             'серпня', 'вересня', 'жовтня', 'листопада', 'грудня' ];
         $day= date('w', time());
         $month = date('n', time());
        $date = explode('.', date('Y.d', time()));
          
         echo '<br>'.$date[1]. ' '.$months[$month]. ' '.$date[0]. ' року,'. $week[$day];
   //task 22.5
         ?>
    <p>
Введите ваш день рождения в формате '01.12.1990'.
</p>
<form action="" method="GET">
<input type="text" name="year" >
<input type="submit">
</form>

<?php
if(isset($_REQUEST['year'])){
$date = explode('.', $_REQUEST['year']);
$day = mktime(0, 0, 0, $date[1], $date[0]) - time();
$day = floor($day/(60*60*24));
if($day<=0){
    $year1 = date('Y', time()) +1;
    $day = mktime(0, 0, 0, $date[1], $date[0], $year1) - time();
$day = ceil($day/(60*60*24));
}
echo "<br>До вашего дня рождения осталось ".$day." дней";
}


    
    