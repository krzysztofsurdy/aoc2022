<?php

include '././vendor/autoload.php';

use Ksurdy\Aoc2022\Day1\Elf;
use Ksurdy\Aoc2022\Day1\CaloriesDistributor;
use Symfony\Component\VarDumper\VarDumper;

$elves = CaloriesDistributor::distributeFromFile(__DIR__ . '/../data/day_1_input.txt');

// SORTING BY CALORIES
usort($elves, function (Elf $a, Elf $b) {
    if ($a->getCarriedCalories() == $b->getCarriedCalories()) {
        return 0;
    }
    return ($a->getCarriedCalories() > $b->getCarriedCalories()) ? -1 : 1;
});

// GET TOP AMOUNT OF CALORIES CARRIED BY ONE ELF
VarDumper::dump($elves[0]->getCarriedCalories());

// GET AMOUNT OF CALORIES CARRIED BY TOP 3 ELVES
VarDumper::dump(
    array_sum([
            $elves[0]->getCarriedCalories(),
            $elves[1]->getCarriedCalories(),
            $elves[2]->getCarriedCalories()
        ]
    )
);
