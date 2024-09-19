<?php

$originalPrice = 120000;
$discountThreshold = 100000;
$discountPercentage = 20;

if ($originalPrice > $discountThreshold) {
    $discountAmount = ($discountPercentage / 100) * $originalPrice;
    $finalPrice = $originalPrice - $discountAmount;
} else {
    $finalPrice = $originalPrice; 
}

echo "The final price after discount is: Rp " . $finalPrice;

?>