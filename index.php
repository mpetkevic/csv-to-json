<?php
$handle = fopen("locations.csv","r");

while (($data = fgetcsv($handle)) !== false) {
    $jsonData = json_encode($data);
    $json = file_put_contents("locations.json",$jsonData, FILE_APPEND);
}

echo "Done";

