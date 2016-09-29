<?php
declare(strict_types = 1);

namespace Jk\CodeKatas;

class StringSumTest extends \PHPUnit_Framework_TestCase
{
    public function testClassExists()
    {
        self::assertTrue(class_exists(StringSum::class));
    }

    public function testSumWithEmptyStrings()
    {
        $stringSum = new StringSum();
        self::assertSame(0, $stringSum->sum('', ''));
    }

    public function testSumWorksCorrectlyWithSmallNumbers()
    {
        $stringSum = new StringSum();
        self::assertSame(2, $stringSum->sum('1', '1'));
    }
}

