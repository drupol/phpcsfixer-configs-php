<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

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
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/php/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
