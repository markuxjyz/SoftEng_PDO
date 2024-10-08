<?php

// Database connection details
$host = "localhost"; // Hostname of the database server
$user = "root"; // Username to connect to the database
$password = ""; // Password to connect to the database
$dbname = "cosmetics"; // Name of the database

// Data Source Name (DSN) for the PDO connection
$dsn = "mysql:host={$host};dbname={$dbname}";

// Create a new PDO instance and establish a database connection
$pdo = new PDO($dsn, $user, $password);

// Set the time zone for the database connection to +08:00
$pdo->exec("SET time_zone = '+08:00';");

?>