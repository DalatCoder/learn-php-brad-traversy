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

/*
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
*/

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$user1 = new User('John', 30);
echo $user1->__get('name');

echo '<br>';

$user1->__set('name', 'Brad');
echo $user1->__get('name');



