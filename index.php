<?php
require_once 'CalculadoraClass.php';
    
    function sinWSDL(){
        $uri="http://localhost/";
    
        $servidor=new SoapServer(null,array("uri"=>$uri));
        $servidor->addFunction("suma");
        $servidor->addFunction("resta");
        $servidor->addFunction("fecha");
        $servidor->handle();
    }
    

    
    
    function conWSDL(){
                $servidor=new SoapServer("WSDL.xml");

          $servidor->addFunction("suma");
        $servidor->addFunction("resta");
        $servidor->addFunction("fecha");
        $servidor->handle();
        
    }
    
    
    function conWSDLyClase(){
                $servidor=new SoapServer("WSDL2.xml");

     $servidor->setClass("CalculadoraClass");
        $servidor->handle();
        
    }
    conWSDLyClase();
?>
