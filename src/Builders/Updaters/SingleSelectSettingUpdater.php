<?php

namespace SoapBox\Settings\Builders\Updaters;

class SingleSelectSettingUpdater extends SettingUpdater
{
    public function setDefault(string $default)
    {
        $this->definition->value = $default;
    }

    public function addOption(string $option)
    {
        $options = $this->definition->options;
        $options[] = $option;
        $this->definition->options = $options;
    }

    public function removeOption(string $option)
    {
        $options = $this->definition->options;
        $index = array_search($option, $options);
        unset($options[$index]);
        $this->definition->options = $options;
    }

    public function setOptions(array $options)
    {
        $this->definition->options = $options;
    }
}
