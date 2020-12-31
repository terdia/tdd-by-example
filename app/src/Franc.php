<?php declare(strict_types=1);

namespace App;

class Franc extends Money
{
    protected string $currency = 'CHF';

    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
