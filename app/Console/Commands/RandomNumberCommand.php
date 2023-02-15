<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Randomizer;

class RandomNumberCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'numbers:base';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will run the base randomizer class.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $randomizer = new Randomizer();

        $this->info('List of numbers are: ' . implode(',', $randomizer->getNumbers()));
        $this->info('Average of numbers are: ' . $randomizer->average());
        $this->info('Sum of numbers are: ' . $randomizer->sum());
        $this->info('Sorted Desc list of numbers are: ' . implode(',', $randomizer->sort()));
        $this->info('Sorted Asc list of numbers are: ' . implode(',',$randomizer->setSort('asc')->sort()));
    }
}
