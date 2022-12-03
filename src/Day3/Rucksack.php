<?php

namespace Ksurdy\Aoc2022\Day3;

use Symfony\Component\VarDumper\VarDumper;

class Rucksack
{
    /** @var RucksackPocket[] */
    private array $pockets;

    public function __construct(RucksackPocket...$pockets)
    {
        $this->pockets = $pockets;
    }

    public function getPockets(): array
    {
        return $this->pockets;
    }

    public function getCommonItem(): array
    {
        $pocketContents = [];
        foreach ($this->pockets as $pocket) {
            $pocketContents[] = $pocket->getItems();
        }

        return array_intersect(...$pocketContents);
    }
}
