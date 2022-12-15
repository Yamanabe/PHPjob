<?php
$fruits = ["りんご" => 100,"みかん" => 150,"もも" => 500];
$num = [3,1,6];
$i = 0;
$buy = array_keys($num);
function price($up, $qty) {
    $price = $up * $qty;
    return $price;
}
foreach($fruits as $fruit => $uprice) {
    echo $fruit . 'は' . price($uprice, $num[$i]) . '円です。<br>';
    $i++;
}
?>