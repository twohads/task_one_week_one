<?php
$bmw = [
    'model' => "X5",
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
    'name' => "BMV",
];
$toyota = [
    'model' => "L200",
    'speed' => 220,
    'doors' => 7,
    'year' => 2017,
    'name' => "TOYOTA",
];

$opel = [
    'model' => "Corsa",
    'speed' => 180,
    'doors' => 5,
    'year' => 2013,
    'name' => "OPEL",
];

$all_cars = [$bmw, $toyota, $opel];

echo "CAR " . $all_cars[0]['name'] . $all_cars[0]['model'] . " " . $all_cars[0]['speed'] . " "
    . $all_cars[0]['doors'] . " " . $all_cars[0]['year'];

echo "CAR " . $all_cars[1]['name'] . $all_cars[1]['model'] . " " . $all_cars[1]['speed'] . " "
    . $all_cars[1]['doors'] . " " . $all_cars[1]['year'];

echo "CAR " . $all_cars[2]['name'] . $all_cars[2]['model'] . " " . $all_cars[2]['speed'] . " "
    . $all_cars[2]['doors'] . " " . $all_cars[2]['year'];
