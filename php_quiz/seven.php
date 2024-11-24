<?php

$date = "2012-12-21";
$newDate = date('Y-m-d', strtotime($date . ' +1 month'));
echo "Updated Date: " . $newDate;
?>
