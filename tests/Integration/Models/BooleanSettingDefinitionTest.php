<?php

namespace Tests\Integration\Models;

use Tests\TestCase;
use SoapBox\Settings\Models\BooleanSettingDefinition;

class BooleanSettingDefinitionTest extends TestCase
{
    /**
     * @test
     */
    public function itSuccessfullyMutatesTheTrueValueOfABooleanSetting()
    {
        $definition = factory(BooleanSettingDefinition::class)->create(['value' => true]);
        $this->assertSame(true, $definition->fresh()->value);
    }

    /**
     * @test
     */
    public function itSuccessfullyMutatesTheFalseValueOfABooleanSetting()
    {
        $definition = factory(BooleanSettingDefinition::class)->create(['value' => false]);
        $this->assertSame(false, $definition->fresh()->value);
    }
}
