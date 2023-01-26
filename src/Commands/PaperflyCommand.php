<?php

namespace Nazmul\Paperfly\Commands;

use Illuminate\Console\Command;

class PaperflyCommand extends Command
{
    public $signature = 'paperfly';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
