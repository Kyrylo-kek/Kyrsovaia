<?php
session_start();
if($_SESSION['user']){
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Реєстрація</title>
</head>
<body>
<style>
        body{
            background-image: url(https://st2.depositphotos.com/1854227/6331/i/450/depositphotos_63318379-stock-photo-mix-of-office-supplies-and.jpg);
 background-repeat: no-repeat;
  background-size: cover;
        }
    </style>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>ФІО</label>
    <input type="text" name="full_name" placeholder="Введіть ФІО" >
    <label>Логін</label>
    <input type="text" name="login"placeholder="Введіть логін">
    <label>Пошта</label>
    <input type="email" name="email" placeholder="Введіть пошту">
    <label>Зображення</label>
    <input type="file" name="avatar" placeholder="Введіть логін">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введіть пароль">
    <label>Підтвердження паролю</label>
    <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
    <button type="submit">Зареєструватись</button>
    <p>
        Вже є профіль?
        <a href="index.php">Авторизуйтесь</a>
    </p>
    <?php
    if($_SESSION['message']){
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>

</form>
</body>
</html>
