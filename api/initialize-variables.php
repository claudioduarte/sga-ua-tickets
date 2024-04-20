<?php
// TIMEZONE
date_default_timezone_set('Europe/Lisbon');
// FOR CHOOSING THEME COLOR
$chooseTheme = 0;
// DAY OF WEEK
$dayOfWeek = date('w');
// CURRENT TIME
$currentTime = DateTime::createFromFormat('H:i', date('H:i'));
// OPENING TIME
$openingTime = DateTime::createFromFormat('H:i', "09:29");
// CLOSING TIME
$closingTime = DateTime::createFromFormat('H:i', "17:01");
// IN PERSON - CHANGE TO FALSE TO SEE MOCK DATA
$in_person = true;