<?php

$input = "1234567890";

function maskPhNumber(& $number, $first, $last) {
    for($i = $first; $i < $last; $i++) {
        $number[$i] = "*";
    }
}

maskPhNumber($input, 2, 8);

print $input;
