<?php

namespace Nazmul\Paperfly;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nazmul\Paperfly\Commands\PaperflyCommand;

class PaperflyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('paperfly')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_paperfly_table')
            ->hasCommand(PaperflyCommand::class);
    }
}
