<?php
declare(strict_types=1);

class ModelNumber
{
    private string $productCode;
    private string $branch;
    private string $lot;

    public function __construct(string $productCode, string $branch, string $lot)
    {
        if ($productCode === '') throw new InvalidArgumentException('1文字以上である必要があります。');
        if ($branch === '') throw new InvalidArgumentException('1文字以上である必要があります。');
        if ($lot === '') throw new InvalidArgumentException('1文字以上である必要があります。');

        $this->productCode = $productCode;
        $this->branch = $branch;
        $this->lot = $lot;
    }

    public function ToString()
    {
        return $this->productCode . '-' . $this->branch . '-' . $this->lot;
    }
}
