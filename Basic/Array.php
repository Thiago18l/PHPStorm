<?php
$a = array("a"=> "maça", "b"=> "banana");
$b = array("a"=>"pera", "b"=> "framboesa", "c"=>"morango");

$c = $a + $b; // União de $a e $b

echo "União de $a, $b: \n";
var_dump($c);

$c = $b + $a; // União de b e a

echo "união de $b e $a: \n";
var_dump($c);
