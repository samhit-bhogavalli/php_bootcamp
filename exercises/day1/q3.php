<?php

$input = ["snake_case_sasasa", "camel_case"];
$output = [];
foreach ($input as $var) {
    $words = explode("_", $var);
    for ($i = 1; $i < count($words); $i++) {
        $words[$i][0] = strtoupper($words[$i][0]);
    }
    array_push($output, implode("", $words));
}
print_r($output);