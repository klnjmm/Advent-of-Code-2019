<?php

namespace Klnjmm\Day04;

class InRangeCriteria implements PasswordCriteriaInterface
{
    /**
     * @var int
     */
    private $start;
    /**
     * @var int
     */
    private $end;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function match(int $password)
    {
        return $password >= $this->start && $password <= $this->end;
    }
}
