<?php

$variavelName = 'Thiago';
$variavelSobrenome = 'Lopes';

echo $variavelName;


// Similarmente
$variavelName = 'Outro Item';

echo $variavelName;



function add ($a, $b) {
    return $a + $b;
}

$funcName = 'add';

echo $funcName(1, 2);

class myClass {
    public function __construct()
    {
        $functionName = 'doSomething';
        $this->$functionName("\nOi da classe");
    }
    public function doSomething ($string) {
        echo $string;
    }
}
$oi = new myClass();
echo $oi->doSomething("^");