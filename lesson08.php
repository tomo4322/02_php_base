﻿<?php
// 以下をfor文を使用して表示してください。

// 123
// *12
// **1

// for ($a = 3; $a >= 1; $a --) {
//     for ($b = 1; $b <= $a; $b ++) {
//         echo $b;
//     }
//     for ($c = 2; $c >= $b-1; $c --) {
//         echo "*";
//     }
//     echo "<br/>\n" ;
// }

for ($a = 3; $a >= 1; $a --) {
    for ($b = 2; $b <= 4-$a; $b ++) {
        echo "*";
    }
    for ($c = 1; $c <= $a; $c ++) {
        echo $c;
    }
    echo "<br/>\n";
}
