<?php

declare(strict_types=1);

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
            ->withRulesFromYaml(dirname(__DIR__, 2) . '/config/psr12/phpcsfixer.rules.yml');

        $this
            ->setRules(
                $parent->getRules()
            );
    }

    public function getFinder(): iterable
    {
        return parent::getFinder()
            ->in(getcwd())
            ->files()
            ->name(['*.php', '.php_cs', '.php_cs.dist'])
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
            ->exclude([
                '.github',
                '.idea',
                'resource',
                'build',
                'benchmarks',
                'libraries',
                'node_modules',
                'var',
                'vendor',
            ]);
    }
}
