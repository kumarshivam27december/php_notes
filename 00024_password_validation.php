<?php
function pass_validation($password) {
    $minLength = 8;
    $maxLength = 20;
    $uppercase = preg_match('/[A-Z]/', $password);
    $lowercase = preg_match('/[a-z]/', $password);
    $number = preg_match('/\d/', $password);
    $specialChar = preg_match('/[\W_]/', $password); 
    
    if (strlen($password) < $minLength || strlen($password) > $maxLength) {
        return "Password must be between 8 and 20 chars long.";
    }
    
    if (!$uppercase) {
        return "one uppercase letter missing.";
    }
    
    if (!$lowercase) {
        return "one lowercase letter missing.";
    }
    
    if (!$number) {
        return "one number missing.";
    }
    
    if (!$specialChar) {
        return "special character is missing.";
    }
    
    return "Password is strong.";
}

$message = pass_validation("abc@123");
echo "$message";