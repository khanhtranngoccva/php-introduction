<?php
$conn = mysqli_connect("mysql", "root", "root", "php_intro");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    $conn->query("CREATE TABLE 
        `snippet_table` (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name TINYTEXT,
            content MEDIUMTEXT,
            date DATETIME DEFAULT now()
        )
    ");
} catch (Exception $exception) {
}