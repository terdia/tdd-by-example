<?php declare(strict_types=1);

namespace App;

class Dollar extends Money
{

    public function times(int $multiplier): Dollar
    {
        return new self($this->amount * $multiplier);
    }
}
