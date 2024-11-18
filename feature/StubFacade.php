<?php

namespace StubNamespace\Feature;

use Illuminate\Support\Facades\Facade;

/**
 * @method static StubService load(string $stubPath)
 * @method static StubService registerExample(string $placeholder, string $example)
 * @method static StubService registerExamples(array $examples)
 */
class StubFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stub';
    }
}
