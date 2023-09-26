<?php
/*

Task 1: String Manipulation
**Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
**Convert the string to all lowercase.
**Replace "brown" with "red" in the string.
**Print the modified text.

*/

function strManipulation($text){
    $text = strtolower($text);
    if(str_contains($text, 'brown')){
        $text = str_replace('brown', 'red', $text);
    }

    echo $text.PHP_EOL;
}

$text = "The quick brown fox jumps over the lazy dog.";

strManipulation($text);

