<?php

function isPrime($number) {
    if ($number == 0) {
        return false;
    }
    $count = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $count++;
        }
    }
    return $count;
}

$number = 29; 
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
