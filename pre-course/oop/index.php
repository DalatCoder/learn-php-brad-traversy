<?php

class Person
{
    private $name;
    private $email;

    public static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created<br>';
    }

    public function __destruct()
    {
        echo __CLASS__ . ' destroyed<br>';
    }

    public function getName()
    {
        return $this->name . '<br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email . '<br>';
    }

    public function setEmail($email)
    {
        $this->name = $email;
    }

    public static function getAgeLimit() {
        return self::$ageLimit;
    }
}

//$person1 = new Person('John Doe', 'johndoe@email.com');

//echo $person1->getName();
//echo $person1->getEmail();

echo Person::getAgeLimit();

class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);
        $this->balance = $balance;

        echo 'A new ' . __CLASS__ . ' has been created<br>';
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}

//$customer1 = new Customer('John Doe', 'johndoe@email.com', 100);
//echo $customer1->getEmail();
