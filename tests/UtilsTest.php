<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    function testReverse(): void
    {
        // $this->assertEquals('olleh', reverseString('hello'));
        $this->assertEquals('', reverseString(''));
    }
}