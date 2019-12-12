<?php
include('Animal.php');
include('Cat.php');
include('Dog.php');
include('Cow.php');

class AnimalVoice {
    public function whatSayAnimal(Animal $animal) {
        echo $animal->voice();
    }
}

$animals[] = new Cat();
$animals[] = new Dog();
$animals[] = new Cow();

foreach($animals as $animal) {
    if($animal instanceof Animal){
        echo get_class($animal) . ' says ' .  $animal->voice() . '<br>';
    }
}

