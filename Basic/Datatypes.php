<?php
// Null
$null = null;

// Boolean

$verdade = true;
$falso = false;

if ($verdade) {
    echo "Verdade";
} else {
    echo "falso";
}

// Inteiro

$foo = -3; // negative
$foo = 0;
// zero (can also be null or false (as boolean)
$foo = 123; // positive decimal
$bar = 0123; // octal = 83 decimal
$bar = 0xAB; // hexadecimal = 171 decimal
$bar = 0b1010; // binary = 10 decimal
var_dump(0123, 0xAB, 0b1010); // output: int(83) int(171) int(10)

//float

$float = 1.23;
$float = 10.0;
$diff = -INF;
$diff = NAN;

// Arrays

$vetor = array(1, 2, 3);
$vetor2 = ["a", true, 123 => 5];
echo $vetor2[0];
echo $vetor2[1];
echo $vetor2[123];

$array = array();
$array["Oi"] = "tudo bem?";
echo $array["Oi"];
// String

$foo = "bar";
echo $foo[0];

