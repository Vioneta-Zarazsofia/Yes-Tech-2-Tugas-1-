<?php

function removeDuplicates($str) {
    $uniqueChars = '';
    $visited = [];

    // Mengiterasi setiap karakter dalam string
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        // Jika karakter belum pernah dikunjungi sebelumnya, tambahkan ke string unik
        if (!in_array($char, $visited)) {
            $uniqueChars .= $char;
            $visited[] = $char;
        }
    }

    return $uniqueChars;
}

// Input string
$str = 'ccbabacc';

// Menghapus duplikasi karakter
$result = removeDuplicates($str);

// Menampilkan hasil
echo $result;

?>