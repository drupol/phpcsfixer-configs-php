<?php

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php72;
use PhpSpec\ObjectBehavior;

class Php72Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Php72::class);
    }
}
