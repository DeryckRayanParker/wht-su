<?php
/**
 * Created by PhpStorm.
 * User: rostislav
 * Date: 3/3/17
 * Time: 7:17 AM
 */
include __DIR__ . '/../vendor/autoload.php';

$app = new Wht\App\Application();
$app->run();


/*
$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
if (!isset($dsn, $user) || false === $password) {
    echo('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
}
try {
    $db = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    var_dump($e->getMessage() . '<br>');
    var_dump($e->getFile() . '<br>');
    var_dump($e->getLine() . '<br>');
    var_dump($e->getPrevious() . '<br>');
    var_dump($e->errorInfo . '<br>');
    var_dump($e->getCode() . '<br>');
    var_dump($e->getTraceAsString());
}

echo "Rostik";
echo "test";
//echo phpinfo();

*/