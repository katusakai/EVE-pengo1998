<?php
require("data.php");

$state = "klsadaklsda465asdad"; //random string
$baseUrl = "https://login.eveonline.com/v2/oauth/authorize/" . "?response_type=code&redirect_url=";
$url = $baseUrl . $callback . "&client_id=" . $clientId . "&state=" . $state;

if(headers_sent()) {
    echo '<script>window.location = ' . $url . ';</script>';
} else {
    header("Location: " . $url);
}