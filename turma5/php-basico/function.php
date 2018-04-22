<?php 
/*
variadic functions
recebe um array com os parametros 
escritos na definicao da funcao
*/
// function soma(...$a) {
//     //$arg = func_get_args();
//     var_dump($a[0]);
//     // print $a + $b;
// }

// function somaDois($a, $b, $c, $d) {
//     print $a;
//     print $b;
//     print $c;
//     print $d;
// }

// soma(10, 20, 30, 40);

function divide($c, $d) {
    if ($d <= 0) {
        return "um numero não pode ser divido por zero!";
    }

    return $c / $d;
}

$valeu = divide(10,0);

print $valeu;