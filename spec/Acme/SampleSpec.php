<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SampleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Sample');
    }

    function it_said_formats_hello_name()
    {
        $this->say('TDDBC')->shouldBeEqualTo('Hello TDDBC');
    }

    function it_said_formats_hello_name1()
    {
        $this->say1('TDDBC')->shouldBeEqualTo('Hello1 TDDBC');
    }
}
