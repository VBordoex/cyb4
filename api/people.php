<?php

$people = [
    array("firstName" => "Yuri", "lastName" =>  "Andrienko", "salary" => 123456 ),
    array("firstName" => "Vasya", "lastName" =>  "Vakulenko", "salary" => 123456),
    array("firstName" => "Yulia", "lastName" =>  "Yulkinaaa", "salary" => 123456),
    array("firstName" => "Andrew", "lastName" =>  "Andreew", "salary" => 123456 ),
];

$Letters = strtolower($_REQUEST["Letters"]);

$results = [];
    foreach($people as $person) {
        if (str_starts_with(strtolower($person["lastName"]), $Letters)) {
            array_push($results, $person);
        }

    }

    echo(json_encode($results));
