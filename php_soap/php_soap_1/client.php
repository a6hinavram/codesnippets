<?php
// Encrypted Client
$cli = new SoapClient(null, array('uri' => 'http://192.168.33.10/data4/codesnippets/php_soap/php_soap_1/', 'location' => 'http://192.168.33.10/data4/codesnippets/php_soap/php_soap_1/server.php', 'trace' => true,'encoding'=>'utf-8'));
$h = new SoapHeader('http://192.168.33.10/data4/codesnippets/php_soap/php_soap_1/', 'auth', '123456789', false, SOAP_ACTOR_NEXT);
$cli->__setSoapHeaders(array($h));
try {
echo $cli->say();
} catch (Exception $e) {
echo $e->getMessage();
}
