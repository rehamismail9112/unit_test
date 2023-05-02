<?php

use PHPUnit\Framework\TestCase;

require './src/factorial.php';

class factorialTest extends TestCase {

    public function testFactorialZero(){
        $c = new Calculator;
        $result = $c->factorial(0);
        $this->assertEquals(1, $result);
    }

    public function testFactorialOne(){
        $c = new Calculator;
        $result = $c->factorial(1);
        $this->assertEquals(1, $result);
    }

    public function testFactorialPositive(){
        $c = new Calculator;
        $result = $c->factorial(5);
        $this->assertEquals(120, $result);
    }

    public function testFactorialRandomInt(){
        $c = new Calculator;
        $rand = rand(4, 100); // generating a random int greater than 3
        $expected = $c->factorial($rand - 1) * $rand;
        $result = $c->factorial($rand);
        $this->assertEquals($expected, $result);
    }

    public function testFactorialNegative(){
        $c = new Calculator;
        $result = $c->factorial(-3);
        $this->assertNull($result);
    }

    public function testFactorialFloat(){
        $c = new Calculator;
        $result = $c->factorial(1.5);
        $this->assertNull($result);
    }

    public function testFactorialBoolean(){
        $c = new Calculator;
        $result = $c->factorial(false);
        $this->assertNull($result);
    }

    public function testFactorialString(){
        $c = new Calculator;
        $result = $c->factorial('abc');
        $this->assertNull($result);
    }

}
 ?>