# Laravel Make Commands
<p align="center">
<a href="https://packagist.org/packages/joelbutcher/laravel-make-commands"><img src="https://github.styleci.io/repos/266590363/shield" alt="Style CI"></a>
<a href="https://packagist.org/packages/joelbutcher/laravel-make-commands"><img src="https://poser.pugx.org/barryvdh/laravel-debugbar/license.png" alt="License"</a>
</p>

This is a package that can be used to extend the functionality of Laravels `make` commands. It allows developers to define the destination of their new files.

## Installation

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require joelbutcher/laravel-make-commands --dev
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
JoelButcher\LaravelMakeCommands\ServiceProvider::class,
```

## Enabled Commands
This package only works with the `make` commands that Laravel doesnt use in it's core system, such as Factories, Seeders and Migrations. The following commands are enabled:

```php
ChannelMakeCommand::class
ComponentMakeCommand::class
ConsoleMakeCommand::class
ControllerMakeCommand::class
EventMakeCommand::class
ExceptionMakeCommand::class
JobMakeCommand::class
ListenerMakeCommand::class
MailMakeCommand::class
MiddlewareMakeCommand::class
NotificationMakeCommand::class
ObserverMakeCommand::class
PolicyMakeCommand::class
ProviderMakeCommand::class
RequestMakeCommand::class
ResourceMakeCommand::class
RuleMakeCommand::class
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
