<?php
declare(strict_types=1);

require_once 'name.php';

class FullName
{
    private Name $FirstName;
    private Name $LastName;

    public function __construct(Name $firstName, Name $lastName)
    {
        if ($firstName === '') throw new InvalidArgumentException('$firstName is Null');
        if ($lastName === '') throw new InvalidArgumentException('$lastName is Null');

        $this->FirstName = $firstName;
        $this->LastName = $lastName;
    }

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

$fullName1 = new FullName(new Name('hoge'), new Name('fuga'));
$fullName2 = new FullName(new Name('foo'), new Name('bar'));

var_export($fullName1->Equals($fullName2)); // false
var_export($fullName1->Equals($fullName1)); // true
