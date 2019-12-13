<?php

namespace Klnjmm\tests\units\Day04;

class TwoAdjacentDigitOnlyCriteria extends \atoum
{
    public function test_it_return_false_if_no_adjacent_digit_are_equal()
    {
        $password = 123456;

        $this->boolean($this->newTestedInstance->match($password))->isFalse;
    }
    public function test_it_return_false_if_adjacent_digit_are_equal_by_group_greater_than_2()
    {
        $password = 111111;
        $this->boolean($this->newTestedInstance->match($password))->isFalse;
    }

    public function test_it_return_true_if_adjacent_digit_are_equal_by_group_of_two()
    {
        $password = 122345;
        $this->boolean($this->newTestedInstance->match($password))->isTrue;

        $password = 111122;
        $this->boolean($this->testedInstance->match($password))->isTrue;
    }
}
