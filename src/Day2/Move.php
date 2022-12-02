<?php

namespace Ksurdy\Aoc2022\Day2;

use MyCLabs\Enum\Enum;

/**
 * @method static Move ROCK()
 * @method static Move PAPER()
 * @method static Move SCISSORS()
 */
class Move extends Enum
{
    private const ROCK = 'rock';
    private const PAPER = 'paper';
    private const SCISSORS = 'scissors';

}
