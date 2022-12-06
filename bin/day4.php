<?php

include '././vendor/autoload.php';

use Ksurdy\Aoc2022\FileYielder;
use Ksurdy\Aoc2022\Day4\SectionAssignmentPair;
use Ksurdy\Aoc2022\Day4\SectionAssignmentFactory;
use Symfony\Component\VarDumper\VarDumper;

$assignmentPairs = [];

foreach (FileYielder::yieldLines(__DIR__ . '/../data/day_4_input.txt') as $assignmentLine)
{
    $pairs = explode(',', $assignmentLine);
    $assignmentPairs[] = new SectionAssignmentPair(
       SectionAssignmentFactory::fromStringRange($pairs[0]),
        SectionAssignmentFactory::fromStringRange($pairs[1])
    );
}

// how many assignment pairs does one range fully contain the other
$pairsContainingOtherQty = 0;
/** @var SectionAssignmentPair $assignmentPair */
foreach ($assignmentPairs as $assignmentPair) {
    if($assignmentPair->doAssignmentCoverEachOtherFully()) {
        $pairsContainingOtherQty++;
    }
}
VarDumper::dump($pairsContainingOtherQty);

// how many assignment pairs do the ranges overlap
$pairsContainingOtherQty = 0;
/** @var SectionAssignmentPair $assignmentPair */
foreach ($assignmentPairs as $assignmentPair) {
    if($assignmentPair->doAssignmentCoverEachOtherPartly()) {
        $pairsContainingOtherQty++;
    }
}
VarDumper::dump($pairsContainingOtherQty);
