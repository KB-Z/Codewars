<?php
$n = 5
function is_prime(int $n): bool {
  if ($n == 1) {
  return false;
  }
  if ($n == 2) {
  return true;
  }
  $x = sqrt($n);
  $x = floor($n);
  for ($i = 2; $i <= $x; $i++) {
    if ($n % $i == 0) {
    break;
    }
  }
  if($x == $i-1) {
  return true;
  } else {
  return false;
  }
}
?>
