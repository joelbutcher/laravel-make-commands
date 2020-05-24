<?php

namespace JoelButcher\LaravelMakeCommands\Console;

use Illuminate\Foundation\Console\ResourceMakeCommand as BaseCommand;

class ResourceMakeCommand extends BaseCommand
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
        $this->namespace = $this->ask('Where should the class be created?', 'App\Http\Resources');
        parent::handle();
        return;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getNamespace($rootNamespace)
    {
        return $rootNamespace.$this->namespace;
    }
}
