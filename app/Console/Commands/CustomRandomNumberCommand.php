<?php

namespace App\Console\Commands;

use App\Services\CustomRandomizer;
use Illuminate\Console\Command;

class CustomRandomNumberCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'numbers:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will run the custom randomizer class.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $randomizer = new CustomRandomizer();

        $this->info('List of numbers are: ' . implode(',', $randomizer->getNumbers()));
        $this->info('Average of numbers are: ' . $randomizer->average());
        $this->info('First on the list: ' . $randomizer->first());
        $this->info('Last on the list: ' . $randomizer->last());
        $this->info('Sum of first and last are: ' . $randomizer->sum());
        $this->info('Sorted Desc list of numbers are: ' . implode(',', $randomizer->sort()));
        $this->info('Sorted Asc list of numbers are: ' . implode(',',$randomizer->setSort('asc')->sort()));
    }
}
