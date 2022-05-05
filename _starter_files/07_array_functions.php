<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pearl'];

// Get length
// echo count($fruits);

// Search array
// echo in_array('apple', $fruits);

// Array push
$fruits[] = 'grape';
array_push($fruits, 'papaya end'); // add to end
// print_r($fruits);
array_unshift($fruits, 'betlog start'); // add to start
// print_r($fruits);

// Remove from array
array_pop($fruits); // remove the last index
// print_r($fruits);
array_shift($fruits); // remove the first index
// print_r($fruits);
unset($fruits[2]); // remove specific and index as well
// print_r($fruits);


$numbers = range(1, 20);

$newNumbers = array_map(function ($num) {
  return "Number ${num}";
}, $numbers);
// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn ($num) => $num <= 10);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn ($carry, $num) => $num + $carry);
print_r($sum);
