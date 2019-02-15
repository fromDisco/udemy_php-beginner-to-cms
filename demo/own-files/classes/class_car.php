<?php

    class Car {

        private $wheels = 10;

        function wheel() {
            echo "wheels move";
        }

        function changeWheels() {
            return $this->wheels;
        }
    }

    $car = new Car();
    echo $car->changeWheels();