<?php

class FullName
{
    public function __construct(string $firstName, string $lastName)
    {
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
    }

    private string $FirstName;
    private string $LastName;

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function Equals(FullName $other)
    {
        if (null === $other) return false;
        if ($this === $other) return true;
        return $this->getFirstName() === $other->getFirstName()
            && $this->getLastName() === $other->getLastName();
    }
}

$fullName1 = new FullName('hoge', 'fuga');
$fullName2 = new FullName('foo', 'bar');

var_export($fullName1->Equals($fullName2)); // false
var_export($fullName1->Equals($fullName1)); // true
