<?php
$in_person = true;
$json = $in_person ? file_get_contents("mockdata.json") : file_get_contents("http://services.web.ua.pt/sac/senhas?format=JSON");
$data = json_decode($json, true);
?>