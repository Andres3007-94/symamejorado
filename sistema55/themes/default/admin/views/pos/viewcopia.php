<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); ?>
<?php if ($modal) { ?>
<div class="modal-dialog no-modal-header" role="document"><div class="modal-content"><div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">&times;</i></button>
    <?php
} else {
    ?><!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title><?=$page_title . " " . "No" . " " . $inv->id;?></title>
        <base href="<?=base_url()?>"/>
        <meta http-equiv="cache-control" content="max-age=0"/>
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="expires" content="0"/>
        <meta http-equiv="pragma" content="no-cache"/>
        <link rel="shortcut icon" href="<?=$assets?>images/icon.png"/>
        <link rel="stylesheet" href="<?=$assets?>styles/theme.css" type="text/css"/>
        <style type="text/css" media="all">
            body { color: #000; }
            #wrapper { max-width: 480px; margin: 0 auto; padding-top: 20px; }
            .btn { border-radius: 0; margin-bottom: 5px; }
            .bootbox .modal-footer { border-top: 0; text-align: center; }
            h3 { margin: 5px 0; }
            .order_barcodes img { float: none !important; margin-top: 5px; }
            @media print {
                .no-print { display: none; }
                #wrapper { max-width: 480px; width: 100%; min-width: 250px; margin: 0 auto; }
                .no-border { border: none !important; }
                .border-bottom { border-bottom: 1px solid #ddd !important; }
                table tfoot { display: table-row-group; }
            }
        </style>
    </head>

    <body>
 <?php
    } ?>
	
	
<?php

$ruc = $customer->vat_no;



if (strlen($ruc) > 1){

$ruta = "https://api.nubefact.com/api/v1/7615e011-d99a-412e-86e4-dd37479f52f4";

$token = "0f118dbb4f0744678a4316ebe50639de8867743d56fc48aabd35f251233b9390";

 $direc = $customer->company;
 $adrs = $customer->address;
 $numero =  str_replace("SALE/POS", "", $inv->reference_no);
 $emailanta = $customer->email;
 $totales = $this->sma->$return_sale ? (($inv->total )+($return_sale->total )) : ($inv->total );
 $totaligv = $this->sma->$return_sale ? (($inv->product_tax)+($return_sale->product_tax )) : ($inv->product_tax );
 $totalconigv =  $this->sma->$return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding);
 
 

if (strlen($ruc) === 8){
    $tipod = "2";
	$seried = "BBB1";
	$tdedo = "1";
	$txtfe = "Boleta";
} 
elseif (strlen($ruc) === 11) {
   $tipod = "1";
   $seried = "FFF1";
   $txtfe = "Factura";
   $tdedo = "6";
}
else 
{
    $tipod = "error";
	$seried = "error";
	$txtfe = "Ticket";
	$tdedo = "error";
}





$array_final = array();

foreach ($rows as $key => $object) {

$productypes =  $object->product_type;
 $tipodes = str_replace(array("standard","service"), array("NIU","ZZ") , $productypes);	
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
    "documento_que_se_modifica_tipo"    => "",
    "documento_que_se_modifica_serie"   => "",
    "documento_que_se_modifica_numero"  => "",
    "tipo_de_nota_de_credito"           => "",
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

 

 

?>

	<?php

$consutlasunat = array(
    "operacion"				=> "consultar_comprobante",
    "tipo_de_comprobante"               => $tipod ,
    "serie"                             => $seried,
    "numero"				=> $numero,  
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


$leer_respuesta = json_decode($respuesta, true);

if (isset($leer_respuesta['errors'])) {
		
$codigoqrsunat = "SIN CÓDIGO QR SUNAT";
} else {
		
	$codigoqrsunat = $leer_respuesta['cadena_para_codigo_qr'];
	$aceptadaporsunat = $leer_respuesta['aceptada_por_sunat'];
	
	
	
}






if (empty($aceptadaporsunat)){
	$fuenviadosunat = " - Ticket Interno";
} 

elseif ($aceptadaporsunat = true){
	$fuenviadosunat = " - Enviado a la Sunat";
} 

else 
{
	$fuenviadosunat = " error";
}

} 

else {
		

	$fuenviadosunat = " Ticket Interno";
	
	
}



?>
	
       
    <div id="wrapper">
	 <div id="buttons"  class="no-print">
                          <?php
                if ($message) {
                    ?>
                    <div class="alert alert-success">
					
					<a data-dismiss="alert" class="close" href="<?= admin_url('pos'); ?>">×</a>
                      
                        <?=is_array($message) ? print_r($message, true) : $message . $fuenviadosunat ;?><br>
					
						
                    </div>
                    <?php
                } ?>
       			
            <?php
            if ($modal) {
                ?>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <?php
                        if ($pos->remote_printing == 1) {
                            echo '<button onclick="window.print();" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                        } else {
                            echo '<button onclick="return printReceipt()" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                        }

                        ?>
                    </div>
                    <div class="btn-group" role="group">
                        <a class="btn btn-block btn-success" href="#" id="email"><?= "Email"; ?></a>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?='Cerrar'; ?></button>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <span class="pull-right col-xs-12" style=" width: 33% !important;" >
                    <?php
                    if ($pos->remote_printing == 1) {
                        echo '<button onclick="window.print();" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                    } else {
                        echo '<button onclick="return printReceipt()" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                        echo '<button onclick="return openCashDrawer()" class="btn btn-block btn-default">'."Abrir Gaveta de Dinero".'</button>';
                    }
                    ?>
                </span>
                <span class="pull-right col-xs-12" style=" width: 33% !important;"><a class="btn btn-block btn-success" href="#" id="email"><?= "Email"; ?></a></span>
                <span class="pull-right col-xs-12" style=" width: 33% !important;">
                    <a class="btn btn-block btn-warning" href="<?= admin_url('pos'); ?>"><?= "Regresar al POS"; ?></a>
                </span>
                <?php
            }
            if ($pos->remote_printing == 1) {
                ?>
            
                <?php
            } ?>
            <div style="clear:both;"></div>
        </div>
		
        <div id="receiptData">
            
            <div id="receipt-data">
                <div class="text-center">
                    <?= !empty($biller->logo) ? '<img src="'.base_url('assets/uploads/logos/'.$biller->logo).'" alt="">' : ''; ?>
                    <h3 style="text-transform:uppercase;"><?=$biller->company != '-' ? $biller->company : $biller->name;?></h3>
                    <?php
                    echo "<p>" . $biller->address . " " . $biller->city . " " . $biller->postal_code . " " . $biller->state . " " . $biller->country .
                    "<br>" . "Teléfono" . ": " . $biller->phone;

                    // comment or remove these extra info if you don't need
                    if (!empty($biller->cf1) && $biller->cf1 != "-") {
                        echo "<br>" . "BCF1" . ": " . $biller->cf1;
                    }
                    if (!empty($biller->cf2) && $biller->cf2 != "-") {
                        echo "<br>" . "BCF2" . ": " . $biller->cf2;
                    }
                    if (!empty($biller->cf3) && $biller->cf3 != "-") {
                        echo "<br>" . "BCF3" . ": " . $biller->cf3;
                    }
                    if (!empty($biller->cf4) && $biller->cf4 != "-") {
                        echo "<br>" . "BCF4" . ": " . $biller->cf4;
                    }
                    if (!empty($biller->cf5) && $biller->cf5 != "-") {
                        echo "<br>" . "BCF5" . ": " . $biller->cf5;
                    }
                    if (!empty($biller->cf6) && $biller->cf6 != "-") {
                        echo "<br>" . "BCF6" . ": " . $biller->cf6;
                    }
                    // end of the customer fields

                    echo "<br>";
                    if ($pos_settings->cf_title1 != "" && $pos_settings->cf_value1 != "") {
                        echo $pos_settings->cf_title1 . ": " . $pos_settings->cf_value1 . "<br>";
                    }
                    if ($pos_settings->cf_title2 != "" && $pos_settings->cf_value2 != "") {
                        echo $pos_settings->cf_title2 . ": " . $pos_settings->cf_value2 . "<br>";
                    }
                    echo '</p>';
                    ?>
                </div>
                <?php
                if ($Settings->invoice_view == 1 || $Settings->indian_gst) {
                    ?>
                    <div class="col-sm-12 text-center">
                        <h4 style="font-weight:bold;"><?='Impuesto';?></h4>
                    </div>
                    <?php
                }
                echo "<p>" ."Fecha" . ": " . $this->sma->hrld($inv->date) . "<br>";
                echo $txtfe . ": " .  $numero . $fuenviadosunat . "<br>";
                if (!empty($inv->return_sale_ref)) {
                    echo '<p>'."Número de Referencia".': '.$inv->return_sale_ref;
                    if ($inv->return_id) {
                        echo ' <a data-target="#myModal2" data-toggle="modal" href="'.admin_url('sales/modal_view/'.$inv->return_id).'"><i class="fa fa-external-link no-print"></i></a><br>';
                    } else {
                        echo '</p>';
                    }
                }
                echo "Vendedor" . ": " . $created_by->first_name." ".$created_by->last_name . "</p>";
                echo "<p>";
                echo "Cliente" . ": " . ($customer->company && $customer->company != '-' ? $customer->company : $customer->name) . "<br>";
				echo "Número de RUC" . ": " . $customer->vat_no . "<br>";
				echo "Dirección" . ": " . $customer->address . "<br>";
               
			   if ($pos_settings->customer_details) {
                   
                    echo "Teléfono" . ": " . $customer->phone . "<br>";
					echo "Email" . ": " . $customer->email . "<br>";
                    echo $customer->city ." ".$customer->state." ".$customer->country ."<br>";
                    if (!empty($customer->cf1) && $customer->cf1 != "-") {
                        echo "<br>" . "CCF1" . ": " . $customer->cf1;
                    }
                    if (!empty($customer->cf2) && $customer->cf2 != "-") {
                        echo "<br>" . "CCF2" . ": " . $customer->cf2;
                    }
                    if (!empty($customer->cf3) && $customer->cf3 != "-") {
                        echo "<br>" . "CCF3" . ": " . $customer->cf3;
                    }
                    if (!empty($customer->cf4) && $customer->cf4 != "-") {
                        echo "<br>" . "CCF4" . ": " . $customer->cf4;
                    }
                    if (!empty($customer->cf5) && $customer->cf5 != "-") {
                        echo "<br>" . "CCF5" . ": " . $customer->cf5;
                    }
                    if (!empty($customer->cf6) && $customer->cf6 != "-") {
                        echo "<br>" . "CCF6" . ": " . $customer->cf6;
                    }
                }
                echo "</p>";
                ?>

                <div style="clear:both;"></div>
                <table class="table table-condensed">
                    <tbody>
                        <?php
                        $r = 1; $category = 0;
                        $tax_summary = array();
                        foreach ($rows as $row) {
                            if ($pos_settings->item_order == 1 && $category != $row->category_id) {
                                $category = $row->category_id;
                                echo '<tr><td colspan="100%" class="no-border"><strong>'.$row->category_name.'</strong></td></tr>';
                            }
                            echo '<tr><td colspan="2" class="no-border">#' . $r . ': &nbsp;&nbsp;' . product_name($row->product_name, ($printer ? $printer->char_per_line : null)) . ($row->variant ? ' (' . $row->variant . ')' : '') . '<span class="pull-right">' . ($row->tax_code ? '*'.$row->tax_code : '') . '</span></td></tr>';
                            if (!empty($row->second_name)) {
                                echo '<tr><td colspan="2" class="no-border">'.$row->second_name.'</td></tr>';
                            }
                            echo '<tr><td class="no-border border-bottom">' . $this->sma->formatQuantity($row->unit_quantity) . ' x '.$this->sma->formatMoney($row->unit_price).($row->item_tax != 0 ? ' - '."Impuesto".' <small>('.($Settings->indian_gst ? $row->tax : $row->tax_code).')</small> '.$this->sma->formatMoney($row->item_tax).' ('."N° de Serie".': '.$row->serial_no.')' : '').'</td><td class="no-border border-bottom text-right">' . $this->sma->formatMoney($row->subtotal) . '</td></tr>';

                            $r++;
                        }
                        if ($return_rows) {
                            echo '<tr class="warning"><td colspan="100%" class="no-border"><strong>'."Devoluciones".'</strong></td></tr>';
                            foreach ($return_rows as $row) {
                                if ($pos_settings->item_order == 1 && $category != $row->category_id) {
                                    $category = $row->category_id;
                                    echo '<tr><td colspan="100%" class="no-border"><strong>'.$row->category_name.'</strong></td></tr>';
                                }
                                echo '<tr><td colspan="2" class="no-border">#' . $r . ': &nbsp;&nbsp;' . product_name($row->product_name, ($printer ? $printer->char_per_line : null)) . ($row->variant ? ' (' . $row->variant . ')' : '') . '<span class="pull-right">' . ($row->tax_code ? '*'.$row->tax_code : '') . '</span></td></tr>';
                                echo '<tr><td class="no-border border-bottom">' . $this->sma->formatQuantity($row->unit_quantity) . ' x '.$this->sma->formatMoney($row->unit_price).($row->item_tax != 0 ? ' - '."Impuesto".' <small>('.($Settings->indian_gst ? $row->tax : $row->tax_code).')</small> '.$this->sma->formatMoney($row->item_tax).' ('.'Código HSN'.': '.$row->hsn_code.')' : '').'</td><td class="no-border border-bottom text-right">' . $this->sma->formatMoney($row->subtotal) . '</td></tr>';

                                // echo '<tr><td class="no-border border-bottom">' . $this->sma->formatQuantity($row->quantity) . ' x ';
                                // if ($row->item_discount != 0) {
                                //     echo '<del>' . $this->sma->formatMoney($row->net_unit_price + ($row->item_discount / $row->quantity) + ($row->item_tax / $row->quantity)) . '</del> ';
                                // }
                                // echo $this->sma->formatMoney($row->net_unit_price + ($row->item_tax / $row->quantity)) . '</td><td class="no-border border-bottom text-right">' . $this->sma->formatMoney($row->subtotal) . '</td></tr>';
                                $r++;
                            }
                        }

                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><?="Total";?></th>
                            <th class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->total )+($return_sale->total )) : ($inv->total ));?></th>
                        </tr>
						<tr>
                            <th><?="Impuesto";?></th>
                            <th class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->product_tax)+($return_sale->product_tax )) : ($inv->product_tax ));?></th>
                        </tr>
                        <?php
                        if ($inv->order_tax != 0) {
                            echo '<tr><th>' . "Impuesto" . '</th><th class="text-right">' . $this->sma->formatMoney($return_sale ? ($inv->order_tax+$return_sale->order_tax) : $inv->order_tax) . '</th></tr>';
                        }
                        if ($inv->order_discount != 0) {
                            echo '<tr><th>' . "Descuento de la Orden" . '</th><th class="text-right">' . $this->sma->formatMoney($inv->order_discount) . '</th></tr>';
                        }

                        if ($inv->shipping != 0) {
                            echo '<tr><th>' . "Delivery" . '</th><th class="text-right">' . $this->sma->formatMoney($inv->shipping) . '</th></tr>';
                        }

                        if ($return_sale) {
                            if ($return_sale->surcharge != 0) {
                                echo '<tr><th>' . "Descuento de la Orden" . '</th><th class="text-right">' . $this->sma->formatMoney($return_sale->surcharge) . '</th></tr>';
                            }
                        }

                        if ($Settings->indian_gst) {
                            if ($inv->cgst > 0) {
                                $cgst = $return_sale ? $inv->cgst + $return_sale->cgst : $inv->cgst;
                                echo '<tr><td>' . 'CGST' .'</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($cgst) : $cgst) . '</td></tr>';
                            }
                            if ($inv->sgst > 0) {
                                $sgst = $return_sale ? $inv->sgst + $return_sale->sgst : $inv->sgst;
                                echo '<tr><td>' . 'SGST' .'</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($sgst) : $sgst) . '</td></tr>';
                            }
                            if ($inv->igst > 0) {
                                $igst = $return_sale ? $inv->igst + $return_sale->igst : $inv->igst;
                                echo '<tr><td>' . 'IGST' .'</td><td class="text-right">' . ( $Settings->format_gst ? $this->sma->formatMoney($igst) : $igst) . '</td></tr>';
                            }
                        }

                        if ($pos_settings->rounding || $inv->rounding != 0) {
                            ?>
                            <tr>
                                <th><?="Redondeo";?></th>
                                <th class="text-right"><?= $this->sma->formatMoney($inv->rounding);?></th>
                            </tr>
                            <tr>
                                <th><?="Total";?></th>
                                <th class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding));?></th>
                            </tr>
                            <?php
                        } else {
                            ?>
                            <tr>
                                <th><?="Total";?></th>
                                <th class="text-right"><?=$this->sma->formatMoney($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total);?></th>
                            </tr>
                            <?php
                        }
                        if ($inv->paid < ($inv->grand_total + $inv->rounding)) {
                            ?>
                            <tr>
                                <th><?="Monto Pagado";?></th>
                                <th class="text-right"><?=$this->sma->formatMoney($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid);?></th>
                            </tr>
                            <tr>
                                <th>Monto en Deuda</th>
                                <th class="text-right"><?=$this->sma->formatMoney(($return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding)) - ($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid));?></th>
                            </tr>
                            <?php
                        } ?>
                    </tfoot>
                </table>
                <?php
                if ($payments) {
                    echo '<table class="table table-striped table-condensed"><tbody>';
                    foreach ($payments as $payment) {
                        echo '<tr>';
                        if (($payment->paid_by == 'cash' || $payment->paid_by == 'deposit') && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Cambio" . ': ' . ($payment->pos_balance > 0 ? $this->sma->formatMoney($payment->pos_balance) : 0) . '</td>';
                        } elseif (($payment->paid_by == 'CC' || $payment->paid_by == 'ppp' || $payment->paid_by == 'stripe') && $payment->cc_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "No" . ': ' . 'xxxx xxxx xxxx ' . substr($payment->cc_no, -4) . '</td>';
                            echo '<td>' . "Nombre" . ': ' . $payment->cc_holder . '</td>';
                        } elseif ($payment->paid_by == 'Cheque' && $payment->cheque_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Cheque N°" . ': ' . $payment->cheque_no . '</td>';
                        } elseif ($payment->paid_by == 'gift_card' && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "No" . ': ' . $payment->cc_no . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Balance" . ': ' . $this->sma->formatMoney($this->sma->getCardBalance($payment->cc_no)) . '</td>';
                        } elseif ($payment->paid_by == 'other' && $payment->amount) {
                            echo '<td colspan="2">' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo $payment->note ? '</tr><td colspan="4">' . "Nota de Pago" . ': ' . $payment->note . '</td>' : '';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                }

                if ($return_payments) {
                    echo '<strong>'.'Retornar Pagos'.'</strong><table class="table table-striped table-condensed"><tbody>';
                    foreach ($return_payments as $payment) {
                        $payment->amount = (0-$payment->amount);
                        echo '<tr>';
                        if (($payment->paid_by == 'cash' || $payment->paid_by == 'deposit') && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Cambio" . ': ' . ($payment->pos_balance > 0 ? $this->sma->formatMoney($payment->pos_balance) : 0) . '</td>';
                        } elseif (($payment->paid_by == 'CC' || $payment->paid_by == 'ppp' || $payment->paid_by == 'stripe') && $payment->cc_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "No" . ': ' . 'xxxx xxxx xxxx ' . substr($payment->cc_no, -4) . '</td>';
                            echo '<td>' . "Nombre" . ': ' . $payment->cc_holder . '</td>';
                        } elseif ($payment->paid_by == 'Cheque' && $payment->cheque_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Cheque N°" . ': ' . $payment->cheque_no . '</td>';
                        } elseif ($payment->paid_by == 'gift_card' && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "No" . ': ' . $payment->cc_no . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo '<td>' . "Balance" . ': ' . $this->sma->formatMoney($this->sma->getCardBalance($payment->cc_no)) . '</td>';
                        } elseif ($payment->paid_by == 'other' && $payment->amount) {
                            echo '<td colspan="2">' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devuelto' . ')' : '') . '</td>';
                            echo $payment->note ? '</tr><td colspan="4">' . "Nota de Pago" . ': ' . $payment->note . '</td>' : '';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                }
                ?>

                <?= $Settings->invoice_view > 0 ? $this->gst->summary($rows, $return_rows, ($return_sale ? $inv->product_tax+$return_sale->product_tax : $inv->product_tax)) : ''; ?>

                <?= $customer->award_points != 0 && $Settings->each_spent > 0 ? '<p class="text-center">'.'Esta Venta'.': '.floor(($inv->grand_total/$Settings->each_spent)*$Settings->ca_point)
                .'<br>'.
                'Total'.' '.'Puntos Bonus'.': '. $customer->award_points . '</p>' : ''; ?>
                <?= $inv->note ? '<p class="text-center">' . $this->sma->decode_html($inv->note) . '</p>' : ''; ?>
                <?= $inv->staff_note ? '<p class="no-print"><strong>' . 'Notas del Vendedor' . ':</strong> ' . $this->sma->decode_html($inv->staff_note) . '</p>' : ''; ?>
                <?= $biller->invoice_footer ? '<p class="text-center">'.$this->sma->decode_html($biller->invoice_footer).'</p>' : ''; ?>
            </div>

             <div class="order_barcodes text-center">
                <br>
				

                <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $codigoqrsunat ?>" title="Codigo qr" /> 
				
				
            </div><center><?php echo $codigoqrsunat ?></center>
            <div style="clear:both;"></div>
        </div>

       
    </div>

    <?php
    if( ! $modal) {
        ?>
        <script type="text/javascript" src="<?= $assets ?>js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>js/custom.js"></script>
        <?php
    }
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#email').click(function () {
                bootbox.prompt({
                    title: "<?= "Email"; ?>",
                    inputType: 'email',
                    value: "<?= $customer->email; ?>",
                    callback: function (email) {
                        if (email != null) {
                            $.ajax({
                                type: "post",
                                url: "<?= admin_url('pos/email_receipt') ?>",
                                data: {<?= $this->security->get_csrf_token_name(); ?>: "<?= $this->security->get_csrf_hash(); ?>", email: email, id: <?= $inv->id; ?>},
                                dataType: "json",
                                success: function (data) {
                                    bootbox.alert({message: data.msg, size: 'small'});
                                },
                                error: function () {
                                    bootbox.alert({message: '<?= 'Solicitud Ajax Fallida'; ?>', size: 'small'});
                                    return false;
                                }
                            });
                        }
                    }
                });
                return false;
            });
        });

        <?php
        if ($pos_settings->remote_printing == 1) {
            ?>
            $(window).load(function () {
                window.print();
                return false;
            });
            <?php
        }
        ?>

    </script>
    <?php /* include FCPATH.'themes'.DIRECTORY_SEPARATOR.$Settings->theme.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'pos'.DIRECTORY_SEPARATOR.'remote_printing.php'; */ ?>
    <?php include 'remote_printing.php'; ?>
    <?php
    if($modal) {
        ?>
    </div>
</div>
</div>
<?php
} else {
    ?>
</body>
</html>
<?php
}
?>


