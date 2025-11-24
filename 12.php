<?php

class StringUtils {
    public static function isPalindrome($s) {
        $s = mb_strtolower(str_replace(' ', '', $s));
        return $s === strrev($s);
    }
}

$test1 = "Level";
$test2 = "Мадам";
$test3 = "Тест";

$result1 = StringUtils::isPalindrome($test1) ? "Да" : "Нет";
$result3 = StringUtils::isPalindrome($test3) ? "Да" : "Нет";
$result2 = StringUtils::isPalindrome($test2) ? "Да" : "Нет";

echo("'$test1' - палиндром: $result1");
echo("'$test2' - палиндром: $result2");
echo("'$test3' - палиндром: $result3");

?>