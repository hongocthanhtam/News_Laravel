<?php

namespace Laravel\Tinker;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
use Laravel\Tinker\Console\TinkerCommand;

class TinkerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
<<<<<<< HEAD
=======
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath($raw = __DIR__ . '/../config/tinker.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('tinker.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('tinker');
        }

        $this->mergeConfigFrom($source, 'tinker');
    }

    /**
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.tinker', function () {
            return new TinkerCommand;
        });

        $this->commands(['command.tinker']);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.tinker'];
    }
}
