<?php

include '././vendor/autoload.php';

use Ksurdy\Aoc2022\Day2\ScoreBoard;
use Ksurdy\Aoc2022\Day2\MoveMap;
use Ksurdy\Aoc2022\Day2\Scoring;
use Ksurdy\Aoc2022\Day2\Logic;
use Symfony\Component\VarDumper\VarDumper;

$scoreBoard = new ScoreBoard();
$fixedTacticScoreBoard = new ScoreBoard();

$handle = fopen(__DIR__ . '/../data/day_2_input.txt', "r");

if ($handle) {
    while (($round = fgets($handle)) !== false) {
        $round = str_replace(PHP_EOL, '', $round);
        $moves = explode(' ', $round);
        $opponentMove = MoveMap::fromGuideSymbol($moves[0]);
        $playerMove = MoveMap::fromGuideSymbol($moves[1]);

        // NORMAL ROUND
        $roundResult = Logic::getResultFromMoves($opponentMove, $playerMove);
        $scoreBoard->addToPlayer(Scoring::getScoreForMove($playerMove));
        $scoreBoard->addToPlayer(Scoring::getScoreForRoundResult($roundResult));

        // FIXED ROUND
        $fixedRoundResult = Logic::getResultFixedPlayerMove($playerMove);
        $fixedPlayerMove = MoveMap::fromExpectedMoveAndResult($opponentMove, $fixedRoundResult);
        $fixedTacticScoreBoard->addToPlayer(Scoring::getScoreForMove($fixedPlayerMove));
        $fixedTacticScoreBoard->addToPlayer(Scoring::getScoreForRoundResult($fixedRoundResult));
    }
    fclose($handle);
}

VarDumper::dump($scoreBoard);
VarDumper::dump($fixedTacticScoreBoard);
