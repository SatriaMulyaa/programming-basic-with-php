<?php
$name = "Eko";
// we can set value to be null or blank
$name = NULL;
echo "name : ";
echo $name;

echo "\n";
// we can initialize with blank or null
$me = null;
echo "me : ";
echo $me;

echo "====check data null or not====\n";
$name = "satria";
$name = null;

$name = "eko";

echo "is name null? :";
var_dump(is_null($name));

echo "\n====remove variable with unset====\n";
$name = "misaki";
echo "my name is ";
unset($name);

echo $name;

echo "\n===isset check variable, and is the variable null?==\n";
$team = "liverpool";
unset($team);
var_dump(isset($team));
