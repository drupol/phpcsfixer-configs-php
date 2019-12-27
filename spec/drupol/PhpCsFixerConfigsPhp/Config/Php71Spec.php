<?php

declare(strict_types=1);

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php71;
use PhpSpec\ObjectBehavior;

class Php71Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Php71::class);
    }
}
