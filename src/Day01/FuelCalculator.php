<?php

namespace Klnjmm\Day01;

class FuelCalculator implements FuelCalculatorInterface
{
    public function calculate(int $mass): int
    {
        return (int) (floor($mass/3) -2);
    }
}
