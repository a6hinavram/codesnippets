<?php

require_once('../simple_soap_server_class.php');

$server = new SoapServer('http://192.168.33.10/data4/codesnippets/php_soap/php_soapclient_example/wsdl/simple_service_definition.wsdl');
$server->setClass('SimpleSoapServer');
$server->handle();
