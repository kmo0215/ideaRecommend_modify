<?php
require_once 'googleapi/vendor/autoload.php';
$Developer_Key = "AIzaSyDwwnsgNGetbKPLyuBEBB4bZ3ah_UQ44ZI";

$client = new Google_Client();

$client->setDeveloperKey($Developer_Key);

$Youtube = new Google_Service_Youtube($client);
?>