<?php

$input = [2, 3, [4,5], [6,7], 8];

$output = [];
foreach ($input as $var) {
    if (is_array($var)) {
        foreach ($var as $v) {
            array_push($output, $v);
        }
    }
    else {
        array_push($output, $var);
    }
}
print_r($output);



