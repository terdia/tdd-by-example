<?php declare(strict_types=1);

namespace App;

class Money
{
    protected int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}
