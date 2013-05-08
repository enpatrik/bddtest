<?php

namespace spec;

use Exception\TransactionSaveException;
use Exception\TransactionTypeException;
use PHPSpec2\ObjectBehavior;

class Transaction extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Transaction');
    }

    function it_can_have_a_type_set()
    {
        $this->setType('Quantity');
        $this->getType()->shouldReturn('Quantity');
    }

    function it_can_not_have_a_invalid_type()
    {
        $this->shouldThrow(new TransactionTypeException())->duringSetType('Crap');
        $this->getType()->shouldReturn(null);
    }

    function it_can_contain_a_value()
    {
        $this->setValue(2000);
        $this->getValue()->shouldReturn(2000);
    }

    function it_can_contain_a_user()
    {
        $user = new \User('Kim Jong Un');
        $this->setUser($user);
        $this->getUser()->shouldBeEqualTo($user);
    }

    function it_can_be_saved()
    {
        $this->setType('Quantity');
        $this->setValue(500);
        $this->setUser(new \User('Patrik Nilsson'));
        $this->save()->shouldReturn(true);
    }

    function it_can_not_be_saved()
    {
        $this->shouldThrow(new TransactionSaveException())->duringSave();
    }
}
