<?php
$address = "http://rkgit.rkgcampus.in/Home/"; //site URL
$post = "username=0131it018&pass=rkgitsucks"; //Parameters to be sent. Written like GET.
$welcomeMessage = "Welcome..."; //This is the message that is displayed when a login is successful

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'http://rkgit.rkgcampus.in/Home/'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); 
curl_setopt(CURLOPT_USERPWD, '[username]:[password]');

$content = curl_exec(); 
if (strpos($content, $welcomeMessage) !== false){ //if the welcome message displayed...
  /*
  Do whatever
  */
echo "Welcome...";

curl_close($ch); //close connections
?>