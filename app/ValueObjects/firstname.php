<?php

class FirstName
{
    private string $value;

    public function __construct(string $value)
    {
        if (is_null($value) || empty($value))
            new InvalidArgumentException('1文字以上であう必要があります。');
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$firstName = new FirstName('aaa');
echo $firstName->getValue();