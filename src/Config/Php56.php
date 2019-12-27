<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

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
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/php56/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
