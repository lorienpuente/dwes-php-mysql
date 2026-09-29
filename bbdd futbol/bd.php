<?php


$servidor = "bbddfutbol.cbsz60aw84n4.us-east-1.rds.amazonaws.com";
$port = 3306;
$usuario = "admin";
$password = "bbddFutbol"; // ¡IMPORTANTE! Si pusiste contraseña en Workbench, escríbela aquí entre las comillas
$base_datos = "bbddfutbol"; // El nombre exacto de la base de datos que creamos

$dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones_ssl = [
    PDO::MYSQL_ATTR_SSL_CA => 'cert/global-bundle.pem',
    // Desactivamos temporalmente la verificación estricta del nombre del host para asegurar que conecte
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
];

$conector = null;
$conector = new PDO($dsn, $usuario, $password, $opciones_ssl);
?>