<?php

function modulo($mod)
{
    if ($mod % 2 == 0) {
        return true;
    }
}

function papan_catur($angka)
{
    // tulis kode di sini
    for ($i = 1; $i <= $angka; $i++) {
        if (modulo($i) == true) {
            for ($j = 1; $j <= $angka - 1; $j++) {
                echo "&nbsp&nbsp#";
            }
            echo "<br>";
        } else {
            for ($j = 1; $j <= $angka; $j++) {
                echo "#&nbsp&nbsp";
            }
            echo "<br>";
        }
    }
    echo "<br><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/