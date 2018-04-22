<?php

$array = array(10, true, "name"); // vitalicio
$array2 = [10, true, "name"]; //Escrita a partir do 5.4
$otherArray = array("name");

// print $array[1];

// print_r($otherArray);
// print '<hr>';
var_dump($array);

// $name = "Nanderson";

// print $name[0];
// print $name[1];
// print $name[2];


//Array multidimensional
//Com keys associativas
$a = [
    "products" => [
        ["name" => "Teste1", "price" => 19.9],
        ["name" => "Teste2", "price" => 29.9]
    ]
];

var_dump($a);

print $a['products'][0]['name'];