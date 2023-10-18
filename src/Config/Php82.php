<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

final class Php82 extends YamlConfig
{
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php82');

        $parent = (new Php73())
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/php82/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
