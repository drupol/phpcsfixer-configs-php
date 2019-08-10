<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Psr12.
 */
final class Psr12 extends YamlConfig
{
    /**
     * Psr12 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/psr12');

        $parent = (new YamlConfig())
            ->withRulesFromYaml(
                __DIR__ . '/../../config/psr12/phpcsfixer.rules.yml'
            );

        $this
            ->setRules(
                $parent->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
