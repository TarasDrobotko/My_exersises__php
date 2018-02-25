<?php 
function generatePass()
{
$str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$str = str_shuffle($str);
return substr($str, 0, rand(6, 12));
}
?>
//38.1-5
	<form action='' method='POST'>
            <input type='submit' name='generate' value='Generate password'><br><br>
            <input name='name' type="text"> им'я<br>
            <input name='last_name' type="text"> фамилия<br>
            <input name='age' type="text"> возвраст<br>
            <input name='email' type="text"> email<br>
            <input name='city' type="text"> город<br>
            <select name="language">
                <option>Russian</option>
                <option>Ukrainian</option>
                <option>English</option>
            </select>
            <!--  <input name='language' type="text"> язык<br> !-->
           <?php if (isset($_REQUEST['generate']))
{
$pass = generatePass();
echo 'Пароль: '.$pass.'<br><br>';
echo   '<input name="password1" type="password" value="'.$pass. '">пароль<br>';}
else {
    echo   '<input name="password1" type="password">пароль<br>';
    
}

         ?>
          <!--  <input name="password_confirm" type="password">подтверждение пароля<br> !-->
		<input type='submit' value='Отправить'>
	</form>
<!-- Конец формы регистрации. -->
<?php

if (
		!empty($_REQUEST['name'])
		and !empty($_REQUEST['last_name'])
		and !empty($_REQUEST['age'])
                and !empty($_REQUEST['email'])
                and !empty($_REQUEST['city'])
                and !empty($_REQUEST['language'])
                and !empty($_REQUEST['password1'])
               // and !empty($_REQUEST['password_confirm'])
	) {

		$name = $_REQUEST['name']; 
		$last_name = $_REQUEST['last_name']; 
		$age = $_REQUEST['age'];
                $email = $_REQUEST['email'];
                $city = $_REQUEST['city'];
                $language = $_REQUEST['language'];
              $password1 = $_REQUEST['password1'];
              //  echo $pass;
               // echo $password1;
                //$password_confirm = $_REQUEST['password_confirm'];
              //  if($password1 == $password_confirm){
                $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = '*14518A9PE'; //пароль, по умолчанию пустой
$db_name = 'db1'; //имя базы данных
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
	
                $query = "SELECT * FROM registration WHERE name='".$name."'";
                $is_login_free = mysqli_query($link, $query);
                $result = mysqli_fetch_assoc($is_login_free);
                if(!$result) {
                $query = "INSERT INTO registration SET name= '" . $name ."', last_name= '" .$last_name
                       . "', age= '".$age."', "
                                        . "email= '".$email."', "
                        . "city= '".$city."',"
                        . " language='".$language. "',"
                . " password= '".$password1. "', date=NOW()";
                
                echo $query;
                mysqli_query($link, $query);
                //$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
        $query = "SELECT * FROM registration WHERE name='".$name."'";
        $result = mysqli_query($link, $query);
       // var_dump($result);
        $users = mysqli_fetch_assoc($result);
        var_dump($users);

				//Выведем сообщение об успешной регистрации:
				echo 'Вы успешно зарегистрированы!';
                }
                else {
                    echo 'Логин уже занят!';
                }
			}
                      //  else {
                          //  echo "Пароли не совпадают!";
                       // }
        //}
	//Не заполнено какого-либо из полей.
	else {
		echo 'Поля не могут быть пустыми!';
	}

