<?php
class Dog {
    public $species;

    function __construct(string $species) {
        $this->species = $species;
    }

    function bark() {
        echo "Woof!";
    }
}

