<?php

namespace Klnjmm\tests\units\Day01;

class FullFuelCalculator extends \atoum
{
    public function test_full_fuel_calculator()
    {
        $fuelCalculator = new \Klnjmm\Day01\FuelCalculator();

        $this->integer($this->newTestedInstance($fuelCalculator)->calculate(12))->isIdenticalTo(2);
        $this->integer($this->testedInstance->calculate(14))->isIdenticalTo(2);
        $this->integer($this->testedInstance->calculate(1969))->isIdenticalTo(966);
        $this->integer($this->testedInstance->calculate(100756))->isIdenticalTo(50346);
    }
}
