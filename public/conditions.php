<?php
$age = 25;
if ($age < 20) {
    echo "You can't drink";
} else if ($age < 25) {
    echo "You can't buy a house";
} else {
    echo "=)";
}

for ($i = 0; $i < 10; $i++) {
    if ($i < 5) {
        continue;
    }
    echo $i;
}

while ($i < 20) {
    echo "While loop: $i\n";
    $i++;
}

$color = "red";
switch ($color) {
    case "red": {
        echo "The color is red";
        break;
    }
    case "blue": {
        echo "The color is blue";
        break;
    }
}