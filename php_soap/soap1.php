<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache 

try {  
  $client = new SoapClient("helloworld.wsdl");
  $result = $client->answerMe("1"); 
  print($result); 
} catch (SoapFault $exception) {  
  echo $exception;  
}  

?>