<?php
$json = file_get_contents("http://services.web.ua.pt/sac/senhas?format=JSON");
// USE IF API NOT RETURNING RESULTS
//$json = file_get_contents("mockdata.json");
$data = json_decode($json, true);
?>