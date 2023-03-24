Prima:

<?php
// menerima input dari pengguna
$n = readline("Masukkan angka: ");

// menampilkan deret bilangan prima kurang dari atau sama dengan angka yang dimasukkan
echo "Deret bilangan prima kurang dari atau sama dengan $n: ";
for ($i = 2; $i <= $n; $i++) {
    $is_prime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $is_prime = false;
            break;
        }
    }
    if ($is_prime) {
        echo $i . " ";
    }
}
?>



 
Fibonacci:

<?php
// inisialisasi dua bilangan awal
$prev = 0;
$curr = 1;

// menampilkan angka fibonacci dari 1 hingga 20
echo "Deret Fibonacci dari 1 hingga 20: ";
for ($i = 1; $i <= 20; $i++) {
    echo $curr . " ";
    $next = $prev + $curr;
    $prev = $curr;
    $curr = $next;
}
?>


 
Nilai Siswa:

<?php

// Meminta input nilai Matematika
echo "Masukkan nilai Matematika: ";
$nilai_matematika = readline();

// Meminta input nilai Fisika
echo "Masukkan nilai Fisika: ";
$nilai_fisika = readline();

// Meminta input nilai Biologi
echo "Masukkan nilai Biologi: ";
$nilai_biologi = readline();

// Menghitung nilai rata-rata
$nilai_rata_rata = ($nilai_matematika + $nilai_fisika + $nilai_biologi) / 3;

// Menampilkan nilai rata-rata
echo "Nilai rata-rata: " . $nilai_rata_rata . "<br>";

// Memeriksa apakah Dani lulus atau tidak
if ($nilai_rata_rata >= 60) {
    echo "Dani lulus.";
} else {
    echo "Dani tidak lulus.";
}

?>
