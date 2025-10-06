<?php
declare(strict_types= 1);
function grade(int $score): string{
    return match (true) {
        $score >= 90=> 'A',
        $score >= 75=> 'B',
        $score >= 60=> 'C',
        default => 'F',
    };
}

echo grade(95), "\n";
echo grade(70), "\n";
echo grade(50), "\n";

?>