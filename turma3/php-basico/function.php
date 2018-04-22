<?php 

function helloWorld()
{
	print "Hello World";
}

helloWorld();

function hello($name)
{
	return "Hello " . $name;
}

print '<hr>';

print hello("Manoel");

print '<hr>';

function test()
{
	$parameters = func_get_args();

	var_dump($parameters);
}

test("Teste 1", "Teste 2", "Teste 3");
