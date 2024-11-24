<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5 - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = 5 - 1; $i >= 1; $i--) {
    for ($j = 5 - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
//////////////////////////////////////////////////////////////////////
for ($i = 1; $i <= 5; $i++) {

    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = 5; $i >= 1; $i--) {

    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}


//////////////////////////////////////////////////////////////////

// Top half of the pattern
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

// Bottom half of the pattern
for ($i = 3 - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
