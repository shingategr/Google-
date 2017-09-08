<?php
session_start();
//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';
/*
 * Configuration and setup Google API
 */
$clientId = '609713888812-4oucsqbgiaodkvbq840grlg2a7oocv0o.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'FDLIGcIx-3NzH9DlUFM8NOZB'; //Google client secret
$redirectURL = 'http://freeteachnology.hol.es/Google+/index.php'; //Callback URL
//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to Free Teachnology');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>