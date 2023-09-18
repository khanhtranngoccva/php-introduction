<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello PHP!</title>
</head>
<body>
<h1>
    <?php
    echo "Hello PHP! This is an oof.";
    ?>
</h1>
<p>
    Scope test:
    <?php
    for ($iter = 0; $iter < 10; $iter++) {
        echo "<p>$iter</p>";
    }
    echo "$iter\n";
    ?>
</p>
<p>
    Internal variable test:
    <?php
    $x = 0;
    $y = 4.5;
    $z = false;
    $t = null;
    echo $z;
    ?>
</p>
<p>
    Import and export?

    <?php
    require_once "./classes.php";
    $dog = new Dog("Terrier");
    $dog->bark();
    ?>
</p>
<p>
    Array stringification?
    <?php
    $data_array = array(1, 2, 3, 4, 5);
    echo var_export($data_array, true);
    ?>
</p>
</body>
</html>