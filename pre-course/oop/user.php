<?php

/*
class User
{
    public $name;

    public function sayHello()
    {
        return $this->name . ' says Hello';
    }
}

$user1 = new User();
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
*/

class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo 'Destructor ran...';
    }

    public function sayHello()
    {
        return $this->name . ' says hello';
    }
}

$user1 = new User('Brad', 19);
var_dump($user1);
