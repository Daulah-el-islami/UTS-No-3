<?php

abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound() . "<br>";
echo $cat->makeSound() . "<br>";
?>
