<?php

namespace Ksurdy\Aoc2022\Day2;

class Logic
{
    public static function getResultFromMoves(Move $oponentMove, Move $myMove): RoundResult
    {
        if ($oponentMove->equals($myMove)) {
            return RoundResult::DRAW();
        }

        if ($oponentMove->equals(Move::ROCK())) {
            if ($myMove->equals(Move::SCISSORS())) {
                return RoundResult::LOST();
            }

            if ($myMove->equals(Move::PAPER())) {
                return RoundResult::WIN();
            }
        }

        if ($oponentMove->equals(Move::PAPER())) {
            if ($myMove->equals(Move::ROCK())) {
                return RoundResult::LOST();
            }

            if ($myMove->equals(Move::SCISSORS())) {
                return RoundResult::WIN();
            }
        }

        if ($oponentMove->equals(Move::SCISSORS())) {
            if ($myMove->equals(Move::PAPER())) {
                return RoundResult::LOST();
            }

            if ($myMove->equals(Move::ROCK())) {
                return RoundResult::WIN();
            }
        }

        throw new \Exception('Unexpected moveset');
    }

    public static function getResultFixedPlayerMove(Move $myMove): RoundResult
    {
        if ($myMove->equals(Move::ROCK())) {
            return RoundResult::LOST();
        }
        if ($myMove->equals(Move::PAPER())) {
            return RoundResult::DRAW();
        }
        if ($myMove->equals(Move::SCISSORS())) {
            return RoundResult::WIN();
        }
        throw new \Exception('Unexpected moveset');
    }
}

