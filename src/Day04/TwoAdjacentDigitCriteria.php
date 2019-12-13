<?php

namespace Klnjmm\Day04;

class TwoAdjacentDigitCriteria implements PasswordCriteriaInterface
{
    public function match(int $password)
    {
        return (bool) preg_match('/(\d)\1+/', $password);
    }
}
