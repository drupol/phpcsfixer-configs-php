<?php

declare(strict_types=1);

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php56;
use PhpSpec\ObjectBehavior;

class Php56Spec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Php56::class);
    }
}
