
<?php include "api/open-closed.php" ?>

<div class="informative-tables">
  <?php if ($closed) { ?>
    <h2 class="title" style="background-color: #B30000;">
      <span>BALCÕES ENCERRADOS</span>
    </h2>
  <?php } elseif ($open) { ?>
    <h2 class="title" style="background-color: #008000;">
      <span>BALCÕES ABERTOS</span>
    </h2>
  <?php } ?>
  <div class="content">
    <p><strong>HORÁRIO DE ATENDIMENTO PRESENCIAL<br>SEGUNDA A SEXTA</strong></p>
    <div class="available-hours">
      <h1 class="h1-heading"><strong>9H30 - 17H00</strong></h1>
    </div>
    <p>O atendimento presencial encontra-se encerrado entre <strong><u>13h00 e as 14h30.</u></strong></p>
  </div>
</div>
<div class="informative-tables">
  <h2 class="title" style="background-color: #343C55;">
    <span>AGENDAMENTO DE ATENDIMENTO PRESENCIAL</span>
  </h2>
  <div class="content">
    <p>A atual plataforma de marcação de atendimento presencial deixou de estar em funcionamento.</p>
    <p>Acede à nova plataforma de marcação SIGA: <a href="https://siga.ua.pt" target="_blank"><u>https://siga.ua.pt</u></a></p>
      <p>Mais informações sobre o <a href="https://www.ua.pt/pt/atua" target="_blank"><u>atua - atendimento Universidade de Aveiro</u></a></p>
  </div>
</div>
