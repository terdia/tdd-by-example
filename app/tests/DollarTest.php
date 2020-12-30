<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Dollar;

class DollarTest extends TestCase
{

    public function testMultiplication(): void
    {
        $five    = new Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10, $product->getAmount());
        $product = $five->times(3);
        self::assertEquals(15, $product->getAmount());
    }

    public function testEquality(): void
    {
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
