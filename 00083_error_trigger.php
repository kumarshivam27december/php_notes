<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$test = 2;

if ($test >= 1) {
    trigger_error("Value must be 1 or below.", E_USER_WARNING);
}
