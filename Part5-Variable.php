<?php
$name = "Satria";
echo "name : ";
echo $name;

echo "\n";

$age = 20;
echo $age;
echo "\n";

// we can change this age int to string, this is dynamic type
$age = "dua puluh";
echo $age;

echo "\n\n===variable variables===\n";
$contoh = "eko";
$$contoh = "kurniawan";

echo "contoh : ";
echo $contoh;
echo "\n";

echo "name : ";
echo $eko;
