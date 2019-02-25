<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');
require_once 'WSDLDocument.php';
require_once 'CalculadoraClass.php';

$wsdl = new WSDLDocument("CalculadoraClass","http://localhost/ServidorSoap/","http://localhost/ServidorSoap/");
header("Content-type: text/xml");
echo $wsdl->saveXML();
