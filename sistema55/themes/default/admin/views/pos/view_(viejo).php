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
            <div style="clear:both;"></div>
        </div>
		
        <div id="receiptData">
         
            <div id="receipt-data">
                <div class="text-center">
                   <?  /* = !empty($biller->logo) ? '<img src="'.base_url('assets/uploads/logos/'.$biller->logo).'" alt="">' : ''; */?>
                   <?php echo "".$biller->company."<br>" ;
                    
                    echo "Dirección: ". $biller->address . " " . $biller->city . " " . $biller->postal_code . " " . $biller->state . " "  ;

                    // comment or remove these extra info if you don't need
                    if (!empty($biller->cf1) && $biller->cf1 != "-") {
                    echo "<br>" . "Ruc" . ": " . $biller->vat_no."<br>";
                        
                    }
                  
                    // end of the customer fields

                   
                    if ($pos_settings->cf_title1 != "" && $pos_settings->cf_value1 != "") {
                        echo $pos_settings->cf_title1 . ": " . $pos_settings->cf_value1 . "<br>";
                    }
                    if ($pos_settings->cf_title2 != "" && $pos_settings->cf_value2 != "") {
                        echo $pos_settings->cf_title2 . ": " . $pos_settings->cf_value2 . "<br>";
                    }
                    

                            echo "Fecha" . ": " . $this->sma->hrld($inv->date) . "<br>";
                            //var_dump($inv);
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
                            echo '<td colspan="2">' . "Monto a Pagar" . ': ' . $this->sma->formatMoney($payment->pos_paid == 0 ? $payment->amount : $payment->pos_paid) . ($payment->return_id ? ' (' . 'Devolución' . ')' : '') . '</td>';
                            echo '<td>' . "Cambio" . ': ' . ($payment->pos_balance > 0 ? $this->sma->formatMoney($payment->pos_balance) : 0) . '</td>';
                          echo '<td>' . "Items" . ': ' . $uni . '</td>';
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
                         <?php echo $finalsyma; 
						 
						 echo '<br>';
						
					
		
						 ?>

    <?/*= $this->sma->qrcode('link', $codigoqrsunat, 1); 
	*/

	?>
	<img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $codigoqrsunat ?>" title="Codigo qr" /> 
               


    </div>
   

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


