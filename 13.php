<?php

// Define a class
class Car {
    // Properties
    public $brand;
    public $model;
    public $color;

    // Constructor
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // Methods
    public function startEngine() {
        echo "Starting the engine of " . $this->brand . " " . $this->model . ".<br>";
    }

    public function accelerate() {
        echo "Accelerating " . $this->brand . " " . $this->model . ".<br>";
    }

    public function brake() {
        echo "Applying brakes to " . $this->brand . " " . $this->model . ".<br>";
    }
}

// Create objects (instances) of the Car class
$car1 = new Car("Toyota", "Corolla", "Silver");
$car2 = new Car("Honda", "Civic", "Red");

// Access properties and call methods
echo "Car 1: " . $car1->brand . " " . $car1->model . " (" . $car1->color . ")<br>";
$car1->startEngine();
$car1->accelerate();
$car1->brake();

echo "<br>";

echo "Car 2: " . $car2->brand . " " . $car2->model . " (" . $car2->color . ")<br>";
$car2->startEngine();
$car2->accelerate();
$car2->brake();

?>
