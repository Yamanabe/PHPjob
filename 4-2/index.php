<?php
require_once("getData.php");
$getdata = new getData();
$user = $getdata->getUserData();
$posts = $getdata->getPostData();
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
        <p class="name">ようこそ <?php echo $user['last_name'].$user['first_name']; ?> さん</p>
        <p class="login">最終ログイン日: <?php echo $user['last_login']; ?></p>
    </div>
    <table>
        <tr class="tableheader">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($posts as $post) { ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php if($post['category_no'] == 1) {
                    echo '食事';
                } elseif($post['category_no'] == 2) {
                    echo '旅行';
                } else {
                    echo 'その他';
                }; ?></td>
                <td><?php echo $post['comment']; ?></td>
                <td><?php echo $post['created']; ?></td>
            </tr>
        <?php } ?>
        
    </table>
    <div class="footer"><p>Y&I group.inc</p></div>
</body>
</html>