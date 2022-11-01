<?php
$number = $_POST['number'];
$baraNumber = wordwrap($number, 1, ",", true);
$arrayNumber = explode(",", $baraNumber);
$kuji = array_rand($arrayNumber, 1);
?>
<p><?php echo date("Y/m/d", time()) ?>の運勢は</p>
<p>選ばれた数字は<?php echo $arrayNumber[$kuji] ?></p>
<p><?php 
    if ($arrayNumber[$kuji] == 9) {
        echo "大吉";
    } elseif ($arrayNumber[$kuji] >= 7) {
        echo "吉";
    } elseif ($arrayNumber[$kuji] >= 4) {
        echo "中吉";
    } elseif ($arrayNumber[$kuji] >= 1) {
        echo "小吉";
    } else {
        echo "凶";
    }
?></p>
