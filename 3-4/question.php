<link rel="stylesheet" href="css/style.css">
<?php
$name = $_POST['name'];
$port = ["80", "22", "20", "21"];
$lang = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];

?>
<p>お疲れ様です<?php echo $name ?>さん</p>
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<?php foreach ($port as $value) { ?>
    <input type="radio" name="portAnswer" value="<?php echo $value; ?>">
        <?php echo $value; ?>
<?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<?php foreach ($lang as $value) { ?>
    <input type="radio" name="langAnswer" value="<?php echo $value; ?>">
        <?php echo $value; ?>
<?php } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach ($command as $value) { ?>
    <input type="radio" name="commandAnswer" value="<?php echo $value; ?>">
        <?php echo $value; ?>
<?php } ?>
<input type="hidden" name="hiddenName" value="<?php echo $name; ?>">
<input type="submit" value="回答する">
</form>