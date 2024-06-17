<?php

// Interfaces específicas siguiendo el principio de segregación de interfaces
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

interface Sleepable {
    public function sleep();
}

// Implementación de un trabajador humano que necesita todas las interfaces
class HumanWorker implements Workable, Eatable, Sleepable {
    public function work() {
        echo "Human working...\n";
    }

    public function eat() {
        echo "Human eating...\n";
    }

    public function sleep() {
        echo "Human sleeping...\n";
    }
}

// Implementación de un trabajador robot que solo necesita la interfaz Workable
class RobotWorker implements Workable {
    public function work() {
        echo "Robot working...\n";
    }
}

// Ejecución de ejemplos
$human = new HumanWorker();
$human->work();
$human->eat();
$human->sleep();

$robot = new RobotWorker();
$robot->work();
