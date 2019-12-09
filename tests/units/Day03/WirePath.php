<?php

namespace Klnjmm\tests\units\Day03;

class WirePath extends \atoum
{
    public function test_up_direction()
    {
        $direction = 'U3';
        $expected = ['0,0', '0,1', '0,2', '0,3'];

        $this->array($this->newTestedInstance($direction)->toGridPoints())->isEqualTo($expected);
    }

    public function test_down_direction()
    {
        $direction = 'D3';
        $expected = ['0,0', '0,-1', '0,-2', '0,-3'];

        $this->array($this->newTestedInstance($direction)->toGridPoints())->isEqualTo($expected);

    }

    public function test_right_direction()
    {
        $direction = 'R10';
        $expected = ['0,0', '1,0', '2,0', '3,0', '4,0', '5,0', '6,0', '7,0', '8,0', '9,0', '10,0'];

        $this->array($this->newTestedInstance($direction)->toGridPoints())->isEqualTo($expected);

    }

    public function test_left_direction()
    {
        $direction = 'L3';
        $expected = ['0,0', '-1,0', '-2,0', '-3,0'];

        $this->array($this->newTestedInstance($direction)->toGridPoints())->isEqualTo($expected);

    }

    public function test_multiple_direction()
    {
        $direction = 'U3,R2';
        $expected = ['0,0', '0,1', '0,2', '0,3', '1,3', '2,3'];

        $this->array($this->newTestedInstance($direction)->toGridPoints())->isEqualTo($expected);

    }
}
