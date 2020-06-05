<?php
$a = array("a"=> "maça", "b"=> "banana");
$b = array("a"=>"pera", "b"=> "framboesa", "c"=>"morango");

$c = $a + $b; // União de $a e $b

echo "União de $a, $b: \n";
var_dump($c);

$c = $b + $a; // União de b e a

echo "união de $b e $a: \n";
var_dump($c);

// Comparando arrays;

$array1 = array("maçã", "banana");
$array2 = array(1 => "banana", 0=>"maçã");

var_dump($array1 == $array2);
var_dump($array1 === $array2);