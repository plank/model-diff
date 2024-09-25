<?php

namespace Plank\ModelDiff\Commands;

use Illuminate\Console\Command;

class ModelDiffCommand extends Command
{
    public $signature = 'model-diff';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
