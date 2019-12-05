<?php

namespace drupol\PhpCsFixerConfigsPhp\Config;

use drupol\PhpCsFixerConfigsPhp\Contract\PhpCsFixerConfigInterface;
use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlConfig.
 */
class YamlConfig extends Config implements PhpCsFixerConfigInterface
{
    /**
     * {@inheritdoc}
     */
    public function withRulesFromConfig(...$configs)
    {
        $rules = \array_reduce(
            $configs,
            static function (array $carry, ConfigInterface $config) {
                return \array_merge($carry, $config->getRules());
            },
            $this->getRules()
        );

        \ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

        return $clone;
    }

    /**
     * {@inheritdoc}
     */
    public function withRulesFromYaml(...$filenames)
    {
        $rules = \array_merge(
            $this->getRules(),
            $this->getRulesFromFiles(...$filenames)
        );

        \ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

        return $clone;
    }

    /**
     * {@inheritdoc}
     */
    public function withRulesFromYamlOnly(...$filenames)
    {
        $rules = $this->getRulesFromFiles(...$filenames);

        \ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

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
            $filename = \realpath($filename);

            if (false === $filename) {
                continue;
            }

            $parsed = (array) Yaml::parseFile($filename);
            $parsed['parameters'] = (array) $parsed['parameters'] + ['rules' => []];

            $rules = \array_merge($rules, $parsed['parameters']['rules']);
        }

        return $rules;
    }
}
