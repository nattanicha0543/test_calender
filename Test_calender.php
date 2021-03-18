<?php include "Calender.php";

use PHPUnit\Framework\TestCase;

class Test_calender extends TestCase{
    private $calender;

    public function setup():void{
        $this->calender = new Calender();
    }

    public function testMultiply(){
        $this->assertEquals('Wendnesday',$this->calender->showDay(02,03));
    }

    public function testAdd(){
        $this->assertEquals('Friday',$this->calender->showDay(01,15));
    }

    public function testSubtract(){
        $this->assertEquals('Tuesday',$this->calender->showDay(04,20));
    }

}