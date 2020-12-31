<?php declare(strict_types=1);

namespace App;

abstract class Money
{
    protected int    $amount;
    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount, 'CHF');
    }

    abstract public function times(int $multiplier): Money;
}
