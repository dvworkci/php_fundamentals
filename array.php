<?php

    // EXAMPLE 
    $colors = ['Violet','Indigo','Blue','Green','Yellow','Red'];

    // echo $colors[0] . "<br>";
    // echo $colors[1] . "<br>";
    // echo $colors[2] . "<br>";
    // echo $colors[3] . "<br>";
    // echo $colors[4] . "<br>";

    // echo "<ol>";
    // foreach($colors as $color){
    //     echo "<li>" . $color . "</li>";
    // }
    // echo "</ol>";


    // OR

    // echo "<pre>";
    // print_r($colors);

    // ASSOCIATIVE ARRAYS :-

    $ages = [
        "Akash" => 23,
        "Ravi" => 43,
        "Elon" => 12,
        "Priyanka" => 32,
        "Vibhav" => 25
    ];

    // echo "<pre>"; var_dump($ages);

    // MULTI DIMENSIONAL ARRAY
    $emps = [
        [1,"Krishna","Manager",50000],
        [2,"Mohan","Developer",50000],
        [3,"Ravi","Operator",50000],
        [4,"Avi","Driver",50000],
    ];

    // MULTIDIMENSIONAL ASSOCIATIVE ARRAY
    $marks = [
        "Krishna" => [
            "Physics" => 87,
            "Chemistry" => 98,
            "Maths" => 85
        ],

        "Salman" => [
            "Physics" => 78,
            "Chemistry" => 67,
            "Maths" => 67
        ],

        "Mohan" => [
            "Physics" => 78,
            "Chemitry" => 67,
            "Maths" => 87
        ]
    ];

    echo "<table border='2px' cellpadding='5px'>";
    foreach($marks as $key_1 => $key_2){
        echo "<tr> 
                <td>$key_1</td> ";
        foreach($key_2 as $val){
            echo "<td>$val</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // LOOPING THROUGH ARRAY
    // for($row = 0; $row < 4; $row++){
    //     for($col = 0;$col < 4;$col++){
    //         echo $emps[$row][$col] . " ";
    //     }
    //     echo "<br>";
    // }

    // echo "<pre>"; var_dump($marks);

    // echo "<pre>"; print_r($emps);