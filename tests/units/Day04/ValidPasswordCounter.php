<?php

namespace Klnjmm\tests\units\Day04;

use Klnjmm\Day04\PasswordValidatorInterface;

class ValidPasswordCounter extends \atoum
{
    public function test_return_10_if_all_password_is_correct()
    {
        $start = 1;
        $end = 10;

        $passwordValidator = $this->newMockInstance(PasswordValidatorInterface::class);

        $this->calling($passwordValidator)->validate = true;

        $this->integer($this->newTestedInstance($passwordValidator)->find($start, $end))->isIdenticalTo(10)
            ->mock($passwordValidator)
                ->call('validate')->exactly(10)
        ;
    }

    public function test_return_9_if_one_password_is_incorrect()
    {
        $start = 1;
        $end = 10;

        $passwordValidator = $this->newMockInstance(PasswordValidatorInterface::class);

        $this->calling($passwordValidator)->validate = true;
        $this->calling($passwordValidator)->validate[1] = false;

        $this->integer($this->newTestedInstance($passwordValidator)->find($start, $end))->isIdenticalTo(9)
            ->mock($passwordValidator)
                ->call('validate')->exactly(10)
        ;
    }

    public function test_resolution_part_one()
    {
        $sixDigitCriteria = new \Klnjmm\Day04\SixDigitCriteria();
        $inRangeCriteria = new \Klnjmm\Day04\InRangeCriteria(246540, 787419);
        $increaseDigitCriteria = new \Klnjmm\Day04\IncreaseDigitCriteria();
        $twoAdjacentDigitCriteria = new \Klnjmm\Day04\TwoAdjacentDigitCriteria();

        $passwordValidator = new \Klnjmm\Day04\PasswordValidator([$sixDigitCriteria, $inRangeCriteria, $increaseDigitCriteria, $twoAdjacentDigitCriteria]);

        $this->integer($this->newTestedInstance($passwordValidator)->find(246540, 787419))->isIdenticalTo(1063);
    }

    public function test_resolution_part_two()
    {
        $sixDigitCriteria = new \Klnjmm\Day04\SixDigitCriteria();
        $inRangeCriteria = new \Klnjmm\Day04\InRangeCriteria(246540, 787419);
        $increaseDigitCriteria = new \Klnjmm\Day04\IncreaseDigitCriteria();
        $twoAdjacentDigitOnlyCriteria = new \Klnjmm\Day04\TwoAdjacentDigitOnlyCriteria();

        $passwordValidator = new \Klnjmm\Day04\PasswordValidator([$sixDigitCriteria, $inRangeCriteria, $increaseDigitCriteria, $twoAdjacentDigitOnlyCriteria]);

        $this->integer($this->newTestedInstance($passwordValidator)->find(246540, 787419))->isIdenticalTo(686);
    }
}
