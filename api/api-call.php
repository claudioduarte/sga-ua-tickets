<?php
$covid = true;
$json = $covid ? file_get_contents("mockdata.json") : file_get_contents("http://services.web.ua.pt/sac/senhas?format=JSON");
$data = json_decode($json, true);
?>