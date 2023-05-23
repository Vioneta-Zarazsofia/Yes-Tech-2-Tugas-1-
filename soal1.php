<?php

function fibonacci($n) {
    $fib = array(0, 1); // Menginisialisasi array dengan angka awal Fibonacci

    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; // Menghitung angka Fibonacci berikutnya
    }

    return $fib; // Mengembalikan seluruh deret Fibonacci hingga indeks n
}

// Input n
$n = 3;

// Memanggil fungsi fibonacci
$fibonacciSeries = fibonacci($n);

// Menampilkan deret Fibonacci
echo "Deret Fibonacci ke " . ($n + 1) . " adalah fs(n) = [";
for ($i = 0; $i <= $n; $i++) {
    echo $fibonacciSeries[$i];
    if ($i != $n) {
        echo ", ";
    }
}
echo "]. Dengan pengindeksan berbasis nol, fs($n) = " . $fibonacciSeries[$n] . ".";

?>