<?php

namespace Klnjmm\tests\units\Day04;

class IncreaseDigitCriteria extends \atoum
{
    public function test_it_return_false_if_adjacent_digit_decrease()
    {
        $password = 223450;
        $this->boolean($this->newTestedInstance->match($password))->isFalse;
    }

    public function test_it_return_true_if_adjacent_digit_increase_or_equal()
    {
        $password = 111123;
        $this->boolean($this->newTestedInstance->match($password))->isTrue;

        $password = 135679;
        $this->boolean($this->testedInstance->match($password))->isTrue;

        $password = 111111;
        $this->boolean($this->testedInstance->match($password))->isTrue;
    }

}
