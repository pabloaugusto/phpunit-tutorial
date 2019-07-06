<?php

use PHPUnit\Framework\TestCase;
use App\Calc as Calc;

class CalcTest extends TestCase
{
    private $calc;
 
    public function setUp():void
    {
        $this->calc = new Calc();
    }

    //Test 1
    public function testSoma()
    {
        $this->assertEquals(7, $this->calc->soma(5, 2));
    }

    //Test 1
    public function testSsubtracao()
    {
        $this->assertEquals(3, $this->calc->subtracao(5, 2));
    }
}
