<?php


include("Dog.php");
include("Bird.php");

$animal = new Animal("jeffery the lion");
$animal->getName();


$doggy = new Dog("Timmy");
$doggy->getName();
$doggy->move();

$doggy->digHole();
$doggy->tryToFly();


$birdy = new Bird("Tweety");
$birdy->getName();
$birdy->move();
$birdy->tryToFly();