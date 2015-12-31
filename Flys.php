<?php

interface Flys 
{
    public function fly ($canFly = false);
}

class CanFly implements Flys 
{
    public function __construct($canFly = false) {
        $this->canFly = $canFly;
    }

    public function fly($canFly = false) {

        if ( $this->canFly ) {
            return " can fly!";
        } else {
            return " can't fly!";
        }
    }
}
