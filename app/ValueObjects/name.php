<?php

class Name
{
    private string $value;

    public function __construct(string $value)
    {
        if ($value === '') throw new InvalidArgumentException('$value is Null');
        if (!preg_match('/^[a-zA-Z]+$/', $value)) throw new InvalidArgumentException('許可されていない文字が使われています。');

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
