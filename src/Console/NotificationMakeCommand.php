<?php

namespace JoelButcher\LaravelMakeCommands\Console;

use Illuminate\Foundation\Console\NotificationMakeCommand as BaseCommand;

class NotificationMakeCommand extends BaseCommand
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
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     *
     * @return void
     */
    public function handle()
    {
        $this->namespace = $this->ask('Where should the class be created?', 'App\Notifications');
        parent::handle();
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
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
