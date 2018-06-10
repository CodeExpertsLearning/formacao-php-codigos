<?php
//Timezones - Fuso-horario
date_default_timezone_set('America/Sao_Paulo');

/**
 * Criar com condicionais
 * Um cara que vai printar com base na hora
 * se é bom dia, boa tarde ou boa noite
 */
$hora = date('H:i:s');

print $hora;
