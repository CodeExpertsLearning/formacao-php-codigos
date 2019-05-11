<?php

$usuarios = [
    ['nome' => 'Usuario 1', 'email' =>  'e1@email.com'],
    ['nome' => 'Usuario 2', 'email' =>  'e2@email.com'],
    ['nome' => 'Usuario 3', 'email' =>  'e3@email.com'],
    ['nome' => 'Usuario 4', 'email' =>  'e4@email.com'],
    ['nome' => 'Usuario 5', 'email' =>  'e5@email.com'],
];

foreach($usuarios as /*$key =>*/ $u) {
    // print $key;
    print $u['nome'] . ' têm o e-mail: ' . $u['email'] . '<br>';
}

print '<hr>';

for($i = 0; $i < count($usuarios); $i++) {
    print $usuarios[$i]['nome'] 
    . ' têm o e-mail: ' . $usuarios[$i]['email'] . '<br>';
}

print '<hr>';
$i = 0;

do{
    print $usuarios[$i]['nome'] 
    . ' têm o e-mail: ' . $usuarios[$i]['email'] . '<br>';

    $i++;
} while($i < count($usuarios));

print '<hr>';

$i = 0;

while($i < count($usuarios)) {
    print $usuarios[$i]['nome'] 
    . ' têm o e-mail: ' . $usuarios[$i]['email'] . '<br>';

    $i++;
}
