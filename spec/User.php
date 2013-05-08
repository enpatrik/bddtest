<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

class User extends ObjectBehavior
{
    function let()
    {
        $fullName = 'Patrik Nilsson';
        $this->beConstructedWith($fullName);
    }

    function it_should_contain_a_full_name()
    {
        $this->getFullName()->shouldReturn('Patrik Nilsson');
    }
}
