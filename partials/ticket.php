<div class="block <?= $theme ?> fl">
  <h2 class="title"><?= substr($ticketName, 0, 39); ?></h2>
  <div class="content">
    <div class="ticket">
      <span><?= $letterCalled ?></span>
      <span><?= $numberCalled ?></span>
    </div>
  </div>

  <ul class="ticket-details">
    <div class="details-content">
      <table>
        <tr>
          <td class="details-content-title">Balcão</td>
          <td class="details-content-subtitle"><?= $desk ?></td>
        </tr>
        <tr>
          <td class="details-content-title">Hora Atendida</td>
          <td class="details-content-subtitle"><?= $time; ?></td>
        </tr>
        <tr>
          <td class="details-content-title">Tempo de Espera</td>
          <td class="details-content-subtitle"><?= gmdate("H\hi\m", $estimatedWaitTime); ?></td>
        </tr>
        <tr>
          <td class="details-content-title">Senhas em Espera</td>
          <td class="details-content-subtitle"><?= $ticketsWaiting ?></td>
        </tr>
      </table>
    </div>
  </ul>
</div>