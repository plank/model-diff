<?php

namespace Plank\ModelDiff;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Plank\ModelDiff\Commands\ModelDiffCommand;

class ModelDiffServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('model-diff')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_model_diff_table')
            ->hasCommand(ModelDiffCommand::class);
    }
}
