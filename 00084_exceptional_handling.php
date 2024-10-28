<?php
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $test = 2;

    if ($test > 1) {
        throw new Exception("Value must be 1 or below.");
    }

    echo "Value is acceptable: $test";

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' in ' . $e->getFile();
}
