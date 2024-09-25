<?php

namespace Plank\ModelDiff\Tests;

use Illuminate\Foundation\Testing\TestCase;
use Orchestra\Testbench\Concerns\CreatesApplication;

abstract class UnitTestCase extends TestCase
{
    use CreatesApplication;
}
