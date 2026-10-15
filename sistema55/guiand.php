<?php
define('BASEPATH', "foobar");
require ('app/config/database.php');
global $hostname,$database,$username,$password;
foreach ($db as $key ) {
 
  $hostname=$key['hostname'];
  $database=$key['database'];
  $username=$key['username'];
  $password=$key['password'];
}

global $conn;
global $fecha;
  $fecha=strftime( "%Y-%m-%d %H:%M:%S", time() );

function dbsyma () {
    static $conn;
    global $hostname,$database,$username,$password;
    if ($conn===NULL){ 
        $conn = mysqli_connect ("".$hostname."", "".$username."", "".$password."", "".$database.""); //LOCALHOST 
     mysqli_set_charset($conn,'utf8');
 
    }
    return $conn;
}


function insertarguia($sales_id,$reference)
{$conn = dbsyma();
    
 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"insert into sma_eguia values(null,'$reference','sin guia','$sales_id')");

}
function alterguia($id,$link)
{
  $conn = dbsyma();
    
 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"update sma_eguia set link='$link' where sales_id='$id' ");

}
function maxi()
    {$conn = dbsyma ();
 mysqli_set_charset($conexion,'utf8');
   
 $respuesta=mysqli_query($conn,"select max(id) as id from sma_eguia ");
return $respuesta;
}

//consulta si exite guia
function getguia($idfactura)
    {$conn = dbsyma ();
 mysqli_set_charset($conexion,'utf8');
   
 $respuesta=mysqli_query($conn,"SELECT EXISTS(SELECT * from sma_eguia WHERE sales_id='$idfactura') as RESULT");
 foreach($respuesta as $respu)
 {$resultadp=$respu['RESULT'];}
return $resultadp;

}
function getnumeroguia($idfactura)
    {$conn = dbsyma ();
 mysqli_set_charset($conexion,'utf8');
   
 $respuesta=mysqli_query($conn,"SELECT id from sma_eguia WHERE sales_id='$idfactura'");
 foreach($respuesta as $respu)
 {$numero=$respu['id'];}
return $numero;
}
function getlinkguia($idfactura)
    {$conn = dbsyma ();
 mysqli_set_charset($conexion,'utf8');
   
 $respuesta=mysqli_query($conn,"SELECT link from sma_eguia WHERE sales_id='$idfactura'");
 foreach($respuesta as $respu)
 {$linki=$respu['link'];}
return $linki;
}




function getVentas($id)
{$conn = dbsyma();
    
 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"select * from sma_sales where id='$id'");
return $respuesta;
}
function getventaitemsof($id)
{$conn = dbsyma();
 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"select * from sma_sale_items where sale_id='$id'");


return $respuesta;
}

function getfacturador($id)
{$conn = dbsyma();

 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"select * from sma_companies where id='$id'");
return $respuesta;
}



//verifica si la guia ya fue enviada
if(getguia($delivery->sale_id)>0)
{
    $link=getlinkguia($delivery->sale_id);
    
    
    if($link==="sin guia")
    {echo "ddd";
        
$idventa=$delivery->sale_id;
//echo $idventa;
$respuesta=getVentas($idventa);
foreach ($respuesta as $res) {$biller=$res['biller_id'];$customer=$res['customer_id'];}
$respuesta=getfacturador($biller);
foreach ($respuesta as $res) {$ruta=$res['cf1'];$token=$res['cf2'];}
$respuesta=getfacturador($customer);
foreach ($respuesta as $res) {$address=$res['address'];$vat_no=$res['vat_no'];$company=$res['company'];}


 if (strlen($vat_no) === 8){
     $tipod = "1";}
if (strlen($vat_no) === 11){
     $tipod = "6";}
if (strlen($delivery->delivered_by) === 8){
     $tipog = "1";}
if (strlen($delivery->delivered_by) === 11){
     $tipog = "6";}
     
else{
     $tipog = "-";}
//$fecha=$delivery->date;

$items=getventaitemsof($delivery->sale_id);

     $numero=getnumeroguia($delivery->sale_id);




$array_final = array();
$cantidad=0;
foreach ($items as $item ) {


    $publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => $item['product_name'],
              "descripcion"               => $item['product_name'],
              "cantidad"                  => $item['quantity'],
            
    );
$cantidad=$cantidad+$item['quantity'];
    array_push($array_final, $publicar);
}
 
 if(strlen($delivery->doctransportista)==11)
 {$tipotrans=6;}
else{$tipotrans=1;}

    $dato = array(
    "operacion"       => "generar_guia",
    "tipo_de_comprobante"               => "7" ,
    "serie"                             => "TTT2",
    "numero"        =>$numero , 
    "cliente_tipo_de_documento"   => $tipod,
    "cliente_numero_de_documento" => $vat_no,
    "cliente_denominacion"              => $company,
    "cliente_direccion"                 => $address,
    "cliente_email"                     => "ligasportperu@gmail.com",
    "cliente_email_1"                   => "",
    "cliente_email_2"                   => "",
    "fecha_de_emision"                  => date("d-m-Y", strtotime($fecha)),
    "observaciones"                     =>  "Referencia:".$delivery->sale_reference_no,"  Unidades:".$cantidad,
    "motivo_de_traslado"                => "01",
    "peso_bruto_total"                  => $delivery->peso,
    "peso_bruto_unidad_de_medida"       => "KGM",
    "numero_de_bultos"                  => $delivery->bultos,
    "tipo_de_transporte"                => "01",
    "fecha_de_inicio_de_traslado"       => date("d-m-Y", strtotime($fecha)),
    "transportista_documento_tipo"      => $tipotrans,
    "transportista_documento_numero"    =>$delivery->doctransportista,
    "transportista_denominacion"        =>  $delivery->nomtransportista.' - '.$delivery->dirtransportista ,
    "transportista_placa_numero"        => $delivery->placa,
    "conductor_documento_tipo"          =>"1",
    "conductor_documento_numero"        =>$delivery->docconductor,
    "conductor_nombre"    => $delivery->nomconductor,
    "conductor_apellidos" =>  "- ",
    "conductor_numero_licencia"        => $delivery->licconductor,
    "punto_de_partida_ubigeo"           => "150101",
    "punto_de_partida_direccion"        => "JR. LUIS GIRIBALDI NRO. 885 INT. 07 URB. EL PORVENIR LIMA - LIMA - LA VICTORIAS",
    "punto_de_llegada_ubigeo"           => $delivery->received_by,
    "punto_de_llegada_direccion"        => $delivery->address,
    "codigo_establecimiento_punto_de_llegada" => "0000",
    "enviar_automaticamente_a_la_sunat" => "true",
    "enviar_automaticamente_al_cliente" => "FALSE",
    "codigo_unico"                      => "TTT2-".$numero,
    "formato_de_pdf"                    => "A4",
    "items"                             => $array_final
);

  
  
$data_json = json_encode($dato);

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
    
echo "!!!!Error en la generacion de la guia :---".$leer_respuesta['errors'];
} 

else {

  $consulta= array(  "operacion" =>"consultar_guia",
  "tipo_de_comprobante" => 7,
  "serie" =>"TTT2",
  "numero" => $numero
);

$datag_json = json_encode($consulta);

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
curl_setopt($ch, CURLOPT_POSTFIELDS,$datag_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuestag  = curl_exec($ch);
$leer_respuestag = json_decode($respuestag, true);
curl_close($ch);

  $link=$leer_respuestag['enlace'];
//alterguia($transfer->id,$link,"TTT1-".$numero);
  echo "Click aqui para descarga guía electronica".$link."<br>";
  echo $numero;
//var_dump($respuestag);
 alterguia($delivery->sale_id,$link);
  
  
  
}
        
    }
    
    
    
}
//en caso nose enviara
else{
     echo 'registrado pero no enviado'.getlinkguia($delivery->sale_id);

$idventa=$delivery->sale_id;
//echo $idventa;
$respuesta=getVentas($idventa);
foreach ($respuesta as $res) {$biller=$res['biller_id'];$customer=$res['customer_id'];}
$respuesta=getfacturador($biller);
foreach ($respuesta as $res) {$ruta=$res['cf1'];$token=$res['cf2'];}
$respuesta=getfacturador($customer);
foreach ($respuesta as $res) {$address=$res['address'];$vat_no=$res['vat_no'];$company=$res['company'];}


 if (strlen($vat_no) === 8){
     $tipod = "1";}
if (strlen($vat_no) === 11){
     $tipod = "6";}
if (strlen($delivery->delivered_by) === 8){
     $tipog = "1";}
if (strlen($delivery->delivered_by) === 11){
     $tipog = "6";}
     
else{
     $tipog = "-";}
//$fecha=$delivery->date;

$items=getventaitemsof($delivery->sale_id);
insertarguia($delivery->sale_id,$delivery->sale_reference_no);
 $res=maxi();
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];




$array_final = array();
$cantidad=0;
foreach ($items as $item ) {


    $publicar = array(

        "unidad_de_medida"          => "PR",
              "codigo"                    => $item['product_name'],
              "descripcion"               => $item['product_name'],
              "cantidad"                  => $item['quantity'],
            
    );
$cantidad=$cantidad+$item['quantity'];
    array_push($array_final, $publicar);
}
 
 if(strlen($delivery->doctransportista)==11)
 {$tipotrans=6;}
else{$tipotrans=1;}

    $dato = array(
    "operacion"       => "generar_guia",
    "tipo_de_comprobante"               => "7" ,
    "serie"                             => "TTT2",
    "numero"        =>$numero , 
    "cliente_tipo_de_documento"   => $tipod,
    "cliente_numero_de_documento" => $vat_no,
    "cliente_denominacion"              => $company,
    "cliente_direccion"                 => $address,
    "cliente_email"                     => "ligasportperu@gmail.com",
    "cliente_email_1"                   => "",
    "cliente_email_2"                   => "",
    "fecha_de_emision"                  => date("d-m-Y", strtotime($fecha)),
    "observaciones"                     =>  "Referencia:".$delivery->sale_reference_no,"  Unidades:".$cantidad,
    "motivo_de_traslado"                => "01",
    "peso_bruto_total"                  => $delivery->peso,
    "peso_bruto_unidad_de_medida"       => "KGM",
    "numero_de_bultos"                  => $delivery->bultos,
    "tipo_de_transporte"                => "02",
    "fecha_de_inicio_de_traslado"       => date("d-m-Y", strtotime($fecha)),
    "transportista_documento_tipo"      => $tipotrans,
    "transportista_documento_numero"    =>$delivery->doctransportista,
    "transportista_denominacion"        =>  $delivery->nomtransportista.' - '.$delivery->dirtransportista,
    "transportista_placa_numero"        => $delivery->placa,
    "conductor_documento_tipo"          =>"1",
    "conductor_documento_numero"        =>$delivery->docconductor,
    "conductor_nombre"    => $delivery->nomconductor,
    "conductor_apellidos" =>  "- ",
    "conductor_numero_licencia"        => $delivery->licconductor,
    "punto_de_partida_ubigeo"           => "150101",
    "punto_de_partida_direccion"        => "JR. LUIS GIRIBALDI NRO. 885 INT. 07 URB. EL PORVENIR LIMA - LIMA - LA VICTORIA",
    "punto_de_llegada_ubigeo"           => $delivery->received_by,
    "punto_de_llegada_direccion"        => $delivery->address,
    "codigo_establecimiento_punto_de_llegada" => "0000",
    "enviar_automaticamente_a_la_sunat" => "true",
    "enviar_automaticamente_al_cliente" => "FALSE",
    "codigo_unico"                      => "TTT2-".$numero,
    "formato_de_pdf"                    => "A4",
    "items"                             => $array_final
);

  
  
$data_json = json_encode($dato);

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
    
echo "!!!!Error en la generacion de la guia :---".$leer_respuesta['errors'];
} 

else {

  $consulta= array(  "operacion" =>"consultar_guia",
  "tipo_de_comprobante" => 7,
  "serie" =>"TTT2",
  "numero" => $numero
);

$datag_json = json_encode($consulta);

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
curl_setopt($ch, CURLOPT_POSTFIELDS,$datag_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuestag  = curl_exec($ch);
$leer_respuestag = json_decode($respuestag, true);
curl_close($ch);

  $link=$leer_respuestag['enlace'];
//alterguia($transfer->id,$link,"TTT2-".$numero);
  echo "Click aqui para descarga guía electronica".$link."<br>";
  echo $numero;
//var_dump($respuestag);
 alterguia($delivery->sale_id,$link);
  
  
  
}

//echo $delivery->received_by;
//$link=$leer_respuesta['enlace'];



}



 

?>