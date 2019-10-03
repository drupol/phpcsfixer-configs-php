<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php56.
 */
final class Php56 extends YamlConfig
{
    /**
     * Php56 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php56');

        $parent = (new Php())
            ->withRulesFromYaml(\dirname(\dirname(__DIR__)) . '/config/php56/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
