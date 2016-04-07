<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class stringcalcSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('stringcalc');
    }

    function it_returns_zero_with_no_arguement()
    {
        $this->processString()->shouldReturn(0);
    }

    function it_returns_zero_with_an_empty_string()
    {
        $this->processString("")->shouldReturn(0);
    }

    function it_returns_zero_with_string_of_zero()
    {
        $this->processString("0")->shouldReturn(0);
    }

    function it_returns_a_num_given_a_string()
    {
        $this->processString("657")->shouldReturn(657);
    }

    function it_returns_a_sum_from_spaced_nums()
    {
        $this->processString("6 5 4")->shouldReturn(15);
    }
}
