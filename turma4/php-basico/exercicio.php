<?php
date_default_timezone_set('America/Sao_Paulo');

$date = '19:10';

if($date >= '06:00'
	&& $date <= '11:59') {

	print 'Bom dia!';

} elseif ($date >= '12:00'
	&& $date <= '17:59') {

	print 'Boa tarde!';

} else {
	print 'Boa tarde!';
}