<?php
require_once("getData.php");
$user = new getData();
$user->getUserData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <img src="img/logo.png" class="logo">
        <p class="name">ようこそ <?php echo $user->getUserData()['last_name'].$user->getUserData()['first_name']; ?> さん</p>
        <p class="login">最終ログイン日: <?php echo $user->getUserData()['last_login']; ?></p>
    </div>
</body>
</html>