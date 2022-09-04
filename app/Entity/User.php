<?php
declare(strict_types=1);

use phpDocumentor\Reflection\Types\Boolean;

require_once 'UserId.php';

class User
{
    public readonly UserId $id;
    private string $name;

    public function __construct(UserId $id, string $name)
    {
        if (is_null($id)) throw new InvalidArgumentException('$id is null.');
        if (is_null($name)) throw new InvalidArgumentException('$name is null');

        $this->id = $id;
        $this->ChangeUserName($name);
    }

    public function ChangeUserName(string $name): void
    {
        if (is_null($name)) throw new InvalidArgumentException('$name is null.');
        if (mb_strlen($name) < 3) throw new InvalidArgumentException('ユーザー名は3文字以上です。');

        $this->name = $name;
    }

    public function Equals(User $other): bool
    {
        if (null === $other) return false;
        if ($this === $other) return true;
        return $this->id->getValue() === $other->id->getValue();
    }
}

$user1 = new User(new UserId('foo'), 'bar');
$user2 = new User(new UserId('foo2'), 'bar2');
echo $user1->Equals($user2);