<?php

namespace SoapBox\Settings\Utilities;

use SoapBox\Settings\Setting;
use SoapBox\Settings\Models\SettingValue;
use SoapBox\Settings\Models\SettingDefinition;

class SettingFactory
{
    public static function make(string $identifier, SettingDefinition $definition, SettingValue $value = null)
    {
        $setting = new Setting($definition, $identifier);

        if (!is_null($value)) {
            $setting->setValue($value->value);
        }

        return $setting;
    }
}
