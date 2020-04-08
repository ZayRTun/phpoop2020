<?php

abstract class Shape {
   abstract protected function getArea();
}

class Circle extends Shape {
    protected $radius = 5;

    public function getArea() 
    {
        return M_PI * pow($this->radius, 2);
    }
}

echo (new Circle)->getArea();

interface Animal {
    public function communicate();
} 

class Dog implements Animal {

}

$dog = new Dog;