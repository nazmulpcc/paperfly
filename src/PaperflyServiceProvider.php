<?php

namespace Nazmul\Paperfly;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nazmul\Paperfly\Commands\PaperflyCommand;

class PaperflyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('paperfly')
            ->hasConfigFile();

        $this->app->bind(Paperfly::class, function () {
            return new Paperfly(
                config('paperfly.username'),
                config('paperfly.password'),
                config('paperfly.key'),
                config('paperfly.options', []),
            );
        });
    }


}
