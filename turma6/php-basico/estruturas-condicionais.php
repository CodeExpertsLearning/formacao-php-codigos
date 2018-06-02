<?php
$a = 10;

if($a == 12) {
	print $a;
} else if($a == 10) {
	print '$a é igual ' . $a;
} else {
	print $a . ' não é igual a 12';
}
?>

<?php if($a == 12): ?>
	<?=$a;?>
<?php elseif($a == 10): ?>
	<?='$a é igual ' . $a;?>
<?php else: ?>
	<?=$a . ' não é igual a 12';?>
<?php endif; ?>

<?php

switch ($a) {
	case 10:
		print '$a é igual ' . $a;
	break;

	default:
		print $a . ' não é igual a 12';
}

print '<br>';
$value = $a == 10 ? 'Igual a ' . $a : 'Não é igual a 10';
print $value;