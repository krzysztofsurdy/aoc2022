<?php

namespace Ksurdy\Aoc2022\Day6;

class Buffer
{
    private int $sizeLimit;
    private array $content = [];

    public function __construct(int $sizeLimit)
    {
        $this->sizeLimit = $sizeLimit;
    }

    public function pushToBuffer(string $item): void
    {
        $this->content[] = $item;

        if(count($this->content) == $this->sizeLimit + 1) {
            unset($this->content[0]);
            $this->content = array_values($this->content);
        }
    }

    public function hasReachedLimit(): bool
    {
        return count($this->content) === $this->sizeLimit;
    }

    public function isContentUnique(): bool
    {
        return count(array_unique($this->content)) === count($this->content);
    }
}
