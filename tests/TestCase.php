<?php

namespace Kmlpandey77\Trustpayment\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kmlpandey77\Trustpayment\TrustpaymentServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kmlpandey77\\Trustpayment\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TrustpaymentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_trustpayment_table.php.stub';
        $migration->up();
        */
    }
}
