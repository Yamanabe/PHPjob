<?php
$fruits = ["りんご" => 100,"みかん" => 150,"もも" => 500];
$num = [3,1,6];
$buy = array_keys($num);
function price($up, $qty) {
    $price = $up * $qty;
    return $price;
}
foreach($fruits as $fruit => $uprice) {
    echo $fruit . 'は' . price($uprice, $num) . '円です。<br>';
}
?>