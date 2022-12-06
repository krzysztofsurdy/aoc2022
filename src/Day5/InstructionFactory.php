<?php

namespace Ksurdy\Aoc2022\Day5;

class InstructionFactory
{
    public static function fromMoveString(string $line, InstructionType $type): Instruction
    {
        preg_match_all('/\d+/', $line, $matches);

        return new Instruction($matches[0][0], $matches[0][1], $matches[0][2], $type);
    }
}
