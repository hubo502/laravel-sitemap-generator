<?php

namespace Xdarko\LaravelSitemapGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xdarko\LaravelSitemapGenerator\Commands\LaravelSitemapGeneratorCommand;

class LaravelSitemapGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sitemap-generator')
            ->hasCommand(LaravelSitemapGeneratorCommand::class);
    }
}
