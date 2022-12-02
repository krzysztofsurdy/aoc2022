<?php

namespace Ksurdy\Aoc2022\Day2;

use MyCLabs\Enum\Enum;

/**
 * @method static RoundResult LOST()
 * @method static RoundResult DRAW()
 * @method static RoundResult WIN()
 */
class RoundResult extends Enum
{
    private const LOST = 'LOST';
    private const DRAW = 'DRAW';
    private const WIN = 'WIN';
}
