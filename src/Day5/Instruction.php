<?php

namespace Ksurdy\Aoc2022\Day5;

class Instruction
{
    private int $qty;
    private int $from;
    private int $to;
    private InstructionType $type;

    public function __construct(int $qty, int $from, int $to, InstructionType $type)
    {
        $this->qty = $qty;
        $this->from = $from;
        $this->to = $to;
        $this->type = $type;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getFrom(): int
    {
        return $this->from;
    }

    public function getTo(): int
    {
        return $this->to;
    }

    public function getType(): InstructionType
    {
        return $this->type;
    }
}
