<?php

// Define as configurações de acesso à base de dados.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'mypulse');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_PORT', '3306');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='. DB_PORT;
$pdo = new PDO($dsn, DB_USER, DB_PASS);


$pageTitle = 'Formulário Login => myPulse';