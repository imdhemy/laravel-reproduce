<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @param MyInterface $resolveThisDep
     * @return int
     */
    public function handle(MyInterface $resolveThisDep): int
    {
        return self::SUCCESS;
    }
}
