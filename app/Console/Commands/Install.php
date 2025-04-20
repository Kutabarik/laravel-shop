<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    protected $signature = 'shop:install';

    protected $description = 'Installation';

    public function handle(): int
    {
        $this->call('php artisan storage:link');
        $this->call('php artisan migrate');

        return self::SUCCESS;
    }
}
