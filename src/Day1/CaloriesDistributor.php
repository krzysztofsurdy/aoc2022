<?php

namespace Ksurdy\Aoc2022\Day1;

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

        $handle = fopen($filePath, "r");

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $load = (int)$line;
                if ($load === 0) {
                    $elves[] = $currentElf;
                    $currentElf = new Elf();
                }

                $currentElf->addCarriedCalories($load);
            }

            fclose($handle);
        }

        return $elves;
    }
}
