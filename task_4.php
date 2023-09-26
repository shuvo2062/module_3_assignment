<?php 

/*

Task 4: Multidimensional Array

**Create a multidimensional array called $studentGrades to store the grades of three students. 
**Each student has grades for three subjects: Math, English, and Science. 
**Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

*/

$studentGrades = array(
    array('math' => 78, 'english' => 85, 'science' => 92),
    array('math' => 98, 'english' => 93, 'science' => 88),
    array('math' => 67, 'english' => 52, 'science' => 72)
);

function gradeAverage($grades){
    $avg_grades = [];
    foreach($grades as $grade){
        $sum = 0;
        $avg = 0;
        foreach($grade as $key => $value){
            $sum += $value;
        }

        $avg = $sum / count($grade);

        array_push($avg_grades, $avg);
    }

    print_r($avg_grades);
}

gradeAverage($studentGrades);