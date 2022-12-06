<?php

namespace Ksurdy\Aoc2022\Day3;

use Ksurdy\Aoc2022\FileYielder;

class ItemDistributor
{
    public static function fromFilePath(string $filePath, bool $lineAsPocket = false, int $numberOfLinesInRucksack = 1)
    {
        $rucksacks = [];
        $currentPockets = [];

        foreach (FileYielder::yieldLines($filePath) as $rucksackContent) {
            if ($lineAsPocket) {
                $currentPockets[] = new RucksackPocket(str_split($rucksackContent));
                if (count($currentPockets) == $numberOfLinesInRucksack) {
                    $rucksacks[] = new Rucksack(...$currentPockets);
                    $currentPockets = [];
                }
                continue;
            }

            $contentLength = strlen($rucksackContent);
            $pocketsContents = str_split($rucksackContent, $contentLength / 2);
            $rucksacks[] = new Rucksack(
                new RucksackPocket(str_split($pocketsContents[0])),
                new RucksackPocket(str_split($pocketsContents[1]))
            );
        }
        return $rucksacks;
    }
}
