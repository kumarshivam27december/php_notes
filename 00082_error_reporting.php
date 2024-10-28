<?php
error_reporting(E_ALL); //levels of error
// error_reporting(error_level: E_WARNING);
// error_reporting(E_ERROR);


ini_set('display_errors',1);
echo $underfined_variable;
// echo 5/0;
trigger_error("this is custome warning.",E_USER_WARNING);
