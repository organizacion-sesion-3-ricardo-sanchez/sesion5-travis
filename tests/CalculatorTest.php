<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd(): void
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
    
    public function testSubstract(): void
    {
        $result = $this->calculator->substract(7, 2);
        $this->assertEquals(5, $result);
    }

    public function testSubstract2(): void
    {
        $result = $this->calculator->substract(9, 8);
        $this->assertEquals(1, $result);
    }

    public function testParImpar1(): void
    {
        $result = $this->calculator->parImpar(9);
        $this->assertFalse($result);
    }

    public function testParImpar2(): void
    {
        $result = $this->calculator->parImpar(8);
        $this->assertTrue($result);
    }

    public function testParImpar3(): void
    {
        $result = $this->calculator->parImpar(0);
        $this->assertTrue($result);
    }
 
}
