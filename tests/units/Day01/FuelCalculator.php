<?php

namespace Klnjmm\tests\units\Day01;

class FuelCalculator extends \atoum
{
    public function test_fuel_calculator()
    {
        $this->integer($this->newTestedInstance->calculate(12))->isIdenticalTo(2);
        $this->integer($this->testedInstance->calculate(14))->isIdenticalTo(2);
        $this->integer($this->testedInstance->calculate(1969))->isIdenticalTo(654);
        $this->integer($this->testedInstance->calculate(100756))->isIdenticalTo(33583);
    }
}
