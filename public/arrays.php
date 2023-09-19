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
    $cars = array("BMW", "Volvo", "Toyota", "Mercedes");
    var_dump($cars);
    // Reverse with cloning.
    $cars_2 = array_reverse($cars);
    var_dump($cars_2);
    var_dump($cars);

    ?>
</pre>