
<form action='' method='POST'>
		<input name='login' type="text"  value="<?php echo $_REQUEST['login'] ?>">
		<input name='password' type='password'>
                <input name='remember' type='checkbox' value='1'
 <?php if($_REQUEST['remember'] == 1){?> checked <?php } ?>>
		<input type='submit' name ="submit" value='Submit'>
	</form>
<!-- Конец формы авторизации. -->
<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password_db = '*14518A9PE'; //пароль, по умолчанию пустой
$db_name = 'db1'; //имя базы данных
$link = mysqli_connect($host, $user, $password_db, $db_name) or die(mysqli_error($link));
//Генератор солі

 function generateSalt()
	{
		$salt = '';
		$saltLength = 8; //длина соли
		for($i=0; $i<$saltLength; $i++)
		{
			$salt .= chr(mt_rand(33,126)); //символ из ASCII-table
		}
		return $salt;
	}
       if(isset($_REQUEST['submit'])) {
          if(preg_match('#.{4,12}#', $_REQUEST['login']) 
        && preg_match('#.{6,10}#', $_REQUEST['password'])){
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM users WHERE login = '".$login."'";
$login_free = mysqli_fetch_assoc(mysqli_query($link, $query));
var_dump($login_free);
if(empty($login_free)){
    $salt = generateSalt();
    $salt_password = md5($password.$salt);
$query = "INSERT INTO users SET login = '".$login."', password = '".$salt_password."',"
        . " salt='".$salt."'";
echo $query;
mysqli_query($link, $query);
echo 'Вы успешно зарегистрированы!';
} else {
echo 'Такой логин уже занят!';
}

} else {
echo 'Логин должен быть от 4 до 12 символов, пароль от 6 до 10 символов';
} 


if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
    echo "Hello";
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login']; 
		$password = $_REQUEST['password']; 

		/*
			Формируем и отсылаем SQL запрос:
			ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login
		*/
		$query = 'SELECT * FROM users WHERE login="'.$login.'"';
                echo $query;
		$result = mysqli_query($link, $query); //ответ базы запишем в переменную $result

		//Преобразуем ответ из БД в нормальный массив PHP:
		$user = mysqli_fetch_assoc($result); 
var_dump($user);
		//Если база данных вернула не пустой ответ - значит такой логин есть...
		if (!empty($user)) {
			//Получим соль:
			$salt = $user['salt'];

			//Посолим пароль из формы:
			$saltedPassword = md5($password.$salt);
echo $saltedPassword;
			//Если соленый пароль из базы совпадает с соленым паролем из формы...
			if ($user['password'] == $saltedPassword) {
				//Стартуем сессию:
				session_start(); 

				//Пишем в сессию информацию о том, что мы авторизовались:
				$_SESSION['auth'] = true; 

				/*
					Пишем в сессию логин и id пользователя
					(их мы берем из переменной $user!):
				*/
				$_SESSION['id'] = $user['id']; 
				$_SESSION['login'] = $user['login']; 
                                
                                //Проверяем, что была нажата галочка 'Запомнить меня':
		if ( !empty($_REQUEST['remember']) and $_REQUEST['remember'] == 1 ) {
			//Сформируем случайную строку для куки (используем функцию generateSalt):
			$key = generateSalt(); //назовем ее $key
echo $key;
			//Пишем куки (имя куки, значение, время жизни - сейчас+месяц)
			setcookie('login', $user['login'], time()+60*60*24*30); //логин
			setcookie('key', $key, time()+60*60*24*30); //случайная строка

			/*
				Пишем эту же куку в базу данных для данного юзера.

				Формируем и отсылаем SQL запрос:
				ОБНОВИТЬ  таблицу_users УСТАНОВИТЬ cookie = $key ГДЕ login=$login.
			*/
			$query = 'UPDATE users SET cookie="'.$key.'" WHERE login="'.$login.'"';
			mysqli_query($link, $query);
                       
                        
		}
                
                echo "Welcome ".$_SESSION['login']."<br>";
                       
	}
			//Если соленый пароль из базы НЕ совпадает с соленым паролем из формы...
			else {
	echo 'Wrong parol.';
			}
                }
                        else {
                            'No such login or parol';
                        }
}
       }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

