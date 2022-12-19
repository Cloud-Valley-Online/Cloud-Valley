<?php

namespace RalphJSmit\PestPluginLivewire;

use Illuminate\Support\Collection;
use Pest\Expectation;

expect()->extend('toHaveRequiredProperties', function (Collection $validInput, array $properties, string $submit): Expectation {
    assertRequiredProperties($this->value, $validInput, $properties, $submit);

    return $this;
});

expect()->extend('toNotHaveRequiredProperties', function (Collection $validInput, array $properties, string $submit): Expectation {
    assertNotRequiredProperties($this->value, $validInput, $properties, $submit);

    return $this;
});