<?php
$ruc = $customer->vat_no;
$ruta = $biller->cf1;
$token = $biller->cf2;
 $direc = $customer->company;
 $adrs = $customer->address;
 $numerounico =  $inv->id;
 $motivonota =  $inv->note;
 $comprobanteaso =  $inv->staff_note;
 $emailanta = $customer->email;
 $totales = $this->sma->$return_sale ? (($inv->total )+($return_sale->total )) : ($inv->total );
 $totaligv = $this->sma->$return_sale ? (($inv->product_tax)+($return_sale->product_tax )) : ($inv->product_tax );
 $totalconigv =  $this->sma->$return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding);
 
	$numerocompr = substr($comprobanteaso, 5);
	$seriecompro = substr($comprobanteaso, 0, 4); 

	if (strpos($comprobanteaso, 'F') !== false){
	 $tipodenota = 1;
		}
	elseif (strpos($comprobanteaso, 'B') !== false){
	$tipodenota = 2;
		}
 
  
 // GENERAR LA NOTA DE CREDITO
	$tipod = "3";
	
    $tabla="sma_enota".$biller->cf6;
	
	if (strlen($ruc) === 8){
	 $tdedo = "1";
	 $seried = $biller->cf4;
		}
	elseif (strlen($ruc) === 11) {
	$tdedo = "6";
	$seried =$biller->cf5;
		}
		
	$txtfe = "NOTA DE CREDITO ELECTRÓNICA";
    require_once 'funciones.php';
  
    insertarboleta($seried,$tabla,$numerounico);
    $res=maxi($tabla);
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];
    
	rucenotas($customer->vat_no,$seried."-".$numero);








$array_final = array();

foreach ($rows as $key => $object) {

$productypes =  $object->product_type;
 $tipodes = str_replace(array("standard","combo","service"), array("NIU","NIU","ZZ") , $productypes);	
 $codigoparasunat =  $object->second_name;
 $nombreproducto =  $object->product_name . "-". $object->serial_no;
 $cantidaddeproducto =  $object->quantity ;
 $preciosinigvsun1 =  $object->subtotal ;
 $igvdelproducto =   $object->item_tax ;
 $preciosinigv =  $object->net_unit_price ;
 $precioconigv =  $object->unit_price ;
 $preciosinigvsun =  $precioconigv * $cantidaddeproducto ;
 $subtotalytotal =  $object->subtotal ;
 $descuentoproducto =  $object->item_discount ;
 $subtotalanta = ($preciosinigv * $cantidaddeproducto) - $descuentoproducto;

    $publicar = array(

     		"unidad_de_medida"          => $tipodes,
							"codigo"                    => $codigoparasunat,
							"descripcion"               => $nombreproducto,
							"cantidad"                  => $cantidaddeproducto,
							"valor_unitario"            => $preciosinigv,
							"precio_unitario"			=> $precioconigv,
							"descuento"    				=> $descuentoproducto,
							"subtotal"                  => $subtotalanta,
							"tipo_de_igv"               => "1",
							"igv"                       => $igvdelproducto,
							"total"                     => $subtotalytotal,
							"anticipo_regularizacion"   => "false",
							"anticipo_documento_serie"  => "",
							"anticipo_documento_numero" => "",
            
    );

    array_push($array_final, $publicar);
}

 
$data = array(
    "operacion"				=> "generar_comprobante",
    "tipo_de_comprobante"               => $tipod ,
    "serie"                             => $seried,
    "numero"				=> $numero,
    "sunat_transaction"			=> "1",
    "cliente_tipo_de_documento"		=> $tdedo,
    "cliente_numero_de_documento"	=> $ruc,
    "cliente_denominacion"              => $direc,
    "cliente_direccion"                 => $adrs,
    "cliente_email"                     => $emailanta,
    "cliente_email_1"                   => "",
    "cliente_email_2"                   => "",
    "fecha_de_emision"                  => date('d-m-Y'),
    "fecha_de_vencimiento"              => "",
    "moneda"                            => "1",
    "tipo_de_cambio"                    => "",
    "porcentaje_de_igv"                 => "18.00",
    "descuento_global"                  => "",
    "descuento_global"                  => "",
    "total_descuento"                   => "",
    "total_anticipo"                    => "",
    "total_gravada"                     => $totales ,
    "total_inafecta"                    => "",
    "total_exonerada"                   => "",
    "total_igv"                         => $totaligv ,
    "total_gratuita"                    => "",
    "total_otros_cargos"                => "",
    "total"                             => $totalconigv,
    "percepcion_tipo"                   => "",
    "percepcion_base_imponible"         => "",
    "total_percepcion"                  => "",
    "total_incluido_percepcion"         => "",
    "detraccion"                        => "false",
    "observaciones"                     => "",
    "documento_que_se_modifica_tipo"    => $tipodenota,//PARA NOTA DE CREDITO
    "documento_que_se_modifica_serie"   => $seriecompro,//PARA NOTA DE CREDITO
    "documento_que_se_modifica_numero"  => $numerocompr,//PARA NOTA DE CREDITO
    "tipo_de_nota_de_credito"           => $motivonota, //PARA NOTA DE CREDITO
    "tipo_de_nota_de_debito"            => "",
    "enviar_automaticamente_a_la_sunat" => "true",
    "enviar_automaticamente_al_cliente" => "false",
    "codigo_unico"                      => "false",
    "condiciones_de_pago"               => "",
    "medio_de_pago"                     => "",
    "placa_vehiculo"                    => "",
    "orden_compra_servicio"             => "",
    "tabla_personalizada_codigo"        => "",
    "formato_de_pdf"                    => "",
	"items" => $array_final,
);
	
$data_json = json_encode($data);

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
    echo '<br><div class="alert alert-success">' . str_replace('PSE','SYMA PSE',$leer_respuesta['errors']) . '</div>';
} else {require_once 'funciones.php';
	//Mostramos la respuesta
	alterreferencenota($inv->reference_no,$seried."-".$numero);
	alternota($seried."-".$numero,$numero,$tabla);
	estadonota("En Sunat",$seried."-".$numero);
		
?>
<h2>RESPUESTA DE SUNAT</h2>
	<br>
<div class="alert alert-success">
<?php echo $leer_respuesta['sunat_description']; ?>

</div>
<?php
}

?>
