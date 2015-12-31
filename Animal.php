<?php

require_once("Flys.php");

class Animal
{
    protected $flyingType;
    protected $name;
    protected $weight;
    protected $height;

    public function __construct($name="No Name") {
        $this->name = $name;
    }


    public function move () {
        echo "<br>". $this->name ." is moving";
    }

    public function getName () {
        echo "<br>This objects name is ". $this->name;
    } 

    public function tryToFly () {
    
        echo "<br>" . $this->name . $this->flyingType->fly();
    }

}
