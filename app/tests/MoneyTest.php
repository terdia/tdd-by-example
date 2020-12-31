<?php declare(strict_types=1);

namespace Tests;

use App\Franc;
use App\Money;
use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{

    public function testMultiplication(): void
    {
        $five = Money::dollar(5);
        self::assertEquals(Money::dollar(10), $five->times(2));
        self::assertEquals(Money::dollar(15), $five->times(3));

        $five = Money::franc(5);
        self::assertEquals(Money::franc(10), $five->times(2));
        self::assertEquals(Money::franc(15), $five->times(3));
    }

    public function testEquality(): void
    {
        self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));

        self::assertTrue((Money::franc(5))->equals(Money::franc(5)));
        self::assertFalse((Money::franc(5))->equals(Money::franc(6)));

        self::assertFalse((Money::franc(6))->equals(Money::dollar(6)));
    }

    public function testCurrency(): void
    {
        self::assertEquals('USD', Money::dollar(1)->currency());
        self::assertEquals('CHF', Money::franc(1)->currency());
    }
}
