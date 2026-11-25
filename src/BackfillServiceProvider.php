<?php

declare(strict_types=1);

namespace Backfill\Backfill;

use Backfill\Backfill\Console\Commands\BackfillCommand;
use Illuminate\Support\ServiceProvider;

class BackfillServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-backfill.php', 'laravel-backfill');

        $this->app->singleton(Backfill::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-backfill.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-backfill');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-backfill');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-backfill.php' => config_path('laravel-backfill.php'),
        ], ['laravel-backfill', 'laravel-backfill-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-backfill'),
        ], ['laravel-backfill', 'laravel-backfill-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-backfill'),
        ], ['laravel-backfill', 'laravel-backfill-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-backfill'),
        ], ['laravel-backfill', 'laravel-backfill-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-backfill', 'laravel-backfill-migrations']);

        $this->commands([
            BackfillCommand::class,
        ]);
    }
}
