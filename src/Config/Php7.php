<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php7.
 */
final class Php7 extends YamlConfig
{
    /**
     * Php7 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php7');

        $parent = (new Php56())
            ->withRulesFromYaml(\dirname(\dirname(__DIR__)) . '/config/php7/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
