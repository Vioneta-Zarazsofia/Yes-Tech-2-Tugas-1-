<?php

// Mengambil nilai n dari query string
$n = $_GET['n'];

function printPattern($n) {
    $count = 1;
    $isIncreasing = true;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $count; $j++) {
            echo "* ";
        }
        echo "<br>";

        if ($isIncreasing) {
            $count++;
            if ($count > $i) {
                $isIncreasing = false;
            }
        } else {
            $count--;
            if ($count == 1) {
                $isIncreasing = true;
            }
        }
    }
}

// Memanggil fungsi printPattern dengan nilai n
printPattern($n);

?>