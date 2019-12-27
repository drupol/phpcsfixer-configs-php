<?php

declare(strict_types=1);

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\Php;
use PhpSpec\ObjectBehavior;

class PhpSpec extends ObjectBehavior
{
    public function it_can_get_its_name()
    {
        $this
            ->getName()
            ->shouldReturn('drupol/phpcsfixer-configs-php/php');
    }

    public function it_can_get_its_rules()
    {
        $this
            ->getRules()
            ->shouldNotBe(
                [
                    '@PSR2' => true,
                ]
            );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Php::class);
    }
}
