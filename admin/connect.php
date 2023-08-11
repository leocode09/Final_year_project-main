<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'oicas';
    $conn = '';

    try {
        $conn = mysqli_connect($host, $username, $password, $db);
    } catch (mysqli_sql_exception) {
        echo "can't connect";
    }

    if (!$conn) {
        echo 'db not connected';
    }
?>