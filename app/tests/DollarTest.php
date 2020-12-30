<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Dollar;

class DollarTest extends TestCase
{

    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        self::assertEquals(new Dollar(10), $five->times(2));
        self::assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality(): void
    {
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
