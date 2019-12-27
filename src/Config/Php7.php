<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

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
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/php7/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
