<?php declare(strict_types=1);

namespace App;

class Dollar extends Money
{
    protected string $currency = 'USD';

    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
