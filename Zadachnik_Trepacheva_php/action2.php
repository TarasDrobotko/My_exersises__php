<?php
//session_start();
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
/*$parol1 = 'a3f390d88e4c41f2747bfa2f1b5f87db'; //md від 68
$parol2 = 'e2ef524fbf3d9fe611d5a8e90fefdc9c'; //md від 97
//$user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36';

if($_POST['submit']){
$_SESSION['parol2'] = $_POST['password2'];
$parol_2 = $_SESSION['parol2'];


if (md5($_SESSION['parol1']) == $parol1 and md5($parol_2) == $parol2) {
            echo 'Доступ открыт!';
            
     }
        else {
            echo 'Доступ запрещен!';
?>
		<form action='action2.php' method='POST'>
		   Password2:	<input name="password2" type='password'>
			<input type='submit' name='submit' value='Отправить'>
		</form>

<?php
	}
}
?>
/Если форма авторизации отправлена...*/
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login']; 
		$password = $_REQUEST['password']; 

		/*
			Формируем и отсылаем SQL запрос:
			ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
		*/
                $link = mysqli_connect('localhost', 'root', '*14518A9PE', 'db1');
		$query = 'SELECT*FROM Users WHERE login="'.$login.'" AND password="'.$password.'"';
		$result = mysqli_query($link, $query); //ответ базы запишем в переменную $result. 
		$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

		//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
		if (!empty($user)) {

			//Стартуем сессию:
			session_start(); 

			//Пишем в сессию информацию о том, что мы авторизовались:
			$_SESSION['auth'] = true; 

			//Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
			$_SESSION['id'] = $user['id']; 
			$_SESSION['login'] = $user['login']; 
                        $_SESSION['name'] = $user['Name']; 
                        echo 'Hello, ' . $_SESSION['name'];
		} else {
			echo 'Неверно введен логин или пароль!';
		}
	}
