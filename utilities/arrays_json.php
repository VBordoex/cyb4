<?php

$nums = [1,2,3,44,7,6,5];
// //echo $nums[3];
// $summa = 0;

// foreach($nums as $x) {
//       echo "$x<br />";
//     $summa = $summa + $x;

// }

// echo ($summa);

// foreach($nums as $x) {
//     if ($x > 6) {
//          echo "$x<br />";

//     } 
// }


// $people = ["Yuri", "Vasya", "Yulia"];
//             foreach($people as $name) {
//                 if(str_starts_with($name, "Y")) {
//                             echo "$name<br />";

//                 } 


//             }


// $people = [ 
//         ["Yuri", "Andrienko", 123456],
//         ["Vasya", "Vakulenko", 14456],
//         ["Yulia", "Yulkinaaa", 17756],
// ];
// foreach($people as $person) {
//     $firstName = $person[0];
//     $lastName = $person[1];
//     $salary = $person[2];
//    echo "$firstName $lastName has salary $salary<br />";
// }

$people = [
        array("firstName" => "Yuri", "lastName" =>  "Andrienko", "salary" => 123456 ),
        array("firstName" => "Vasya", "lastName" =>  "Vakulenko", "salary" => 123456 ),
        array("firstName" => "Yulia", "lastName" =>  "Yulkinaaa", "salary" => 123456 ),
];

// foreach($people as $person) {
//         $firstName = $person["firstName"];
//         $lastName = $person["lastName"];
//         $salary = $person["salary"];
//          echo "$firstName $lastName has salary $salary<br />";
//      }

echo json_encode($people);
