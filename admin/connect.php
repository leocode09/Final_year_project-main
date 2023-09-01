<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'oicas';
    $conn = '';
    
    try {
        $conn = mysqli_connect($host, $username, $password, $db);
    } catch (\Throwable $th) {
        echo "can't connect";
    }

    if (!$conn) {
        echo 'db not connected';
    }
?>