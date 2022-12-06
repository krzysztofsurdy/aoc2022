<?php

include '././vendor/autoload.php';

use Ksurdy\Aoc2022\FileYielder;
use Ksurdy\Aoc2022\Day6\Buffer;
use Symfony\Component\VarDumper\VarDumper;

// How many characters need to be processed before the first start-of-packet marker is detected (4 characters in buffer)
$buffer = new Buffer(4);
$signalItemPassed = 0;
foreach (FileYielder::yieldCharacters(__DIR__ . '/../data/day_6_input.txt') as $signalItem) {

    if($buffer->hasReachedLimit()) {
        if($buffer->isContentUnique()) {
            continue;
        }
    }
    $buffer->pushToBuffer($signalItem);
    $signalItemPassed++;
}

VarDumper::dump($signalItemPassed);

// How many characters need to be processed before the first start-of-packet marker is detected (14 characters in buffer)
$buffer = new Buffer(14);
$signalItemPassed = 0;
foreach (FileYielder::yieldCharacters(__DIR__ . '/../data/day_6_input.txt') as $signalItem) {

    if($buffer->hasReachedLimit()) {
        if($buffer->isContentUnique()) {
            continue;
        }
    }
    $buffer->pushToBuffer($signalItem);
    $signalItemPassed++;
}

VarDumper::dump($signalItemPassed);
