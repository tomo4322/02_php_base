<?php
// 以下をfor文を使用して表示してください。

// 98
// 765
// 4321

$input = 9;
$addNumber = 2;

for ($x = 1; $x <= 3; $x ++) {
    for ($y = 1; $y <= $addNumber; $y ++) {
        echo $input;
        $input --;
    }
    $addNumber ++;
    echo "<br/>\n";
}
