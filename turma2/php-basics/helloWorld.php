<?php 
/**
 Comentário
 de Várias
 Linhas */
 #Uma Linha
 //Uma Linha
// $hello = "Hello World";

// $hello = $hello . " OKOK";

// print $hello;

// print "10" + 10;
// print '10' * 10;
// echo  '10' * 10;
// 
// 
// $name = "Today";
// $result =  $name == "Today" ? "T" : "N";

// print $result;

/**
 * PHP - Todas as versões
 * @var array
 */
//$array = array("Test", 10, 40.0);

/**
 * 5.4 
 * Tem short syntax
 */
$array = ["Test", 10, 40.0];


/**
 * IF | ELSE | ELSIF 
 */
// if($array[0] != "Test") {
// 	print "Existe esse valor";
// } else if() {
// 	print "Valor 10 Encontrado";
// } 
// else {
// 	print "Não existe esse valor";
// }
//  $num = 10;

// switch ($num) {
// 	case $array[1] == $num:
// 		print "Valor 10 Encontrado SW" . PHP_EOL;
// 		break;
// 	case $array[1] == $num:
// 		print "Valor 10 Encontrado SW" . PHP_EOL;
// 		break;

// 	default:
// 		print "Não existe esse valor" . PHP_EOL;
// 		break;
// }
// 
//print 'O valor = ' . $num;
//
// var_dump($array);
//For, While, Do-While, Foreach
// foreach($array as $key => $i)
// {
// 	print $key.PHP_EOL;
// }
function calculadora($a = 3, $b = 3, $op = '+')
{
	switch ($op) {
	  case '+':
	    return $resultado = $a + $b;
	    break;
	  case '-':
	    return $resultado = $a - $b;
	    break;
	  case '*':
	    return $resultado = $a * $b;
	    break;
	  case '/':
	    return $resultado = $a / $b;
	    break;
	  
	  default:
	    break ;
	}
}

print calculadora();






































































