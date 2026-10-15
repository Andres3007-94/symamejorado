<?php
require "funciones.php";

$numerounico =  $inv->id;

$referencefactura = $inv->reference_no;
$ruc = $customer->vat_no;
$fex=$inv->estado_s;
$fecha=$inv->date;
$ruta = $biller->cf1;
$token = $biller->cf2;
$direc = $customer->company;
$adrs = $customer->address;
$emailanta = $customer->email;
$tipodocmodinota="";
$tiponota="";
$seriemodnota="";
$nummodnota="";
$totales = $this->sma->$return_sale ? (($inv->total )+($return_sale->total )) : ($inv->total );
$totaligv = $this->sma->$return_sale ? (($inv->product_tax)+($return_sale->product_tax )) : ($inv->product_tax );
$grantotal =  $this->sma->$return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding);

//si el documento ya tiene un estado no se reenvia
if (isset($fex) ){
         
	echo '<div class="alert alert-success"> ';
	echo $fex;
	echo '</div>';
	$fuenviadosunat = " - Enviado a la Sunat";
	$codigoqrsunat= $inv->cod_qr;
	$referencefactura = $inv->reference_no;
  echo "copy".$referencefactura;
  
  if($totales<0)
  { if (strlen($ruc) === 8){
	$txtfe = "NOTA DE CREDITO ELECTRÓNICA";
	$tipodedocumento = "Número de DNI: ";
	}
	elseif (strlen($ruc) === 11) {
	$txtfe = "NOTA DE CREDITO ELECTRÓNICA";
	 $tipodedocumento = "Número de RUC: ";
	}
	elseif (strlen($ruc) === 4) {
	$txtfe = "NOTA DE CREDITO ELECTRÓNICA";
	 $tipodedocumento = "Número de DNI: ";
	}
  elseif (strlen($ruc) <= 7 or strlen($ruc) == 9 ) {
  $txtfe = "NOTA DE PEDIDO";
   $tipodedocumento = "Número de DNI: ";
  }
	$tablassyma ='<div class="btn-group" role="group"  style="width:10%">
                      	<a target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->sgst; ?>">XML</a>
                    </div>
					<div class="btn-group" role="group"  style="width:10%">
                        <a  target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->igst; ?>">CDR</a>
                    </div>';
	$finalsyma = "<h6>Representación impresa, para ver el documento visita".'<br>'."<strong>https://pse.pe/</strong>".$biller->vat_no."<h6>";	
	
      
  }
  else{
      
      if (strlen($ruc) === 8){
	$txtfe = "BOLETA DE VENTA ELECTRÓNICA";
	$tipodedocumento = "Número de DNI: ";
	}
	elseif (strlen($ruc) === 11) {
	$txtfe = "FACTURA ELECTRÓNICA";
	 $tipodedocumento = "Número de RUC: ";
	}
	elseif (strlen($ruc) === 4) {
	$txtfe = "BOLETA DE VENTA ELECTRÓNICA";
	 $tipodedocumento = "Número de RUC: ";
	}
  elseif (strlen($ruc) <= 7) {
  $txtfe = "NOTA DE PEDIDO";
   $tipodedocumento = "Número de DNI: ";
  }
	$tablassyma ='<div class="btn-group" role="group"  style="width:10%">
                      	<a target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->sgst; ?>">XML</a>
                    </div>
					<div class="btn-group" role="group"  style="width:10%">
                        <a  target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->igst; ?>">CDR</a>
                    </div>';
	$finalsyma = "<h6>Representación impresa, para ver el documento visita".'<br>'."<strong>https://pse.pe/</strong>".$biller->vat_no."<h6>";	
		
      
  }
  
  
  
  
	
}

//por si no se llena el ruc
elseif (!isset($ruc) ){
	$txtfe = "NOTA DE PEDIDO";
	$tipodedocumento = "Número de DNI: ";
}
//en caso el documento no tenga un estado
else{
$finalsyma = "<h6>Representación impresa, para ver el documento visita".'<br>'."<strong>https://pse.pe/</strong>".$biller->vat_no."<h6>";	


//condicional para notas de credito

if($totales<0  or $inv->sale_id!=null)
{$txtfe = "NOTA DE CREDITO";
  $tipod = "3";
  $referencianota=saleid($inv->sale_id);
  $referencianota=htmlspecialchars_decode($referencianota);
  $datos=explode( "-",$referencianota);
if($totales<0  or $inv->sale_id==null)
{$referencianota=htmlspecialchars_decode($inv->note);

  $datos=explode( "-",$referencianota);
  $seriemodnota=$datos[0];
  $nummodnota=$datos[1];
}
  
 
  
    //NOTA RUC
  if (strlen($ruc) === 11)
  {$tdedo = "6";
   $seried = $biller->cf5;
  $txtfe = "NOTA DE CREDITO";
   
   $tabla="sma_enotaf".$biller->cf6;//OJO
   $tipodedocumento = "Número de RUC: ";
   $tipodocmodinota="1";
   if (isset($payments->reference_no)) {
     $tiponota=$payments->reference_no;
   }
   else{
    $tiponota="4";
   }
   
   insertarfactura($seried,$tabla,$numerounico);
   $res=maxi($tabla);
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];

     alterreferenceidnota($inv->id,"NC ".$seried."-".$numero);
     
  }
//NOTA de credito BOLETA
  if (strlen($ruc) === 8 or strlen($ruc)===4)
  {  $tdedo = "1";
  $seried =$biller->cf4;
    $tabla="sma_enotab".$biller->cf6;
  
 $txtfe = "NOTA DE CREDITO";
  $tipodedocumento = "Número de DNI: ";
  $tipodocmodinota="2";
  if (isset($payments->reference_no)) {
     $tiponota=$payments->reference_no;
   }
   else{
    $tiponota="4";
   }

  insertarfactura($seried,$tabla,$numerounico);
  $res=maxi($tabla);
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];
     alterreferenceidnota($inv->id,"NC ".$seried."-".$numero);
 
    
  }
  
   if (strlen($ruc) <= 7 or strlen($ruc)==9)
  { $txtfe = "NOTA DE DEVOLUCION";
   $tipodedocumento = "Número de DNI: ";
    alterreferenceid($inv->id);}
}




else{


if ((strlen($ruc) === 8 or strlen($ruc)===4) && $inv->tipocpe =="BOLETA"){
      if(strlen($ruc) === 8) 
      {$tdedo = "1";}
      else if($ruc='0000')
      {$tdedo = "-";}
    $tipod = "2";  
	$seried =$biller->cf4;
    $tabla="sma_eboleta".$biller->cf6;
	
	$txtfe = "BOLETA DE VENTA ELECTRÓNICA";
	$tipodedocumento = "Número de DNI: ";

  
    insertarboleta($seried,$tabla,$numerounico);
    $res=maxi($tabla);
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];
    alterreference($inv->reference_no,$seried."-".$numero,$customer->vat_no);
    alterboleta($seried."-".$numero,$numero,$tabla);

} 

elseif (strlen($ruc) === 11 && $inv->tipocpe =="FACTURA") {
  $tipod = "1";
   $seried = $biller->cf5;
   $txtfe = "FACTURA ELECTRÓNICA";
   $tdedo = "6";
   $tabla="sma_efactura".$biller->cf6;
   $tipodedocumento = "Número de RUC: ";



   insertarfactura($seried,$tabla,$numerounico);
   $res=maxi($tabla);
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];
    alterreference($inv->reference_no,$seried."-".$numero,$customer->vat_no);
    alterfactura($seried."-".$numero,$numero,$tabla);

}


elseif ( $inv->tipocpe =="NOTA" OR $inv->tipocpe =="" ) {
 $txtfe = "NOTA DE PEDIDO";
   $tipodedocumento = "Número de DNI/RUC: ";
   $referencefactura = $inv->id;
   alterreferenceid($inv->id);
   $numero=$inv->id;
   $seried="NOTA";
}

}







$array_final = array();
$totaligv = 0;//OJO
$icbper = 0;
$inafecto = 0;
$total_discount = $inv->order_discount;


foreach ($rows as $key => $object) {

   // echo "certification invalidated response time exhausted, certification is disabled for this ip address [Error 029]";
 $productypes =  $object->product_type;
 $tipodes = str_replace(array("standard","combo","service"), array("NIU","NIU","ZZ") , $productypes);	
 $codigoparasunat =  $object->second_name;
 $nombreproducto =  $object->product_name . "-". $object->serial_no;
 $cantidaddeproducto =  $object->quantity ;
 $preciosinigvsun1 =  $object->subtotal ;
 $real_unit_price= $object->real_unit_price ;

 $igvdelproducto =   $object->item_tax ;
 $preciosinigv =  $object->net_unit_price ;
 $precioconigv =  $object->unit_price ;
 $preciosinigvsun =  $precioconigv * $cantidaddeproducto ;
 $subtotalytotal =  $object->subtotal ;
 $descuentoproducto =  $object->item_discount ;
 $subtotalanta = ($preciosinigv * $cantidaddeproducto) ;


if($igvdelproducto == 0){
    $tipoIgv = 9;
    $inafecto += $precioconigv * $cantidaddeproducto;

 }
 if($precioconigv == 0){
    $tipoIgv = 6;
     $gratuita1=0;
     $gratuita1 += $real_unit_price * $cantidaddeproducto;
     if($cantidaddeproducto<0){
      $gratuita += $real_unit_price * $cantidaddeproducto*-1;
     }
     else{
      $gratuita += $real_unit_price * $cantidaddeproducto;
     }
    
    $descuentoproducto="";
    $subtotalytotal=$gratuita1;
    $subtotalanta=$gratuita1;
    $preciosinigv=$real_unit_price;
    $precioconigv=$real_unit_price;
    $igvdelproducto=0;

 }
 else{
    $tipoIgv = 1;
    $totaligv += $igvdelproducto;
 }
 if($object->category_id == 1){
    $icbper += 0.1 * $cantidaddeproducto ;
    $impuesto_bolsa_item = $cantidaddeproducto * 0.1;
 }


//EN CASO DE DEVOLUCIONES O NOTAS DE CREDITO
if($totales<0 or $cantidaddeproducto<0)
{if($cantidaddeproducto<0){$publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => "531117000",
              "descripcion"               => $nombreproducto,
              "cantidad"                  => $cantidaddeproducto*-1,
              "valor_unitario"            => $preciosinigv,
              "precio_unitario"     => $precioconigv,
              "descuento"           => "",
              "subtotal"                  => $subtotalanta*-1,
              "tipo_de_igv"               => $tipoIgv,
              "igv"                       => $igvdelproducto*-1,
              "total"                     => $subtotalytotal*-1,
              "anticipo_regularizacion"   => "false",
            
            
    );}

if($totales<0  or $inv->sale_id==null)
{
  $publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => "531117000",
              "descripcion"               => $nombreproducto,
              "cantidad"                  => $cantidaddeproducto,
              "valor_unitario"            => $preciosinigv,
              "precio_unitario"     => $precioconigv,
              "descuento"           => "",
              "subtotal"                  => $subtotalanta*-1,
              "tipo_de_igv"               => $tipoIgv,
              "igv"                       => $igvdelproducto*1,
              "total"                     => $subtotalytotal*-1,
              "anticipo_regularizacion"   => "false",
            
            
    );
}

else{$publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => "531117000",
              "descripcion"               => $nombreproducto,
              "cantidad"                  => $cantidaddeproducto,
              "valor_unitario"            => $preciosinigv*-1,
              "precio_unitario"     => $precioconigv*-1,
              "descuento"           => "",
              "subtotal"                  => $subtotalanta*-1,
              "tipo_de_igv"               => $tipoIgv,
              "igv"                       => $igvdelproducto*-1,
              "total"                     => $subtotalytotal*-1,
              "anticipo_regularizacion"   => "false",
            
            
    );}

  



}
    
    else {



      $publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => "531117000",
              "descripcion"               => $nombreproducto,
              "cantidad"                  => $cantidaddeproducto,
              "valor_unitario"            => $preciosinigv,
              "precio_unitario"     => $precioconigv,
              "descuento"           => "",
              "subtotal"                  => $subtotalanta,
              "tipo_de_igv"               => $tipoIgv,
              "igv"                       => $igvdelproducto,
              "total"                     => $subtotalytotal,
              "anticipo_regularizacion"   => "false",
              "anticipo_documento_serie"  => "",
              "anticipo_documento_numero" => "",
            
            
    );}

    array_push($array_final, $publicar);
}

 if( $cantidaddeproducto<0 )
 {$totales=$totales*-1;
 $totaligv=$totaligv*-1;
 $grantotal=$grantotal*-1;}
 

$totalconigv= $totales + $totaligv;
$descuento=$total_discount/($totalconigv +$gratuita);
$gravada = ($totalconigv-$totalconigv*$descuento) / 1.18;
$igv = ($totalconigv-$totalconigv*$descuento) - $gravada; 
$inafecto -= $inafecto * $descuento;
if($totales<0  or $inv->sale_id==null)
{
  $igv = ($totalconigv-$totalconigv*$descuento) - $gravada; 
  $igv=$igv*1;
}


$data = array(
    "operacion"       => "generar_comprobante",
    "tipo_de_comprobante"               => $tipod ,
    "serie"                             => $seried,
    "numero"        => $numero,
    "sunat_transaction"     => "1",
    "cliente_tipo_de_documento"   => $tdedo,
    "cliente_numero_de_documento" => $ruc,
    "cliente_denominacion"              => $direc,
    "cliente_direccion"                 => $adrs,
    "cliente_email"                     => $emailanta,
    "cliente_email_1"                   => "",
    "cliente_email_2"                   => "",
    "fecha_de_emision"                  => $fecha,
    "fecha_de_vencimiento"              => "",
    "moneda"                            => "1",
    "total_impuestos_bolsas"            => $icbper,
    "tipo_de_cambio"                    => "",
    "porcentaje_de_igv"                 => "18.00",
    "descuento_global"                  => "",
    "total_descuento"                   => "",
    "total_anticipo"                    => "",
    "total_gravada"                     => $gravada,
    "total_inafecta"                    => "",
    "total_exonerada"                   => "",
    "total_igv"                         => $igv,
    "total_gratuita"                    => $gratuita,
    "total_otros_cargos"                => "",
    "total"                             => $grantotal,
    "percepcion_tipo"                   => "",
    "percepcion_base_imponible"         => "",
    "total_percepcion"                  => "",
    "total_incluido_percepcion"         => "",
    "detraccion"                        => "false",
    "observaciones"                     => "",
    "documento_que_se_modifica_tipo"    => $tipodocmodinota,
    "documento_que_se_modifica_serie"   => $seriemodnota,
    "documento_que_se_modifica_numero"  =>$nummodnota,
    "tipo_de_nota_de_credito"           => $tiponota,
    "tipo_de_nota_de_debito"            => "",
    "enviar_automaticamente_a_la_sunat" => "true",
    "enviar_automaticamente_al_cliente" => "true",
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
  echo $leer_respuesta['errors'];
  estadoventa("No Enviado",$qrsunat,$seried."-".$numero,$linkpdf);
  $referencefactura = $seried ."-".  $numero ;
  
} else {

	$qrsunat = $leer_respuesta['cadena_para_codigo_qr'];
	$codigoqrsunat = $qrsunat;
	$aceptadaporsunat = $leer_respuesta['aceptada_por_sunat'];
	$xmlsunat = $leer_respuesta['enlace_del_xml'];
	$cdrsunat = $leer_respuesta['enlace_del_cdr'];
	$linkpdf= $leer_respuesta['enlace_del_pdf'];
	estadoventa("En Sunat",$qrsunat,$seried."-".$numero,$linkpdf);
	//xmlcdrsunat($xmlsunat,$cdrsunat,$seried."-".$numero);
	$fuenviadosunat = " - Enviado a la Sunat";
	$referencefactura = $seried ."-".  $numero ;	
	$tablassyma = '<div class="btn-group" role="group"  style="width:10%">
                      	<a target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->sgst; ?>">XML</a>
                    </div>
					<div class="btn-group" role="group"  style="width:10%">
                        <a  target="_blank" class="btn btn-block btn-primary" href="<?php echo $inv->igst; ?>">CDR</a>
                    </div>';
}
 echo $inv->tipocpe;
//Final IF
}

?> 
	