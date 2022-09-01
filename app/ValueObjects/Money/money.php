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

    public function Add(Money $arg)
    {
        if (is_null($arg)) throw new InvalidArgumentException('$arg is Null.');
        if ($this->currency !== $arg->currency) throw new InvalidArgumentException('通貨単位が異なります。');

        return new Money($this->amount + $arg->amount, $this->currency);
    }
}

$myMoney = new Money(1000, 'JPY');
$allowance = new Money(3000, 'JPY');
$result = $myMoney->Add($allowance);

$myMoney = new Money(1000, 'JPY');
$allowance = new Money(3000, 'USD');
$result = $myMoney->Add($allowance);