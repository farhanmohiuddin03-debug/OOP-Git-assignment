<?php
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hello, my name is " . $this->name . "! Welcome!";
    }

    public function sayGoodbye() {
        return "Goodbye!";
    }

    public function getName() {
        return $this->name;
    }
}
?>