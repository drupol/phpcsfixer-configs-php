<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Contract\PhpCsFixerConfigInterface;
use PhpCsFixer\Config;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlConfig.
 */
class YamlConfig extends Config implements PhpCsFixerConfigInterface
{
    /**
     * {@inheritdoc}
     */
    public function getFinder()
    {
        return parent::getFinder()
            ->files()
            ->name('*.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
            ->exclude(['build', 'libraries', 'node_modules', 'vendor'])
            ->in($_SERVER['PWD']);
    }

    /**
     * @param \PhpCsFixer\ConfigInterface ...$configs
     *
     * @return PhpCsFixerConfigInterface
     */
    public function withRulesFromConfig(...$configs)
    {
        $rules = $this->getRules();

        foreach ($configs as $config) {
            $rules = array_merge($rules, $config->getRules());
        }

        $clone = clone $this;

        $clone
            ->setRules($rules);

        return $clone;
    }

    /**
     * @param mixed ...$filenames
     *
     * @return PhpCsFixerConfigInterface
     */
    public function withRulesFromYaml(...$filenames)
    {
        $rules = array_merge(
            $this->getRules(),
            $this->getRulesFromFiles(...$filenames)
        );

        $clone = clone $this;

        $clone
            ->setRules($rules);

        return $clone;
    }

    /**
     * @param mixed ...$filenames
     *
     * @return PhpCsFixerConfigInterface
     */
    public function withRulesFromYamlOnly(...$filenames)
    {
        $clone = clone $this;

        $clone
            ->setRules(
                $this->getRulesFromFiles(...$filenames)
            );

        return $clone;
    }

    /**
     * @param mixed ...$filenames
     *
     * @return array
     */
    protected function getRulesFromFiles(...$filenames)
    {
        $rules = [];

        foreach ($filenames as $filename) {
            $filename = realpath($filename);

            if (false === $filename) {
                continue;
            }

            $parsed = (array) Yaml::parseFile($filename);
            $parsed['parameters'] = (array) $parsed['parameters'] + ['rules' => []];

            $rules = array_merge($rules, $parsed['parameters']['rules']);
        }

        return $rules;
    }
}
