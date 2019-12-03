<?php

namespace Klnjmm\Day01;

class MultipleModuleFuelCalculator
{
    /** @var FuelCalculatorInterface */
    private $fuelCalculator;

    public function __construct(FuelCalculatorInterface $fuelCalculator)
    {
        $this->fuelCalculator = $fuelCalculator;
    }


    public function calculate(array $masses = []): int
    {
        return array_reduce(
            $masses,
            function ($total, $mass) {
                return $total += $this->fuelCalculator->calculate($mass);
            },
            0
        );
    }
}
