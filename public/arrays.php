<pre>
    <?php
//    // Actually an ordered hashmap/JS object/Python
//    // dict under the hood
//    $cars = array("Volvo", "BMW", "Toyota", array("Mercedes"));
//
//    // Is this a shallow or deep copy? If it's a shallow copy, pushing into the Mercedes array in $cars_2 will affect the Mercedes array in $cars.
//
//    // It really is a deep copy. 😔
//    // Can use the & syntax to assign only a reference.
//    $cars_2 = $cars;
//    $cars_3 = &$cars_2;
//    array_push($cars_2[3], "Volkswagen");
//    array_push($cars_2, "Hyundai");
//
//
//    $export_cars = var_export($cars, true);
//    $export_cars_2 = var_export($cars_2, true);
//    $export_cars_3 = var_export($cars_3, true);
//    echo "<p>$export_cars</p>";
//    echo "<p>$export_cars_2</p>";
//    echo "<p>$export_cars_3</p>";
    $x = [1, 2, 3, 8, 11, 4, 7, 6, 9, 5, 0];
    sort($x);
    var_dump($x);

    $sumFunc = function ($carry, $item) {
        return $carry + $item;
    };
    $sum = array_reduce($x, $sumFunc, 0);
    echo $sum;
    ?>
</pre>