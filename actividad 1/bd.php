<?php


$servidor = "bbddfutbol.cbsz60aw84n4.us-east-1.rds.amazonaws.com";
$port = 3306;
$usuario = "admin";
$password = "bbddFutbol"; 
$base_datos = "restaurante"; 

$dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones_ssl = [
    PDO::MYSQL_ATTR_SSL_CA => 'cert/global-bundle.pem',
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
];

$conector = null;
$conector = new PDO($dsn, $usuario, $password, $opciones_ssl);
?>