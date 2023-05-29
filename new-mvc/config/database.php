<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'crud-mvc';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed:mmmm  ' . mysqli_connect_error());
}