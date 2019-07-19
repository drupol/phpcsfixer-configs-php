<?php

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php7;
use PhpSpec\ObjectBehavior;

class Php7Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Php7::class);
    }
}
