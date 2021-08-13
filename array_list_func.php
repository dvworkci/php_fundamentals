<?php

// list
// (PHP 4, PHP 5, PHP 7, PHP 8)

// list — Assign variables as if they were an array

// Description ¶
// list(mixed $var, mixed ...$vars = ?): array
// Like array(), this is not really a function, but a language construct. list() is used to assign a list of variables in one operation. Strings can not be unpacked and list() expressions can not be completely empty.

// Note:

// Before PHP 7.1.0, list() only worked on numerical arrays and assumes the numerical indices start at 0.

$emps = [
    [1,"John Doe","Manager",68000],
    [2,"Rajesh Thakur","Graphic Designer",78000],
    [3,"Nishchay Jaiswal", "Media Coordinator",56000],
    [4,"Harshit More","Java Developer",76000]
];

$students = [
    [
        'id' => 1,
        'name' => "Rajesh Thakur",
        'subject' => "Graphics"
    ],
    [
        'id' => 2,
        'name' => "Nishchay Jaiswal",
        'subject' => "Mass Communication"
    ],
    [
        'id' => 3,
        'name' => "Harshit More",
        'subject' => "Computer Science"
    ]
];

// foreach($emps as list($id,$name,$profile,$salary)){

//     echo "$id $name $profile $salary <br>";

// }

foreach($students as list("id" => $id,"name" => $name,"subject" => $subject)){
    echo "$id  $name  $subject  <br>";
}