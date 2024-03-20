<?php

$discsContent = file_get_contents('./discs-list.json');
$discsList = json_decode($discsContent);


header("Content-Type: application/json");

echo json_encode($discsList);