<?php
declare(strict_types=1);

namespace Jk\CodeKatas;

class StringSum
{
    /**
     * @param string $number1
     * @param string $number2
     * @return int
     */
    public function sum(string $number1, string $number2): int
    {
        $intNumber1 = (int) $number1;
        $intNumber2 = (int) $number2;

        return $intNumber1 + $intNumber2;
    }
}
