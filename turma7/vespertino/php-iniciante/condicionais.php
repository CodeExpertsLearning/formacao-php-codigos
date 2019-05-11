<?php
$num = 11;

if($num == 10) {
    print 'Número correto!';
} else if($num == 11) {
    print 'Número ' . $num;
} else {
    print 'Número errado!';
}

print '<hr>';

switch($num) {
    case 10:
        print 'Número correto!';
    break;
    case 11:
        print 'Número ' . $num;
    break;
    default:
        print 'Número errado!';
}