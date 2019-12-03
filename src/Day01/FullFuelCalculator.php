<?php

namespace Klnjmm\Day01;

class FullFuelCalculator implements FuelCalculatorInterface
{
    /** @var FuelCalculatorInterface */
    private $fuelCalculator;

    public function __construct(FuelCalculatorInterface $fuelCalculator)
    {
        $this->fuelCalculator = $fuelCalculator;
    }

    public function calculate(int $mass): int
    {
        $fuelNeeded = 0;
        do {
            $mass = max(0, $this->fuelCalculator->calculate($mass));
            $fuelNeeded += $mass;
        } while ($mass > 0);

        return $fuelNeeded;
    }
}
