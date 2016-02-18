<?php
include "php/facebook.php";
//$FB_APIKEY="339554932739410";
//$FB_SECRET="8f2b6ac74a46e8bbfad235fa87bd6962";
$FB_APIKEY="407937205936019";
$FB_SECRET="7d571b24466ceea792c8cb52f9be9d23";
$fb = new FacebookRestClient($FB_APIKEY, $FB_SECRET);
//$testtoken= "AAAE00sslzVIBALaGCTpvc8nXTVYCAeeaKcxr3Mzqk2jRIM58dIuuazi0Qm23axA67Go4hvz23VlGqvuhZASMDtUO3siGO8SGKfa9VA4OJiUzVyxhU";
$testtoken= "407937205936019|2A7aD8kFbFNpPI_KjThFWnT-EuE"; // Replace this value with your Token Value
$result = $fb->call_method('facebook.auth.getSession',array('auth_token' => $testtoken, 'generate_session_secret' => true));
echo "<br /><pre>";
print_r($result);
echo $session_key = $result['session_key'];
?>