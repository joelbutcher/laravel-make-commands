<?php

namespace JoelButcher\LaravelMakeCommands;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\ChannelMakeCommand::class,
                Console\ComponentMakeCommand::class,
                Console\ConsoleMakeCommand::class,
                Console\ControllerMakeCommand::class,
                Console\EventMakeCommand::class,
                Console\ExceptionMakeCommand::class,
                Console\JobMakeCommand::class,
                Console\ListenerMakeCommand::class,
                Console\MailMakeCommand::class,
                Console\MiddlewareMakeCommand::class,
                Console\NotificationMakeCommand::class,
                Console\ObserverMakeCommand::class,
                Console\PolicyMakeCommand::class,
                Console\ProviderMakeCommand::class,
                Console\RequestMakeCommand::class,
                Console\ResourceMakeCommand::class,
                Console\RuleMakeCommand::class,
            ]);
        }
    }
}
