<?php

# Input:
$seconds = readline("Enter the number of seconds: ");

# Process:
$hours = floor($seconds / 3600);
$minutes = floor(($seconds - ($hours * 3600)) / 60);
$seconds = $seconds - ($hours * 3600) - ($minutes * 60);

$time = $hours . ":" . $minutes . ":" . $seconds;

# Output:
echo "The time is: " . $time . "\n";