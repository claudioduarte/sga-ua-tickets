<?php $GLOBALS["navigation"] = "Senhas" ?>
<?php include "api/fetch-api.php" ?>

<!DOCTYPE html>
<html>

<head>
  <title>SGA 2.0 | O todo académico</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Cláudio Duarte">
  <meta name="description" content="Consulta as Senhas dos Balcões dos Serviços de Gestão Académica da Universidade de Aveiro">
  <meta name="keywords" content="Universidade de Aveiro, SGA, Académicos, Cláudio Duarte">
  <!-- FACEBOOK OPEN GRAPH -->
  <meta name="og:site_name" content="SGA 2.0 | O todo académico">
  <meta name="og:image" content="assets/img/social-image.png">
  <meta name="og:url" content="https://senhas.claudioduarte.pt/">
  <meta name="og:description" content="Consulta as Senhas dos Balcões dos Serviços de Gestão Académica da Universidade de Aveiro">
  <!-- FAVICON -->
  <link href="assets/img/favicon.png<?= date("Ymdhis") ?>" rel="shortcut icon">
  <!-- CSS -->
  <link href="assets/css/style.css?v=<?= date("Ymdhis") ?>" rel="stylesheet" type="text/css">
  <?php include "partials/scripts.php" ?>
</head>

<body>
  <?php include "partials/navbar.php" ?>
  <main class="wrapper">
    <div class="ticket-table group">
      <header class="cd-header">
        <a href="/"><img class="logo" src="assets/img/logo.png"></a>
        <a href="/"><img class="logo-mobile" src="assets/img/logo-mobile.png"></a>
        <a href="#" class="cd-3d-nav-trigger">Menu<span></span></a>
      </header>
      <?php // include "api/generate-tickets.php"; ?>
      <?php include "partials/covid-19-appointment.php"; ?>
    </div>

    <div class="footer">
      &copy; <?php echo date("Y"); ?> Developed by <a href="https://claudioduarte.pt" target="_blank"><img src="assets/img/cd.png" style="vertical-align: sub;"></a> & Powered by <a href="http://api.web.ua.pt/" target="_blank">api.web.ua.pt</a>
      <?php include "partials/buy-me-a-coffee.php"; ?>
    </div>
  </main>
</body>

</html>