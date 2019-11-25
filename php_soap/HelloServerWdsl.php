<?php # HelloServerWsdl.php
# Copyright (c) 2007 HerongYang.com, All Rights Reserved.
#
function hello($someone) { 
   return "Hello " . $someone . "! - With WSDL";
} 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("http://192.168.33.10/data4/codesnippets/php_soap/HelloServerWdsl.php",
      array('soap_version' => SOAP_1_2));
   $server->addFunction("hello"); 
   $server->handle(); 
?>