<?php

    $num1 = 200;
    $num2 = 5;

    // COMPARISON OPERATORS

    // 1 EQUAL TO
    echo $num1 == $num2;    // RETURNS BOOLEAN VALUE (BLANK IN THIS CASE)

    // 2 STRICT EQUAL TO
    echo $num1 === $num2;

    // 3 NOT EQUAL VALUE ONLY
    echo $num1 != $num2;
    echo $num1 <> $num2;

    // 4 NOT EQUAL AND TYPE
    echo $num1 !== $num2;

    // 5 GREATER THAN
    echo $num1 > $num2;

    // 6 LESSER THAN
    echo $num2 < $num1;

    // 7 GREATER THAN OR EQUAL TO
    echo $num1 >= $num2;

    // 8 LESS THAN OR EQUAL TO
    echo $num1 <= $num2;

    // 9 SPACESHIP OPERATOR
    echo $num1 <=> $num2;       // -1 IF LESS, 0 IF EQUAL AND 1 IF GREATER

