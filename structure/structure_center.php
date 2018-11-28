<?php

require_once "libs/Animal.php";
require_once "libs/Mammal.php";
require_once "libs/Oviparous.php";

require_once "classes/Person.php";
require_once "classes/Dog.php";
require_once "classes/Gecko.php";

$person = new Person("john", "Doe", "black", "18", "male");
var_dump($peron);

$dog = new Dog("black", 3, "female");
var_dump($dog);
