<?php
// example of a simple in variable score passing demo
function Grading($score)
{

    if ($score >= 70 && $score < 100) {
        echo "Your attained Grade A of " . $score . " marks";
    } elseif ($score >= 63 && $score < 70) {
        echo "Your attained Grade B of " . $score . " marks";
    } elseif ($score >= 51 && $score < 62) {
        echo "Your attained Grade C of " . $score . " marks";
    } elseif ($score >= 44 && $score < 61) {
        echo "Your attained Grade D of " . $score . " marks";
    } elseif ($score >= 0 && $score < 43) {
        echo "Your attained Grade F of " . $score . " marks";
    }
}

echo Grading(66);
?>