<?php

namespace Ksurdy\Aoc2022\Day2;

class MoveMap
{
    public static function fromGuideSymbol(string $symbol): Move
    {
        $map = [
            'A' => Move::ROCK(),
            'B' => Move::PAPER(),
            'C' => Move::SCISSORS(),
            'X' => Move::ROCK(),
            'Y' => Move::PAPER(),
            'Z' => Move::SCISSORS(),
        ];

        return $map[$symbol];
    }

    public static function fromExpectedMoveAndResult(Move $oponentMove, RoundResult $expectedResult): Move
    {
        if($expectedResult->equals(RoundResult::DRAW())) {
            return $oponentMove;
        }

        if ($oponentMove->equals(Move::ROCK())) {
            if($expectedResult->equals(RoundResult::LOST())) {
                return Move::SCISSORS();
            }

            if($expectedResult->equals(RoundResult::WIN())) {
                return Move::PAPER();
            }
        }

        if ($oponentMove->equals(Move::PAPER())) {
            if($expectedResult->equals(RoundResult::LOST())) {
                return Move::ROCK();
            }

            if($expectedResult->equals(RoundResult::WIN())) {
                return Move::SCISSORS();
            }
        }

        if ($oponentMove->equals(Move::SCISSORS())) {
            if($expectedResult->equals(RoundResult::LOST())) {
                return Move::PAPER();
            }

            if($expectedResult->equals(RoundResult::WIN())) {
                return Move::ROCK();
            }
        }

        throw new \Exception('Unexpected move');
    }
}
