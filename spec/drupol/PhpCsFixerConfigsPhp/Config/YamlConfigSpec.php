<?php

namespace spec\drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Config\YamlConfig;
use PhpSpec\ObjectBehavior;

class YamlConfigSpec extends ObjectBehavior
{
    public function it_can_import_yaml_files()
    {
        $files = [
            __DIR__ . '/../../../../tests/a.yaml',
            __DIR__ . '/../../../../tests/b.yaml',
            'unexistent file',
        ];

        $this
            ->withRulesFromYaml(...$files)
            ->getRules()
            ->shouldReturn(
                [
                    '@PSR2' => true,
                    'a' => true,
                    'b' => true,
                ]
            );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(YamlConfig::class);
    }
}
