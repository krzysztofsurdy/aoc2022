<?php

namespace Ksurdy\Aoc2022\Day5;

use MyCLabs\Enum\Enum;

/**
 * @method static InstructionType ONE_BY_ONE()
 * @method static InstructionType ALL_AT_ONCE()
 */
class InstructionType extends Enum
{
    private const ONE_BY_ONE = 'one-by-one';
    private const ALL_AT_ONCE = 'all-at-once';
}
