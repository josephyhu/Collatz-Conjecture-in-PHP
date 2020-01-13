<?php
$stdin = fopen('php://stdin', 'r');
$n = 0;
$step = 0;

while ($n < 2 || !is_int($n)) {
  echo 'Enter an integer greater than 1 ';
  $n = intval(trim(fgets($stdin)));
}

echo $n . "\n";
while ($n !== 1) {
  if ($n % 2 === 0) {
    $n = $n/2;
  } else {
    $n = 3 * $n + 1;
  }
  $step++;
  echo "Step: " . $step . " n: " . $n . "\n";
}