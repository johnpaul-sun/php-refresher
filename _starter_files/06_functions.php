<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


$add = function ($n1, $n2) {
  return $n1 + $n2;
};

// echo $add(5, 5);

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(1, 3);
