<?php

namespace drupol\PhpCsFixerConfigsPhp\Contract;

use PhpCsFixer\ConfigInterface;

/**
 * Interface PhpCsFixerConfigInterface.
 */
interface PhpCsFixerConfigInterface extends ConfigInterface
{
    /**
     * @param mixed ...$configs
     *
     * @return \drupol\PhpCsFixerConfigsPhp\Contract\PhpCsFixerConfigInterface
     */
    public function withRulesFromConfig(...$configs);

    /**
     * @param mixed ...$filenames
     *
     * @return \drupol\PhpCsFixerConfigsPhp\Contract\PhpCsFixerConfigInterface
     */
    public function withRulesFromYaml(...$filenames);

    /**
     * @param mixed ...$filenames
     *
     * @return \drupol\PhpCsFixerConfigsPhp\Contract\PhpCsFixerConfigInterface
     */
    public function withRulesFromYamlOnly(...$filenames);
}
