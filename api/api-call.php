<?php
// DATA ARRAY INDEX
$index = 0;
// API CALL
$json = $inPerson ? file_get_contents("http://services.web.ua.pt/sac/senhas?format=JSON") : file_get_contents("mockdata.json") ;
// DECODE JSON
$data = json_decode($json, true);
// TOTAL ITEMS IN ARRAY
$totalItems = $data['items']['@attributes']['count'];
?>