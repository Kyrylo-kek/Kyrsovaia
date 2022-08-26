

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація і регістрація</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Форма авторизации -->

    <form action="index.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть свій пароль">
        <button type="submit">Увійти</button>
        <p>
            У вас нема аккаунту? - <a href="/register.php">зареєструватися</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>