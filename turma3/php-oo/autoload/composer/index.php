<?php
require __DIR__ . '/vendor/autoload.php';

use CodeExperts\DB as Con;

$conn = Con\Connection::getCon();

print $conn instanceof \PDO;