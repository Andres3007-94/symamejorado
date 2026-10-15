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
mysqli_query($conn,"insert into sma_eguia values(null,'$sale_id','$reference','sin guia')'");

}
function alterguia($id,$link)
{
  $conn = dbsyma();
    
 mysqli_set_charset($conn,'utf8');
  $respuesta=
mysqli_query($conn,"update sma_deliveries set note='$link' where id='$id' ");

}
function maxi()
    {$conn = dbsyma ();
 mysqli_set_charset($conexion,'utf8');
   
 $respuesta=mysqli_query($conn,"select max(id) as id from sma_eguia ");
return $respuesta;
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

var_dump($delivery);
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
$fecha=$delivery->date;

$items=getventaitemsof($delivery->sale_id);
insertarguia($delivery->sale_id,$delivery->sale_reference_no);
 $res=maxi();
    foreach ($res as $respuesta ) {
        $respuesta['id'];
    }
     $numero=$respuesta['id'];
$array_final = array();

foreach ($items as $item ) {


    $publicar = array(

        "unidad_de_medida"          => "NIU",
              "codigo"                    => "",
              "descripcion"               => $item['product_name'],
              "cantidad"                  => $item['quantity'],
            
    );

    array_push($array_final, $publicar);
}

 
$data = array(
    "operacion"       => "generar_guia",
    "tipo_de_comprobante"               => "7" ,
    "serie"                             => "TPP1",
    "numero"        =>$numero , 
    "cliente_tipo_de_documento"   => $tipod,
    "cliente_numero_de_documento" => $vat_no,
    "cliente_denominacion"              => $company,
    "cliente_direccion"                 => $address,
    "cliente_email"                     => "ligasportperu@gmail.com",
    "cliente_email_1"                   => "",
    "cliente_email_2"                   => "",
    "fecha_de_emision"                  => date("d-m-Y", strtotime($fecha)),
    "observaciones"                     => "Referencia:".$delivery->sale_reference_no,
    "motivo_de_traslado"                => "01",
    "peso_bruto_total"                  => "01",
    "numero_de_bultos"                  => "01",
    "tipo_de_transporte"                => "01",
    "fecha_de_inicio_de_traslado"       => date("d-m-Y", strtotime($fecha)),
    "transportista_documento_tipo"      => $tipog,
    "transportista_documento_numero"    =>$delivery->delivered_by,
    "transportista_denominacion"        => $delivery->do_reference_no,
    "transportista_placa_numero"        => "-",
    "conductor_documento_tipo"          =>$tipog,
    "conductor_documento_numero"        => $delivery->delivered_by,
    "conductor_denominacion"            => $delivery->do_reference_no,
    "punto_de_partida_ubigeo"           => "150101",
    "punto_de_partida_direccion"        => " JR. LUIS GIRIBALDI NRO. 885 INT. 07 URB. EL PORVENIR LIMA - LIMA - LA VICTORIA ",
    "punto_de_llegada_ubigeo"           => $delivery->received_by,
    "punto_de_llegada_direccion"        => $delivery->address,
    "enviar_automaticamente_a_la_sunat" => "true",
    "enviar_automaticamente_al_cliente" => "false",
    "codigo_unico"                      => "TTP1-".$numero,
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
    
echo "!!!!Error en la generacion de la guia ".$leer_respuesta['errors'];
} 

else {
  $link=$leer_respuesta['enlace'];
 alterguia($delivery->id,$link);
  
  
  
}
var_dump($respusta);
echo $delivery->received_by;
$link=$leer_respuesta['enlace'];

 




 

?>
