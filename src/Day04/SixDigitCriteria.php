<?php

namespace Klnjmm\Day04;

class SixDigitCriteria implements PasswordCriteriaInterface
{
    public function match(int $password)
    {
        return strlen($password) === 6;
    }
}
