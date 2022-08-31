<?php
declare(strict_types=1);

class Money
{
    private float $amount;
    private string $currency;

    public function __construct(float $amount, string $currency)
    {
        if ($currency === '') throw new InvalidArgumentException('1文字以上である必要があります。');

        $this->amount = $amount;
        $this->currency = $currency;
    }
}
