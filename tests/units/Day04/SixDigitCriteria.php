<?php

namespace Klnjmm\tests\units\Day04;

class SixDigitCriteria extends \atoum
{
    public function test_it_return_true_if_password_has_6_digit()
    {
        $password = 123456;

        $this->boolean($this->newTestedInstance->match($password))->isTrue;
    }

    public function test_it_return_false_if_password_has_not_6_digit()
    {
        $password = 12345;

        $this->boolean($this->newTestedInstance->match($password))->isFalse;
    }

}
