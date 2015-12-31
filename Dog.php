<?php
require_once("Animal.php");

class Dog extends Animal {

    public function __construct($name) {
        parent::__construct($name);
        $this->flyingType = new CanFly();
    }

    public function digHole () {
        echo "<br>". $this->name . " digs a hole";
    }
}