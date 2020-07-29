<?php
function skor_terbesar($arr)
{
    //kode di sini
    $new_data = [];
    $lara = [];
    $reactJS = [];
    $reactNative = [];
    $temp_nilai = 0;

    foreach ($arr as $data => $value) {
        $nilai[$data] = $value["nilai"];
        $kelas[$data] = $value["kelas"];
    }

    // array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $arr);

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]["kelas"] == "Laravel") {
            if ($arr[$i]["nilai"] > $temp_nilai) {
                $temp_nilai = $arr[$i]["nilai"];
                $lara[] = $arr[$i];
            }
        } elseif ($arr[$i]["kelas"] == "React JS") {
            if ($arr[$i]["nilai"] > $temp_nilai) {
                $temp_nilai = $arr[$i]["nilai"];
                $reactJS[] = $arr[$i];
            }
        } elseif ($arr[$i]["kelas"] == "React Native") {
            if ($arr[$i]["nilai"] > $temp_nilai) {
                $temp_nilai = $arr[$i]["nilai"];
                $reactNative[] = $arr[$i];
            }
        }
    }

    $new_data = [
        "React Native" => $reactNative,
        "React JS" => $reactJS,
        "Laravel" => $lara
    ];

    return $new_data;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
