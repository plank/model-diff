<?php

namespace Plank\ModelDiff;

use Plank\ModelDiff\Commands\ModelDiffCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
