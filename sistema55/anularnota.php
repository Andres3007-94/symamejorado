<?php

include_once 'token.php';

$data = array(
    "operacion" => "generar_anulacion",
	"tipo_de_comprobante" => $_POST['tipodecompro'],
	"serie" => $_POST['serianul'],
	"numero" => $_POST['numeroanul'],
	"motivo" => "ERROR DEL SISTEMA",
	"codigo_unico" => "" 
);
	
$data_json = json_encode($data);


//Invocamos el servicio de NUBEFACT
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
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta  = curl_exec($ch);
curl_close($ch);



$leer_respuesta = json_decode($respuesta, true);
if (isset($leer_respuesta['errors'])) {
	//Mostramos los errores si los hay
    echo '<br><div class="alert alert-danger">' . str_replace('PSE','SYMA PSE',$leer_respuesta['errors']) . '</div>';
} else {
	//Mostramos la respuesta
	require_once 'funciones.php';
	estadonota("Anulado",$_POST['serianul']."-".$_POST['numeroanul']);

?>

<div class="alert alert-success">
Comprobante electrónico anulado Sunat, nùmero de ticket de confirmación: <?php echo $leer_respuesta['sunat_ticket_numero']; ?>

</div>

<?php
}

?>