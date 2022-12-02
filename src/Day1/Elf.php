<?php

namespace Ksurdy\Aoc2022\Day1;

class Elf
{
    /** @var int[]  */
    private array $carriedCalories;

    /**
     * @param int[] $carriedCalories
     */
    public function __construct($carriedCalories = [])
    {
        $this->carriedCalories = $carriedCalories;
    }

    public function addCarriedCalories(int $calories): void
    {
        $this->carriedCalories[] = $calories;
    }

    public function getCarriedCalories(): int
    {
        return array_sum($this->carriedCalories);
    }
}
