<?php
declare(strict_types=1);

// require_once 'firstname.php';
// require_once 'lastname.php';

class FullName
{
    private string $FirstName;
    private string $LastName;

    public function __construct(string $firstName, string $lastName)
    {
        if ($firstName === '') throw new InvalidArgumentException('$firstName:null');
        if ($lastName === '') throw new InvalidArgumentException('$lastName:null');
        if (!$this->ValidateName($firstName)) throw new InvalidArgumentException('$firstName:許可されていない文字が使われています。');
        if (!$this->ValidateName($lastName)) throw new InvalidArgumentException('$lastName:許可されていない文字が使われています。');

        $this->FirstName = $firstName;
        $this->LastName = $lastName;
    }

    private function ValidateName(string $value)
    {
        // アルファベットに限定する
        return preg_match('/^[a-zA-Z]+$/', $value);
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

$fullName1 = new FullName('hoge', 'fuga');
$fullName2 = new FullName('foo', 'bar');

var_export($fullName1->Equals($fullName2)); // false
var_export($fullName1->Equals($fullName1)); // true
