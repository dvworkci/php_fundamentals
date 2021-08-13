<?php

define("ENDL","<br>");

// ARRAY FUNCTIONS :-
$colors = ['Red','Red','Black','Black','Black','Black','Blue','Blue','Green','Green','Green'];

$foods = [
        'fruits' => ['Oranges','Grapes','Mangoes'],
        'veggies' => ['Carrot','Cabbage','Lady Finger']
];

// 1 COUNT()
// count($array_var,$mode) returns the number of elements in an array
// Counts all elements in an array, or something in an object.
// function count(Countable|array $value, int $mode = COUNT_NORMAL): int { }

echo count($colors) . ENDL;

echo count($foods['fruits']) . ENDL;    

// 2 SIZEOF()
// sizeof() same as count()
// sizeof
// Alias: {@see \count}
// <?php
// function sizeof(Countable|array $value, int $mode = COUNT_NORMAL): int { }
// @param array|Countable $value
// @param int $mode — [optional]
// @return int
echo sizeof($colors) . ENDL;

echo sizeof($foods,1) . ENDL;

// 3 array_count_values() Counts all the values of an array
echo "<pre>"; echo print_r(array_count_values($colors)); echo "</pre>";
