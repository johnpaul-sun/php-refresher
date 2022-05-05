<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 2, 3, 4, 5, 66];
$fruits = array('apple', 'banana', 'car');

// print_r($fruits[0]);

$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  [
    'first_name' => 'Pong',
    'last_name' => 'Pongs',
    'email' => 'pong@pongs.com'
  ],
  [
    'first_name' => 'Tong',
    'last_name' => 'Tongs',
    'email' => 'tong@tongs.com'
  ],
  [
    'first_name' => 'Qong',
    'last_name' => 'Qongs',
    'email' => 'Qong@Qongs.com'
  ]
];

print_r(json_encode($person));
