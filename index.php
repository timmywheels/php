<?php

// $name = "Tim";
// $feeling = "great";

// echo "Hello $name, I hope you have a $feeling day today.";

// echo "<hr/>";

// $numbers = [1,2,3,4,5];

// for ($i = 0; $i < count($numbers); $i++) {
//     echo $numbers[$i] . "\n";
// } 

// foreach ($numbers as $number => $value) {
//     echo $value;
// };

// echo "<hr/>";

// $employee_names = [
//     "Tim" => "Wheeler",
//     "Zach" => "Rice"
// ];

// if (array_key_exists("Tim", $employee_names)) {
//     echo "Tim's last name is " . $employee_names["Tim"] . ".\n";
// } 

// if (array_key_exists("Zach", $employee_names)) {
//     echo "Zach's last name is " . $employee_names["Zach"] . ".\n";
// }

// echo "<hr/>";

// echo "Tim's last name is " . strlen($employee_names["Tim"]) . " characters.";

// echo "<hr/>";

// $count = 1;

// while ($count <= 100) {
//     echo "Count: $count.\n";
//     $count++;
// }


// echo "<hr/>";


function squared_sum($nums){
    
    for ($i = 0; $i < count($nums); $i++) {
        return $nums[$i] * $nums[$i];
    }
};

echo squared_sum([1, 2, 3, 4, 5]);



?>