<?php session_start();
//36.3
/*$login = 'drobotkot';
$password = '12345';
$loginpassword = md5($login.$password);
$loginpassword2 = md5($_REQUEST['login'].$_REQUEST['password']);
if($loginpassword2==$loginpassword){
echo 'Доступ открыт!';
} elseif(!empty($_REQUEST['login'] && $_REQUEST['password'])){
echo 'Неверный логин или пароль';
} else {
?>
<form action="" method="POST">
<input type="text" name="login" placeholder="логин">
<input type="password" name="password" placeholder="пароль">
<input type="submit">
</form>
<?php
} */

/*36.6
 * $ip = '::1';
$password = '12345';
$userip = $_SERVER['REMOTE_ADDR'];
$password = md5($password);
$password2 = md5($_REQUEST['password']);
if($password2==$password && $userip==$ip){
echo 'Доступ открыт!'.'<br>';
echo $_SERVER['HTTP_USER_AGENT']; 
} elseif(!empty($_REQUEST['password']) || $userip!==$ip){
echo 'Неверный логин или ip'.'<br>';
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['HTTP_USER_AGENT']; 
} else {
?>
<form action="" method="POST">
<input type="password" name="password" placeholder="пароль">
<input type="submit">
</form>

<?php
}*/
//36.7
/*$password = '12345';
$useragent = $_SERVER['HTTP_USER_AGENT'];
$flag = preg_match('#Chrome#', $useragent);
$password = md5($password);
$password2 = md5($_REQUEST['password']);
if($password2==$password && $flag == 1){
echo 'Доступ открыт!';
} elseif(!empty($_REQUEST['password']) || $flag != 1){
echo 'Неверный логин или ваш браузер не Chrome';
} else {
?>
<form action="" method="POST">
<input type="password" name="password" placeholder="пароль">
<input type="submit">
</form>
<?php
} */
	
?>
<!-- //37.1
<form action='autorization_index.php' method='POST'>
			<input name='password' type='password'>
			<input type='submit' value='Отправить'>
		</form>   !-->
//37.2-3
<form action="" method="POST">
<!--<p><input type="text" name="name" placeholder="имя"></p>
<p><input type="text" name="surname" placeholder="фамилия"></p>
<p><input type="text" name="email" placeholder="email"></p>!-->
<p><input type="text" name="login" placeholder="логин"></p>
<p><input type="password" name="password" placeholder="пароль"></p>
<input type="submit">
</form> 
<?php

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = '*14518A9PE'; //пароль, по умолчанию пустой
$db_name = 'db1'; //имя базы данных
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

if(!empty($_REQUEST['login']) && !empty($_REQUEST['password'])){
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM Users WHERE login = '".$login."' AND password = '".$password."'";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

if(!empty($user)){
    		$_SESSION['auth'] = true;
              
       $query = "UPDATE Users SET date =NOW()  WHERE login = '".$user['login']."' AND password = '".$user['password']."'";
$result = mysqli_query($link, $query);
//$user = mysqli_fetch_assoc($result);        
echo 'Успешно';
var_dump($user);
//session_start();
$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['login'];
$_SESSION['email'] = $user['email'];
user('id');
user('login');
user('email');
} else{
echo 'Неверный логин или пароль';

}
}


function user($field) {
    var_dump($_SESSION[$field]);
}

/*var_dump(isAuth());

function isAuth()
{

return isset($_SESSION['auth']) && $_SESSION['auth'];
}*/

//37.6
/*function getUser($id = '') {
    
    
}*/
 	