<?php

$input = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"Age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

$players = json_decode($input);

//print_r($players->players);

function getAgesNamesCities(& $players) {
    $ages = [];
    $names = [];
    $cities = [];
    foreach ($players as $player) {
        array_push($ages, $player->age);
        array_push($names, $player->name);
        array_push($cities, $player->address->city);
    }
    return [
        "age" => $ages,
        "name" => $names,
        "city" => $cities
    ];
}

print_r(getAgesNamesCities($players->players));

function getUniqueNames($players) {
    $names = [];
    foreach ($players as $player) {
        if (!in_array($player->name, $names)) {
            array_push($names, $player->name);
        }
    }
    return $names;
}

print_r(getUniqueNames($players->players));

function getPlayersNamesWithMaxAge($players) {
    $maxAge = 0;
    $maxAgePlayers = [];
    foreach ($players as $player) {
        $maxAge = max($maxAge, $player->age);
    }
    foreach ($players as $player) {
        if ($player->age == $maxAge) {
            array_push($maxAgePlayers, $player->name);
        }
    }
    return $maxAgePlayers;
}

print_r(getPlayersNamesWithMaxAge($players->players));