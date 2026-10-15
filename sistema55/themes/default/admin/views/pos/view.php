<?php defined('BASEPATH') OR exit('No tienes permitido acceder aquí'); 

?>

<?php 

if ($modal) { ?>
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
  
        <link rel="shortcut icon" href="<?=$assets?>images/icon.png"/>
        <link rel="stylesheet" href="<?=$assets?>styles/theme.css" type="text/css"/>
<style type="text/css" media="all">
    /* General */
    body { 
        color: #000; 
        font-family: Arial, sans-serif; 
        font-size: 13px; 
        line-height: 1.25; 
        margin: 0; 
        padding: 0; 
        background: #fff;
    }

    #wrapper { 
        max-width: 400px; 
        margin: 0 auto; 
        padding: 8px 10px; 
        background: #fff; 
        border: 1px solid #e0e0e0; 
        border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    h3, h4, h5 { 
        margin: 2px 0; 
        font-weight: 600; 
        color: #333;
    }

    p, span { 
        margin: 2px 0; 
        font-size: 12px; 
        color: #444;
    }

    a { 
        color: #1a73e8; 
        text-decoration: none; 
    }

    /* Botones */
    .btn { 
        border-radius: 12px; 
        margin-bottom: 3px; 
        padding: 4px 10px; 
        font-size: 12px; 
        background-color: #1a73e8; 
        color: #fff; 
        border: none; 
        cursor: pointer; 
        transition: background 0.3s ease;
    }

    .btn:hover {
        background-color: #155ab6;
    }

    .bootbox .modal-footer { 
        border-top: 0; 
        text-align: center; 
        padding-top: 4px; 
    }

    /* QR y códigos de barra */
    .order_barcodes img { 
        float: none !important; 
        margin: 4px auto; 
        display: block; 
        max-width: 150px; 
    }

    /* Bordes y tablas */
    .no-border { border: none !important; }
    .border-bottom { border-bottom: 1px solid #ddd !important; margin-bottom: 3px; }

    table { 
        width: 100%; 
        border-collapse: collapse; 
        margin-bottom: 3px; 
    }

    table th, table td { 
        padding: 2px 4px; 
        font-size: 12px; 
        text-align: left; 
        color: #333;
    }

    /* Bloques separados con borde */
    .block { 
        border: 1px solid #ddd; 
        padding: 6px 8px; 
        margin-bottom: 6px; 
        border-radius: 4px;
        background-color: #fafafa;
    }

    /* Print */
    @media print {
        .no-print { display: none; }
        #wrapper { 
            max-width: 400px; 
            width: 100%; 
            min-width: 250px; 
            margin: 0 auto; 
            padding: 5px; 
            border: none;
            box-shadow: none;
        }
        .block { border: 1px solid #ddd; } 
        table tfoot { display: table-row-group; }
    }
</style>

    </head>

    <body>
 <?php
    } ?>
	<?php
	require_once 'ruc.php'; 
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
					<?php
					echo $tablassyma;
					?>
					
                    <div class="btn-group" role="group" style="width:28%">
                        <?php
                        if ($pos->remote_printing === 1) {
                            echo '<button onclick="window.print();" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                        } else {
                            echo '<button onclick="return printReceipt()" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                        }

                        ?>
                    </div>
                    <div class="btn-group" role="group"  style="width:26%">
                        <a class="btn btn-block btn-success" href="#" id="email"><?= "Email"; ?></a>
                    </div>
                    <div class="btn-group" role="group"  style="width:26%">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?='Cerrar'; ?></button>
                    </div>
					
				
					
                </div>
                <?php
            } else {
                ?>
                <span class="pull-right col-xs-12" style=" width: 33% !important;" >
                    <?php
                        echo '<button onclick="window.print();" class="btn btn-block btn-primary">'."Imprimir".'</button>';
                    ?>
                </span>
                <span class="pull-right col-xs-12" style=" width: 33% !important;"><a class="btn btn-block btn-success" href="#" id="email"><?= "Email"; ?></a></span>
                <span class="pull-right col-xs-12" style=" width: 33% !important;">
                    <a class="btn btn-block btn-warning" href="<?= admin_url('pos'); ?>"><?= "Regresar al POS"; ?></a>
                </span>
                <?php
            }
            if ($pos->remote_printing === 1) {
                ?>
            
                <?php
            } ?>
            
            
              <?php
              
              
              
             
            
              
            ?>
            
            
            
            <div style="clear:both;"></div>
        </div>
		
        <div id="receiptData">
         
            <div id="receipt-data">
                <div class="text-center">
                   <?= !empty($biller->logo) ? '<img src="'.base_url('assets/uploads/logos/'.$biller->logo).'" alt="">' : ''; ?>
                   <?php echo "<br>"; ?>
                   <?php echo "".$biller->name."<br>" ;
                    
                    echo "Dirección: ". $biller->address . " " . $biller->city . " " . $biller->postal_code . " " . $biller->state . " "  ;

                    // comment or remove these extra info if you don't need
                    if (!empty($biller->cf1) && $biller->cf1 != "-") {
                    echo "<br>" . "Ruc" . ": " . $biller->vat_no."<br>";
                    echo "Tienda: ".$biller->cf3."<br>"  ;    
                    }
                  
                    // end of the customer fields

                   
                    if ($pos_settings->cf_title1 != "" && $pos_settings->cf_value1 != "") {
                        echo $pos_settings->cf_title1 . ": " . $pos_settings->cf_value1 . "<br>";
                    }
                    if ($pos_settings->cf_title2 != "" && $pos_settings->cf_value2 != "") {
                        echo $pos_settings->cf_title2 . ": " . $pos_settings->cf_value2 . "<br>";
                    }
                    

                            echo "Fecha" . ": " . $this->sma->hrld($inv->date) . "<br>";
                            //var_dump($biller);
                echo $txtfe  ."<br>";
                echo "<strong>".$referencefactura. $fuenviadosunat . "</strong>"."<br>";
                if (!empty($inv->return_sale_ref)) {
                    echo "Número de Referencia".': '.$inv->return_sale_ref;
                    if ($inv->return_id) {
                        echo ' <a data-target="#myModal2" data-toggle="modal" href="'.admin_url('sales/modal_view/'.$inv->return_id).'"><i class="fa fa-external-link no-print"></i></a><br>';
                    } else {
                                        }
                }
                    ?>
                </div>
                <?php
               
                echo "Vendedor" . ": " . $created_by->first_name."<br> ";
                echo "Cliente" . ": " . ($customer->company && $customer->company != '-' ? $customer->company : $customer->name) . "<br>";
				echo $tipodedocumento. $customer->vat_no . "<br>";
				echo "Dirección" . ": " . $customer->address ;
            
			   if ($pos_settings->customer_details) {
                    echo $customer->city ." ".$customer->state." ".$customer->country ."<br>";                   
                }
                
                ?>

                <div style="clear:both;"></div>
                <table >
                    <tbody>
					<tr>
					<td class="text-center" ><h6>ITEM</h6></td>
					<td class="text-center" ><h6>PRODUCTO</h6></td>
					<td class="text-center" ><h6>CANT</h6></td>
					<td class="text-right" ><h6>PRECIO</h6></td>
					</tr>
					
					

					<?php
function sync_log($msg) {
    $path = __DIR__ . '/sync_stock_debug.log'; // Archivo de log en el mismo directorio
    $time = date('Y-m-d H:i:s');
    file_put_contents($path, "[$time] $msg\n", FILE_APPEND);
}

// === CONSULTA SI LA VENTA YA FUE REGISTRADA EN LA TABLA `web` ===
function consultaweb($referenciaweb) {
    $conexion = mysqli_connect("localhost", "kaiman_sistema", "kaiman_sistema", "kaiman_sistema");
    mysqli_set_charset($conexion, 'utf8');

    if (!$conexion) {
        sync_log("❌ consultaweb: Error conexión SYMA: " . mysqli_connect_error());
        return null;
    }

    $respuesta = mysqli_query($conexion, "SELECT id as id FROM web WHERE idventa='$referenciaweb'");
    $cod = null;
    foreach ($respuesta as $respu) {
        $cod = $respu['id'];
    }
    mysqli_close($conexion);

    if ($cod) {
        sync_log("✅ consultaweb: venta encontrada ID=$cod para ref=$referenciaweb");
    } else {
        sync_log("ℹ️ consultaweb: no existe venta previa para ref=$referenciaweb");
    }

    return $cod;
}

$webi = consultaweb($inv->id);

if (isset($webi)) {
    sync_log("Venta {$inv->id} ya sincronizada previamente. No se repite proceso.");
} else {
    // === INSERTAR NUEVA VENTA EN TABLA WEB ===
    function insertweb($ideweb) {
        $conexion = mysqli_connect("localhost", "kaiman_sistema", "kaiman_sistema", "kaiman_sistema");
        mysqli_set_charset($conexion, 'utf8');

        if (!$conexion) {
            sync_log("❌ insertweb: Error conexión SYMA: " . mysqli_connect_error());
            return;
        }

        $ok = mysqli_query($conexion, "INSERT INTO web (idventa) VALUES('$ideweb')");
        mysqli_close($conexion);

        if ($ok) sync_log("✅ insertweb: Venta $ideweb insertada correctamente en tabla web");
        else sync_log("⚠️ insertweb: Fallo al insertar venta $ideweb");
    }

    insertweb($inv->id);

    // === OBTENER STOCK DEL SISTEMA ===
    function stocksistema($codigosistema) {
        $conexion = mysqli_connect("localhost", "kaiman_sistema", "kaiman_sistema", "kaiman_sistema");
        mysqli_set_charset($conexion, 'utf8');
        if (!$conexion) {
            sync_log("❌ stocksistema: Error conexión SYMA: " . mysqli_connect_error());
            return 0;
        }

        $respuesta = mysqli_query($conexion, "SELECT quantity FROM sma_products WHERE code='$codigosistema'");
        $stocksistema = 0;
        foreach ($respuesta as $respu) {
            $stocksistema = $respu['quantity'];
        }
        mysqli_close($conexion);
        sync_log("📦 stocksistema: SKU=$codigosistema => stock=$stocksistema");
        return $stocksistema;
    }

    // === OBTENER ID DEL PRODUCTO EN WORDPRESS ===
    function actualizaweb($code) {
        $conexion = mysqli_connect("localhost", "wp833", "@E315dcSfb.2(-p!", "wp833");
        mysqli_set_charset($conexion, 'utf8');
        if (!$conexion) {
            sync_log("❌ actualizaweb: Error conexión WP: " . mysqli_connect_error());
            return null;
        }

        $respuesta = mysqli_query($conexion, "SELECT product_id as codigo FROM wpj9_wc_product_meta_lookup WHERE sku='$code'");
        $codigoweb = null;
        foreach ($respuesta as $respu) {
            $codigoweb = $respu['codigo'];
        }
        mysqli_close($conexion);

        if ($codigoweb)
            sync_log("✅ actualizaweb: SKU=$code => product_id=$codigoweb");
        else
            sync_log("⚠️ actualizaweb: No se encontró product_id para SKU=$code");

        return $codigoweb;
    }

    // === ACTUALIZAR STOCK EN WORDPRESS ===
    function actualizastockweb($idventa, $cantidad) {
        $conexion = mysqli_connect("localhost", "wp833", "@E315dcSfb.2(-p!", "wp833");
        mysqli_set_charset($conexion, 'utf8');
        if (!$conexion) {
            sync_log("❌ actualizastockweb: Error conexión WP: " . mysqli_connect_error());
            return false;
        }

        $ok = mysqli_query($conexion, "UPDATE wpj9_postmeta SET meta_value='$cantidad' WHERE post_id='$idventa' AND meta_key='_stock'");
        mysqli_close($conexion);

        if ($ok) sync_log("✅ actualizastockweb: Stock actualizado => post_id=$idventa, cantidad=$cantidad");
        else sync_log("⚠️ actualizastockweb: Fallo al actualizar stock para post_id=$idventa");

        return $ok;
    }

    // === RECORRER PRODUCTOS DE LA VENTA ===
    foreach ($rows as $rowi) {
        $sku = $rowi->product_code;
        sync_log("➡️ Procesando SKU=$sku");

        $idvent = actualizaweb($sku);
        $stockfinal = stocksistema($sku);

        if ($idvent) {
            actualizastockweb($idvent, $stockfinal);
        } else {
            sync_log("⚠️ No se pudo actualizar SKU=$sku (sin product_id en WP)");
        }
    }

    sync_log("✅ Sincronización finalizada para venta {$inv->id}");
}
sync_log("=== 🔄 Inicio sincronización general ===");

$conexion_syma = mysqli_connect("localhost", "kaiman_sistema", "kaiman_sistema", "kaiman_sistema");
if (!$conexion_syma) {
    sync_log("❌ No se pudo conectar a SYMA: " . mysqli_connect_error());
    return;
}
mysqli_set_charset($conexion_syma, 'utf8');

$conexion_wp = mysqli_connect("localhost", "wp833", "@E315dcSfb.2(-p!", "wp833");
if (!$conexion_wp) {
    sync_log("❌ No se pudo conectar a WordPress: " . mysqli_connect_error());
    mysqli_close($conexion_syma);
    return;
}
mysqli_set_charset($conexion_wp, 'utf8');

// Obtener todos los códigos de productos desde SYMA
$query_syma = "SELECT code, quantity FROM sma_products";
$res_syma = mysqli_query($conexion_syma, $query_syma);

if ($res_syma && mysqli_num_rows($res_syma) > 0) {
    while ($prod = mysqli_fetch_assoc($res_syma)) {
        $sku = $prod['code'];
        $stock = (float)$prod['quantity'];

        // Buscar producto o variaciones en WP por SKU
        $res_wp = mysqli_query($conexion_wp, "SELECT product_id FROM wpj9_wc_product_meta_lookup WHERE sku='$sku'");
        if ($res_wp && mysqli_num_rows($res_wp) > 0) {
            while ($row = mysqli_fetch_assoc($res_wp)) {
                $pid = $row['product_id'];

                // Actualizar _stock
                $ok = mysqli_query($conexion_wp, "UPDATE wpj9_postmeta SET meta_value='$stock' WHERE post_id='$pid' AND meta_key='_stock'");
                if ($ok) {
                    sync_log("✅ Stock sincronizado SKU=$sku → product_id=$pid → $stock unidades");
                } else {
                    sync_log("⚠️ Error al actualizar SKU=$sku → product_id=$pid: " . mysqli_error($conexion_wp));
                }

                // Actualizar en wc_product_meta_lookup
                mysqli_query($conexion_wp, "UPDATE wpj9_posts SET post_modified = NOW() WHERE ID='$pid'");
sync_log("♻️ Producto $pid marcado como modificado para refrescar caché.");
mysqli_query($conexion_wp, "DELETE FROM wpj9_options WHERE option_name LIKE '%_transient_wc_%_$pid%'");
sync_log("🧼 Caché WooCommerce limpiada para producto $pid");
            }
        } else {
            sync_log("⚠️ SKU $sku no encontrado en WordPress");
        }
    }
    sync_log("✅ Sincronización general completada correctamente.");
} else {
    sync_log("⚠️ No se encontraron productos en SYMA para sincronizar.");
}

mysqli_close($conexion_syma);
mysqli_close($conexion_wp);

sync_log("=== 🏁 Fin sincronización general ===");
                            
                 //finaliza           

					
                        $r = 1; $category = 0;$uni=0;
                        $tax_summary = array();
                        foreach ($rows as $row) {
                            if ($pos_settings->item_order == 1 && $category != $row->category_id) {
                                $category = $row->category_id;
                                                   }
                            echo '<tr><td class="text-center" width="5%"> <h6> #' . $r . ':' .'</h6></td><td width="75%" class="text-center" ><h6>'."". $row->product_name."</h6>";
                         
                          
							 if (!empty($row->product_slug)) {
                                echo ' - '.$row->product_slug;
                            }
							

                            if (!empty($row->second_name)) {
                                echo ' - '. $row->second_name.'</td>';
                            }
							else {
								echo '</td>';
								}
                             echo '<td width="5%" class="text-center"> <h6>' . round($row->unit_quantity,1) . '</h6></td><td width="15%" class="text-right"><h6>' . $this->sma->formatMoney($row->subtotal) . '</h6></td></tr>';

                            $r++;
                            $uni=$uni+$row->unit_quantity;
                            //var_dump($row);
                        }
                        if ($return_rows) {
                            echo '<tr class="warning"><td colspan="100%" class="no-border"><strong>'."Devoluciones".'</strong></td></tr>';
                            foreach ($return_rows as $row) {
                                if ($pos_settings->item_order == 1 && $category != $row->category_id) {
                                    $category = $row->category_id;
                                   
                                }
                               echo '<tr><td class="text-center" width="5%"> <h6> #' . $r . ':' .'</h6></td><td width="75%" class="text-center" ><h6>'."". $row->product_name."</h6>";
       
							 if (!empty($row->product_slug)) {
                                echo ' - '.$row->product_slug;
                            }
							

                            if (!empty($row->second_name)) {
                                echo ' - '. $row->second_name.'</td>';
                            }
							else {
								echo '</td>';
								}
                             echo '<td width="5%" class="text-center"> <h6>' . $this->sma->formatQuantity($row->unit_quantity) . '</h6></td><td width="15%" class="text-right"><h6>' . $this->sma->formatMoney($row->subtotal) . '</h6></td></tr>';
                                $r++;
                            }
                        }

                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan=2><?="Subtotal";?></th>
                            <th colspan=3 class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->total )+($return_sale->total )) : ($inv->total ));?></th>
                        </tr>
						<tr>
                            <th colspan=2><?="IGV";?></th>
                            <th colspan=3 class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->product_tax)+($return_sale->product_tax )) : ($inv->product_tax ));?></th>
                        </tr>
                        <?php
                        if ($inv->order_tax != 0) {
                            echo '<tr><th colspan=2>' . "Impuesto" . '</th><th colspan=3 class="text-right">' . $this->sma->formatMoney($return_sale ? ($inv->order_tax+$return_sale->order_tax) : $inv->order_tax) . '</th></tr>';
                        }
                        if ($inv->order_discount != 0) {
                            echo '<tr><th colspan=2>' . "Descuento de la Orden" . '</th><th colspan=3 class="text-right">' . $this->sma->formatMoney($inv->order_discount) . '</th></tr>';
                        }

                        if ($inv->shipping != 0) {
                            echo '<tr><th colspan=2>' . "Delivery" . '</th><th colspan=3 class="text-right">' . $this->sma->formatMoney($inv->shipping) . '</th></tr>';
                        }

                        if ($return_sale) {
                            if ($return_sale->surcharge != 0) {
                                echo '<tr><th colspan=2>' . "Descuento de la Orden" . '</th><th colspan=3 class="text-right">' . $this->sma->formatMoney($return_sale->surcharge) . '</th></tr>';
                            }
                        }


                        if ($pos_settings->rounding || $inv->rounding != 0) {
                            ?>
                            <tr>
                                <th colspan=2><?="Redondeo";?></th>
                                <th colspan=3 class="text-right"><?= $this->sma->formatMoney($inv->rounding);?></th>
                            </tr>
                            <tr>
                                <th colspan=2 ><?="Total";?></th>
                                <th colspan=3  class="text-right"><?=$this->sma->formatMoney($return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding));?></th>
								
								
                            </tr>
                            <?php
                        } else {
                            ?>
                            <tr>
                                <th colspan=2><?="Total";?></th>
                                <th colspan=3 class="text-right"><?=$this->sma->formatMoney($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total);?>
								</th>
															
                            </tr>
							
							<tr>
							
							
							<th colspan=4 class="text-center" style="padding-bottom:5px"><?php
							require "conversor.php"; 
							
							$V=new EnLetras(); 
							$con_letra=strtoupper($V->ValorEnLetras($this->sma->$return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding),"")); 
							echo "<b>".str_replace('UN MIL', 'MIL', $con_letra)."</b>";  ?></th>
							<br>
							</tr>
                            <?php
                        }
                        if ($inv->paid < ($inv->grand_total + $inv->rounding)) {
                            ?>
                            <tr>
                                <th><?="Pagado";?></th>
                                <th class="text-right"><?=$this->sma->formatMoney($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid);?></th>
                            </tr>
                            <tr>
                                <th>Crédito</th>
                                <th class="text-right"><?=$this->sma->formatMoney(($return_sale ? (($inv->grand_total + $inv->rounding)+$return_sale->grand_total) : ($inv->grand_total + $inv->rounding)) - ($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid));?></th>
                            </tr>
                             <tr>
                                <th>Pares</th>
                                <th class="text-right"><?=$uni?></th>
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
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Cambio" . ': ' . ($payment->pos_balance > 0 ? $this->sma->formatMoney($payment->pos_balance) : 0) . '</td>';
                          echo '<td>' . "Pares" . ': ' . $uni . '</td>';
                        } elseif (($payment->paid_by == 'CC' || $payment->paid_by == 'ppp' || $payment->paid_by == 'stripe') && $payment->cc_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "No" . ': ' . 'xxxx xxxx xxxx ' . substr($payment->cc_no, -4) . '</td>';
                            echo '<td>' . "Nombre" . ': ' . $payment->cc_holder . '</td>';
                            echo '<td>' . "Pares" . ': ' . $uni . '</td>';
                        } elseif ($payment->paid_by == 'Cheque' && $payment->cheque_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Cheque N°" . ': ' . $payment->cheque_no . '</td>';
                            echo '<td>' . "Pares" . ': ' . $uni . '</td>';
                        } elseif ($payment->paid_by == 'gift_card' && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "No" . ': ' . $payment->cc_no . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Balance" . ': ' . $this->sma->formatMoney($this->sma->getCardBalance($payment->cc_no)) . '</td>';
                        echo '<td>' . "Pares" . ': ' . $uni . '</td>';
                        } elseif ($payment->paid_by == 'other' && $payment->amount) {
                            echo '<td colspan="2">' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo $payment->note ? '</tr><td colspan="4">' . "Nota de Pago" . ': ' . $payment->note . '</td>' : '';
                        echo '<td>' . "Pares" . ': ' . $uni . '</td>';
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
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Cambio" . ': ' . ($payment->pos_balance > 0 ? $this->sma->formatMoney($payment->pos_balance) : 0) . '</td>';
                        } elseif (($payment->paid_by == 'CC' || $payment->paid_by == 'ppp' || $payment->paid_by == 'stripe') && $payment->cc_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "No" . ': ' . 'xxxx xxxx xxxx ' . substr($payment->cc_no, -4) . '</td>';
                            echo '<td>' . "Nombre" . ': ' . $payment->cc_holder . '</td>';
                        } elseif ($payment->paid_by == 'Cheque' && $payment->cheque_no) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Cheque N°" . ': ' . $payment->cheque_no . '</td>';
                        } elseif ($payment->paid_by == 'gift_card' && $payment->pos_paid) {
                            echo '<td>' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td>' . "No" . ': ' . $payment->cc_no . '</td>';
                            echo '<td>' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Balance" . ': ' . $this->sma->formatMoney($this->sma->getCardBalance($payment->cc_no)) . '</td>';
                        } elseif ($payment->paid_by == 'other' && $payment->amount) {
                            echo '<td colspan="2">' . "Pagado por" . ': ' . lang($payment->paid_by) . '</td>';
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo $payment->note ? '</tr><td colspan="4">' . "Nota de Pago" . ': ' . $payment->note . '</td>' : '';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                }
                ?>

				
                <?= $Settings->invoice_view > 0 ? $this->gst->summary($rows, $return_rows, ($return_sale ? $inv->product_tax+$return_sale->product_tax : $inv->product_tax)) : ''; ?>

                <?= $customer->award_points != 0 && $Settings->each_spent > 0 ? '<p class="text-center">'.'Esta Venta'.': '.floor(($inv->grand_total/$Settings->each_spent)*$Settings->ca_point)
                .
                'Total'.' '.'Puntos Bonus'.': '. $customer->award_points . '</p>' : ''; ?>
                <?= $inv->note ? '<p class="text-center">' . $this->sma->decode_html($inv->note) . '</p>' : ''; ?>
                <?= $inv->staff_note ? '<p class="no-print"><strong>' . 'Notas del Vendedor' . ':</strong> ' . $this->sma->decode_html($inv->staff_note) . '</p>' : ''; ?>
 
            </div>
   <div class="order_barcodes text-center">
                         <?php echo $biller->invoice_footer; 
                        echo '<br>';

echo '
<div style="text-align:center;">
    Encuéntranos en Facebook / Instagram / TikTok como: kaimanwatch<br><br>
    ¡Gracias por tu compra!<br><br>
    La garantía cubre exclusivamente fallas de fábrica y permite cambios
    <strong>SIN NINGÚN TIPO DE USO</strong> dentro de un plazo máximo de 48 horas después de la compra.<br><br>
    No se aceptan devoluciones.<br><br>
    Contamos con servicio técnico disponible con costo adicional.
</div>
';

echo '<br>';

        
                         ?>
<img src="facebook.png" title="ant" height="70"/> 
    </div>
             <div class="order_barcodes text-center">
    <!--                    <?php echo $finalsyma; 	 echo '<br>';			
					
		
						 ?>
        -->               

        
<?php
// Contenido que irá al QR
$codigoqrsunat = "TU_TEXTO_O_URL_DEL_QR"; // aquí pones tu contenido real, por ejemplo el código de SUNAT

// URL del QR usando QuickChart
$qr_url = "https://quickchart.io/chart?cht=qr&chs=100x100&chl=" . urlencode($codigoqrsunat);
?>

<!-- Mostrar el QR -->
<img src="<?= $qr_url ?>" title="Código QR" alt="Código QR" />

<br>
<!-- Texto informativo -->
Representación impresa de la FACTURA ELECTRÓNICA, para ver el documento visita
<a href="https://micontador.pse.pe/20602659268">https://micontador.pse.pe/20602659268</a>
<br>
Emitido mediante un PROVEEDOR Autorizado por la SUNAT mediante Resolución de Intendencia No.034-005-0005315
  
    

   

    <?php
    if( ! $modal) {
        ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script> window.jQuery || document.write('<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js">\x3C/script>')</script> 
	<script> window.jQuery || document.write('<script src="<?=$assets?>js/jquery-2.2.4.min.js">\x3C/script>')</script> 
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script> window.bootstrap || document.write('<script type="text/javascript" src="<?=$assets?>js/bootstrap.min.js">\x3C/script>')</script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script> window.jquery || document.write('<script type="text/javascript" src="<?=$assets?>js/jquery.dataTables.min.js">\x3C/script>')</script>
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


