<?php
declare(strict_types=1);

require_once './UserId.php';
require_once './UserName.php';

class User
{
    public readonly UserId $id;
    private UserName $name;

    public function __construct(UserId $id, UserName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function ChangeUserName(UserName $name): void
    {
        if (is_null($name)) throw new InvalidArgumentException('$name is null.');

        $this->name = $name;
    }

    public function Equals(User $other): bool
    {
        if (null === $other) return false;
        if ($this === $other) return true;
        return $this->id->getValue() === $other->id->getValue();
    }
}
