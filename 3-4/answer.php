<link rel="stylesheet" href="css/style.css">
<?php 
$name = $_POST['hiddenName'];
$answer1 = $_POST['portAnswer'];
$answer2 = $_POST['langAnswer'];
$answer3 = $_POST['commandAnswer'];
?>
<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if ($answer1 == "80") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
?>
<p>②の答え</p>
<?php
    if ($answer2 == "HTML") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
?>
<p>③の答え</p>
<?php
    if ($answer3 == "select") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
?>