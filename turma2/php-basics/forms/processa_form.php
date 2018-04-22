<?php 
function exibeData(array $data)
{
	if(isset($data['name']))
		print $data['name'];

	if(isset($data['price']))
		print $data['price'];
}