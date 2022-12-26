<?php
    $servername = "localhost";
    $username = "pemw7441_Rizky_Ade";
    $password = "Rizky_Ade20102158";
    $dbname = "pemw7441_Rizky Ade";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>