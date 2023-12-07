<?php
    class Animal{
        public function sound(){
            echo '<br>Animal make a sound';
        }
    }

    class Dog extends Animal{
        public function sound(){
            echo '<br>The Dog barks';
        }
    }

    class Cat extends Animal{
        public function sound(){
            echo '<br>The Cat meows';
        }
    }
    $animal = new Animal();
    $animal->sound();
    // $animal = new Dog();
    // $animal->sound();

    $dog = new Dog();
    $dog->sound();
    $cat = new Cat();
    $cat->sound();

?>