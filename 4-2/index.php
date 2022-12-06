<?php
require_once("getData.php");
$getdata = new getData();
$post = $getdata->getPostData();
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
        <p class="name">ようこそ <?php echo $getdata->getUserData()['last_name'].$getdata->getUserData()['first_name']; ?> さん</p>
        <p class="login">最終ログイン日: <?php echo $getdata->getUserData()['last_login']; ?></p>
    </div>
    <table>
        <tr class="tableheader">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php 
            foreach($post as $val) {
                echo "<tr>";
                echo "<td>".$val->id."</td>";
                echo "<td>".$val->title."</td>";
                echo "<td>".$val->category_no."</td>";
                echo "<td>".$val->comment."</td>";
                echo "<td>".$val->created."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>