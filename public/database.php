<?php
namespace Project\Database;
require_once __DIR__ . "/logging.php";

$conn = mysqli_connect("mysql", "root", "root", "php_intro");

function get_connector() {
    global $conn;
    return $conn;
}

