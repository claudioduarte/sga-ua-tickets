<?php
include "api/initialize-variables.php";

if ($currentTime >= $closingTime) {
  include "partials/ticket-desks-closed.php";
} else {
  if ($totalItems > 0) {
    while ($index <= ($totalItems - 1)) {
      switch ($chooseTheme) {
        case 0:
          $theme = "red";
          break;
        case 1:
          $theme = "orange";
          break;
        case 2:
          $theme = "purple";
          break;
        case 3:
          $theme = "green";
          break;
        case 4:
          $chooseTheme = 0;
          $theme = "red";
          break;
      }

      include "api/ticket-variables.php";
      include "partials/ticket.php";

      $index++;
      $chooseTheme++;
    }
  } else {
    include "partials/awaiting-ticket-call.php";
  }
}
