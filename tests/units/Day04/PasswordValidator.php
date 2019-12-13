<?php

namespace Klnjmm\tests\units\Day04;

use Klnjmm\Day04\PasswordCriteriaInterface;

class PasswordValidator extends \atoum
{
    public function test_that_all_criteria_is_called_when_password_is_correct()
    {
        $criteria1 = $this->newMockInstance(PasswordCriteriaInterface::class);
        $criteria2 = $this->newMockInstance(PasswordCriteriaInterface::class);
        $criteria3 = $this->newMockInstance(PasswordCriteriaInterface::class);

        $this->calling($criteria1)->match = true;
        $this->calling($criteria2)->match = true;
        $this->calling($criteria3)->match = true;

        $criterias = [$criteria1, $criteria2, $criteria3];

        $this->boolean($this->newTestedInstance($criterias)->validate(1))->isTrue
            ->mock($criteria1)->call('match')->withIdenticalArguments(1)->once()
            ->mock($criteria2)->call('match')->withIdenticalArguments(1)->once()
            ->mock($criteria3)->call('match')->withIdenticalArguments(1)->once()
        ;
    }

    public function test_that_it_return_immediatly_false_when_password_not_match_a_criteria()
    {
        $criteria1 = $this->newMockInstance(PasswordCriteriaInterface::class);
        $criteria2 = $this->newMockInstance(PasswordCriteriaInterface::class);
        $criteria3 = $this->newMockInstance(PasswordCriteriaInterface::class);

        $this->calling($criteria1)->match = true;
        $this->calling($criteria2)->match = false;
        $this->calling($criteria3)->match = true;

        $criterias = [$criteria1, $criteria2, $criteria3];

        $this->boolean($this->newTestedInstance($criterias)->validate(1))->isFalse
            ->mock($criteria1)->call('match')->withIdenticalArguments(1)->once()
            ->mock($criteria2)->call('match')->withIdenticalArguments(1)->once()
            ->mock($criteria3)->call('match')->exactly(0)
        ;

    }
}
