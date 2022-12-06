<?php

namespace Ksurdy\Aoc2022\Day4;

class SectionAssignment
{
    /** @var int[] */
    private array $sections;

    /**
     * @param int[] $sections
     */
    public function __construct(array $sections)
    {
        $this->sections = $sections;
    }

    public function getSections(): array
    {
        return $this->sections;
    }
}
