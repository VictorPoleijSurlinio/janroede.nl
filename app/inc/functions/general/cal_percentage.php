<?php
function cal_percentage($num_amount, $num_total) {
  $count1 = $num_amount / $num_total;
  $count2 = $count1 * 100;
  $count = number_format($count2, 0);
  return $count;
}