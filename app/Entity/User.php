<?php
declare(strict_types=1);

class User
{
    private string $name;

    public function __construct(string $name)
    {
        if ($name === '') throw new InvalidArgumentException('1文字以上である必要があります。');
        if (mb_strlen($name) < 3) throw new InvalidArgumentException('ユーザー名は3文字以上です。');

        $this->name = $name;
    }
}
