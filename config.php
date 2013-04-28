<?php
include_once("facebook-php-sdk/src/facebook.php"); //include facebook SDK
 
######### edit details ##########
$appId = '479670332068800'; //Facebook App ID
$appSecret = 'a16bb805eaded7fa889acfb0a03e36b3'; // Facebook App Secret
$return_url = 'http://localhost/FBPost/process.php';  //return url (url to script)
$homeurl = 'http://localhost/FBPost/';  //return to home
$fbPermissions = 'publish_stream,manage_pages';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

$fbuser = $facebook->getUser();
?>