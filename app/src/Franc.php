<?php declare(strict_types=1);

namespace App;

class Franc extends Money
{

    public function times(int $multiplier): Franc
    {
        return new self($this->amount * $multiplier);
    }
}
