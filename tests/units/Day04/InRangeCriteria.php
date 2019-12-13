<?php

namespace Klnjmm\tests\units\Day04;

class InRangeCriteria extends \atoum
{
    public function test_it_return_false_if_password_is_lower_than_range()
    {
        $password = 10;
        $rangeStart = 15;
        $rangeEnd = 30;

        $this->boolean($this->newTestedInstance($rangeStart, $rangeEnd)->match($password))->isFalse;
    }

    public function test_it_return_false_if_password_is_higher_than_range()
    {
        $password = 32;
        $rangeStart = 15;
        $rangeEnd = 30;

        $this->boolean($this->newTestedInstance($rangeStart, $rangeEnd)->match($password))->isFalse;
    }

    public function test_it_return_true_if_password_is_in_range()
    {
        $password = 21;
        $rangeStart = 15;
        $rangeEnd = 30;

        $this->boolean($this->newTestedInstance($rangeStart, $rangeEnd)->match($password))->isTrue;
    }
}
