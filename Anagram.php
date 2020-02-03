<?php

class Anagram
{
    public static function check(...$strings): bool {

        $strings = array_map(function ($string) {
            $chars = self::getChars($string);
            $chars = self::filter($chars);
            $chars = self::toLowerCase($chars);
            $chars = self::sort($chars);

            return $chars;
        }, $strings);

        $uniqueStrings = array_unique($strings, SORT_REGULAR);
        $result = count($uniqueStrings) === 1;

        return $result;
    }

    private function getChars($string) {

        return str_split($string);
    }

    private function filter($chars) {

        return array_filter($chars, function ($char) {
            return ctype_alpha($char);
        });
    }

    private function toLowerCase($chars) {

        return array_map(function ($char) {
            return mb_strtolower($char);
        }, $chars);
    }

    private function sort($chars) {

        sort($chars);

        return $chars;
    }
}
