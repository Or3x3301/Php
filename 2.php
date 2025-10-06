<?php
declare(strict_types= 1);
function sum(int $a, int $b): int
{
    return $a + $b;
}

echo sum(2,3), "\n";
echo sum("2",3); // "2" - строка, ее нельзя сложить с числом. Строгая типизация.

?>