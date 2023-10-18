<?php

declare(strict_types=1);

namespace drupol\PhpCsFixerConfigsPhp\Contract;

use PhpCsFixer\ConfigInterface;

/**
 * Interface PhpCsFixerConfigInterface.
 */
interface PhpCsFixerConfigInterface extends ConfigInterface
{
    /**
     * @param mixed ...$configs
     */
    public function withRulesFromConfig(...$configs): PhpCsFixerConfigInterface;

    /**
     * @param mixed ...$filenames
     */
    public function withRulesFromYaml(...$filenames): PhpCsFixerConfigInterface;

    /**
     * @param mixed ...$filenames
     */
    public function withRulesFromYamlOnly(...$filenames): PhpCsFixerConfigInterface;
}
