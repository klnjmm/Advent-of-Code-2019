<?php

namespace Klnjmm\tests\units\Day02;

class IntcodeProgram extends \atoum
{
    public function test_program_stop_with_opcode_99()
    {
        $this->array($this->newTestedInstance->calculate([99]))->isEqualTo([99]);
    }

    public function test_opcode_1()
    {
        $this->array($this->newTestedInstance->calculate([1,0,0,0,99]))->isEqualTo([2,0,0,0,99]);
    }

    public function test_opcode_2()
    {
        $this->array($this->newTestedInstance->calculate([2,3,0,3,99]))->isEqualTo([2,3,0,6,99]);
        $this->array($this->testedInstance->calculate([2,4,4,5,99,0]))->isEqualTo([2,4,4,5,99,9801]);
    }

    public function test_complex_intcode()
    {
        $this->array($this->newTestedInstance->calculate([1,1,1,4,99,5,6,0,99]))->isEqualTo([30,1,1,4,2,5,6,0,99]);
        $this->array($this->testedInstance->calculate([1,9,10,3,2,3,11,0,99,30,40,50]))->isEqualTo([3500,9,10,70,2,3,11,0,99,30,40,50]);

        $input = [1,12,2,3,1,1,2,3,1,3,4,3,1,5,0,3,2,1,9,19,1,10,19,23,2,9,23,27,1,6,27,31,2,31,9,35,1,5,35,39,1,10,39,43,1,10,43,47,2,13,47,51,1,10,51,55,2,55,10,59,1,9,59,63,2,6,63,67,1,5,67,71,1,71,5,75,1,5,75,79,2,79,13,83,1,83,5,87,2,6,87,91,1,5,91,95,1,95,9,99,1,99,6,103,1,103,13,107,1,107,5,111,2,111,13,115,1,115,6,119,1,6,119,123,2,123,13,127,1,10,127,131,1,131,2,135,1,135,5,0,99,2,14,0,0];
        $result = $this->testedInstance->calculate($input);
        $this->integer($result[0])->isEqualTo(3760627);
    }
}
