<?php
require '../nusoap-0.9.5/lib/nusoap.php';
require 'data.php';

$server = new nusoap_server(); // Create a instance for nusoap server

$server->configureWSDL("Soap Demo","urn:soapdemo"); // Configure WSDL file

$server->register(
	"get_price", // name of function
	array("name"=>"xsd:string"),  // inputs
	array("return"=>"xsd:integer")   // outputs
);

$server->register(
	"test_message", // name of function
	array(),  // inputs
	array("return"=>"xsd:string")   // outputs
);

$server->service(file_get_contents("php://input"));