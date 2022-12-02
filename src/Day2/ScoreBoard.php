<?php

namespace Ksurdy\Aoc2022\Day2;

class ScoreBoard
{
    private int $oponent = 0;
    private int $player = 0;

    public function getOponentScore(): int
    {
        return $this->oponent;
    }

    public function getPlayerScore(): int
    {
        return $this->player;
    }

    public function addToOponent(int $score): void
    {
        $this->oponent += $score;
    }

    public function addToPlayer(int $score): void
    {
        $this->player += $score;
    }
}
