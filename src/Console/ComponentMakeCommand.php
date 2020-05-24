<?php

namespace JoelButcher\LaravelMakeCommands\Console;

use Illuminate\Foundation\Console\ComponentMakeCommand as BaseCommand;

class ComponentMakeCommand extends BaseCommand
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
     * @return void
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        dd('foo');
        $this->namespace = $this->ask('Where should the class be created?', 'App\View\Components');
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
