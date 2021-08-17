<?php

$input = "1234567890";

function maskPhNumber(& $number) {
    for($i = 2; $i < 8; $i++) {
        $number[$i] = "*";
    }
}

maskPhNumber($input);

print $input;
