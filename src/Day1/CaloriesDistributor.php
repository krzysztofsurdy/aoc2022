<?php

namespace Ksurdy\Aoc2022\Day1;

use Ksurdy\Aoc2022\FileYielder;

class CaloriesDistributor
{
    /**
     * @param string $fileName
     * @return Elf[]
     */
    public static function distributeFromFile(string $filePath): array
    {
        $elves = [];
        $currentElf = new Elf();

        foreach (FileYielder::yieldLines($filePath) as $line) {
            $load = (int)$line;
            if ($load === 0) {
                $elves[] = $currentElf;
                $currentElf = new Elf();
            }

            $currentElf->addCarriedCalories($load);
        }

        return $elves;
    }
}
