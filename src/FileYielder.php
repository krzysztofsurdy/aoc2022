<?php

namespace Ksurdy\Aoc2022;

class FileYielder
{
    /**
     * @return iterable
     */
    public static function yieldLines(string $filePath): iterable
    {
        $handle = fopen($filePath, "r");

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                yield str_replace(PHP_EOL, '', $line);
            }

            fclose($handle);
        }
    }

    /**
     * @return iterable
     */
    public static function yieldCharacters(string $filePath): iterable
    {
        $handle = fopen($filePath, "r");

        if ($handle) {
            while (($character = fgetc($handle)) !== false) {
                yield $character;
            }

            fclose($handle);
        }
    }
}
