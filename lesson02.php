<?php
// 以下をfor文を使用して表示してください。

// 987
// 654
// 321

$input = 9;

for ($x = 1; $x <= 3; $x ++) {
    for ($y = 1; $y <= 3; $y ++) {
        echo $input;
        $input --;
    }
    echo "<br/>\n";
}
