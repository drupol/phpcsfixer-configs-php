<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php73.
 */
final class Php73 extends YamlConfig
{
    /**
     * Php73 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php73');

        $parent = (new YamlConfig())
            ->withRulesFromConfig(
                new Php(),
                new Php56(),
                new Php7(),
                new Php71()
            )
            ->withRulesFromYaml(
                __DIR__ . '/../../config/php73/phpcsfixer.rules.yml'
            );

        $this
            ->setRules(
                $parent->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
