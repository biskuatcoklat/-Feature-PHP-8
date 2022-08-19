<?php
//match Expression adalah sebuah struktur yang mirip dengan switch case
//match artinya expression yang bisa return nilai

$value = "A";
$result = match ($value) {
    "A", "B", "C" => "anda lulus",
    "D" => "anda tidak lulus",
    "E" => "anda salah jurusan",
    default => "nilai apa itu"
};
echo $result;

echo PHP_EOL;

$nilai = 80;
$reset = match (true) {
    $nilai >= 80 => "A",
    $nilai >= 70 => "B",
    $nilai >= 60 => "C",
    $nilai >= 50 => "D",
    default => "E"
};
echo $reset . PHP_EOL;

$nama = "Mrs.nani";
$r = match (true) {
    str_contains($nama, "Mr.") => "hello sir",
    str_contains($nama, "Mrs.") => "hello mam"
};
echo $r;
