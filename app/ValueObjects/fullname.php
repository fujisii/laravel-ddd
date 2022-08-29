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

}

$fullName = new FullName('hoge', 'fuga');
echo $fullName->getLastName();
