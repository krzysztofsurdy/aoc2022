<?php

include '././vendor/autoload.php';

use Ksurdy\Aoc2022\FileYielder;
use Ksurdy\Aoc2022\Day5\Cargo;
use Ksurdy\Aoc2022\Day5\Stack;
use Ksurdy\Aoc2022\Day5\InstructionFactory;
use Symfony\Component\VarDumper\VarDumper;
use Ksurdy\Aoc2022\Day5\InstructionType;

// what crate ends up on top of each stack
$cargo = new Cargo(
    [
        new Stack(['P', 'F', 'M', 'Q', 'W', 'G', 'R', 'T']),
        new Stack(['H', 'F', 'R']),
        new Stack(['P', 'Z', 'R', 'V', 'G', 'H', 'S', 'D']),
        new Stack(['Q', 'H', 'P', 'B', 'F', 'W', 'G']),
        new Stack(['P', 'S', 'M', 'J', 'H']),
        new Stack(['M', 'Z', 'T', 'H', 'S', 'R', 'P', 'L']),
        new Stack(['P', 'T', 'H', 'N', 'M', 'L']),
        new Stack(['F', 'D', 'Q', 'R']),
        new Stack(['D', 'S', 'C', 'N', 'L', 'P', 'H']),
    ]
);
foreach (FileYielder::yieldLines(__DIR__ . '/../data/day_5_input.txt') as $instructionLine) {
    $cargo->handleInstruction(InstructionFactory::fromMoveString($instructionLine, InstructionType::ONE_BY_ONE()));
}
$stackSentence = '';
foreach ($cargo->getStacks() as $stack) {
    $stackSentence .= $stack->getItemFromTop();
}
VarDumper::dump($stackSentence);

// what crate ends up on top of each stack - moving all at once
$cargo = new Cargo(
    [
        new Stack(['P', 'F', 'M', 'Q', 'W', 'G', 'R', 'T']),
        new Stack(['H', 'F', 'R']),
        new Stack(['P', 'Z', 'R', 'V', 'G', 'H', 'S', 'D']),
        new Stack(['Q', 'H', 'P', 'B', 'F', 'W', 'G']),
        new Stack(['P', 'S', 'M', 'J', 'H']),
        new Stack(['M', 'Z', 'T', 'H', 'S', 'R', 'P', 'L']),
        new Stack(['P', 'T', 'H', 'N', 'M', 'L']),
        new Stack(['F', 'D', 'Q', 'R']),
        new Stack(['D', 'S', 'C', 'N', 'L', 'P', 'H']),
    ]
);
foreach (FileYielder::yieldLines(__DIR__ . '/../data/day_5_input.txt') as $instructionLine) {
    $cargo->handleInstruction(InstructionFactory::fromMoveString($instructionLine, InstructionType::ALL_AT_ONCE()));
}
$stackSentence = '';
foreach ($cargo->getStacks() as $stack) {
    $stackSentence .= $stack->getItemFromTop();
}
VarDumper::dump($stackSentence);
