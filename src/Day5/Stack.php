<?php

namespace Ksurdy\Aoc2022\Day5;

class Stack
{
    /** @var string[] */
    private array $contents;

    /**
     * @param string[] $contents
     */
    public function __construct(array $contents)
    {
        $this->contents = $contents;
    }

    public function getItemFromTop(): ?string
    {
        if(empty($this->contents)) {
            return null;
        }

        $topIndex = array_key_last($this->contents);
        $item = $this->contents[$topIndex];

        return $item;
    }

    public function takeItemFromTop(): ?string
    {
        if(empty($this->contents)) {
            return null;
        }

        $topIndex = array_key_last($this->contents);
        $item = $this->contents[$topIndex];
        unset($this->contents[$topIndex]);
        $this->contents = array_values($this->contents);

        return $item;
    }

    public function putItemOnTop(string $item): void
    {
        $this->contents[] = $item;
    }
}
