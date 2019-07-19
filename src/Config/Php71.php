<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php71.
 */
final class Php71 extends YamlConfig
{
    /**
     * Php71 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php71');

        $parent = (new YamlConfig())
            ->withRulesFromConfig(
                new Php(),
                new Php56(),
                new Php7()
            )
            ->withRulesFromYaml(
                __DIR__ . '/../../config/php71/phpcsfixer.rules.yml'
            );

        $this
            ->setRules(
                $parent->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
