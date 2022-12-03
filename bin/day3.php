<?php

include '././vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;
use Ksurdy\Aoc2022\Day3\ItemScoring;
use Ksurdy\Aoc2022\Day3\ItemDistributor;
use Ksurdy\Aoc2022\Day3\Rucksack;

//// 2 POCKETS PER RUCKSACK
$rucksacks = ItemDistributor::fromFilePath(__DIR__ . '/../data/day_3_input.txt');
$score = 0;
/**
 * @var Rucksack $rucksack
 */
foreach ($rucksacks as $rucksack) {
    $commonItem = $rucksack->getCommonItem();
    $score += ItemScoring::getScoreForItem(reset($commonItem));
}

VarDumper::dump($score);

// GROUPS OF 3
$rucksacks = ItemDistributor::fromFilePath(__DIR__ . '/../data/day_3_input.txt', true, 3);
$score = 0;
/**
 * @var Rucksack $rucksack
 */
foreach ($rucksacks as $rucksack) {
    $commonItem = $rucksack->getCommonItem();
    $score += ItemScoring::getScoreForItem(reset($commonItem));
}

VarDumper::dump($score);
