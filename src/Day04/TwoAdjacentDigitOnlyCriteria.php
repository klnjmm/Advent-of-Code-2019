<?php

namespace Klnjmm\Day04;

class TwoAdjacentDigitOnlyCriteria implements PasswordCriteriaInterface
{
    public function match(int $password)
    {
        preg_match_all('/(\d)\1+/', $password, $matches);
        foreach ($matches[0] as $match) {
            if (strlen($match) === 2) {
                return true;
            }
        }

        return false;
    }
}
