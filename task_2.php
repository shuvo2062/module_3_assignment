<?php

/*

Task 2: Array Manipulation

**Create an array called $numbers containing the numbers 1 to 10. 
**Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

*/

function arrayManipulation($num_array){
    $odd_array = [];
    for($i = 0; $i < count($num_array); $i++){
       
        if($num_array[$i] % 2 != 0){
            array_push($odd_array, $num_array[$i]);
        }
    }

    print_r($odd_array);
}

$numbers = [1,2,3,4,5,6,7,8,9,10];

arrayManipulation($numbers);