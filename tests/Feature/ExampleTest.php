<?php

declare(strict_types=1);

use Backfill\Backfill\Backfill;

it('resolves the singleton', function () {
    expect(app(Backfill::class))->toBeInstanceOf(Backfill::class);
});

it('returns the same instance from the container', function () {
    expect(app(Backfill::class))->toBe(app(Backfill::class));
});

it('merges the package config', function () {
    expect(config('laravel-backfill.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('laravel-backfill::messages.placeholder'))->toBe('Backfill placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-backfill::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-backfill:placeholder')
        ->expectsOutputToContain('Backfill placeholder command executed.')
        ->assertSuccessful();
});
