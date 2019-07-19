<?php

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php73;
use PhpSpec\ObjectBehavior;

class Php73Spec extends ObjectBehavior
{
    public function it_can_get_its_name()
    {
        $this
            ->getName()
            ->shouldReturn('drupol/phpcsfixer-configs-php/php73');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Php73::class);
    }
}
