<?php include "Calculator.php";

use PHPUnit\Framework\TestCase;

class Test_calculator extends TestCase
{
    private $calculate;

    public function set():void{
        $this->calculate = new Calculator();
    }

    public function testMultiply(){
        $this->assertEquals(4,$this->calculate->mutiply(4,1));
    }

    public function testAdd(){
        $this->assertEquals(5,$this->calculate->add(4,1));
    }

    public function testSubtract(){
        $this->assertEquals(3,$this->calculate->mutiply(4,1));
    }

}