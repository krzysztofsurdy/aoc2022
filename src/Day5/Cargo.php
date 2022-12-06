<?php

namespace Ksurdy\Aoc2022\Day5;

class Cargo
{
    /** @var Stack[] */
    private array $stacks = [];

    /**
     * @param Stack[] $stacks
     */
    public function __construct(array $stacks)
    {
        $this->stacks = $stacks;
    }

    public function handleInstruction(Instruction $instruction): void
    {
        if($instruction->getType()->equals(InstructionType::ONE_BY_ONE())) {
            for($i = 0; $i < $instruction->getQty(); $i++) {
                $item = $this->stacks[$instruction->getFrom()-1]->takeItemFromTop();
                if($item) {
                    $this->stacks[$instruction->getTo()-1]->putItemOnTop($item);
                }
            }
        }

        if($instruction->getType()->equals(InstructionType::ALL_AT_ONCE())) {
            $tmpTakenItems = [];
            for($i = 0; $i < $instruction->getQty(); $i++) {
                $tmpTakenItems[] = $this->stacks[$instruction->getFrom()-1]->takeItemFromTop();
            }
            $tmpTakenItems = array_reverse($tmpTakenItems);

            foreach ($tmpTakenItems as $tmpTakenItem) {
                $this->stacks[$instruction->getTo()-1]->putItemOnTop($tmpTakenItem);
            }
        }
    }

    public function getStacks(): array
    {
        return $this->stacks;
    }
}
