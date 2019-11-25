<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new Zend\Soap\Client('http://192.168.33.10/data4/codesnippets/php_soap/example1/api.php?wsdl');
$result = $client->sayHello(['firstName' => 'World']);

echo $result->sayHelloResult;