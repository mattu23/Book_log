<?php 

$num = 0;

while (true) {
  if($num <= 50) {
    echo $num . PHP_EOL;
    $num += 10;
  } else {
    break;
  }
}

