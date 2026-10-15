<?php

include_once 'token.php';

$symasunat = $order->reference_no;

$numerocomprs = substr($symasunat, 5);
$seriecompros = substr($symasunat, 0, 4); 

if (strpos($symasunat, 'F') !== false){
	 $tipodecs = 1;
		}
	elseif (strpos($symasunat, 'B') !== false){
	$tipodecs = 2;
		}

$consutlasunat = array(
    "operacion"				=> "consultar_comprobante",
    "tipo_de_comprobante"               => $tipodecs ,
    "serie"                             => $seriecompros,
    "numero"				=> $numerocomprs,  
);


$consutlarqr = json_encode($consutlasunat);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ruta);
curl_setopt(
	$ch, CURLOPT_HTTPHEADER, array(
	'Authorization: Token token="'.$token.'"',
	'Content-Type: application/json',
	)
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS,$consutlarqr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$respuesta  = curl_exec($ch);
curl_close($ch);
#a4a4a5

$leer_respuesta = json_decode($respuesta, true);
if (isset($leer_respuesta['errors'])) {
	
	//Mostramos los errores si los hay
	  $sunatenviado = '  <i  style ="color:#a4a4a5; " title ="No Enviado a la Sunat" class="fa fa-times-circle" aria-hidden="true"></i> ' ;
} else {
	
	$sunatenviado = ' <i style ="color:#023DC8; " title ="Enviado a la Sunat" class="fa fa-check-circle" aria-hidden="true"></i> '; 	
}
?>
	