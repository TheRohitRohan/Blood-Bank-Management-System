<?php 

$now_date = date('Y-m-d');

$new_date = date('Y-m-d', strtotime($now_date . ' +2 months'));

echo "Initial date: " . $now_date . "\n";
echo "Date after adding 2 months: " . $new_date . "\n";