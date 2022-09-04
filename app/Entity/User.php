<?php
declare(strict_types=1);

require_once 'UserId.php';

class User
{
    private UserId $id;
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
}
