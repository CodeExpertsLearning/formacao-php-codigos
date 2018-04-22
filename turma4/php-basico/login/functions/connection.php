<?php

function connection()
{
	$dsn = 'mysql:host=' . HOST . ';dbname=' . DBNAME;

	$conn = new PDO($dsn, USER, PASSWORD);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $conn;
}