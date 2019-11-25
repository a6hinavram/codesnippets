<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./nusoap-0.9.5/lib/nusoap.php');


// This is your Web service server WSDL URL address
$wsdl = "http://192.168.33.10/data4/codesnippets/php_soap/productlist.php?wsdl";

// Create client object
$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   // Display the error
   echo '<h2>Constructor error</h2>' . $err;
   // At this point, you know the call that follows will fail
   exit();
}

// Call the hello method
$result1=$client->call('hello', array('username'=>'John'));
print_r($result1).'\n';
?>