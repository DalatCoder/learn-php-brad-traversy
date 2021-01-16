<?php

class UserStatic
{
    public static $minPassLength = 6;
    public $name;
    public $age;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        }
        return false;
    }
}

$password = 'HelloWorld';
if (UserStatic::validatePass($password)) {
    echo 'Password valid';
} else {
    echo 'Password NOT valid';
}