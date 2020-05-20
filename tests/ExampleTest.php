<?php

namespace Codeat3\LaravelIrkfdb\Tests;

use Orchestra\Testbench\TestCase;
use Codeat3\LaravelIrkfdb\LaravelIrkfdbServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelIrkfdbServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
