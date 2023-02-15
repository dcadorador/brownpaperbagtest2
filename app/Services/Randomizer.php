<?php

namespace App\Services;

use mysql_xdevapi\Collection;

class Randomizer {

    const MAX_RANDOM_NUMBERS = 10;
    protected array  $numbers;
    protected string $sort;

    public function __construct($sort = 'desc')
    {
        $this->sort = $sort;
        $this->initializeRandomNumbers();
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    public function getNumbers()
    {
        return $this->numbers;
    }

    protected function initializeRandomNumbers()
    {
        $data = collect([]);
        do {
            $data = $data->push(rand(1, 30))->unique();
        } while($data->count() < self::MAX_RANDOM_NUMBERS);

        $this->numbers = $data->values()->all();
    }

    public function sum()
    {
        return collect($this->numbers)->sum();
    }

    public function average()
    {
        return collect($this->numbers)->avg();
    }

    public function sort()
    {
        if($this->sort == 'desc') {
            return collect($this->numbers)->sortDesc()->values()->all();
        }

        return collect($this->numbers)->sort()->values()->all();
    }

}
