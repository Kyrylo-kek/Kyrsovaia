
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Регістрація користувача</title>
</head>
<body>
<form action="vender/signup.php" method="POST">
	<label for="label" align="justify-content">ФІО</label>
	<input type="text" name="full_name" placeholder="Введіть свое ФІО"><br>


	<label for="label" align="justify-content">Логін</label>
	<input type="text" name="login" placeholder="Введіть свій логін"><br>
	<label for="label" align="justify-content">Пошта</label>
	<input type="email" name="email" placeholder="Введіть свою пошту"><br>
	<label for="label" align="justify-content">Пароль</label>
	<input type="password" name="password" placeholder="Введіть свій пароль">
	<label for="label" align="justify-content">Підтвердженя паролю</label>
	<input type="password" name="password_confirm" placeholder="Підтвердіть свій пароль">

<button>Зареєструватись</button>
<p>У вас вже є  аккаунт? - <a href="open.php">Авторизуйтесь</a></p>
<p>
	<? if($_SESSION['message'])
	{
		echo '<p class="msg">' . $_SESSION['message'] . '</p>';
	}
unset($_SESSION['message']);
?>
</form>

</body>
</html>