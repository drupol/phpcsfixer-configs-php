<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

final class Php82 extends YamlConfig
{
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php73');

        $parent = (new Php82())->withRulesFromYaml((new Php73)->getRules());

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
