<?php

namespace Ksurdy\Aoc2022\Day3;

class ItemScoring
{
    public static function getScoreForItem(string $item): int
    {
        $scoringOrder = array_merge(range('a', 'z'), range('A', 'Z'));
        return array_search($item, $scoringOrder) + 1;
    }
}
