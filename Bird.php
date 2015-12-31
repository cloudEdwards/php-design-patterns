<?php
require_once("Animal.php");

class Bird extends Animal {

    public function __construct($name) {
        parent::__construct($name);
        $this->flyingType = new CanFly(true);
    }

}