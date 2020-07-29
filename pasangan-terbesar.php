<?php
function pasangan_terbesar($angka)
{
    // kode di sini
    $angka_bsr = substr($angka, 0, 2);
    for ($i = 0; $i <= strlen($angka) - 2; $i++) {
        $angka_banding = substr($angka, $i, 2);
        if ($angka_bsr < $angka_banding) {
            $angka_bsr = $angka_banding;
        }
    }
    return $angka_bsr;
}

// TEST CASES
echo pasangan_terbesar(641573) . "<br>"; // 73
echo pasangan_terbesar(12783456) . "<br>"; // 83
echo pasangan_terbesar(910233) . "<br>"; // 91
echo pasangan_terbesar(71856421) . "<br>"; // 85
echo pasangan_terbesar(79918293); // 99
