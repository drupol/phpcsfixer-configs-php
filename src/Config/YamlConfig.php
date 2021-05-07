<?php

declare(strict_types=1);

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
    public function withRulesFromConfig(...$configs): PhpCsFixerConfigInterface
    {
        $rules = array_reduce(
            $configs,
            static function (array $carry, ConfigInterface $config) {
                return array_merge($carry, $config->getRules());
            },
            $this->getRules()
        );

        ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

        return $clone;
    }

    public function withRulesFromYaml(...$filenames): PhpCsFixerConfigInterface
    {
        $rules = array_merge(
            $this->getRules(),
            $this->getRulesFromFiles(...$filenames)
        );

        ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

        return $clone;
    }

    public function withRulesFromYamlOnly(...$filenames): PhpCsFixerConfigInterface
    {
        $rules = $this->getRulesFromFiles(...$filenames);

        ksort($rules);

        $clone = clone $this;

        $clone->setRules($rules);

        return $clone;
    }

    /**
     * @param mixed ...$filenames
     */
    protected function getRulesFromFiles(...$filenames): array
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
