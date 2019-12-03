<?php

namespace Klnjmm\Day02;

class IntcodeProgram
{
    public function calculate(array $codes)
    {
        $start = 0;

        $opcode = $codes[$start];
        while ($opcode !== 99) {
            $firstPosition = $codes[$start+1];
            $secondPosition = $codes[$start+2];
            $resultPosition = $codes[$start+3];

            if ($opcode === 1) {
                $codes[$resultPosition] = $codes[$firstPosition] + $codes[$secondPosition];
            }

            if ($opcode === 2) {
                $codes[$resultPosition] = $codes[$firstPosition] * $codes[$secondPosition];
            }

            $start += 4;
            $opcode = $codes[$start];
        }

        return $codes;
    }
}
