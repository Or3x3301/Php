<?php
declare(strict_types= 1);
$n = $_GET["n"];

if ($n % 15 == 0) {
    echo "FizzBuzz";
}
else if ($n % 3 == 0) {
    echo "Fizz";
}
else if ($n % 5 == 0) {
    echo "Buzz";
}

?>