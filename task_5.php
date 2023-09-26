<?php

/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). 
Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

*/

function generatePassword($length){
    $password_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    
    $password = substr( str_shuffle( $password_chars ), 1, $length );

    echo $password;
}


generatePassword(12);
