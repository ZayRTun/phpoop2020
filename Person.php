<?php

class Person
{
    private $name;
    private $age;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        if ($age < 18) {
            throw new Exception("You're not old enough");
        }

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }
}

$per1 = new Person('John Doe');

$per1->setAge(38);

$per1->age = 23;

var_dump($per1->getAge());
