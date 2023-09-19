<?php
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/logging.php";
$conn = \Project\Database\get_connector();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$result = $conn->query("SELECT name, content FROM `snippet_table` LIMIT 10")->fetch_all();
Project\Console::log($result);
?>
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $item) {
        $name = $item[0];
        $content = $item[1];
        echo "<tr>
           <td>$name</td>
           <td>$content</td>
        </tr>";
    } ?>
    </tbody>
</table>

</body>
</html>