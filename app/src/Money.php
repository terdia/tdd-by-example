<?php declare(strict_types=1);

namespace App;

class Money
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
            && $this->currency === $money->currency();
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new self($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new self($amount, 'CHF');
    }

    public function times(int $multiplier): Money
    {
        return new static($this->amount * $multiplier, $this->currency);
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }

}
