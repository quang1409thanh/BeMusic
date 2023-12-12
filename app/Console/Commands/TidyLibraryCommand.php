<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TidyLibraryCommand extends Command
{
    protected $signature = 'sound:tidy';
    protected $hidden = true;

    public function handle(): int
    {
        $this->warn('sound:tidy has been renamed. Use sound:prune instead.');

        return self::SUCCESS;
    }
}
