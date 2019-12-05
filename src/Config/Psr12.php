<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

use function dirname;

/**
 * Class Psr12.
 */
final class Psr12 extends YamlConfig
{
    /**
     * Psr12 constructor.
     */
    public function __construct()
    {
        parent::__construct('drupol/phpcsfixer-configs-php/psr12');

        $parent = $this
            ->withRulesFromYaml(dirname(dirname(__DIR__)) . '/config/psr12/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $parent->getRules()
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getFinder()
    {
        return parent::getFinder()
            ->in(getcwd())
            ->files()
            ->name('*.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
            ->exclude(['build', 'libraries', 'node_modules', 'vendor']);
    }
}
