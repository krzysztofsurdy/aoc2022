<?php

namespace Ksurdy\Aoc2022\Day3;

class RucksackPocket
{
    /** @var string[] */
    private array $items;

    /**
     * @param string[] $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return string[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
