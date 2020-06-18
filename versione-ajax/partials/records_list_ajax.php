<?php
include __DIR__.'/../../versione-php/partials/records_list.php';

header('Content-Type: application/json');

echo json_encode($records);
?>