<?php
function ubah_huruf($string)
{
    //kode di sini

    $huruf = "abcdefghijklmnopqrstuvwxyz";
    $cipher = "";

    for ($i = 0; $i < strlen($string); $i++) {
        $posisi = strpos($huruf, $string[$i]);
        $cipher .= substr($huruf, $posisi + 1, 1);
    }
    return $cipher;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
