<?php
$servername = "fdb28.awardspace.net";
$username = "3593418_wpress562372c0";
$db = "3593418_wpress562372c0";
$password = "rGjtqVmWxkzSSYW9oFfsUAGQ6OZcpJ6F";
global $conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
