<?php

namespace Ksurdy\Aoc2022\Day4;

class SectionAssignmentPair
{
    private SectionAssignment $firstAssignment;
    private SectionAssignment $secondAssignment;

    public function __construct(SectionAssignment $firstAssignment, SectionAssignment $secondAssignment)
    {
        $this->firstAssignment = $firstAssignment;
        $this->secondAssignment = $secondAssignment;
    }

    public function doAssignmentCoverEachOtherFully(): bool
    {
        $firstAssignmentSections = $this->firstAssignment->getSections();
        $secondAssignmentSections = $this->secondAssignment->getSections();

        return count(array_intersect($firstAssignmentSections, $secondAssignmentSections)) === count($firstAssignmentSections) ||
            count(array_intersect($secondAssignmentSections, $firstAssignmentSections)) === count($secondAssignmentSections);
    }

    public function doAssignmentCoverEachOtherPartly(): bool
    {
        return !empty(array_intersect($this->firstAssignment->getSections(), $this->secondAssignment->getSections()));
    }
}
