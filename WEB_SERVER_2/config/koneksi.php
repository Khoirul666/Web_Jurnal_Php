<?php

$server = "localhost";
$folder = "assets/images/app";
$user = "root";
$pass = "";
$database = "db_aziz_ta_2";

$koneksi = mysqli_connect($server,$user,$pass,$database);

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$path = $_SERVER['REQUEST_URI'];
$queryString = $_SERVER['QUERY_STRING'];
$directoryPath = dirname(__FILE__);
$base_url = "$protocol://$domain";

?>