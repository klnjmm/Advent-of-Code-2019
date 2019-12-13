<?php

namespace Klnjmm\Day04;

class PasswordValidator implements PasswordValidatorInterface
{
    /**
     * @var array
     */
    private $criterias;

    public function __construct(array $criterias)
    {
        $this->criterias = $criterias;
    }

    public function validate(int $password)
    {
        foreach ($this->criterias as $criteria) {
            if (!$criteria->match($password)) {
                return false;
            };
        }

        return true;
    }
}
