<?php
// TICKET
// LETTER CALLED
$letterCalled = $data['items']['item'][$index]['letter'];
// NUMBER CALLED
$numberCalled = $data['items']['item'][$index]['latest'];
// TICKET NAME
$ticketName = $data['items']['item'][$index]['desc'];
// WAIT TIME
$estimatedWaitTime = $data['items']['item'][$index]['awt'];
// DATETIME
$date = strtotime($data['items']['item'][$index]['date']);
$time = date('H:i', $date);
// TICKETS WAITING
$ticketsWaiting = $data['items']['item'][$index]['wc'];
// DESK
$desk = $data['items']['item'][$index]['post_number'];
