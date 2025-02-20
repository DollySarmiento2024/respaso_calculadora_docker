<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertEquals(5, $calc->suma(3, 2));
        $this->assertGreaterThan(0, $calc->suma(3, 2));
        $this->assertNotNull($calc->suma(3, 2));
    }

    public function testResta()
    {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->resta(3, 2));
        $this->assertGreaterThan(0, $calc->resta(3, 2));
        $this->assertNotNull($calc->resta(3, 2));
    }
    public function testMultiplicacion()
    {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicacion(3, 2));
        $this->assertGreaterThan(0, $calc->multiplicacion(3, 2));
        $this->assertNotNull($calc->multiplicacion(3, 2));    
    }
    public function testDivision()
    {
        $calc = new Calculadora();
        $this->assertEquals(3, $calc->division(9, 3));
        $this->assertGreaterThan(0, $calc->division(3, 2));
        $this->assertNotNull($calc->division(3, 2));
    }
}
