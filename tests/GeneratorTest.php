<?php

namespace RandomString\Tests;

use PHPUnit\Framework\TestCase;
use Randomstring\RandomStringGenerator\RandomString;

class GeneratorTest extends TestCase
{
    public function testGenerateReturnsStringOfSpecifiedLength()
    {
        $length = 16;
        $randomString = RandomString::generate($length);
        
        $this->assertIsString($randomString, "Generated value should be a string.");
        $this->assertEquals($length, strlen($randomString), "Generated string should match the specified length.");
    }

    public function testGenerateHandlesZeroLength()
    {
        $this->expectException(\InvalidArgumentException::class);
        RandomString::generate(0);
    }

    public function testGenerateHandlesNegativeLength()
    {
        $this->expectException(\InvalidArgumentException::class);
        RandomString::generate(-5);
    }

    public function testGenerateHandlesNonIntegerInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        RandomString::generate("abc");
    }

    public function testGenerateProducesUniqueStrings()
    {
        $string1 = RandomString::generate(16);
        $string2 = RandomString::generate(16);

        $this->assertNotEquals($string1, $string2, "Generated strings should be unique.");
    }
}
