<?php
//Soap Client
$Soap_client = new SoapClient('http://www.consignorsupport.no/ShipAdvisor/Main.asmx?WSDL');

//Soap Header
$Soap_header = new SoapHeader('SoapAuthenticator', 'ServiceAuthenticationHeader',
                        array('Username'=>'Flexerman21073', 'Password'=>'Gm15/46exRF'));

//Set the Headers of Soap Client.
$Soap_client->__setSoapHeaders($Soap_header);

//Receiver
$Receiver = array(
            'CountryCode' => 'NO',
            'PostCode' => '0580'
            );

//Shipment and goods line
$Shipment = array(
            'Shipment' => array(
            'WebShopId'=> 104,
            'CODAmount'=> 0,
            'Lines'=> array(
            'WebShopLine'=> array(
            'NumberOfPackages'=> 1,
            'PackageWeight' => 5000)
            ),
            'Shopper' => $Receiver
           ),
            'deliveryTypeOrder' => 10
          );

//Call ShipAdvisor
$FreightProducts = $Soap_client->GetFreightProductsForShipment($Shipment);

//Show result in data dump
echo "<pre>";
var_dump($FreightProducts);
echo "</pre>";
?>