<?php session_start();
$password = '827ccb0eea8a706c4c34a16891f84e7b';
$password1 = '123';
        if ( !empty( $_REQUEST['password'] ) and md5($_REQUEST['password']) == $password) {
            $_SESSION['password'] = md5($_REQUEST['password']);
                echo 'Пароль неправильний!'; ?>
                <form action='' method='POST'>
			<input name='password1' type='password'>
			<input type='submit' value='Отправить'>
		</form>
             <?php }
	 else {
		//Если форма была отправлена, НО пароль неправильный...
		if ( !empty($_REQUEST['password']) and md5($_REQUEST['password']) != $password ) {
			echo 'Неправильный пароль 1!<br>'; //выведем сообщение об ошибке
		}
         }

if ( !empty( $_REQUEST['password1'] ) and $_REQUEST['password1'] == $password1 and $_SESSION['password']
         ) {
    echo 'Доступ відкритий!';
}
