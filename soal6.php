<?php

function convertTime($time12) {
    $amPm = substr($time12, -2);
    $time = substr($time12, 0, -2);
    $hour = intval(substr($time, 0, 2));

    if ($amPm == 'AM' && $hour == 12) {
        $hour = 0;
    } elseif ($amPm == 'PM' && $hour < 12) {
        $hour += 12;
    }

    return str_pad($hour, 2, '0', STR_PAD_LEFT) . substr($time, 2);
}

// Input waktu dalam format 12-jam AM/PM
$time12 = '00:05:00PM';

// Mengkonversi waktu ke format 24 jam
$time24 = convertTime($time12);

// Menampilkan hasil konversi
echo $time24;

?>