<?php

namespace App\Services;


class CustomRandomizer extends Randomizer {

    public function sum()
    {
        return (int) head($this->numbers) + last($this->numbers);
    }

    public function first()
    {
        return head($this->numbers);
    }

    public function last()
    {
        return last($this->numbers);
    }
}
