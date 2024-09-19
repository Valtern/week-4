<?php
$seat = 45;
$customer = 28;

$totalSeat = $seat - $customer;
$percentageEmpty = ($totalSeat / $seat) * 100;

echo"<h2>Percentage of seat still empty</h2> <br>";
echo "<p>Seat left: ". $totalSeat . "</p> <br>";
echo "<p>Percentage of seats: ". $percentageEmpty . "</p>";

?>