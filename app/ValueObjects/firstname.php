<?php

class FirstName
{
    private string $value;

    public function __construct(string $value)
    {
        if (is_null($value) || empty($value))
            throw new InvalidArgumentException('1文字以上である必要があります。');
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
