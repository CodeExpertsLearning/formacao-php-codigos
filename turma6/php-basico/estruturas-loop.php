<?php
$fruits = ['Lazaro', 'Absai'];

//While
$i = 0;
while($i < count($fruits)) {
	print $fruits[$i];
	print '<br>';
	$i++;
}
print '<hr>';
//Do - While
$i = 0;
do {
	print $fruits[$i];
	print '<br>';
	$i++;
} while($i < count($fruits));

print '<hr>';
//For
for($i = 0; $i < count($fruits); $i++) {
	print $fruits[$i];
	print '<br>';
}
print '<hr>';
//Foreach
foreach($fruits as $k => $f) {
	print $k . ' - ' . $f;
	print '<br>';
}