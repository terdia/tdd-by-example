<?php declare(strict_types=1);

namespace App;


class Dollar
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->getAmount();
    }

}
