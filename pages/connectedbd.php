<?php
$servername = "localhost";
$username = "naelamadou";
$password = "Passer@_123";
try {
    $mabase = new PDO("mysql:host=$servername;dbname=mediatech", $username, $password);
    $mabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>