<?php

namespace JoelButcher\LaravelMakeCommands\Console;

use Illuminate\Foundation\Console\ConsoleMakeCommand as BaseCommand;

class ConsoleMakeCommand extends BaseCommand
{
    /**
     * The default namespace for the class.
     *
     * @var string
     */
    protected $namespace;

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $this->namespace = $this->ask('Where should the class be created?', 'App\Console\Commands');
        return parent::handle();
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getNamespace($rootNamespace)
    {
        if (null !== $this->namespace) {
            return $this->namespace;
        }

        return $rootNamespace;
    }
}
