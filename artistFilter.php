<?php 
include __DIR__.'/versione-php/partials/records_list.php';
$currentArtist = $_POST['artist'];
$artist_records = [];
foreach ($records as $recordInfo) {
  if ($currentArtist == $recordInfo['author']) {
    array_push($artist_records, $recordInfo);
  }
}
header('Content-Type: application/json');
echo json_encode($artist_records);
?>
