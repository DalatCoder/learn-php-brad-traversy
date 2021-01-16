<?php

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

