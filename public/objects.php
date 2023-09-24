<?php
class Dog {
    public string $species;

    public function __construct(string $species) {
        $this->species = $species;
    }

    public function bark(): void {
        echo "Bark! I'm a(n) $this->species.";
    }
}

$dog_1 = new Dog("Labrador");
$dog_2 = $dog_1;

$dog_1->species = "Terrier";
$dog_1->bark();
$dog_2->bark();