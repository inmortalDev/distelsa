<?php
   require_once("/usr/share/php/nusoap/nusoap.php");   
   $soapclient = new soapclient('http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL');

  $tipo_cambio = $soapclient->TipoCambioDia();
  $valor = json_encode($tipo_cambio); 
 echo $valor;	
?>
