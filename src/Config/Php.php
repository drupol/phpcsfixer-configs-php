<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php.
 */
final class Php extends YamlConfig
{
    /**
     * Php constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php');

        $parent = (new Psr12())
            ->withRulesFromYaml(\dirname(\dirname(__DIR__)) . '/config/php/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
