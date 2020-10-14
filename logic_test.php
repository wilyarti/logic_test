<?php
$range = 101;

// Arrays start at zero so we add 1 to 100
for ($i = 1; $i < $range; $i++) {
    // Try the multiple condition first
    if ($i % 5 == 0 && $i % 3 == 0) {
        // Use tabs for better formatting
        echo "foobar,\t";
    } else if ($i % 3 == 0) {
        echo "foo,\t";
    } else if ($i % 5 == 0) {
        echo "bar,\t";
    } else {
        echo "$i,\t";
    }
    // No more than 10 results per line.
    if ($i % 10 == 0) {
        echo "\n";
    }
}

