<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'sprint';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
