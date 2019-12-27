<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

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
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/php73/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
