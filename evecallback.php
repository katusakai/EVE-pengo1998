<?php
require ("data.php");
require ("Request.php");

if(isset($_GET['code'])) {
    $code = $_GET['code'];

    $url = "https://login.eveonline.com/v2/oauth/token/";
    $header = "Authorization: Basic " . base64_encode($clientId . ":" . $secretKey);
    $userAgent = "Katu Hodor";
    $fields = array(
        'grant_type' => 'authorization_code',
        'code' => $code
    );

    foreach ($fields as $key => $value){
        $fields_string .= $key . "=" . $value . "&";
    }
    rtrim($fields_string, "&");

    $resp = Request::POST($header, $userAgent, $url, $fields, $fields_string);

    $accessToken = $resp->access_token;
    $refreshToken = $resp->refresh_token;

    var_dump($resp);

} else {

}