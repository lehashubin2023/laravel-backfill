<?php

declare(strict_types=1);

namespace Backfill\Backfill\Console\Commands;

use Illuminate\Console\Command;

class BackfillCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-backfill:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-backfill.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('Backfill placeholder command executed.');

        return self::SUCCESS;
    }
}
