<?php 
$num1 = 2;
$num2 = 3;
$op = '/';

/*
switch ($op) {
	case '+':
		echo $result= $num1 + $num2;
		break;
	case '-':
		echo $result= $num1 - $num2;
		break;
	case '*':
		echo $result= $num1 * $num2;
		break;
	case '/':
		echo $result= $num1 / $num2;
		break;
	default:
	echo "nao deu certo";
	break;
}*/

if ($op == '+') {
	echo $result= $num1 + $num2;
}elseif($op == '-'){
	echo $result= $num1 - $num2;
}elseif($op == '*'){
	echo $result= $num1 * $num2;
}elseif($op == '/'){
	echo $result= $num1 / $num2;
}
/*
for ($i=0; $i <= 10; $i++) { 
	$result = 1 + $i;
	echo '1+'.$i.'='.$result.'<br>';
}

php -S localhost:3030dljfnskdjfksdfnksdjfn

*/
?>