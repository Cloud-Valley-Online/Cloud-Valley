<?php

namespace RalphJSmit\PestPluginLivewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Testing\TestableLivewire;
use ReflectionProperty;

if ( ! function_exists('validInput') ) {
    function validInput(array $input): Collection
    {
        return collect($input);
    }
}

if ( ! function_exists('assertRequiredProperties') ) {
    function assertRequiredProperties(TestableLivewire $livewire, Collection $validInput, array $requiredProperties, string $submitMethod = 'submit'): void
    {
        foreach ($requiredProperties as $requiredProperty) {
            $allowedDefaultValue = getAllowedDefaultValue($livewire->instance(), $requiredProperty);

            $livewire
                ->set($validInput->put(key: $requiredProperty, value: $allowedDefaultValue,)->toArray())
                ->call($submitMethod)
                ->assertHasErrors([$requiredProperty => ['required']]);
        }
    }
}
if ( ! function_exists('assertNotRequiredProperties') ) {
    function assertNotRequiredProperties(TestableLivewire $livewire, Collection $validInput, array $notRequiredProperties, string $submitMethod = 'submit'): void
    {
        foreach ($notRequiredProperties as $notRequiredProperty) {
            $allowedDefaultValue = getAllowedDefaultValue($livewire->instance(), $notRequiredProperty);

            $livewire
                ->set($validInput->put(key: $notRequiredProperty, value: $allowedDefaultValue,)->toArray())
                ->call($submitMethod)
                ->assertHasNoErrors([$notRequiredProperty => ['required']]);
        }
    }
}

if ( ! function_exists('getAllowedDefaultValue') ) {
    function getAllowedDefaultValue(object $instance, string $property): mixed
    {
        if ( Str::contains($property, '.') ) {
            return null;
        }

        if ( ! property_exists($instance, $property) ) {
            return null;
        }

        $reflection = ( new ReflectionProperty(class: $instance, property: $property) )->getType();

        return $reflection->allowsNull()
            ? null
            : match ( $reflection->getName() ) {
                'string' => '',
                'int' => 0,
                'array' => [],
            };
    }
}