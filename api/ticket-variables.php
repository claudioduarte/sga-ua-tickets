<?php
$item = $data['items']['item'][$index];
// LETTER CALLED
$letterCalled = $item['letter'];
// NUMBER CALLED
$numberCalled = $item['latest'];
// TICKET NAME
$ticketName = $item['desc'];
// WAIT TIME
$estimatedWaitTime = $item['awt'];
// DATETIME
$date = strtotime($item['date']);
$time = date('H:i', $date);
// TICKETS WAITING
$ticketsWaiting = $item['wc'];
// DESK
$desk = $item['post_number'];
