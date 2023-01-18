<?php
$rumus = $_POST['rumus'];
$n1 = $_POST['nilai1'];
$n2 = $_POST['nilai2'];
if ($n1 == '' || $n2 == '') {
    echo 'Tidak ada nomor';
} else {
    if ($rumus == 'ls') {
        function luas_segitiga($n1, $n2)
        {
            $alas = $n1;
            $tinggi = $n2;
            $luas = 0.5 * $alas * $tinggi;
            return $luas;
        }
        echo 'Luas segitiga adalah :' . luas_segitiga($n1, $n2);
    }

    if ($rumus == 'pp') {
        function luas_persegi_panjang($n1, $n2)
        {
            $panjang = $n1;
            $lebar = $n2;
            $luas = $panjang * $lebar;
            return $luas;
        }
        echo 'Luas persegi panjang adalah :' . luas_persegi_panjang($n1, $n2);
    }
}