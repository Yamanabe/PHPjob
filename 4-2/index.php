<?php
require_once("getData.php");
$getdata = new getData();
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
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php 
            while($post = $getdata->getPostData()) {
                echo "<tr>";
                echo "<td>".$post['id']."</td>";
                echo "<td>".$post['title']."</td>";
                echo "<td>".$post['category_no']."</td>";
                echo "<td>".$post['comment']."</td>";
                echo "<td>".$post['created']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>