<?php

$config = parse_ini_file(__DIR__ . '/../.env');
$host = $config['DB_HOST'];
$db   = $config['DB_NAME'];
$user = $config['DB_USER'];
$pass = $config['DB_PASS'];         

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

print "veikia";  