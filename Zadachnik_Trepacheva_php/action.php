<?php
session_start();
/*$parol1 = 'a3f390d88e4c41f2747bfa2f1b5f87db'; //md від 68
$parol2 = 'e2ef524fbf3d9fe611d5a8e90fefdc9c'; //md від 97
$user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36';
if($_POST['submit']){
$parol_1 = $_POST['password1'];
$parol_2 = $_POST['password2'];


if (md5($parol_1) == $parol1 and empty($parol_2)) {
            echo 'Пароль неверен!';
        }
if ((md5($parol_1) == $parol1) && (md5($parol_2) == $parol2) && $_SERVER['HTTP_USER_AGENT'] == $user_agent) {
         echo   'Доступ открыт!';
        }
        else {
            echo 'Доступ запрещен!';
?>
		<form action='action.php' method='POST'>
		   Password1:	<input name="password1" type='password'>
                   Password2:	<input name="password2" type='password'>
			<input type='submit' name='submit' value='Отправить'>
		</form>

<?php
	}
}*/
$parol1 = 'a3f390d88e4c41f2747bfa2f1b5f87db'; //md від 68
$parol2 = 'e2ef524fbf3d9fe611d5a8e90fefdc9c'; //md від 97
//$user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36';

if($_POST['submit']){
$_SESSION['parol1'] = $_POST['password1'];
$parol_1 = $_SESSION['parol1'];


if (md5($parol_1) == $parol1) {
            echo 'Пароль неверен!';?>
            <form action='action2.php' method='POST'>
		   Password2:	<input name="password2" type='password'>
			<input type='submit' name='submit' value='Отправить'>
		</form>
       <?php }
        else {
            echo 'Доступ запрещен!';
?>
		<form action='action.php' method='POST'>
		   Password1:	<input name="password1" type='password'>
			<input type='submit' name='submit' value='Отправить'>
		</form>

<?php
	}
}
?>


