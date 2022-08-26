<?php
    session_start();
if(!$_SESSION['user']){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/profile.css">
    <title>Document</title>
</head>
<body>
<form class="profile">
  <div class="avatar"><img src="<?=$_SESSION['user']['avatar']?>"  alt=""></div>
    <h2 style="margin: 10px"><?=$_SESSION['user']['full_name']?></h2>
    <a href="http://gmail.com" target="_blank"> Пошта <?=$_SESSION['user']['email']?></a>
   <div><a href="vendor/logout.php" class="logout">Вихід</a></div>
</form>
</body>
</html>
