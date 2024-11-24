<?php

// Strings
$mainString = "Hello, welcome to PHP programming!";
$searchString = "PHP";

// Check if the substring exists
echo preg_match("/$searchString/", $mainString) ? "Found" : "Not Found";
?>
