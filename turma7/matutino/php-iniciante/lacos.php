<?php

$usuarios = [
    ['nome' => 'Usuario 1', 'email' =>  'e1@email.com'],
    ['nome' => 'Usuario 2', 'email' =>  'e2@email.com'],
    ['nome' => 'Usuario 3', 'email' =>  'e3@email.com'],
    ['nome' => 'Usuario 4', 'email' =>  'e4@email.com'],
    ['nome' => 'Usuario 5', 'email' =>  'e5@email.com'],
];

print'<h1>Foreach: </h1>';
print '<hr>';

foreach($usuarios as $u) {
   print $u['nome'] . ' têm o email: ' . $u['email'];
   print '<hr>';
}

print'<h1>For: </h1>';
print '<hr>';

for($i = 0; $i < count($usuarios); $i++) {
   print $usuarios[$i]['nome'] . 
        ' têm o email: ' . $usuarios[$i]['email'];
   print '<hr>';
}

print '<h1>While: </h1>';
print '<hr>';

$i = 0;

while($i < count($usuarios)) {
    print $usuarios[$i]['nome'] . 
        ' têm o email: ' . $usuarios[$i]['email'];
   print '<hr>';
   $i++;
}
print '<h1>Do While: </h1>';
print '<hr>';

$i = 0;
do {
    
    print $usuarios[$i]['nome'] . 
        ' têm o email: ' . $usuarios[$i]['email'];
    print '<hr>';
    $i++;

}while($i < count($usuarios));