<?php

namespace Xdarko\LaravelSitemapGenerator\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class LaravelSitemapGeneratorCommand extends Command
{
    public $signature = 'generate:sitemap';

    public $description = 'Generate Sitemap';

    public function handle(): int
    {
        $generator = SitemapGenerator::create(config('app.url'));
        $generator->writeToFile(public_path('sitemap.xml'));
        $this->line('generate success.');
        return Command::SUCCESS;
    }
}
