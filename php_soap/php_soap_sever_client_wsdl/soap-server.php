<?php
ini_set( "soap.wsdl_cache_enabled", 0 );
ini_set( 'soap.wsdl_cache_ttl', 0 );
function login( $login, $password )
{
  return "some string";
}
function doFilter( $params )
{
  return "some string";
}
$server = new SoapServer( "http://192.168.33.10/data4/codesnippets/php_soap/php_soap_sever_client_wsdl/organization.wsdl" );
$server->addFunction( "login" );
$server->addFunction( "doFilter" );
$server->handle();
?>