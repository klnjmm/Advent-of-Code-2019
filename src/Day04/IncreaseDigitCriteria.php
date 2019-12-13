<?php

namespace Klnjmm\Day04;

class IncreaseDigitCriteria implements PasswordCriteriaInterface
{
    public function match(int $password)
    {
        return (bool) preg_match('/^1*2*3*4*5*6*7*8*9*$/', $password);
    }
}
