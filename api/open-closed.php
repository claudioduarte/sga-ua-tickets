<?php
if ($dayOfWeek == 0 || $dayOfWeek == 6) {
  $closed = true;
  $open = false;
} else {
  $currentTime = date("H:i");
  if (($currentTime >= "13:00" && $currentTime <= "14:30") || ($currentTime >= "17:00" || $currentTime < "09:30")) {
    $closed = true;
    $open = false;
  } else {
    $closed = false;
    $open = true;
  }
}