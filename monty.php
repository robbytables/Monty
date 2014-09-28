<?php

$doors = [0,0,0];
$stay = 0;
$switch = 0;

for($i = 0; $i < 10000; $i++){
  // Assign a random door
  $doors[rand(0,2)] = 1;

  // Pick a random door
  $choice = $doors[rand(0,2)];

  if($choice === 1) {
    $stay++;
  } else {
    $switch++;
  }

  $doors=[0,0,0];
}

echo(PHP_EOL . 'Simulations: 10,000' . PHP_EOL . 'Stay Wins: ' . $stay . PHP_EOL . 'Switch Wins: ' . $switch . PHP_EOL)

?>
