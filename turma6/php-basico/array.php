<?php
$a = ['a', 'b', 'c'];
$b = ['casa1' => 'x', 'casa2' => 'y'];

$mult = [
		0 => [
				'a',
				'b',
				'c'
		]
];

//print $a[1];
//print $b['casa2'];

print_r($mult);

print '<br>';

var_dump($mult);

print '<br>';
print $mult[0][2];

//Functions

//var_dump(array_keys($mult));
//var_dump(array_values($mult));
//var_dump(array_merge($b, $a));
//print count($mult[0]);
//print sizeof($mult[0]);

var_dump(array_filter($a, function($i){
	return $i == 'a';
}));
print '<hr>';

var_dump(array_map(function($i){
	return $i . 'xy';
}, $a));

$x = [10, 11, 12];

$y = array_map(function($i){
	return $i * 2;
}, $x);

var_dump($x);
var_dump($y);
