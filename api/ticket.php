<?php include "api/pre-ticket-variables.php" ?>

<?php if ($currentTime >= $closingHour) { ?>

  <?php //include "partials/ticket-desks-closed.php" ?>
  <?php include "partials/appointment.php" ?>

<?php } else { ?>

  <?php
  if ($arrayLength > 0) {

    while ($index <= ($arrayLength - 1)) {

      switch ($availableTheme) {
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
          $availableTheme = 0;
          $theme = "red";
          break;
      }
  ?>

      <?php include "api/ticket-variables.php" ?>

      <div class="block <?php echo $theme ?> fl">
        <h2 class="title"><?php echo substr($ticketName, 0, 39); ?></h2>
        <div class="content">
          <div class="ticket">
            <span><?php echo $letterCalled ?></span>
            <span><?php echo $numberCalled ?></span>
          </div>
        </div>

        <ul class="ticket-details">
          <div class="details-content">
            <table>
              <tr>
                <td class="details-content-title">Balcão</td>
                <td class="details-content-subtitle"><?php echo $desk ?></td>
              </tr>
              <tr>
                <td class="details-content-title">Hora Atendida</td>
                <td class="details-content-subtitle"><?php echo $time; ?></td>
              </tr>
              <tr>
                <td class="details-content-title">Tempo de Espera</td>
                <td class="details-content-subtitle"><?php echo gmdate("H\hi\m", $estimatedWaitTime); ?></td>
              </tr>
              <tr>
                <td class="details-content-title">Senhas em Espera</td>
                <td class="details-content-subtitle"><?php echo $ticketsWaiting ?></td>
              </tr>
            </table>
          </div>
        </ul>
      </div>

      <?php
      // INCREMENT ARRAY INDEX AND THEME
      $index++;
      $availableTheme++;
      ?>

    <?php } ?>
  <?php } else { ?>

    <?php //include "partials/no-tickets-called.php" ?>
    <?php include "partials/appointment.php" ?>

  <?php } ?>
<?php } ?>