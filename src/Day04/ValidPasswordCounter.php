<?php

namespace Klnjmm\Day04;

class ValidPasswordCounter
{
    /**
     * @var PasswordValidatorInterface
     */
    private $passwordValidator;

    public function __construct(PasswordValidatorInterface $passwordValidator)
    {
        $this->passwordValidator = $passwordValidator;
    }

    public function find(int $start, int $end)
    {
        $counter = 0;

        for ($start; $start <= $end; $start++) {
            if ($this->passwordValidator->validate($start)) {
                $counter++;
            }
        }

        return $counter;
    }
}
