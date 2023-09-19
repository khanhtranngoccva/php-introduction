<?php
require_once __DIR__ . "/database.php";

$conn = \Project\Database\get_connector();
$conn->query("INSERT INTO `snippet_table` (name, content) VALUES ('delay', 'function delay() {}')");