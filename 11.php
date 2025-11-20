<?php

class MathUtils {
    public static function square($x) {
        return $x * $x;
    }
}

$result1 = MathUtils::square(4);
echo("Квадрат числа 4: $result1");

$result2 = MathUtils::square(5.5);
echo("Квадрат числа 5.5: $result2");

?>