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

        $parent = (new Php72())
            ->withRulesFromYaml(\dirname(\dirname(__DIR__)) . '/config/php73/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
