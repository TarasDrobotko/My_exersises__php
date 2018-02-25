<?php
session_start();
?>
//39.1-2
<form action="" method="POST">
<p><input type="text" name="login" placeholder="логин"></p>
<p><input type="password" name="password" placeholder="пароль"></p>
<input type="submit" name="submit">
</form>
<?php

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = '*14518A9PE'; //пароль, по умолчанию пустой
$db_name = 'db1'; //имя базы данных
if(isset($_REQUEST['submit'])) {
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

if(preg_match('#.{4,12}#', $_REQUEST['login']) 
        && preg_match('#.{6,10}#', $_REQUEST['password'])){
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM users WHERE login = '".$login."'";
$login_free = mysqli_fetch_assoc(mysqli_query($link, $query));
var_dump($login_free);
if(empty($login_free)){
    $salt = generateSalt();
    $salt_password = md5($salt.$password);
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
}

function generateSalt(){
$salt = '';
$saltLength = 8;
for($i=0; $i<$saltLength; $i++) {
$salt .= chr(mt_rand(33,126));
}
return $salt;
}
//39.4
function generateSaltParol($login, $password, $salt){
    $salt_password = md5($salt.$login.$password);
return $salt_password;
}

//39.6


