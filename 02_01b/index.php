<?php
echo 'Create your list of choices: ' . "\n\n";

$choices = array();
do {
    $choice = readline('Enter your choice: ');
    $choices[] = $choice;
} while ('0' != end($choices));



array_pop($choices);

echo 'and the decision is...' . $choices[array_rand($choices)];