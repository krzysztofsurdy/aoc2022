<?php

namespace Ksurdy\Aoc2022\Day2;

use MyCLabs\Enum\Enum;

class Scoring
{
    public static function getScoreForMove(Move $move): int
    {
        if ($move->equals(Move::ROCK())) {
            return 1;
        }

        if ($move->equals(Move::PAPER())) {
            return 2;
        }

        if ($move->equals(Move::SCISSORS())) {
            return 3;
        }

        throw new \Exception('Unsupported move');
    }

    public static function getScoreForRoundResult(RoundResult $result): int
    {
        if ($result->equals(RoundResult::LOST())) {
            return 0;
        }

        if ($result->equals(RoundResult::DRAW())) {
            return 3;
        }

        if ($result->equals(RoundResult::WIN())) {
            return 6;
        }

        throw new \Exception('Unsupported move');
    }
}
