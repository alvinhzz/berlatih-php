<?php

function palindrome($string)
{
    $hasil = false;

    if (strrev($string) == $string) {
        $hasil = true;
    }

    return $hasil;
}

function palindrome_angka($angka)
{
    if ($angka >= 0 && $angka <= 8) {
        return $angka += 1;
    } else if (palindrome($angka)) {
        $angka++;
    }

    while (palindrome($angka) == false) {
        $angka++;
    }

    return $angka;
}

// TEST CASES
echo palindrome_angka(8) . "<br>"; // 9
echo palindrome_angka(10) . "<br>"; // 11
echo palindrome_angka(117) . "<br>"; // 121
echo palindrome_angka(175) . "<br>"; // 181
echo palindrome_angka(1000); // 1001
