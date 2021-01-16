<?php

class User
{
    protected $name = 'Brad';
    protected $age;
}

class Customer extends User
{
    public function pay($amount)
    {
        return $this->name . ' paid $' . $amount . '<br>';
    }
}

$customer1 = new Customer();
echo $customer1->pay(100);

