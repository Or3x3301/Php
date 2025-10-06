<?php
declare(strict_types= 1);
function divide(float $a, float $b): ?float
{
    return $b === 0.0 ? null : $a / $b;
}

echo divide(4,2), "\n";

$result = divide(4,0);
if ($result === null) 
{
    echo "Ошибка деления на ноль";
}
else echo $result;
?>