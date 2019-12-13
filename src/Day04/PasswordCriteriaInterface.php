<?php

namespace Klnjmm\Day04;

interface PasswordCriteriaInterface
{
    public function match(int $password);
}
