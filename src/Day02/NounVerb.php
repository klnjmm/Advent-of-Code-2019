<?php

namespace Klnjmm\Day02;

class NounVerb
{
    /** @var IntcodeProgram */
    private $intcodeProgram;

    public function __construct(IntcodeProgram $intcodeProgram)
    {
        $this->intcodeProgram = $intcodeProgram;
    }

    public function calculate(array $codes, $expected)
    {
        for ($noun = 0; $noun <= 99; $noun++) {
            for ($verb = 0; $verb <= 99; $verb++) {
                $codes[1] = $noun;
                $codes[2] = $verb;

                $result = $this->intcodeProgram->calculate($codes);
                if ($result[0] === $expected) {
                    return 100 * $noun + $verb;
                }
            }
        }
    }
}
