<?php


define('BASEPATH', "foobar");
require ('app/config/database.php');
global $hostname,$database,$username,$password;
foreach ($db as $key ) {
  # code...
  $hostname=$key['hostname'];
  $database=$key['database'];
  $username=$key['username'];
  $password=$key['password'];
}

 //SESSION_START();
//var_dump($db['default']);
//echo $hostname;
global $conexion;
global $fecha;
  $fecha=strftime( "%Y-%m-%d %H:%M:%S", time() );

function dbsyma () {
    static $conn;
    global $hostname,$database,$username,$password;
    if ($conn===NULL){ 
        //$conn = mysqli_connect ("localhost", "root", "", "admin_syma"); //LOCALHOST | USUARIO | PASS | DB
        $conn = mysqli_connect ("".$hostname."", "".$username."", "".$password."", "".$database.""); //LOCALHOST | USUARIO | PASS | DB
		 mysqli_set_charset($conn,'utf8');
    }
    return $conn;
}
//modifica las referecnias de admin_syma


function estadonota($reference,$nota){
  $conn = dbsyma();

  $respuesta=
  mysqli_query($conn," update sma_returns set estado_s='$reference' where reference_no='$nota'"); 
  }
  
   
  function estadoventa($reference,$qr,$venta,$link){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set estado_s='$reference',cod_qr='$qr',link='$link' where reference_no='$venta'");
  } 
  
  
    function anularventa($reference,$venta){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set estado_s='$reference' where reference_no='$venta'");
	}
function xmlcdrsunat($xml,$cdr,$reference){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set sgst='$xml',igst='$cdr' where reference_no='$reference'");
} 
  
function rucenotas($rucan,$reference){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_returns set cgst='$rucan' where reference_no='$reference'");
}

function alterreferencenota($reference,$boleta){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_returns set reference_no='$boleta' where reference_no='$reference'");

}


function alterreference($reference,$boleta,$rucan){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set reference_no='$boleta',cgst='$rucan' where reference_no='$reference'");


}
function alterreferenceid($id){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set reference_no='$id' where  id='$id'");


}
function alterreferenceidnota($id,$nc){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update sma_sales set reference_no='$nc',estado_s='En Sunat' where  id='$id'");


}


function alterboleta($reference,$boleta,$tabla){
 $conn = dbsyma ();
  $respuesta=
  mysqli_query($conn," update ".$tabla." set reference='$reference' where id='$boleta'");

}
function alterfactura($reference,$boleta,$tabla){
  $conn = dbsyma();
   $respuesta=
  mysqli_query($conn," update ".$tabla." set  reference='$reference' where id='$boleta'");
}

function alternota($reference,$boleta,$tabla){
  $conn = dbsyma();
  $respuesta=
  mysqli_query($conn," update ".$tabla." set  reference='$reference' where id='$boleta'");
}
//boleta y factura

function insertarboleta($refence,$tabla,$idsales){

  $conn = dbsyma ();
  $respuesta=
  mysqli_query($conn,"insert into ".$tabla." values(null,'$refence','hola','hola','$idsales')");
// solo funciona localmente
}

function insertarfactura($refence,$tabla,$idsales){
 $conn = dbsyma ();
  $respuesta=
  mysqli_query($conn,"insert into ".$tabla." values(null,'$refence','hola','hola','$idsales')");
// solo funciona localmente

}

function insertarnota($refence,$tabla,$idsales){
 $conn = dbsyma ();
  $respuesta=
  mysqli_query($conn,"insert into ".$tabla." values(null,'$refence','hola','hola','$idsales')");
// solo funciona localmente

}

function maxi($tabla)
    {$conn = dbsyma ();
   $respuesta=mysqli_query($conn,"select max(id) as id from ".$tabla." ");
return $respuesta;
}

function saleid($saleid)
    {$conn = dbsyma ();
   $respuesta=mysqli_query($conn,"  SELECT reference_no from  sma_sales WHERE id = ".$saleid." ");

foreach ($respuesta as $respu ) {
   $referencia=$respu['reference_no']; 
  }
  return $referencia;
}





/*
function consultareference($reference){
   $conexion = mysqli_connect("localhost", "admin_syma", "admin_syma", "admin_syma");
 mysqli_set_charset($conexion,'utf8');
  $respuesta=
  mysqli_query($conexion," select * from sma_eboleta where reference='$reference'");
  $i=0;
  foreach ($respuesta as $respu) {
    $i++;
  }
  echo "hol". $i;
   var_dump($respuesta);
  if($i==0)
    {return true;}
  else
    {return false;}


   
  }


*/


/*

//funciones para el almacen de admin_syma 

function getcategoria($reference){
   $conexion = mysqli_connect("localhost", "admin_syma", "admin_syma", "admin_syma");
 mysqli_set_charset($conexion,'utf8');
  $respuesta=
  mysqli_query($conexion,"select * from sma_categories where code='$reference'");
// solo funciona localmente

foreach ($respuesta as $respu ) {
    # code...
  }
  echo "-".$respu['id'];  

$productos=getproductos($respu['id']);
return $productos;
}




function getproductos($reference){
   $conexion = mysqli_connect("localhost", "admin_syma", "admin_syma", "admin_syma");
 mysqli_set_charset($conexion,'utf8');
  $respuesta=
  mysqli_query($conexion,"SELECT p.code,p.cost,p.name as nombre,p.cf1 as USA,p.cf2 as UE,wp.quantity, w.name from sma_products p INNER JOIN sma_warehouses_products wp on p.id=wp.product_id inner join sma_warehouses w on w.id=wp.warehouse_id where p.category_id='$reference' and wp.quantity>0");
// solo funciona localmente
 
return $respuesta;
}

























//ACTUALIZACION DE DATOS

//Usuaris
function actualizarusuario($id,$nombre,$correo,$password,$cliente,$servicio,$venta,$reporte,$usuario,$cierre,$devolucion){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"update usuarios set nombre='$nombre' ,correo='$correo',password='$password',clientes=$cliente, servicios=$servicio,ventas=$venta,reportes=$reporte,usuarios=$usuario, cierre='$cierre',devolucion='$devolucion' where id='$id'");
// solo funciona localmente
 header('Location:../usuarios.php');
}

//clientes
function actualizarcliente($id,$cliente,$email,$barcode,$dni,$estado,$tipo){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"update clientes set nombre='$cliente' ,email='$email',tipo='$tipo',estado='$estado',barcode='$barcode',dni='$dni' where id='$id'");
// solo funciona localmente
header('Location:../form_validation.php');
}


function actualizarcategoria($id,$nombre,$descripcion,$entradas){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"update tipo_cliente set nombre='$nombre' ,descripcion='$descripcion',entradas='$entradas' where id='$id'");
// solo funciona localmente
header('Location:../categorias.php');
}


function actualizarservicio($id,$nombre,$descripcion,$precio){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"update servicios set nombre='$nombre' ,descripcion='$descripcion',precio='$precio' where id='$id'");
// solo funciona localmente
header('Location:../servicios.php');
}






//OBTENCION DE DATOS

function getcosto($servicio)
{global $conexion;
  $respuesta=
mysqli_query($conexion,"select * from servicios where nombre='$servicio'");
global $precio;

return $respuesta->fetch_all();
}

function getcierres()
{global $conexion;
  $respuesta=
mysqli_query($conexion,"select * from cierre ");


return $respuesta->fetch_all();
}

function getcierrefecha($fecha)
{global $conexion;
  $respuesta=
mysqli_query($conexion,"select * from cierre where fecha='$fecha'");


return $respuesta->fetch_all();
}



function getCategoriasUsuario()
{//consulta y devuelve un objeto ripo result
  global $conexion;

$respuesta=
mysqli_query($conexion,"SELECT c.categoria, c.descripcion,c.ruta from permisos p INNER JOIN categorias c on p.id_categoria=c.id_categoria WHERE usuario='".$_SESSION['usu']."'");

return $respuesta->fetch_all();
}

//obtener clientes
function getClientes()
{
  global $conexion;

$respuesta=
mysqli_query($conexion,"select * from clientes ");

return $respuesta->fetch_all();
}


function getTipoCliente()
{global $conexion;
  $respuesta=mysqli_query($conexion,"select * from tipo_cliente");
 return $respuesta->fetch_all();

}

function getClienteBarcode($barcode)
{global $conexion;
  $respuesta=mysqli_query($conexion,"select * from clientes where barcode='$barcode'");

 return $respuesta->fetch_all();

}

function getServicios()
{
  global $conexion;

$respuesta=
mysqli_query($conexion,"select * from servicios ");

return $respuesta->fetch_all();
}


function getUsuarios(){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"SELECT * from usuarios ");
// solo funciona localmente
  return $respuesta->fetch_all();
  header('Location:../usuarios.php');
}


function getCategorias()
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"select * from categorias");

return $respuesta->fetch_all();
}

function getVentas()
{//consulta y devuelve un objeto ripo result
  global $conexion;
  $respuesta=
mysqli_query($conexion,"select * from ventas");

return $respuesta->fetch_all();
}



function getVipreportes($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
  $respuesta=
mysqli_query($conexion,"SELECT *FROM vip WHERE fecha BETWEEN '$desde' AND '$hasta'");

return $respuesta->fetch_all();
}
function getVentasDevoluciones($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
  $respuesta=
mysqli_query($conexion,"SELECT *FROM devoluciones WHERE fecha BETWEEN '$desde' AND '$hasta'");

return $respuesta->fetch_all();
}



function getVentasdia($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT * FROM ventas where fecha BETWEEN '$desde' AND '$hasta'");

return $respuesta->fetch_all();
}

function getVips()
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"select * from vip");

return $respuesta->fetch_all();
}



function getEntrada($entrada)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"select entradas from tipo_cliente where nombre='$entrada'");

return $respuesta->fetch_all();
}

function getventa($id)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=

mysqli_query($conexion,"select * from ventas where id='$id'");

return $respuesta->fetch_all();
}

function getvip($id)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"select * from vip where id='$id'");

return $respuesta->fetch_all();
}


function getdisponibles($cliente,$fecha)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"select *  from vip where cliente='$cliente' and fecha like '%".$fecha."%'");


if($fila=mysqli_num_rows($respuesta))
  {if($fila==0)
    return false;
    else
      return $respuesta->fetch_all();;
  }
}


function getcontador($tabla)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT COUNT(*) FROM '$tabla'");


      return $respuesta->fetch_all();;
 
}

function getreimpresionesventas()
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT * FROM reimpresiones INNER JOIN ventas ON ventas.id=reimpresiones.id_venta WHERE reimpresiones.id_venta IS NOT NULL");


      return $respuesta->fetch_all();;
 
}

function getdevoluciones()
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT * FROM devoluciones INNER JOIN ventas ON ventas.id=devoluciones.id_venta ");


      return $respuesta->fetch_all();;
 
}


function getdevolucionesdia($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT * FROM devoluciones INNER JOIN ventas ON ventas.id=devoluciones.id_venta where devoluciones.fecha BETWEEN '$desde' AND '$hasta'");


      return $respuesta->fetch_all();
 
}

function getdevolucionesreporte($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
  $respuesta=
mysqli_query($conexion,"SELECT * FROM devoluciones INNER JOIN ventas ON ventas.id=devoluciones.id_venta  WHERE devoluciones.fecha BETWEEN '$desde' AND '$hasta'");
return $respuesta->fetch_all();

}

function getVentasreporte($desde,$hasta)
{//consulta y devuelve un objeto ripo result
  global $conexion;
  $respuesta=
mysqli_query($conexion,"SELECT *FROM ventas WHERE fecha BETWEEN '$desde' AND '$hasta'");

return $respuesta->fetch_all();
}


function getreimpresionesvip()
{//consulta y devuelve un objeto ripo result
  global $conexion;
$respuesta=
mysqli_query($conexion,"SELECT * FROM reimpresiones INNER JOIN vip ON vip.id=reimpresiones.id_ticket WHERE reimpresiones.id_ticket IS NOT NULL");


      return $respuesta->fetch_all();;
 
}








function esadmin()
{return $_SESSION['admin'];

}






//INSERTAR DATOS 
//clientes
function insertarcliente($nombre,$tipo,$estado,$barcode,$n_entradas,$email,$dni){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into clientes values(null,'$nombre','$tipo','$estado','$barcode',$n_entradas,'$email','$dni')");
// solo funciona localmente
  header('Location:../form_validation.php');
}


//Usuaris
function insertarusuario($nombre,$correo,$password,$cliente,$servicio,$venta,$reporte,$usuario,$cierre,$devolucion){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into  usuarios  values(null,'$nombre','$correo','$password','$cliente','$servicio','$venta','$reporte','$usuario','$cierre','$devolucion')");
// solo funciona localmente
 header('Location:../usuarios.php');
}

//clientes
function insertarservicio($nombre,$descripcion,$precio){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into servicios values(null,'$nombre','$descripcion',$precio,null)");
// solo funciona localmente
  header('Location:../servicios.php');
}


function insertardevoluciones($usuario,$fecha,$id_venta){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into devoluciones values(null,'$usuario','$fecha',$id_venta,null)");
// solo funciona localmente
 
}


function insertarreimpresionventa($usuario,$fecha,$id_venta){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into reimpresiones values(null,'$usuario','$fecha','$id_venta',null)");
// solo funciona localmente

}
function insertarreimpresionvip($usuario,$fecha,$id_ticket){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into reimpresiones values(null,'$usuario','$fecha',null,'$id_ticket')");
// solo funciona localmente

}




function insertartipo($nombre,$descripcion,$entrada){
  
  global $conexion;
  conectar();
  $consulta="insert into tipo_cliente values(null,'$nombre','$descripcion','$entrada')";
 $respue=mysqli_query($conexion,$consulta);
  //$mysqli = new mysqli("localhost", "admin_syma", "admin_syma", "marcelo");
// solo funciona localmente

 //$resultado = $mysqli->query($consulta);
 return true;
}

//ventas
//clientes
function insertarventas($cliente,$servicio,$pre,$can,$tot,$fecha){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into ventas values(null,'$cliente','$servicio','$pre','$can','$tot','$fecha')");

  // solo funciona localmente
 
}


function insertarventasvip($cliente,$n_pase,$pases_disponibles,$fecha,$n_pases,$servicio){
  global $conexion;

  $respuesta=
  mysqli_query($conexion,"insert into vip values(null,'$cliente','$n_pase','$pases_disponibles','$fecha','$n_pases','$servicio')");

  // solo funciona localmente
 
}



function insertarcierre($usuario,$n_ventas,$m_ventas,$n_devoluciones,$m_devoluciones,$total,$neto){
  global $conexion;
global $fecha;
$diferencia=$neto-$total;
  $respuesta=
  mysqli_query($conexion,"insert into cierre values(null,'$usuario','$fecha','$n_ventas','$m_ventas','$n_devoluciones','$m_devoluciones','$total','$neto','$diferencia')");


  // solo funciona localmente
 
}


function eliminar($id)
{global $conexion;
  conectar();
  $consulta="delete from clientes where id=$id ";
 $respue=mysqli_query($conexion,$consulta);
header('Location:../form_validation.php');
}

function eliminartipo($id)
{global $conexion;
  conectar();
  $consulta="delete from tipo_cliente where id=$id ";
 $respue=mysqli_query($conexion,$consulta);
header('Location:../form_validation.php');
}


function eliminarservicio($id)
{global $conexion;
  conectar();
  $consulta="delete from servicios where id=$id ";
 $respue=mysqli_query($conexion,$consulta);
header('Location:../servicios.php');
}


function eliminarusuario($id)
{global $conexion;
  conectar();
  $consulta="delete from usuarios where id=$id ";
 $respue=mysqli_query($conexion,$consulta);
header('Location:../usuarios.php');
}

function  maxventas()
{global $conexion;
  conectar();
  $consulta="select max(id) from ventas";
 $respue=mysqli_query($conexion,$consulta);
if($fila=mysqli_num_rows($respuesta))
  {if($fila==0)
    return false;
    else
      return $respuesta->fetch_all();
  }
}
function  maxvip()
{global $conexion;
  conectar();
  $consulta="select max(id) from vip";
 $respue=mysqli_query($conexion,$consulta);
if($fila=mysqli_num_rows($respuesta))
  {if($fila==0)
    return false;
    else
     $row = mysql_fetch_row($result);
  }
}



function validarlogin($nombre,$pass)
{global $conexion;
  conectar();
  $consulta="select * from usuarios where correo='$nombre' and password='$pass'";
  $respuesta=mysqli_query($conexion,$consulta);
  if($fila=mysqli_num_rows($respuesta))
  {if($fila==0)
    return false;
    else
    {
      $_SESSION['usu']=$nombre;
      
       $usuarios=$respuesta->fetch_all();   
        foreach ($usuarios as $usuario) {
          $_SESSION['cliente']=$usuario[4];
          $_SESSION['servicio']=$usuario[5];
          $_SESSION['venta']=$usuario[6];
          $_SESSION['reporte']=$usuario[7];
          $_SESSION['usuario']=$usuario[8];
           $_SESSION['cierre']=$usuario[9];
           $_SESSION['devolucion']=$usuario[10];
        }
      
    return true;
    }
  }
  
}
function hainiciadosesion(){
  //es necesarion para el uso de la variable de sesion
//  SESSION_START();
  //consulta si existe ka varible y devuleve el valor
return  isset($_SESSION['usu']);
}


*/
 ?>

