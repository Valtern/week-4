<?php
$points = 750;

if ($points > 500) {
    $additionalRewards = "YES";
} else {
    $additionalRewards = "NO";
}

echo "Player's total score is: " . $points . "<br>";
echo "Do players get additional rewards? " . $additionalRewards;
?>