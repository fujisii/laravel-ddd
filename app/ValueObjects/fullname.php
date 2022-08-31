<?php
declare(strict_types=1);

require_once 'firstname.php';
require_once 'lastname.php';

class FullName
{
    private FirstName $FirstName;
    private LastName $LastName;

    public function __construct(FirstName $firstName, LastName $lastName)
    {
        $this->FirstName = $firstName;
        $this->LastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->FirstName->getValue();
    }

    public function getLastName()
    {
        return $this->LastName->getValue();
    }

    public function Equals(FullName $other)
    {
        if (null === $other) return false;
        if ($this === $other) return true;
        return $this->getFirstName() === $other->getFirstName()
            && $this->getLastName() === $other->getLastName();
    }
}

$fullName1 = new FullName(new FirstName('hoge'), new LastName('fuga'));
$fullName2 = new FullName(new FirstName('foo'), new LastName('bar'));

var_export($fullName1->Equals($fullName2)); // false
var_export($fullName1->Equals($fullName1)); // true
