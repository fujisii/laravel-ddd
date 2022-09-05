<?php

class UserName
{
    private string $value;

    public function __construct(string $value)
    {
        if ($value === '') throw new InvalidArgumentException('1文字以上である必要があります。');
        if (mb_strlen($value) < 3) throw new InvalidArgumentException('ユーザー名は3文字以上です。');

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
