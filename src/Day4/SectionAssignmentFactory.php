<?php

namespace Ksurdy\Aoc2022\Day4;

class SectionAssignmentFactory
{
    public static function fromStringRange(string $range): SectionAssignment
    {
        $assignmentStringExpl = explode('-', $range);
        return new SectionAssignment(range($assignmentStringExpl[0], $assignmentStringExpl[1]));
    }
}
