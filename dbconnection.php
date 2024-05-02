<?php
$host = 'localhost';
$port = 3306;
$dbName = 'blogs';
$username = 'dev';
$password = 'password';

$dns = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";
// dns will output "mysql:host=localhost;port=3306;dbname=blogs;charset=utf8"

//try -catch is used to catch the error inside the program
try {
    $pdo = new PDO($dns, $username, $password);
} catch (PDOException $e) {
    echo 'connection failed ' . $e->getMessage();
}
