<?php
// Authentication Server
class Test{
  public function auth($a)
  {
    if($a != '123456789'){
      Throw new SoapFault ('Server','You have no access');
    }
  }
  function say()
  {
    return 'Hi11111';
  }
}
$srv = new SoapServer(null, array('uri' => 'http://192.168.33.10/data4/codesnippets/php_soap/php_soap_1'));
$srv->setClass('Test');
$srv->handle();
