<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Franc;

class FrancTest extends TestCase
{

    public function testMultiplication(): void
    {
        $five = new Franc(5);
        self::assertEquals(new Franc(10), $five->times(2));
        self::assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality(): void
    {
        self::assertTrue((new Franc(5))->equals(new Franc(5)));
        self::assertFalse((new Franc(5))->equals(new Franc(6)));
    }
}
