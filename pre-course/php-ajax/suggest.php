<?php
//TODO: Get name from database

$people[] = "Steve";
$people[] = "John";
$people[] = "Jose";
$people[] = "Tom";
$people[] = "Hal";
$people[] = "Anthony";
$people[] = "Thor";
$people[] = "Tony";
$people[] = "Peter";
$people[] = "Harry";
$people[] = "Olivia";
$people[] = "Mary";
$people[] = "Brad";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if (!empty($q)) {
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if (empty($suggestion)) {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

