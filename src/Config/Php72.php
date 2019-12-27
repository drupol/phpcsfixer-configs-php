<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Config;

/**
 * Class Php72.
 */
final class Php72 extends YamlConfig
{
    /**
     * Php72 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/php72');

        $parent = (new Php71());

        $this
            ->setRules(
                $this->withRulesFromConfig($parent)->getRules()
            );

        $this
            ->setFinder($parent->getFinder());
    }
}
